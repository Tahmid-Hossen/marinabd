@extends('default')
@section('content')
<div class="single mt-5">
    <div class="container">
        <div class="form-header mb-5 text-center">
            <h1>Book your favourite single room.</h1>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/room1.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <img src="images/room1.jpg" alt="">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <img src="images/room1.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <img src="images/room1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <!-- Registration area -->
                <div id="reserve" class="section">
                    <div class="container">
                        <div class="row">
        <div class="col-sm-12 col-lg-offset-3">
              <form action="{{ route('store.registration') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Enter your full name</label>
                  <input required type="text" name="name" class="form-control" placeholder="Enter your full name">
                </div>

                <div class="form-group">
                  <label for="id">Email</label>
                  <input required type="text" name="email" class="form-control" placeholder="Enter your email">
                </div> 
              <div class="form-group">
                  <label for="batch">Phone</label>
                  <input required type="phone" name="phone" class="form-control" placeholder="Enter your phone">
                </div> 

                <div class="form-group">
                  <label for="name">Total member</label>
                  <input required type="number" name="member" class="form-control" placeholder="Enter your full name">
                </div>
              <div class="form-group">
                  <label for="name">Arrive Date</label>
                  <input required type="date" name="a_date" class="form-control" placeholder="when you will come">
                </div>
              <div class="form-group">
                  <label for="l_date">Leave Date</label>
                  <input required type="date" name="l_date" class="form-control" placeholder="when you will leave the hotel">
                </div>
                <div class="form-group">
                  <label for="l_date">Address</label>
                  <!-- <input required type="text" name="address" class="form-control" placeholder="type your present address"> -->
                  <textarea name="text" cols="40" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block mb-2">Submit</button>
            </form>
      </div>
    </div>
                </div>

                <!-- End registration form -->
            </div>
        </div>
    </div>
</div>
@stop
