<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BuildX</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favimage.png')}}" rel="icon">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/glacial-indifference" type="text/css"/>
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
<section class="login-bg">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5 col-md-7 col-sm-10 col-12 mx-auto">
                        <div>
                            <div class="text-center"><img src="{{asset('assets/img/logo.png')}}" class="img-fluid" width="200" alt=""/></div>
                            <div class="login-card mx-sm-0 mx-4">
                               <div class="card-body px-0">
                                <form class="login-form" method="POST" action="{{ route('login.store') }}">
                                  @csrf
                                    <div class="px-lg-5 px-sm-2 px-0 mx-4">
                                        <div class="mb-3">
                                            <label>Username</label>
                                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your Email Id" name="email"  value="{{ old('email', null) }}">

                                             @if($errors->has('email'))
                                                <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                          </div>
                                          <div class="mb-3">
                                            <label>Password</label>
                                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your Password" name="password">

                                            @if($errors->has('password'))
                                              <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                              </div>
                                            @endif
                                          </div>
                                         <div class="d-grid mt-4 mb-4">
                                            <button type="submit" class="btn btn-login">Log in</button>
                                         </div>
                                    </div>
                                    <div class="forgot-pass text-center py-2 mx-lg-4 mx-sm-0 mx-0 mb-5">
                                        <a>Forgot <span>Username</span> your <span>Password</span> or ?</a>
                                    </div>
                                    <div class="px-lg-5 px-sm-2 px-0 mx-sm-4 mx-0">
                                        <div class="d-flex justify-content-center align-items-center flex-wrap social-redirect mb-3">
                                            <div class="me-3 margin-img"><a href=""><img src="{{asset('assets/img/app-store.png')}}" class="img-fluid" alt=""/></a></div>
                                            <div><a href=""><img src="{{asset('assets/img/google-play.png')}}" class="img-fluid" alt=""/></a></div>
                                          </div>
                                          <div class="social-links text-center">
                                            <a href="#" class="instagram"><img src="{{asset('assets/img/insta.png')}}" alt="" class="img-fluid" ></a>
                                            <a href="#" class="facebook"><img src="{{asset('assets/img/facebook.png')}}" alt="" class="img-fluid"></a>
                                            <a href="#" class=""><img src="{{asset('assets/img/linkedin.png')}}" alt="" class="img-fluid" ></a>
                                            <a href="#" class="google-plus"><img src="{{asset('assets/img/twitter.png')}}" alt="" class="img-fluid"></a>
                                            <a href="#" class="linkedin"><img src="{{asset('assets/img/youtube.png')}}" alt="" class="img-fluid" ></a>
                                          </div>
                                    </div>
                                  </form>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>