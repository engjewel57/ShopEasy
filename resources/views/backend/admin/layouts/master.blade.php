<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            min-height: 100vh;
            background: #343a40;
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .sidebar .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        .sidebar .nav-link.active {
            background: #0d6efd;
            color: white;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .sidebar-header {
            padding: 20px;
            background: rgba(0, 0, 0, 0.2);
            color: white;
        }
        .sidebar-collapsed {
            width: 70px;
            overflow: hidden;
        }
        .sidebar-collapsed .nav-link span,
        .sidebar-collapsed .sidebar-header h3,
        .sidebar-collapsed .dropdown-toggle::after {
            display: none;
        }
        .sidebar-collapsed .nav-link {
            text-align: center;
            padding: 10px 5px;
        }
        .sidebar-collapsed .nav-link i {
            margin-right: 0;
            font-size: 1.2rem;
        }
        .content {
            padding: 20px;
            width: 100%;
        }
        .toggle-btn {
            cursor: pointer;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
        }
        .header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .search-box {
            position: relative;
            max-width: 400px;
        }
        .search-box input {
            padding-left: 40px;
            border-radius: 20px;
            border: 1px solid #ddd;
        }
        .search-box i {
            position: absolute;
            left: 15px;
            top: 10px;
            color: #6c757d;
        }
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 10px;
        }
        .user-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .dropdown-toggle::after {
            display: none;
        }
    </style>
</head>
<body>


@include('backend.admin.layouts.partials.header')
   @include('backend.admin.layouts.partials.sidber')

   <main class="py-4">
        @yield('content')
    </main>
    @include('backend.admin.layouts.partials.footer')

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggleBtn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('sidebar-collapsed');
            document.getElementById('mainContent').classList.toggle('expanded');
        });
    </script>
</body>
</html>
