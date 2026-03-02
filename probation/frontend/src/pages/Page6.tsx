import { useState, useEffect } from 'react';
import { BarChart2, UserCheck, CircleCheck, Star, Users } from 'lucide-react';
import {
  PieChart, Pie, Cell, Label,
  BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, Legend, ResponsiveContainer,
  LineChart, Line,
} from 'recharts';

const API = 'http://localhost/probation/backend/analytics.php';

interface Stats { in_probation: number; pass_rate: number; avg_feedback: number; cycles_360: number; }
interface Outcome { name: string; value: number; percent: number; color: string; }
interface DeptData { dept: string; in_probation: number; completed: number; }
interface Pipeline { status: string; count: number; }
interface Trend { month: string; leadership: number; communication: number; support: number; }

export default function Analytics() {
  const [stats, setStats]       = useState<Stats>({ in_probation: 0, pass_rate: 0, avg_feedback: 0, cycles_360: 0 });
  const [outcomes, setOutcomes] = useState<Outcome[]>([]);
  const [depts, setDepts]       = useState<DeptData[]>([]);
  const [pipeline, setPipeline] = useState<Pipeline[]>([]);
  const [trends, setTrends]     = useState<Trend[]>([]);
  const [loading, setLoading]   = useState(true);

  useEffect(() => {
    fetch(API)
      .then(r => r.json())
      .then(d => {
        setStats(d.stats);
        setOutcomes(d.outcomes);
        setDepts(d.departments);
        setPipeline(d.pipeline);
        setTrends(d.trends);
      })
      .finally(() => setLoading(false));
  }, []);

  if (loading) return <p className="loading">Loading analytics...</p>;

  return (
    <div>
      <h1 className="page-title" style={{ display: 'flex', alignItems: 'center', gap: '8px' }}>
        <BarChart2 size={22} color="#3b5bdb" /> Analytics &amp; Reports
      </h1>
      <p className="page-sub">Workforce analytics across probation and feedback</p>

      {/* Stats */}
      <div className="stats-grid" style={{ margin: '24px 0' }}>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">In Probation</div><div className="stat-value">{stats.in_probation}</div></div>
            <div className="stat-icon" style={{ background: 'rgba(59,91,219,0.1)', color: '#3b5bdb' }}><UserCheck size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Pass Rate</div><div className="stat-value">{stats.pass_rate}%</div></div>
            <div className="stat-icon" style={{ background: '#d1fae5', color: '#059669' }}><CircleCheck size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">Avg Feedback Score</div><div className="stat-value">{stats.avg_feedback}/5</div></div>
            <div className="stat-icon" style={{ background: '#fef3c7', color: '#d97706' }}><Star size={20} /></div>
          </div>
        </div>
        <div className="stat-card">
          <div className="stat-header">
            <div><div className="stat-label">360 Cycles</div><div className="stat-value">{stats.cycles_360}</div></div>
            <div className="stat-icon" style={{ background: '#ede9fe', color: '#7c3aed' }}><Users size={20} /></div>
          </div>
        </div>
      </div>

      {/* Charts Row 1 */}
      <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '24px', marginBottom: '24px' }}>

        {/* Probation Outcomes Donut */}
        <div className="chart-card">
          <div className="chart-title">Probation Outcomes</div>
          <ResponsiveContainer width="100%" height={260}>
            <PieChart>
              <Pie data={outcomes} cx="50%" cy="50%" innerRadius={60} outerRadius={90}
                dataKey="value" label={({ name, percent }) => `${name} ${percent}%`} labelLine>
                {outcomes.map((o, i) => <Cell key={i} fill={o.color} />)}
              </Pie>
              <Tooltip />
            </PieChart>
          </ResponsiveContainer>
        </div>

        {/* Department Overview */}
        <div className="chart-card">
          <div className="chart-title">Department Overview</div>
          <ResponsiveContainer width="100%" height={260}>
            <BarChart data={depts} margin={{ top: 5, right: 5, left: -20, bottom: 5 }}>
              <CartesianGrid strokeDasharray="3 3" />
              <XAxis dataKey="dept" tick={{ fontSize: 11 }} />
              <YAxis tick={{ fontSize: 11 }} />
              <Tooltip />
              <Legend />
              <Bar dataKey="in_probation" name="In Probation" fill="hsl(230,65%,48%)" radius={[4,4,0,0]} />
              <Bar dataKey="completed" name="Completed" fill="hsl(160,55%,42%)" radius={[4,4,0,0]} />
            </BarChart>
          </ResponsiveContainer>
        </div>
      </div>

      {/* Charts Row 2 */}
      <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '24px' }}>

        {/* Review Pipeline Horizontal Bar */}
        <div className="chart-card">
          <div className="chart-title">Review Pipeline</div>
          <ResponsiveContainer width="100%" height={260}>
            <BarChart data={pipeline} layout="vertical" margin={{ top: 5, right: 20, left: 10, bottom: 5 }}>
              <CartesianGrid strokeDasharray="3 3" />
              <XAxis type="number" tick={{ fontSize: 11 }} />
              <YAxis dataKey="status" type="category" tick={{ fontSize: 11 }} width={90} />
              <Tooltip />
              <Bar dataKey="count" fill="hsl(230,65%,48%)" radius={[0,4,4,0]} />
            </BarChart>
          </ResponsiveContainer>
        </div>

        {/* Upward Feedback Trends Line Chart */}
        <div className="chart-card">
          <div className="chart-title">Upward Feedback Trends</div>
          <ResponsiveContainer width="100%" height={260}>
            <LineChart data={trends} margin={{ top: 5, right: 5, left: -20, bottom: 5 }}>
              <CartesianGrid strokeDasharray="3 3" />
              <XAxis dataKey="month" tick={{ fontSize: 11 }} />
              <YAxis domain={[0, 5]} tick={{ fontSize: 11 }} />
              <Tooltip />
              <Legend />
              <Line type="monotone" dataKey="leadership"    stroke="hsl(230,65%,48%)" strokeWidth={2} dot={{ r: 4 }} />
              <Line type="monotone" dataKey="communication" stroke="hsl(160,55%,42%)" strokeWidth={2} dot={{ r: 4 }} />
              <Line type="monotone" dataKey="support"       stroke="hsl(40,95%,55%)"  strokeWidth={2} dot={{ r: 4 }} />
            </LineChart>
          </ResponsiveContainer>
        </div>
      </div>
    </div>
  );
}
