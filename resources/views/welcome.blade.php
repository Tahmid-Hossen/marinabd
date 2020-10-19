<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>

  <!-- css links -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>

  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('admin/js/core/popper.min.js')}}"></script>

</head>
<body>
<!-- Header Section -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <div class="logo">
        <img src="images/logoh.png" alt="">
        </div>
      </div>

      <div class="col-sm-2"></div>

      <div class="col-sm-6">
        <div class="menu">
            <ul>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Service</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Pages</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="book-now">
          <a href="{{ Route('registration.page') }}" class="btn">Book Now</a>
        </div>
      </div>
    </div>
   </div>
</div>
<!-- End Menu Area -->

<!-- Start book Header Area -->

<div id="booking" class="section">
  <div class="container">
    <div class="intro">
      <h1><span class="heading-primary-main">Welcome to Hotel Marina International Limited</span></h1>
       <span class="heading-primary-sub"><h5>Get in Touch:
        <i class="fab facebook fa-facebook-f"></i>
        <i class="fab instagrame fa-instagram"></i>
        <i class="fab youtube fa-youtube"></i>
        <i class="fab twitter fa-twitter"></i>
      </h5></span>
    </div>
    <div class="find-room">
      <h5 class="mt-3 text-center">Here you can find our all room</h5>
      <div class="row">
        <div class="col-sm-3"><a href="{{ Route('single.room') }}" class="btn btn-primary">Single Room</a></div>
        <div class="col-sm-3"><a href="{{ Route('double.room') }}" class="btn btn-primary">Double Room</a></div>
        <div class="col-sm-3"><a href="{{ Route('tripple.room') }}" class="btn btn-primary">Thriple Room</a></div>
        <div class="col-sm-3"><a href="{{ Route('familly.room') }}" class="btn btn-primary">Familly Room</a></div>
      </div>
    </div>
  </div>
</div>

<!-- End Book header -->

@yield('content')

<!-- Start footer area -->
<div class="footer-area mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="footer-col">
          <h1>Hotel Marina</h1>
          <i class="fab facebook fa-facebook-f"></i>
          <i class="fab instagrame fa-instagram"></i>
          <i class="fab youtube fa-youtube"></i>
          <i class="fab twitter fa-twitter"></i>
          <p>Copyright ©2020 All rights <br> reserved | This template <br> is made by <a class="webamex" href="#"><strong>WebAmex</strong></a></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="footer-col">
          <h1>Quick Links</h1>
          <ul>
            <li>About HotelMarina</li>
            <li>About HotelMarina</li>
            <li>About HotelMarina</li>
            <li>About HotelMarina</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="footer-col">
          <h1>Reservation</h1>
          <ul>
            <li>Tel: 345 5667 889</li>
            <li>Skype: Marianabooking</li>
            <li>reservations@hotelmarina.com</li>
          </ul>
        </div>
      </div>
      
      <div class="col-sm-3">
      <div class="footer-col">
        <div class="social-media">
          <h1>Our Location</h1>
           <ul>
              <li>198 West 21th Street,</li>
              <li>Suite 721 New York NY 10016</li>
              <li>reservations@hotelmarina.com</li>
              <div class="single mt-2">
                <h5>Google Map</h5>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.432594622134!2d90.39792401543298!3d23.874274189948675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43bb800c33f%3A0xd2b2df37f280ef37!2sNorth%20Tower%2C%20Sonargaon%20Janapath%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1600024744789!5m2!1sen!2sbd" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </p>
              </div>
            </ul>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

<!-- Js LINKS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>