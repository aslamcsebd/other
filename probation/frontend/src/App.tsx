import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Sidebar from './components/Sidebar';
import Header from './components/Header';
import Dashboard from './pages/Dashboard';
import Probation from './pages/Page1';
import UpwardFeedback from './pages/Page2';
import Feedback360 from './pages/Page3';
import ManagerView from './pages/Page4';
import EmployeeView from './pages/Page5';
import Analytics from './pages/Page6';
import ReviewDetail from './pages/ReviewDetail';

export default function App() {
  return (
    <BrowserRouter>
      <div className="layout">
        <Sidebar />
        <div className="main">
          <Header />
          <main className="page">
            <Routes>
              <Route path="/" element={<Dashboard />} />
              <Route path="/probation" element={<Probation />} />
              <Route path="/upward-feedback" element={<UpwardFeedback />} />
              <Route path="/360-feedback" element={<Feedback360 />} />
              <Route path="/manager" element={<ManagerView />} />
              <Route path="/employee" element={<EmployeeView />} />
              <Route path="/analytics" element={<Analytics />} />
              <Route path="/probation/:id" element={<ReviewDetail />} />
            </Routes>
          </main>
        </div>
      </div>
    </BrowserRouter>
  );
}
