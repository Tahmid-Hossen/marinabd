@extends('default')
@section('content')
    <div class="container">
        <h1 class="text-center">Book your favourite single room.</h1>
        <div class="row">
            <div class="col-sm-8">
                <div class="reserve-form mt-4">
                        <form action="{{ route('store.registration') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                              <label for="name" class="a-date">Arrive Date</label>
                              <input required type="date" name="a_date" class="form-control" placeholder="when you will come">
                            </div>
                            <div class="form-group">
                              <label for="l_date" class="l-date">Leave Date</label>
                              <input required type="date" name="l_date" class="form-control" placeholder="when you will leave the hotel">
                            </div>

                            <div class="form-group">
                                <label class="l-date" for="name">Your name</label>
                               <input required type="text" name="name" class="form-control" placeholder="Enter your full name">
                            </div>

                            <div class="form-group">
                              <label class="l-date" for="email">Your Email</label>
                              <input required type="text" name="email" class="form-control" placeholder="Enter your email">
                            </div> 
                            
                            <div class="form-group">
                                <label class="l-date" for="phone">Your Phone</label>
                                <input required type="phone" name="phone" class="form-control" placeholder="Enter your phone">
                            </div> 

                            <div class="form-group">
                              <label class="l-date" for="gender">Gender</label>
                              <select class="form-control" name="department" id="exampleFormControlSelect1">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>

                            <div class="form-group">
                                <label class="l-date" for="room">Total Room</label>
                               <input required type="number" name="r-number" class="form-control" placeholder="How many room you need">
                            </div>

                            <div class="form-group">
                              <label class="l-date" for="member">Total member</label>
                              <input required type="number" name="member" class="form-control" placeholder="Total Member">
                            </div>

                            <div class="form-group">
                              <label class="l-date" for="address">Address</label>
                              <textarea name="text" cols="83" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block mb-2">Submit</button>
                        </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="account-info mt-3">
                    <h4>Send your money to this accounts</h4>
                    <p><strong>Dutch Bangla: </strong>112233445566</p>
                    <p><strong>Bank Asia: </strong>112233445566</p>
                    <p><strong>Rocket: </strong>112233445566</p>
                    <p><strong>Bkash: </strong>112233445566</p>

                </div>   
            </div>
        </div>
    </div>
@stop