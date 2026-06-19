<!DOCTYPE html>
<html>

<head>

    <title>Inventory System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        background: #212529;
        position: fixed;
        left: 0;
        top: 0;
        overflow-y: auto;
    }

    .sidebar h3 {
        color: white;
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid #444;
    }

    .sidebar a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 12px 20px;
    }

    .sidebar a:hover {
        background: #0d6efd;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }
    </style>

</head>

<body>

    <div class="sidebar">

        <h3>Inventory</h3>

        <a href="/">
            Dashboard
        </a>

        <a href="/item-types">
            Item Types
        </a>

        <a href="/items">
            Items
        </a>

        <a href="/buildings">
            Buildings
        </a>

        <a href="/rooms">
            Rooms
        </a>

        <a href="/transaction-types">
            Transaction Types
        </a>

        <a href="/inventories">
            Inventories
        </a>

        <a href="/inventory-transactions">
            Transactions
        </a>

        <a href="/inventory-rooms">
            Distribution
        </a>

        <hr class="bg-light">

        <a href="/reports">
            Reports
        </a>

    </div>

    <div class="content">

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