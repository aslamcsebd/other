import React, { useState, useEffect } from 'react';
import { ClipboardCheck, Users, UserCheck, TriangleAlert, Target, Plus, Building2, Calendar, Eye } from 'lucide-react';

const API = 'http://localhost/probation/backend/manager.php';

interface Manager { id: number; name: string; position: string; department: string; }
interface TeamMember { id: number; name: string; department: string; position: string; email: string; review_count: number; upcoming_reviews: number; }
interface Review { id: number; name: string; department: string; review_type: string; review_date: string; outcome: string | null; status: string; }
interface Objective { id: number; title: string; score: number | null; employee_name: string; }
interface Stats { team_on_probation: number; active_reviews: number; action_required: number; objectives_set: number; objectives_scored: number; }
interface FeedbackSummary { avg_rating: number; count: number; }

function initials(name: string) {
  return name.split(' ').map(n => n[0]).join('').toUpperCase().slice(0, 2);
}

const OUTCOME_COLORS: Record<string, string> = { passed: 'badge-green', extended: 'badge-yellow', failed: 'badge-red' };
const STATUS_COLORS: Record<string, string> = { scheduled: 'badge-blue', in_progress: 'badge-purple', awaiting_signature: 'badge-yellow', completed: 'badge-green' };
const STATUS_LABELS: Record<string, string> = { scheduled: 'Scheduled', in_progress: 'In Progress', awaiting_signature: 'Awaiting Signature', completed: 'Completed' };

export default function ManagerView() {
  const [managerId, setManagerId] = useState(9);
  const [managers, setManagers]   = useState<Manager[]>([]);
  const [manager, setManager]     = useState<Manager | null>(null);
  const [stats, setStats]         = useState<Stats>({ team_on_probation: 0, active_reviews: 0, action_required: 0, objectives_set: 0, objectives_scored: 0 });
  const [team, setTeam]           = useState<TeamMember[]>([]);
  const [reviews, setReviews]     = useState<Review[]>([]);
  const [objectives, setObjectives] = useState<Objective[]>([]);
  const [fb, setFb]               = useState<FeedbackSummary | null>(null);
  const [tab, setTab]             = useState('team');
  const [loading, setLoading]     = useState(true);

  useEffect(() => {
    setLoading(true);
    fetch(`${API}?manager_id=${managerId}`)
      .then(r => r.json())
      .then(d => {
        setManager(d.manager);
        setManagers(d.managers);
        setStats(d.stats);
        setTeam(d.team_members);
        setReviews(d.review_list);
        setObjectives(d.objectives);
        setFb(d.fb);
      })
      .finally(() => setLoading(false));
  }, [managerId]);

  const tabs = [
    { key: 'team',     label: `Team (${stats.team_on_probation})`,  icon: <Users size={13} /> },
    { key: 'reviews',  label: `Reviews (${stats.active_reviews})`,  icon: <UserCheck size={13} /> },
    { key: 'scoring',  label: 'Scoring',                            icon: <span style={{fontSize:13}}>📊</span> },
    { key: 'feedback', label: 'Feedback',                           icon: <span style={{fontSize:13}}>💬</span> },
  ];

  return (
    <div>
      {/* Header */}
      <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'space-between', flexWrap: 'wrap', gap: '12px', marginBottom: '24px' }}>
        <div>
          <h1 className="page-title" style={{ display: 'flex', alignItems: 'center', gap: '8px' }}>
            <ClipboardCheck size={22} color="#3b5bdb" /> Manager Dashboard
          </h1>
          <p className="page-sub">
            Logged in as <strong>
              <select value={managerId} onChange={e => setManagerId(Number(e.target.value))}
                style={{ border: 'none', background: 'transparent', fontWeight: 700, fontSize: '13px', cursor: 'pointer', color: '#0f172a' }}>
                {managers.map(m => <option key={m.id} value={m.id}>{m.name}</option>)}
              </select>
            </strong>
          </p>
        </div>
        <button style={{ display: 'flex', alignItems: 'center', gap: '6px', padding: '8px 16px', background: '#3b5bdb', color: '#fff', border: 'none', borderRadius: '8px', fontSize: '13px', fontWeight: 500, cursor: 'pointer' }}>
          <Plus size={15} /> New Review
        </button>
      </div>

      {/* Stats */}
      <div className="stats-grid" style={{ marginBottom: '24px' }}>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Team on Probation</div><div className="stat-value">{stats.team_on_probation}</div></div>
            <div className="stat-icon" style={{ background: 'rgba(59,91,219,0.1)', color: '#3b5bdb' }}><Users size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Active Reviews</div><div className="stat-value">{stats.active_reviews}</div></div>
            <div className="stat-icon" style={{ background: '#dbeafe', color: '#2563eb' }}><UserCheck size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Action Required</div><div className="stat-value">{stats.action_required}</div></div>
            <div className="stat-icon" style={{ background: '#fef3c7', color: '#d97706' }}><TriangleAlert size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div>
              <div className="stat-label">Objectives Set</div>
              <div className="stat-value">{stats.objectives_set}</div>
              <div style={{ fontSize: '11px', color: '#94a3b8' }}>{stats.objectives_scored} scored</div>
            </div>
            <div className="stat-icon" style={{ background: '#ede9fe', color: '#7c3aed' }}><Target size={20} /></div>
          </div>
        </div>
      </div>

      {/* Tabs */}
      <div style={{ display: 'inline-flex', background: '#f1f5f9', borderRadius: '8px', padding: '4px', marginBottom: '16px', gap: '2px' }}>
        {tabs.map(t => (
          <button key={t.key} onClick={() => setTab(t.key)}
            style={{ display: 'flex', alignItems: 'center', gap: '6px', padding: '6px 12px', borderRadius: '6px', border: 'none', fontSize: '13px', fontWeight: 500, cursor: 'pointer', background: tab === t.key ? '#fff' : 'transparent', color: tab === t.key ? '#0f172a' : '#64748b', boxShadow: tab === t.key ? '0 1px 3px rgba(0,0,0,0.1)' : 'none' }}>
            {t.icon} {t.label}
          </button>
        ))}
      </div>

      {loading && <p className="loading">Loading...</p>}

      {/* Team Tab */}
      {tab === 'team' && (
        <div className="chart-card" style={{ padding: 0 }}>
          {team.length === 0 ? (
            <div style={{ padding: '32px', textAlign: 'center', color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>
              No team members on probation for {manager?.name}
            </div>
          ) : (
            <div className="table-wrap">
              <table>
                <thead><tr><th>Employee</th><th>Department</th><th>Position</th><th>Reviews</th><th>Upcoming</th></tr></thead>
                <tbody>
                  {team.map(m => (
                    <tr key={m.id}>
                      <td>
                        <div style={{ display: 'flex', alignItems: 'center', gap: '10px' }}>
                          <div className="avatar" style={{ flexShrink: 0 }}>{initials(m.name)}</div>
                          <div>
                            <div style={{ fontSize: '13px', fontWeight: 500 }}>{m.name}</div>
                            <div style={{ fontSize: '11px', color: '#94a3b8' }}>{m.email}</div>
                          </div>
                        </div>
                      </td>
                      <td><span style={{ display: 'flex', alignItems: 'center', gap: '6px', fontSize: '13px' }}><Building2 size={13} color="#94a3b8" />{m.department}</span></td>
                      <td style={{ fontSize: '13px' }}>{m.position}</td>
                      <td><span className="badge badge-blue">{m.review_count}</span></td>
                      <td><span className="badge badge-yellow">{m.upcoming_reviews}</span></td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          )}
        </div>
      )}

      {/* Reviews Tab */}
      {tab === 'reviews' && (
        <div className="chart-card" style={{ padding: 0 }}>
          {reviews.length === 0 ? (
            <div style={{ padding: '32px', textAlign: 'center', color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No reviews found</div>
          ) : (
            <div className="table-wrap">
              <table>
                <thead><tr><th>Employee</th><th>Type</th><th>Date</th><th>Status</th><th>Outcome</th><th style={{ textAlign: 'right' }}>Action</th></tr></thead>
                <tbody>
                  {reviews.map(r => (
                    <tr key={r.id}>
                      <td>
                        <div style={{ display: 'flex', alignItems: 'center', gap: '8px' }}>
                          <div className="avatar" style={{ flexShrink: 0, width: '28px', height: '28px', fontSize: '11px' }}>{initials(r.name)}</div>
                          <div>
                            <div style={{ fontSize: '13px', fontWeight: 500 }}>{r.name}</div>
                            <div style={{ fontSize: '11px', color: '#94a3b8' }}>{r.department}</div>
                          </div>
                        </div>
                      </td>
                      <td style={{ fontSize: '13px' }}>{r.review_type}</td>
                      <td><span style={{ display: 'flex', alignItems: 'center', gap: '4px', fontSize: '13px' }}><Calendar size={12} color="#94a3b8" />{r.review_date}</span></td>
                      <td><span className={`badge ${STATUS_COLORS[r.status] ?? 'badge-blue'}`}>{STATUS_LABELS[r.status] ?? r.status}</span></td>
                      <td>{r.outcome ? <span className={`badge ${OUTCOME_COLORS[r.outcome] ?? 'badge-blue'}`}>{r.outcome}</span> : <span style={{ color: '#94a3b8', fontSize: '12px' }}>—</span>}</td>
                      <td style={{ textAlign: 'right' }}><button className="page-btn" style={{ display: 'inline-flex', alignItems: 'center', gap: '4px', fontSize: '12px' }}><Eye size={12} /> View</button></td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          )}
        </div>
      )}

      {/* Scoring Tab */}
      {tab === 'scoring' && (
        <div className="chart-card">
          {objectives.length === 0 ? (
            <p style={{ color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No objectives set</p>
          ) : (
            <div className="table-wrap">
              <table>
                <thead><tr><th>Employee</th><th>Objective</th><th>Score</th></tr></thead>
                <tbody>
                  {objectives.map(o => (
                    <tr key={o.id}>
                      <td style={{ fontSize: '13px', fontWeight: 500 }}>{o.employee_name}</td>
                      <td style={{ fontSize: '13px' }}>{o.title}</td>
                      <td>
                        {o.score !== null
                          ? <span className="badge badge-green">{o.score}/5</span>
                          : <span style={{ color: '#94a3b8', fontSize: '12px' }}>Not scored</span>}
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          )}
        </div>
      )}

      {/* Feedback Tab */}
      {tab === 'feedback' && (
        <div className="chart-card">
          {fb && fb.count > 0 ? (
            <div style={{ display: 'flex', alignItems: 'center', gap: '24px' }}>
              <div style={{ textAlign: 'center' }}>
                <div style={{ fontSize: '48px', fontWeight: 700, color: '#3b5bdb' }}>{fb.avg_rating}</div>
                <div style={{ fontSize: '12px', color: '#64748b' }}>Average Rating</div>
              </div>
              <div>
                <div style={{ fontSize: '13px', fontWeight: 500 }}>{fb.count} upward feedback submission{fb.count !== 1 ? 's' : ''}</div>
                <div style={{ fontSize: '12px', color: '#64748b', marginTop: '4px' }}>From team members for {manager?.name}</div>
              </div>
            </div>
          ) : (
            <p style={{ color: '#94a3b8', fontStyle: 'italic', fontSize: '13px' }}>No upward feedback received yet</p>
          )}
        </div>
      )}
    </div>
  );
}
