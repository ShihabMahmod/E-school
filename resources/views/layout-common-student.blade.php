<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fanadesh</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.css')}}" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="{{asset('asset/css/css-circular-prog-bar.css')}}">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/fontawesome.min.js">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet" />
  




  <link rel="stylesheet" href="{{asset('asset/css/css-circular-prog-bar.css')}}">

@livewireStyles
</head>

<body class="sub_page">
  <div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Fanadesh
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{url('/about-us')}}"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="{{url('/student-admission')}}"> Admission </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('/wy-us')}}"> Why Us </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
                </li>

                @if(Session::get('student_email'))
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/student-profile')}}">{{Session::get('student_name')}}</a>
                </li>
                @elseif(Session::get('teacher_email'))
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/teacher-profile')}}">{{Session::get('teacher_name')}}</a>
                </li>
                @elseif(Session::get('admin_email'))
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/admin-profile')}}">{{Session::get('admin_name')}}</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/student-login')}}">Log in</a>
                </li>
                @endif

              </ul>
            </div>
        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->

  {{$slot}}}


  <!-- contact section -->

  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
          Fanadesh
      </h2>
    </div>
      <div class="container layout_padding2">
        <div class="row">
          <div class="col-md-3">
            <h5>
                About Us                                                                             
            </h5>
           <p>
              dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r 
           </p>
          </div>
          <div class="col-md-3">
            <h5>
                Useful Link 
            </h5>
            <ul>
              <li>
                <a href="">
                    Video games
                </a>
              </li>
              <li>
               <a href="">
                  Remote control
               </a>
              </li>
              <li>
                <a href="">
                    3d controller
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>
                Contact Us
            </h5>
            <p>
                dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e 
            </p>
          </div>
          <div class="col-md-3">
       
            <div class="subscribe_container">
              <h5>
                  Newsletter
              </h5>
              <div class="form_container">
                <form action="">
                  <input type="email" placeholder="Enter your email">
                  <button type="submit">
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="container">
          <div class="social_container">
             
              <div class="social-box">
                <a href="">
                  <img src="asset/images/fb.png" alt="">
                </a>
  
                <a href="">
                  <img src="asset/images/twitter.png" alt="">
                </a>
                <a href="">
                  <img src="asset/images/linkedin.png" alt="">
                </a>
                <a href="">
                  <img src="asset/images/instagram.png" alt="">
                </a>
              </div>
            </div>
      </div>
    </section>
</div>
 
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By E-School!
    </p>
  </section>
  <!-- footer section -->

  
  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

@livewireScripts
</body>

</html>