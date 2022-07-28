@extends('layouts.app1')

@section('content')


<section class="bg-white pb-5">
    <div class="container-fluid">
        <div class="row g-3">
            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
             <div class="shadded-box">
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
                                                    <a href=""><Span><img src="../assets/img/double-arrow-vertical-symbol.png" alt="" width="30" height="30"/></Span></a>
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
                    
                    <div class="d-flex flex-column tab-part2 position-relative">
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
            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                <div class="tab-content pt-3" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            
                            <div class=" col-12">
                                <div class="card rounded-0 bg-white brand-shadow mb-2">
                                  <div class="card-header estimate-header">
                                    <h6 class="mb-0 fw-500 text-white text-center">Manage Your Default Labour Rates</h6>
                                     @include('flash-message')  
                                  </div>
                                   <div class="card-body px-4 py-3">
                                     <div class="row">
                                         <div class="col-lg-10 col-sm-12 col-12 mx-auto">
                                            <div class="d-flex flex-column">
                                                <p class="fw-400 estimate-para">
                                                 These are the default labour rates for your quotes, you can modify the labour rates
                                                 on individual quotes from within the quote editor.
                                                </p>
                                                <p class="fw-400 estimate-para"><span class="note">*</span> Please note: Existing quotes will not be affected bychanges here, but these changes will affect all new
                                                    quotes.
                                                  
                            <form class="estimate-form" action="{{route('estimate.update',$labour->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                                  <div class="table-responsive">
                                                      <table class="table table-borderless">
                                                          <thead>
                                                              <tr>
                                                                  <th><h6 class="text-center designation">Designation</h6></th>
                                                                  <th><h6 class="text-center designation">Price per day</h6></th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                              <tr>
                                                             <td>     <label class="estimate-label">Site Supervisor</label></td>
                                                             <td>   <input type="text" class="form-control estimate-input"  name="site_supervisor"  value="{{$labour->site_supervisor}}" ></td>
                                                              </tr>
                                                              <tr>
                                                                <td>     <label class="estimate-label">Labourer</label></td>
                                                                <td>   <input type="text" class="form-control estimate-input"   name="labourer"  value="{{old('labourer', $labour->labourer)}}"></td>
                                                                 </tr>
                                                                 <tr>
                                                                    <td>     <label class="estimate-label">General Builder</label></td>
                                                                    <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="general_builder"  value="{{old('general_builder', $labour->general_builder)}}"></td>
                                                                     </tr>
                                                                    <tr>
                                                                        <td>     <label class="estimate-label">Ground Worker</label></td>
                                                                        <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="ground_worker"  value="{{old('ground_worker', $labour->ground_worker)}}"></td>
                                                                         </tr>
                                                                         <tr>
                                                                            <td>     <label class="estimate-label">Ground worker with 
                                                                                excavator and dumper</label></td>
                                                                            <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="ground_worker_excavator_dumper"  value="{{old('ground_worker_excavator_dumper', $labour->ground_worker_excavator_dumper)}}"></td>
                                                                             </tr>
                                                                             <tr>
                                                                                <td>     <label class="estimate-label">Carpenter</label></td>
                                                                                <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="carpenter"  value="{{old('carpenter', $labour->carpenter)}}"></td>
                                                                                 </tr>
          <tr>
             <td>     <label class="estimate-label">Bricklayer</label></td>
             <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="bricklayer"  value="{{old('bricklayer', $labour->bricklayer)}}"></td>
                                                                                     </tr>
              <tr>
                 <td>     <label class="estimate-label">Bricklaying gang</label></td>
                 <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="bricklaying_gang" value="{{old('bricklaying_gang', $labour->bricklaying_gang)}}"> </td>
                                                                                         </tr>
                  <tr>
                     <td>     <label class="estimate-label">Plasterer</label></td>
                     <td>   <input type="text" class="form-control estimate-input" placeholder="Last name" name="plasterer" value="{{old('plasterer', $labour->plasterer)}}"></td>
                                                                                             </tr>
                      <tr>
                         <td>     <label class="estimate-label">Plumber</label></td><td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="plumber" value="{{old('plumber', $labour->plumber)}}"></td>
                                                                                                 </td>
             <tr>  <td>     <label class="estimate-label">Electrician</label></td>
 <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="electrician" value="{{old('electrician', $labour->electrician)}}"></td>
                                                                                                     </tr>
  <tr>
     <td>     <label class="estimate-label">Decorator</label></td>
               <td>   <input type="text" class="form-control estimate-input" placeholder="Last decorator"  name="decorator" value="{{old('decorator', $labour->decorator)}}"></td>
                                                                                                         </tr>
      <tr>
         <td>     <label class="estimate-label">Roofer</label></td>
         <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="roofer" value="{{old('roofer', $labour->roofer)}}"></td>
                                                                                                             </tr>
          <tr>
             <td>     <label class="estimate-label">Ceramic/porcelain tiler
                </label></td>
             <td>   <input type="text" class="form-control estimate-input" placeholder="Last name"  name="ceramic_porcelain_tiler" value="{{old('ceramic_porcelain_tiler', $labour->ceramic_porcelain_tiler)}}"></td>
                                                                                                                 </tr>
                                                                                                               
                                                          </tbody>
 
                                                      </table>
                                                  </div>
                                                  <div class="mt-4">
                                                    <button type="submit" class="btn estimate-btn">Save Changes</button>
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
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <div class="row">
                            
                        <div class=" col-12">
                            <div class="card rounded-0 bg-white brand-shadow mb-2">
                              <div class="card-header doc-header">
                                <h4 class="mb-0 fw-500 text-white text-center">Documents</h4>
                              </div>
                               <div class="card-body px-4 py-5">
                                <div class="py-5">
                                  <h4 class="fw-500 text-center">No Job Selected</h4>
                                </div>
                               </div>
                            </div>
                        
                         
                        </div>
                     
                     
                    </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <div class="row">
                            
                        <div class=" col-12">
                            <div class="card rounded-0 bg-white brand-shadow mb-2">
                              <div class="card-header doc-header">
                                <h4 class="mb-0 fw-500 text-white text-center">Documents</h4>
                              </div>
                               <div class="card-body px-4 py-5">
                                <div class="py-5">
                                  <h4 class="fw-500 text-center">No Job Selected</h4>
                                </div>
                               </div>
                            </div>
                        
                         
                        </div>
                     
                     
                    </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                      <div class="row">
                            
                        <div class=" col-12">
                            <div class="card rounded-0 bg-white brand-shadow mb-2">
                              <div class="card-header doc-header">
                                <h4 class="mb-0 fw-500 text-white text-center">Documents</h4>
                              </div>
                               <div class="card-body px-4 py-5">
                                <div class="py-5">
                                  <h4 class="fw-500 text-center">No Job Selected</h4>
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



@endsection