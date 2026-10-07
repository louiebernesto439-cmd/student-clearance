<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Staff Dashboard | Student Clearance System</title>

    <style>

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

        .sidebar {
            width: 250px;
            background: #172554;
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
            border-bottom: 1px solid #1e3a8a;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            background: #2563eb;
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
            color: #bfdbfe;
            font-size: 11px;
        }

        .menu-title {
            color: #93c5fd;
            font-size: 11px;
            text-transform: uppercase;
            margin: 25px 10px 10px;
            letter-spacing: 1px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #dbeafe;
            text-decoration: none;
            padding: 13px 12px;
            border-radius: 9px;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .menu a:hover,
        .menu a.active {
            background: #2563eb;
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
            background: #1e3a8a;
            color: white;
            cursor: pointer;
        }

        .logout:hover {
            background: #dc2626;
        }

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

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification {
            position: relative;
            font-size: 20px;
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
            justify-content: center;
            align-items: center;
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
            background: #2563eb;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .profile small {
            color: #6b7280;
        }

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

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat {
            background: white;
            border: 1px solid #e5e7eb;
            padding: 23px;
            border-radius: 14px;
        }

        .stat p {
            color: #6b7280;
            font-size: 13px;
        }

        .stat h2 {
            font-size: 28px;
            margin-top: 8px;
        }

        .blue {
            border-left: 5px solid #2563eb;
        }

        .orange {
            border-left: 5px solid #f59e0b;
        }

        .green {
            border-left: 5px solid #16a34a;
        }

        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 25px;
        }

        .card h3 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            color: #6b7280;
            font-size: 12px;
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            padding: 16px 12px;
            border-bottom: 1px solid #f1f1f1;
            font-size: 13px;
        }

        .badge {
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .pending {
            background: #fef3c7;
            color: #b45309;
        }

        .approved {
            background: #dcfce7;
            color: #15803d;
        }

        .reject {
            background: #fee2e2;
            color: #b91c1c;
        }

        .actions {
            display: flex;
            gap: 6px;
        }

        .action {
            border: none;
            padding: 7px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 11px;
        }

        .approve-btn {
            background: #dcfce7;
            color: #15803d;
        }

        .review-btn {
            background: #dbeafe;
            color: #1d4ed8;
        }

        @media(max-width: 800px) {

            .sidebar {
                width: 70px;
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

            .stats {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 20px;
                overflow-x: auto;
            }
        }

    </style>

</head>

<body>

<div class="app">

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-icon">
                ✓
            </div>

            <div>
                <h2>Clearance</h2>
                <small>Staff Portal</small>
            </div>

        </div>

        <div class="menu-title">
            Main Menu
        </div>

        <div class="menu">

            <a href="{{ route('staff.dashboard') }}" class="active">
                <span>▣</span>
                <span>Dashboard</span>
            </a>

            <a href="#">
                <span>👨‍🎓</span>
                <span>Students</span>
            </a>

            <a href="#">
                <span>✓</span>
                <span>Clearance Requests</span>
            </a>

            <a href="#">
                <span>📋</span>
                <span>Records</span>
            </a>

        </div>

        <div class="menu-title">
            System
        </div>

        <div class="menu">

            <a href="#">
                <span>🔔</span>
                <span>Notifications</span>
            </a>

            <a href="#">
                <span>⚙</span>
                <span>Profile</span>
            </a>

        </div>

        <div class="sidebar-bottom">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button class="logout">
                    ↪ Logout
                </button>

            </form>

        </div>

    </aside>


    <main class="main">

        <header class="topbar">

            <h3>Staff Dashboard</h3>

            <div class="topbar-right">

                <div class="notification">
                    🔔
                    <span>5</span>
                </div>

                <div class="profile">

                    <div class="avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>

                    <div>

                        <strong>
                            {{ auth()->user()->name }}
                        </strong>

                        <br>

                        <small>
                            Clearance Staff
                        </small>

                    </div>

                </div>

            </div>

        </header>


        <section class="content">

            <div class="welcome">

                <h1>Welcome, {{ auth()->user()->name }}! 👋</h1>

                <p>
                    Review and process student clearance requests.
                </p>

            </div>


            <div class="stats">

                <div class="stat blue">

                    <p>Students to Review</p>

                    <h2>24</h2>

                </div>

                <div class="stat orange">

                    <p>Pending Requests</p>

                    <h2>18</h2>

                </div>

                <div class="stat green">

                    <p>Approved Today</p>

                    <h2>32</h2>

                </div>

            </div>


            <div class="card">

                <h3>Clearance Requests</h3>

                <table>

                    <thead>

                        <tr>

                            <th>Student</th>
                            <th>Student ID</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Juan Dela Cruz</td>
                            <td>2024-00125</td>
                            <td>Library</td>

                            <td>
                                <span class="badge pending">
                                    Pending
                                </span>
                            </td>

                            <td>

                                <div class="actions">

                                    <button class="action review-btn">
                                        Review
                                    </button>

                                    <button class="action approve-btn">
                                        Approve
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <tr>

                            <td>Maria Santos</td>
                            <td>2024-00131</td>
                            <td>Accounting</td>

                            <td>
                                <span class="badge pending">
                                    Pending
                                </span>
                            </td>

                            <td>

                                <div class="actions">

                                    <button class="action review-btn">
                                        Review
                                    </button>

                                    <button class="action approve-btn">
                                        Approve
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <tr>

                            <td>Pedro Reyes</td>
                            <td>2024-00145</td>
                            <td>Laboratory</td>

                            <td>
                                <span class="badge approved">
                                    Approved
                                </span>
                            </td>

                            <td>

                                <div class="actions">

                                    <button class="action review-btn">
                                        View
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <tr>

                            <td>Ana Lopez</td>
                            <td>2024-00152</td>
                            <td>Registrar</td>

                            <td>
                                <span class="badge reject">
                                    Not Cleared
                                </span>
                            </td>

                            <td>

                                <div class="actions">

                                    <button class="action review-btn">
                                        Review
                                    </button>

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

</div>

</body>
</html>