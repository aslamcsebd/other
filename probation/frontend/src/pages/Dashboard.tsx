import { useState, useEffect } from 'react';
import { PieChart, Pie, Cell, BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, ResponsiveContainer } from 'recharts';
import { UserCheck, TriangleAlert, Clock, CircleCheck, ArrowRight } from 'lucide-react';
import { Link } from 'react-router-dom';

const API = 'http://localhost/probation/backend';

interface Stats {
  in_probation: number;
  overdue_reviews: number;
  pending_signatures: number;
  completed_reviews: number;
}

interface UpcomingReview {
  name: string;
  type: string;
  date: string;
  is_today: boolean;
}

interface DeptData { dept: string; reviews: number; pending: number; }
interface OutcomeData { name: string; value: number; }

const OUTCOME_COLORS = ['hsl(230,65%,48%)', 'hsl(160,55%,42%)', 'hsl(40,95%,55%)'];
const DEPT_COLOR_1 = 'hsl(230,65%,48%)';
const DEPT_COLOR_2 = 'hsl(40,95%,55%)';

export default function Dashboard() {
  const [stats, setStats] = useState<Stats>({ in_probation: 0, overdue_reviews: 0, pending_signatures: 0, completed_reviews: 0 });
  const [outcomes, setOutcomes] = useState<OutcomeData[]>([]);
  const [deptData, setDeptData] = useState<DeptData[]>([]);
  const [upcoming, setUpcoming] = useState<UpcomingReview[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    Promise.all([
      fetch(`${API}/dashboard.php`).then(r => r.json()),
    ])
      .then(([data]) => {
        setStats(data.stats);
        setOutcomes(data.outcomes);
        setDeptData(data.departments);
        setUpcoming(data.upcoming);
      })
      .catch(err => setError(err.message))
      .finally(() => setLoading(false));
  }, []);

  if (loading) return <p className="loading">Loading dashboard...</p>;
  if (error) return <p className="error">❌ {error}</p>;

  return (
    <div>
      <h1 className="page-title">HR Dashboard</h1>
      <p className="page-sub">Probation reviews, feedback cycles &amp; workforce analytics</p>

      {/* Stats */}
      <div className="stats-grid">
        <div className="stat-card">
          <div className="stat-header">
            <div>
              <div className="stat-label">In Probation</div>
              <div className="stat-value">{stats.in_probation}</div>
            </div>
            <div className="stat-icon" style={{ background: 'rgba(59,91,219,0.1)', color: '#3b5bdb' }}>
              <UserCheck size={20} />
            </div>
          </div>
          <div className="stat-trend">↑ 12% <span>vs last period</span></div>
        </div>

        <div className="stat-card">
          <div className="stat-header">
            <div>
              <div className="stat-label">Overdue Reviews</div>
              <div className="stat-value">{stats.overdue_reviews}</div>
            </div>
            <div className="stat-icon" style={{ background: '#fee2e2', color: '#e11d48' }}>
              <TriangleAlert size={20} />
            </div>
          </div>
        </div>

        <div className="stat-card">
          <div className="stat-header">
            <div>
              <div className="stat-label">Pending Signatures</div>
              <div className="stat-value">{stats.pending_signatures}</div>
            </div>
            <div className="stat-icon" style={{ background: '#fef3c7', color: '#d97706' }}>
              <Clock size={20} />
            </div>
          </div>
        </div>

        <div className="stat-card">
          <div className="stat-header">
            <div>
              <div className="stat-label">Completed Reviews</div>
              <div className="stat-value">{stats.completed_reviews}</div>
            </div>
            <div className="stat-icon" style={{ background: '#d1fae5', color: '#059669' }}>
              <CircleCheck size={20} />
            </div>
          </div>
          <div className="stat-trend">↑ 25% <span>vs last period</span></div>
        </div>
      </div>

      {/* Charts + Upcoming */}
      <div className="charts-row">
        {/* Pie Chart */}
        <div className="chart-card">
          <div className="chart-title">Review Outcomes</div>
          <ResponsiveContainer width="100%" height={200}>
            <PieChart>
              <Pie data={outcomes} cx="50%" cy="50%" innerRadius={55} outerRadius={80} dataKey="value">
                {outcomes.map((_, i) => <Cell key={i} fill={OUTCOME_COLORS[i % OUTCOME_COLORS.length]} />)}
              </Pie>
              <Tooltip />
            </PieChart>
          </ResponsiveContainer>
          <div className="legend">
            {outcomes.map((o, i) => (
              <div key={i} className="legend-item">
                <div className="legend-dot" style={{ background: OUTCOME_COLORS[i] }} />
                {o.name}
              </div>
            ))}
          </div>
        </div>

        {/* Bar Chart */}
        <div className="chart-card">
          <div className="chart-title">By Department</div>
          <ResponsiveContainer width="100%" height={220}>
            <BarChart data={deptData} margin={{ top: 5, right: 5, left: -20, bottom: 5 }}>
              <CartesianGrid strokeDasharray="3 3" stroke="hsl(var(--border, 220 13% 91%))" />
              <XAxis dataKey="dept" tick={{ fontSize: 11 }} />
              <YAxis tick={{ fontSize: 11 }} />
              <Tooltip />
              <Bar dataKey="reviews" fill={DEPT_COLOR_1} radius={[4, 4, 0, 0]} />
              <Bar dataKey="pending" fill={DEPT_COLOR_2} radius={[4, 4, 0, 0]} />
            </BarChart>
          </ResponsiveContainer>
        </div>

        {/* Upcoming Reviews */}
        <div className="chart-card">
          <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '16px' }}>
            <div className="chart-title" style={{ marginBottom: 0 }}>Upcoming Reviews</div>
            <Link to="/probation" style={{ display: 'flex', alignItems: 'center', gap: '4px', fontSize: '12px', color: '#64748b', textDecoration: 'none' }}>
              View All <ArrowRight size={12} />
            </Link>
          </div>
          {upcoming.length === 0 ? (
            <p style={{ fontSize: '13px', color: '#94a3b8' }}>No upcoming reviews</p>
          ) : (
            upcoming.map((r, i) => (
              <div key={i} className="review-item">
                <div>
                  <div className="review-name">{r.name}</div>
                  <div className="review-meta">{r.type} · {r.date}</div>
                </div>
                {r.is_today && <span className="badge-today">Today</span>}
              </div>
            ))
          )}
        </div>
      </div>

      {/* Quick Links */}
      <div className="quick-grid">
        <Link to="/probation" className="quick-card">
          <div className="quick-icon"><UserCheck size={20} color="#3b5bdb" /></div>
          <div>
            <div className="quick-title">Probation Reviews</div>
            <div className="quick-sub">{stats.in_probation + stats.completed_reviews} total reviews</div>
          </div>
          <ArrowRight size={16} className="arrow-icon" />
        </Link>
        <Link to="/upward-feedback" className="quick-card">
          <div className="quick-icon"><span style={{ fontSize: '20px' }}>💬</span></div>
          <div>
            <div className="quick-title">Upward Feedback</div>
            <div className="quick-sub">5 submissions</div>
          </div>
          <ArrowRight size={16} className="arrow-icon" />
        </Link>
        <Link to="/360-feedback" className="quick-card">
          <div className="quick-icon"><span style={{ fontSize: '20px' }}>👥</span></div>
          <div>
            <div className="quick-title">360 Feedback</div>
            <div className="quick-sub">3 active cycles</div>
          </div>
          <ArrowRight size={16} className="arrow-icon" />
        </Link>
      </div>
    </div>
  );
}
