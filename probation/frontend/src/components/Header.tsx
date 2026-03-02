import { Search, Bell, ChevronDown } from 'lucide-react';

export default function Header() {
  return (
    <header className="header">
      <div className="header-search">
        <Search size={15} color="#94a3b8" />
        <input placeholder="Search employees, reviews, feedback..." />
      </div>
      <div className="header-right">
        <div className="role-badge">
          <span>👤</span>
          <span>Sarah Mitchell (Employee)</span>
          <ChevronDown size={12} />
        </div>
        <button className="notif-btn">
          <Bell size={16} color="#94a3b8" />
          <span className="notif-dot" />
        </button>
        <div className="divider-v" />
        <div style={{ display: 'flex', alignItems: 'center', gap: '10px' }}>
          <div className="avatar">SM</div>
          <div className="user-info">
            <p>Sarah Mitchell</p>
            <span>Employee</span>
          </div>
        </div>
      </div>
    </header>
  );
}
