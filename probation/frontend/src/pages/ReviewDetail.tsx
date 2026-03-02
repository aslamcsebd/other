import React, { useState, useEffect } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import { ArrowLeft, Clock, Download, Building2, User, Calendar, Target, Pencil, FileText, History, Check, CircleCheck, Plus, X } from 'lucide-react';

const API = 'http://localhost/probation/backend/review-detail.php';
const ADD_API = 'http://localhost/probation/backend/add-objective.php';

interface Review {
  id: number; review_type: string; review_date: string;
  outcome: string | null; signed: boolean; notes: string | null;
  status: string; current_step: number;
}
interface Employee {
  name: string; email: string; department: string; position: string;
  manager_name: string; review_date: string; probation_end: string;
}
interface Objective {
  id: number; title: string; description: string; category: string;
  weight: number; score: number | null; self_score: number | null; target_date: string | null;
}

const STEPS = ['Scheduled', 'Objectives Set', 'In Progress', 'Signatures', 'Decision', 'Complete'];

const STATUS_CONFIG: Record<string, { label: string; bg: string; color: string; border: string }> = {
  scheduled:          { label: 'Scheduled',         bg: '#eff6ff', color: '#1d4ed8', border: '#bfdbfe' },
  in_progress:        { label: 'In Progress',        bg: '#f5f3ff', color: '#6d28d9', border: '#ddd6fe' },
  awaiting_signature: { label: 'Awaiting Signature', bg: '#fef3c7', color: '#92400e', border: '#fde68a' },
  completed:          { label: 'Completed',          bg: '#f0fdf4', color: '#15803d', border: '#bbf7d0' },
};

const OUTCOME_CONFIG: Record<string, { label: string; bg: string; color: string; border: string }> = {
  passed:   { label: 'Passed',   bg: '#f0fdf4', color: '#15803d', border: '#bbf7d0' },
  extended: { label: 'Extended', bg: '#fef3c7', color: '#92400e', border: '#fde68a' },
  failed:   { label: 'Failed',   bg: '#fef2f2', color: '#991b1b', border: '#fecaca' },
};

function initials(name: string) {
  return name.split(' ').map(n => n[0]).join('').toUpperCase().slice(0, 2);
}

export default function ReviewDetail() {
  const { id } = useParams<{ id: string }>();
  const navigate = useNavigate();
  const [review, setReview]       = useState<Review | null>(null);
  const [employee, setEmployee]   = useState<Employee | null>(null);
  const [objectives, setObjectives] = useState<Objective[]>([]);
  const [tab, setTab]             = useState('objectives');
  const [loading, setLoading]     = useState(true);
  const [error, setError]         = useState<string | null>(null);

  // Modal state
  const [showModal, setShowModal] = useState(false);
  const [form, setForm] = useState({ title: '', description: '', category: '', target_date: '', weight: 20 });
  const [saving, setSaving] = useState(false);
  const [formError, setFormError] = useState('');

  useEffect(() => {
    fetch(`${API}?id=${id}`)
      .then(r => r.json())
      .then(d => {
        if (d.error) throw new Error(d.error);
        setReview(d.review);
        setEmployee(d.employee);
        setObjectives(d.objectives);
      })
      .catch(e => setError(e.message))
      .finally(() => setLoading(false));
  }, [id]);

  if (loading) return <p className="loading">Loading review...</p>;
  if (error || !review || !employee) return <p className="error">❌ {error || 'Review not found'}</p>;

  const sc = STATUS_CONFIG[review.status] ?? STATUS_CONFIG.scheduled;
  const oc = review.outcome ? OUTCOME_CONFIG[review.outcome] : null;

  const CATEGORIES = [
    { key: 'performance',       label: 'Performance',       desc: 'Productivity and output targets' },
    { key: 'behaviour',         label: 'Behaviour',         desc: 'Conduct and cultural alignment' },
    { key: 'skills',            label: 'Skills Development', desc: 'Learning and competency building' },
    { key: 'compliance',        label: 'Compliance',        desc: 'Policy and regulatory adherence' },
    { key: 'team',              label: 'Team Contribution', desc: 'Collaboration and team impact' },
    { key: 'custom',            label: 'Custom',            desc: 'Other specific objectives' },
  ];

  const handleAddObjective = async () => {
    if (!form.title.trim()) { setFormError('Title is required'); return; }
    if (!form.category)     { setFormError('Please select a category'); return; }
    if (!form.target_date)  { setFormError('Target date is required'); return; }
    setFormError('');
    setSaving(true);
    try {
      const res = await fetch(ADD_API, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ ...form, review_id: review.id, review_type: review.review_type }),
      });
      const data = await res.json();
      if (data.success) {
        setObjectives(prev => [...prev, data.objective]);
        setShowModal(false);
        setForm({ title: '', description: '', category: '', target_date: '', weight: 20 });
      }
    } finally {
      setSaving(false);
    }
  };

  const tabs = [
    { key: 'objectives', label: 'Objectives',            icon: <Target size={13} /> },
    { key: 'review',     label: 'Review Notes',          icon: <Pencil size={13} /> },
    { key: 'signatures', label: 'Signatures & Decision', icon: <FileText size={13} /> },
    { key: 'audit',      label: 'Audit Trail',           icon: <History size={13} /> },
  ];

  return (
    <div style={{ maxWidth: '900px', margin: '0 auto' }}>

      {/* Header */}
      <div style={{ display: 'flex', alignItems: 'center', gap: '12px', flexWrap: 'wrap', marginBottom: '16px' }}>
        <button onClick={() => navigate('/probation')}
          style={{ padding: '8px', borderRadius: '8px', border: 'none', background: 'transparent', cursor: 'pointer', display: 'flex', alignItems: 'center' }}>
          <ArrowLeft size={16} />
        </button>
        <div style={{ flex: 1 }}>
          <h1 style={{ fontSize: '18px', fontWeight: 700, margin: 0 }}>Probation Review</h1>
          <p style={{ fontSize: '12px', color: '#64748b', margin: 0, textTransform: 'capitalize' }}>
            {review.review_type} — {employee.name}
          </p>
        </div>
        <div style={{ display: 'flex', alignItems: 'center', gap: '8px' }}>
          <span style={{ display: 'inline-flex', alignItems: 'center', gap: '4px', padding: '4px 10px', borderRadius: '6px', fontSize: '11px', fontWeight: 600, background: sc.bg, color: sc.color, border: `1px solid ${sc.border}` }}>
            <Clock size={11} /> {sc.label}
          </span>
          {oc && (
            <span style={{ display: 'inline-flex', alignItems: 'center', gap: '4px', padding: '4px 10px', borderRadius: '6px', fontSize: '11px', fontWeight: 600, background: oc.bg, color: oc.color, border: `1px solid ${oc.border}` }}>
              <CircleCheck size={11} /> {oc.label}
            </span>
          )}
          <button style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '6px 12px', border: '1px solid #e2e8f0', borderRadius: '6px', background: '#fff', fontSize: '12px', cursor: 'pointer' }}>
            <Download size={13} /> Report
          </button>
        </div>
      </div>

      {/* Role banner */}
      <div style={{ padding: '10px 16px', borderRadius: '10px', border: '1px solid #fecaca', background: '#fef2f2', color: '#991b1b', fontSize: '12px', display: 'flex', alignItems: 'center', gap: '8px', marginBottom: '16px' }}>
        <span>🛡️</span>
        <span>Viewing as <strong>HR Admin</strong></span>
        <span style={{ marginLeft: 'auto', opacity: 0.7 }}>Actions are filtered by your role</span>
      </div>

      {/* Timeline */}
      <div className="chart-card" style={{ marginBottom: '16px' }}>
        <div style={{ display: 'flex', alignItems: 'center', overflowX: 'auto', paddingBottom: '4px' }}>
          {STEPS.map((step, i) => (
            <React.Fragment key={step}>
              <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', minWidth: '80px' }}>
                <div style={{
                  width: '32px', height: '32px', borderRadius: '50%', display: 'flex', alignItems: 'center',
                  justifyContent: 'center', fontSize: '12px', fontWeight: 700,
                  background: i < review.current_step ? '#10b981' : i === review.current_step ? '#3b5bdb' : '#f1f5f9',
                  color: i <= review.current_step ? '#fff' : '#94a3b8',
                  boxShadow: i === review.current_step ? '0 0 0 4px rgba(59,91,219,0.2)' : 'none',
                }}>
                  {i < review.current_step ? <Check size={14} /> : i + 1}
                </div>
                <span style={{ fontSize: '10px', marginTop: '6px', fontWeight: 500, textAlign: 'center', lineHeight: 1.2, color: i < review.current_step ? '#059669' : i === review.current_step ? '#3b5bdb' : '#94a3b8' }}>
                  {step}
                </span>
              </div>
              {i < STEPS.length - 1 && (
                <div style={{ flex: 1, height: '2px', minWidth: '16px', margin: '0 4px', marginBottom: '20px', background: i < review.current_step ? '#10b981' : '#e2e8f0', borderRadius: '2px' }} />
              )}
            </React.Fragment>
          ))}
        </div>
      </div>

      {/* Employee Info */}
      <div className="chart-card" style={{ marginBottom: '16px' }}>
        <div style={{ display: 'flex', alignItems: 'center', gap: '16px', marginBottom: '16px' }}>
          <div style={{ width: '48px', height: '48px', borderRadius: '50%', background: 'rgba(59,91,219,0.1)', color: '#3b5bdb', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: 700, fontSize: '16px', flexShrink: 0 }}>
            {initials(employee.name)}
          </div>
          <div>
            <div style={{ fontWeight: 600, fontSize: '16px' }}>{employee.name}</div>
            <div style={{ fontSize: '12px', color: '#64748b' }}>{employee.email}</div>
          </div>
        </div>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(4,1fr)', gap: '16px', fontSize: '12px' }}>
          <div>
            <span style={{ color: '#94a3b8', display: 'block', fontSize: '11px', marginBottom: '2px' }}>Department</span>
            <span style={{ fontWeight: 500, display: 'flex', alignItems: 'center', gap: '4px' }}><Building2 size={12} color="#94a3b8" />{employee.department}</span>
          </div>
          <div>
            <span style={{ color: '#94a3b8', display: 'block', fontSize: '11px', marginBottom: '2px' }}>Manager</span>
            <span style={{ fontWeight: 500, display: 'flex', alignItems: 'center', gap: '4px' }}><User size={12} color="#94a3b8" />{employee.manager_name}</span>
          </div>
          <div>
            <span style={{ color: '#94a3b8', display: 'block', fontSize: '11px', marginBottom: '2px' }}>Review Date</span>
            <span style={{ fontWeight: 500, display: 'flex', alignItems: 'center', gap: '4px' }}><Calendar size={12} color="#94a3b8" />{employee.review_date}</span>
          </div>
          <div>
            <span style={{ color: '#94a3b8', display: 'block', fontSize: '11px', marginBottom: '2px' }}>Probation Ends</span>
            <span style={{ fontWeight: 500, display: 'flex', alignItems: 'center', gap: '4px' }}><Calendar size={12} color="#94a3b8" />{employee.probation_end}</span>
          </div>
        </div>
      </div>

      {/* Tabs */}
      <div style={{ display: 'inline-flex', background: '#f1f5f9', borderRadius: '8px', padding: '4px', marginBottom: '16px', gap: '2px', flexWrap: 'wrap' }}>
        {tabs.map(t => (
          <button key={t.key} onClick={() => setTab(t.key)}
            style={{ display: 'flex', alignItems: 'center', gap: '5px', padding: '6px 12px', borderRadius: '6px', border: 'none', fontSize: '12px', fontWeight: 500, cursor: 'pointer', background: tab === t.key ? '#fff' : 'transparent', color: tab === t.key ? '#0f172a' : '#64748b', boxShadow: tab === t.key ? '0 1px 3px rgba(0,0,0,0.1)' : 'none' }}>
            {t.icon} {t.label}
          </button>
        ))}
      </div>

      {/* Objectives Tab */}
      {tab === 'objectives' && (
        <div className="chart-card">
          <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '16px' }}>
            <div style={{ fontWeight: 600, fontSize: '14px', display: 'flex', alignItems: 'center', gap: '8px' }}>
              <Target size={16} color="#3b5bdb" /> Objectives & Scoring
            </div>
            <button onClick={() => setShowModal(true)} style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '6px 12px', background: '#3b5bdb', color: '#fff', border: 'none', borderRadius: '6px', fontSize: '12px', fontWeight: 500, cursor: 'pointer' }}>
              <Plus size={13} /> Add Objective
            </button>
          </div>

          {objectives.length === 0 ? (
            <div style={{ textAlign: 'center', padding: '48px 0' }}>
              <Target size={40} color="#e2e8f0" style={{ margin: '0 auto 12px' }} />
              <p style={{ fontSize: '13px', color: '#94a3b8' }}>No objectives set yet.</p>
              <button style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '6px 14px', border: '1px solid #e2e8f0', borderRadius: '6px', background: '#fff', fontSize: '12px', cursor: 'pointer', marginTop: '8px' }} onClick={() => setShowModal(true)}>
                <Plus size={13} /> Add First Objective
              </button>
            </div>
          ) : (
            <div>
              {objectives.map(o => (
                <div key={o.id} style={{ border: '1px solid #e2e8f0', borderRadius: '10px', padding: '16px', marginBottom: '12px' }}>
                  <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'flex-start', gap: '12px' }}>
                    <div style={{ flex: 1 }}>
                      <div style={{ display: 'flex', flexWrap: 'wrap', gap: '6px', marginBottom: '8px' }}>
                        <span style={{ padding: '2px 8px', border: '1px solid #99f6e4', background: '#f0fdfa', color: '#0f766e', borderRadius: '4px', fontSize: '11px', fontWeight: 600 }}>{o.category}</span>
                        {o.score !== null && <span style={{ padding: '2px 8px', border: '1px solid #6ee7b7', background: '#d1fae5', color: '#065f46', borderRadius: '4px', fontSize: '11px', fontWeight: 600, display: 'inline-flex', alignItems: 'center', gap: '3px' }}><CircleCheck size={10} /> Completed</span>}
                        <span style={{ padding: '2px 8px', border: '1px solid #e2e8f0', borderRadius: '4px', fontSize: '11px', fontWeight: 600 }}>Weight: {o.weight}%</span>
                      </div>
                      <div style={{ fontWeight: 600, fontSize: '13px' }}>{o.title}</div>
                      <div style={{ fontSize: '11px', color: '#64748b', marginTop: '4px' }}>{o.description}</div>
                    </div>
                    {o.score !== null && (
                      <div style={{ textAlign: 'right', flexShrink: 0 }}>
                        <div style={{ fontSize: '20px', fontWeight: 700 }}>{o.score}<span style={{ fontSize: '11px', color: '#94a3b8' }}>/5</span></div>
                        <div style={{ fontSize: '10px', color: '#94a3b8' }}>Manager</div>
                      </div>
                    )}
                  </div>

                  {/* Score bars */}
                  <div style={{ marginTop: '12px' }}>
                    {o.score !== null && (
                      <div style={{ display: 'flex', alignItems: 'center', gap: '8px', marginBottom: '6px' }}>
                        <span style={{ fontSize: '10px', color: '#64748b', width: '52px' }}>Manager</span>
                        <div style={{ flex: 1, height: '6px', background: 'rgba(59,91,219,0.15)', borderRadius: '3px' }}>
                          <div style={{ height: '100%', width: `${(o.score / 5) * 100}%`, background: '#3b5bdb', borderRadius: '3px' }} />
                        </div>
                        <span style={{ fontSize: '10px', fontWeight: 600, width: '16px' }}>{o.score}</span>
                      </div>
                    )}
                    {o.self_score !== null && (
                      <div style={{ display: 'flex', alignItems: 'center', gap: '8px', marginBottom: '6px' }}>
                        <span style={{ fontSize: '10px', color: '#64748b', width: '52px' }}>Self</span>
                        <div style={{ flex: 1, height: '6px', background: 'rgba(139,92,246,0.15)', borderRadius: '3px' }}>
                          <div style={{ height: '100%', width: `${(o.self_score / 5) * 100}%`, background: '#8b5cf6', borderRadius: '3px' }} />
                        </div>
                        <span style={{ fontSize: '10px', fontWeight: 600, width: '16px' }}>{o.self_score}</span>
                      </div>
                    )}
                  </div>

                  {o.target_date && (
                    <div style={{ display: 'flex', alignItems: 'center', gap: '4px', fontSize: '11px', color: '#64748b', marginTop: '8px' }}>
                      <Calendar size={11} /> Target: {o.target_date}
                    </div>
                  )}
                </div>
              ))}
            </div>
          )}
        </div>
      )}

      {/* Review Notes Tab */}
      {tab === 'review' && (
        <div className="chart-card">
          <div style={{ fontWeight: 600, fontSize: '14px', marginBottom: '16px', display: 'flex', alignItems: 'center', gap: '8px' }}>
            <Pencil size={16} color="#3b5bdb" /> Review Notes
          </div>
          {review.notes ? (
            <p style={{ fontSize: '13px', color: '#374151', lineHeight: 1.6 }}>{review.notes}</p>
          ) : (
            <p style={{ fontSize: '13px', color: '#94a3b8', fontStyle: 'italic' }}>No review notes added yet.</p>
          )}
        </div>
      )}

      {/* Signatures Tab */}
      {tab === 'signatures' && (
        <div className="chart-card">
          <div style={{ fontWeight: 600, fontSize: '14px', marginBottom: '16px', display: 'flex', alignItems: 'center', gap: '8px' }}>
            <FileText size={16} color="#3b5bdb" /> Signatures & Decision
          </div>
          {review.outcome ? (
            <div>
              <div style={{ display: 'flex', alignItems: 'center', gap: '12px', padding: '16px', background: '#f0fdf4', borderRadius: '8px', border: '1px solid #bbf7d0' }}>
                <CircleCheck size={20} color="#059669" />
                <div>
                  <div style={{ fontWeight: 600, fontSize: '13px' }}>Decision: {review.outcome}</div>
                  <div style={{ fontSize: '11px', color: '#64748b' }}>Signed: {review.signed ? 'Yes ✓' : 'Pending'}</div>
                </div>
              </div>
            </div>
          ) : (
            <p style={{ fontSize: '13px', color: '#94a3b8', fontStyle: 'italic' }}>No decision made yet. Review is still in progress.</p>
          )}
        </div>
      )}

      {/* Audit Trail Tab */}
      {tab === 'audit' && (
        <div className="chart-card">
          <div style={{ fontWeight: 600, fontSize: '14px', marginBottom: '16px', display: 'flex', alignItems: 'center', gap: '8px' }}>
            <History size={16} color="#3b5bdb" /> Audit Trail
          </div>
          <div style={{ position: 'relative', paddingLeft: '20px' }}>
            <div style={{ position: 'absolute', left: '7px', top: 0, bottom: 0, width: '2px', background: '#e2e8f0' }} />
            {[
              { label: `Review created — ${review.review_type}`, date: review.review_date, color: '#3b5bdb' },
              review.outcome ? { label: `Decision: ${review.outcome}`, date: review.review_date, color: '#059669' } : null,
              review.signed ? { label: 'Signed by all parties', date: review.review_date, color: '#059669' } : null,
            ].filter(Boolean).map((item, i) => (
              <div key={i} style={{ position: 'relative', marginBottom: '16px' }}>
                <div style={{ position: 'absolute', left: '-17px', top: '2px', width: '10px', height: '10px', borderRadius: '50%', background: item!.color, border: '2px solid #fff' }} />
                <div style={{ fontSize: '13px', fontWeight: 500 }}>{item!.label}</div>
                <div style={{ fontSize: '11px', color: '#64748b' }}>{item!.date}</div>
              </div>
            ))}
          </div>
        </div>
      )}

      {/* Add Objective Modal */}
      {showModal && (
        <div style={{ position: 'fixed', inset: 0, background: 'rgba(0,0,0,0.5)', zIndex: 1000, display: 'flex', alignItems: 'center', justifyContent: 'center', padding: '16px' }}
          onClick={e => { if (e.target === e.currentTarget) setShowModal(false); }}>
          <div style={{ background: '#fff', borderRadius: '12px', padding: '24px', width: '100%', maxWidth: '500px', maxHeight: '90vh', overflowY: 'auto', position: 'relative', boxShadow: '0 20px 60px rgba(0,0,0,0.2)' }}>

            {/* Close */}
            <button onClick={() => setShowModal(false)} style={{ position: 'absolute', top: '16px', right: '16px', background: 'transparent', border: 'none', cursor: 'pointer', color: '#94a3b8' }}>
              <X size={18} />
            </button>

            {/* Title */}
            <h2 style={{ fontSize: '16px', fontWeight: 700, marginBottom: '20px', display: 'flex', alignItems: 'center', gap: '8px' }}>
              <Target size={18} color="#3b5bdb" /> Add New Objective
            </h2>

            <div style={{ display: 'flex', flexDirection: 'column', gap: '16px' }}>

              {/* Title field */}
              <div>
                <label style={{ fontSize: '13px', fontWeight: 600, display: 'block', marginBottom: '6px' }}>Title <span style={{ color: '#ef4444' }}>*</span></label>
                <input
                  style={{ width: '100%', padding: '8px 12px', border: '1px solid #e2e8f0', borderRadius: '6px', fontSize: '13px', outline: 'none', boxSizing: 'border-box' }}
                  placeholder="e.g. Complete onboarding certification"
                  value={form.title}
                  onChange={e => setForm(f => ({ ...f, title: e.target.value }))}
                />
              </div>

              {/* Description */}
              <div>
                <label style={{ fontSize: '13px', fontWeight: 600, display: 'block', marginBottom: '6px' }}>Description</label>
                <textarea
                  rows={3}
                  style={{ width: '100%', padding: '8px 12px', border: '1px solid #e2e8f0', borderRadius: '6px', fontSize: '13px', outline: 'none', resize: 'vertical', boxSizing: 'border-box' }}
                  placeholder="Success criteria and expected outcomes..."
                  value={form.description}
                  onChange={e => setForm(f => ({ ...f, description: e.target.value }))}
                />
              </div>

              {/* Category */}
              <div>
                <label style={{ fontSize: '13px', fontWeight: 600, display: 'block', marginBottom: '8px' }}>Category <span style={{ color: '#ef4444' }}>*</span></label>
                <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '8px' }}>
                  {CATEGORIES.map(c => (
                    <button key={c.key} type="button" onClick={() => setForm(f => ({ ...f, category: c.key }))}
                      style={{ padding: '10px 12px', borderRadius: '8px', border: `1px solid ${form.category === c.key ? '#3b5bdb' : '#e2e8f0'}`, background: form.category === c.key ? 'rgba(59,91,219,0.05)' : '#fff', textAlign: 'left', cursor: 'pointer', transition: 'all 0.15s' }}>
                      <div style={{ fontSize: '12px', fontWeight: 600, color: form.category === c.key ? '#3b5bdb' : '#0f172a' }}>{c.label}</div>
                      <div style={{ fontSize: '10px', color: '#94a3b8', marginTop: '2px' }}>{c.desc}</div>
                    </button>
                  ))}
                </div>
              </div>

              {/* Target Date */}
              <div>
                <label style={{ fontSize: '13px', fontWeight: 600, display: 'block', marginBottom: '6px' }}>Target Date <span style={{ color: '#ef4444' }}>*</span></label>
                <input type="date"
                  style={{ width: '100%', padding: '8px 12px', border: '1px solid #e2e8f0', borderRadius: '6px', fontSize: '13px', outline: 'none', boxSizing: 'border-box' }}
                  value={form.target_date}
                  onChange={e => setForm(f => ({ ...f, target_date: e.target.value }))}
                />
              </div>

              {/* Weight slider */}
              <div>
                <label style={{ fontSize: '13px', fontWeight: 600, display: 'block', marginBottom: '8px' }}>
                  Weighting: <span style={{ color: '#3b5bdb', fontWeight: 700 }}>{form.weight}%</span>
                </label>
                <input type="range" min={5} max={50} step={5}
                  style={{ width: '100%', accentColor: '#3b5bdb' }}
                  value={form.weight}
                  onChange={e => setForm(f => ({ ...f, weight: Number(e.target.value) }))}
                />
                <div style={{ display: 'flex', justifyContent: 'space-between', fontSize: '10px', color: '#94a3b8', marginTop: '2px' }}>
                  <span>5%</span><span>50%</span>
                </div>
              </div>

              {/* Error */}
              {formError && <p style={{ color: '#ef4444', fontSize: '12px', margin: 0 }}>{formError}</p>}

              {/* Buttons */}
              <div style={{ display: 'flex', justifyContent: 'flex-end', gap: '8px', marginTop: '4px' }}>
                <button onClick={() => setShowModal(false)}
                  style={{ padding: '8px 16px', border: '1px solid #e2e8f0', borderRadius: '6px', background: '#fff', fontSize: '13px', cursor: 'pointer' }}>
                  Cancel
                </button>
                <button onClick={handleAddObjective} disabled={saving}
                  style={{ display: 'inline-flex', alignItems: 'center', gap: '6px', padding: '8px 16px', background: saving ? '#94a3b8' : '#3b5bdb', color: '#fff', border: 'none', borderRadius: '6px', fontSize: '13px', fontWeight: 500, cursor: saving ? 'not-allowed' : 'pointer' }}>
                  <Plus size={14} /> {saving ? 'Saving...' : 'Add Objective'}
                </button>
              </div>
            </div>
          </div>
        </div>
      )}
    </div>
  );
}
