@extends('layout.master')

@section('title', 'Contact')

@section('body')

<!-- ================ Inner banner ================ -->
<div class="inner-banner inner-banner-bg pt-70 pb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- page-title -->
        <div class="page-title">
          <h1>Contact Us</h1>
        </div>
        <!-- page-title end -->
      </div>
      <div class="col-lg-4 col-md-4 mb-30">
        <!-- breadcrumb -->
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
        <!-- breadcrumb end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Inner banner end ================ -->

<!-- ================ Contact Us page ================ -->
<div class="contact-us-page pt-70 pb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mb-30">
        <!-- contact form -->
        <form class="form-style-1" method="post" enctype="multipart/form-data" action="http://rainbowdesign.in/themes/Stetho/contact.php">
          <h4 class="mb-6">Contact Form</h4>
          <p>Fill out the form below, we will get back you soon.</p>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Phone Number<span class="text-danger">*</span></label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Your Company</label>
                <input type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Write Your Message<span class="text-danger">*</span></label>
            <textarea class="form-control" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn-style-1">Submit Now</button>
        </form>
        <!-- contact form end -->
      </div>
      <div class="col-lg-4 col-md-4">
        <!-- contact info -->
        <div class="contact-info">
          <!-- contact info box -->
          <div class="contact-info-box mb-30">
            <h5 class="mb-8">Visit our location</h5>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur.</p>
          </div>
          <!-- contact info box end -->
          <!-- contact info box -->
          <div class="contact-info-box mb-30">
            <h5 class="mb-8">Message us</h5>
            <p class="mb-6"><a href="#">info@exampal.com</a></p>
            <p class="mb-6"><a href="#">+01 123 456 789</a></p>
          </div>
          <!-- contact info box end -->
          <!-- contact info box -->
          <div class="contact-info-box mb-30">
            <h5 class="mb-8">Follow Us</h5>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
          <!-- contact info box end -->
          <!-- map -->
          <div class="map mb-30">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60476188.16845563!2d73.1701248!3d22.3092736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1576060813943!5m2!1sen!2sin"></iframe>
          </div>
          <!-- map end -->
        </div>
        <!-- contact info end -->
      </div>
    </div>
  </div>
</div>
<!-- ================ Contact Us page end ================ -->
@endsection
