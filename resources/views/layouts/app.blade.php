<!DOCTYPE html>
<html>

<head>

    <title>Inventory System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
    body {
        background: #f4f6f9;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
    }

    .sidebar {
        width: 260px;
        height: 100vh;
        background: #1e293b;
        position: fixed;
        left: 0;
        top: 0;
        overflow-y: auto;
        box-shadow: 2px 0 10px rgba(0, 0, 0, .1);
    }

    .sidebar-logo {
        padding: 25px;
        text-align: center;
        color: white;
        font-size: 30px;
        font-weight: bold;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
    }

    .sidebar-menu {
        padding-top: 15px;
    }

    .sidebar-menu a {
        display: block;
        color: #cbd5e1;
        text-decoration: none;
        padding: 14px 20px;
        margin: 4px 10px;
        border-radius: 10px;
        transition: .3s;
    }

    .sidebar-menu a:hover {
        background: #2563eb;
        color: white;
        transform: translateX(5px);
    }

    .sidebar-menu i {
        margin-right: 10px;
    }

    .content {
        margin-left: 260px;
        min-height: 100vh;
        padding: 25px;
    }

    .topbar {
        background: white;
        padding: 15px 25px;
        border-radius: 15px;
        margin-bottom: 25px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, .08);
        transition: .3s;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, .15) !important;
    }

    .alert {
        border-radius: 12px;
    }

    .table {
        background: white;
        border-radius: 15px;
        overflow: hidden;
    }

    .btn {
        border-radius: 10px;
    }

    @media print {

        .sidebar,
        .btn,
        nav,
        .alert {
            display: none !important;
        }

        .content {
            margin-left: 0 !important;
            width: 100% !important;
        }

        body {
            background: white !important;
        }
    }

    /* =========================
   Responsive Mobile
========================= */

    @media (max-width: 768px) {

        .sidebar {
            position: relative;
            width: 100%;
            height: auto;
        }

        .content {
            margin-left: 0;
            padding: 15px;
        }

        .topbar {
            padding: 15px;
        }

        .topbar h4 {
            font-size: 18px;
        }

        h2 {
            font-size: 22px;
        }

        .d-flex.justify-content-between {
            flex-direction: column;
            align-items: stretch !important;
            gap: 10px;
        }

        .btn {
            width: 100%;
        }

        .card-body {
            padding: 15px;
        }

        table {
            font-size: 14px;
        }

    }
    </style>

</head>

<body>

    <div class="sidebar">

        <div class="sidebar-logo">
            <i class="bi bi-box-seam"></i>
            Inventory
        </div>

        <div class="sidebar-menu">

            <a href="/">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>

            <a href="/item-types">
                <i class="bi bi-tags"></i>
                Item Types
            </a>

            <a href="/items">
                <i class="bi bi-box"></i>
                Items
            </a>

            <a href="/buildings">
                <i class="bi bi-building"></i>
                Buildings
            </a>

            <a href="/rooms">
                <i class="bi bi-door-open"></i>
                Rooms
            </a>

            <a href="/transaction-types">
                <i class="bi bi-credit-card"></i>
                Transaction Types
            </a>

            <a href="/inventories">
                <i class="bi bi-archive"></i>
                Inventories
            </a>

            <a href="/inventory-transactions">
                <i class="bi bi-arrow-left-right"></i>
                Transactions
            </a>

            <a href="/inventory-rooms">
                <i class="bi bi-diagram-3"></i>
                Distribution
            </a>

            <a href="/reports">
                <i class="bi bi-bar-chart"></i>
                Reports
            </a>

        </div>

    </div>

    <div class="content">

        <div class="topbar">
            <h4 class="mb-0">
                Sistem Informasi Inventory Aset
            </h4>
        </div>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @yield('content')

    </div>

</body>

</html>