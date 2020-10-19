@extends('default')
@section('content')

  <!-- Registration area -->
  <div id="reserve" class="section">
      <div class="section-center">
          <div class="container">
              <div class="row">
                  <div class="reserve-form">
                      <div class="form-header">
                          <h1>Book a Room</h1>
                      </div>
                      <form>
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <span class="form-label">Name</span>
                                      <input class="form-control" type="text" placeholder="Enter your name">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <span class="form-label">Email</span>
                                      <input class="form-control" type="email" placeholder="Enter your email">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <span class="form-label">Phone</span>
                              <input class="form-control" type="tel" placeholder="Enter your phone number">
                          </div>
                          <div class="form-group">
                              <span class="form-label">Total member</span>
                              <input class="form-control" type="text" placeholder="How many Members you are">
                          </div>
                          <div class="form-group">
                            <span class="form-label">Arrive Date</span>
                            <input class="form-control" type="date" required>
                        </div>
                        <div class="form-group">
                          <span class="form-label">Leave Date</span>
                          <input class="form-control" type="date" required>
                      </div>
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <span class="form-label">Adult</span>
                                              <select class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                  <option>6</option>
                                                  <option>7</option>
                                                  <option>8</option>
                                                  <option>9</option>
                                                  <option>10</option>
                                                  <option>11</option>
                                                  <option>12</option>
                                              </select>
                                              <span class="select-arrow"></span>
                                          </div>
                                      </div>
                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <span class="form-label">Child</span>
                                              <select class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                  <option>6</option>
                                                  <option>7</option>
                                                  <option>8</option>
                                                  <option>9</option>
                                                  <option>10</option>
                                                  <option>11</option>
                                                  <option>11</option>
                                              </select>
                                              <span class="select-arrow"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-btn">
                              <button type="submit" class="submit-btn">Book Now</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- End registration form -->
@stop
