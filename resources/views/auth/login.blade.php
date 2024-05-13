<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rani Hospital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{ url('assets/img/favicon.png') }} rel="icon">
  <link href={{ url('assets/img/favicon.png') }} rel="icon">
  <link href={{ url('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
  <link href={{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
  <link href={{ url('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
  <link href={{ url('assets/vendor/quill/quill.snow.css') }} rel="stylesheet">
  <link href={{ url('public/assets/vendor/quill/quill.bubble.css') }} rel="stylesheet">
  <link href={{ url('assets/vendor/remixicon/remixicon.css') }} rel="stylesheet">
  <link href={{ url('assets/vendor/simple-datatables/style.css') }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ url('assets/css/style.css') }} rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="py-4 section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="py-4 d-flex justify-content-center">
                <a href="index.html" class="w-auto logo d-flex align-items-center">
                  <img src={{ url('assets/img/logo.png') }} alt="">
                  <span class="d-none d-lg-block">Rani Hospital</span>
                </a>
              </div><!-- End Logo -->

              <div class="mb-3 card">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="pb-0 text-center card-title fs-4">Login to Your Account</h5>
                  </div>
                  @include('layouts._messages')
                  <form class="row g-3 needs-validation" action="" method="post">
                    {{ csrf_field() }}
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="useremail" class="form-control" id="useremail" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="mb-0 small"> Don't have an Account? 
                        <a href="{{ url('register') }}">Create Account</a>
                      </p>

                      <p class="mb-0 small"><a href="{{ url('forgotpassword')}}">Forgot Password</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ url('assets/vendor/apexcharts/apexcharts.min.js') }}></script>
  <script src={{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ url('assets/vendor/chart.js/chart.umd.js') }}></script>
  <script src={{ url('assets/vendor/echarts/echarts.min.js') }}></script>
  <script src={{ url('assets/vendor/quill/quill.js') }}></script>
  <script src={{ url('assets/vendor/simple-datatables/simple-datatables.js') }}></script>
  <script src={{ url('assets/vendor/tinymce/tinymce.min.js') }}></script>
  <script src={{ url('assets/vendor/php-email-form/validate.js') }}></script>

  <!-- Template Main JS File -->
  <script src={{ url('assets/js/main.js') }}></script>

</body>

</html>