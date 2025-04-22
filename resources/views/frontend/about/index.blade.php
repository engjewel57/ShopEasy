@extends('frontend.layouts.master')
@section('title', 'About')

@section('content')

  <!-- Hero Section -->
  <section class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">Our Story</h1>
      <p class="lead">From humble beginnings to your favorite shopping destination</p>
      <a href="#our-mission" class="btn btn-light me-2">Our Mission</a>
      <a href="#our-team" class="btn btn-outline-light">Meet the Team</a>
    </div>
  </section>

  <!-- Who We Are -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4">
          <h2>Who We Are</h2>
          <p class="lead">ShopEase was founded in 2015 to make online shopping effortless and accessible.</p>
          <p>Started in a garage, we grew into a trusted platform serving millions with quality service and products.</p>
          <p>Today, we offer a wide range of carefully selected items across many categories.</p>
          <a href="#" class="btn btn-outline-primary">Shop Our Collection</a>
        </div>
        <div class="col-md-6">
          <img src="https://via.placeholder.com/600x400" class="img-fluid rounded" alt="Our Story">
        </div>
      </div>
    </div>
  </section>

  <!-- Our Mission -->
  <section id="our-mission" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Our Mission & Values</h2>
        <p class="text-muted">What drives us every day</p>
      </div>
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0">
            <div class="card-body">
              <i class="bi bi-bullseye fs-1 text-primary"></i>
              <h5 class="mt-3">Our Mission</h5>
              <p>To provide top-quality products, great prices, and amazing service.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0">
            <div class="card-body">
              <i class="bi bi-eye fs-1 text-primary"></i>
              <h5 class="mt-3">Our Vision</h5>
              <p>To be the most customer-centric e-commerce platform globally.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0">
            <div class="card-body">
              <i class="bi bi-heart fs-1 text-primary"></i>
              <h5 class="mt-3">Our Promise</h5>
              <p>To treat every customer like family and stand behind every product.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Our Journey</h2>
        <p class="text-muted">Milestones that shaped our growth</p>
      </div>
      <div class="row">
        <div class="col">
          <ul class="list-group">
            <li class="list-group-item">
              <h5>2015 - Humble Beginnings</h5>
              <p>Started in a garage with 3 dreamers.</p>
            </li>
            <li class="list-group-item">
              <h5>2016 - First 10,000 Customers</h5>
              <p>Milestone reached in our first year!</p>
            </li>
            <li class="list-group-item">
              <h5>2018 - Expanded Product Range</h5>
              <p>Over 5,000 products available.</p>
            </li>
            <li class="list-group-item">
              <h5>2020 - Mobile App Launch</h5>
              <p>Convenient shopping on the go.</p>
            </li>
            <li class="list-group-item">
              <h5>2022 - 1 Million Customers</h5>
              <p>A global customer milestone!</p>
            </li>
            <li class="list-group-item">
              <h5>2023 - What’s Next?</h5>
              <p>We’re just getting started.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="py-5 bg-primary text-white">
    <div class="container text-center">
      <div class="row">
        <div class="col-6 col-md-3 mb-3">
          <h2>1M+</h2>
          <p>Happy Customers</p>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <h2>50K+</h2>
          <p>Products</p>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <h2>24/7</h2>
          <p>Support</p>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <h2>100+</h2>
          <p>Team Members</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team -->
  <section id="our-team" class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Meet Our Team</h2>
        <p class="text-muted">The people behind the success</p>
      </div>
      <div class="row text-center">
        <div class="col-6 col-md-3 mb-4">
          <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="">
          <h6>Sarah Johnson</h6>
          <p class="text-muted">CEO & Founder</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="">
          <h6>Michael Chen</h6>
          <p class="text-muted">CTO</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="">
          <h6>David Wilson</h6>
          <p class="text-muted">Marketing Director</p>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="">
          <h6>Emily Rodriguez</h6>
          <p class="text-muted">Customer Experience</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-light text-center py-5">
    <div class="container">
      <h2 class="mb-3">Join Our Growing Community</h2>
      <p class="lead mb-4">Be part of our story - shop with us or join our team!</p>
      <a href="#" class="btn btn-primary me-2">Start Shopping</a>
      <a href="#" class="btn btn-outline-secondary">Careers</a>
    </div>
  </section>



@endsection
