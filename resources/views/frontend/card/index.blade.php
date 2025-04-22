@extends('frontend.layouts.master')
@section('title', 'Card')
@section('content')


    <!-- Cart Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Your Cart (3 Items)</h4>
                    </div>
                    <div class="card-body">
                        <!-- Cart Item 1 -->
                        <div class="row border-bottom pb-3 mb-3">
                            <div class="col-md-2 col-4">
                                <img src="https://via.placeholder.com/100x100" class="img-fluid rounded" alt="Product Image">
                            </div>
                            <div class="col-md-6 col-8">
                                <h5 class="mb-1">Premium Wireless Headphones</h5>
                                <p class="text-muted mb-1">Color: Black</p>
                                <div class="text-warning small">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary ms-2">
                                        <i class="bi bi-heart"></i> Save for later
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-3 mt-md-0">
                                <div class="input-group mb-2" style="width: 120px;">
                                    <button class="btn btn-outline-secondary" type="button">-</button>
                                    <input type="text" class="form-control text-center" value="1">
                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                </div>
                                <div class="text-end">
                                    <span class="text-decoration-line-through text-muted me-2">$199.99</span>
                                    <span class="fw-bold">$149.99</span>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 2 -->
                        <div class="row border-bottom pb-3 mb-3">
                            <div class="col-md-2 col-4">
                                <img src="https://via.placeholder.com/100x100" class="img-fluid rounded" alt="Product Image">
                            </div>
                            <div class="col-md-6 col-8">
                                <h5 class="mb-1">Wireless Earbuds</h5>
                                <p class="text-muted mb-1">Color: White</p>
                                <div class="text-warning small">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary ms-2">
                                        <i class="bi bi-heart"></i> Save for later
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-3 mt-md-0">
                                <div class="input-group mb-2" style="width: 120px;">
                                    <button class="btn btn-outline-secondary" type="button">-</button>
                                    <input type="text" class="form-control text-center" value="2">
                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                </div>
                                <div class="text-end">
                                    <span class="fw-bold">$159.98</span>
                                    <small class="text-muted d-block">$79.99 each</small>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 3 -->
                        <div class="row pb-3">
                            <div class="col-md-2 col-4">
                                <img src="https://via.placeholder.com/100x100" class="img-fluid rounded" alt="Product Image">
                            </div>
                            <div class="col-md-6 col-8">
                                <h5 class="mb-1">Bluetooth Speaker</h5>
                                <p class="text-muted mb-1">Color: Blue</p>
                                <div class="text-warning small">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary ms-2">
                                        <i class="bi bi-heart"></i> Save for later
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-3 mt-md-0">
                                <div class="input-group mb-2" style="width: 120px;">
                                    <button class="btn btn-outline-secondary" type="button">-</button>
                                    <input type="text" class="form-control text-center" value="1">
                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                </div>
                                <div class="text-end">
                                    <span class="fw-bold">$59.99</span>
                                </div>
                            </div>
                        </div>

                        <!-- Coupon Code -->
                        <div class="mt-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter coupon code">
                                <button class="btn btn-primary" type="button">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Saved for Later -->
                <div class="card mt-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Saved for Later (2 Items)</h5>
                    </div>
                    <div class="card-body">
                        <!-- Saved Item 1 -->
                        <div class="row border-bottom pb-3 mb-3">
                            <div class="col-md-2 col-4">
                                <img src="https://via.placeholder.com/100x100" class="img-fluid rounded" alt="Product Image">
                            </div>
                            <div class="col-md-6 col-8">
                                <h5 class="mb-1">Smart Watch</h5>
                                <p class="text-muted mb-1">Color: Black</p>
                                <div class="text-warning small">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-3 mt-md-0">
                                <div class="text-end">
                                    <span class="fw-bold">$129.99</span>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-cart-plus"></i> Add to cart
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger ms-2">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Saved Item 2 -->
                        <div class="row">
                            <div class="col-md-2 col-4">
                                <img src="https://via.placeholder.com/100x100" class="img-fluid rounded" alt="Product Image">
                            </div>
                            <div class="col-md-6 col-8">
                                <h5 class="mb-1">Phone Charger</h5>
                                <p class="text-muted mb-1">Color: White</p>
                                <div class="text-warning small">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 mt-3 mt-md-0">
                                <div class="text-end">
                                    <span class="fw-bold">$19.99</span>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-cart-plus"></i> Add to cart
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger ms-2">
                                        <i class="bi bi-trash"></i> Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Order Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal (3 items)</span>
                            <span>$369.96</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <span class="text-success">Free</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax</span>
                            <span>$29.60</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Discount</span>
                            <span class="text-danger">-$50.00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="fw-bold">Total</h5>
                            <h5 class="fw-bold">$349.56</h5>
                        </div>
                        <button class="btn btn-primary w-100 py-2 mb-3">
                            Proceed to Checkout
                        </button>
                        <button class="btn btn-outline-secondary w-100 py-2">
                            Continue Shopping
                        </button>

                        <!-- Payment Methods -->
                        <div class="mt-4">
                            <h6 class="fw-bold mb-3">We Accept</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <img src="{{ asset('assets/images/vi.webp') }}" alt="Visa" class="border rounded p-1" height="40px" width="120px">
                                <img src="{{ asset('assets/images/master.jpg') }}" alt="Mastercard" class="border rounded p-1" height="40px" width="120px">
                                <img src="{{ asset('assets/images/pay PAL.jpg') }}" alt="PayPal" class="border rounded p-1" height="40px" width="120px">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security Info -->
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="me-3 text-primary">
                                <i class="bi bi-shield-check fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold">Secure Shopping Guarantee</h6>
                                <p class="small text-muted mb-0">Your information is protected by 256-bit SSL encryption.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Frequently Bought Together -->
    <div class="container mt-5">
        <h4 class="fw-bold mb-4">Frequently Bought Together</h4>
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Product">
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
                        <button class="btn btn-outline-primary btn-sm w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Product">
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
                        <button class="btn btn-outline-primary btn-sm w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title">Aux Cable</h5>
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <p class="card-text text-danger fw-bold">$9.99</p>
                        <button class="btn btn-outline-primary btn-sm w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title">Cleaning Kit</h5>
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <p class="card-text text-danger fw-bold">$14.99</p>
                        <button class="btn btn-outline-primary btn-sm w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
