import { NavLink } from 'react-router-dom';
import {
  LayoutDashboard, UserCheck, MessageSquare, Users,
  ClipboardCheck, Shield, BarChart2, ChevronLeft
} from 'lucide-react';

const navItems = [
  { to: '/', label: 'HR Dashboard', icon: LayoutDashboard },
  { to: '/probation', label: 'Probation Reviews', icon: UserCheck },
  { to: '/upward-feedback', label: 'Upward Feedback', icon: MessageSquare },
  { to: '/360-feedback', label: '360 Feedback', icon: Users },
];

const navItems2 = [
  { to: '/manager', label: 'Manager View', icon: ClipboardCheck },
  { to: '/employee', label: 'Employee View', icon: Shield },
];

const navItems3 = [
  { to: '/analytics', label: 'Analytics', icon: BarChart2 },
];

export default function Sidebar() {
  return (
    <aside className="sidebar">
      <div className="sidebar-logo">
        <div className="sidebar-logo-icon">
          <Shield size={18} color="#fff" />
        </div>
        <div>
          <div className="sidebar-logo-text">HR MODULE</div>
          <div className="sidebar-logo-sub">Enterprise Suite</div>
        </div>
      </div>

      <nav className="sidebar-nav">
        {navItems.map(({ to, label, icon: Icon }) => (
          <NavLink key={to} to={to} end={to === '/'}>
            {({ isActive }) => (
              <div className={`nav-item ${isActive ? 'active' : ''}`}>
                <Icon size={17} /> <span>{label}</span>
              </div>
            )}
          </NavLink>
        ))}

        <div className="nav-divider" />

        {navItems2.map(({ to, label, icon: Icon }) => (
          <NavLink key={to} to={to}>
            {({ isActive }) => (
              <div className={`nav-item ${isActive ? 'active' : ''}`}>
                <Icon size={17} /> <span>{label}</span>
              </div>
            )}
          </NavLink>
        ))}

        <div className="nav-divider" />

        {navItems3.map(({ to, label, icon: Icon }) => (
          <NavLink key={to} to={to}>
            {({ isActive }) => (
              <div className={`nav-item ${isActive ? 'active' : ''}`}>
                <Icon size={17} /> <span>{label}</span>
              </div>
            )}
          </NavLink>
        ))}
      </nav>

      <div style={{ padding: '12px', borderTop: '1px solid #1e293b' }}>
        <button style={{ width: '100%', display: 'flex', justifyContent: 'center', padding: '8px', borderRadius: '8px', border: 'none', background: 'transparent', color: '#475569', cursor: 'pointer' }}>
          <ChevronLeft size={16} />
        </button>
      </div>
    </aside>
  );
}
