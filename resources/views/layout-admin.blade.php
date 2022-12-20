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
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet" />




  <link rel="stylesheet" href="{{asset('asset/css/css-circular-prog-bar.css')}}">

 @livewireStyles
</head>

<body>


 {{$slot}}

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By E-Schol
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

 @livewireScripts
</body>

</html>