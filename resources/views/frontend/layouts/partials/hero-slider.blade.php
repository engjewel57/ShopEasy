<div class="hero-slider">
    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/66.webp') }}" class="d-block w-100" alt="Summer Sale" height="80px" width="80px">>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Summer Sale</h3>
                    <p>Up to 70% off on selected items. Limited time offer!</p>
                    <a href="#" class="btn btn-warning btn-lg">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/77.webp') }}" class="d-block w-100" alt="New Arrivals" height="80px" width="80px">
                <div class="carousel-caption d-none d-md-block">
                    <h3>New Arrivals</h3>
                    <p>Discover our latest collection for this season</p>
                    <a href="#" class="btn btn-primary btn-lg">Explore</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/22.png') }}" class="d-block w-100" alt="Free Shipping" height="80px" width="80px">>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Free Shipping</h3>
                    <p>On all orders over $50. No code needed!</p>
                    <a href="#" class="btn btn-success btn-lg">Start Shopping</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
