<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard | Clearance System</title>

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
            background: #052e16;
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
            border-bottom: 1px solid #14532d;
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            background: #16a34a;
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
            color: #86efac;
            font-size: 11px;
        }

        .menu-title {
            color: #86efac;
            font-size: 11px;
            text-transform: uppercase;
            margin: 25px 10px 10px;
            letter-spacing: 1px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #dcfce7;
            text-decoration: none;
            padding: 13px 12px;
            border-radius: 9px;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .menu a:hover,
        .menu a.active {
            background: #16a34a;
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
            background: #14532d;
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
            justify-content: space-between;
            align-items: center;
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
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #16a34a;
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
            margin-bottom: 25px;
        }

        .welcome h1 {
            font-size: 28px;
            margin-bottom: 7px;
        }

        .welcome p {
            color: #6b7280;
        }

        /* CLEARANCE SUMMARY */

        .clearance-card {
            background: linear-gradient(135deg, #166534, #16a34a);
            color: white;
            padding: 28px;
            border-radius: 16px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .clearance-card h2 {
            margin-bottom: 8px;
        }

        .clearance-card p {
            opacity: .9;
            font-size: 14px;
        }

        .circle {
            width: 105px;
            height: 105px;
            border-radius: 50%;
            background: white;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            font-weight: bold;
        }

        /* CARDS */

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 22px;
        }

        .card h3 {
            margin-bottom: 8px;
            font-size: 16px;
        }

        .card p {
            color: #6b7280;
            font-size: 13px;
        }

        .number {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .green-text {
            color: #16a34a;
        }

        .orange-text {
            color: #ea580c;
        }

        .red-text {
            color: #dc2626;
        }

        /* REQUIREMENTS */

        .requirements {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 25px;
        }

        .requirements-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .requirements-header h3 {
            font-size: 17px;
        }

        .requirements-header a {
            color: #16a34a;
            text-decoration: none;
            font-size: 13px;
        }

        .requirement {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 17px 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .requirement:last-child {
            border-bottom: none;
        }

        .requirement-left {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .requirement-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon-green {
            background: #dcfce7;
            color: #16a34a;
        }

        .icon-yellow {
            background: #fef3c7;
            color: #d97706;
        }

        .icon-red {
            background: #fee2e2;
            color: #dc2626;
        }

        .requirement-name strong {
            display: block;
            font-size: 14px;
            margin-bottom: 3px;
        }

        .requirement-name small {
            color: #9ca3af;
        }

        .badge {
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
        }

        .cleared {
            background: #dcfce7;
            color: #15803d;
        }

        .pending {
            background: #fef3c7;
            color: #b45309;
        }

        .not-cleared {
            background: #fee2e2;
            color: #b91c1c;
        }

        @media(max-width: 900px) {

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

            .cards {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 20px;
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

                <small>Student Portal</small>

            </div>

        </div>


        <div class="menu-title">
            Student Menu
        </div>


        <div class="menu">

            <a href="{{ route('student.dashboard') }}" class="active">
                <span>▣</span>
                <span>Dashboard</span>
            </a>

            <a href="#">
                <span>✓</span>
                <span>My Clearance</span>
            </a>

            <a href="#">
                <span>📋</span>
                <span>Requirements</span>
            </a>

            <a href="#">
                <span>📄</span>
                <span>Documents</span>
            </a>

        </div>


        <div class="menu-title">
            Account
        </div>


        <div class="menu">

            <a href="#">
                <span>🔔</span>
                <span>Notifications</span>
            </a>

            <a href="{{ route('profile.edit') }}">
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

            <h3>Student Portal</h3>


            <div class="topbar-right">

                <div class="notification">

                    🔔

                    <span>2</span>

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
                            Student
                        </small>

                    </div>

                </div>

            </div>

        </header>


        <section class="content">

            <div class="welcome">

                <h1>
                    Welcome, {{ auth()->user()->name }}! 👋
                </h1>

                <p>
                    Monitor your student clearance status here.
                </p>

            </div>


            <!-- CLEARANCE OVERVIEW -->

            <div class="clearance-card">

                <div>

                    <h2>
                        Clearance Progress
                    </h2>

                    <p>
                        Your clearance is almost complete.
                    </p>

                    <br>

                    <strong>
                        Academic Year 2026–2027
                    </strong>

                </div>


                <div class="circle">

                    80%

                </div>

            </div>


            <!-- SUMMARY -->

            <div class="cards">


                <div class="card">

                    <p>
                        Completed
                    </p>

                    <div class="number green-text">
                        4
                    </div>

                    <p>
                        Requirements cleared
                    </p>

                </div>


                <div class="card">

                    <p>
                        Pending
                    </p>

                    <div class="number orange-text">
                        1
                    </div>

                    <p>
                        Waiting for approval
                    </p>

                </div>


                <div class="card">

                    <p>
                        Not Cleared
                    </p>

                    <div class="number red-text">
                        0
                    </div>

                    <p>
                        Issues requiring action
                    </p>

                </div>


            </div>


            <!-- REQUIREMENTS -->

            <div class="requirements">

                <div class="requirements-header">

                    <h3>
                        Clearance Requirements
                    </h3>

                    <a href="#">
                        View All
                    </a>

                </div>


                <!-- LIBRARY -->

                <div class="requirement">

                    <div class="requirement-left">

                        <div class="requirement-icon icon-green">
                            📚
                        </div>

                        <div class="requirement-name">

                            <strong>
                                Library
                            </strong>

                            <small>
                                Library clearance
                            </small>

                        </div>

                    </div>


                    <span class="badge cleared">
                        ✓ Cleared
                    </span>

                </div>


                <!-- ACCOUNTING -->

                <div class="requirement">

                    <div class="requirement-left">

                        <div class="requirement-icon icon-yellow">
                            💰
                        </div>

                        <div class="requirement-name">

                            <strong>
                                Accounting
                            </strong>

                            <small>
                                Financial obligations
                            </small>

                        </div>

                    </div>


                    <span class="badge pending">
                        ⏳ Pending
                    </span>

                </div>


                <!-- REGISTRAR -->

                <div class="requirement">

                    <div class="requirement-left">

                        <div class="requirement-icon icon-green">
                            📑
                        </div>

                        <div class="requirement-name">

                            <strong>
                                Registrar
                            </strong>

                            <small>
                                Academic records
                            </small>

                        </div>

                    </div>


                    <span class="badge cleared">
                        ✓ Cleared
                    </span>

                </div>


                <!-- LABORATORY -->

                <div class="requirement">

                    <div class="requirement-left">

                        <div class="requirement-icon icon-green">
                            🧪
                        </div>

                        <div class="requirement-name">

                            <strong>
                                Laboratory
                            </strong>

                            <small>
                                Laboratory equipment
                            </small>

                        </div>

                    </div>


                    <span class="badge cleared">
                        ✓ Cleared
                    </span>

                </div>


                <!-- DEPARTMENT -->

                <div class="requirement">

                    <div class="requirement-left">

                        <div class="requirement-icon icon-green">
                            🏫
                        </div>

                        <div class="requirement-name">

                            <strong>
                                Department
                            </strong>

                            <small>
                                Department clearance
                            </small>

                        </div>

                    </div>


                    <span class="badge cleared">
                        ✓ Cleared
                    </span>

                </div>


            </div>

        </section>

    </main>

</div>

</body>

</html>