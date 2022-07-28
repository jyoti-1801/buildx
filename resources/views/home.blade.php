 @include('layouts.focused')
 @include('layouts.header')
 @include('layouts.hero-slider1')

<main id="main">
<section class="py-5">
  <div class="container-fluid">
    <div class="row">
  <div class="col-12 mx-auto">
    <div class="d-flex flex-column">
      <h4 class="text-dark-blue text-center fw-500 mb-4">Find Your Industry Solution</h4>
      <div class="d-flex justify-content-center align-items-center">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb cust-bread">
          <li class="breadcrumb-item"><a href="#">Home builders</a></li>
          <li class="breadcrumb-item "><a href="#">Specialty Contractors</a> </li>
          <li class="breadcrumb-item"><a href="#">Home Remodelers </a></li>
          <li class="breadcrumb-item"><a href="#">Commercial Constractors</a></li>
        </ol>
      </nav>
    </div>
    </div>
  </div>
    </div>
    <div class="row g-3 mt-3 align-items-center">
      <div class="col-md-6 col-12">
        <div class="gradient-dark-blue p-2 mb-4">
           <div>
             <h4 class="fw-500 text-white text-center mb-0">Construction Software designed to
              make your business better</h4>
           </div>
        </div>
        <div class="px-md-5 px-sm-2 px-0">
          <p class="fw-300">Leave sticky notes and spredsheets in the past plan
            projects ,track projects and impress clients with our
            constrution.</p>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="lap-img text-center"><img src="{{asset('assets/img/laptop1.png')}}" class="img-fluid"></div>
      </div>
    </div>
  </div>
</section>
<section class="manage py-4">
<div class="container-fluid">
  <div class="row">
   <div class="col-md-11 col-sm-12 col-12 mx-auto">
    <div class="first py-4 px-md-5 px-sm-4 px-3 d-flex flex-column">
      <h4 class="fw-500 text-center text-white">A simple solution to manage complex project  processes </h4>
      <p class="mb-0 fw-300 text-center text-white">Our construction management software helps with every step of the build-from the sales process<br> and projectplanning to financial tracking and client communication.
      </p>
    </div>
   </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-9 col-md-12 col-sm-12 col-12 mx-auto">
      <div>
        <nav class="nav nav-pills flex-column flex-sm-row">
          <a class="flex-sm-fill text-sm-center nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sales process</a>
          <a class="flex-sm-fill text-sm-center nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Project Management</a>
          <a class="flex-sm-fill text-sm-center nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Financial tools</a>
          <a class="flex-sm-fill text-sm-center nav-link" id="pills-Communication-tab" data-bs-toggle="pill" data-bs-target="#pills-Communication" type="button" role="tab" aria-controls="pills-Communication" aria-selected="false">Communication</a>
        </nav>
      </div>
    </div>
    <div class="col-12 mx-auto">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="row g-3 mt-3 align-items-center">
            <div class="col-md-6 col-12">
              <div class="lap-img text-center"><img src="{{asset('assets/img/laptop2.png')}}" class="img-fluid"></div>
            </div>
            <div class="col-md-6 col-12">
              <div class="right-orange-div ps-lg-5 ps-md-4 ps-sm-3 ps-2 py-3 mb-4">
                 <div class="row">
                   <div class="col-lg-8 col-sm-12 col-12">
                    <div class="d-flex flex-column justify-content-start align-items-start ">
                      <h4 class="fw-700 text-white mb-3">Sales process</h4>
                      <p class="fw-600 text-white mb-3">
                       Manage leads, land more jobs and get
                       faser sign ups all in one place  with our
                       construction tech.
                      </p>
                      <ul class="ps-3 fw-500 text-white">
                        <li>Leads/CRM </li>
                        <li> Proposels </li>
                        <li> Email Marketing</li>
                      </ul>
                    </div>
                   </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row g-3 mt-3 align-items-center">
            <div class="col-md-6 col-12">
              <div class="lap-img text-center"><img src="{{asset('assets/img/laptop2.png')}}" class="img-fluid"></div>
            </div>
            <div class="col-md-6 col-12">
              <div class="right-orange-div ps-lg-5 ps-md-4 ps-sm-3 ps-2 py-3 mb-4">

                <div class="row">
                  <div class="col-lg-8 col-sm-12 col-12">
                   <div class="d-flex flex-column justify-content-start align-items-start ">
                     <h4 class="fw-700 text-white mb-3">Project management</h4>
                     <p class="fw-600 text-white mb-3">
                      With Buildertrend project management software, you’ll keep jobs running smoothly from start to finish.
                     </p>
                     <ul class="ps-3 fw-500 text-white">
                       <li>Daily Logs </li>
                       <li> Change Orders</li>
                       <li>Schedule </li>
                       <li>Selections</li>
                       <li> Time Clock </li>
                       <li> To-Do’s </li>
                       <li>Warranty</li>
                     </ul>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="row g-3 mt-3 align-items-center">
            <div class="col-md-6 col-12">
              <div class="lap-img text-center"><img src="{{asset('assets/img/laptop2.png')}}" class="img-fluid"></div>
            </div>
            <div class="col-md-6 col-12">
              <div class="right-orange-div ps-lg-5 ps-md-4 ps-sm-3 ps-2 py-3 mb-4">
                <div class="row">
                  <div class="col-lg-8 col-sm-12 col-12">
                   <div class="d-flex flex-column justify-content-start align-items-start ">
                     <h4 class="fw-700 text-white mb-3">Financial tools</h4>
                     <p class="fw-600 text-white mb-3">
                      Buildertrend’s money-saving features track cash flow and manage budgets, down to the last penny
                     </p>
                     <ul class="ps-3 fw-500 text-white">
                       <li>Bids Budget Estimates Invoicing Online payments Work in Progress Report </li>
                       <li> Bills and Purchase Orders </li>
                       <li> Budget</li>
                       <li>Estimates</li>
                       <li> Invoicing</li>
                       <li> Online payments</li>
                       <li>Work in Progress Report</li>
                     </ul>
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-Communication" role="tabpanel" aria-labelledby="pills-Communication-tab">
          <div class="row g-3 mt-3 align-items-center">
            <div class="col-md-6 col-12">
              <div class="lap-img text-center"><img src="{{asset('assets/img/laptop2.png')}}" class="img-fluid"></div>
            </div>
            <div class="col-md-6 col-12">
              <div class="right-orange-div ps-lg-5 ps-md-4 ps-sm-3 ps-2 py-3 mb-4">
                 <div class="row">
                   <div class="col-lg-8 col-sm-12 col-12">
                    <div class="d-flex flex-column justify-content-start align-items-start ">
                      <h4 class="fw-700 text-white mb-3">Communication</h4>
                      <p class="fw-600 text-white mb-3">
                        BuildX connects your team, clients and subs so they can stay updated throughout the project.
                      </p>
                      <ul class="ps-3 fw-500 text-white">
                        <li>Customer Portal </li>
                        <li>  Documents and Photos </li>
                        <li> Messages</li>
                        <li> Sub accounts</li>
                      </ul>
                    </div>
                   </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="pt-5 pb-4">
<div class="container-fluid px-4">
 <div class="col-lg-7 col-sm-12 col-12 mx-auto">
   <div class="d-flex flex-column justify-content-center align-items-center">
    <h4 class="text-center case-main-head">Hear from our customers</h4>
    <p class=" fw-500 text-center case-main-head">
      You’re in good company ,More than a million construction pros are building better , faster because of buildx
    </p>
   </div>
 </div>
 <div class="col-12">
   <div class="row mt-5">
     <div class="col-md-4 col-sm-6 col-12">
       <div class="case-study-box p-4 gradient1 mx-auto mb-3">
         <div class="study-img">
           <img src="{{asset('assets/img/r-architecture-2gDwlIim3Uw-unsplash.png')}}" class="img-fluid" alt=""/>
         </div>
         <div class="d-flex flex-column detail-box mt-3">
           <div class="d-flex flex-column mb-2">
             <p class="mb-1 case-head">CASE STUDY</p>
             <p class="time-date mb-0">Mar 16,2022</p>
           </div>
           <div class="d-flex flex-column mb-3">
            <p class="mb-1 case-sub-head">Tass Construction</p>
            <p class="case-content mb-2">Lorem ipsum dolor sit amet. Et aliquam odio et molestiae rerum ut ducimus officia ut ratione unde! Eos quis alias hic odio neque sit distinctio beatae aut voluptatibus enim laborum provident sed sapiente officia.
              <br><br>
              Ut odit earum qui corporis omnis qui quos rerum qui illo excepturi hic assumenda! Eum labore
            </p>
            <a href="" class="case-link">Read more<span class="ms-1"><i class="bi bi-chevron-right"></i></span></a>
          </div>
         </div>
       </div>
     </div>
     <div class="col-md-4 col-sm-6 col-12">
      <div class="case-study-box p-4 gradient2 mx-auto mb-3">
        <div class="study-img">
          <img src="{{asset('assets/img/sidekix-media-_AK42TQRyCw-unsplash.png')}}" class="img-fluid" alt=""/>
        </div>
        <div class="d-flex flex-column detail-box mt-3">
          <div class="d-flex flex-column mb-2">
            <p class="mb-1 case-head">CASE STUDY</p>
            <p class="time-date mb-0">Mar 16,2022</p>
          </div>
          <div class="d-flex flex-column mb-3">
           <p class="mb-1 case-sub-head">Tass Construction</p>
           <p class="case-content mb-2">Lorem ipsum dolor sit amet. Et aliquam odio et molestiae rerum ut ducimus officia ut ratione unde! Eos quis alias hic odio neque sit distinctio beatae aut voluptatibus enim laborum provident sed sapiente officia.
             <br><br>
             Ut odit earum qui corporis omnis qui quos rerum qui illo excepturi hic assumenda! Eum labore
           </p>
           <a href="" class="case-link">Read more<span class="ms-1"><i class="bi bi-chevron-right"></i></span></a>
         </div>
        </div>
      </div>
     </div>
     <div class="col-md-4 col-sm-6 col-12">
      <div class="case-study-box p-4 gradient1 mx-auto mb-3">
        <div class="study-img">
          <img src="{{asset('assets/img/john-fornander-tVzyDSV84w8.png')}}" class="img-fluid" alt=""/>
        </div>
        <div class="d-flex flex-column detail-box mt-3">
          <div class="d-flex flex-column mb-2">
            <p class="mb-1 case-head">CASE STUDY</p>
            <p class="time-date mb-0">Mar 16,2022</p>
          </div>
          <div class="d-flex flex-column mb-3">
           <p class="mb-1 case-sub-head">Tass Construction</p>
           <p class="case-content mb-2">Lorem ipsum dolor sit amet. Et aliquam odio et molestiae rerum ut ducimus officia ut ratione unde! Eos quis alias hic odio neque sit distinctio beatae aut voluptatibus enim laborum provident sed sapiente officia.
             <br><br>
             Ut odit earum qui corporis omnis qui quos rerum qui illo excepturi hic assumenda! Eum labore
           </p>
           <a href="" class="case-link">Read more<span class="ms-1"><i class="bi bi-chevron-right"></i></span></a>
         </div>
        </div>
      </div>
     </div>
   </div>
 </div>
</div>
</section>

<section class="pt-5 pb-4">
  <div class="container-fluid px-4">
   <div class="col-lg-8 col-md-8 col-sm-12 col-12 mx-auto">
     <div class="d-flex flex-column justify-content-center align-items-center">
      <h4 class="text-center text-blue mb-3">Seamlessly integratewith platforms<br>
        you already know and love</h4>
      <p class=" fw-500 text-center">
        Work the way you want to – alongside all the tools you want to – without ever leaving Buildx
      </p>
      <div><a href="" class="btn integration-btn">All integration</a></div>
     </div>
   </div>
   <div class="col-12">
     <div class="row mt-5 g-0">
       <div class="col-md-6 col-sm-12 col-12 gradient1">
        <div class="row p-4 align-items-center">
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi1.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi2.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi3.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/inter4.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi1.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi2.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi3.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/inter4.png')}}" class="img-fluid">
            </div>
          </div>
        </div>
       </div>
       <div class="col-md-6 col-sm-12 col-12 gradient2">
        <div class="row p-4 align-items-center">
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi1.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi2.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi3.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/inter4.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi1.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi2.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/interi3.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="interi-img mx-auto mb-3">
              <img src="{{asset('assets/img/inter4.png')}}" class="img-fluid">
            </div>
          </div>
        </div>
       </div>
     </div>
   </div>
  </div>
  </section>
  <section class="clients">
    <div class="container-fluid">
      <div class="chelsia-owl owl-carousel owl-theme py-lg-5 py-0 position-relative">
        <div class="item mb-3"> 
           <div class="row g-0 align-items-center">
           <div class="col-lg-6 col-sm-6 col-12">
           <div class="orange-div">
            <div class=" client-img mx-auto d-flex justify-content-center align-items-center">
              <img src="{{asset('assets/img/clients.png')}}" class="img-fluid"/>
            </div>
           </div>
           </div>
           <div class="col-lg-6 col-sm-6 col-12 ">
             <div class="gradient1 d-flex justify-content-center align-items-center">
              <div class="d-flex flex-column justify-content-center align-items-center py-4 px-3">
                <h6 class="fw-600 text-white text-center mb-3">OUR HAPPY CUSTOMERS</h6>
                <p class="mb-3 text-center text-small">“We’ve grown from $1 million in revenue
                 to $12 million this year…Buildertrend is 
                that platform that allows us to do that.’’
                
               </p>
               <p class=" text-small text-center"> <span class="c-profile text-uppercase">JIM PITCHER,</span> owner and president, CRC Builders</p>
              </div>
             </div>
           </div>
           </div>
    </div>
    <div class="item mb-3"> 
      <div class="row g-0 align-items-center">
      <div class="col-lg-6 col-sm-6 col-12">
      <div class="orange-div">
       <div class=" client-img mx-auto d-flex justify-content-center align-items-center">
         <img src="{{asset('assets/img/clients.png')}}" class="img-fluid"/>
       </div>
      </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-12 ">
        <div class="gradient1 d-flex justify-content-center align-items-center">
         <div class="d-flex flex-column justify-content-center align-items-center py-4 px-3">
           <h6 class="fw-600 text-white text-center mb-3">OUR HAPPY CUSTOMERS</h6>
           <p class="mb-3 text-center text-small">“We’ve grown from $1 million in revenue
            to $12 million this year…Buildertrend is 
           that platform that allows us to do that.’’
           
          </p>
          <p class=" text-small text-center"> <span class="c-profile text-uppercase">JIM PITCHER,</span> owner and president, CRC Builders</p>
         </div>
        </div>
      </div>
      </div>
</div>
<div class="item mb-3"> 
  <div class="row g-0 align-items-center">
  <div class="col-lg-6 col-sm-6 col-12">
  <div class="orange-div">
   <div class=" client-img mx-auto d-flex justify-content-center align-items-center">
     <img src="{{asset('assets/img/clients.png')}}" class="img-fluid"/>
   </div>
  </div>
  </div>
  <div class="col-lg-6 col-sm-6 col-12 ">
    <div class="gradient1 d-flex justify-content-center align-items-center">
     <div class="d-flex flex-column justify-content-center align-items-center py-4 px-3">
       <h6 class="fw-600 text-white text-center mb-3">OUR HAPPY CUSTOMERS</h6>
       <p class="mb-3 text-center text-small">“We’ve grown from $1 million in revenue
        to $12 million this year…Buildertrend is 
       that platform that allows us to do that.’’
       
      </p>
      <p class=" text-small text-center"> <span class="c-profile text-uppercase">JIM PITCHER,</span> owner and president, CRC Builders</p>
     </div>
    </div>
  </div>
  </div>
</div>

    </div>
    </div>
  </section>
<section class="pt-5 pb-4">
  <div class="container-fluid px-4">
   <div class="col-lg-7 col-sm-12 col-12 mx-auto">
     <div class="d-flex flex-column justify-content-center align-items-center">
      <h4 class="text-center text-blue fw-600">More resources for home builders and remodelers</h4>
      <p class=" fw-500 text-center text-blue">
      
Check out our resources to learn more about construction industry insights, business tips and Buildertrend features.
      </p>
     </div>
   </div>
   <div class="col-12">
     <div class="row mt-5">
       <div class="col-md-4 col-sm-6 col-12">
        <div class="case-study-box p-4 gradient1 mx-auto mb-3 h-100">
          <div class="study-img">
            <img src="{{asset('assets/img/pointing-sketch.png')}}" class="img-fluid" alt=""/>
          </div>
          <div class="d-flex flex-column detail-box mt-3">
            <div class="d-flex flex-column mb-2">
              <p class="mb-1 case-head1">Blog</p>
              <p class="time-date1 mb-0">Mar 16,2022</p>
            </div>
            <div class="d-flex flex-column mb-3">
             <p class="mb-1 case-sub-head1">4 mistakes small
              construction businesses
              should avoid
              </p>
             <p class="case-content mb-2">Here are four  project managemen mistakes you should try to avoid as  the owner of a small construction business.
             </p>
             <a href="" class="case-link">Read more</a>
           </div>
          </div>
        </div>
       </div>
       <div class="col-md-4 col-sm-6 col-12">
        <div class="case-study-box p-4 gradient2 mx-auto mb-3 h-100">
          <div class="study-img">
            <img src="{{asset('assets/img/beautiful-view.png')}}" class="img-fluid" alt=""/>
          </div>
          <div class="d-flex flex-column detail-box mt-3">
            <div class="d-flex flex-column mb-2">
              <p class="mb-1 case-head1">Blog</p>
              <p class="time-date1 mb-0">Mar 16,2022</p>
            </div>
            <div class="d-flex flex-column mb-3">
             <p class="mb-1 case-sub-head1">Mining the date field:
              material causing the
              greatest construction
              delays</p>
              <p class="case-content mb-2">Here are four  project managemen mistakes you should try to avoid as  the owner of a small construction business.
              </p>
             <a href="" class="case-link">Read more</a>
           </div>
          </div>
        </div>
       </div>
       <div class="col-md-4 col-sm-6 col-12">
        <div class="case-study-box p-4 gradient1 mx-auto mb-3 h-100">
          <div class="study-img">
            <img src="{{asset('assets/img/construction.png')}}" class="img-fluid" alt=""/>
          </div>
          <div class="d-flex flex-column detail-box mt-3">
            <div class="d-flex flex-column mb-2">
              <p class="mb-1 case-head1">Blog</p>
              <p class="time-date1 mb-0">Mar 16,2022</p>
            </div>
            <div class="d-flex flex-column mb-3">
             <p class="mb-1 case-sub-head1">why a superhero team 
              and construction tech are 
              essential with Adam
              Copenhaves.</p>
             <p class="case-content mb-2">Here are four  project managemen mistakes you should try to avoid as  the owner of a small construction business.
            </p>
             <a href="" class="case-link">Read more</a>
           </div>
          </div>
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
       <div class="mb-3"><img src="{{asset('assets/img/excavator.png')}}" class="img-fluid"></div>
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
              <a href="" class="btn booknow">Book Time Now</a>
            </div>
            <p class="text-center fw-400">Or try it risk free for 30 days! <span><a href="" class="get-start">Get started
            </a></span>
              </p>
        </div>
      </div>
    </div>
  </div>
</section>
</main>


 @include('layouts.footer')

 @include('layouts.script') 