<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/home.css">
  <link rel="stylesheet" type="text/css" href="assets/mixstyle.css">
  <link rel="stylesheet" href="fontawesome-free-5.15.3-web/cssff/all.css">
  <link rel="stylesheet" href="fontawesome-free-5.15.3-web/webfonts/fa-brands-400.eot">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="fontawesome-free-5.15.3-web/cssff/all.css">
</head>
  <body >
    <div class="p-4 bg-dark">
      <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark">
        <a href="homepage" class="navbar-brand">
          <img src="photos/logo.png" alt="TechSource" width="30" height="25">
          TechSource</a>
        
        <button class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#toggleMobileMenu"
        aria-controls="toggleMobileMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMobileMenu">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >
              Productus
              </a>
              <ul class="dropdown-menu"
              aria-labelledby="navbarDropdown">
                <li ><a class="dropdown-item" href="Laptops">Laptops</a></li>
                <li ><a class="dropdown-item" href="TABLET">Tablets</a></li>
                <li ><a class="dropdown-item" href="SmartPhone">SmartPhones</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >
              Gadgets
              </a>
              <ul class="dropdown-menu"
              aria-labelledby="navbarDropdown">
                <li ><a class="dropdown-item" href="keyboards">Keyboards</a></li>
                <li ><a class="dropdown-item" href="headsets">Headsets</a></li>
                <li ><a class="dropdown-item" href="mouse">Mouse</a></li>
              </ul>
            </li>
            <li>
              <a href="login" class="nav-link">Login</a>
            </li>
            <li>
              <a href="signup" class="nav-link">Sign up</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </div>
  <div>




    @yield('content')





<footer class="bg-dark text-white pt-5 pb4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-ms-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-blod text-warning">TechSource</h5>
        <p>TechSource is an e-commerce company that provieds the best technological equipment</p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-blod text-warning">Contact Us</h5>
        <p>
          Sluaimany, Chwarchra, SPU
        </p>
        <p>
          Thechsource@tech.com
        </p>
        <p>
          07500000000
        </p>
      </div>
      <hr class="mb-4">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-6">
          <p>Copyright @2021 All rights reserved by <strong class="text-warning">TechSource</strong></p>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/" class="btn-floating btn-sm text-warning" style="font-size: 20px;">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/" class="btn-floating btn-sm text-warning" style="font-size: 20px;">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/" class="btn-floating btn-sm text-warning" style="font-size: 20px;">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/" class="btn-floating btn-sm text-warning" style="font-size: 20px;">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/" class="btn-floating btn-sm text-warning" style="font-size: 20px;">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>