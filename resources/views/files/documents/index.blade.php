@extends('layouts.app1')

@section('content')

      <section class="estimates pb-2">
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
                                                <select class="form-select"
                                                   aria-label="Default select example">
                                                   <option selected>jobs</option>
                                                   <option value="1">One</option>
                                                   <option value="2">Two</option>
                                                   <option value="3">Three</option>
                                                </select>
                                             </div>
                                             <div class=" text-center">
                                                <a href="">
                                                   <svg xmlns="http://www.w3.org/2000/svg"
                                                      width="30" height="30" fill="currentColor"
                                                      class="bi bi-plus-circle-fill text-white"
                                                      viewBox="0 0 16 16">
                                                      <path
                                                         d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                   </svg>
                                                </a>
                                             </div>
                                             <div class=" text-center">
                                                <a href="">
                                                   <svg xmlns="http://www.w3.org/2000/svg"
                                                      width="30" height="30" fill="currentColor"
                                                      class="bi bi-funnel text-white" viewBox="0 0 16 16">
                                                      <path
                                                         d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
                                                   </svg>
                                                </a>
                                             </div>
                                             <div class=" text-center">
                                                <a href=""><Span><img
                                                   src="../assets/img/double-arrow-vertical-symbol.png"
                                                   alt="" width="30" height="30" /></Span></a>
                                             </div>
                                          </div>
                                          <div class="d-grid">
                                             <button class="btn search-filter" type="submit">
                                                <span
                                                   class="text-white me-2">
                                                   <svg
                                                      xmlns="http://www.w3.org/2000/svg" width="16"
                                                      height="16" fill="currentColor" class="bi bi-search"
                                                      viewBox="0 0 16 16">
                                                      <path
                                                         d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                   </svg>
                                                </span>
                                                Search
                                             </button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="d-flex flex-column tab-part position-relative">
                           <div class="tab-style-head mb-4">
                              <h4 class="mb-0 text-fade fw-500">All 7 Listed Jobs</h4>
                           </div>
                           <div class="nav flex-column nav-pills mb-4" id="v-pills-tab" role="tablist"
                              aria-orientation="vertical">
                              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                 data-bs-target="#v-pills-home" type="button" role="tab"
                                 aria-controls="v-pills-home" aria-selected="true">11 Old Rectory Green,
                              Aughton</button>
                              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                 data-bs-target="#v-pills-profile" type="button" role="tab"
                                 aria-controls="v-pills-profile" aria-selected="false"> 133 Whitewood Park,
                              Fazak</button>
                              <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                 data-bs-target="#v-pills-messages" type="button" role="tab"
                                 aria-controls="v-pills-messages" aria-selected="false">20 Holmefield Grove,
                              Maghull </button>
                              <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                 data-bs-target="#v-pills-settings" type="button" role="tab"
                                 aria-controls="v-pills-settings" aria-selected="false">26 Sudell Avenue,
                              Maghull</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                  <div class="tab-content pt-4" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="row">
                           <div class=" col-12">
                              <div class="card rounded-0 bg-white brand-shadow mb-2">
                                 <div class="card-header doc-header">
                                    <h5 class="mb-0 fw-500 text-white text-center">Documents</h5>
                                 </div>
                                 <div class="card-body px-lg-3 px-3 py-4">
                                    <div class="row">
                                       <h5 class="fw-600">Main</h5>
                                    </div>
                                    <div class="row mb-4">
                                       <div class="col-lg-9 col-md-12 col-12 mb-lg-0 mb-md-4 mb-4">
                                          <div class="row align-items-center">
                                             <div class=" col-lg-3 col-md-12 col-sm-4 col-12">
                                                <div class="d-grid mb-sm-0 mb-2">
                                                   <button type="button" class="btn btn-folder"
                                                      data-bs-toggle="modal"
                                                      data-bs-target="#exampleModal">New Folder</button>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                   aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                      <div class="modal-content rounded-0 border-0">
                                                         <div
                                                            class="modal-custom-header doc-header py-2 px-2">
                                                            <h6 class="mb-0 fw-400 text-white ">Folder
                                                               info
                                                            </h6>
                                                         </div>
                                                         <div class="modal-body">
                                                            <form class="modal-from" method="POST" action="{{route('document.folder.store')}}">
                                                               @csrf
                                                               <input type="hidden" name="user_id" value="user_id">
                                                               <div
                                                                  class="d-flex justify-content-start align-items-center mb-4">
                                                                  <button type="submit"
                                                                     class="btn btn-save shadow-sm">Save</button>
                                                               </div>
                                                               <div class="mb-3">
                                                                  <h6 class="fw-700">Folder
                                                                     Information
                                                                  </h6>
                                                               </div>
                                                               <div class="mb-3">
                                                                  <label
                                                                     class="form-label modal-label position-relative">Title</label>
                                                                  <input type="text"
                                                                     class="form-control" name="title">
                                                               </div>
                                                               <div class="mb-3">
                                                                  <label class="form-label">Parent
                                                                  Folder</label>
                <select class="form-select"  aria-label="Default select example" name="parent">
                   <option selected value="None Main Documents">None Main Documents)</option>
                   <option value="Drawing">Drawing</option>
                   <option value="Architect">Architect  </option>
                   <option value="Engineer">Engineer</option>
               </select>
               </div>
                                                               <div class="mb-3">
                                                                  <h6 class="fw-700">Viewing
                                                                     Permissions
                                                                  </h6>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-1">Sub/ Vendors
                                                                  </p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="sub" name="sub_vendor" value="1">
                                                                  <label class="form-check-label"
                                                                     for="sub">Allow Subs/ Vendors to
                                                                  view this folders</label>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-1">Owner</p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner" name="owner" value="2">
                                                                  <label class="form-check-label"
                                                                     for="Owner">Allow Owner (11 Old
                                                                  Rectory Green,Aughton) to view
                                                                  this Folder)</label>
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-9 col-md-12 col-sm-8 col-12">
                                                <ul class="nav nav-pills mb-sm-0 mb-2 nav-view"
                                                   id="pills-tab" role="tablist">
                                                   <li class="nav-item" role="presentation">
                                                      <button class="nav-link active"
                                                         id="pills-table-view-tab" data-bs-toggle="pill"
                                                         data-bs-target="#table-view" type="button"
                                                         role="tab" aria-controls="table-view"
                                                         aria-selected="true"><span class="me-2"><img
                                                         src="../assets/img/table.png" width="40"
                                                         height="17" alt="" /></span>Table View
                                                      </button>
                                                   </li>
                                                   <li class="nav-item" role="presentation">
                                                      <button class="nav-link" id="pills-tile-view-tab"
                                                         data-bs-toggle="pill"
                                                         data-bs-target="#tile-view" type="button"
                                                         role="tab" aria-controls="tile-view"
                                                         aria-selected="false"><span class="me-2"><img
                                                         src="../assets/img/tile.png" width="20"
                                                         height="18" alt="" /></span>Tile
                                                      View</button>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-12  col-12">
                                          <div class="">
                                             <button type="button" class="btn folder-import"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1">Import Folder</button>
                                             <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                   <div class="modal-content rounded-0 border-0">
                                                      <div
                                                         class="modal-custom-header doc-header py-2 px-2">
                                                         <h6 class="mb-0 fw-400 text-white ">Import Data
                                                            From Template
                                                         </h6>
                                                      </div>
                                                      <div class="modal-body">
                                                         <div class="modal-body">
                                                            <form class="modal-from">
                                                               <div
                                                                  class="d-flex justify-content-start align-items-center mb-4">
                                                                  <button type="submit"
                                                                     class="btn btn-save shadow-sm">Import</button>
                                                               </div>
                                                               <div class="mb-3">
                                                                  <h6 class="fw-700">Import Options
                                                                  </h6>
                                                               </div>
                                                               <div class="mb-3">
                                                                  <label
                                                                     class="form-label modal-label position-relative">Source
                                                                  Template
                                                                  </label>
                                                                  <select class="form-select"
                                                                     aria-label="Default select example">
                                                                     <option selected value="1">
                                                                        choose a template
                                                                     </option>
                                                                     <option value="2">Drawing
                                                                     </option>
                                                                     <option value="3">Architect
                                                                     </option>
                                                                     <option value="4">Engineer
                                                                     </option>
                                                                  </select>
                                                               </div>
                                                               <div class="mb-3">
                                                                  <h6 class="fw-700">Items to Copy
                                                                  </h6>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-3">Project
                                                                     Management
                                                                  </p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Schedule">
                                                                  <label class="form-check-label"
                                                                     for="Schedule">
                                                                  Schedule
                                                                  </label>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="todo">
                                                                  <label class="form-check-label"
                                                                     for="todo">To-Do's</label>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="selcetion">
                                                                  <label class="form-check-label"
                                                                     for="selcetion">Selcetion</label>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-3">Files</p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner">
                                                                  <label class="form-check-label"
                                                                     for="Owner">Document
                                                                  Folders</label>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner">
                                                                  <label class="form-check-label"
                                                                     for="Owner"> Photo
                                                                  Folders</label>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner">
                                                                  <label class="form-check-label"
                                                                     for="Owner"> Video
                                                                  Folders</label>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-3">Messaging</p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner">
                                                                  <label class="form-check-label"
                                                                     for="Owner">Surveys</label>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-3">Financial</p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner">
                                                                  <label class="form-check-label"
                                                                     for="Owner">Owner
                                                                  Invoice</label>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner">
                                                                  <label class="form-check-label"
                                                                     for="Owner">Estimates</label>
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
                                    <div class="row mt-2">
                                       <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="table-view"
                                             role="tabpanel" aria-labelledby="pills-table-view-tab">
                                             <div
                                                class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                                                <div>
                                                   <div class="checked-action mb-3">
                                                      <div class="dropdown">
                                                         <button class="btn dropdown-toggle"
                                                            type="button" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                         Checked Actions<span class="ms-1"><i
                                                            class="bi bi-chevron-down"></i></span>
                                                         </button>
                                                           <ul class="dropdown-menu action-dropdown"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item"
                                                               href="{{route('purchased.download')}}">Download</a></li>
                                                            <li><a class="dropdown-item"
                                                               href="{{route('all-documents.delete')}}">Delete</a></li>
                                                            
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div>
                                                   <div
                                                      class="sort-action mb-3 d-flex justify-content-sm-end justify-content-start align-items-center">
                                                      <div>
                                                         <p class="mb-0 me-2">Sort</p>
                                                      </div>
                                                      <div class="dropdown">
                                                         <button class="btn dropdown-toggle"
                                                            type="button" id="dropdownMenuButton2"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                         Short By<span class="ms-1"><i
                                                            class="bi bi-chevron-down"></i></span><span
                                                            class="ms-1"><img
                                                            src="../assets/img/UpDownArrow.png"
                                                            width="20" height="20"
                                                            alt="" /></span>
                                                         </button>
                                                         <ul class="dropdown-menu action-dropdown"
                                                            aria-labelledby="dropdownMenuButton2">
                                                            <li><a class="dropdown-item"
                                                               href="#">Name</a></li>
                                                            <li><a class="dropdown-item"
                                                               href="#">Created By</a></li>
                                                            <li><a class="dropdown-item"
                                                               href="#">Modify By</a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div>
                                                   <h6 class="fw-700"><span><i
                                                      class="bi bi-caret-down-fill"></i></span>Folders
                                                   </h6>
                                                   <!-- <div class="checked-action mb-3">
                                                      <div class="dropdown">
                                                          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                                         <span class="me-1"><i class="bi bi-chevron-down"></i></span>Folders
                                                          </button>
                                                          <ul class="dropdown-menu action-dropdown" aria-labelledby="dropdownMenuButton3">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                          </ul>
                                                        </div>
                                                      </div> -->
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="table-responsive">
                                                   <table
                                                      class="table table-borderless data-table-cus text-nowrap">
                                                      <thead class="data-t-head">
                                                         <tr>
                                                            <th>
                                                               <div class="form-check">
                                                                  <input
                                                                     class="form-check-input rounded-0 border-0"
                                                                     type="checkbox" value=""
                                                                     id="check1">
                                                               </div>
                                                            </th>
                                                            <th>Name</th>
                                                            <th><span class="me-1"><img
                                                               src="../assets/img/datat.png"
                                                               width="11" height="21"
                                                               alt="" /></span>Viewable By</th>
                                                            <th>Created</th>
                                                            <th><span class="me-1"><img
                                                               src="../assets/img/datat.png"
                                                               width="11" height="21"
                                                               alt="" /></span>Modified</th>
                                                            <th><span class="me-1"><img
                                                               src="../assets/img/datat.png"
                                                               width="11" height="21"
                                                               alt="" /></span>Actions</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                            @if(count($docs) > 0)
                                                         @foreach($docs as $d)
                                                         <tr>
                                                            <td>
                                                               <div class="form-check">
                                                                  <input
                                                                     class="form-check-input rounded-0 border-0 bg-gray"
                                                                     type="checkbox" value=""
                                                                     id="check2">
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div
                                                                  class="d-flex justify-content-center align-items-center">
                                                                  <img src="../assets/img/Folder.png"
                                                                     class="img-fluid me-1"
                                                                     width="20" height="20" />
                                                                 {{$d->parent}}
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div
                                                                  class="d-flex justify-content-center align-items-center">
                                                                  <div
                                                                     class="bd-example tooltip-demo">
                                                                     <a href="#"
                                                                        class="d-inline-block"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Subs/Vendors"
                                                                        data-bs-placement="bottom">
                                                                     <img src="../assets/img/Hammer.png"
                                                                        width="25" height="24">
                                                                     </a>
                                                                  </div>
                                                                  <div
                                                                     class="bd-example tooltip-demo">
                                                                     <a href="#"
                                                                        class="d-inline-block"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Owner"
                                                                        data-bs-placement="bottom">
                                                                     <img src="../assets/img/home-table.png"
                                                                        width="25" height="24">
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>{{$d->created_at}}</td>
                                                            <td>{{$d->updated_at}}</td>
                                                            <td>
                                                               <ul
                                                                  class="list-inline mb-0 text-center">
                                                                  <li class="list-inline-item">
                                                                     <a class="nav-link dropdown-toggle three-dot "
                                                                        data-bs-toggle="dropdown"
                                                                        href="#"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                           width="16" height="16"
                                                                           fill="currentColor"
                                                                           class="bi bi-three-dots-vertical text-gray"
                                                                           viewBox="0 0 16 16">
                                                                           <path
                                                                              d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                           </path>
                                                                        </svg>
                                                                     </a>
                                                                     <div
                                                                        class="dropdown-menu three-dot-main">
                                                                        <div
                                                                           class="d-flex flex-column three-dot-con">
                                                                           <div
                                                                              class="d-flex justify-content-start align-items-center px-2">
                                                                        
                                                                              <a href="#"
                                                                                 class="text-center" data-bs-toggle="modal"
                                                      data-bs-target="#exampleModal2" data-id="{{ $d->document_id }}"><span
                                                                                 class="me-3"><img
                                                                                 src="../assets/img/Folder(1).png"
                                                                                 width="20"
                                                                                 height="20"
                                                                                 alt="" /></span>Folder
                                                                              info</a>
                                                                           </div>
                                                                           <div
                                                                              class="d-flex justify-content-start align-items-center px-2">
                                                                              <a href="{{route('purchased.download')}}"
                                                                                 class="text-center"><span
                                                                                 class="me-3"><img
                                                                                 src="../assets/img/Downloads.png"
                                                                                 width="20"
                                                                                 height="20"
                                                                                 alt="" /></span>Download</a>
                                                                           </div>
                                                                           <div
                                                                              class="d-flex justify-content-start align-items-center px-2">
                                                                              <a href="{{route('documents.delete',['document_id' => $d->id]) }}"
                                                                                 class="text-center"><span
                                                                                 class="me-3"><img
                                                                                 src="../assets/img/Delete.png"
                                                                                 width="20"
                                                                                 height="20"
                                                                                 alt="" /></span>Delete</a>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </li>
                                                               </ul>
                                                            </td>
                                                         </tr>
                                                         @endforeach
                                                          @else
                                                        <h4>No Recors Founds</h4>
                                                        @endif
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div
                                                   class="d-flex justify-content-end align-items-center table-pagi flex-wrap">
                                                   <nav aria-label="Page navigation example">
                                                      <ul class="pagination">
                                                         <li class="page-item">
                                                            <a class="page-link" href="#"
                                                               aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                         </li>
                                                         <li class="page-item"><a class="page-link"
                                                            href="#">1</a></li>
                                                         <li class="page-item"><a class="page-link"
                                                            href="#">2</a></li>
                                                         <li class="page-item"><a class="page-link"
                                                            href="#">3</a></li>
                                                         <li class="page-item">
                                                            <a class="page-link" href="#"
                                                               aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                         </li>
                                                      </ul>
                                                   </nav>
                                                   <div>
                                                      <div>
                                                         <div class="pagi-action mb-3 ms-2">
                                                            <div class="dropdown">
                                                               <button class="btn dropdown-toggle"
                                                                  type="button"
                                                                  id="dropdownMenuButton4"
                                                                  data-bs-toggle="dropdown"
                                                                  aria-expanded="false">
                                                               50/ page<span class="ms-1"><i
                                                                  class="bi bi-chevron-down"></i></span>
                                                               </button>
                                                               <ul class="dropdown-menu action-dropdown"
                                                                  aria-labelledby="dropdownMenuButton4">
                                                                  <li><a class="dropdown-item"
                                                                     href="#"> 10/ page</a></li>
                                                                  <li><a class="dropdown-item"
                                                                     href="#">20/ Page</a></li>
                                                                  <li><a class="dropdown-item"
                                                                     href="#">30/ Page</a></li>
                                                               </ul>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane fade" id="tile-view" role="tabpanel"
                                             aria-labelledby="pills-tile-view-tab">
                                             <div
                                                class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                                                <div>
                                                   <div class="checked-action mb-3">
                                                      <div class="dropdown doc-drop">
                                                         <button class="btn dropdown-toggle"
                                                            type="button" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                         Checked Actions<span class="ms-1"><i
                                                            class="bi bi-chevron-down"></i></span>
                                                         </button>
                                                         <ul class="dropdown-menu action-dropdown"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item"
                                                               href="{{route('purchased.download')}}">Download</a></li>
                                                            <li><a class="dropdown-item"
                                                               href="#">Delete</a></li>
                                                            
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div>
                                                   <div
                                                      class="sort-action mb-3 d-flex justify-content-sm-end justify-content-start align-items-center">
                                                      <div>
                                                         <p class="mb-0 me-2">Sort</p>
                                                      </div>
                                                      <div class="dropdown">
                                                         <button class="btn dropdown-toggle"
                                                            type="button" id="dropdownMenuButton2"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                         Short By<span class="ms-1"><i
                                                            class="bi bi-chevron-down"></i></span><span
                                                            class="ms-1"><img
                                                            src="../assets/img/UpDownArrow.png"
                                                            width="20" height="20"
                                                            alt="" /></span>
                                                         </button>
                                                         <ul class="dropdown-menu action-dropdown"
                                                            aria-labelledby="dropdownMenuButton2">
                                                            <li><a class="dropdown-item"
                                                               href="#">Name</a></li>
                                                            <li><a class="dropdown-item"
                                                               href="#">Created By</a></li>
                                                            <li><a class="dropdown-item"
                                                               href="#">Modify By</a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div>
                                                   <h6 class="fw-700"><span><i
                                                      class="bi bi-caret-down-fill"></i></span>Folders
                                                   </h6>
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div><button type="submit"
                                                   class="btn folder-import px-3">Select all</button>
                                                </div>
                                             </div>
                                             <div class="row mb-3">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                                   <div
                                                      class="app-card app-card-doc shadow-sm mx-auto mb-4">
                                                      <div class="app-card-thumb-holder px-3 py-2">
                                                         <div
                                                            class="d-flex justify-content-end align-items-center">
                                                            <div class="me-1"><img
                                                               src="../assets/img/homewhite.png"
                                                               class="img-fluid" width="20"
                                                               height="20" alt="" /></div>
                                                            <div><img
                                                               src="../assets/img/Hammerwhite.png"
                                                               class="img-fluid" width="20"
                                                               height="20" alt="" /></div>
                                                         </div>
                                                         <span class="icon-holder">
                                                         <img src="../assets/img/docfolder.png"
                                                            alt="" />
                                                         </span>
                                                      </div>
                                                      <div class="app-card-body p-2 has-card-actions">
                                                         <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 fw-300">Drawings</p>
                                                            <div>
                                                               <div class="dropdown doc-drop">
                                                                  <div class="dropdown-toggle no-toggle-arrow"
                                                                     data-bs-toggle="dropdown"
                                                                     aria-expanded="false">
                                                                     <svg width="1em" height="1em"
                                                                        viewBox="0 0 16 16"
                                                                        class="bi bi-three-dots-vertical"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                           d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                        </path>
                                                                     </svg>
                                                                  </div>
                                                                  <!--//dropdown-toggle-->
                                                                  <ul class="dropdown-menu">
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-eye me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                              </path>
                                                                           </svg>
                                                                           View
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-pencil me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                              </path>
                                                                           </svg>
                                                                           Edit
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-download me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                              </path>
                                                                           </svg>
                                                                           Download
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <hr
                                                                           class="dropdown-divider">
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-trash me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                              </path>
                                                                           </svg>
                                                                           Delete
                                                                        </a>
                                                                     </li>
                                                                  </ul>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--//app-card-body-->
                                                   </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                                   <div
                                                      class="app-card app-card-doc shadow-sm mb-4 mx-auto">
                                                      <div class="app-card-thumb-holder px-3 py-2">
                                                         <div
                                                            class="d-flex justify-content-end align-items-center">
                                                            <div class="me-1"><img
                                                               src="../assets/img/homewhite.png"
                                                               class="img-fluid" width="20"
                                                               height="20" alt="" /></div>
                                                            <div><img
                                                               src="../assets/img/Hammerwhite.png"
                                                               class="img-fluid" width="20"
                                                               height="20" alt="" /></div>
                                                         </div>
                                                         <span class="icon-holder">
                                                         <img src="../assets/img/docfolder.png"
                                                            alt="" />
                                                         </span>
                                                      </div>
                                                      <div class="app-card-body p-2 has-card-actions">
                                                         <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 fw-300">Drawings</p>
                                                            <div>
                                                               <div class="dropdown doc-drop">
                                                                  <div class="dropdown-toggle no-toggle-arrow"
                                                                     data-bs-toggle="dropdown"
                                                                     aria-expanded="false">
                                                                     <svg width="1em" height="1em"
                                                                        viewBox="0 0 16 16"
                                                                        class="bi bi-three-dots-vertical"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                           d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                        </path>
                                                                     </svg>
                                                                  </div>
                                                                  <!--//dropdown-toggle-->
                                                                  <ul class="dropdown-menu">
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-eye me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                              </path>
                                                                           </svg>
                                                                           View
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-pencil me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                              </path>
                                                                           </svg>
                                                                           Edit
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-download me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                              </path>
                                                                           </svg>
                                                                           Download
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <hr
                                                                           class="dropdown-divider">
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-trash me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                              </path>
                                                                           </svg>
                                                                           Delete
                                                                        </a>
                                                                     </li>
                                                                  </ul>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--//app-card-body-->
                                                   </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                                   <div
                                                      class="app-card app-card-doc shadow-sm mb-4 mx-auto">
                                                      <div class="app-card-thumb-holder px-3 py-2">
                                                         <div
                                                            class="d-flex justify-content-end align-items-center">
                                                            <div class="me-1"><img
                                                               src="../assets/img/homewhite.png"
                                                               class="img-fluid" width="20"
                                                               height="20" alt="" /></div>
                                                            <div><img
                                                               src="../assets/img/Hammerwhite.png"
                                                               class="img-fluid" width="20"
                                                               height="20" alt="" /></div>
                                                         </div>
                                                         <span class="icon-holder">
                                                         <img src="../assets/img/docfolder.png"
                                                            alt="" />
                                                         </span>
                                                      </div>
                                                      <div class="app-card-body p-2 has-card-actions">
                                                         <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0 fw-300">Drawings</p>
                                                            <div>
                                                               <div class="dropdown doc-drop">
                                                                  <div class="dropdown-toggle no-toggle-arrow"
                                                                     data-bs-toggle="dropdown"
                                                                     aria-expanded="false">
                                                                     <svg width="1em" height="1em"
                                                                        viewBox="0 0 16 16"
                                                                        class="bi bi-three-dots-vertical"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                           d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                        </path>
                                                                     </svg>
                                                                  </div>
                                                                  <!--//dropdown-toggle-->
                                                                  <ul class="dropdown-menu">
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-eye me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                              </path>
                                                                           </svg>
                                                                           View
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-pencil me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                              </path>
                                                                           </svg>
                                                                           Edit
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-download me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                              </path>
                                                                           </svg>
                                                                           Download
                                                                        </a>
                                                                     </li>
                                                                     <li>
                                                                        <hr
                                                                           class="dropdown-divider">
                                                                     </li>
                                                                     <li>
                                                                        <a class="dropdown-item"
                                                                           href="#">
                                                                           <svg
                                                                              width="1em"
                                                                              height="1em"
                                                                              viewBox="0 0 16 16"
                                                                              class="bi bi-trash me-2"
                                                                              fill="currentColor"
                                                                              xmlns="http://www.w3.org/2000/svg">
                                                                              <path
                                                                                 d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                              </path>
                                                                              <path
                                                                                 fill-rule="evenodd"
                                                                                 d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                              </path>
                                                                           </svg>
                                                                           Delete
                                                                        </a>
                                                                     </li>
                                                                  </ul>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--//app-card-body-->
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div
                                                   class="d-flex justify-content-end align-items-center table-pagi flex-wrap">
                                                   <nav aria-label="Page navigation example">
                                                      <ul class="pagination">
                                                         <li class="page-item">
                                                            <a class="page-link" href="#"
                                                               aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                         </li>
                                                         <li class="page-item"><a class="page-link"
                                                            href="#">1</a></li>
                                                         <li class="page-item"><a class="page-link"
                                                            href="#">2</a></li>
                                                         <li class="page-item"><a class="page-link"
                                                            href="#">3</a></li>
                                                         <li class="page-item">
                                                            <a class="page-link" href="#"
                                                               aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                         </li>
                                                      </ul>
                                                   </nav>
                                                   <div>
                                                      <div>
                                                         <div class="pagi-action mb-3 ms-2">
                                                            <div class="dropdown">
                                                               <button class="btn dropdown-toggle"
                                                                  type="button"
                                                                  id="dropdownMenuButton4"
                                                                  data-bs-toggle="dropdown"
                                                                  aria-expanded="false">
                                                               50/ page<span class="ms-1"><i
                                                                  class="bi bi-chevron-down"></i></span>
                                                               </button>
                                                               <ul class="dropdown-menu action-dropdown"
                                                                  aria-labelledby="dropdownMenuButton4">
                                                                  <li><a class="dropdown-item"
                                                                     href="#"> 10/ page</a></li>
                                                                  <li><a class="dropdown-item"
                                                                     href="#">20/ Page</a></li>
                                                                  <li><a class="dropdown-item"
                                                                     href="#">30/ Page</a></li>
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
                           </div>
                        </div>
                     </div>
                    
                       <div class="modal fade" id="exampleModal2" tabindex="-1"
                                                   aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                      <div class="modal-content rounded-0 border-0">
                                                         <input type="hidden" id="document_id" name="document_id" value="">
                                                         <div
                                                            class="modal-custom-header doc-header py-2 px-2">
                                                            <h6 class="mb-0 fw-400 text-white ">Folder
                                                               info
                                                            </h6>
                                                         </div>
                                                         <div class="modal-body">
                                                        
                                                               <div class="mb-3">
                                                                  <h6 class="fw-700">Folder
                                                                     Information
                                                                  </h6>
                                                               </div>
                                                               <div class="mb-3">
                                                                  <label
                                                                     class="form-label modal-label position-relative">Title</label>
                                                                  <input type="text"
                                                                     class="form-control" name="title" readonly value="">
                                                               </div>
                                                               <div class="mb-3">
                                                                  <label class="form-label">Parent
                                                                  Folder</label>
                <select class="form-select"  aria-label="Default select example" name="parent" disabled>
                   <option selected value="None Main Documents"></option>
               
               </select>
               </div>
                                                               <div class="mb-3">
                                                                  <h6 class="fw-700">Viewing
                                                                     Permissions
                                                                  </h6>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-1">Sub/ Vendors
                                                                  </p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="sub" name="sub_vendor" value="1" disabled value="">
                                                                  <label class="form-check-label"
                                                                     for="sub">Allow Subs/ Vendors to
                                                                  view this folders</label>
                                                               </div>
                                                               <div class="mb-0">
                                                                  <p class="fw-400 mb-1">Owner</p>
                                                               </div>
                                                               <div class="mb-3 form-check">
                                                                  <input type="checkbox"
                                                                     class="form-check-input rounded-sm"
                                                                     id="Owner" name="owner" value="2" disabled value="">
                                                                  <label class="form-check-label"
                                                                     for="Owner">Allow Owner (11 Old
                                                                  Rectory Green,Aughton) to view
                                                                  this Folder)</label>
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                              
                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        ......
                     </div>
                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        ......
                     </div>
                     <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        ......
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


      @endsection