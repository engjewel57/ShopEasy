@extends('frontend.layouts.master')
@section('title', 'New Aravel')

@section('content')

    <!-- New Arrivals Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="fw-bold">New Arrivals</h2>
                    <p class="text-muted">Discover our latest products</p>
                </div>
            </div>

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
                            <option selected>Newest First</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Most Popular</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row">
                <!-- Product 1 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/01.webp') }}" class="card-img-top product-img" alt="Product 1">
                        <div class="card-body">
                            <h6 class="card-title">Wireless Bluetooth Headphones</h6>
                            <div class="mb-2">
                                <span class="price">$59.99</span>
                                <span class="old-price ms-2">$79.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/05.webp') }}" class="card-img-top product-img" alt="Product 2">
                        <div class="card-body">
                            <h6 class="card-title">Smart Fitness Tracker</h6>
                            <div class="mb-2">
                                <span class="price">$39.99</span>
                                <span class="old-price ms-2">$49.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/06.webp') }}" class="card-img-top product-img" alt="Product 3">
                        <div class="card-body">
                            <h6 class="card-title">Organic Cotton T-Shirt</h6>
                            <div class="mb-2">
                                <span class="price">$24.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/22.png') }}" class="card-img-top product-img" alt="Product 4">
                        <div class="card-body">
                            <h6 class="card-title">Stainless Steel Water Bottle</h6>
                            <div class="mb-2">
                                <span class="price">$19.99</span>
                                <span class="old-price ms-2">$29.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/44.webp') }}" class="card-img-top product-img" alt="Product 5">
                        <div class="card-body">
                            <h6 class="card-title">Wireless Charging Pad</h6>
                            <div class="mb-2">
                                <span class="price">$29.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/66.webp') }}" class="card-img-top product-img" alt="Product 6">
                        <div class="card-body">
                            <h6 class="card-title">Smart LED Desk Lamp</h6>
                            <div class="mb-2">
                                <span class="price">$45.99</span>
                                <span class="old-price ms-2">$59.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/77.webp') }}" class="card-img-top product-img" alt="Product 7">
                        <div class="card-body">
                            <h6 class="card-title">Portable Bluetooth Speaker</h6>
                            <div class="mb-2">
                                <span class="price">$79.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-new">NEW</span>
                        <img src="{{ asset('assets/images/01.webp') }}" class="card-img-top product-img" alt="Product 8">
                        <div class="card-body">
                            <h6 class="card-title">Leather Wallet with RFID Protection</h6>
                            <div class="mb-2">
                                <span class="price">$34.99</span>
                                <span class="old-price ms-2">$49.99</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-outline-primary">Add to Cart</button>
                                <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
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


@endsection
