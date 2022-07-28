@extends('layouts.app1')

@section('content')

 <div class="container-fluid">
        <div class="row g-2">
            <div class="col-lg-3 col-md-5 col-sm-12 col-12">
             <div class="">
                <div class="d-flex flex-column inner-left">
                    <div class="upper-img mb-5">
                        <div class="side-img-container p-4">
                            <div class="side-img-content p-4">
                                <div class="col-12">
                                    <div class="d-flex flex-column">
                                        <p class="text-white fw-600 text-center">Back to Summary</p>
                                        <form class="estimate-side-form">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div class=" text-center w-custom">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>jobs</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                      </select>
                                                </div>
                                                <div class=" text-center">
                                                  <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-fill text-white" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                                  </svg></a>
                                                </div>
                                                <div class=" text-center">
                                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-funnel text-white" viewBox="0 0 16 16">
                                                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                                                      </svg></a>
                                                  </div>
                                                  <div class=" text-center">
                                                    <a href=""><Span><img src="{{asset('assets/img/double-arrow-vertical-symbol.png')}}" alt="" width="30" height="30"/></Span></a>
                                                  </div>
                                              </div>
                                              <div class="d-grid">
                                                  <button class="btn search-filter" type="submit"><span class="text-white me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                  </svg></span>Search</button>
                                              </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column tab-part position-relative">
                        <div class="tab-style-head mb-4"><h4 class="mb-0 text-fade fw-500">All 7 Listed Jobs</h4></div>
                        <div class="nav flex-column nav-pills mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">11 Old Rectory Green, Aughton</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> 133 Whitewood Park, Fazak</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">20 Holmefield Grove, Maghull </button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">26 Sudell Avenue, Maghull</button>
                          </div>
                    </div>
                </div>
             </div>
            </div>
            <div class="col-lg-9 col-md-7 col-sm-12 col-12">
                <div class="tab-content pt-2" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row g-2">
                            
                                <div class="col-lg-7 col-md-12 col-sm-7 col-12">
                                    <div class="card rounded-0 bg-white brand-shadow py-4 px-3 mb-2">
                                       <div class="card-body px-0">
                                          <div class="row">
                                              <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                                <div class="d-flex flex-column">
                                                    <p class="fw-600 morning-text">Good morning, Ryan.</p>
                                                    <p class="fw-500 clock-out">CLOCKED OUT</p>
                                                    <p class="fw-400 clock-in">Clock In</p>
                                                </div>
                                              </div>
                                              <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                    <p class="fw-500 morning-text mb-0">Mostly Sunny </p>
                                                     <div><img src="{{asset('assets/img/Sun.png')}}" class="img-fluid" height="20" width="20" alt=""/></div>
                                                    <p class="fw-600 morning-text mb-0">20<sup>0</sup>C</p>
                                                    <p class="fw-400 clock-out mb-0">Liverpool</p>
                                                    <div><img src="{{asset('assets/img/UpdateLeftRotation.png')}}" class="img-fluid" height="20" width="20" alt=""/></div>
                                                </div>
                                              </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card rounded-0 bg-white brand-shadow py-4 px-3 mb-2">
                                      <div class="card-body px-0">
                                          <div class="d-flex flex-column">
                                              <div class="d-flex justify-content-between align-items-center mb-3">
                                                  <p class="fw-500 text-uppercase">Past Due</p>
                                                  <p class="fw-500 text-uppercase">Due Today</p>
                                                  <p class="fw-500 text-uppercase">Action Items</p>
                                              </div>
                                              <div class="d-flex flex-column justify-content-center align-items-center">
                                                  <img src="{{asset('assets/img/center.png')}}" class="img-fluid mb-2" width="313" alt=""/>
                                                  <p class="center-img-text">Everything is taken care of. Go you!</p>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="card rounded-0 bg-white brand-shadow py-0 mb-lg-2 mb-md-0 mb-sm-2 mb-0">
                                      <div class="px-3 py-3">
                                        <p class="text-small text-uppercase fw-400 mb-0">RECENT ACTIVITY FROM YOUR TEAM</p>
                                      </div>
                                      <div class=" card-header filter py-3 px-2">
                                       <div class="col-12">
                                        <div class="row align-items-center">
                                          <div class="col-md-4 col-sm-12 col-12 ">
                                            <div class=""><p class="mb-lg-0 mb-md-3 mb-3 fw-400 text-uupercase fillter-para">FILTER YOUR RESULTS<span class="ms-1"><img src="{{asset('assets/img/DropDown.png')}}" class="img-fluid" height="15" width="15" alt=""/></span></p></div>
                                          </div>
                                          <div class="col-md-7 col-sm-12 col-12 ">
                                            <div class="row align-items-center">
                                              <div class="col-md-10 col-sm-9 col-9">
                                                
                                                  <div class="standard-filter d-flex justify-content-lg-center justify-content-md-start justify-content-start align-items-center">
                                
                                                  
                                                      <p class="mb-0 me-2">Saved Filters</p>
                                               
                                                  <div class="dropdown">
                                                      <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Standard Filters<span class="ms-1"><span class="ms-1"><img src="{{asset('assets/img/DropDown.png')}}" width="20" height="20" alt=""></span>
                                                      </button>
                                                      <ul class="dropdown-menu action-dropdown" aria-labelledby="dropdownMenuButton2">
                                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                                          <li><a class="dropdown-item" href="#">Something else here</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                 
                                                  </div>
                                              
                                              </div>
                                              <div class="col-md-2 col-sm-3 col-3">
                                                <div class="d-flex justify-content-md-between justify-content-sm-start justify-content-start align-items-center">
                                                  <div class="me-1"><img src="{{asset('assets/img/Gear.png')}}" height="20" width="20" alt=""/></div>
                                                  <div><img src="{{asset('assets/img/Ellipsis.png')}}" height="20" width="20" alt=""/></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                       </div>
                                    </div>
                                        <div class="card-body px-3">
                                       <div class="row">
                                         <div class=" col-12">
                                         <form class="demo-example">
                                          <div class="row">
                                            <div class="col-sm-6 col-12">
                                              <div class="d-flex flex-column mb-3">
                                              
                                                  <label class="mul-label mb-1">Performing User</label>
                                                  <select id="people" multiple>
                                                      <option value="">Select All</option>
                                                      <option value="">Internal Users </option>
                                                      <option value=""> Dan Wikinson</option>
                                                      <option value=""> Ryan Cheshire</option>
                                                      <option value=""> Sub/Venders</option>
                                                  </select>
                                          
                                              </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                           <div class="d-flex flex-column mb-3">
                                            <label class="mul-label mb-1">Item Type</label>
                                            <select id="item-type" multiple>
                                                <option value="">Select All</option>
                                                <option value=""> Builders Risk Insurence Approved </option>
                                                <option value="">  Builders Risk Insurence Approved</option>
                                                <option value="">  Builders Risk Insurence Approved</option>
                                                <option value="">  Builders Risk Insurence Approved</option>
                                            </select>
                                           </div>
                                            </div>
                                          </div>
                                          <div class="row mt-4">
                                          <div class="col-lg-8 col-sm-10 col-12">
                                            <div class="d-flex justify-content-between align-items-center">
                                              <div><button type="submit" class="btn btn-update">Update Result</button></div>
                                              <div><button type="reset" class="btn btn-reset">Reset Filters</button></div>
                                            </div>
                                          </div>
                                          </div>
                                         </form>
                                         </div>
                                       </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-5 col-12">
                                    <div class="card rounded-0 bg-white brand-shadow py-4 px-md-1 px-sm-4 px-4 mb-2">
                                        <div class="card-body px-0">
                                            <p class="fw-700">ACTIONS
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                   <div class="d-flex flex-column">
                                                       <div class="action d-flex justify-content-start align-items-center">
                                                        <div><img src="{{asset('assets/img/Schedule.png')}}" class="action-img" alt=""/></div>   
                                                        <a href="">Schedule a Lead Activity</a></div>
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                            <div><img src="{{asset('assets/img/Planner.png')}}" class="action-img" alt=""/></div>   
                                                            <a href="">Create a Schedule Item</a></div>
                                                            <div class="action d-flex justify-content-start align-items-center">
                                                                <div><img src="{{asset('assets/img/Moleskine.png')}}" class="action-img" alt=""/></div>   
                                                                <a href="">Write a Daily Log Add a To- Do</a></div>
                                                      
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="d-flex flex-column">
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                         <div><img src="{{asset('assets/img/NewMessage.png')}}" class="action-img" alt=""/></div>   
                                                         <a href="">Send a Message</a></div>
                                                         <div class="action d-flex justify-content-start align-items-center">
                                                             <div><img src="{{asset('assets/img/Shift.png')}}" class="action-img" alt=""/></div>   
                                                             <a href="">Log a Shift</a></div>
                                                             <div class="action d-flex justify-content-start align-items-center">
                                                                 <div><img src="{{asset('assets/img/Receipt.png')}}" class="action-img" alt=""/></div>   
                                                                 <a href="">Create an Invoice</a></div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 bg-white brand-shadow py-4 px-md-1 px-sm-4 px-4 mb-2">
                                        <div class="card-body px-0">
                                            <p class="fw-700">ACTIONS
                                            </p>
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                   <div class="d-flex flex-column">
                                                       <div class="action d-flex justify-content-start align-items-top">
                                                        <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                        <p class="day">Tuesday
                                                            Jun 2022</p></div>                                                                                                        </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="d-flex flex-column">
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                         <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                            <circle cx="8" cy="8" r="8"/>
                                                          </svg></div>   
                                                         <p class="mb-0 bullet-para">Build Roof all day</p>
                                                        </div>      
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                            <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                               <circle cx="8" cy="8" r="8"/>
                                                             </svg></div>   
                                                            <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                           </div>                                                  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                   <div class="d-flex flex-column">
                                                       <div class="action d-flex justify-content-start align-items-top">
                                                        <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                        <p class="day">Tuesday
                                                            Jun 2022</p></div>                                                                                                        </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="d-flex flex-column">
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                         <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                            <circle cx="8" cy="8" r="8"/>
                                                          </svg></div>   
                                                         <p class="mb-0 bullet-para">Build Roof all day</p>
                                                        </div>      
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                            <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                               <circle cx="8" cy="8" r="8"/>
                                                             </svg></div>   
                                                            <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                           </div>                                                  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                   <div class="d-flex flex-column">
                                                       <div class="action d-flex justify-content-start align-items-top">
                                                        <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                        <p class="day">Tuesday
                                                            Jun 2022</p></div>                                                                                                        </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="d-flex flex-column">
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                         <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                            <circle cx="8" cy="8" r="8"/>
                                                          </svg></div>   
                                                         <p class="mb-0 bullet-para">Build Roof all day</p>
                                                        </div>      
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                            <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                               <circle cx="8" cy="8" r="8"/>
                                                             </svg></div>   
                                                            <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                           </div>                                                  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                   <div class="d-flex flex-column">
                                                       <div class="action d-flex justify-content-start align-items-top">
                                                        <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                        <p class="day">Tuesday
                                                            Jun 2022</p></div>                                                                                                        </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="d-flex flex-column">
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                         <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                            <circle cx="8" cy="8" r="8"/>
                                                          </svg></div>   
                                                         <p class="mb-0 bullet-para">Build Roof all day</p>
                                                        </div>      
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                            <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                               <circle cx="8" cy="8" r="8"/>
                                                             </svg></div>   
                                                            <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                           </div>                                                  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blue-zone-area pt-2 mb-2">
                                                <div class="row mb-2">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                       <div class="d-flex flex-column">
                                                           <div class="action d-flex justify-content-start align-items-top">
                                                            <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                            <p class="day">Tuesday
                                                                Jun 2022</p></div>                                                                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="d-flex flex-column">
                                                            <div class="action d-flex justify-content-start align-items-center">
                                                             <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                                <circle cx="8" cy="8" r="8"/>
                                                              </svg></div>   
                                                             <p class="mb-0 bullet-para">Build Roof all day</p>
                                                            </div>      
                                                            <div class="action d-flex justify-content-start align-items-center">
                                                                <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                                   <circle cx="8" cy="8" r="8"/>
                                                                 </svg></div>   
                                                                <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                               </div>                                                  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                       <div class="d-flex flex-column">
                                                           <div class="action d-flex justify-content-start align-items-top">
                                                            <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                            <p class="day">Tuesday
                                                                Jun 2022</p></div>                                                                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="d-flex flex-column">
                                                            <div class="action d-flex justify-content-start align-items-center">
                                                             <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                                <circle cx="8" cy="8" r="8"/>
                                                              </svg></div>   
                                                             <p class="mb-0 bullet-para">Build Roof all day</p>
                                                            </div>      
                                                            <div class="action d-flex justify-content-start align-items-center">
                                                                <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                                   <circle cx="8" cy="8" r="8"/>
                                                                 </svg></div>   
                                                                <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                               </div>                                                  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                   <div class="d-flex flex-column">
                                                       <div class="action d-flex justify-content-start align-items-top">
                                                        <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                        <p class="day">Tuesday
                                                            Jun 2022</p></div>                                                                                                        </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="d-flex flex-column">
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                         <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                            <circle cx="8" cy="8" r="8"/>
                                                          </svg></div>   
                                                         <p class="mb-0 bullet-para">Build Roof all day</p>
                                                        </div>      
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                            <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                               <circle cx="8" cy="8" r="8"/>
                                                             </svg></div>   
                                                            <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                           </div>                                                  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                   <div class="d-flex flex-column">
                                                       <div class="action d-flex justify-content-start align-items-top">
                                                        <div class="pt-2"> <div class="number me-1"><p class="mb-0">28</p></div></div>   
                                                        <p class="day">Tuesday
                                                            Jun 2022</p></div>                                                                                                        </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="d-flex flex-column">
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                         <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                            <circle cx="8" cy="8" r="8"/>
                                                          </svg></div>   
                                                         <p class="mb-0 bullet-para">Build Roof all day</p>
                                                        </div>      
                                                        <div class="action d-flex justify-content-start align-items-center">
                                                            <div class="me-1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle-fill brand-text" viewBox="0 0 16 16">
                                                               <circle cx="8" cy="8" r="8"/>
                                                             </svg></div>   
                                                            <p class="mb-0 bullet-para">Plasterboard & Skin all day</p>
                                                           </div>                                                  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                  </div>
    
           
            </div>
        </div>
    </div>
@endsection