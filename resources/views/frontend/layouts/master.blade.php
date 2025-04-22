<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="{{ config('app.charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase - Responsive E-commerce</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom Styles */
        .top-header {
            background-color: #f8f9fa;
            font-size: 0.9rem;
        }

        .main-header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .search-box {
            position: relative;
            max-width: 500px;
            width: 100%;
        }

        .search-box i {
            position: absolute;
            left: 15px;
            top: 12px;
            color: #6c757d;
        }

        .search-box input {
            padding-left: 40px;
            border-radius: 20px;
        }

        .wishlist-icon, .cart-icon {
            position: relative;
            font-size: 1.2rem;
        }

        .badge-notification {
            position: absolute;
            top: -8px;
            right: -8px;
            font-size: 0.6rem;
            padding: 3px 6px;
        }

        .hero-slider .carousel-item {
            height: 400px;
        }

        .hero-slider img {
            object-fit: cover;
            height: 100%;
        }

        .product-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .product-img {
            height: 200px;
            object-fit: contain;
            padding: 20px;
            background: #f9f9f9;
        }

        .badge-sale {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1;
        }

        .price {
            font-weight: bold;
            color: #0d6efd;
        }

        .old-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .rating {
            color: #ffc107;
        }

        @media (max-width: 992px) {
            .hero-slider .carousel-item {
                height: 300px;
            }

            .search-box {
                margin: 10px 0;
                width: 100%;
            }

            .navbar-nav {
                flex-direction: row;
                justify-content: center;
            }

            .nav-item {
                margin: 0 5px;
            }
        }

        @media (max-width: 768px) {
            .hero-slider .carousel-item {
                height: 250px;
            }

            .hero-slider .carousel-caption h3 {
                font-size: 1.2rem;
            }

            .hero-slider .carousel-caption p {
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }

            .hero-slider .carousel-caption .btn {
                padding: 0.25rem 0.5rem;
                font-size: 0.9rem;
            }

            .product-img {
                height: 150px;
            }
        }

        @media (max-width: 576px) {
            .hero-slider .carousel-item {
                height: 200px;
            }

            .top-header .col-md-6 {
                text-align: center;
                margin-bottom: 5px;
            }

            .top-header .text-end {
                text-align: center !important;
            }

            .dropdown {
                margin-bottom: 5px;
            }

            .product-card .card-title {
                font-size: 1rem;
            }

            .product-card .card-text {
                font-size: 0.8rem;
            }

            .price {
                font-size: 0.9rem;
            }

            .old-price {
                font-size: 0.8rem;
            }
        }
        .product-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .badge-new {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 0.8rem;
        }
        .product-img {
            height: 200px;
            object-fit: contain;
            padding: 20px;
        }
        .price {
            font-weight: bold;
            color: #0d6efd;
        }
        .old-price {
            text-decoration: line-through;
            color: #6c757d;
        }
        .deal-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .deal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        .badge-deal {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 0.8rem;
            background: #dc3545;
        }
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #28a745;
        }
        .deal-img {
            height: 200px;
            object-fit: contain;
            background: #f8f9fa;
            padding: 20px;
        }
        .deal-price {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.1rem;
        }
        .old-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
        }
        .countdown-timer {
            background: #343a40;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
        }
        .deal-header {
            background: linear-gradient(135deg, #ff6b6b, #ff8e8e);
            color: white;
            padding: 30px 0;
            margin-bottom: 30px;
        }
        .trending-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 60px 0 40px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }
        .trending-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://via.placeholder.com/1920x500') center/cover;
            opacity: 0.15;
        }
        .trending-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ff4757;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: bold;
        }
        .product-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .product-img {
            height: 200px;
            object-fit: contain;
            background: #f8f9fa;
            padding: 20px;
        }
        .product-price {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.1rem;
        }
        .rating {
            color: #ffc107;
            font-size: 0.9rem;
        }
        .sold-count {
            font-size: 0.8rem;
            color: #6c757d;
        }
        .trending-tabs .nav-link {
            color: #495057;
            font-weight: 500;
            border: none;
            padding: 10px 20px;
        }
        .trending-tabs .nav-link.active {
            color: #0d6efd;
            border-bottom: 3px solid #0d6efd;
            background: transparent;
        }
        .view-all-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }
        
    </style>
</head>
<body>
    <!-- Top Header -->
   @include('frontend.layouts.partials.header')

    <!-- Hero Slider -->
@include('frontend.layouts.partials.hero-slider')
    <!-- Main Content -->
  <main class="py-5">
        @yield('content')
    </main>

    <!-- Footer -->
   @include('frontend.layouts.partials.footer')
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


