@extends('layout.layout')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center ">
      <div class="col-sm-12 col-md-6 col-xl-3 col-lg-4 bg-dark" style=" width: 450px; ">
          <form name="Form" action="homepage" class="bg-dark" onsubmit="return validateForm()" method="POST" style="box-shadow: 5px 5px 80px rgb(216, 149, 149);">
              <h2 style=" color: rgba(255,190,0, 1.0);">Sign Up</h2>
              <div class="box1">
                  <label>Full Name</label>
                  <input type="text" name="name" id="name">
                  <div class="error1" id="nameErr"></div>
              </div>
              <div class="box1">
                  <label>Email Address</label>
                  <input type="text" name="email" id="email">
                  <div class="error1" id="emailErr"></div>
              </div>
              <div class="box1">
                  <label>Mobile Number</label>
                  <input type="text" name="mobile" maxlength="10" id="mobile">
                  <div class="error1" id="mobileErr"></div>
              </div>
              <div class="box1">
                  <label>Country</label>
                  <select name="country" id="country">
                      <option>Select</option>
                      <option>UK</option>
                      <option>US</option>
                      <option>IR</option>
                      <option>IQ</option>
                  </select> 
                  <div class="error1" id="countryErr"></div>
              </div>
              <div class="box1">
                  <label>Gender</label>
                  <div class="form-inline1" id="gender">
                      <label><input type="radio" name="gender" value="male"> Male</label>
                      <label><input type="radio" name="gender" value="female"> Female</label> 
                  </div>
                  <div class="error1" id="genderErr"></div>
              </div>
                  
              <div class="box1">
                  <input type="submit" value="Submit"  onauxclick="alert('are you sure ?')"><br>
                  <div id="back" style="text-align: center; color:white">
                      Back to<a href="login"> login</a>
                  </div>

              </div>
          </form>
      </div>
  </div>
</div>
@endsection