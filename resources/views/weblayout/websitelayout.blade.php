
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amir Trading Corporation</title>
    <link rel="icon" href="{{url("/assent/images/ATC png2.png")}}" type="image/x-icon">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url("/assent/bootstrap-5.0.2-dist/css/bootstrap.min.css")}}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{url("/assent/css/main.css")}}">
</head>

<body>


<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="{{url("/")}}">
                <img src="assent/images/ATC png2.png" alt="site icon">
                <span class="text-uppercase fw-lighter ms-2">ATC</span>
            </a>

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn position-relative" id="btn-position-relative">
                    <a href="https://wa.me/+923152687435" >
                        <i class="fab fa-whatsapp fa-lg" style="color: #25d366; font-size: 28px;" id="scal"></i>
                    </a>
                </button>
                <button type="button" class="btn position-relative" id="btn-position-relative">
                    <a href="https://www.facebook.com/Amirtradingcorporation/"> <i class="fab fa-facebook fa-lg"
                            style="color: #1195f9; font-size: 28px;" id="scal"></i></a>
                </button>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{url("/")}}">home</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{url("/Collection")}}">collection</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{url("/Gallery")}}">Gallery</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{url("/Blog")}}">blogs</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{url("/About-us")}}">about us</a>
                    </li>
                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="{{url("/Contact-us")}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    
    @yield("weblay")

  <!-- Footer -->


  
      <footer class="container-fluid text-white " id="justfoot">
          <div class="container">
              <div class="row">
                  <!-- Column 1: Logo and Short Description -->
                  <div class="col-md-4 col-12 mb-3">
                      <img src="assent/images/logoblack.png" alt="Logo" class="img-fluid">
                      <p class="footp">Experience perfection with our premium towels, suitable for every occasion from everyday to special events.</p>
                      <div class="order-lg-2 nav-btns">
                        <button type="button" class="btn position-relative" id="btn-position-relative">
                            <a href="https://wa.me/+923152687435" >
                                <i class="fab fa-whatsapp fa-lg" style="color: #25d366; font-size: 28px;" id="scal"></i>
                            </a>
                        </button>
                        <button type="button" class="btn position-relative" id="btn-position-relative">
                            <a href="https://www.facebook.com/Amirtradingcorporation/"> <i class="fab fa-facebook fa-lg"
                                    style="color: #1195f9; font-size: 28px;" id="scal"></i></a>
                        </button>
                    </div>
                  </div>
  
                 
                  <!-- Column 2: Menu -->
                  <div class="col-md-2 col-4 mb-2">
                    <h5 class="foothead5">Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{url("/")}}">Home</a></li>
                        <li><a href="{{url("/About-us")}}">About</a></li>
                        <li><a href="{{url("/Gallery")}}">Gallery</a></li>
                        <li><a href="{{url("/Blog")}}">Blog</a></li>

                    </ul>
                </div>
  
                  <!-- Column 3: Support -->
                  <div class="col-md-3 col-6 mb-3">
                      <h5 class="foothead5">Support</h5>
                      <ul class="list-unstyled">
                          <li><a href="{{url("/Terms-Of-Conditions")}}">Terms & Conditions</a></li>
                          <li><a href="{{url("/Privacy-Policy")}}">Privacy Policy</a></li>
                          <li><a href="{{url("/Contact-us")}}">Contact Us</a></li>
                      </ul>
                  </div>
  
                  <!-- Column 4: Email Subscriptions -->
                  <div class="col-md-3 col-12">
                      <h5 class="foothead5">Email Subscriptions</h5>
                      <p class="footp">Subscribe to our newsletter to get updates</p>
                      <form>
                          <div class="mb-3">
                              <input type="email" class="form-control" placeholder="Your Email">
                          </div>
                          <button type="submit" class="btn btn-primary">Subscribe</button>
                      </form>
                  </div>
              </div>
          </div>
      </footer>
  <div class="container-fluid" id="downfoot">
    <p>© 2023 Amir Trading Corporation Designed by <span>Aamir Khan</span></p>
  </div>

  
  

  <!-- footer -->


    <!-- jquery -->
    <script src="{{url("/assent/js/jquery-3.6.0.js")}}"></script>
    <!-- isotope js -->
    <script src="{{url("https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js")}}"></script>
    <!-- bootstrap js -->
    <script src="{{url("/assent/bootstrap-5.0.2-dist/js/bootstrap.min.js")}}"></script>
    <!-- custom js -->
    <script src="{{url("/assent/js/script.js")}}"></script>
</body>

</html>