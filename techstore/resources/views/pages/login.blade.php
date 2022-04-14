
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
       .textc{
         color: aliceblue;
       }
     </style>

    <br>
    
    <section class="Form my-4 mx-5">
      <div class="container">
        <div class="row no-gutters ro">
          <div class="col-lg-5 mt-5 d-none d-lg-block">
            <img src="photos/Ucopy.jpg" class="img-fluid justify-content-center" alt="">
            <p class="textc">TECH SOURCE gives you the ability to Buy the best technology products</p>
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
                        <input type="password" placeholder="********" class="form-control p-4">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-7">
                     <button type="button" class="btn1 mt-3 mb-5">Login</button>
                    </div>
                </div>
                  <p class="textc">Forgot <a href="rest">Password ?</a></p>
                <p class="textc">Don't have an account? <a href="signup">Register here</a></p>
              </form>
             </div>
        </div>
      </div>
    </section>
<br><br><br>
   
@endsection
    
