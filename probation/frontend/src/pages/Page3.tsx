import React, { useState, useEffect } from 'react';
import { Users, Clock, CircleCheck, UserCheck, Calendar, Star } from 'lucide-react';

const API = 'http://localhost/probation/backend/feedback360.php';

interface Ratings {
  innovation: number; communication: number;
  technical_skills: number; collaboration: number; leadership: number;
}

interface Cycle {
  id: number; name: string; department: string; position: string;
  status: string; due_date: string;
  total_reviewers: number; completed_reviewers: number;
  self_assessment: boolean; ratings: Ratings | null;
}

interface Stats { active: number; completed: number; reviewers: number; }

function initials(name: string) {
  return name.split(' ').map(n => n[0]).join('').toUpperCase().slice(0, 2);
}

const STATUS_CONFIG: Record<string, { label: string; bg: string; color: string; border: string }> = {
  collecting: { label: 'Collecting', bg: '#eff6ff', color: '#1d4ed8', border: '#bfdbfe' },
  active:     { label: 'Active',     bg: '#f0fdf4', color: '#15803d', border: '#bbf7d0' },
  completed:  { label: 'Completed',  bg: '#f0fdf4', color: '#15803d', border: '#bbf7d0' },
};

function CycleCard({ c }: { c: Cycle }) {
  const sc = STATUS_CONFIG[c.status] ?? STATUS_CONFIG.active;
  const progress = c.total_reviewers > 0 ? (c.completed_reviewers / c.total_reviewers) * 100 : 0;

  return (
    <div className="chart-card" style={{ cursor: 'pointer', transition: 'all 0.2s' }}
      onMouseEnter={e => (e.currentTarget.style.transform = 'translateY(-2px)')}
      onMouseLeave={e => (e.currentTarget.style.transform = 'none')}
    >
      {/* Header */}
      <div style={{ display: 'flex', alignItems: 'flex-start', justifyContent: 'space-between', marginBottom: '16px' }}>
        <div style={{ display: 'flex', alignItems: 'center', gap: '12px' }}>
          <div style={{ width: '40px', height: '40px', borderRadius: '50%', background: '#ede9fe', color: '#7c3aed', display: 'flex', alignItems: 'center', justifyContent: 'center', fontWeight: 600, fontSize: '14px', flexShrink: 0 }}>
            {initials(c.name)}
          </div>
          <div>
            <div style={{ fontWeight: 600, fontSize: '14px' }}>{c.name}</div>
            <div style={{ fontSize: '11px', color: '#64748b' }}>{c.position} · {c.department}</div>
          </div>
        </div>
        <span style={{ display: 'inline-flex', alignItems: 'center', gap: '4px', padding: '4px 10px', borderRadius: '6px', fontSize: '11px', fontWeight: 600, background: sc.bg, color: sc.color, border: `1px solid ${sc.border}` }}>
          {c.status === 'completed' ? <CircleCheck size={11} /> : <Clock size={11} />}
          {sc.label}
        </span>
      </div>

      {/* Progress */}
      <div style={{ marginBottom: '12px' }}>
        <div style={{ display: 'flex', justifyContent: 'space-between', fontSize: '11px', color: '#64748b', marginBottom: '6px' }}>
          <span>Reviewer Progress</span>
          <span style={{ fontWeight: 600 }}>{c.completed_reviewers}/{c.total_reviewers}</span>
        </div>
        <div style={{ height: '6px', background: 'rgba(59,91,219,0.15)', borderRadius: '3px', overflow: 'hidden' }}>
          <div style={{ height: '100%', width: `${progress}%`, background: '#3b5bdb', borderRadius: '3px', transition: 'width 0.4s' }} />
        </div>
      </div>

      {/* Skill ratings */}
      {c.ratings && (
        <div style={{ display: 'flex', flexWrap: 'wrap', gap: '6px', marginBottom: '12px' }}>
          {Object.entries(c.ratings).map(([key, val]) => (
            <span key={key} style={{ display: 'inline-flex', alignItems: 'center', gap: '4px', padding: '3px 8px', border: '1px solid #e2e8f0', borderRadius: '6px', fontSize: '11px', fontWeight: 600 }}>
              <Star size={11} color="#f59e0b" fill="#f59e0b" />
              {key.replace('_', ' ')}: {val}
            </span>
          ))}
        </div>
      )}

      {/* Footer */}
      <div style={{ display: 'flex', alignItems: 'center', gap: '16px', fontSize: '11px', color: '#64748b', paddingTop: '10px', borderTop: '1px solid #f1f5f9' }}>
        <span style={{ display: 'flex', alignItems: 'center', gap: '4px' }}>
          <Calendar size={11} /> Due: {c.due_date}
        </span>
        {c.self_assessment && (
          <span style={{ padding: '2px 8px', background: '#d1fae5', color: '#065f46', border: '1px solid #6ee7b7', borderRadius: '4px', fontSize: '11px', fontWeight: 600 }}>
            Self-assessment ✓
          </span>
        )}
      </div>
    </div>
  );
}

export default function Feedback360() {
  const [stats, setStats]   = useState<Stats>({ active: 0, completed: 0, reviewers: 0 });
  const [cycles, setCycles] = useState<Cycle[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError]   = useState<string | null>(null);

  useEffect(() => {
    fetch(API)
      .then(r => r.json())
      .then(d => { setStats(d.stats); setCycles(d.cycles); })
      .catch(e => setError(e.message))
      .finally(() => setLoading(false));
  }, []);

  return (
    <div>
      <h1 className="page-title" style={{ display: 'flex', alignItems: 'center', gap: '8px' }}>
        <Users size={22} color="#7c3aed" /> 360 Feedback
      </h1>
      <p className="page-sub">Multi-source feedback for comprehensive performance insights</p>

      {/* Stats */}
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3,1fr)', gap: '16px', margin: '24px 0' }}>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Active Cycles</div><div className="stat-value">{stats.active}</div></div>
            <div className="stat-icon" style={{ background: '#dbeafe', color: '#2563eb' }}><Clock size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Completed</div><div className="stat-value">{stats.completed}</div></div>
            <div className="stat-icon" style={{ background: '#d1fae5', color: '#059669' }}><CircleCheck size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Total Reviewers</div><div className="stat-value">{stats.reviewers}</div></div>
            <div className="stat-icon" style={{ background: '#ede9fe', color: '#7c3aed' }}><UserCheck size={20} /></div>
          </div>
        </div>
      </div>

      {loading && <p className="loading">Loading cycles...</p>}
      {error && <p className="error">❌ {error}</p>}

      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(2,1fr)', gap: '16px' }}>
        {cycles.map(c => <CycleCard key={c.id} c={c} />)}
      </div>
    </div>
  );
}
