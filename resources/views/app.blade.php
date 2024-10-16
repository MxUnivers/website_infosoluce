<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Styles -->
  <title>Infosoluces</title>

  <link rel="icon" type="image/png"  href="{{ asset('assets/img/logo.png') }}">

  <link href="{{ asset('assets/owcarousel/css/fontawesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/owcarousel/css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/carousel.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/element-ui@2.15.14/lib/theme-chalk/index.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- font Krona_One -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Syne:wght@400..800&display=swap"
    rel="stylesheet">
  <!-- font Syne -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Syne:wght@400..800&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


    
  {{-- pour ziggy --}}
  @routes
  @vite('resources/js/app.js')


  @inertiaHead
  

  

</head>

<body>
  @inertia

  <script src="https://cdn.jsdelivr.net/npm/element-ui@2.15.14/lib/index.min.js"></script>
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <!-- owl -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


  <script src="{{asset("assets/owlcarousel/js/script.js")}}"></script>
  <script src="{{asset("assets/owlcarousel/js/owl.carousel.min.js")}}"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <script src="{{asset("assets/script.js")}}"></script>
  <script src="{{asset("assets/carouel.js")}}"></script>








</body>



</body>

</html>