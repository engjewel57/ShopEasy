@extends('frontend.layouts.master')

@section('title', 'Contact')

@section('content')
<!-- Contact Form Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="mb-4 text-center">Get in Touch</h2>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" class="form-control" placeholder="Your name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" class="form-control" placeholder="your@example.com">
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Subject">
          </div>
          <div class="mb-4">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" rows="5" class="form-control" placeholder="Type your message..."></textarea>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Contact Info Section -->
<section class="bg-light py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <h5>Address</h5>
        <p>123 Market Street, Cityville, Country</p>
      </div>
      <div class="col-md-4 mb-4">
        <h5>Email</h5>
        <p>support@shopease.com</p>
      </div>
      <div class="col-md-4 mb-4">
        <h5>Phone</h5>
        <p>+1 (234) 567-890</p>
      </div>
    </div>
  </div>
</section>

<!-- Google Map (Optional) -->
<section class="pb-5">
  <div class="container">
    <div class="ratio ratio-16x9">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019512470092!2d-122.41941568468203!3d37.77492977975907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c7e6c68df%3A0x9345ec1e7d28268a!2sSan+Francisco%2C+CA!5e0!3m2!1sen!2sus!4v1662990929099"
        allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

@endsection

