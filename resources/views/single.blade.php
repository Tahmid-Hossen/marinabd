@extends('default')
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col-sm-5">Room List</th>
              <th scope="col-sm-7">Room numbers</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Single Room</th>
              <td>
                <form action="" method="POST" enctype="multipart/form-data">    
                    <h4>Chose your single room</h4><br>    
                    <input type="checkbox" name="room1" value="room1">101     
                    <input type="checkbox" name="room2" value="room2">102  
                    <input type="checkbox" name="room3" value="room3">103 <br>
                    <input type="checkbox" name="room4" value="room4">104
                    <input type="checkbox" name="room5" value="room5">105
                    <input type="checkbox" name="room6" value="room6">106 <br>
                    <input type="checkbox" name="room7" value="room7">107
                    <input type="checkbox" name="room8" value="room8">108
                    <input type="checkbox" name="room9" value="room9">109 <br>
                    <input type="checkbox" name="room10" value="room10">110
                    <input type="checkbox" name="room11" value="room11">110 
                    <input type="checkbox" name="room12" value="room12">110    
                    <br><br>       
                    <input type="submit" class="btn btn-primary" value="Reserve"/>     
                </form>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
   <h1 class="text-center mb-5">Some single room sample</h1>
  <div class="row">
    <div class="col-sm-4">
      <div class="room-image">
         <img src="images/603/1.jpg" alt="" style="height: 400px; width: 350px;">
      </div>
    </div>

    <div class="col-sm-4">
      <div class="room-image">
         <img src="images/603/2.jpg" alt="" style="height: 400px; width: 350px;">
      </div>
    </div>

    <div class="col-sm-4">
      <div class="room-image">
         <img src="images/603/3.jpg" alt="" style="height: 400px; width: 350px;">
      </div>
    </div>

  </div>
</div>
@stop
