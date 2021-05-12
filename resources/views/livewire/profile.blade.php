@extends('layouts.base')

{{-- Nav --}}
@extends('layouts.nav')


{{-- SideNav --}}
@extends('layouts.sidenav')


  <main class="content">
      
{{-- TopBar --}}

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
          <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
              <!-- Search form -->
              <form class="navbar-search form-inline" id="navbar-search-main">
                <div class="input-group input-group-merge search-bar">
                    <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                    <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                </div>
              </form>
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
              <li class="nav-item dropdown">
                <a class="nav-link text-dark me-lg-3 icon-notifications dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="icon icon-sm">
                    <span class="fas fa-bell bell-shake"></span>
                    <span class="icon-badge rounded-circle unread-notifications"></span>
                  </span>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                  <div class="list-group list-group-flush">
                    <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="/assets/img/team/profile-picture-1.jpg" class="user-avatar lg-avatar rounded-circle">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                </div>
                                <div class="text-end">
                                  <small class="text-danger">a few moments ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="/assets/img/team/profile-picture-2.jpg" class="user-avatar lg-avatar rounded-circle">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                </div>
                                <div class="text-end">
                                  <small class="text-danger">2 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="/assets/img/team/profile-picture-3.jpg" class="user-avatar lg-avatar rounded-circle">
                          </div>
                          <div class="col ps-0 m-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                </div>
                                <div class="text-end">
                                  <small>5 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Tagged you in a document called "First quarter financial plans",</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="/assets/img/team/profile-picture-4.jpg" class="user-avatar lg-avatar rounded-circle">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                </div>
                                <div class="text-end">
                                  <small>1 d ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom border-light">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="/assets/img/team/profile-picture-5.jpg" class="user-avatar lg-avatar rounded-circle">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                </div>
                                <div class="text-end">
                                  <small>2 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing page."</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item text-center text-primary fw-bold rounded-bottom py-3">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="media d-flex align-items-center">
                    <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="/assets/img/team/profile-picture-3.jpg">
                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                      <span class="mb-0 font-small fw-bold">Bonnie Green</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-0">
                    <a class="dropdown-item rounded-top fw-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                    <a class="dropdown-item fw-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                    <a class="dropdown-item fw-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                    <a class="dropdown-item fw-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                    <div role="separator" class="dropdown-divider my-0"></div>
                    <a class="dropdown-item rounded-bottom fw-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div>
            <button class="btn btn-secondary text-dark me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-plus me-2"></span>New
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">
                <a class="dropdown-item fw-normal rounded-top" href="#"><span class="far fa-file-alt me-2"></span>Document</a>
                <a class="dropdown-item fw-normal" href="#"><span class="far fa-comment-dots me-2"></span>Message</a>
                <a class="dropdown-item fw-normal" href="#"><span class="fas fa-box-open me-2"></span>Product</a>
                <div role="separator" class="dropdown-divider my-0"></div>
                <a class="dropdown-item fw-normal rounded-bottom" href="#"><span class="fas fa-rocket text-danger me-2"></span>My Plan</a>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-dark me-2"><span class="fas fa-calendar-alt"></span></button>
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-clipboard me-2"></span>Reports
                <span class="icon icon-small ms-1"><span class="fas fa-chevron-down"></span></span>
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">
                <a class="dropdown-item fw-normal rounded-top" href="#"><span class="fas fa-box-open"></span>Products</a>
                <a class="dropdown-item fw-normal" href="#"><span class="fas fa-store"></span>Customers</a>
                <a class="dropdown-item fw-normal" href="#"><span class="fas fa-cart-arrow-down"></span>Orders</a>
                <a class="dropdown-item fw-normal" href="#"><span class="fas fa-chart-pie"></span>Console</a>
                <div role="separator" class="dropdown-divider my-0"></div>
                <a class="dropdown-item fw-normal rounded-bottom" href="#"><span class="fas fa-rocket text-success"></span>All Reports</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body shadow-sm mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">First Name</label>
                                <input class="form-control" id="first_name" type="text" placeholder="Enter your first name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Last Name</label>
                                <input class="form-control" id="last_name" type="text" placeholder="Also your last name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="birthday">Birthday</label>
                            <div class="input-group">
                                <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                             </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option selected>Gender</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required>
                            </div>
                        </div>
                    </div>
                    <h2 class="h5 my-4">Location</h2>
                    <div class="row">
                        <div class="col-sm-9 mb-3">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" id="address" type="text" placeholder="Enter your home address" required>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input class="form-control" id="number" type="number" placeholder="No." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" id="city" type="text" placeholder="City" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark">Save All</button>
                    </div>
                </form>
            </div>
            <div class="card card-body shadow-sm mb-4 mb-lg-0">
                <h2 class="h5 mb-4">Alerts & Notifications</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                        <div>
                            <h3 class="h6 mb-1">Company News</h3>
                            <p class="small pe-4">Get Rocket news, announcements, and product updates</p>
                        </div>
                        <div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="user-notification-1">
                                <label class="form-check-label" for="user-notification-1"></label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                        <div>
                            <h3 class="h6 mb-1">Account Activity</h3>
                            <p class="small pe-4">Get important notifications about you or activity you've missed</p>
                        </div>
                        <div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="user-notification-2" checked>
                                <label class="form-check-label" for="user-notification-2"></label>
                            </div>                                            
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                        <div>
                            <h3 class="h6 mb-1">Meetups Near You</h3>
                            <p class="small pe-4">Get an email when a Dribbble Meetup is posted close to my location</p>
                        </div>
                        <div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="user-notification-3" checked>
                                <label class="form-check-label" for="user-notification-3"></label>
                            </div> 
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow-sm text-center p-0">
                        <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg"></div>
                        <div class="card-body pb-5">
                            <img src="../assets/img/team/profile-picture-1.jpg" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">Neil Sims</h4>
                            <h5 class="fw-normal">Senior Software Engineer</h5>
                            <p class="text-gray mb-4">New York, USA</p>
                            <a class="btn btn-sm btn-dark me-2" href="#"><span class="fas fa-user-plus me-1"></span> Connect</a>
                            <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                        </div>
                     </div>
                </div>
                <div class="col-12">
                    <div class="card card-body shadow-sm mb-4">
                        <h2 class="h5 mb-4">Select profile photo</h2>
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <!-- Avatar -->
                                <div class="user-avatar xl-avatar">
                                    <img class="rounded" src="../assets/img/team/profile-picture-3.jpg" alt="change avatar">
                                </div>
                            </div>
                            <div class="file-field">
                                <div class="d-flex justify-content-xl-center ms-xl-3">
                                   <div class="d-flex">
                                      <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input type="file">
                                      <div class="d-md-block text-left">
                                         <div class="fw-normal text-dark mb-1">Choose Image</div>
                                         <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                      </div>
                                   </div>
                                </div>
                             </div>                                        
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-12">
                    <div class="card card-body shadow-sm mb-4">
                        <h2 class="h5 mb-4">Select cover photo</h2>
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <!-- Avatar -->
                                <div class="user-avatar xl-avatar">
                                    <img class="rounded" src="../assets/img/profile-cover.jpg" alt="change cover photo">
                                </div>
                            </div>
                            <div class="file-field">
                                <div class="d-flex justify-content-xl-center ms-xl-3">
                                   <div class="d-flex">
                                      <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input type="file">
                                      <div class="d-md-block text-left">
                                         <div class="fw-normal text-dark mb-1">Choose Image</div>
                                         <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
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
    @extends('layouts.footer')
</main>



</body>

</html>