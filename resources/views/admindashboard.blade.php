@extends('layouts.adminlayout')

@section('pageContent')

<div class="dashboard">

    <!-- Page Heading -->
    <div class="page-header">
        <div>
            <h1>Dashboard</h1>
            <p>Welcome back, {{ Auth::user()->name }} </p>
        </div>
    </div>


    <!-- Statistics Cards -->
    <div class="stats-grid">

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa-solid fa-diagram-project"></i>
            </div>

            <div>
                <p>Total Projects</p>
                <h2>12</h2>
            </div>
        </div>


        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div>
                <p>Total Enquiries</p>
                <h2>24</h2>
            </div>
        </div>


        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa-solid fa-eye"></i>
            </div>

            <div>
                <p>Portfolio Views</p>
                <h2>1,250</h2>
            </div>
        </div>


        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <div>
                <p>Technologies</p>
                <h2>8</h2>
            </div>
        </div>

    </div>


    <!-- Main Dashboard Sections -->
    <div class="dashboard-grid">

        <!-- Recent Projects -->
        <div class="dashboard-card">

            <div class="card-header">
                <h2>Recent Projects</h2>

                <a href="{{ route('addproject') }}">
                    Add Project
                </a>
            </div>

            <div class="project-list">

                <div class="project-item">
                    <div>
                        <h3>Portfolio Website</h3>
                        <p>Laravel • HTML • CSS • JavaScript</p>
                    </div>

                    <span class="status">Completed</span>
                </div>


                <div class="project-item">
                    <div>
                        <h3>User Management System</h3>
                        <p>PHP • MySQL • XAMPP</p>
                    </div>

                    <span class="status">Completed</span>
                </div>


                <div class="project-item">
                    <div>
                        <h3>Music Player</h3>
                        <p>HTML • CSS • JavaScript</p>
                    </div>

                    <span class="status">Working</span>
                </div>

            </div>

        </div>


        <!-- Quick Actions -->
        <div class="dashboard-card">

            <div class="card-header">
                <h2>Quick Actions</h2>
            </div>

            <div class="quick-actions">

                <a href="{{ route('addproject') }}" class="action-btn">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Project</span>
                </a>

                <a href="{{ route('enquiries') }}" class="action-btn">
                    <i class="fa-solid fa-envelope"></i>
                    <span>View Enquiries</span>
                </a>

                <a href="{{ url('/') }}" class="action-btn">
                    <i class="fa-solid fa-globe"></i>
                    <span>View Website</span>
                </a>

            </div>

        </div>

    </div>

</div>


<style>

/* Dashboard */

.dashboard {
    width: 100%;
}


/* Heading */

.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.page-header h1 {
    margin: 0;
    font-size: 30px;
}

.page-header p {
    margin-top: 6px;
    color: #777;
}


/* Statistics */

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 25px;
}

.stat-card {
    background: white;
    padding: 22px;
    border-radius: 14px;

    display: flex;
    align-items: center;
    gap: 18px;

    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
}

.stat-icon {
    width: 55px;
    height: 55px;

    border-radius: 12px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #111;
    color: white;

    font-size: 20px;
}

.stat-card p {
    margin: 0 0 5px;
    color: #777;
    font-size: 14px;
}

.stat-card h2 {
    margin: 0;
    font-size: 25px;
}


/* Dashboard Grid */

.dashboard-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 25px;
}


/* Cards */

.dashboard-card {
    background: white;
    border-radius: 14px;
    padding: 25px;

    box-shadow: 0 5px 20px rgba(0,0,0,0.06);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    margin-bottom: 20px;
}

.card-header h2 {
    margin: 0;
    font-size: 20px;
}

.card-header a {
    text-decoration: none;
    background: #111;
    color: white;

    padding: 9px 14px;
    border-radius: 7px;

    font-size: 13px;
}


/* Projects */

.project-list {
    display: flex;
    flex-direction: column;
}

.project-item {
    display: flex;
    justify-content: space-between;
    align-items: center;

    padding: 17px 0;

    border-bottom: 1px solid #eee;
}

.project-item:last-child {
    border-bottom: none;
}

.project-item h3 {
    margin: 0 0 5px;
    font-size: 16px;
}

.project-item p {
    margin: 0;
    color: #888;
    font-size: 13px;
}


/* Status */

.status {
    font-size: 12px;
    padding: 6px 10px;

    border-radius: 20px;

    background: #eee;
}


/* Quick Actions */

.quick-actions {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.action-btn {
    display: flex;
    align-items: center;
    gap: 14px;

    padding: 15px;

    text-decoration: none;
    color: #222;

    background: #f7f7f7;

    border-radius: 10px;

    transition: 0.2s;
}

.action-btn:hover {
    background: #eee;
}

.action-btn i {
    width: 25px;
}


/* Responsive */

@media (max-width: 1000px) {

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .dashboard-grid {
        grid-template-columns: 1fr;
    }

}


@media (max-width: 600px) {

    .stats-grid {
        grid-template-columns: 1fr;
    }

    .page-header h1 {
        font-size: 24px;
    }

    .project-item {
        align-items: flex-start;
        gap: 10px;
        flex-direction: column;
    }

}

</style>

@endsection