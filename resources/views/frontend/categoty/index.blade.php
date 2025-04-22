@extends('frontend.layouts.master')

@section('title', 'Contact')

@section('content')


    <!-- Product Detail Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Product Images -->
            <div class="col-md-6">
                <div class="border rounded mb-3 text-center">
                    <img src="{{ asset('assets/images/01.webp') }}" class="img-fluid" alt="Main Product Image">
                </div>
                <div class="row g-2">
                    <div class="col-3">
                        <div class="border rounded p-1">
                            <img src="{{ asset('assets/images/06.webp') }}" class="img-fluid" alt="Thumbnail 1">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border rounded p-1">
                            <img src="{{ asset('assets/images/05.webp') }}" class="img-fluid" alt="Thumbnail 2">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border rounded p-1">
                            <img src="{{ asset('assets/images/44.webp') }}" class="img-fluid" alt="Thumbnail 3">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border rounded p-1">
                            <img src="{{ asset('assets/images/77.webp') }}" class="img-fluid" alt="Thumbnail 4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-md-6">
                <h2 class="fw-bold">Premium Wireless Headphones</h2>
                <div class="d-flex align-items-center mb-3">
                    <div class="text-warning me-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <span class="text-muted">(42 reviews)</span>
                </div>
                <div class="mb-3">
                    <span class="text-decoration-line-through text-muted me-2">$199.99</span>
                    <span class="h4 fw-bold text-danger">$149.99</span>
                    <span class="badge bg-danger ms-2">25% OFF</span>
                </div>
                <p class="mb-4">Experience crystal-clear sound with our premium wireless headphones. Featuring noise cancellation, 30-hour battery life, and ultra-comfortable ear cushions for extended listening sessions.</p>

                <div class="mb-4">
                    <h5 class="fw-bold">Colors</h5>
                    <div class="d-flex">
                        <button class="btn btn-outline-dark rounded-circle me-2" style="width: 40px; height: 40px;"></button>
                        <button class="btn btn-outline-dark rounded-circle me-2" style="width: 40px; height: 40px; background-color: #000;"></button>
                        <button class="btn btn-outline-dark rounded-circle me-2" style="width: 40px; height: 40px; background-color: #6c757d;"></button>
                        <button class="btn btn-outline-dark rounded-circle" style="width: 40px; height: 40px; background-color: #dc3545;"></button>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold">Quantity</h5>
                    <div class="input-group" style="width: 150px;">
                        <button class="btn btn-outline-secondary" type="button">-</button>
                        <input type="text" class="form-control text-center" value="1">
                        <button class="btn btn-outline-secondary" type="button">+</button>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-2 mb-4">
                    <button class="btn btn-primary btn-lg flex-grow-1">
                        <i class="bi bi-cart-fill me-2"><a href="{{ route('f.card') }}" style="color: white">Add to Cart</a></i>
                    </button>
                    <button class="btn btn-outline-secondary btn-lg flex-grow-1">
                        <i class="bi bi-heart me-2"></i> Wishlist
                    </button>
                </div>

                <div class="border-top pt-3">
                    <h5 class="fw-bold">Product Details</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Active Noise Cancellation</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> 30-hour battery life</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Bluetooth 5.0</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Built-in microphone</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Foldable design</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button">Specifications</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button">Reviews</button>
                    </li>
                </ul>
                <div class="tab-content p-3 border border-top-0 rounded-bottom">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <h4 class="fw-bold mb-3">Product Description</h4>
                        <p>Our Premium Wireless Headphones deliver an unparalleled listening experience. The advanced noise cancellation technology blocks out external noise, allowing you to immerse yourself in your music. The ergonomic design ensures comfort even during extended use, while the 30-hour battery life means you can enjoy your favorite tunes all day long.</p>
                        <p>The headphones feature Bluetooth 5.0 for a stable connection and come with a built-in microphone for hands-free calls. The foldable design makes them perfect for travel, and the included carrying case provides extra protection.</p>
                    </div>
                    <div class="tab-pane fade" id="specs" role="tabpanel">
                        <h4 class="fw-bold mb-3">Technical Specifications</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="w-25">Brand</th>
                                        <td>AudioPro</td>
                                    </tr>
                                    <tr>
                                        <th>Model</th>
                                        <td>WH-2023</td>
                                    </tr>
                                    <tr>
                                        <th>Connectivity</th>
                                        <td>Bluetooth 5.0, 3.5mm jack</td>
                                    </tr>
                                    <tr>
                                        <th>Battery Life</th>
                                        <td>Up to 30 hours</td>
                                    </tr>
                                    <tr>
                                        <th>Charging Time</th>
                                        <td>2 hours</td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>250g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <h4 class="fw-bold mb-3">Customer Reviews</h4>
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <div class="text-warning me-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <span class="fw-bold me-2">John D.</span>
                                <span class="text-muted">- 2 weeks ago</span>
                            </div>
                            <p>Great sound quality and very comfortable. The battery life is impressive, but I wish the noise cancellation was a bit stronger.</p>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <div class="text-warning me-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <span class="fw-bold me-2">Sarah M.</span>
                                <span class="text-muted">- 1 month ago</span>
                            </div>
                            <p>Absolutely love these headphones! The sound is crystal clear and they're so comfortable I forget I'm wearing them. Highly recommend!</p>
                        </div>
                        <button class="btn btn-outline-primary">Write a Review</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="fw-bold mb-4">You May Also Like</h3>
                <div class="row">
                    <div class="col-md-3 col-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('assets/images/01.webp') }}" class="card-img-top" alt="Related Product">
                            <div class="card-body">
                                <h5 class="card-title">Wireless Earbuds</h5>
                                <div class="text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="card-text text-danger fw-bold">$79.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('assets/images/05.webp') }}" class="card-img-top" alt="Related Product">
                            <div class="card-body">
                                <h5 class="card-title">Bluetooth Speaker</h5>
                                <div class="text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <p class="card-text text-danger fw-bold">$59.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('assets/images/06.webp') }}" class="card-img-top" alt="Related Product">
                            <div class="card-body">
                                <h5 class="card-title">Headphone Stand</h5>
                                <div class="text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <p class="card-text text-danger fw-bold">$29.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('assets/images/77.webp') }}" class="card-img-top" alt="Related Product">
                            <div class="card-body">
                                <h5 class="card-title">Carrying Case</h5>
                                <div class="text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="card-text text-danger fw-bold">$19.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
