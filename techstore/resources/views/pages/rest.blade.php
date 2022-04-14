@extends('layout.layout')

@section('content')
         <style>
       *{
         padding: 0;
         margin: 0;
         box-sizing: border-box;
       }
       body{
         background: #212529;
       }
       .ro{
          background: #212529;
          border-radius: 20px;
          box-shadow: 5px 5px 80px rgb(216, 149, 149);
       }
       img{
           border-radius: 40px;
           margin-top: 10px;
       }
       .btn1{
           width: 100%;
           height: 50px;
           border: none;
           outline: none;
           background-color: goldenrod;
           color: black;
           border-radius: 4px;
           font-weight: bold;
       }
       .btn1:hover{
           border: 1px solid;
           background-color: white;
           color: gold;
       }
       a{
        text-decoration: none;
       }
       #home{
        width: 80px;
        height: 80px;
        position: absolute;
        right: 100px;
        margin: 20px;
        
       }
       .textc{
         color: aliceblue;
       }
     </style>

    <section class="Form my-4 mx-5">
      <div class="container">
        <div class="row ro no-gutters ">
          <div class="col-lg-5 d-none d-lg-block">
          <img src="photos/Ucopy.jpg" class="img-fluid" alt="">
          <p style=" color: whitesmoke;">TECH SOURCE gives you the ability to Buy a best technology product</p>
          </div>
          <div class="col-lg-7 px-5 pt-5">
             

              <h1 class="font-weight-bold py-3 textc">TechSource</h1>
              
             
              <h4 class="textc">Sign into your account</h4>
              <form>
                  <div class="form-row">
                      <div class="col-lg-7">
                          <input type="email" placeholder="Email-address" class="form-control my-3 p-4">
                      </div>
                  </div>
                  
                <div class="form-row">
                    <div class="col-lg-7">
                     <button type="button" class="btn1 mt-3 mb-5 textc">Rest Password</button>
                    </div>
                </div>
                
                <p class="textc">Don't have an account? <a href="signup">Register here</a></p>
              </form>
             </div>
        </div>
      </div>
    </section>
<br><br><br>
@endsection


   