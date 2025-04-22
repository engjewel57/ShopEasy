<div class="hero-slider">
    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/1.jpg') }}" class="d-block w-100" alt="Summer Sale" >
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: red">Summer Sale</h3>
                    <p style="color: red">Up to 70% off on selected items. Limited time offer!</p>
                    <a href="#" class="btn btn-warning btn-lg">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/3.webp') }}" class="d-block w-100 " alt="New Arrivals" >
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: blue">New Arrivals</h3>
                    <p style="color: blue">Discover our latest collection for this season</p>
                    <a href="#" class="btn btn-primary btn-lg">Explore</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/2.webp') }}" class="d-block w-100 " alt="Free Shipping" >
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: green">Free Shipping</h3>
                    <p style="color: green">On all orders over $50. No code needed!</p>
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
