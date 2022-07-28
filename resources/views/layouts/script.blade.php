 <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.chelsia-owl').owlCarousel({
          margin: 30,
          loop: true,
        autoplay: true,
    
        autoplay: 1000,
        nav: false,
        dots: true,
          responsiveClass:true,
        responsive: {
               0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        },
        1200:{
            items:1,
        }
        }
        });
    });
    </script>
</body>

</html>