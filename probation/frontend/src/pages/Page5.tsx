import React, { useState, useEffect } from 'react';
import { Shield, FilePenLine, CircleCheck, Target, Star, TrendingUp, FileText, Clock, Check, Calendar } from 'lucide-react';

const API = 'http://localhost/probation/backend/employee.php';

interface Employee { id: number; name: string; department: string; position: string; status: string; start_date: string; email: string; manager_name: string; days_left: number; }
interface Objective { id: number; title: string; description: string; category: string; weight: number; score: number | null; self_score: number | null; target_date: string | null; completed: boolean; }
interface Review { id: number; review_type: string; review_date: string; outcome: string | null; signed: number; status: string; }
interface Stats { pending_signatures: number; reviews_completed: number; my_objectives: number; self_assessed: number; }
interface Journey { started: boolean; objectives: boolean; mid_review: boolean; final: boolean; outcome: boolean; }
interface EmpOption { id: number; name: string; position: string; department: string; }

function initials(name: string) {
  return name.split(' ').map(n => n[0]).join('').toUpperCase().slice(0, 2);
}

function ScoreBar({ label, value, color }: { label: string; value: number; color: string }) {
  return (
    <div style={{ display: 'flex', alignItems: 'center', gap: '8px', marginBottom: '6px' }}>
      <span style={{ fontSize: '10px', color: '#64748b', width: '52px' }}>{label}</span>
      <div style={{ flex: 1, height: '6px', background: 'rgba(59,91,219,0.15)', borderRadius: '3px', overflow: 'hidden' }}>
        <div style={{ height: '100%', width: `${(value / 5) * 100}%`, background: color, borderRadius: '3px' }} />
      </div>
      <span style={{ fontSize: '10px', fontWeight: 600, width: '16px' }}>{value}</span>
    </div>
  );
}

function ObjectiveCard({ obj }: { obj: Objective }) {
  const [open, setOpen] = useState(false);
  return (
    <div className="chart-card" style={{ padding: '16px', marginBottom: '12px' }}>
      <div style={{ display: 'flex', alignItems: 'flex-start', justifyContent: 'space-between', gap: '12px' }}>
        <div style={{ flex: 1 }}>
          <div style={{ display: 'flex', flexWrap: 'wrap', gap: '6px', marginBottom: '8px' }}>
            <span style={{ padding: '2px 8px', border: '1px solid #99f6e4', background: '#f0fdfa', color: '#0f766e', borderRadius: '4px', fontSize: '11px', fontWeight: 600 }}>{obj.category}</span>
            {obj.completed && <span style={{ display: 'inline-flex', alignItems: 'center', gap: '3px', padding: '2px 8px', border: '1px solid #6ee7b7', background: '#d1fae5', color: '#065f46', borderRadius: '4px', fontSize: '11px', fontWeight: 600 }}><CircleCheck size={10} /> Completed</span>}
            <span style={{ padding: '2px 8px', border: '1px solid #e2e8f0', borderRadius: '4px', fontSize: '11px', fontWeight: 600 }}>Weight: {obj.weight}%</span>
          </div>
          <div style={{ fontWeight: 600, fontSize: '13px' }}>{obj.title}</div>
          <div style={{ fontSize: '11px', color: '#64748b', marginTop: '4px' }}>{obj.description}</div>
        </div>
        <div style={{ display: 'flex', alignItems: 'center', gap: '8px', flexShrink: 0 }}>
          {obj.score !== null && (
            <div style={{ textAlign: 'right' }}>
              <div style={{ fontSize: '18px', fontWeight: 700 }}>{obj.score}<span style={{ fontSize: '11px', color: '#94a3b8' }}>/5</span></div>
              <div style={{ fontSize: '10px', color: '#94a3b8' }}>Manager</div>
            </div>
          )}
          <button onClick={() => setOpen(o => !o)} style={{ padding: '6px', borderRadius: '6px', border: 'none', background: 'transparent', cursor: 'pointer', color: '#94a3b8' }}>
            {open ? '▲' : '▼'}
          </button>
        </div>
      </div>

      {open && (
        <div style={{ marginTop: '12px', paddingTop: '12px', borderTop: '1px solid #f1f5f9' }}>
          {obj.score !== null && <ScoreBar label="Manager" value={obj.score} color="#3b5bdb" />}
          {obj.self_score !== null && <ScoreBar label="Self" value={obj.self_score} color="#8b5cf6" />}
          {obj.target_date && (
            <div style={{ display: 'flex', alignItems: 'center', gap: '4px', fontSize: '11px', color: '#64748b', marginTop: '8px' }}>
              <Calendar size={11} /> Target: {obj.target_date}
            </div>
          )}
        </div>
      )}
    </div>
  );
}

export default function EmployeeView() {
  const [empId, setEmpId]         = useState(1);
  const [employee, setEmployee]   = useState<Employee | null>(null);
  const [employees, setEmployees] = useState<EmpOption[]>([]);
  const [stats, setStats]         = useState<Stats>({ pending_signatures: 0, reviews_completed: 0, my_objectives: 0, self_assessed: 0 });
  const [objectives, setObjectives] = useState<Record<string, Objective[]>>({});
  const [reviews, setReviews]     = useState<Review[]>([]);
  const [signatures, setSignatures] = useState<Review[]>([]);
  const [journey, setJourney]     = useState<Journey>({ started: false, objectives: false, mid_review: false, final: false, outcome: false });
  const [tab, setTab]             = useState('objectives');
  const [loading, setLoading]     = useState(true);

  useEffect(() => {
    setLoading(true);
    fetch(`${API}?employee_id=${empId}`)
      .then(r => r.json())
      .then(d => {
        setEmployee(d.employee);
        setEmployees(d.employees);
        setStats(d.stats);
        setObjectives(d.objectives);
        setReviews(d.reviews);
        setSignatures(d.signatures);
        setJourney(d.journey);
      })
      .finally(() => setLoading(false));
  }, [empId]);

  const journeySteps = [
    { key: 'started',    label: 'Started',        done: journey.started },
    { key: 'objectives', label: 'Objectives Set',  done: journey.objectives },
    { key: 'mid_review', label: 'Mid-Review',      done: journey.mid_review },
    { key: 'final',      label: 'Final Review',    done: journey.final, current: !journey.final && journey.mid_review },
    { key: 'outcome',    label: 'Outcome',         done: journey.outcome },
  ];

  const tabs = [
    { key: 'objectives', label: 'My Objectives', icon: <Target size={12} /> },
    { key: 'self',       label: 'Self vs Manager', icon: <TrendingUp size={12} /> },
    { key: 'reviews',    label: 'My Reviews',    icon: <FileText size={12} /> },
    { key: 'signatures', label: 'Signatures',    icon: <FilePenLine size={12} /> },
    { key: 'history',    label: 'History',       icon: <Clock size={12} /> },
  ];

  const OUTCOME_COLORS: Record<string, string> = { passed: 'badge-green', extended: 'badge-yellow', failed: 'badge-red' };
  const STATUS_LABELS: Record<string, string> = { scheduled: 'Scheduled', in_progress: 'In Progress', awaiting_signature: 'Awaiting Signature', completed: 'Completed' };
  const STATUS_COLORS: Record<string, string> = { scheduled: 'badge-blue', in_progress: 'badge-purple', awaiting_signature: 'badge-yellow', completed: 'badge-green' };

  return (
    <div>
      <h1 className="page-title" style={{ display: 'flex', alignItems: 'center', gap: '8px', marginBottom: '4px' }}>
        <Shield size={22} color="#059669" /> My Employee Portal
      </h1>
      <p className="page-sub" style={{ marginBottom: '24px' }}>
        Logged in as <strong>
          <select value={empId} onChange={e => setEmpId(Number(e.target.value))}
            style={{ border: 'none', background: 'transparent', fontWeight: 700, fontSize: '13px', cursor: 'pointer', color: '#0f172a' }}>
            {employees.map(e => <option key={e.id} value={e.id}>{e.name}</option>)}
          </select>
        </strong>
      </p>

      {loading && <p className="loading">Loading...</p>}
      {employee && (
        <>
          {/* Profile Card */}
          <div className="chart-card" style={{ padding: 0, marginBottom: '24px', overflow: 'hidden' }}>
            <div style={{ height: '64px', background: 'linear-gradient(to right, #059669, #10b981)' }} />
            <div style={{ padding: '0 20px 20px', marginTop: '-32px' }}>
              <div style={{ display: 'flex', alignItems: 'flex-end', gap: '16px', marginBottom: '16px' }}>
                <div style={{ width: '56px', height: '56px', borderRadius: '50%', background: '#059669', color: '#fff', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: 700, fontSize: '18px', border: '4px solid #fff', flexShrink: 0 }}>
                  {initials(employee.name)}
                </div>
                <div style={{ flex: 1 }}>
                  <div style={{ fontWeight: 700, fontSize: '17px' }}>{employee.name}</div>
                  <div style={{ fontSize: '12px', color: '#64748b' }}>{employee.position} · {employee.department}</div>
                </div>
                <div style={{ textAlign: 'right', background: '#f1f5f9', padding: '8px 12px', borderRadius: '8px' }}>
                  <div style={{ fontSize: '20px', fontWeight: 700 }}>{employee.days_left}</div>
                  <div style={{ fontSize: '10px', color: '#64748b' }}>days left</div>
                </div>
              </div>
              <div style={{ display: 'grid', gridTemplateColumns: 'repeat(4,1fr)', gap: '12px', fontSize: '12px' }}>
                <div><span style={{ color: '#94a3b8', display: 'block', fontSize: '11px' }}>Employee ID</span><span style={{ fontWeight: 500 }}>EMP-00{employee.id}</span></div>
                <div><span style={{ color: '#94a3b8', display: 'block', fontSize: '11px' }}>Manager</span><span style={{ fontWeight: 500 }}>{employee.manager_name || '—'}</span></div>
                <div><span style={{ color: '#94a3b8', display: 'block', fontSize: '11px' }}>Start Date</span><span style={{ fontWeight: 500 }}>{new Date(employee.start_date).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' })}</span></div>
                <div><span style={{ color: '#94a3b8', display: 'block', fontSize: '11px' }}>Status</span><span className="badge badge-blue"><Clock size={10} /> {employee.status}</span></div>
              </div>
            </div>
          </div>

          {/* Journey Timeline */}
          <div className="chart-card" style={{ marginBottom: '24px' }}>
            <div style={{ fontSize: '13px', fontWeight: 600, marginBottom: '16px' }}>My Probation Journey</div>
            <div style={{ display: 'flex', alignItems: 'center', overflowX: 'auto', paddingBottom: '8px' }}>
              {journeySteps.map((step, i) => (
                <React.Fragment key={step.key}>
                  <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', minWidth: '80px' }}>
                    <div style={{ width: '32px', height: '32px', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', fontSize: '12px', fontWeight: 700, background: step.done ? '#10b981' : step.current ? '#3b5bdb' : '#f1f5f9', color: step.done || step.current ? '#fff' : '#94a3b8', boxShadow: step.current ? '0 0 0 4px rgba(59,91,219,0.2)' : 'none' }}>
                      {step.done ? <Check size={14} /> : i + 1}
                    </div>
                    <span style={{ fontSize: '10px', marginTop: '6px', fontWeight: 500, textAlign: 'center', color: step.done ? '#059669' : step.current ? '#3b5bdb' : '#94a3b8', lineHeight: 1.2 }}>{step.label}</span>
                  </div>
                  {i < journeySteps.length - 1 && (
                    <div style={{ flex: 1, height: '2px', minWidth: '20px', margin: '0 4px', marginBottom: '20px', background: step.done ? '#10b981' : '#e2e8f0', borderRadius: '2px' }} />
                  )}
                </React.Fragment>
              ))}
            </div>
          </div>

          {/* Stats */}
          <div className="stats-grid" style={{ marginBottom: '24px' }}>
            <div className="stat-card"><div className="stat-header"><div><div className="stat-label">Pending Signatures</div><div className="stat-value">{stats.pending_signatures}</div></div><div className="stat-icon" style={{ background: '#fef3c7', color: '#d97706' }}><FilePenLine size={20} /></div></div></div>
            <div className="stat-card"><div className="stat-header"><div><div className="stat-label">Reviews Completed</div><div className="stat-value">{stats.reviews_completed}</div></div><div className="stat-icon" style={{ background: '#d1fae5', color: '#059669' }}><CircleCheck size={20} /></div></div></div>
            <div className="stat-card"><div className="stat-header"><div><div className="stat-label">My Objectives</div><div className="stat-value">{stats.my_objectives}</div></div><div className="stat-icon" style={{ background: 'rgba(59,91,219,0.1)', color: '#3b5bdb' }}><Target size={20} /></div></div></div>
            <div className="stat-card"><div className="stat-header"><div><div className="stat-label">Self-Assessed</div><div className="stat-value">{stats.self_assessed}</div></div><div className="stat-icon" style={{ background: '#ede9fe', color: '#7c3aed' }}><Star size={20} /></div></div></div>
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

          {/* My Objectives Tab */}
          {tab === 'objectives' && (
            <div>
              {Object.keys(objectives).length === 0 ? (
                <div className="chart-card" style={{ textAlign: 'center', color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No objectives set yet</div>
              ) : Object.entries(objectives).map(([rt, objs]) => (
                <div key={rt} className="chart-card" style={{ marginBottom: '16px' }}>
                  <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '16px' }}>
                    <div style={{ fontWeight: 600, fontSize: '13px', textTransform: 'capitalize' }}>{rt} Objectives</div>
                    <span style={{ padding: '2px 8px', border: '1px solid #e2e8f0', borderRadius: '4px', fontSize: '11px', fontWeight: 600 }}>{objs.length} objectives</span>
                  </div>
                  {objs.map(o => <ObjectiveCard key={o.id} obj={o} />)}
                </div>
              ))}
            </div>
          )}

          {/* Self vs Manager Tab */}
          {tab === 'self' && (
            <div className="chart-card">
              {Object.values(objectives).flat().filter(o => o.score !== null && o.self_score !== null).length === 0 ? (
                <p style={{ color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No scored objectives yet</p>
              ) : (
                <div className="table-wrap">
                  <table>
                    <thead><tr><th>Objective</th><th>Manager Score</th><th>Self Score</th><th>Difference</th></tr></thead>
                    <tbody>
                      {Object.values(objectives).flat().filter(o => o.score !== null && o.self_score !== null).map(o => {
                        const diff = (o.self_score ?? 0) - (o.score ?? 0);
                        return (
                          <tr key={o.id}>
                            <td style={{ fontSize: '13px', fontWeight: 500 }}>{o.title}</td>
                            <td><span className="badge badge-blue">{o.score}/5</span></td>
                            <td><span className="badge badge-purple">{o.self_score}/5</span></td>
                            <td><span className={`badge ${diff > 0 ? 'badge-yellow' : diff < 0 ? 'badge-red' : 'badge-green'}`}>{diff > 0 ? '+' : ''}{diff}</span></td>
                          </tr>
                        );
                      })}
                    </tbody>
                  </table>
                </div>
              )}
            </div>
          )}

          {/* My Reviews Tab */}
          {tab === 'reviews' && (
            <div className="chart-card" style={{ padding: 0 }}>
              {reviews.length === 0 ? (
                <div style={{ padding: '24px', textAlign: 'center', color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No reviews yet</div>
              ) : (
                <div className="table-wrap">
                  <table>
                    <thead><tr><th>Type</th><th>Date</th><th>Status</th><th>Outcome</th></tr></thead>
                    <tbody>
                      {reviews.map(r => (
                        <tr key={r.id}>
                          <td style={{ fontSize: '13px' }}>{r.review_type}</td>
                          <td><span style={{ display: 'flex', alignItems: 'center', gap: '4px', fontSize: '13px' }}><Calendar size={12} color="#94a3b8" />{r.review_date}</span></td>
                          <td><span className={`badge ${STATUS_COLORS[r.status] ?? 'badge-blue'}`}>{STATUS_LABELS[r.status] ?? r.status}</span></td>
                          <td>{r.outcome ? <span className={`badge ${OUTCOME_COLORS[r.outcome] ?? 'badge-blue'}`}>{r.outcome}</span> : <span style={{ color: '#94a3b8', fontSize: '12px' }}>—</span>}</td>
                        </tr>
                      ))}
                    </tbody>
                  </table>
                </div>
              )}
            </div>
          )}

          {/* Signatures Tab */}
          {tab === 'signatures' && (
            <div className="chart-card">
              {signatures.length === 0 ? (
                <p style={{ color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No pending signatures</p>
              ) : signatures.map(r => (
                <div key={r.id} className="review-item" style={{ marginBottom: '8px' }}>
                  <div>
                    <div className="review-name">{r.review_type}</div>
                    <div className="review-meta">{r.review_date}</div>
                  </div>
                  <button style={{ padding: '6px 14px', background: '#3b5bdb', color: '#fff', border: 'none', borderRadius: '6px', fontSize: '12px', fontWeight: 500, cursor: 'pointer' }}>Sign</button>
                </div>
              ))}
            </div>
          )}

          {/* History Tab */}
          {tab === 'history' && (
            <div className="chart-card">
              {reviews.length === 0 ? (
                <p style={{ color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No history yet</p>
              ) : (
                <div style={{ position: 'relative', paddingLeft: '20px' }}>
                  <div style={{ position: 'absolute', left: '7px', top: 0, bottom: 0, width: '2px', background: '#e2e8f0' }} />
                  {reviews.map(r => (
                    <div key={r.id} style={{ position: 'relative', marginBottom: '16px' }}>
                      <div style={{ position: 'absolute', left: '-17px', top: '2px', width: '10px', height: '10px', borderRadius: '50%', background: r.outcome ? '#10b981' : '#3b5bdb', border: '2px solid #fff' }} />
                      <div style={{ fontSize: '13px', fontWeight: 500 }}>{r.review_type}</div>
                      <div style={{ fontSize: '11px', color: '#64748b' }}>{r.review_date} · {r.outcome ? r.outcome : r.status}</div>
                    </div>
                  ))}
                </div>
              )}
            </div>
          )}
        </>
      )}
    </div>
  );
}
