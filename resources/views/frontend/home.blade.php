@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Product Listing -->
        <div class="col-12">
            <div class="row mb-4">
            <div class="col-4 col-md-3 border-rounded" style="background-color: rgb(38, 38, 139)">
                    <h4 style="color: white ">Featured Products</h4>
                </div>
            </div>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card product-card h-100">
                        <span class="badge bg-danger badge-sale">Sale</span>
                        <img src="{{asset('assets/images/01.webp')}}" class="card-img-top product-img" alt="Product">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-muted small">(42)</span>
                            </div>
                            <h5 class="card-title">Wireless Headphones</h5>
                            <p class="card-text text-muted small">Noise cancelling, 30hr battery</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="price">$89.99</span>
                                    <span class="old-price ms-2">$129.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card product-card h-100">
                        <img src="{{asset('assets/images/44.webp')}}" class="card-img-top product-img" alt="Product">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="text-muted small">(36)</span>
                            </div>
                            <h5 class="card-title">Smart Watch Pro</h5>
                            <p class="card-text text-muted small">Fitness tracker, waterproof</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="price">$199.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card product-card h-100">
                        <span class="badge bg-success badge-sale">New</span>
                        <img src="{{asset('assets/images/05.webp')}}" class="card-img-top product-img" alt="Product">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-muted small">(128)</span>
                            </div>
                            <h5 class="card-title">Bluetooth Speaker</h5>
                            <p class="card-text text-muted small">360° sound, 20hr playtime</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="price">$59.99</span>
                                    <span class="old-price ms-2">$79.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card product-card h-100">
                        <span class="badge bg-success badge-sale">New</span>
                        <img src="{{asset('assets/images/06.webp')}}" class="card-img-top product-img" alt="Product">
                        <div class="card-body">
                            <div class="rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-muted small">(98)</span>
                            </div>
                            <h5 class="card-title">Wireless Earbuds</h5>
                            <p class="card-text text-muted small">True wireless, 24hr battery</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="price">$79.99</span>
                                    <span class="old-price ms-2">$99.99</span>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to Your Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>
                <hr>
                <div class="text-center">
                    <p>Don't have an account? <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Create New Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="registerEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms">I agree to the <a href="#" class="text-decoration-none">Terms and Conditions</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
                <hr>
                <div class="text-center">
                    <p>Already have an account? <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
