<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("theme/img/apple-icon.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("theme/img/favicon.png") }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
      @yield('title')
    سامانه تردد
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="{{ mix("css/fonts.css") }}">
    <link rel="stylesheet" href="{{ mix('css/misc.css') }}">

    <!-- CSS Files -->
    <link href="{{ asset("theme/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("theme/css/now-ui-kit.css") }}" rel="stylesheet">
    <link href="{{ asset("theme/css/bootstrap-rtl.css") }}" rel="stylesheet">
    <!-- <link href="./assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" /> -->

    <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="{{ asset("theme/css/demo.css") }}" rel="stylesheet">

    @yield('styles')

  </head>

<body class="index-page sidebar-collapse rtl-active f-BYekan">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
       <div class="collapse navbar-collapse justify-content   " id="navigation"
        data-nav-image= "{{ asset("theme/img/blurred-image-1.jpg") }}">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="scrollToDownload()">
              {{-- d-flex flex-row-reverse bd-highlight mb-3 --}}
              <i class="now-ui-icons design_app"></i>
              <p>صفحه اصلی</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" onclick=scrollToProduct"">
              <i class="now-ui-icons shopping_cart-simple"></i>
              <p>محصولات</p>
            </a>
          </li>

          <!-- <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons design_app"></i>
              <p>محصولات</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="./index.html">
                <i class="now-ui-icons business_chart-pie-36"></i> سخت افزار
              </a>
              <a class="dropdown-item" target="_blank" href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
                <i class="now-ui-icons design_bullet-list-67"></i> نرم افزار
              </a>
            </div>
          </li> -->
          <li class="nav-item">
              <a class="nav-link" href="#" onclick="">
                <i class="now-ui-icons business_badge"></i>
                <p>نمایندگان ما</p>
              </a>
            </li>

           <li class="nav-item">
              <a class="nav-link" href="#" onclick="">
                <i class="now-ui-icons users_circle-08"></i>
                <p>درباره ما</p>
              </a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="#" onclick="">
              <i class="now-ui-icons location_pin"></i>
              <p>تماس با ما</p>
              </a>
            </li>
         {{--  <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li> --}}
         {{--  <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li> --}}
           <!-- <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>  -->
        </ul>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand"  href="#"  rel="tooltip" title="راهکارهای مدیریت هوشمند تردد" data-placement="bottom" target="_blank">
        </a>
        <img src="{{ asset("theme/img/logo-ipass.png") }}" alt="">
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
         {{--  <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span> --}}
        </button>
      </div>

    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true"
      style="background-image:url('{{ asset('theme/img/header-3.jpg') }}');" >
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="{{ asset("theme/img/now-logo.png") }}" alt="">
          <h1 class="h1-seo">Intellegent Passing System</h1>
          <h3 class="h1-seo">راهکارهای مدیریت هوشمند تردد</h3>
        </div>
        <!-- <h6 class="category category-absolute">Designed by -->

         <!--  <a href="https://www.creative-tim.com" target="_blank">
            <img src="{{ asset("theme/img/creative-tim-white-slim2.png")}}" class="creative-tim-logo" />
          </a>.</h6> -->
      </div>
    </div>
    <div class="main">
      <div class="section section-images">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="hero-images-container">
                <img src="{{asset("theme/img/hero-image-1.png") }}" alt="">
              </div>
               <div class="hero-images-container-1">
                <img  src="{{asset("theme/img/hero-image-2.png") }}" alt="">
              </div>
                <div class="hero-images-container-2">
                <img src="{{asset("theme/img/hero-image-3.png") }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-basic" id="basic-elements">
        <div class="container">

      </div>
     
      <div class="section section-tabs">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="category"> محصولات نرم افزاری</p>
              <!-- Tabs with Background on Card -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#arghavan" role="tab">سامانه هوشمند ارغوان</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#ros" role="tab">سامانه مدیریت پارکینگ رز</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#polling" role="tab">سامانه استخر ورزشی</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Settings</a>
                    </li> -->
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="arghavan" role="tabpanel">
                      <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    </div>
                    <div class="tab-pane" id="ros" role="tabpanel">
                      <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                    </div>
                    <div class="tab-pane" id="polling" role="tabpanel">
                      <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    </div>
                   
                  </div>
                </div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>
          </div>

            <div class="row">
            <div class="col-md-12">
              <p class="category">محصولات سخت افزاری</p>
              <!-- Nav tabs -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#glassGate" role="tab">
                        <i class="now-ui-icons objects_umbrella-13"></i> گیت شیشه ای
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#turnstillGate" role="tab">
                        <i class="now-ui-icons shopping_cart-simple"></i> گیت اهرمی
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#fullGate" role="tab">
                        <i class="now-ui-icons shopping_shop"></i> گیت تمام قد
                      </a>
                    </li>
                    
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="glassGate" role="tabpanel">
                      <p>گیت های شیشه ای</p>
                    </div>
                    <div class="tab-pane" id="turnstillGate" role="tabpanel">
                      <p>  گیت های اهرمی</p>
                    </div>
                    <div class="tab-pane" id="fullGate" role="tabpanel">
                      <p> گیت های تمام قد</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      <!-- End Section Tabs -->
      <div class="section" id="map">
        <div class="container">
          <div class="title">
            <h4>نمایندگان ما</h4>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
              <img class="d-block" src= "{{ asset("theme/img/map.png") }}" alt="Third slide">
            </div>
          </div>
        </div>
      </div>


      <div class="section section-pagination">
        <div class="container">
          <div class="row">


          </div>
          <br>
          <div class="space"></div>

        </div>
      </div>

      <!--  end notifications -->
      <!-- Typography -->
      <div class="section">
        <div class="container">


          <div class="space-50"></div>

        </div>
      </div>
      <div class="section section-javascript" id="javascriptComponents">
        <div class="container">

          </div>
        </div>
      </div>


      <div class="section">
        <div class="container text-center">
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
              <h2 class="title">Completed with examples</h2>
              <h5 class="description">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 ui kit.</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
          <div class="row">
            <div class="card card-signup" data-background-color="orange">
              <form class="form" method="" action="">
                <div class="card-header text-center">
                  <h3 class="card-title title-up">Sign Up</h3>
                  <div class="social-line">
                    <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                      <i class="fab fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name...">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                    </div>
                    <input type="text" placeholder="Last Name..." class="form-control" />
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email...">
                  </div>

                </div>
                <div class="card-footer text-center">
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Get Started</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col text-center">
            <a href="examples/login-page.html" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">View Login Page</a>
          </div>
        </div>
      </div>
      <div class="section section-examples" data-background-color="black">
        <div class="space-50"></div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <a href="examples/landing-page.html" target="_blank">
                <img src="assets/img/landing.jpg" alt="Image" class="img-raised">
              </a>
              <a href="examples/landing-page.html" class="btn btn-simple btn-primary btn-round">View Landing Page</a>
            </div>
            <div class="col">
              <a href="examples/profile-page.html" target="_blank">
                <img src="assets/img/profile.jpg" alt="Image" class="img-raised">
              </a>
              <a href="examples/profile-page.html" class="btn btn-simple btn-primary btn-round">View Profile Page</a>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-download" id="#download-section" data-background-color="black">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3 class="title">Do you love this Bootstrap 4 UI Kit?</h3>
              <h5 class="description">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim or Invision where you can find the kit in HTML or Sketch/PSD format. Start a new project or give an old Bootstrap project a new look!</h5>
            </div>
            <div class="text-center col-md-12 col-lg-8">
              <a href="#" class="btn btn-primary btn-lg btn-round" role="button">
                Download HTML
              </a>
              <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-primary btn-lg btn-simple btn-round" role="button">
                Download PSD/Sketch
              </a>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row text-center mt-5">
            <div class="col-md-8 ml-auto mr-auto">
              <h2>Want more?</h2>
              <h5 class="description">We've just launched
                <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" target="_blank">Now UI Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap 4 UI Kit.</h5>
            </div>
            <div class="col-md-12">
              <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" class="btn btn-neutral btn-round btn-lg" target="_blank">
                <i class="now-ui-icons arrows-1_share-66"></i> Upgrade to PRO
              </a>
            </div>
          </div>
          <br>
          <br>
          <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
              <h3>Thank you for supporting us!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
              <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                <i class="fab fa-twitter"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                <i class="fab fa-linkedin"></i>
              </a>
              <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                <i class="fab fa-github"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default">Nice Button</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="now-ui-icons users_circle-08"></i>
            </div>
          </div>
          <div class="modal-body">
            <p>Always have an access to your profile</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link btn-neutral">Back</button>
            <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <footer class="footer" data-background-color="black">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset("theme/js/core/jquery.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("theme/js/core/popper.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("theme/js/core/bootstrap.min.js") }}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset("theme/js/plugins/bootstrap-switch.js") }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset("theme/js/plugins/nouislider.min.js") }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset("theme/js/plugins/bootstrap-datepicker.js") }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset("theme/js/now-ui-kit.js?v=1.2.0") }}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>
