@extends('layout.layout')




@section('content')
<style>
  .bg{
	background-image: url(photos/techsource.jpg);
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  flex-wrap: wrap;
  padding: 50px;
  align-items: flex-start;

}
</style>
    
<div>
  <div class="bg justify-content-center">
  
  <div class="row justify-content-md-between">  
    <div class="chap col-sm-12 col-md-6 col-xl-3 col-lg-4 m-3 card shadow-lg">
      <p style=" color: rgba(71,225,12, 1.0); font-size: 20px;">Razer Blade Pro 17</p>
      <img src="photos/razer.jpg" width="100%" height="100%">
      <p class="dis"><br>There is an unbelievable discount, you Shouldn't miss it!!!</p>
      <a href="Gaming Laptops.html" class="btn btn-outline-info m-1 ">More info</a>
    </div>
  
  
    
    <div class="rast col-sm-12 col-md-6 col-xl-3 col-lg-4 m-3 card">
      <p style=" color: rgba(255,204,0, 1.0); font-size: 19px;">SAMSUNG GALAXY S21 ULTRA</p>
      <img src="photos/galaxys21.jpg" width="100%" height="100%">
      <p class="dis"><br>Highest Resolution In A Smartphone - Making Your Footage Look Even Better Than The Cinema.</p>
      <a href="Smartphone.html" class="btn btn-outline-info m-1 ">More info</a>
    </div>
  </div>
  
  <div class="row justify-content-md-between">
  
    <div class="chap col-sm-12 col-md-6 col-xl-3 col-lg-4 m-3 card">
      <p style=" color: #a20520; font-size: 20px; font-weight: bold;">HyperX Cloud 2</p>
      <img src="photos/hyperxc2.jpg" width="100%" height="100%">
      <p class="dis"><br>The HyperX Cloud was built to be an ultra-comfortable gaming headset with amazing sound.</p>
      <a href="headsets.html" class="btn btn-outline-info m-1 ">More info</a>
    </div>
  
  
  
    
    <div class="rast col-sm-12 col-md-6 col-xl-3 col-lg-4 m-3 card">
      <p style=" color: #00b8fc; font-size: 20px;">Logitech G613</p>
      <img src="photos/g613.jpg" width="100%" height="100%">
      <p class="dis"><br>G613 is a next generation wireless keyboard designed for gamers who demand both the high performance capabilities of mechanical switches and the freedom of wireless gaming.</p>
      <a href="keyboards.html" class="btn btn-outline-info m-1 ">More info</a>
  </div>
  </div>
  
  </div>

@endsection  