# 🏢 TalentFlow - HR Management System

An **Enterprise HR Platform** that helps companies manage their employees' **Probation Period** (the first 6 months of employment).

---

## 🎯 Project Purpose

When someone joins a new job, they go through a probation period for the first few months. During this time:

- The **Manager** evaluates the employee
- The **Employee** also evaluates themselves
- **HR** tracks everything

---

## 📄 What the 7 Pages Do

### 1. HR Dashboard (`/`)

- Overview of everything
- Shows how many employees are on probation and how many reviews are pending
- Displays data with charts

### 2. Probation Reviews (`/probation`)

- List of all employee reviews
- Supports search and filtering
- Shows status: `Scheduled`, `In Progress`, `Completed`

### 3. Upward Feedback (`/upward-feedback`)

- Employees rate their **Manager**
- Categories: Communication, Leadership, Support, Fairness
- Managers can see how they are performing

### 4. 360 Feedback (`/360-feedback`)

- Multi-source evaluation
- Manager, Peers, and Self — everyone gives ratings
- Covers Innovation, Technical Skills, Collaboration, etc.

### 5. Manager View (`/manager`)

- Manager can view their team
- See who has a review scheduled and what objectives are set
- View their own Upward Feedback scores

### 6. Employee View (`/employee`)

- Employee can view all their own information
- Probation Journey Timeline
- Submit Self Score on their objectives
- Compare with Manager Score

### 7. Analytics (`/analytics`)

- Company-wide reports
- Pass Rate %, number of employees per department
- Feedback trend — increasing or decreasing
