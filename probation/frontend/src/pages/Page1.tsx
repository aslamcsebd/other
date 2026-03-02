import React, { useState, useEffect, useCallback } from 'react';
import { useNavigate } from 'react-router-dom';
import { UserCheck, Clock, FilePenLine, CircleCheck, Search, Building2, Calendar, Eye, ChevronDown } from 'lucide-react';

const API = 'http://localhost/probation/backend/probation.php';

interface Review {
  id: number;
  name: string;
  email: string;
  department: string;
  review_type: string;
  review_date: string;
  status: string;
  outcome: string | null;
}

interface Stats { total: number; upcoming: number; awaiting: number; completed: number; }

const STATUS_CONFIG: Record<string, { label: string; color: string; icon: React.ReactElement }> = {
  scheduled:          { label: 'Scheduled',          color: 'badge-blue',   icon: <Clock size={11} /> },
  in_progress:        { label: 'In Progress',         color: 'badge-purple', icon: <span style={{fontSize:11}}>⟳</span> },
  awaiting_signature: { label: 'Awaiting Signature',  color: 'badge-yellow', icon: <FilePenLine size={11} /> },
  completed:          { label: 'Completed',           color: 'badge-green',  icon: <CircleCheck size={11} /> },
};

const OUTCOME_CONFIG: Record<string, { label: string; color: string }> = {
  passed:   { label: 'Passed',   color: 'badge-green' },
  extended: { label: 'Extended', color: 'badge-yellow' },
  failed:   { label: 'Failed',   color: 'badge-red' },
};

function initials(name: string) {
  return name.split(' ').map(n => n[0]).join('').toUpperCase().slice(0, 2);
}

export default function ProbationReviews() {
  const navigate = useNavigate();
  const [stats, setStats]     = useState<Stats>({ total: 0, upcoming: 0, awaiting: 0, completed: 0 });
  const [reviews, setReviews] = useState<Review[]>([]);
  const [types, setTypes]     = useState<string[]>([]);
  const [total, setTotal]     = useState(0);
  const [pages, setPages]     = useState(1);
  const [page, setPage]       = useState(1);
  const [search, setSearch]   = useState('');
  const [status, setStatus]   = useState('');
  const [type, setType]       = useState('');
  const [loading, setLoading] = useState(true);
  const [error, setError]     = useState<string | null>(null);

  const fetchData = useCallback(() => {
    setLoading(true);
    const params = new URLSearchParams({ search, status, type, page: String(page) });
    fetch(`${API}?${params}`)
      .then(r => r.json())
      .then(d => {
        setStats(d.stats);
        setReviews(d.reviews);
        setTypes(d.types);
        setTotal(d.total);
        setPages(d.pages);
      })
      .catch(e => setError(e.message))
      .finally(() => setLoading(false));
  }, [search, status, type, page]);

  useEffect(() => { fetchData(); }, [fetchData]);

  // reset to page 1 on filter change
  useEffect(() => { setPage(1); }, [search, status, type]);

  return (
    <div>
      {/* Header */}
      <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'space-between', marginBottom: '24px' }}>
        <div>
          <h1 className="page-title" style={{ display: 'flex', alignItems: 'center', gap: '8px' }}>
            <UserCheck size={22} color="#3b5bdb" /> Probation Reviews
          </h1>
          <p className="page-sub">Manage all probation review cycles across the organisation</p>
        </div>
      </div>

      {/* Stats */}
      <div className="stats-grid" style={{ gridTemplateColumns: 'repeat(4,1fr)', marginBottom: '24px' }}>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Total Reviews</div><div className="stat-value">{stats.total}</div></div>
            <div className="stat-icon" style={{ background: 'rgba(59,91,219,0.1)', color: '#3b5bdb' }}><UserCheck size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Upcoming</div><div className="stat-value">{stats.upcoming}</div></div>
            <div className="stat-icon" style={{ background: '#dbeafe', color: '#2563eb' }}><Clock size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Awaiting Action</div><div className="stat-value">{stats.awaiting}</div></div>
            <div className="stat-icon" style={{ background: '#fef3c7', color: '#d97706' }}><FilePenLine size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Completed</div><div className="stat-value">{stats.completed}</div></div>
            <div className="stat-icon" style={{ background: '#d1fae5', color: '#059669' }}><CircleCheck size={20} /></div>
          </div>
        </div>
      </div>

      {/* Filters */}
      <div className="chart-card" style={{ marginBottom: '16px', padding: '16px' }}>
        <div style={{ display: 'flex', gap: '12px', flexWrap: 'wrap' }}>
          <div style={{ flex: 1, minWidth: '200px', position: 'relative' }}>
            <Search size={15} style={{ position: 'absolute', left: '10px', top: '50%', transform: 'translateY(-50%)', color: '#94a3b8' }} />
            <input
              style={{ width: '100%', padding: '8px 12px 8px 32px', border: '1px solid #e2e8f0', borderRadius: '6px', fontSize: '13px', outline: 'none' }}
              placeholder="Search employee or department..."
              value={search}
              onChange={e => setSearch(e.target.value)}
            />
          </div>
          <div style={{ position: 'relative' }}>
            <select
              style={{ appearance: 'none', padding: '8px 32px 8px 12px', border: '1px solid #e2e8f0', borderRadius: '6px', fontSize: '13px', background: '#fff', cursor: 'pointer', minWidth: '160px' }}
              value={status}
              onChange={e => setStatus(e.target.value)}
            >
              <option value="">All Statuses</option>
              <option value="scheduled">Scheduled</option>
              <option value="in_progress">In Progress</option>
              <option value="awaiting_signature">Awaiting Signature</option>
              <option value="completed">Completed</option>
            </select>
            <ChevronDown size={14} style={{ position: 'absolute', right: '10px', top: '50%', transform: 'translateY(-50%)', pointerEvents: 'none', color: '#94a3b8' }} />
          </div>
          <div style={{ position: 'relative' }}>
            <select
              style={{ appearance: 'none', padding: '8px 32px 8px 12px', border: '1px solid #e2e8f0', borderRadius: '6px', fontSize: '13px', background: '#fff', cursor: 'pointer', minWidth: '160px' }}
              value={type}
              onChange={e => setType(e.target.value)}
            >
              <option value="">All Types</option>
              {types.map(t => <option key={t} value={t}>{t}</option>)}
            </select>
            <ChevronDown size={14} style={{ position: 'absolute', right: '10px', top: '50%', transform: 'translateY(-50%)', pointerEvents: 'none', color: '#94a3b8' }} />
          </div>
        </div>
      </div>

      {/* Table */}
      {error && <p className="error">❌ {error}</p>}
      <div className="chart-card" style={{ padding: 0 }}>
        <div className="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Employee</th>
                <th>Department</th>
                <th>Review Type</th>
                <th>Date</th>
                <th>Status</th>
                <th>Outcome</th>
                <th style={{ textAlign: 'right' }}>Actions</th>
              </tr>
            </thead>
            <tbody>
              {loading ? (
                <tr><td colSpan={7} style={{ textAlign: 'center', padding: '24px', color: '#94a3b8' }}>Loading...</td></tr>
              ) : reviews.length === 0 ? (
                <tr><td colSpan={7} style={{ textAlign: 'center', padding: '24px', color: '#94a3b8' }}>No reviews found</td></tr>
              ) : reviews.map(r => {
                const sc = STATUS_CONFIG[r.status] ?? { label: r.status, color: 'badge-blue', icon: null };
                const oc = r.outcome ? OUTCOME_CONFIG[r.outcome] : null;
                return (
                  <tr key={r.id}>
                    <td>
                      <div style={{ display: 'flex', alignItems: 'center', gap: '10px' }}>
                        <div className="avatar" style={{ flexShrink: 0 }}>{initials(r.name)}</div>
                        <div>
                          <div style={{ fontSize: '13px', fontWeight: 500 }}>{r.name}</div>
                          <div style={{ fontSize: '11px', color: '#94a3b8' }}>{r.email}</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <span style={{ display: 'flex', alignItems: 'center', gap: '6px', fontSize: '13px' }}>
                        <Building2 size={13} color="#94a3b8" /> {r.department}
                      </span>
                    </td>
                    <td style={{ fontSize: '13px', textTransform: 'capitalize' }}>{r.review_type}</td>
                    <td>
                      <span style={{ display: 'flex', alignItems: 'center', gap: '6px', fontSize: '13px' }}>
                        <Calendar size={13} color="#94a3b8" /> {r.review_date}
                      </span>
                    </td>
                    <td>
                      <span className={`badge ${sc.color}`} style={{ display: 'inline-flex', alignItems: 'center', gap: '4px' }}>
                        {sc.icon} {sc.label}
                      </span>
                    </td>
                    <td>
                      {oc
                        ? <span className={`badge ${oc.color}`}>{oc.label}</span>
                        : <span style={{ color: '#94a3b8', fontSize: '12px' }}>—</span>
                      }
                    </td>
                    <td style={{ textAlign: 'right' }}>
                      <button
                        className="page-btn"
                        onClick={() => navigate(`/probation/${r.id}`)}
                        style={{ display: 'inline-flex', alignItems: 'center', gap: '4px', fontSize: '12px' }}
                      >
                        <Eye size={13} /> View
                      </button>
                    </td>
                  </tr>
                );
              })}
            </tbody>
          </table>
        </div>

        {/* Pagination */}
        <div className="pagination" style={{ padding: '12px 16px' }}>
          <span>Showing {reviews.length} of {total} reviews</span>
          <div className="page-btns">
            <button className="page-btn" onClick={() => setPage(p => Math.max(1, p - 1))} disabled={page === 1}>‹ Prev</button>
            {Array.from({ length: pages }, (_, i) => i + 1).map(p => (
              <button key={p} className={`page-btn ${p === page ? 'active' : ''}`} onClick={() => setPage(p)}>{p}</button>
            ))}
            <button className="page-btn" onClick={() => setPage(p => Math.min(pages, p + 1))} disabled={page === pages}>Next ›</button>
          </div>
        </div>
      </div>
    </div>
  );
}
