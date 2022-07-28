 @include('layouts.focused')
 @include('layouts.header')

  <!-- ======= Hero Section ======= -->
  <section class="contact" class="d-flex align-items-center">
  <img src="{{asset('assets/img/contactus.png')}}" class="img-fluid" alt="">
  <div class="hero-overlay">
  <div class="hero-content">
    <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="ps-lg-5 ps-sm-2 ps-2">
          <div class="d-flex flex-column">
            <h6 class="text-fade text-uppercase header-text1">CONTACT US</h6>
            <h4 class=" header-text2">We’re always  here for  you</h4>
            <p class="mb-0 header-text3">Our team has your back with unlimited support whenever you need it.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  </section><!-- End Hero -->

<main id="main">

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h6 class="con-sub-text mb-4">Talk to Sales</h6>
            <p class="text-center fw-400">Interested in trying Buildx risk free? Just pick up the phone to chat with a member of our team.
              </p>
              <p class="text-center fw-400">Monday–Friday, 8:00 a.m. – 5:00 p.m. CST</p>
              <h6 class="fw-700">(888) 415-7128</h6>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h6 class="con-sub-text mb-4">Contact our Customer Success team</h6>
            <p class="text-center fw-400">Have questions or need help with your account? We’re here
              for you!
              </p>
              <div>
                <a href="{{route('contact')}}" class="btn con-support">Contact support</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-4 blue-gradient">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h6 class="fw-700 text-20 mb-4">Want to work for us?</h6>
            <p class="text-center fw-400">We’re always looking for creative problem solvers.
              Check out our <span><a href=""  class="text-or-a">job openings.</a></span>
              </p>
             
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h6 class="fw-700 text-20 mb-4">Write for us</h6>
            <p class="text-center fw-400">Boost your site’s SEO. Show your expertise. 
              Reach thousands. Writing for us is a win-win-win.
              
              </p>
              <div>
                <a href="" class="text-orange">Pitch your idea</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-4">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-6 col-12">
         <div><img src="{{asset('assets/img/excavator.png')}}" class="img-fluid"></div>
        </div>
        <div class="col-sm-6 col-12">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <h6 class="fw-700 text-20 mb-4 text-orange text-uppercase">SCHEDULE A DEMO</h6>
            <p class="text-center fw-400">
              Let us show you how it works
            </p>   <p class="text-center fw-400">
              A member of our team will give you 
              a detailed demo based on your specific needs.
              
            </p>
            
              <div class="mb-3">
                <a href="{{route('contact')}}" class="btn booknow">Book Time Now</a>
              </div>
              <p class="text-center fw-300">Or try it risk free for 30 days! <span><a href="{{route('contact')}}"  class="get-start">Get started
              </a></span>
                </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="social-media pb-3">
   <div class="container">
     <div class="row">
       <div class="d-flex flex-column justify-content-center align-items-center">
         <h4 class="fw-600 mb-3 text-center">Let’s get social</h4>
         <p class="fw-600 text-center">Connect with us on social for the latest company updates.</p>

         <div class="social-media-link">
          <a href="#" class="instagram"><img src="{{asset('assets/img/listablue.png')}}" alt="" class="img-fluid" height="35" width="35"></a>
          <a href="#" class="facebook"><img src="{{asset('assets/img/faceblue.png')}}" alt="" class="img-fluid" height="35" width="35"></a>
          <a href="#" class=""><img src="{{asset('assets/img/linkblue.png')}}" alt="" class="img-fluid" height="35" width="35"></a>
          <a href="#" class="google-plus"><img src="{{asset('assets/img/twitblue.png')}}" alt="" class="img-fluid" height="35" width="35"></a>
          <a href="#" class="linkedin"><img src="{{asset('assets/img/youtblue.png')}}" alt="" class="img-fluid" height="35" width="35"></a>
        </div>
       </div>
     </div>
   </div>
  </section>
  </main><!-- End #main -->


 @include('layouts.footer')

 @include('layouts.script') 