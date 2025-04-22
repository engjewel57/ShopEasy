@extends('frontend.layouts.master')

@section('title', 'Hot Deals')

@section('content')
    <!-- Trending Products Header -->
    <section class="trending-header text-center position-relative">
        <div class="container position-relative">
            <h1 class="fw-bold display-5 mb-3">🔥 Trending Now</h1>
            <p class="lead mb-4">Discover what everyone is loving this week</p>
            <div class="d-inline-block px-3 py-2 rounded-pill" style="background: rgba(255,255,255,0.2);">
                <span class="me-2">Updated:</span>
                <span id="current-date"></span>
            </div>
        </div>
    </section>

    <!-- Trending Products Section -->
    <section class="py-5">
        <div class="container">
            <!-- Trending Categories Tabs -->
            <div class="row mb-4 position-relative">
                <div class="col-12">
                    <ul class="nav trending-tabs mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#electronics">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#fashion">Fashion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#home">Home & Living</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#beauty">Beauty</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-sm btn-outline-primary view-all-btn d-none d-md-inline-block">View All</a>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- All Products Tab -->
                <div class="tab-pane fade show active" id="all">
                    <div class="row">
                        <!-- Product 1 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/01.webp') }}" class="card-img-top product-img" alt="Wireless Earbuds">
                                <div class="card-body">
                                    <h6 class="card-title">Wireless Earbuds Pro</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="ms-1">4.5</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$79.99</span>
                                    </div>
                                    <div class="sold-count mb-3">1.2k+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/05.webp') }}" class="card-img-top product-img" alt="Smart Watch">
                                <div class="card-body">
                                    <h6 class="card-title">Smart Watch Series 6</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="ms-1">4.0</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$199.99</span>
                                    </div>
                                    <div class="sold-count mb-3">850+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/06.webp') }}" class="card-img-top product-img" alt="Yoga Mat">
                                <div class="card-body">
                                    <h6 class="card-title">Premium Yoga Mat</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="ms-1">5.0</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$39.99</span>
                                    </div>
                                    <div class="sold-count mb-3">2.3k+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/22.png') }}" class="card-img-top product-img" alt="Air Fryer">
                                <div class="card-body">
                                    <h6 class="card-title">Digital Air Fryer</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="ms-1">4.7</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$89.99</span>
                                    </div>
                                    <div class="sold-count mb-3">1.5k+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/44.webp') }}" class="card-img-top product-img" alt="Sneakers">
                                <div class="card-body">
                                    <h6 class="card-title">Running Sneakers</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="ms-1">4.2</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$59.99</span>
                                    </div>
                                    <div class="sold-count mb-3">1.8k+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/66.webp') }}" class="card-img-top product-img" alt="Skincare Set">
                                <div class="card-body">
                                    <h6 class="card-title">Vitamin C Skincare Set</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="ms-1">5.0</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$49.99</span>
                                    </div>
                                    <div class="sold-count mb-3">3.1k+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 7 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/77.webp') }}" class="card-img-top product-img" alt="Backpack">
                                <div class="card-body">
                                    <h6 class="card-title">Anti-Theft Backpack</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="ms-1">4.8</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$45.99</span>
                                    </div>
                                    <div class="sold-count mb-3">950+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 8 -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card h-100">
                                <span class="trending-badge">TRENDING</span>
                                <img src="{{ asset('assets/images/05.webp') }}" class="card-img-top product-img" alt="Blender">
                                <div class="card-body">
                                    <h6 class="card-title">Professional Blender</h6>
                                    <div class="rating mb-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                        <span class="ms-1">4.3</span>
                                    </div>
                                    <div class="mb-2">
                                        <span class="product-price">$129.99</span>
                                    </div>
                                    <div class="sold-count mb-3">1.1k+ sold this week</div>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other tabs would go here (electronics, fashion, etc) -->
                <!-- Content would be similar to the All tab -->
            </div>

            <!-- View More Button -->
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary px-4">View More Trending Products</button>
            </div>
        </div>
    </section>

    <!-- Why These Are Trending Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Why These Products Are Trending</h2>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="p-3">
                                <i class="bi bi-people-fill fs-1 text-primary mb-3"></i>
                                <h5>Customer Favorites</h5>
                                <p>Top-rated by thousands of satisfied shoppers with verified reviews</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="p-3">
                                <i class="bi bi-lightning-fill fs-1 text-primary mb-3"></i>
                                <h5>Seasonal Trends</h5>
                                <p>Products that are perfect for the current season and popular needs</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="p-3">
                                <i class="bi bi-graph-up-arrow fs-1 text-primary mb-3"></i>
                                <h5>Rising Popularity</h5>
                                <p>Items with rapidly increasing sales and search volume</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Current Date Script -->
    <script>
        // Display current date
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('current-date').textContent = new Date().toLocaleDateString('en-US', options);
    </script>

@endsection
