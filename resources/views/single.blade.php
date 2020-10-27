@extends('default')
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Room Floor list</th>
              <th scope="col">Single Room number</th>
              <th scope="col">Double Room number</th>
              <th scope="col">tripple Room number</th>
              <th scope="col">Familly Room number</th>
              <th scope="col">Booked Room</th>
              <th scope="col">Free Room</th>
              <th scope="col">Reserve Your Room</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Ist Floor</th>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>102, 103</td>
              <td>101</td>
              <td><a href="{{ Route('reserve.room') }}" class="btn btn-primary">Reserve</a></td>
            </tr>
            <tr>
              <th scope="row">2nd Floor</th>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>102, 103</td>
              <td>101</td>
              <td><a href="{{ Route('reserve.room') }}" class="btn btn-primary">Reserve</a></td>
            </tr>
            <tr>
              <th scope="row">3rd Floor</th>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>101, 102, 103</td>
              <td>102, 103</td>
              <td>101</td>
              <td><a href="{{ Route('reserve.room') }}" class="btn btn-primary">Reserve</a></td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
   <h1 class="text-center mb-5">Some single room sample</h1>
  <div class="row">
    <div class="col-sm-4">
      <div class="room-image">
        <img src="images/room1.jpg" alt="">
      </div>
    </div>

    <div class="col-sm-4">
      <div class="room-image">
        <img src="images/room1.jpg" alt="">
      </div>
    </div>

    <div class="col-sm-4">
      <div class="room-image">
        <img src="images/room1.jpg" alt="">
      </div>
    </div>

  </div>
</div>
@stop
