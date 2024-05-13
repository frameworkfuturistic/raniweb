<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>{{ !empty($meta_title) ? $meta_title : '' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    @if(!empty($meta_keywords))
      <meta content="{{ $meta_keywords }}" name="keywords" />       
    @endif

    @if(!empty($meta_description))
      <meta content="{{ $meta_description }}" name="description" />       
    @endif
    
    
    <!-- Favicon -->
    <link href="{{ url('frontend/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <link href={{ url('') }} rel="icon">

    <!-- Flaticon Font -->
    <link href="{{ url('frontend/lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ url('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ url('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" />

    @yield('styles')

  </head>

  <body>

    @include('layouts._header')

    @yield('contents')

    @include('layouts._footer')

    <!-- Back to Top -->
    <a href="#" class="p-3 btn btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

    {{-- <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script> --}}

    <!-- Template Javascript -->
    <script src="{{ url('frontend/js/main.js') }}"></script>

    @yield('scripts')
  </body>
</html>
