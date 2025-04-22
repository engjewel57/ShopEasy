@extends('frontend.layouts.master')

@section('title', 'Hot Deals')

@section('content')

    <style>

    </style>

    <!-- Deals Header Section -->
    <section class="deal-header text-center">
        <div class="container">
            <h1 class="fw-bold mb-3">🔥 Hot Deals 🔥</h1>
            <p class="lead">Limited time offers - Don't miss out!</p>
            <div class="countdown-timer d-inline-block mt-2">
                <i class="bi bi-clock me-1"></i>
                <span id="deal-countdown">24:59:59</span> remaining
            </div>
        </div>
    </section>

    <!-- Deals Section -->
    <section class="py-5">
        <div class="container">
            <!-- Filter/Sort Row -->
            <div class="row mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="d-flex align-items-center">
                        <span class="me-2">Filter:</span>
                        <select class="form-select form-select-sm w-auto">
                            <option selected>All Categories</option>
                            <option>Electronics</option>
                            <option>Fashion</option>
                            <option>Home & Garden</option>
                            <option>Beauty</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex align-items-center justify-content-md-end">
                        <span class="me-2">Sort by:</span>
                        <select class="form-select form-select-sm w-auto">
                            <option selected>Discount: High to Low</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Most Popular</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Flash Sale Banner -->
            <div class="alert alert-danger mb-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-lightning-fill fs-4 me-3"></i>
                    <div>
                        <strong>FLASH SALE!</strong> These deals end in <span class="fw-bold">24 hours</span>. Hurry up!
                    </div>
                </div>
            </div>

            <!-- Deals Grid -->
            <div class="row">
                <!-- Deal 1 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-50%</span>
                        <img src="{{ asset('assets/images/01.webp') }}" class="card-img-top deal-img" alt="Wireless Earbuds">
                        <div class="card-body">
                            <h6 class="card-title">Wireless Earbuds Pro</h6>
                            <div class="mb-2">
                                <span class="deal-price">$49.99</span>
                                <span class="old-price ms-2">$99.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-danger" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">Only 12 left!</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deal 2 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-30%</span>
                        <img src="{{ asset('assets/images/05.webp') }}" class="card-img-top deal-img" alt="Smart Watch">
                        <div class="card-body">
                            <h6 class="card-title">Smart Watch Series 5</h6>
                            <div class="mb-2">
                                <span class="deal-price">$139.99</span>
                                <span class="old-price ms-2">$199.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-warning" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">23 sold of 50</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deal 3 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-60%</span>
                        <img src="{{ asset('assets/images/06.webp') }}" class="card-img-top deal-img" alt="Backpack">
                        <div class="card-body">
                            <h6 class="card-title">Travel Backpack</h6>
                            <div class="mb-2">
                                <span class="deal-price">$27.99</span>
                                <span class="old-price ms-2">$69.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-success" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">Almost gone!</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deal 4 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-40%</span>
                        <img src="{{ asset('assets/images/22.png') }}" class="card-img-top deal-img" alt="Blender">
                        <div class="card-body">
                            <h6 class="card-title">Professional Blender</h6>
                            <div class="mb-2">
                                <span class="deal-price">$59.99</span>
                                <span class="old-price ms-2">$99.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-info" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">Limited stock</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deal 5 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-55%</span>
                        <img src="{{ asset('assets/images/44.webp') }}" class="card-img-top deal-img" alt="Sneakers">
                        <div class="card-body">
                            <h6 class="card-title">Running Sneakers</h6>
                            <div class="mb-2">
                                <span class="deal-price">$44.99</span>
                                <span class="old-price ms-2">$99.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-danger" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">Almost sold out!</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deal 6 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-25%</span>
                        <img src="{{ asset('assets/images/66.webp') }}" class="card-img-top deal-img" alt="Camera">
                        <div class="card-body">
                            <h6 class="card-title">Digital Camera</h6>
                            <div class="mb-2">
                                <span class="deal-price">$224.99</span>
                                <span class="old-price ms-2">$299.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-primary" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">New deal!</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deal 7 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-70%</span>
                        <img src="{{ asset('assets/images/77.webp') }}" class="card-img-top deal-img" alt="Headphones">
                        <div class="card-body">
                            <h6 class="card-title">Noise Cancelling Headphones</h6>
                            <div class="mb-2">
                                <span class="deal-price">$59.99</span>
                                <span class="old-price ms-2">$199.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-danger" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">Last 5 items!</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deal 8 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card deal-card h-100">
                        <span class="badge badge-deal">HOT</span>
                        <span class="badge discount-badge">-35%</span>
                        <img src="{{ asset('assets/images/01.webp') }}" class="card-img-top deal-img" alt="Smartphone">
                        <div class="card-body">
                            <h6 class="card-title">Smartphone X12 Pro</h6>
                            <div class="mb-2">
                                <span class="deal-price">$649.99</span>
                                <span class="old-price ms-2">$999.99</span>
                            </div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-warning" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">20 available</small>
                            <div class="d-flex justify-content-between mt-3">
                                <button class="btn btn-sm btn-danger flex-grow-1 me-2">
                                    <i class="bi bi-cart3"></i> Buy Now
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Countdown Timer Script -->
    <script>
        // Countdown timer for deals
        function updateCountdown() {
            const now = new Date();
            const end = new Date();
            end.setHours(23, 59, 59, 999); // Set to end of day

            const diff = end - now;

            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('deal-countdown').innerHTML =
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();
    </script>

@endsection
