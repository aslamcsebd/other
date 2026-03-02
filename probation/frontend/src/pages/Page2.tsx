import React, { useState, useEffect } from 'react';
import { MessageSquare, Users, Star, BarChart2, ChevronDown, ChevronUp } from 'lucide-react';

const API = 'http://localhost/probation/backend/upward-feedback.php';

interface Manager {
  id: number;
  name: string;
  department: string;
  responses: number;
  overall_score: number;
  communication: number;
  leadership: number;
  support: number;
  fairness: number;
}

interface Stats { total: number; managers: number; avg_rating: number; }

function initials(name: string) {
  return name.split(' ').map(n => n[0]).join('').toUpperCase().slice(0, 2);
}

function RatingBar({ label, value }: { label: string; value: number }) {
  return (
    <div style={{ marginBottom: '8px' }}>
      <div style={{ display: 'flex', justifyContent: 'space-between', fontSize: '12px', marginBottom: '4px' }}>
        <span style={{ color: '#64748b' }}>{label}</span>
        <span style={{ fontWeight: 600 }}>{value}/5</span>
      </div>
      <div style={{ height: '6px', background: '#f1f5f9', borderRadius: '3px', overflow: 'hidden' }}>
        <div style={{ height: '100%', width: `${(value / 5) * 100}%`, background: '#3b5bdb', borderRadius: '3px', transition: 'width 0.4s' }} />
      </div>
    </div>
  );
}

function ManagerCard({ m }: { m: Manager }) {
  const [open, setOpen] = useState(false);
  return (
    <div className="chart-card" style={{ marginBottom: '16px' }}>
      <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'space-between' }}>
        <div style={{ display: 'flex', alignItems: 'center', gap: '12px' }}>
          <div className="avatar" style={{ width: '40px', height: '40px', fontSize: '14px', flexShrink: 0 }}>{initials(m.name)}</div>
          <div>
            <div style={{ fontWeight: 600, fontSize: '15px' }}>{m.name}</div>
            <div style={{ fontSize: '12px', color: '#64748b' }}>{m.department} · {m.responses} response{m.responses !== 1 ? 's' : ''}</div>
          </div>
        </div>
        <div style={{ display: 'flex', alignItems: 'center', gap: '12px' }}>
          <div style={{ textAlign: 'right' }}>
            <div style={{ fontSize: '22px', fontWeight: 700 }}>{m.overall_score}</div>
            <div style={{ fontSize: '11px', color: '#64748b' }}>Overall Score</div>
          </div>
          <button
            onClick={() => setOpen(o => !o)}
            style={{ display: 'flex', alignItems: 'center', gap: '6px', padding: '6px 12px', background: '#3b5bdb', color: '#fff', border: 'none', borderRadius: '6px', fontSize: '12px', fontWeight: 500, cursor: 'pointer' }}
          >
            <BarChart2 size={13} /> View Report {open ? <ChevronUp size={13} /> : <ChevronDown size={13} />}
          </button>
        </div>
      </div>

      {open && (
        <div style={{ marginTop: '20px', paddingTop: '16px', borderTop: '1px solid #e2e8f0' }}>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '24px' }}>
            <div>
              <RatingBar label="Communication" value={m.communication} />
              <RatingBar label="Leadership" value={m.leadership} />
            </div>
            <div>
              <RatingBar label="Support" value={m.support} />
              <RatingBar label="Fairness" value={m.fairness} />
            </div>
          </div>
          {/* Star display */}
          <div style={{ marginTop: '12px', display: 'flex', alignItems: 'center', gap: '4px' }}>
            {[1,2,3,4,5].map(s => (
              <Star key={s} size={16} fill={s <= Math.round(m.overall_score) ? '#f59e0b' : 'none'} color={s <= Math.round(m.overall_score) ? '#f59e0b' : '#d1d5db'} />
            ))}
            <span style={{ fontSize: '12px', color: '#64748b', marginLeft: '6px' }}>{m.overall_score} out of 5</span>
          </div>
        </div>
      )}
    </div>
  );
}

export default function UpwardFeedback() {
  const [stats, setStats]       = useState<Stats>({ total: 0, managers: 0, avg_rating: 0 });
  const [managers, setManagers] = useState<Manager[]>([]);
  const [loading, setLoading]   = useState(true);
  const [error, setError]       = useState<string | null>(null);

  useEffect(() => {
    fetch(API)
      .then(r => r.json())
      .then(d => { setStats(d.stats); setManagers(d.managers); })
      .catch(e => setError(e.message))
      .finally(() => setLoading(false));
  }, []);

  return (
    <div>
      <h1 className="page-title" style={{ display: 'flex', alignItems: 'center', gap: '8px' }}>
        <MessageSquare size={22} color="#f59e0b" /> Upward Feedback
      </h1>
      <p className="page-sub">Confidential feedback for leadership development</p>

      {/* Stats */}
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3,1fr)', gap: '16px', margin: '24px 0' }}>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Total Submissions</div><div className="stat-value">{stats.total}</div></div>
            <div className="stat-icon" style={{ background: 'rgba(59,91,219,0.1)', color: '#3b5bdb' }}><MessageSquare size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Managers Reviewed</div><div className="stat-value">{stats.managers}</div></div>
            <div className="stat-icon" style={{ background: '#ede9fe', color: '#7c3aed' }}><Users size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Avg Rating</div><div className="stat-value">{stats.avg_rating}/5</div></div>
            <div className="stat-icon" style={{ background: '#fef3c7', color: '#d97706' }}><Star size={20} /></div>
          </div>
        </div>
      </div>

      {/* Manager Cards */}
      {loading && <p className="loading">Loading feedback...</p>}
      {error && <p className="error">❌ {error}</p>}
      {managers.map(m => <ManagerCard key={m.id} m={m} />)}
    </div>
  );
}
