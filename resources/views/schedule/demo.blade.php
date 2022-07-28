 @include('layouts.focused')
 @include('layouts.header')
 

 <main id="main">

  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6 col-12">
            <div class="d-flex justify-content-start align-items-center mb-2">
                <div>
                   <h6 class="con-sub-text mb-2">Schedule a Demo</h6>
                   <p class="mb-4 fw-400">See our software in action, ask questions and learn 
                    why Buildx is the right choice for your business.</p>
                    <p class=" fw-600">Already a customer? <span><a href=""  class=" text-decoration-underline text-or-a"> Contact us here.</a></span></p>
                </div>
            </div>
           <div class="d-flex flex-column mb-5">
               <div class="text-orange mb-2"><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span></div>
               <div><p class="fw-300">“Buildx is one of my secret weapons…”</p></div>
               <div class="d-flex justify-content-start align-items-center">
                   <div class="me-3"><img src="{{asset('assets/img/businessmn.png')}}" class="img-fluid review-profile-img" ></div>
                   <div class="d-flex flex-column">
                       <p class="fw-700">Kevin Mond</p>
                       <p class="fw-400 brand-text"> HDR Remodeling</p>
                   </div>
               </div>
           </div>
           <div class="d-flex flex-column mb-5">
            <div class="text-orange mb-2"><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span><span class="me-1"><i class="bi bi-star-fill"></i></span></div>
            <div><p class="fw-300">“We’ve become more efficient with
                the use of Buildx.”</p></div>
            <div class="d-flex justify-content-start align-items-center">
                <div class="me-3"><img src="{{asset('assets/img/businessmn_PNG65661.png')}}" class="img-fluid review-profile-img" ></div>
                <div class="d-flex flex-column">
                    <p class="fw-700">Marty Morse</p>
                    <p class="fw-400 brand-text">  Morse Custom Homes</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm-6 col-12">
          <div class="row">
             @include('flash-message')
            <div class="col-12">
                <form class="row g-3 schedule-demo" method="POST" action="{{route('schedule-demo-store')}}">
                          @csrf
                    <div class="col-md-6">
                        <label class="required">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter your First Name" name="fname">
                      </div>
                      <div class="col-md-6">
                        <label class="required">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter your Last Name" name="lname">
                      </div>
                      <div class="col-md-6">
                        <label class="required">Phone</label>
                         <input type="text" class="form-control" placeholder="Enter your Last Name" name="phone">
                      </div>
                      <div class="col-md-6">
                        <label class="required">Company</label>
                         <input type="text" class="form-control" placeholder="Enter your Company Name" name="company">
                      </div>
                      <div class="col-12">
                        <label class="required">Email</label>
                         <input type="email" class="form-control" placeholder="Enter your Email" name="email">
                      </div>
                      <div class="col-md-6">
                        <label for="inputState" class="required">State/Provice</label>
                        <select id="inputState" class="form-select"  name="state">
                          <option selected>Select</option>
                          <option>Assam</option>
                          <option>Bihar</option>
                          <option>Chandigarh</option>
                          <option>Dehradun</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="inputState" class="required">Country</label>
                        <select id="inputState" class="form-select" name="country">
                          <option selected>Select</option>
                          <option>India</option>
                          <option>USA</option>
                          <option>UK</option>
                         
                        </select>
                      </div>
                      <div class="col-12">
                          <div>
                            <p class="fw-300">By submitting this form, you are agreeing to our <span><a href=""  class="get-start">Terms
                            </a></span> and <span><a href=""  class="get-start"> Conditions Agreement</a></span> and<span><a href=""  class="get-start"> Privacy Policy.</a></span>
                              </p>
                          </div>
                      </div>
                      <div class="col-12">
                       <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-brand px-3">Get free demo</button>
                       </div>
                      </div>
                  </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="social-media pb-5">
   <div class="container">
     <div class="row">
       <div class="d-flex flex-column justify-content-center align-items-center">
    
         <h5 class="fw-600 text-center mb-5">“we’ve become more efficient with the use of Buildx”</h5>

         <div class="adimg d-flex justify-content-center align-items-center">
         <div class="me-4"><img src="{{asset('assets/img/adimg.png')}}" class="img-fluid" alt=""></div>
         <div><img src="{{asset('assets/img/adimg.png')}}" class="img-fluid" alt=""></div>
        </div>
       </div>
     </div>
   </div>
  </section>
  
  </main><!-- End #main -->


 @include('layouts.footer')

 @include('layouts.script') 