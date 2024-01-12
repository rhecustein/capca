<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
  <!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link
  rel="shortcut icon"
  type="image/png"
  href="../assets/images/logos/favicon.png"
/>

<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Labs Capca - Autobot Ws</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="{{ asset('assets/images/logos/favicon.png')}}" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
      <div class="position-relative z-index-5">
        <div class="row">
          <div class="col-xl-7 col-xxl-8">
            {{-- <a href="/horizontal/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
              <img src="{{ asset('assets/images/logos/dark-logo.svg')}}" class="dark-logo" alt="Logo-Dark" />
              <img src="{{ asset('assets/images/logos/light-logo.svg')}}" class="light-logo" alt="Logo-light" />
            </a> --}}
            <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
              <img src="{{ asset('assets/images/backgrounds/login-security.svg')}}" alt="" class="img-fluid" width="500">
            </div>
          </div>
          <div class="col-xl-5 col-xxl-4">
            <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
              <div class="col-sm-8 col-md-6 col-xl-9">
                <h2 class="mb-3 fs-7 fw-bolder">Welcome to Labs Capca</h2>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                  </div>
                 
                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                    {{ __('Log in') }}
                </button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->

<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/app.horizontal.init.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>