 @include('layouts.focused')
 @include('layouts.header')
  <!-- ======= Hero Section ======= -->
  
   @include('layouts.hero-slider1')
  


 <main id="main">

 @include('flash-message')

 @yield('content')

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('layouts.footer')

 @include('layouts.script') 
 