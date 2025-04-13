<div class="top-header py-2 d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <span class="me-3"><i class="bi bi-telephone me-1"></i> +880 1795235482</span>
                <span><i class="bi bi-envelope me-1"></i> info@gmail.com</span>
            </div>
            <div class="col-md-6 text-end">
                <div class="dropdown d-inline-block me-3">
                    <a class="text-dark dropdown-toggle text-decoration-none" href="#" role="button" id="currencyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        USD
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                        <li><a class="dropdown-item" href="#">USD ($)</a></li>
                        <li><a class="dropdown-item" href="#">EUR (€)</a></li>
                        <li><a class="dropdown-item" href="#">GBP (£)</a></li>
                    </ul>
                </div>
                <div class="dropdown d-inline-block me-3">
                    <a class="text-dark dropdown-toggle text-decoration-none" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        English
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                        <li><a class="dropdown-item" href="#">French</a></li>
                    </ul>
                </div>
                <a href="#" class="text-dark text-decoration-none me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Login
                </a>
                <a href="#" class="text-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    <i class="bi bi-person-plus me-1"></i> Register
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="main-header sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <a class="navbar-brand fw-bold fs-3" href="#">
                <i class="bi bi-shop me-2"></i>ShopEase
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <div class="search-box mx-auto my-3 my-lg-0">
                    <i class="bi bi-search"></i>
                    <input type="text" class="form-control ps-4" placeholder="Search for products...">
                </div>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">
                            <i class="bi bi-heart wishlist-icon">
                                <span class="badge bg-danger badge-notification">3</span>
                            </i>
                            <span class="d-none d-lg-inline">Wishlist</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-cart3 cart-icon">
                                <span class="badge bg-primary badge-notification">5</span>
                            </i>
                            <span class="d-none d-lg-inline">Cart</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Category Navigation - Hidden on mobile -->
    <div class="bg-primary py-2 d-none d-lg-block">
        <div class="container">
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list me-1"></i> All Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        <li><a class="dropdown-item" href="#">Electronics</a></li>
                        <li><a class="dropdown-item" href="#">Fashion</a></li>
                        <li><a class="dropdown-item" href="#">Home & Garden</a></li>
                        <li><a class="dropdown-item" href="#">Beauty</a></li>
                        <li><a class="dropdown-item" href="#">Sports</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">New Arrivals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Trending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>
