<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Student Clearance System</title>

    <style>
       
       /* =========================================================
   WEATHER CARD
========================================================= */

.weather-card {
    background: linear-gradient(
        135deg,
        #1e3a8a,
        #2563eb
    );

    color: white;

    border-radius: 16px;

    padding: 25px;

    margin-bottom: 25px;

    box-shadow:
        0 8px 25px
        rgba(37, 99, 235, 0.15);
}


/* WEATHER HEADER */

.weather-header {
    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 25px;
}


.weather-header h3 {
    font-size: 18px;

    margin: 0 0 6px 0;
}


.weather-header p {
    color: #dbeafe;

    font-size: 13px;

    margin: 0;
}


.weather-icon {
    font-size: 42px;
}


/* WEATHER MAIN */

.weather-main {
    display: flex;

    align-items: center;

    gap: 20px;

    margin-bottom: 25px;
}


.temperature {
    font-size: 48px;

    font-weight: bold;
}


.condition {
    font-size: 16px;

    color: #dbeafe;

    text-transform: capitalize;
}


/* WEATHER DETAILS */

.weather-details {
    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 15px;
}


.weather-detail {
    background:
        rgba(255, 255, 255, 0.12);

    border:
        1px solid
        rgba(255, 255, 255, 0.15);

    border-radius: 12px;

    padding: 15px;

    display: flex;

    align-items: center;

    gap: 12px;
}


.weather-detail-icon {
    width: 40px;

    height: 40px;

    background:
        rgba(255, 255, 255, 0.15);

    border-radius: 10px;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-shrink: 0;
}


.weather-detail small {
    display: block;

    color: #bfdbfe;

    font-size: 11px;

    margin-bottom: 4px;
}


.weather-detail strong {
    font-size: 14px;
}


/* WEATHER ERROR */

.weather-error {
    background:
        rgba(255, 255, 255, 0.12);

    border:
        1px solid
        rgba(255, 255, 255, 0.20);

    border-radius: 12px;

    padding: 18px;

    display: flex;

    align-items: center;

    gap: 15px;
}


.error-icon {
    font-size: 30px;

    flex-shrink: 0;
}


.weather-error strong {
    display: block;

    margin-bottom: 5px;
}


.weather-error p {
    color: #dbeafe;

    font-size: 13px;

    margin: 0;
}


/* RESPONSIVE */

@media (max-width: 700px) {

    .weather-details {
        grid-template-columns: 1fr;
    }


    .weather-main {
        flex-direction: column;

        align-items: flex-start;

        gap: 5px;
    }


    .temperature {
        font-size: 40px;
    }


    .weather-header {
        align-items: flex-start;
    }

}
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        .app {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 250px;
            background: #111827;
            color: white;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 25px 15px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 10px 30px;
            border-bottom: 1px solid #374151;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            background: #dc2626;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .brand h2 {
            font-size: 17px;
        }

        .brand small {
            color: #9ca3af;
            font-size: 11px;
        }

        .menu-title {
            color: #6b7280;
            font-size: 11px;
            text-transform: uppercase;
            margin: 25px 10px 10px;
            letter-spacing: 1px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #d1d5db;
            text-decoration: none;
            padding: 13px 12px;
            border-radius: 9px;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .menu a:hover,
        .menu a.active {
            background: #dc2626;
            color: white;
        }

        .sidebar-bottom {
            position: absolute;
            left: 15px;
            right: 15px;
            bottom: 20px;
        }

        .logout {
            width: 100%;
            border: none;
            padding: 12px;
            border-radius: 8px;
            background: #374151;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .logout:hover {
            background: #dc2626;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
        }

        .topbar h3 {
            font-size: 19px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification {
            position: relative;
            font-size: 20px;
            cursor: pointer;
        }

        .notification span {
            position: absolute;
            top: -6px;
            right: -7px;
            background: #dc2626;
            color: white;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #dc2626;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .profile small {
            color: #6b7280;
        }

        /* CONTENT */

        .content {
            padding: 35px;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 28px;
            margin-bottom: 7px;
        }

        .welcome p {
            color: #6b7280;
        }

        /* STAT CARDS */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border-radius: 14px;
            padding: 22px;
            border: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-info p {
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .stat-info h2 {
            font-size: 27px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .red {
            background: #fee2e2;
            color: #dc2626;
        }

        .blue {
            background: #dbeafe;
            color: #2563eb;
        }

        .green {
            background: #dcfce7;
            color: #16a34a;
        }

        .orange {
            background: #ffedd5;
            color: #ea580c;
        }

        /* GRID */

        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
        }

        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 24px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .card-header h3 {
            font-size: 17px;
        }

        .view {
            color: #dc2626;
            text-decoration: none;
            font-size: 13px;
        }

        /* TABLE */

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            color: #6b7280;
            font-size: 12px;
            padding: 12px 8px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 15px 8px;
            font-size: 13px;
            border-bottom: 1px solid #f1f1f1;
        }

        .student {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .student-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #fee2e2;
            color: #dc2626;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .badge {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .badge-green {
            background: #dcfce7;
            color: #15803d;
        }

        .badge-yellow {
            background: #fef3c7;
            color: #b45309;
        }

        .badge-red {
            background: #fee2e2;
            color: #b91c1c;
        }

        /* DEPARTMENTS */

        .department {
            margin-bottom: 22px;
        }

        .department-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 13px;
        }

        .progress {
            width: 100%;
            height: 8px;
            background: #e5e7eb;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: #dc2626;
            border-radius: 20px;
        }

        /* RESPONSIVE */

        @media(max-width: 1000px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 700px) {
            .sidebar {
                width: 70px;
                padding: 15px 8px;
            }

            .brand h2,
            .brand small,
            .menu-title,
            .menu a span {
                display: none;
            }

            .brand {
                justify-content: center;
            }

            .menu a {
                justify-content: center;
            }

            .main {
                margin-left: 70px;
                width: calc(100% - 70px);
            }

            .content {
                padding: 20px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .topbar {
                padding: 0 20px;
            }
        }
    </style>
</head>

<body>

<div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="brand">
            <div class="brand-icon">✓</div>

            <div>
                <h2>Clearance</h2>
                <small>Management System</small>
            </div>
        </div>

        <div class="menu-title">Main Menu</div>

        <div class="menu">

            <a href="{{ route('admin.dashboard') }}" class="active">
                <span>▣</span>
                <span>Dashboard</span>
            </a>

            <a href="#">
                <span>👨‍🎓</span>
                <span>Students</span>
            </a>

            <a href="#">
                <span>✓</span>
                <span>Clearances</span>
            </a>

            <a href="#">
                <span>🏢</span>
                <span>Departments</span>
            </a>

            <a href="#">
                <span>👥</span>
                <span>Users</span>
            </a>

        </div>

        <div class="menu-title">System</div>

        <div class="menu">

            <a href="#">
                <span>📊</span>
                <span>Reports</span>
            </a>

            <a href="#">
                <span>⚙</span>
                <span>Settings</span>
            </a>

        </div>

        <div class="sidebar-bottom">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logout">↪ Logout</button>
            </form>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <header class="topbar">

            <h3>Administrator Dashboard</h3>

            <div class="topbar-right">

                <div class="notification">
                    🔔
                    <span>4</span>
                </div>

                <div class="profile">

                    <div class="avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>

                    <div>
                        <strong>{{ auth()->user()->name }}</strong>
                        <br>
                        <small>Administrator</small>
                    </div>

                </div>

            </div>

        </header>


        <section class="content">

        <!-- =========================================================
     WEATHER CARD
========================================================= -->

<div class="weather-card">

<div class="weather-header">

    <div>

        <h3>
            🌤️ Current Weather
        </h3>

        <p>
            Weather information for
            {{ $weather['city'] ?? 'Unknown Location' }}
        </p>

    </div>

    <div class="weather-icon">
        🌤️
    </div>

</div>


@if(
    isset($weather['success']) &&
    $weather['success'] === true
)

    <!-- WEATHER MAIN -->

    <div class="weather-main">

        <div class="temperature">

            {{ round($weather['temperature']) }}°C

        </div>

        <div class="condition">

            {{ ucfirst($weather['description']) }}

        </div>

    </div>


    <!-- WEATHER DETAILS -->

    <div class="weather-details">


        <!-- HUMIDITY -->

        <div class="weather-detail">

            <span class="weather-detail-icon">
                💧
            </span>

            <div>

                <small>
                    Humidity
                </small>

                <strong>

                    {{ $weather['humidity'] }}%

                </strong>

            </div>

        </div>


        <!-- WIND SPEED -->

        <div class="weather-detail">

            <span class="weather-detail-icon">
                💨
            </span>

            <div>

                <small>
                    Wind Speed
                </small>

                <strong>

                    {{ $weather['wind_speed'] }} m/s

                </strong>

            </div>

        </div>


        <!-- LOCATION -->

        <div class="weather-detail">

            <span class="weather-detail-icon">
                📍
            </span>

            <div>

                <small>
                    Location
                </small>

                <strong>

                    {{ $weather['city'] }}

                </strong>

            </div>

        </div>

    </div>


@else

    <!-- WEATHER ERROR -->

    <div class="weather-error">

        <div class="error-icon">
            ⚠️
        </div>

        <div>

            <strong>
                Weather Unavailable
            </strong>

            <p>
                {{
                    $weather['error']
                    ?? 'Weather information is currently unavailable.'
                }}
            </p>

        </div>

    </div>

@endif

</div>

            <div class="welcome">

                <h1>Good day, {{ auth()->user()->name }}! 👋</h1>

                <p>
                    Here's an overview of the student clearance system.
                </p>

            </div>


            <!-- STATISTICS -->

            <div class="stats">

                <div class="stat-card">

                    <div class="stat-info">
                        <p>Total Students</p>
                        <h2>1,248</h2>
                    </div>

                    <div class="stat-icon blue">
                        👨‍🎓
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-info">
                        <p>Cleared Students</p>
                        <h2>842</h2>
                    </div>

                    <div class="stat-icon green">
                        ✓
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-info">
                        <p>Pending Clearance</p>
                        <h2>318</h2>
                    </div>

                    <div class="stat-icon orange">
                        ⏳
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-info">
                        <p>Departments</p>
                        <h2>8</h2>
                    </div>

                    <div class="stat-icon red">
                        🏢
                    </div>

                </div>

            </div>


            <div class="dashboard-grid">

                <!-- RECENT CLEARANCES -->

                <div class="card">

                    <div class="card-header">

                        <h3>Recent Clearance Activity</h3>

                        <a href="#" class="view">
                            View All
                        </a>

                    </div>

                    <table>

                        <thead>

                            <tr>
                                <th>Student</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>
                                    <div class="student">

                                        <div class="student-avatar">
                                            JD
                                        </div>

                                        Juan Dela Cruz

                                    </div>
                                </td>

                                <td>Library</td>

                                <td>
                                    <span class="badge badge-green">
                                        Cleared
                                    </span>
                                </td>

                                <td>Today</td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="student">

                                        <div class="student-avatar">
                                            MS
                                        </div>

                                        Maria Santos

                                    </div>
                                </td>

                                <td>Accounting</td>

                                <td>
                                    <span class="badge badge-yellow">
                                        Pending
                                    </span>
                                </td>

                                <td>Today</td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="student">

                                        <div class="student-avatar">
                                            PR
                                        </div>

                                        Pedro Reyes

                                    </div>
                                </td>

                                <td>Laboratory</td>

                                <td>
                                    <span class="badge badge-red">
                                        Not Cleared
                                    </span>
                                </td>

                                <td>Yesterday</td>

                            </tr>


                            <tr>

                                <td>
                                    <div class="student">

                                        <div class="student-avatar">
                                            AL
                                        </div>

                                        Ana Lopez

                                    </div>
                                </td>

                                <td>Registrar</td>

                                <td>
                                    <span class="badge badge-green">
                                        Cleared
                                    </span>
                                </td>

                                <td>Yesterday</td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- DEPARTMENT PROGRESS -->

                <div class="card">

                    <div class="card-header">
                        <h3>Clearance Progress</h3>
                    </div>


                    <div class="department">

                        <div class="department-top">
                            <span>Library</span>
                            <strong>92%</strong>
                        </div>

                        <div class="progress">
                            <div class="progress-bar" style="width:92%"></div>
                        </div>

                    </div>


                    <div class="department">

                        <div class="department-top">
                            <span>Accounting</span>
                            <strong>78%</strong>
                        </div>

                        <div class="progress">
                            <div class="progress-bar" style="width:78%"></div>
                        </div>

                    </div>


                    <div class="department">

                        <div class="department-top">
                            <span>Registrar</span>
                            <strong>86%</strong>
                        </div>

                        <div class="progress">
                            <div class="progress-bar" style="width:86%"></div>
                        </div>

                    </div>


                    <div class="department">

                        <div class="department-top">
                            <span>Laboratory</span>
                            <strong>65%</strong>
                        </div>

                        <div class="progress">
                            <div class="progress-bar" style="width:65%"></div>
                        </div>

                    </div>


                    <div class="department">

                        <div class="department-top">
                            <span>Department Office</span>
                            <strong>74%</strong>
                        </div>

                        <div class="progress">
                            <div class="progress-bar" style="width:74%"></div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>