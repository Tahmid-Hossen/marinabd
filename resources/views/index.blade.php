@extends('welcome')
@section('content')

<div class="about-section mt-5">
    <div class="container">
        <h1 class="text-center mb-5"><strong>About US</strong></h1>
        <div class="row">
            <div class="col-sm-4">
                <p class="text-justify">After fifty years of glorious past, Hotel Marina International Limited revives its famed legacy of comfort, elegance and impeccable service. An eminent landmark constructed in 1964, this legendary first private hotel of Cox’s Bazar is reborn, infusing modern sophistication into this vintage-chic, iconic hotel at a new beachfront location of Marine Drive, Kolatoli, Cox’s Bazar.
                With its richly historic past, the Marina International Limited now fully becomes a part of the exciting and rapidly changing present with the addition of a modern, elegant luxury ocean front hotel. The beauty of Cox’s Bazar – the climate, the panoramic ocean views, the sandy beaches, plus the rich culture and history along with the warmth of the sun – is what attracts people here. And the Sayeman Beach Resort provides you exactly just that with extraordinary comfort, luxury and services.</p>
            </div>
            <div class="col-sm-4">
                <img src="images/room2.jpg" alt="" style="height: 400px; width: 350px;">
            </div>
            <div class="col-sm-4">
                <img src="images/room2.jpg" alt="" style="height: 400px; width: 350px;">
            </div>
        </div>
    </div>
</div>

<div class="room-section text-center">
        <div class="container">
                <h1>Our Rooms</h1>
                <div class="row mt-5 mb-5">
                <div class="col-sm-3">
                    <div class="room-package">
                    <div class="room-image">
                        <img src="images/room1.jpg" alt="" style="height: 300px; width: 250px;">
                    </div>
                    <h4>Single Room</h4>
                    <p>$150 / par night</p>
                    <a href="registration.html" class="room-book">Book Now</a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="room-package">
                    <div class="room-image">
                        <img src="images/room2.jpg" alt="" style="height: 300px; width: 250px;">
                    </div>
                    <h4>Double Room</h4>
                    <p>$150 / par night</p>
                    <a href="registration.html" class="room-book">Book Now</a>
                    </div>
                </div>

                <div class="col-sm-3">
                 <div class="room-package">
                    <div class="room-image">
                        <img src="images/room3.jpg" alt="" style="height: 300px; width: 250px;">
                    </div>
                    <h4>Tripple Room</h4>
                    <p>$150 / par night</p>
                    <a href="registration.html" class="room-book">Book Now</a>
                 </div>
                </div>

                <div class="col-sm-3">
                 <div class="room-package">
                    <div class="room-image">
                        <img src="images/room3.jpg" alt="" style="height: 300px; width: 250px;">
                    </div>
                    <h4>Familly Room</h4>
                    <p>$150 / par night</p>
                    <a href="registration.html" class="room-book">Book Now</a>
                 </div>
                </div>
            </div>
            </div>
            <a href="" class="view-more">View More <span class="view-arrow">></span></a>
            </div>

            <!-- End looking room area -->


            <!-- Blog Area -->
            <div class="blog-area">
            <h1 class="text-center mt-5 mb-5">Our Recent Blog</h1>
            <div class="container">
                <div class="row">
                <div class="col-sm-4">
                    <div class="single-blog">
                    <div class="blog-image">
                        <img src="images/room1.jpg" alt="jpg">
                    </div>
                    <p><strong>Category: </strong>ROOMS</p>
                    <h4>New Rooms are affordable price</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex tempore modi nesciunt fuga vel, molestias mollitia numquam laboriosam quos impedit.</p>
                    <a href="" class="readbtn">Read More</a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="single-blog">
                    <div class="blog-image">
                        <img src="images/room1.jpg" alt="">
                    </div>
                    <p><strong>Category: </strong>ROOMS</p>
                    <h4>New Rooms are affordable price</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex tempore modi nesciunt fuga vel, molestias mollitia numquam laboriosam quos impedit.</p>
                    <a href="" class="readbtn">Read More</a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="single-blog">
                    <div class="blog-image">
                        <img src="images/room1.jpg" alt="">
                    </div>
                    <p><strong>Category: </strong>ROOMS</p>
                    <h4>New Rooms are affordable price</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex tempore modi nesciunt fuga vel, molestias mollitia numquam laboriosam quos impedit.</p>
                    <a href="" class="readbtn">Read More</a>
                    </div>
                </div>
                </div>
            </div> 
            <a href="" class="view-more">View More <span class="view-arrow">></span></a>
            </div>

            <!-- End blog area  -->

            <!-- Video section -->
            <div class="hotel-video mt-5 text-center">
            <div class="container">
                <h1>Recommended Hotel For You</h1>
                <div class="row">
                <div class="col-sm-4">
                    <div class="hotel-sidebar">
                        <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link sidebar-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            SINGLE ROOM
                                        </button>
                                        </h5>
                                    </div>
                            
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                        All the rooms are designed to provide you best accommodation according to your need and budget. Sea front Deluxe Supreme rooms are to those who want to see the sea and feel the waves. From this room you can enjoy sunset lying in your bed. These rooms offer the best sea view in Cox′ Bazar.
                                        </div>
                                    </div>
                                </div>
                            <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed sidebar-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    DOUBLE ROOM
                                </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                All the rooms are designed to provide you best accommodation according to your need and budget. Sea front Deluxe Supreme rooms are to those who want to see the sea and feel the waves. From this room you can enjoy sunset lying in your bed. These rooms offer the best sea view in Cox′ Bazar. 
                                </div>
                            </div>
                            </div>

                            <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed sidebar-btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    FAMILLY ROOM
                                </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                All the rooms are designed to provide you best accommodation according to your need and budget. Sea front Deluxe Supreme rooms are to those who want to see the sea and feel the waves. From this room you can enjoy sunset lying in your bed. These rooms offer the best sea view in Cox′ Bazar.
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="text-content">
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/rMxTreSFMgE">
                    </iframe>
                </div>
                </div>
                </div>
            </div>
            </div>


            <!-- Testimonial Area -->
            <div class="testimonial-area mt-5 text-center">
            <h1>Customer Feedback</h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-testi">
                        <div class="testi-image">
                          <img src="images/feedback.jpg" alt="">
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, minus amet facere quibusdam provident inventore. Consequuntur, quisquam architecto, nulla sapiente error distinctio in eaque minus expedita neque quaerat dolore culpa!</p>
                            <h2>Tahmid Hossen</h2>
                            <p>client</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="single-testi">
                        <div class="testi-image">
                         <img src="images/feedback.jpg" alt="">
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, minus amet facere quibusdam provident inventore. Consequuntur, quisquam architecto, nulla sapiente error distinctio in eaque minus expedita neque quaerat dolore culpa!</p>
                            <h2>Tahmid Hossen</h2>
                            <p>client</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="single-testi">
                        <div class="testi-image">
                         <img src="images/feedback.jpg" alt="">
                        </div>
                        <div class="testi-content">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, minus amet facere quibusdam provident inventore. Consequuntur, quisquam architecto, nulla sapiente error distinctio in eaque minus expedita neque quaerat dolore culpa!</p>
                            <h2>Tahmid Hossen</h2>
                            <p>client</p>
                        </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
@stop

