<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
            <h3 class="welcome-sub-text">Your performance summary this week </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Select category</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                  <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                  <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">UI Elements</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Bounce Rate</p>
                            <h3 class="rate-percentage">32.53%</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Page Views</p>
                            <h3 class="rate-percentage">7,682</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1">Closed Value</p>
                                    <h2 class="text-info">357</h2>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Total Visitors</p>
                                        <h4 class="mb-0 fw-bold">26.80%</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Visits per day</p>
                                        <h4 class="mb-0 fw-bold">9065</h4>
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
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Market Overview</h4>
                                   <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                  </div>
                                  <div>
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <h6 class="dropdown-header">Settings</h6>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="marketingOverview"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded table-darkBGImg">
                              <div class="card-body">
                                <div class="col-sm-8">
                                  <h3 class="text-white upgrade-info mb-0">
                                    Enhance your <span class="fw-bold">Campaign</span> for better outreach
                                  </h3>
                                  <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Pending Requests</h4>
                                   <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                        <th>Customer</th>
                                        <th>Company</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="images/faces/face1.jpg" alt="">
                                            <div>
                                              <h6>Brandon Washington</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">79%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face2.jpg" alt="">
                                            <div>
                                              <h6>Laura Brooks</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face3.jpg" alt="">
                                            <div>
                                              <h6>Wayne Murphy</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face4.jpg" alt="">
                                            <div>
                                              <h6>Matthew Bailey</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-danger">Pending</div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <img src="images/faces/face5.jpg" alt="">
                                            <div>
                                              <h6>Katherine Butler</h6>
                                              <p>Head admin</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>Company name 1</h6>
                                          <p>company type</p>
                                        </td>
                                        <td>
                                          <div>
                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                              <p class="text-success">65%</p>
                                              <p>85/162</p>
                                            </div>
                                            <div class="progress progress-md">
                                              <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-success">Completed</div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Recent Events</h4>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Other Events
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Quarterly Report
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash">Activities</h4>
                                  <p class="mb-0">20 finished, 5 remaining</p>
                                </div>
                                <ul class="bullet-line-list">
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>Just now</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                      <p>1h</p>
                                    </div>
                                  </li>
                                </ul>
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash">Todo list</h4>
                                      <div class="add-items d-flex mb-0">
                                        <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                        <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                      </div>
                                    </div>
                                    <div class="list-wrapper">
                                      <ul class="todo-list todo-list-rounded">
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                              <i class="mdi mdi-flag ms-2 flag-color"></i>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">23 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="border-bottom-0">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-danger me-3">Expired</div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h4 class="card-title card-title-dash">Type By Amount</h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Leave Report</h4>
                                      </div>
                                      <div>
                                        <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <h6 class="dropdown-header">week Wise</h6>
                                            <a class="dropdown-item" href="#">Year Wise</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <canvas id="leaveReport"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <div>
                                        <h4 class="card-title card-title-dash">Top Performer</h4>
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                            <small class="text-muted mb-0">162543</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
                                        </div>
                                      </div>
                                      <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                        <div class="d-flex">
                                          <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                                          <div class="wrapper ms-3">
                                            <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                            <small class="text-muted mb-0">Alaska, USA</small>
                                          </div>
                                        </div>
                                        <div class="text-muted text-small">
                                          1h ago
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
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

<style>
  /*------------------------------------------------------------------
 [Master Stylesheet]

  Project:	Star Admin2 
  Version:	1.2.1
-------------------------------------------------------------------*/
/*-------------------------------------------------------------------
  ===== Table of Contents =====

  * Bootstrap functions
  * Template variables
  * SCSS Compass Functions
  * Boostrap Main SCSS
  * Template mixins
    + Animation Mixins
    + Badge Mixins
    + Button Mixins
    + Miscellaneous Mixins
    + BlockQuote Mixins
    + Cards Mixins
    + Color Functions Mixins
    + Tooltips
    + popovers
  * Core Styles
    + Reset Styles
    + Fonts
    + Functions
    + Backgrounds
    + Sidebar
    + Navbar
    + Typography
    + Miscellaneous
    + Footer
    + Layouts
    + Utilities
    + Demo styles
  * Components
    + Accordions
    + Badges
    + Bootstrap Alerts
    + Boostrap Progress
    + Buttons
    + Breadcrumbs
    + Cards
    + Checkboxes and Radios
    + Dropdowns
    + Forms
    + Google maps
    + Icons
    + Loaders
    + Lists
    + Modals
    + Pagination
    + Popover
    + Portfolio
    + Preview
    + Tables
    + Tabs
    + Timeline
    + Todo List
    + Tooltips
    + User Profile
    + Pricing table
    + Settings Panel
  * Email
    + Mail Sidebar
    + Mail List Container
    + Message Content
  * Plugin Overrides
    + Ace Editor
    + Avgrund Popup
    + Bootstrap Tour
    + Chartist
    + CodeMirror
    + Colcade
    + Colorpicker
    + Context Menu
    + Data Tables
    + Datepicker
    + Dropify
    + Dropzone
    + Flot chart
    + Full Calendar
    + Google Charts
    + Icheck
    + Jquery File Upload
    + Js-grid
    + Jvectormap
    + Light Gallery
    + Listify
    + No-ui-slider
    + Owl-carousel
    + Progressbar-js
    + Pws-tabs
    + Quill Editor
    + Rating
    + Select2
    + Summernote Editor
    + SweetAlert
    + Switchery
    + Tags
    + TinyMCE Editor
    + Toast
    + Typeahead
    + Wysi Editor
    + X-editable
    + Wizard
  * Landing screens
    + Auth
  * Horizontal Menu
    + Horizontal
-------------------------------------------------------------------*/
/*-------------------------------------------------------------------*/
/* === Import Bootstrap functions and variables === */
/*-------------------------------------------------------------------*/
/* === Import template variables === */
/*-------------------------------------------------------------------*/
/* === SCSS Compass Functions === */
@import url("https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap");
@-moz-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-o-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-ms-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-moz-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-webkit-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-o-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-ms-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-moz-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-o-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-ms-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-moz-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-webkit-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-o-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-ms-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-moz-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-webkit-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-o-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-ms-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-moz-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-webkit-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-o-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-ms-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-moz-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-o-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-ms-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-moz-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-webkit-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-o-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-ms-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-moz-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-webkit-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-o-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-ms-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

/*-------------------------------------------------------------------*/
/* === Boostrap Main SCSS === */
/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #5E50F9;
  --bs-indigo: #6610f2;
  --bs-purple: #6a008a;
  --bs-pink: #E91E63;
  --bs-red: #f96868;
  --bs-orange: #f2a654;
  --bs-yellow: #f6e84e;
  --bs-green: #46c35f;
  --bs-teal: #58d8a3;
  --bs-cyan: #57c7d4;
  --bs-white: #ffffff;
  --bs-gray: #434a54;
  --bs-gray-light: #aab2bd;
  --bs-gray-lighter: #e8eff4;
  --bs-gray-lightest: #e6e9ed;
  --bs-gray-dark: #0f1531;
  --bs-black: #000000;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #1F3BB3;
  --bs-secondary: #F1F1F1;
  --bs-success: #34B1AA;
  --bs-info: #52CDFF;
  --bs-warning: #ffaf00;
  --bs-danger: #F95F53;
  --bs-light: #fbfbfb;
  --bs-dark: #1E283D;
  --bs-primary-rgb: 13, 110, 253;
  --bs-secondary-rgb: 108, 117, 125;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 33, 37, 41;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 31, 31, 31;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #1F1F1F;
  --bs-body-bg: #fff;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25;
}

hr:not([size]) {
  height: 1px;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw);
}

@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }
}

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw);
}

@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2rem;
  }
}

h3, .h3 {
  font-size: calc(1.3rem + 0.6vw);
}

@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.75rem;
  }
}

h4, .h4 {
  font-size: calc(1.275rem + 0.3vw);
}

@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.5rem;
  }
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-bs-original-title] {
  text-decoration: underline dotted;
  cursor: help;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #0d6efd;
  text-decoration: underline;
}

a:hover {
  color: #0a58ca;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 700;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role="button"] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}

select:disabled {
  opacity: 1;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}

@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}

legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014\00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: #6c757d;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px;
  }
}

@media (min-width: 1400px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    max-width: 1320px;
  }
}

.row {
  --bs-gutter-x: 30px;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-.5 * var(--bs-gutter-x));
  margin-left: calc(-.5 * var(--bs-gutter-x));
}

.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * .5);
  padding-left: calc(var(--bs-gutter-x) * .5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.33333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.66667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333%;
}

.offset-2 {
  margin-left: 16.66667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333%;
}

.offset-5 {
  margin-left: 41.66667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333%;
}

.offset-8 {
  margin-left: 66.66667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333%;
}

.offset-11 {
  margin-left: 91.66667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333%;
  }
  .offset-sm-2 {
    margin-left: 16.66667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333%;
  }
  .offset-sm-5 {
    margin-left: 41.66667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333%;
  }
  .offset-sm-8 {
    margin-left: 66.66667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333%;
  }
  .offset-sm-11 {
    margin-left: 91.66667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333%;
  }
  .offset-md-2 {
    margin-left: 16.66667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333%;
  }
  .offset-md-5 {
    margin-left: 41.66667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333%;
  }
  .offset-md-8 {
    margin-left: 66.66667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333%;
  }
  .offset-md-11 {
    margin-left: 91.66667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333%;
  }
  .offset-lg-2 {
    margin-left: 16.66667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333%;
  }
  .offset-lg-5 {
    margin-left: 41.66667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333%;
  }
  .offset-lg-8 {
    margin-left: 66.66667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333%;
  }
  .offset-lg-11 {
    margin-left: 91.66667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333%;
  }
  .offset-xl-2 {
    margin-left: 16.66667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333%;
  }
  .offset-xl-5 {
    margin-left: 41.66667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333%;
  }
  .offset-xl-8 {
    margin-left: 66.66667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333%;
  }
  .offset-xl-11 {
    margin-left: 91.66667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}

.table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #212529;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #212529;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #212529;
  --bs-table-hover-bg: #eaeaf1;
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  vertical-align: top;
  border-color: #dee2e6;
}

.table > :not(caption) > * > * {
  padding: 0.5rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

.table > tbody {
  vertical-align: inherit;
}

.table > thead {
  vertical-align: bottom;
}

.table > :not(:first-child) {
  border-top: 2px solid currentColor;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}

.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}

.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-bg: #cfe2ff;
  --bs-table-striped-bg: #c5d7f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bacbe6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfd1ec;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bacbe6;
}

.table-secondary {
  --bs-table-bg: #e2e3e5;
  --bs-table-striped-bg: #d7d8da;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cbccce;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d1d2d4;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cbccce;
}

.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: #c7dbd2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcd0c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7;
}

.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: #c5e8ef;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #badce3;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3;
}

.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: #f2e7c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6dbb9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9;
}

.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: #eccccf;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfc2c4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4;
}

.table-light {
  --bs-table-bg: #f8f9fa;
  --bs-table-striped-bg: #ecedee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfe0e1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5e6e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfe0e1;
}

.table-dark {
  --bs-table-bg: #212529;
  --bs-table-striped-bg: #2c3034;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #373b3e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #323539;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #373b3e;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

.form-label {
  margin-bottom: 0.5rem;
}

.col-form-label {
  padding-top: calc(0.875rem + 1px);
  padding-bottom: calc(0.875rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1;
}

.col-form-label-lg {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  font-size: 1.25rem;
}

.col-form-label-sm {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 0.875rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #6c757d;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  display: block;
  width: 100%;
  padding: 0.875rem 1.375rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1;
  color: #212529;
  background-color: color(white);
  background-clip: padding-box;
  border: 1px solid #ced4da;
  appearance: none;
  border-radius: 2px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control, .asColorPicker-input, .dataTables_wrapper select, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
  .tt-query,
  .tt-hint {
    transition: none;
  }
}

.form-control[type="file"], .asColorPicker-input[type="file"], .dataTables_wrapper select[type="file"], .select2-container--default .select2-selection--single[type="file"], .select2-container--default .select2-selection--single .select2-search__field[type="file"], .typeahead[type="file"],
.tt-query[type="file"],
.tt-hint[type="file"] {
  overflow: hidden;
}

.form-control[type="file"]:not(:disabled):not([readonly]), .asColorPicker-input[type="file"]:not(:disabled):not([readonly]), .dataTables_wrapper select[type="file"]:not(:disabled):not([readonly]), .select2-container--default .select2-selection--single[type="file"]:not(:disabled):not([readonly]), .select2-container--default .select2-selection--single .select2-search__field[type="file"]:not(:disabled):not([readonly]), .typeahead[type="file"]:not(:disabled):not([readonly]),
.tt-query[type="file"]:not(:disabled):not([readonly]),
.tt-hint[type="file"]:not(:disabled):not([readonly]) {
  cursor: pointer;
}

.form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  color: #212529;
  background-color: #fff;
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-control::-webkit-date-and-time-value, .asColorPicker-input::-webkit-date-and-time-value, .dataTables_wrapper select::-webkit-date-and-time-value, .select2-container--default .select2-selection--single::-webkit-date-and-time-value, .select2-container--default .select2-selection--single .select2-search__field::-webkit-date-and-time-value, .typeahead::-webkit-date-and-time-value,
.tt-query::-webkit-date-and-time-value,
.tt-hint::-webkit-date-and-time-value {
  height: 1em;
}

.form-control::placeholder, .asColorPicker-input::placeholder, .dataTables_wrapper select::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
.tt-query::placeholder,
.tt-hint::placeholder {
  color: #c9c8c8;
  opacity: 1;
}

.form-control:disabled, .asColorPicker-input:disabled, .dataTables_wrapper select:disabled, .select2-container--default .select2-selection--single:disabled, .select2-container--default .select2-selection--single .select2-search__field:disabled, .typeahead:disabled,
.tt-query:disabled,
.tt-hint:disabled, .form-control[readonly], .asColorPicker-input[readonly], .dataTables_wrapper select[readonly], .select2-container--default .select2-selection--single[readonly], .select2-container--default .select2-selection--single .select2-search__field[readonly], .typeahead[readonly],
.tt-query[readonly],
.tt-hint[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

.form-control::file-selector-button, .asColorPicker-input::file-selector-button, .dataTables_wrapper select::file-selector-button, .select2-container--default .select2-selection--single::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field::file-selector-button, .typeahead::file-selector-button,
.tt-query::file-selector-button,
.tt-hint::file-selector-button {
  padding: 0.875rem 1.375rem;
  margin: -0.875rem -1.375rem;
  margin-inline-end: 1.375rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button, .asColorPicker-input::file-selector-button, .dataTables_wrapper select::file-selector-button, .select2-container--default .select2-selection--single::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field::file-selector-button, .typeahead::file-selector-button,
  .tt-query::file-selector-button,
  .tt-hint::file-selector-button {
    transition: none;
  }
}

.form-control:hover:not(:disabled):not([readonly])::file-selector-button, .asColorPicker-input:hover:not(:disabled):not([readonly])::file-selector-button, .dataTables_wrapper select:hover:not(:disabled):not([readonly])::file-selector-button, .select2-container--default .select2-selection--single:hover:not(:disabled):not([readonly])::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field:hover:not(:disabled):not([readonly])::file-selector-button, .typeahead:hover:not(:disabled):not([readonly])::file-selector-button,
.tt-query:hover:not(:disabled):not([readonly])::file-selector-button,
.tt-hint:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #dde0e3;
}

.form-control::-webkit-file-upload-button, .asColorPicker-input::-webkit-file-upload-button, .dataTables_wrapper select::-webkit-file-upload-button, .select2-container--default .select2-selection--single::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field::-webkit-file-upload-button, .typeahead::-webkit-file-upload-button,
.tt-query::-webkit-file-upload-button,
.tt-hint::-webkit-file-upload-button {
  padding: 0.875rem 1.375rem;
  margin: -0.875rem -1.375rem;
  margin-inline-end: 1.375rem;
  color: #212529;
  background-color: #e9ecef;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button, .asColorPicker-input::-webkit-file-upload-button, .dataTables_wrapper select::-webkit-file-upload-button, .select2-container--default .select2-selection--single::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field::-webkit-file-upload-button, .typeahead::-webkit-file-upload-button,
  .tt-query::-webkit-file-upload-button,
  .tt-hint::-webkit-file-upload-button {
    transition: none;
  }
}

.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .asColorPicker-input:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .dataTables_wrapper select:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .select2-container--default .select2-selection--single:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .typeahead:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
.tt-query:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
.tt-hint:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #dde0e3;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.875rem 0;
  margin-bottom: 0;
  line-height: 1;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: 1.75rem;
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.form-control-sm::file-selector-button {
  padding: 0.5rem 0.81rem;
  margin: -0.5rem -0.81rem;
  margin-inline-end: 0.81rem;
}

.form-control-sm::-webkit-file-upload-button {
  padding: 0.5rem 0.81rem;
  margin: -0.5rem -0.81rem;
  margin-inline-end: 0.81rem;
}

.form-control-lg {
  min-height: 3.175rem;
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.form-control-lg::file-selector-button {
  padding: 0.94rem 1.94rem;
  margin: -0.94rem -1.94rem;
  margin-inline-end: 1.94rem;
}

.form-control-lg::-webkit-file-upload-button {
  padding: 0.94rem 1.94rem;
  margin: -0.94rem -1.94rem;
  margin-inline-end: 1.94rem;
}

textarea.form-control, textarea.asColorPicker-input, .select2-container--default textarea.select2-selection--single, .select2-container--default .select2-selection--single textarea.select2-search__field, textarea.typeahead,
textarea.tt-query,
textarea.tt-hint {
  min-height: 2rem;
}

textarea.form-control-sm {
  min-height: 1.75rem;
}

textarea.form-control-lg {
  min-height: 3.175rem;
}

.form-control-color {
  width: 3rem;
  height: auto;
  padding: 0.875rem;
}

.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}

.form-control-color::-moz-color-swatch {
  height: 1em;
  border-radius: 2px;
}

.form-control-color::-webkit-color-swatch {
  height: 1em;
  border-radius: 2px;
}

.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  -moz-padding-start: calc(0.75rem - 3px);
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}

.form-select:focus {
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 0.75rem;
  background-image: none;
}

.form-select:disabled {
  background-color: #e9ecef;
}

.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #212529;
}

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem;
}

.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}

.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.25em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  appearance: none;
  color-adjust: exact;
}

.form-check-input[type="checkbox"] {
  border-radius: 0.25em;
}

.form-check-input[type="radio"] {
  border-radius: 50%;
}

.form-check-input:active {
  filter: brightness(90%);
}

.form-check-input:focus {
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-check-input:checked {
  background-color: #0d6efd;
  border-color: #0d6efd;
}

.form-check-input:checked[type="checkbox"] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}

.form-check-input:checked[type="radio"] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}

.form-check-input[type="checkbox"]:indeterminate {
  background-color: #0d6efd;
  border-color: #0d6efd;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}

.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}

.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  opacity: 0.5;
}

.form-switch {
  padding-left: 2.5em;
}

.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}

.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e");
}

.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.btn-check[disabled] + .btn, .ajax-upload-dragdrop .btn-check[disabled] + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-check[disabled] + .swal2-styled, .btn-check:disabled + .btn, .ajax-upload-dragdrop .btn-check:disabled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-check:disabled + .swal2-styled {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  appearance: none;
}

.form-range:focus {
  outline: 0;
}

.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-range::-moz-focus-outer {
  border: 0;
}

.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #0d6efd;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    transition: none;
  }
}

.form-range::-webkit-slider-thumb:active {
  background-color: #b6d4fe;
}

.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #0d6efd;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    transition: none;
  }
}

.form-range::-moz-range-thumb:active {
  background-color: #b6d4fe;
}

.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.form-range:disabled {
  pointer-events: none;
}

.form-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.form-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.form-floating {
  position: relative;
}

.form-floating > .form-control, .form-floating > .asColorPicker-input, .dataTables_wrapper .form-floating > select, .select2-container--default .form-floating > .select2-selection--single, .select2-container--default .select2-selection--single .form-floating > .select2-search__field, .form-floating > .typeahead,
.form-floating > .tt-query,
.form-floating > .tt-hint,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}

.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 1rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}

.form-floating > .form-control, .form-floating > .asColorPicker-input, .dataTables_wrapper .form-floating > select, .select2-container--default .form-floating > .select2-selection--single, .select2-container--default .select2-selection--single .form-floating > .select2-search__field, .form-floating > .typeahead,
.form-floating > .tt-query,
.form-floating > .tt-hint {
  padding: 1rem 0.75rem;
}

.form-floating > .form-control::placeholder, .form-floating > .asColorPicker-input::placeholder, .dataTables_wrapper .form-floating > select::placeholder, .select2-container--default .form-floating > .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .form-floating > .select2-search__field::placeholder, .form-floating > .typeahead::placeholder,
.form-floating > .tt-query::placeholder,
.form-floating > .tt-hint::placeholder {
  color: transparent;
}

.form-floating > .form-control:focus, .form-floating > .asColorPicker-input:focus, .dataTables_wrapper .form-floating > select:focus, .select2-container--default .form-floating > .select2-selection--single:focus, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:focus, .form-floating > .typeahead:focus,
.form-floating > .tt-query:focus,
.form-floating > .tt-hint:focus, .form-floating > .form-control:not(:placeholder-shown), .form-floating > .asColorPicker-input:not(:placeholder-shown), .dataTables_wrapper .form-floating > select:not(:placeholder-shown), .select2-container--default .form-floating > .select2-selection--single:not(:placeholder-shown), .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:placeholder-shown), .form-floating > .typeahead:not(:placeholder-shown),
.form-floating > .tt-query:not(:placeholder-shown),
.form-floating > .tt-hint:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating > .form-control:-webkit-autofill, .form-floating > .asColorPicker-input:-webkit-autofill, .dataTables_wrapper .form-floating > select:-webkit-autofill, .select2-container--default .form-floating > .select2-selection--single:-webkit-autofill, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:-webkit-autofill, .form-floating > .typeahead:-webkit-autofill,
.form-floating > .tt-query:-webkit-autofill,
.form-floating > .tt-hint:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating > .form-control:focus ~ label, .form-floating > .asColorPicker-input:focus ~ label, .dataTables_wrapper .form-floating > select:focus ~ label, .select2-container--default .form-floating > .select2-selection--single:focus ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:focus ~ label, .form-floating > .typeahead:focus ~ label, .form-floating > .tt-query:focus ~ label, .form-floating > .tt-hint:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .asColorPicker-input:not(:placeholder-shown) ~ label,
.dataTables_wrapper .form-floating > select:not(:placeholder-shown) ~ label,
.select2-container--default .form-floating > .select2-selection--single:not(:placeholder-shown) ~ label,
.select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:placeholder-shown) ~ label,
.form-floating > .typeahead:not(:placeholder-shown) ~ label,
.form-floating > .tt-query:not(:placeholder-shown) ~ label,
.form-floating > .tt-hint:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.form-floating > .form-control:-webkit-autofill ~ label, .form-floating > .asColorPicker-input:-webkit-autofill ~ label, .dataTables_wrapper .form-floating > select:-webkit-autofill ~ label, .select2-container--default .form-floating > .select2-selection--single:-webkit-autofill ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:-webkit-autofill ~ label, .form-floating > .typeahead:-webkit-autofill ~ label, .form-floating > .tt-query:-webkit-autofill ~ label, .form-floating > .tt-hint:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.input-group, .asColorPicker-wrap {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control, .asColorPicker-wrap > .form-control, .input-group > .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input, .dataTables_wrapper .input-group > select, .dataTables_wrapper .asColorPicker-wrap > select, .select2-container--default .input-group > .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field, .input-group > .typeahead, .asColorPicker-wrap > .typeahead,
.input-group > .tt-query,
.asColorPicker-wrap > .tt-query,
.input-group > .tt-hint,
.asColorPicker-wrap > .tt-hint,
.input-group > .form-select,
.asColorPicker-wrap > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}

.input-group > .form-control:focus, .asColorPicker-wrap > .form-control:focus, .input-group > .asColorPicker-input:focus, .asColorPicker-wrap > .asColorPicker-input:focus, .dataTables_wrapper .input-group > select:focus, .dataTables_wrapper .asColorPicker-wrap > select:focus, .select2-container--default .input-group > .select2-selection--single:focus, .select2-container--default .asColorPicker-wrap > .select2-selection--single:focus, .select2-container--default .select2-selection--single .input-group > .select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:focus, .input-group > .typeahead:focus, .asColorPicker-wrap > .typeahead:focus,
.input-group > .tt-query:focus,
.asColorPicker-wrap > .tt-query:focus,
.input-group > .tt-hint:focus,
.asColorPicker-wrap > .tt-hint:focus,
.input-group > .form-select:focus,
.asColorPicker-wrap > .form-select:focus {
  z-index: 3;
}

.input-group .btn, .asColorPicker-wrap .btn, .input-group .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .input-group .ajax-file-upload, .asColorPicker-wrap .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap .ajax-file-upload, .input-group .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group .swal2-styled, .asColorPicker-wrap .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap .swal2-styled {
  position: relative;
  z-index: 2;
}

.input-group .btn:focus, .asColorPicker-wrap .btn:focus, .input-group .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .input-group .ajax-file-upload:focus, .asColorPicker-wrap .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .asColorPicker-wrap .ajax-file-upload:focus, .input-group .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .input-group .swal2-styled:focus, .asColorPicker-wrap .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap .swal2-styled:focus {
  z-index: 3;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1;
  color: #212529;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 2px;
}

.input-group-lg > .form-control, .input-group-lg > .asColorPicker-input, .dataTables_wrapper .input-group-lg > select, .select2-container--default .input-group-lg > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field, .input-group-lg > .typeahead,
.input-group-lg > .tt-query,
.input-group-lg > .tt-hint,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn,
.ajax-upload-dragdrop .input-group-lg > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-lg > .swal2-styled {
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control, .input-group-sm > .asColorPicker-input, .dataTables_wrapper .input-group-sm > select, .select2-container--default .input-group-sm > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field, .input-group-sm > .typeahead,
.input-group-sm > .tt-query,
.input-group-sm > .tt-hint,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn,
.ajax-upload-dragdrop .input-group-sm > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-sm > .swal2-styled {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu), .asColorPicker-wrap:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3),
.asColorPicker-wrap:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group.has-validation > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu), .has-validation.asColorPicker-wrap > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4),
.has-validation.asColorPicker-wrap > .dropdown-toggle:nth-last-child(n + 4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback), .asColorPicker-wrap > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #198754;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .was-validated .asColorPicker-input:valid, .was-validated .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated select:valid, .was-validated .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid, .was-validated .typeahead:valid,
.was-validated .tt-query:valid,
.was-validated .tt-hint:valid, .form-control.is-valid, .is-valid.asColorPicker-input, .dataTables_wrapper select.is-valid, .select2-container--default .is-valid.select2-selection--single, .select2-container--default .select2-selection--single .is-valid.select2-search__field, .is-valid.typeahead,
.is-valid.tt-query,
.is-valid.tt-hint {
  border-color: #198754;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus, .was-validated .asColorPicker-input:valid:focus, .was-validated .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated select:valid:focus, .was-validated .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .select2-selection--single:valid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid:focus, .was-validated .typeahead:valid:focus,
.was-validated .tt-query:valid:focus,
.was-validated .tt-hint:valid:focus, .form-control.is-valid:focus, .is-valid.asColorPicker-input:focus, .dataTables_wrapper select.is-valid:focus, .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .is-valid.typeahead:focus,
.is-valid.tt-query:focus,
.is-valid.tt-hint:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:valid, .was-validated textarea.asColorPicker-input:valid, .was-validated .select2-container--default textarea.select2-selection--single:valid, .select2-container--default .was-validated textarea.select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:valid, .was-validated textarea.typeahead:valid,
.was-validated textarea.tt-query:valid,
.was-validated textarea.tt-hint:valid, textarea.form-control.is-valid, textarea.is-valid.asColorPicker-input, .select2-container--default textarea.is-valid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-valid.select2-search__field, textarea.is-valid.typeahead,
textarea.is-valid.tt-query,
textarea.is-valid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754;
}

.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #198754;
}

.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: #198754;
}

.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #198754;
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: .5em;
}

.was-validated .input-group .form-control:valid, .was-validated .asColorPicker-wrap .form-control:valid, .was-validated .input-group .asColorPicker-input:valid, .was-validated .asColorPicker-wrap .asColorPicker-input:valid, .was-validated .input-group .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated .input-group select:valid, .was-validated .asColorPicker-wrap .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated .asColorPicker-wrap select:valid, .was-validated .input-group .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .input-group .select2-selection--single:valid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:valid, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:valid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:valid, .was-validated .input-group .typeahead:valid, .was-validated .asColorPicker-wrap .typeahead:valid,
.was-validated .input-group .tt-query:valid,
.was-validated .asColorPicker-wrap .tt-query:valid,
.was-validated .input-group .tt-hint:valid,
.was-validated .asColorPicker-wrap .tt-hint:valid, .input-group .form-control.is-valid, .asColorPicker-wrap .form-control.is-valid, .input-group .is-valid.asColorPicker-input, .asColorPicker-wrap .is-valid.asColorPicker-input, .input-group .dataTables_wrapper select.is-valid, .dataTables_wrapper .input-group select.is-valid, .asColorPicker-wrap .dataTables_wrapper select.is-valid, .dataTables_wrapper .asColorPicker-wrap select.is-valid, .input-group .select2-container--default .is-valid.select2-selection--single, .select2-container--default .input-group .is-valid.select2-selection--single, .asColorPicker-wrap .select2-container--default .is-valid.select2-selection--single, .select2-container--default .asColorPicker-wrap .is-valid.select2-selection--single, .input-group .select2-container--default .select2-selection--single .is-valid.select2-search__field, .select2-container--default .select2-selection--single .input-group .is-valid.select2-search__field, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-valid.select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-valid.select2-search__field, .input-group .is-valid.typeahead, .asColorPicker-wrap .is-valid.typeahead,
.input-group .is-valid.tt-query,
.asColorPicker-wrap .is-valid.tt-query,
.input-group .is-valid.tt-hint,
.asColorPicker-wrap .is-valid.tt-hint, .was-validated .input-group .form-select:valid, .was-validated .asColorPicker-wrap .form-select:valid,
.input-group .form-select.is-valid,
.asColorPicker-wrap .form-select.is-valid {
  z-index: 1;
}

.was-validated .input-group .form-control:valid:focus, .was-validated .asColorPicker-wrap .form-control:valid:focus, .was-validated .input-group .asColorPicker-input:valid:focus, .was-validated .asColorPicker-wrap .asColorPicker-input:valid:focus, .was-validated .input-group .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated .input-group select:valid:focus, .was-validated .asColorPicker-wrap .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated .asColorPicker-wrap select:valid:focus, .was-validated .input-group .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .input-group .select2-selection--single:valid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:valid:focus, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:valid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:valid:focus, .was-validated .input-group .typeahead:valid:focus, .was-validated .asColorPicker-wrap .typeahead:valid:focus,
.was-validated .input-group .tt-query:valid:focus,
.was-validated .asColorPicker-wrap .tt-query:valid:focus,
.was-validated .input-group .tt-hint:valid:focus,
.was-validated .asColorPicker-wrap .tt-hint:valid:focus, .input-group .form-control.is-valid:focus, .asColorPicker-wrap .form-control.is-valid:focus, .input-group .is-valid.asColorPicker-input:focus, .asColorPicker-wrap .is-valid.asColorPicker-input:focus, .input-group .dataTables_wrapper select.is-valid:focus, .dataTables_wrapper .input-group select.is-valid:focus, .asColorPicker-wrap .dataTables_wrapper select.is-valid:focus, .dataTables_wrapper .asColorPicker-wrap select.is-valid:focus, .input-group .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .input-group .is-valid.select2-selection--single:focus, .asColorPicker-wrap .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .asColorPicker-wrap .is-valid.select2-selection--single:focus, .input-group .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .select2-container--default .select2-selection--single .input-group .is-valid.select2-search__field:focus, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-valid.select2-search__field:focus, .input-group .is-valid.typeahead:focus, .asColorPicker-wrap .is-valid.typeahead:focus,
.input-group .is-valid.tt-query:focus,
.asColorPicker-wrap .is-valid.tt-query:focus,
.input-group .is-valid.tt-hint:focus,
.asColorPicker-wrap .is-valid.tt-hint:focus, .was-validated .input-group .form-select:valid:focus, .was-validated .asColorPicker-wrap .form-select:valid:focus,
.input-group .form-select.is-valid:focus,
.asColorPicker-wrap .form-select.is-valid:focus {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .was-validated .asColorPicker-input:invalid, .was-validated .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated select:invalid, .was-validated .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid, .was-validated .typeahead:invalid,
.was-validated .tt-query:invalid,
.was-validated .tt-hint:invalid, .form-control.is-invalid, .is-invalid.asColorPicker-input, .dataTables_wrapper select.is-invalid, .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .is-invalid.typeahead,
.is-invalid.tt-query,
.is-invalid.tt-hint {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .was-validated .asColorPicker-input:invalid:focus, .was-validated .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated select:invalid:focus, .was-validated .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .select2-selection--single:invalid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid:focus, .was-validated .typeahead:invalid:focus,
.was-validated .tt-query:invalid:focus,
.was-validated .tt-hint:invalid:focus, .form-control.is-invalid:focus, .is-invalid.asColorPicker-input:focus, .dataTables_wrapper select.is-invalid:focus, .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .is-invalid.typeahead:focus,
.is-invalid.tt-query:focus,
.is-invalid.tt-hint:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, .was-validated textarea.asColorPicker-input:invalid, .was-validated .select2-container--default textarea.select2-selection--single:invalid, .select2-container--default .was-validated textarea.select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:invalid, .was-validated textarea.typeahead:invalid,
.was-validated textarea.tt-query:invalid,
.was-validated textarea.tt-hint:invalid, textarea.form-control.is-invalid, textarea.is-invalid.asColorPicker-input, .select2-container--default textarea.is-invalid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-invalid.select2-search__field, textarea.is-invalid.typeahead,
textarea.is-invalid.tt-query,
textarea.is-invalid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  padding-right: 4.125rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 2.25rem;
  background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: #dc3545;
}

.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: .5em;
}

.was-validated .input-group .form-control:invalid, .was-validated .asColorPicker-wrap .form-control:invalid, .was-validated .input-group .asColorPicker-input:invalid, .was-validated .asColorPicker-wrap .asColorPicker-input:invalid, .was-validated .input-group .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated .input-group select:invalid, .was-validated .asColorPicker-wrap .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated .asColorPicker-wrap select:invalid, .was-validated .input-group .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .input-group .select2-selection--single:invalid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:invalid, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:invalid, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:invalid, .was-validated .input-group .typeahead:invalid, .was-validated .asColorPicker-wrap .typeahead:invalid,
.was-validated .input-group .tt-query:invalid,
.was-validated .asColorPicker-wrap .tt-query:invalid,
.was-validated .input-group .tt-hint:invalid,
.was-validated .asColorPicker-wrap .tt-hint:invalid, .input-group .form-control.is-invalid, .asColorPicker-wrap .form-control.is-invalid, .input-group .is-invalid.asColorPicker-input, .asColorPicker-wrap .is-invalid.asColorPicker-input, .input-group .dataTables_wrapper select.is-invalid, .dataTables_wrapper .input-group select.is-invalid, .asColorPicker-wrap .dataTables_wrapper select.is-invalid, .dataTables_wrapper .asColorPicker-wrap select.is-invalid, .input-group .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .input-group .is-invalid.select2-selection--single, .asColorPicker-wrap .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .asColorPicker-wrap .is-invalid.select2-selection--single, .input-group .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .select2-container--default .select2-selection--single .input-group .is-invalid.select2-search__field, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-invalid.select2-search__field, .input-group .is-invalid.typeahead, .asColorPicker-wrap .is-invalid.typeahead,
.input-group .is-invalid.tt-query,
.asColorPicker-wrap .is-invalid.tt-query,
.input-group .is-invalid.tt-hint,
.asColorPicker-wrap .is-invalid.tt-hint, .was-validated .input-group .form-select:invalid, .was-validated .asColorPicker-wrap .form-select:invalid,
.input-group .form-select.is-invalid,
.asColorPicker-wrap .form-select.is-invalid {
  z-index: 2;
}

.was-validated .input-group .form-control:invalid:focus, .was-validated .asColorPicker-wrap .form-control:invalid:focus, .was-validated .input-group .asColorPicker-input:invalid:focus, .was-validated .asColorPicker-wrap .asColorPicker-input:invalid:focus, .was-validated .input-group .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated .input-group select:invalid:focus, .was-validated .asColorPicker-wrap .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated .asColorPicker-wrap select:invalid:focus, .was-validated .input-group .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .input-group .select2-selection--single:invalid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .asColorPicker-wrap .select2-selection--single:invalid:focus, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:invalid:focus, .was-validated .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .asColorPicker-wrap .select2-search__field:invalid:focus, .was-validated .input-group .typeahead:invalid:focus, .was-validated .asColorPicker-wrap .typeahead:invalid:focus,
.was-validated .input-group .tt-query:invalid:focus,
.was-validated .asColorPicker-wrap .tt-query:invalid:focus,
.was-validated .input-group .tt-hint:invalid:focus,
.was-validated .asColorPicker-wrap .tt-hint:invalid:focus, .input-group .form-control.is-invalid:focus, .asColorPicker-wrap .form-control.is-invalid:focus, .input-group .is-invalid.asColorPicker-input:focus, .asColorPicker-wrap .is-invalid.asColorPicker-input:focus, .input-group .dataTables_wrapper select.is-invalid:focus, .dataTables_wrapper .input-group select.is-invalid:focus, .asColorPicker-wrap .dataTables_wrapper select.is-invalid:focus, .dataTables_wrapper .asColorPicker-wrap select.is-invalid:focus, .input-group .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .input-group .is-invalid.select2-selection--single:focus, .asColorPicker-wrap .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .asColorPicker-wrap .is-invalid.select2-selection--single:focus, .input-group .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .select2-container--default .select2-selection--single .input-group .is-invalid.select2-search__field:focus, .asColorPicker-wrap .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap .is-invalid.select2-search__field:focus, .input-group .is-invalid.typeahead:focus, .asColorPicker-wrap .is-invalid.typeahead:focus,
.input-group .is-invalid.tt-query:focus,
.asColorPicker-wrap .is-invalid.tt-query:focus,
.input-group .is-invalid.tt-hint:focus,
.asColorPicker-wrap .is-invalid.tt-hint:focus, .was-validated .input-group .form-select:invalid:focus, .was-validated .asColorPicker-wrap .form-select:invalid:focus,
.input-group .form-select.is-invalid:focus,
.asColorPicker-wrap .form-select.is-invalid:focus {
  z-index: 3;
}

.btn, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
  display: inline-block;
  font-weight: 400;
  line-height: 1;
  color: #1F1F1F;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.875rem 1.5rem;
  font-size: 0.875rem;
  border-radius: 0.1875rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
    transition: none;
  }
}

.btn:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover {
  color: #1F1F1F;
}

.btn-check:focus + .btn, .ajax-upload-dragdrop .btn-check:focus + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-check:focus + .swal2-styled, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.btn:disabled, .ajax-upload-dragdrop .ajax-file-upload:disabled, .swal2-modal .swal2-buttonswrapper .swal2-styled:disabled, .btn.disabled, .ajax-upload-dragdrop .disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .disabled.swal2-styled,
fieldset:disabled .btn,
fieldset:disabled .ajax-upload-dragdrop .ajax-file-upload,
.ajax-upload-dragdrop fieldset:disabled .ajax-file-upload,
fieldset:disabled .swal2-modal .swal2-buttonswrapper .swal2-styled,
.swal2-modal .swal2-buttonswrapper fieldset:disabled .swal2-styled {
  pointer-events: none;
  opacity: 0.65;
}

.btn-primary {
  color: #fff;
  background-color: #1F3BB3;
  border-color: #1F3BB3;
}

.btn-primary:hover {
  color: #fff;
  background-color: #1a3298;
  border-color: #192f8f;
}

.btn-check:focus + .btn-primary, .btn-primary:focus {
  color: #fff;
  background-color: #1a3298;
  border-color: #192f8f;
  box-shadow: 0 0 0 0.25rem rgba(65, 88, 190, 0.5);
}

.btn-check:checked + .btn-primary,
.btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #192f8f;
  border-color: #172c86;
}

.btn-check:checked + .btn-primary:focus,
.btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(65, 88, 190, 0.5);
}

.btn-primary:disabled, .btn-primary.disabled {
  color: #fff;
  background-color: #1F3BB3;
  border-color: #1F3BB3;
}

.btn-secondary {
  color: #000;
  background-color: #F1F1F1;
  border-color: #F1F1F1;
}

.btn-secondary:hover {
  color: #000;
  background-color: #f3f3f3;
  border-color: #f2f2f2;
}

.btn-check:focus + .btn-secondary, .btn-secondary:focus {
  color: #000;
  background-color: #f3f3f3;
  border-color: #f2f2f2;
  box-shadow: 0 0 0 0.25rem rgba(205, 205, 205, 0.5);
}

.btn-check:checked + .btn-secondary,
.btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active,
.show > .btn-secondary.dropdown-toggle {
  color: #000;
  background-color: #f4f4f4;
  border-color: #f2f2f2;
}

.btn-check:checked + .btn-secondary:focus,
.btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(205, 205, 205, 0.5);
}

.btn-secondary:disabled, .btn-secondary.disabled {
  color: #000;
  background-color: #F1F1F1;
  border-color: #F1F1F1;
}

.btn-success {
  color: #000;
  background-color: #34B1AA;
  border-color: #34B1AA;
}

.btn-success:hover {
  color: #000;
  background-color: #52bdb7;
  border-color: #48b9b3;
}

.btn-check:focus + .btn-success, .btn-success:focus {
  color: #000;
  background-color: #52bdb7;
  border-color: #48b9b3;
  box-shadow: 0 0 0 0.25rem rgba(44, 150, 145, 0.5);
}

.btn-check:checked + .btn-success,
.btn-check:active + .btn-success, .btn-success:active, .btn-success.active,
.show > .btn-success.dropdown-toggle {
  color: #000;
  background-color: #5dc1bb;
  border-color: #48b9b3;
}

.btn-check:checked + .btn-success:focus,
.btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(44, 150, 145, 0.5);
}

.btn-success:disabled, .btn-success.disabled {
  color: #000;
  background-color: #34B1AA;
  border-color: #34B1AA;
}

.btn-info {
  color: #000;
  background-color: #52CDFF;
  border-color: #52CDFF;
}

.btn-info:hover {
  color: #000;
  background-color: #6cd5ff;
  border-color: #63d2ff;
}

.btn-check:focus + .btn-info, .btn-info:focus {
  color: #000;
  background-color: #6cd5ff;
  border-color: #63d2ff;
  box-shadow: 0 0 0 0.25rem rgba(70, 174, 217, 0.5);
}

.btn-check:checked + .btn-info,
.btn-check:active + .btn-info, .btn-info:active, .btn-info.active,
.show > .btn-info.dropdown-toggle {
  color: #000;
  background-color: #75d7ff;
  border-color: #63d2ff;
}

.btn-check:checked + .btn-info:focus,
.btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(70, 174, 217, 0.5);
}

.btn-info:disabled, .btn-info.disabled {
  color: #000;
  background-color: #52CDFF;
  border-color: #52CDFF;
}

.btn-warning {
  color: #000;
  background-color: #ffaf00;
  border-color: #ffaf00;
}

.btn-warning:hover {
  color: #000;
  background-color: #ffbb26;
  border-color: #ffb71a;
}

.btn-check:focus + .btn-warning, .btn-warning:focus {
  color: #000;
  background-color: #ffbb26;
  border-color: #ffb71a;
  box-shadow: 0 0 0 0.25rem rgba(217, 149, 0, 0.5);
}

.btn-check:checked + .btn-warning,
.btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active,
.show > .btn-warning.dropdown-toggle {
  color: #000;
  background-color: #ffbf33;
  border-color: #ffb71a;
}

.btn-check:checked + .btn-warning:focus,
.btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(217, 149, 0, 0.5);
}

.btn-warning:disabled, .btn-warning.disabled {
  color: #000;
  background-color: #ffaf00;
  border-color: #ffaf00;
}

.btn-danger {
  color: #000;
  background-color: #F95F53;
  border-color: #F95F53;
}

.btn-danger:hover {
  color: #000;
  background-color: #fa776d;
  border-color: #fa6f64;
}

.btn-check:focus + .btn-danger, .btn-danger:focus {
  color: #000;
  background-color: #fa776d;
  border-color: #fa6f64;
  box-shadow: 0 0 0 0.25rem rgba(212, 81, 71, 0.5);
}

.btn-check:checked + .btn-danger,
.btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active,
.show > .btn-danger.dropdown-toggle {
  color: #000;
  background-color: #fa7f75;
  border-color: #fa6f64;
}

.btn-check:checked + .btn-danger:focus,
.btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(212, 81, 71, 0.5);
}

.btn-danger:disabled, .btn-danger.disabled {
  color: #000;
  background-color: #F95F53;
  border-color: #F95F53;
}

.btn-light {
  color: #000;
  background-color: #fbfbfb;
  border-color: #fbfbfb;
}

.btn-light:hover {
  color: #000;
  background-color: #fcfcfc;
  border-color: #fbfbfb;
}

.btn-check:focus + .btn-light, .btn-light:focus {
  color: #000;
  background-color: #fcfcfc;
  border-color: #fbfbfb;
  box-shadow: 0 0 0 0.25rem rgba(213, 213, 213, 0.5);
}

.btn-check:checked + .btn-light,
.btn-check:active + .btn-light, .btn-light:active, .btn-light.active,
.show > .btn-light.dropdown-toggle {
  color: #000;
  background-color: #fcfcfc;
  border-color: #fbfbfb;
}

.btn-check:checked + .btn-light:focus,
.btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(213, 213, 213, 0.5);
}

.btn-light:disabled, .btn-light.disabled {
  color: #000;
  background-color: #fbfbfb;
  border-color: #fbfbfb;
}

.btn-dark {
  color: #fff;
  background-color: #1E283D;
  border-color: #1E283D;
}

.btn-dark:hover {
  color: #fff;
  background-color: #1a2234;
  border-color: #182031;
}

.btn-check:focus + .btn-dark, .btn-dark:focus {
  color: #fff;
  background-color: #1a2234;
  border-color: #182031;
  box-shadow: 0 0 0 0.25rem rgba(64, 72, 90, 0.5);
}

.btn-check:checked + .btn-dark,
.btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #182031;
  border-color: #171e2e;
}

.btn-check:checked + .btn-dark:focus,
.btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(64, 72, 90, 0.5);
}

.btn-dark:disabled, .btn-dark.disabled {
  color: #fff;
  background-color: #1E283D;
  border-color: #1E283D;
}

.btn-outline-primary {
  color: #1F3BB3;
  border-color: #1F3BB3;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #1F3BB3;
  border-color: #1F3BB3;
}

.btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(31, 59, 179, 0.5);
}

.btn-check:checked + .btn-outline-primary,
.btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
  color: #fff;
  background-color: #1F3BB3;
  border-color: #1F3BB3;
}

.btn-check:checked + .btn-outline-primary:focus,
.btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(31, 59, 179, 0.5);
}

.btn-outline-primary:disabled, .btn-outline-primary.disabled {
  color: #1F3BB3;
  background-color: transparent;
}

.btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  color: #F1F1F1;
  border-color: #F1F1F1;
}

.btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover {
  color: #000;
  background-color: #F1F1F1;
  border-color: #F1F1F1;
}

.btn-check:focus + .btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:focus + .editable-cancel, .btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:focus {
  box-shadow: 0 0 0 0.25rem rgba(241, 241, 241, 0.5);
}

.btn-check:checked + .btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-cancel,
.btn-check:active + .btn-outline-secondary,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-cancel, .btn-outline-secondary:active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:active, .btn-outline-secondary.active, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-cancel, .btn-outline-secondary.dropdown-toggle.show, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-cancel {
  color: #000;
  background-color: #F1F1F1;
  border-color: #F1F1F1;
}

.btn-check:checked + .btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-cancel:focus,
.btn-check:active + .btn-outline-secondary:focus,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-cancel:focus, .btn-outline-secondary:active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:active:focus, .btn-outline-secondary.active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-cancel:focus, .btn-outline-secondary.dropdown-toggle.show:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-cancel:focus {
  box-shadow: 0 0 0 0.25rem rgba(241, 241, 241, 0.5);
}

.btn-outline-secondary:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:disabled, .btn-outline-secondary.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-cancel {
  color: #F1F1F1;
  background-color: transparent;
}

.btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit {
  color: #34B1AA;
  border-color: #34B1AA;
}

.btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover {
  color: #000;
  background-color: #34B1AA;
  border-color: #34B1AA;
}

.btn-check:focus + .btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:focus + .editable-submit, .btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:focus {
  box-shadow: 0 0 0 0.25rem rgba(52, 177, 170, 0.5);
}

.btn-check:checked + .btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-submit,
.btn-check:active + .btn-outline-success,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-submit, .btn-outline-success:active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:active, .btn-outline-success.active, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-submit, .btn-outline-success.dropdown-toggle.show, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-submit {
  color: #000;
  background-color: #34B1AA;
  border-color: #34B1AA;
}

.btn-check:checked + .btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:checked + .editable-submit:focus,
.btn-check:active + .btn-outline-success:focus,
.editable-container.editable-inline .editableform .control-group .editable-buttons .btn-check:active + .editable-submit:focus, .btn-outline-success:active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:active:focus, .btn-outline-success.active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .active.editable-submit:focus, .btn-outline-success.dropdown-toggle.show:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .dropdown-toggle.show.editable-submit:focus {
  box-shadow: 0 0 0 0.25rem rgba(52, 177, 170, 0.5);
}

.btn-outline-success:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:disabled, .btn-outline-success.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-submit {
  color: #34B1AA;
  background-color: transparent;
}

.btn-outline-info {
  color: #52CDFF;
  border-color: #52CDFF;
}

.btn-outline-info:hover {
  color: #000;
  background-color: #52CDFF;
  border-color: #52CDFF;
}

.btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
  box-shadow: 0 0 0 0.25rem rgba(82, 205, 255, 0.5);
}

.btn-check:checked + .btn-outline-info,
.btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
  color: #000;
  background-color: #52CDFF;
  border-color: #52CDFF;
}

.btn-check:checked + .btn-outline-info:focus,
.btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(82, 205, 255, 0.5);
}

.btn-outline-info:disabled, .btn-outline-info.disabled {
  color: #52CDFF;
  background-color: transparent;
}

.btn-outline-warning {
  color: #ffaf00;
  border-color: #ffaf00;
}

.btn-outline-warning:hover {
  color: #000;
  background-color: #ffaf00;
  border-color: #ffaf00;
}

.btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 175, 0, 0.5);
}

.btn-check:checked + .btn-outline-warning,
.btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
  color: #000;
  background-color: #ffaf00;
  border-color: #ffaf00;
}

.btn-check:checked + .btn-outline-warning:focus,
.btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 175, 0, 0.5);
}

.btn-outline-warning:disabled, .btn-outline-warning.disabled {
  color: #ffaf00;
  background-color: transparent;
}

.btn-outline-danger {
  color: #F95F53;
  border-color: #F95F53;
}

.btn-outline-danger:hover {
  color: #000;
  background-color: #F95F53;
  border-color: #F95F53;
}

.btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
  box-shadow: 0 0 0 0.25rem rgba(249, 95, 83, 0.5);
}

.btn-check:checked + .btn-outline-danger,
.btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
  color: #000;
  background-color: #F95F53;
  border-color: #F95F53;
}

.btn-check:checked + .btn-outline-danger:focus,
.btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(249, 95, 83, 0.5);
}

.btn-outline-danger:disabled, .btn-outline-danger.disabled {
  color: #F95F53;
  background-color: transparent;
}

.btn-outline-light {
  color: #fbfbfb;
  border-color: #fbfbfb;
}

.btn-outline-light:hover {
  color: #000;
  background-color: #fbfbfb;
  border-color: #fbfbfb;
}

.btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
  box-shadow: 0 0 0 0.25rem rgba(251, 251, 251, 0.5);
}

.btn-check:checked + .btn-outline-light,
.btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
  color: #000;
  background-color: #fbfbfb;
  border-color: #fbfbfb;
}

.btn-check:checked + .btn-outline-light:focus,
.btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(251, 251, 251, 0.5);
}

.btn-outline-light:disabled, .btn-outline-light.disabled {
  color: #fbfbfb;
  background-color: transparent;
}

.btn-outline-dark {
  color: #1E283D;
  border-color: #1E283D;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #1E283D;
  border-color: #1E283D;
}

.btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
  box-shadow: 0 0 0 0.25rem rgba(30, 40, 61, 0.5);
}

.btn-check:checked + .btn-outline-dark,
.btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
  color: #fff;
  background-color: #1E283D;
  border-color: #1E283D;
}

.btn-check:checked + .btn-outline-dark:focus,
.btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(30, 40, 61, 0.5);
}

.btn-outline-dark:disabled, .btn-outline-dark.disabled {
  color: #1E283D;
  background-color: transparent;
}

.btn-link {
  font-weight: 400;
  color: #0d6efd;
  text-decoration: underline;
}

.btn-link:hover {
  color: #0a58ca;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
}

.btn-lg, .btn-group-lg > .btn, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled {
  padding: 1rem 3rem;
  font-size: 0.875rem;
  border-radius: 0.1875rem;
}

.btn-sm, .btn-group-sm > .btn, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled {
  padding: 0.5rem 0.81rem;
  font-size: 0.812rem;
  border-radius: 0.1875rem;
}

.fade {
  transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
}

.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: 0.125rem;
}

.dropdown-menu-start {
  --bs-position: start;
}

.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}

.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropstart .dropdown-toggle::after {
  display: none;
}

.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #dee2e6;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1rem;
  clear: both;
  font-weight: 400;
  color: #1F1F1F;
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #1e2125;
  background-color: #eaeaf1;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #0d6efd;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #adb5bd;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #1F1F1F;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1rem;
  color: #1F1F1F;
}

.dropdown-menu-dark {
  color: #dee2e6;
  background-color: #343a40;
  border-color: rgba(0, 0, 0, 0.15);
}

.dropdown-menu-dark .dropdown-item {
  color: #dee2e6;
}

.dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.15);
}

.dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
  color: #fff;
  background-color: #0d6efd;
}

.dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
  color: #adb5bd;
}

.dropdown-menu-dark .dropdown-divider {
  border-color: rgba(0, 0, 0, 0.15);
}

.dropdown-menu-dark .dropdown-item-text {
  color: #dee2e6;
}

.dropdown-menu-dark .dropdown-header {
  color: #adb5bd;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn, .ajax-upload-dragdrop .btn-group > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled,
.btn-group-vertical > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled {
  position: relative;
  flex: 1 1 auto;
}

.btn-group > .btn-check:checked + .btn, .ajax-upload-dragdrop .btn-group > .btn-check:checked + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .btn-check:checked + .swal2-styled,
.btn-group > .btn-check:focus + .btn,
.ajax-upload-dragdrop .btn-group > .btn-check:focus + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-check:focus + .swal2-styled,
.btn-group > .btn:hover,
.ajax-upload-dragdrop .btn-group > .ajax-file-upload:hover,
.swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:hover,
.btn-group > .btn:focus,
.ajax-upload-dragdrop .btn-group > .ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:focus,
.btn-group > .btn:active,
.ajax-upload-dragdrop .btn-group > .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:active,
.btn-group > .btn.active,
.ajax-upload-dragdrop .btn-group > .active.ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .active.swal2-styled,
.btn-group-vertical > .btn-check:checked + .btn,
.ajax-upload-dragdrop .btn-group-vertical > .btn-check:checked + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-check:checked + .swal2-styled,
.btn-group-vertical > .btn-check:focus + .btn,
.ajax-upload-dragdrop .btn-group-vertical > .btn-check:focus + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-check:focus + .swal2-styled,
.btn-group-vertical > .btn:hover,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:hover,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:hover,
.btn-group-vertical > .btn:focus,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:focus,
.btn-group-vertical > .btn:active,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:active,
.btn-group-vertical > .btn.active,
.ajax-upload-dragdrop .btn-group-vertical > .active.ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .active.swal2-styled {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.btn-toolbar .input-group, .btn-toolbar .asColorPicker-wrap {
  width: auto;
}

.btn-group > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:last-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:last-child) > .swal2-styled {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:nth-child(n + 3), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:nth-child(n + 3), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:nth-child(n + 3),
.btn-group > :not(.btn-check) + .btn,
.ajax-upload-dragdrop .btn-group > :not(.btn-check) + .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > :not(.btn-check) + .swal2-styled,
.btn-group > .btn-group:not(:first-child) > .btn,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:first-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:first-child) > .swal2-styled {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropend .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled + .dropdown-toggle-split {
  padding-right: 0.6075rem;
  padding-left: 0.6075rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled + .dropdown-toggle-split {
  padding-right: 2.25rem;
  padding-left: 2.25rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}


.btn-group-vertical > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled,
.btn-group-vertical > .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:last-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:last-child) > .swal2-styled {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn ~ .btn, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .btn, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ .btn, .ajax-upload-dragdrop .btn-group-vertical > .btn ~ .ajax-file-upload, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group-vertical > .swal2-styled ~ .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn ~ .swal2-styled, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .ajax-file-upload ~ .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled ~ .swal2-styled,
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:first-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:first-child) > .swal2-styled {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #0d6efd;
  text-decoration: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}

.nav-link:hover, .nav-link:focus {
  color: #0a58ca;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #ebedf2;
}

.nav-tabs .nav-link {
  margin-bottom: -1px;
  background: none;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #ebedf2 #ebedf2 #ebedf2;
  isolation: isolate;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #1F1F1F;
  background-color: #ffffff;
  border-color: #ebedf2 #ebedf2 #ffffff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #0d6efd;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar > .container,
.navbar > .container-fluid, .navbar > .container-sm, .navbar > .container-md, .navbar > .container-lg, .navbar > .container-xl, .navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  text-decoration: none;
  white-space: nowrap;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  transition: box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}

.navbar-toggler:hover {
  text-decoration: none;
}

.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 0.25rem;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-sm .offcanvas-top,
  .navbar-expand-sm .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-sm .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-md .offcanvas-top,
  .navbar-expand-md .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-md .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-lg .offcanvas-top,
  .navbar-expand-lg .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-lg .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-xl .offcanvas-top,
  .navbar-expand-xl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    transform: none;
  }
  .navbar-expand-xxl .offcanvas-top,
  .navbar-expand-xxl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xxl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}

.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-expand .offcanvas-header {
  display: none;
}

.navbar-expand .offcanvas {
  position: inherit;
  bottom: 0;
  z-index: 1000;
  flex-grow: 1;
  visibility: visible !important;
  background-color: transparent;
  border-right: 0;
  border-left: 0;
  transition: none;
  transform: none;
}

.navbar-expand .offcanvas-top,
.navbar-expand .offcanvas-bottom {
  height: auto;
  border-top: 0;
  border-bottom: 0;
}

.navbar-expand .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.55);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.55);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.55);
}

.navbar-light .navbar-text a,
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.55);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.55);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.55);
}

.navbar-dark .navbar-text a,
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid #e3e3e3;
  border-radius: 20px;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}

.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: 1rem 1rem;
}

.card-title {
  margin-bottom: 0.5rem;
}

.card-subtitle {
  margin-top: -0.25rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: 1rem;
}

.card-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid #e3e3e3;
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
  padding: 0.5rem 1rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid #e3e3e3;
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
  margin-left: -0.5rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.5rem;
  margin-left: -0.5rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-group > .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: 1rem 1.25rem;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  background-color: #fff;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}

.accordion-button:not(.collapsed) {
  color: #0c63e4;
  background-color: #e7f1ff;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
}

.accordion-button:not(.collapsed)::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  transform: rotate(-180deg);
}

.accordion-button::after {
  flex-shrink: 0;
  width: 1.25rem;
  height: 1.25rem;
  margin-left: auto;
  content: "";
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 1.25rem;
  transition: transform 0.2s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}

.accordion-button:hover {
  z-index: 2;
}

.accordion-button:focus {
  z-index: 3;
  border-color: #86b7fe;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.accordion-item:first-of-type {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.accordion-item:not(:first-of-type) {
  border-top: 0;
}

.accordion-item:last-of-type {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-body {
  padding: 1rem 1.25rem;
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}

.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.accordion-flush .accordion-item:first-child {
  border-top: 0;
}

.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}

.accordion-flush .accordion-item .accordion-button {
  border-radius: 0;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.56rem 1.13rem;
  margin-bottom: 1rem;
  font-size: 0.812rem;
  list-style: none;
  background-color: transparent;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #6c757d;
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}

.breadcrumb-item.active {
  color: #495057;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  color: #0d6efd;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #dee2e6;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}

.page-link:hover {
  z-index: 2;
  color: #0a58ca;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 3;
  color: #0a58ca;
  background-color: #e9ecef;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
  border-color: #dee2e6;
}

.page-link {
  padding: 0.375rem 0.75rem;
}

.page-item:first-child .page-link {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.35em 0.65em;
  font-size: 0.75em;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
}

.badge:empty {
  display: none;
}

.btn .badge, .ajax-upload-dragdrop .ajax-file-upload .badge, .swal2-modal .swal2-buttonswrapper .swal2-styled .badge {
  position: relative;
  top: -1px;
}

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3rem;
}

.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  color: #13236b;
  background-color: #d2d8f0;
  border-color: #bcc4e8;
}

.alert-primary .alert-link {
  color: #0f1c56;
}

.alert-secondary {
  color: #606060;
  background-color: #fcfcfc;
  border-color: #fbfbfb;
}

.alert-secondary .alert-link {
  color: #4d4d4d;
}

.alert-success {
  color: #1f6a66;
  background-color: #d6efee;
  border-color: #c2e8e6;
}

.alert-success .alert-link {
  color: #195552;
}

.alert-info {
  color: #215266;
  background-color: #dcf5ff;
  border-color: #cbf0ff;
}

.alert-info .alert-link {
  color: #1a4252;
}

.alert-warning {
  color: #664600;
  background-color: #ffefcc;
  border-color: #ffe7b3;
}

.alert-warning .alert-link {
  color: #523800;
}

.alert-danger {
  color: #953932;
  background-color: #fedfdd;
  border-color: #fdcfcb;
}

.alert-danger .alert-link {
  color: #772e28;
}

.alert-light {
  color: #646464;
  background-color: #fefefe;
  border-color: #fefefe;
}

.alert-light .alert-link {
  color: #505050;
}

.alert-dark {
  color: #121825;
  background-color: #d2d4d8;
  border-color: #bcbfc5;
}

.alert-dark .alert-link {
  color: #0e131e;
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #0d6efd;
  transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}

.list-group-numbered > li::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: #212529;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}

.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}

.list-group-item + .list-group-item {
  border-top-width: 0;
}

.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  flex-direction: row;
}

.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}

.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}

.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

.list-group-flush {
  border-radius: 0;
}

.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}

.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #13236b;
  background-color: #d2d8f0;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #13236b;
  background-color: #bdc2d8;
}

.list-group-item-primary.list-group-item-action.active {
  color: #ffffff;
  background-color: #13236b;
  border-color: #13236b;
}

.list-group-item-secondary {
  color: #606060;
  background-color: #fcfcfc;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #606060;
  background-color: #e3e3e3;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #ffffff;
  background-color: #606060;
  border-color: #606060;
}

.list-group-item-success {
  color: #1f6a66;
  background-color: #d6efee;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #1f6a66;
  background-color: #c1d7d6;
}

.list-group-item-success.list-group-item-action.active {
  color: #ffffff;
  background-color: #1f6a66;
  border-color: #1f6a66;
}

.list-group-item-info {
  color: #215266;
  background-color: #dcf5ff;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #215266;
  background-color: #c6dde6;
}

.list-group-item-info.list-group-item-action.active {
  color: #ffffff;
  background-color: #215266;
  border-color: #215266;
}

.list-group-item-warning {
  color: #664600;
  background-color: #ffefcc;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #664600;
  background-color: #e6d7b8;
}

.list-group-item-warning.list-group-item-action.active {
  color: #ffffff;
  background-color: #664600;
  border-color: #664600;
}

.list-group-item-danger {
  color: #953932;
  background-color: #fedfdd;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #953932;
  background-color: #e5c9c7;
}

.list-group-item-danger.list-group-item-action.active {
  color: #ffffff;
  background-color: #953932;
  border-color: #953932;
}

.list-group-item-light {
  color: #646464;
  background-color: #fefefe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #646464;
  background-color: #e5e5e5;
}

.list-group-item-light.list-group-item-action.active {
  color: #ffffff;
  background-color: #646464;
  border-color: #646464;
}

.list-group-item-dark {
  color: #121825;
  background-color: #d2d4d8;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #121825;
  background-color: #bdbfc2;
}

.list-group-item-dark.list-group-item-action.active {
  color: #ffffff;
  background-color: #121825;
  border-color: #121825;
}

.btn-close {
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 8px;
  opacity: 0.5;
}

.btn-close:hover {
  color: #000;
  text-decoration: none;
  opacity: 0.75;
}

.btn-close:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
  opacity: 1;
}

.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.toast.showing {
  opacity: 0;
}

.toast:not(.show) {
  display: none;
}

.toast-container {
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}

.toast-container > :not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.5rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.toast-header .btn-close {
  margin-right: -0.375rem;
  margin-left: 0.75rem;
}

.toast-body {
  padding: 0.75rem;
  word-wrap: break-word;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1055;
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: transform 0.4s ease;
  transform: translate(0, -50px);
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  transform: none;
}

.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - 20px);
}

.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 20px);
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #dee2e6;
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100vw;
  height: 100vh;
  background-color: #000000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.modal-header .btn-close {
  padding: 12.5px 13px;
  margin: -12.5px -13px -12.5px auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 0.9375rem;
}

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  flex-shrink: 0;
  align-items: center;
  justify-content: flex-end;
  padding: 0.6875rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}

.modal-footer > * {
  margin: 0.25rem;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 30px auto;
  }
  .modal-dialog-scrollable {
    height: calc(100% - 60px);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 60px);
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 90%;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}

.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}

.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}

.modal-fullscreen .modal-header {
  border-radius: 0;
}

.modal-fullscreen .modal-body {
  overflow-y: auto;
}

.modal-fullscreen .modal-footer {
  border-radius: 0;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
}

.tooltip {
  position: absolute;
  z-index: 1080;
  display: block;
  margin: 0;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
  bottom: 0;
}

.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
  top: -1px;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
  right: -1px;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
  top: 0;
}

.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
  left: -1px;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.4rem 0.75rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.375rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0 /* rtl:ignore */;
  z-index: 1070;
  display: block;
  max-width: 276px;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .popover-arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
}

.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow {
  bottom: calc(-0.5rem - 1px);
}

.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}

.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow {
  top: calc(-0.5rem - 1px);
}

.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f0f0f0;
}

.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}

.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f0f0f0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 1rem 1rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}

/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}

.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}

.carousel-dark .carousel-caption {
  color: #000;
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg) /* rtl:ignore */;
  }
}

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    animation-duration: 1.5s;
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1045;
  display: flex;
  flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #fff;
  background-clip: padding-box;
  outline: 0;
  transition: transform 0.3s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.offcanvas-backdrop.fade {
  opacity: 0;
}

.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
}

.offcanvas-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin-top: -0.5rem;
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.offcanvas-body {
  flex-grow: 1;
  padding: 1rem 1rem;
  overflow-y: auto;
}

.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(-100%);
}

.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(100%);
}

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(-100%);
}

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(100%);
}

.offcanvas.show {
  transform: none;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentColor;
  opacity: 0.5;
}

.placeholder.btn::before, .ajax-upload-dragdrop .placeholder.ajax-file-upload::before, .swal2-modal .swal2-buttonswrapper .placeholder.swal2-styled::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: .6em;
}

.placeholder-sm {
  min-height: .8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  animation: placeholder-glow 2s ease-in-out infinite;
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}

.placeholder-wave {
  mask-image: linear-gradient(130deg, #000000 55%, rgba(0, 0, 0, 0.8) 75%, #000000 95%);
  mask-size: 200% 100%;
  animation: placeholder-wave 2s linear infinite;
}

@keyframes placeholder-wave {
  100% {
    mask-position: -200% 0%;
  }
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.link-primary {
  color: #1F3BB3;
}

.link-primary:hover, .link-primary:focus {
  color: #192f8f;
}

.link-secondary {
  color: #F1F1F1;
}

.link-secondary:hover, .link-secondary:focus {
  color: #f4f4f4;
}

.link-success {
  color: #34B1AA;
}

.link-success:hover, .link-success:focus {
  color: #5dc1bb;
}

.link-info {
  color: #52CDFF;
}

.link-info:hover, .link-info:focus {
  color: #75d7ff;
}

.link-warning {
  color: #ffaf00;
}

.link-warning:hover, .link-warning:focus {
  color: #ffbf33;
}

.link-danger {
  color: #F95F53;
}

.link-danger:hover, .link-danger:focus {
  color: #fa7f75;
}

.link-light {
  color: #fbfbfb;
}

.link-light:hover, .link-light:focus {
  color: #fcfcfc;
}

.link-dark {
  color: #1E283D;
}

.link-dark:hover, .link-dark:focus {
  color: #182031;
}

.ratio {
  position: relative;
  width: 100%;
}

.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}

.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: calc(3 / 4 * 100%);
}

.ratio-16x9 {
  --bs-aspect-ratio: calc(9 / 16 * 100%);
}

.ratio-21x9 {
  --bs-aspect-ratio: calc(9 / 21 * 100%);
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentColor;
  opacity: 0.25;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex, .loader-demo-box, .data-icon-card-primary .background-icon, .data-icon-card-secondary .background-icon, .data-icon-card-success .background-icon, .data-icon-card-info .background-icon, .data-icon-card-warning .background-icon, .data-icon-card-danger .background-icon, .data-icon-card-light .background-icon, .data-icon-card-dark .background-icon, .list-wrapper ul li, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user, .email-wrapper .mail-list-container .mail-list .details, .email-wrapper .message-body .attachments-sections ul li .thumb, .email-wrapper .message-body .attachments-sections ul li .details .buttons, .swal2-modal, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item {
  display: flex !important;
}

.d-inline-flex, .email-wrapper .message-body .attachments-sections ul li {
  display: inline-flex !important;
}

.d-none, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item.nav-settings {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border, .loader-demo-box {
  border: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: 1px solid #dee2e6 !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: 1px solid #dee2e6 !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #1F3BB3 !important;
}

.border-secondary, .loader-demo-box {
  border-color: #F1F1F1 !important;
}

.border-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  border-color: #34B1AA !important;
}

.border-info {
  border-color: #52CDFF !important;
}

.border-warning {
  border-color: #ffaf00 !important;
}

.border-danger {
  border-color: #F95F53 !important;
}

.border-light {
  border-color: #fbfbfb !important;
}

.border-dark {
  border-color: #1E283D !important;
}

.border-white {
  border-color: #ffffff !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row, .email-wrapper .message-body .attachments-sections ul li, .navbar .navbar-menu-wrapper .navbar-nav {
  flex-direction: row !important;
}

.flex-column, .nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom, .nav-pills.nav-pills-vertical, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.justify-content-start, .list-wrapper ul li {
  justify-content: flex-start !important;
}

.justify-content-end, .data-icon-card-primary .background-icon, .data-icon-card-secondary .background-icon, .data-icon-card-success .background-icon, .data-icon-card-info .background-icon, .data-icon-card-warning .background-icon, .data-icon-card-danger .background-icon, .data-icon-card-light .background-icon, .data-icon-card-dark .background-icon, .email-wrapper .mail-list-container .mail-list .details {
  justify-content: flex-end !important;
}

.justify-content-center, .email-wrapper .message-body .attachments-sections ul li .thumb {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center, .loader-demo-box, .list-wrapper ul li, .email-wrapper .message-body .attachments-sections ul li .thumb, .email-wrapper .message-body .attachments-sections ul li .details .buttons, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch, .email-wrapper .message-body .attachments-sections ul li, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0, .demo-modal .modal-dialog {
  margin-top: 0 !important;
}

.mt-1, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  margin-top: 0.25rem !important;
}

.mt-2, .template-demo > .btn-group,
.template-demo > .btn-group-vertical, .template-demo .circle-progress {
  margin-top: 0.5rem !important;
}

.mt-3, .template-demo > .btn, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .template-demo > .btn-toolbar {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0, .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles, .rtl .settings-panel .events i {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2, .template-demo > .btn, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .template-demo > .btn-group,
.template-demo > .btn-group-vertical, .template-demo > .dropdown {
  margin-right: 0.5rem !important;
}

.me-3, .template-demo > .btn-toolbar {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3, .template-demo .circle-progress-block {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0, .rtl .preview-list .preview-item .preview-thumbnail .preview-icon i {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2, .btn-toolbar .btn-group + .btn-group, .rtl .settings-panel .events i {
  margin-left: 0.5rem !important;
}

.ms-3, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2, .template-demo .circle-progress-block {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
  font-size: 1.25rem !important;
}

.fs-6 {
  font-size: 1rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted, .preview-list .preview-item .preview-item-content p .content-category, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .message_text, .email-wrapper .mail-list-container .mail-list .details .date {
  --bs-text-opacity: 1;
  color: #737F8B !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.bg-primary, .settings-panel .color-tiles .tiles.primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .settings-panel .color-tiles .tiles.success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info, .settings-panel .color-tiles .tiles.info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning, .settings-panel .color-tiles .tiles.warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger, .settings-panel .color-tiles .tiles.danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light, .settings-panel .color-tiles .tiles.light, .settings-panel .color-tiles .tiles.default {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark, .settings-panel .color-tiles .tiles.dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded, .loader-demo-box {
  border-radius: 8px !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: 0.2rem !important;
}

.rounded-2 {
  border-radius: 8px !important;
}

.rounded-3 {
  border-radius: 0.3rem !important;
}

.rounded-circle, .settings-panel .color-tiles .tiles {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-top {
  border-top-left-radius: 8px !important;
  border-top-right-radius: 8px !important;
}

.rounded-end {
  border-top-right-radius: 8px !important;
  border-bottom-right-radius: 8px !important;
}

.rounded-bottom {
  border-bottom-right-radius: 8px !important;
  border-bottom-left-radius: 8px !important;
}

.rounded-start {
  border-bottom-left-radius: 8px !important;
  border-top-left-radius: 8px !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex, .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item.nav-settings {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.5rem !important;
  }
  .fs-2 {
    font-size: 2rem !important;
  }
  .fs-3 {
    font-size: 1.75rem !important;
  }
  .fs-4 {
    font-size: 1.5rem !important;
  }
}

@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}

/*-------------------------------------------------------------------*/
/* === Template mixins === */
/* Miscellaneous Mixins */
.list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .sender-name, .email-wrapper .message-body .attachments-sections ul li .details p.file-name, .settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

.list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .sender-name, .email-wrapper .message-body .attachments-sections ul li .details p.file-name, .settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

/* Animation Mixins */
@keyframes dropdownAnimation {
  from {
    opacity: 0;
    transform: translate3d(0, -30px, 0);
  }
  to {
    opacity: 1;
    transform: none;
    transform: translate3d(0, 0px, 0);
  }
}

.dropdownAnimation, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  animation-name: dropdownAnimation;
  -webkit-animation-duration: 0.25s;
  -moz-animation-duration: 0.25s;
  -ms-animation-duration: 0.25s;
  -o-animation-duration: 0.25s;
  animation-duration: 0.25s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

.fadeOut {
  animation-name: fadeOut;
}

.infinite-spin, #settings-trigger i {
  animation-name: spin;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInUp, #settings-trigger {
  animation-name: fadeInUp;
}

/*-------------------------------------------------------------------*/
/* === Core Styles === */
/* Reset Styles */
body {
  padding: 0;
  margin: 0;
  overflow-x: hidden;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  outline: 0;
}

a,
div, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5,
p,
span {
  text-shadow: none;
}

[type=button]:focus,
a:active,
a:focus,
a:visited,
button::-moz-focus-inner,
input[type=reset]::-moz-focus-inner,
input[type=button]::-moz-focus-inner,
input[type=submit]::-moz-focus-inner,
input[type=file] > input[type=button]::-moz-focus-inner,
select::-moz-focus-inner {
  outline: 0;
}

input, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus,
input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
  outline-width: 0;
  outline-color: transparent;
  box-shadow: none;
  outline-style: none;
}

textarea {
  resize: none;
  overflow-x: hidden;
}

.btn, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel,
.btn-group.open .dropdown-toggle,
.btn:active,
.ajax-upload-dragdrop .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .btn:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover,
.btn:visited,
.ajax-upload-dragdrop .ajax-file-upload:visited,
.swal2-modal .swal2-buttonswrapper .swal2-styled:visited,
a,
a:active,
a:checked,
a:focus,
a:hover,
a:visited,
body,
button,
button:active,
button:hover,
button:visited,
div,
input,
input:active,
input:focus,
input:hover,
input:visited,
select,
select:active,
select:focus,
select:visited,
textarea,
textarea:active,
textarea:focus,
textarea:hover,
textarea:visited {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}

.btn.active.focus, .ajax-upload-dragdrop .active.focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .active.focus.swal2-styled,
.btn.active:focus,
.ajax-upload-dragdrop .active.ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .active.swal2-styled:focus,
.btn.focus,
.ajax-upload-dragdrop .focus.ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .focus.swal2-styled,
.btn:active.focus,
.ajax-upload-dragdrop .ajax-file-upload:active.focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active.focus,
.btn:active:focus,
.ajax-upload-dragdrop .ajax-file-upload:active:focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active:focus, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus,
button,
button:active,
button:checked,
button:focus,
button:hover,
button:visited {
  outline: 0;
  outline-offset: 0;
}

.bootstrap-select .dropdown-toggle:focus {
  outline: 0;
  outline-offset: 0;
}

.dropdown-menu > li > a:active,
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:visited {
  outline: 0;
}

a:focus,
input:focus {
  border-color: transparent;
  outline: none;
}

.bg-twitter {
  background: #4747A1;
}

.bg-facebook {
  background: #7DA0FA;
}

.bg-google {
  background: #dc4a38;
}

.bg-linkedin {
  background: #7978E9;
}

.bg-pinterest {
  background: #cc2127;
}

.bg-youtube {
  background: #e52d27;
}

.bg-github {
  background: #333333;
}

.bg-behance {
  background: #1769ff;
}

.bg-dribbble {
  background: #ea4c89;
}

.bg-reddit {
  background: #ff4500;
}

.bg-gradient-primary {
  background: linear-gradient(230deg, #759bff, #843cf6);
}

.bg-gradient-secondary {
  background: linear-gradient(to right, #e7ebf0, #868e96);
}

.bg-gradient-success {
  background: linear-gradient(45deg, #7bffce, #30c93e);
}

.bg-gradient-info {
  background: linear-gradient(to bottom, #0e4cfd, #6a8eff);
}

.bg-gradient-warning {
  background: linear-gradient(135deg, #ffc480, #ff763b);
}

.bg-gradient-danger {
  background: linear-gradient(316deg, #fc5286, #fbaaa2);
}

.bg-gradient-light {
  background: linear-gradient(to right, #cfd9df 0%, #e2ebf0 100%);
}

.bg-gradient-dark {
  background: linear-gradient(to right, #7d7979 0%, #000000 100%);
}

/* Typography */
body {
  font-size: 1rem;
  font-family: "Manrope", sans-serif;
  font-weight: initial;
  line-height: normal;
  -webkit-font-smoothing: antialiased;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-weight: 500;
  line-height: 1;
}

p {
  font-size: 0.812rem;
  margin-bottom: .5rem;
  line-height: 1.3rem;
}

h1, .h1,
.h1 {
  font-size: 3.125rem;
}

h2, .h2,
.h2 {
  font-size: 1.625rem;
}

h3, .h3,
.h3 {
  font-size: 1.525rem;
}

h4, .h4,
.h4 {
  font-size: 1.125rem;
}

h5, .h5,
.h5 {
  font-size: 1rem;
}

h6, .h6,
.h6 {
  font-size: .9375rem;
}

.display-1 {
  font-size: 3.75rem;
}

@media (max-width: 991px) {
  .display-1 {
    font-size: 3rem;
  }
}

.display-2 {
  font-size: 3.125rem;
}

@media (max-width: 991px) {
  .display-2 {
    font-size: 2.5rem;
  }
}

.display-3 {
  font-size: 2.5rem;
}

@media (max-width: 991px) {
  .display-3 {
    font-size: 2rem;
  }
}

.display-4 {
  font-size: 1.875rem;
}

@media (max-width: 991px) {
  .display-4 {
    font-size: 1.5rem;
  }
}

.display-5 {
  font-size: 1.25rem;
}

@media (max-width: 991px) {
  .display-5 {
    font-size: 1rem;
  }
}

.blockquote {
  padding: 1.25rem;
  border: 1px solid #dee2e6;
}

address p {
  margin-bottom: 0;
}

.blockquote-primary {
  border-color: #1F3BB3;
}

.blockquote-primary .blockquote-footer {
  color: #1F3BB3;
}

.blockquote-secondary {
  border-color: #F1F1F1;
}

.blockquote-secondary .blockquote-footer {
  color: #F1F1F1;
}

.blockquote-success {
  border-color: #34B1AA;
}

.blockquote-success .blockquote-footer {
  color: #34B1AA;
}

.blockquote-info {
  border-color: #52CDFF;
}

.blockquote-info .blockquote-footer {
  color: #52CDFF;
}

.blockquote-warning {
  border-color: #ffaf00;
}

.blockquote-warning .blockquote-footer {
  color: #ffaf00;
}

.blockquote-danger {
  border-color: #F95F53;
}

.blockquote-danger .blockquote-footer {
  color: #F95F53;
}

.blockquote-light {
  border-color: #fbfbfb;
}

.blockquote-light .blockquote-footer {
  color: #fbfbfb;
}

.blockquote-dark {
  border-color: #1E283D;
}

.blockquote-dark .blockquote-footer {
  color: #1E283D;
}

.error-page h1, .error-page .h1 {
  font-size: 12rem;
}

@media (max-width: 991px) {
  .error-page h1, .error-page .h1 {
    font-size: 8rem;
  }
}

.text-twitter {
  color: #4747A1;
}

.text-facebook {
  color: #7DA0FA;
}

.text-google {
  color: #dc4a38;
}

.text-linkedin {
  color: #7978E9;
}

.text-pinterest {
  color: #cc2127;
}

.text-youtube {
  color: #e52d27;
}

.text-github {
  color: #333333;
}

.text-behance {
  color: #1769ff;
}

.text-dribbble {
  color: #ea4c89;
}

.text-reddit {
  color: #ff4500;
}

.page-header {
  margin-bottom: 2.5rem;
}

.page-header .page-title {
  margin-bottom: 0;
  line-height: .85;
}

.font-weight-medium {
  font-weight: 600;
}

.font-weight-500 {
  font-weight: 500;
}

/* Miscellanoeous */
body,
html {
  overflow-x: hidden;
  padding-right: 0 !important;
}

*:-moz-full-screen,
*:-webkit-full-screen,
*:fullscreen *:-ms-fullscreen {
  overflow: auto;
}

.container-scroller {
  overflow: hidden;
}

pre {
  background: color(gray-lighter);
  padding: 15px;
  font-size: 14px;
}

code {
  padding: 5px;
  color: #F95F53;
  font-family: "Manrope", sans-serif;
  font-weight: 300;
  font-size: 0.812rem;
  border-radius: 4px;
}

.media {
  display: flex;
}

/* Footer */
.footer {
  background: #F4F5F7;
  color: color(dark);
  padding: 30px 2.45rem;
  transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -webkit-transition: all 0.25s ease;
  -ms-transition: all 0.25s ease;
  font-size: calc(0.812rem - 0.05rem);
  font-family: "Manrope", sans-serif;
  font-weight: 400;
  border-top: 1px solid rgba(0, 0, 0, 0.06);
}

.footer a {
  color: #1F3BB3;
  font-size: inherit;
}

@media (max-width: 991px) {
  .footer {
    margin-left: 0;
    width: 100%;
  }
}

/* Utilities */
.grid-margin {
  margin-bottom: 1.5rem;
}

@media (min-width: 576px) {
  .grid-margin-sm-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 768px) {
  .grid-margin-md-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 992px) {
  .grid-margin-lg-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 1200px) {
  .grid-margin-xl-0 {
    margin-bottom: 0;
  }
}

.img-lg {
  width: 92px;
  height: 92px;
}

.img-sm {
  width: 43px;
  height: 43px;
}

.img-sm.rounded-10 {
  border-radius: 10px;
}

.img-xs {
  width: 32px;
  height: 32px;
}

.img-ss, .settings-panel .color-tiles .tiles {
  width: 26px;
  height: 26px;
}

.stretch-card {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: stretch;
  align-items: stretch;
  -webkit-justify-content: stretch;
  justify-content: stretch;
}

.stretch-card > .card {
  width: 100%;
  min-width: 100%;
}

@media (min-width: 576px) {
  .border-right-sm {
    border-right: 1px solid #dee2e6;
  }
}

@media (min-width: 768px) {
  .border-right-md {
    border-right: 1px solid #dee2e6;
  }
}

@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #dee2e6;
  }
}

@media (min-width: 576px) {
  .border-left-sm {
    border-left: 1px solid #dee2e6;
  }
}

@media (min-width: 768px) {
  .border-left-md {
    border-left: 1px solid #dee2e6;
  }
}

@media (min-width: 992px) {
  .border-left-lg {
    border-left: 1px solid #dee2e6;
  }
}

.text-gray, .card .card-subtitle {
  color: #8c8c8c;
}

.text-black {
  color: #000000;
}

.text-small {
  font-size: 12px;
}

.text-small.ps-4 {
  padding-left: 30px !important;
}

.flex-grow {
  flex-grow: 1;
}

.hover-cursor:hover {
  cursor: pointer;
}

.min-width-cell {
  min-width: 110px;
}

.font-weight-medium {
  font-weight: 500;
}

/* Demo Styles */
.template-demo .slider-wrap {
  height: 100px;
}

.template-demo .progress {
  margin-top: 1.5rem;
}

.template-demo > h2, .template-demo > .h2,
.template-demo > h3,
.template-demo > .h3,
.template-demo > h4,
.template-demo > .h4,
.template-demo > h5,
.template-demo > .h5,
.template-demo > h6,
.template-demo > .h6,
.template-demo > h1,
.template-demo > .h1 {
  border-top: 1px solid #dee2e6;
  padding: 0.5rem 0 0;
}

.template-demo .ul-slider.noUi-horizontal {
  margin-top: 2rem;
}

.template-demo .ul-slider.noUi-vertical {
  margin-right: 2rem;
}

.template-demo > .dropdown {
  display: inline-block;
  margin-bottom: 0.5rem;
}

.template-demo nav .breadcrumb {
  margin-bottom: 1.375rem;
}

.template-demo nav:last-child .breadcrumb {
  margin-bottom: 0;
}

.template-demo .editable-form > .form-group {
  border-bottom: 1px solid #dee2e6;
  padding-bottom: 0.8rem;
  margin-bottom: 0.8rem;
}

.template-demo .circle-progress {
  padding: 15px;
}

.demo-modal {
  position: static;
  display: block;
}

.demo-modal .modal-dialog.modal-lg {
  max-width: 100%;
}

.loader-demo-box {
  width: 100%;
  height: 200px;
}

.dropdown-menu-static-demo {
  height: 250px;
  margin-bottom: 20px;
}

.dropdown-menu-static-demo .dropdown-menu {
  z-index: 0;
}

.rounded-legend ul li {
  list-style-type: none;
  color: #737F8B;
  font-size: .75rem;
}

.rounded-legend ul li .legend-dots {
  width: 1rem;
  height: 1rem;
  border-radius: 100%;
  display: inline-block;
  vertical-align: text-bottom;
  margin-right: .5rem;
}

.rtl .rounded-legend ul li .legend-dots {
  margin-left: .5rem;
}

.rounded-legend.legend-horizontal {
  display: -webkit-flex;
  display: flex;
}

.rounded-legend.legend-horizontal ul li {
  display: inline-block;
  margin-right: 1.5rem;
}

.rtl .rounded-legend.legend-horizontal ul li {
  margin-right: auto;
  margin-left: 1.5rem;
}

.rounded-legend.legend-top-right ul {
  float: right;
}

.rtl .rounded-legend.legend-top-right ul {
  float: left;
}

.rounded-legend.legend-vertical ul li {
  margin-top: 1rem;
}

.demo-chart {
  height: 300px;
}

@media (max-width: 767px) {
  .demo-chart {
    height: 200px;
  }
}

.documentation {
  padding-top: 0;
  max-width: 100%;
}

.documentation .content-wrapper {
  padding-top: 0;
  min-height: calc(100vh - 75px);
}

.doc-table-contents,
.doc-header {
  position: fixed;
}

.doc-header {
  padding-top: 16px;
  padding-bottom: 16px;
  z-index: 10;
  background: #F4F5F7;
}

.doc-content {
  padding-top: 157px;
}

.doc-table-contents {
  overflow: auto;
  max-height: calc(100% - 157px);
}

.doc-table-contents ul li {
  margin-top: 10px;
}

.doc-credits ul li {
  margin-bottom: 10px;
}

.doc-credits ul li a {
  margin-left: .25rem;
}

.demo-vector-map {
  width: 100%;
  height: 500px;
}

.sparkline-demo-chart canvas {
  max-width: 100%;
}

.performance-overview-carousel .carousel-inner .item::after {
  content: '';
  width: 1px;
  height: 60px;
  background: #52CDFF;
  position: absolute;
  right: 0;
  top: 25%;
}

@media (max-width: 767px) {
  .performance-overview-carousel .carousel-inner .item::after {
    display: none;
  }
}

.performance-overview-carousel .carousel-inner .item .icon::before {
  position: absolute;
  z-index: -1;
}

.performance-overview-carousel .carousel-inner .item .icon.icon-a::before {
  content: url("../../images/dashboard/shape-1.svg");
}

.performance-overview-carousel .carousel-inner .item .icon.icon-b::before {
  content: url("../../images/dashboard/shape-1.svg");
}

.performance-overview-carousel .carousel-inner .item .icon.icon-c::before {
  content: url("../../images/dashboard/shape-3.svg");
}

.performance-overview-carousel .carousel-control-prev,
.performance-overview-carousel .carousel-control-next {
  top: 1.3rem;
  width: 1.875rem;
  height: 1.875rem;
  background: #3698fc;
  border-radius: 0.375rem;
  opacity: 1;
}

.performance-overview-carousel .carousel-control-prev:hover,
.performance-overview-carousel .carousel-control-next:hover {
  opacity: .7;
}

.performance-overview-carousel .carousel-control-prev {
  left: auto;
  right: 4rem;
}

.performance-overview-carousel .carousel-control-prev .carousel-control-prev-icon {
  background-image: none;
}

.performance-overview-carousel .carousel-control-prev:after {
  font-family: "themify";
  content: '\e64a';
  font-size: .875rem;
  color: #ffffff;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.performance-overview-carousel .carousel-control-next {
  left: auto;
  right: 1.681rem;
}

.performance-overview-carousel .carousel-control-next .carousel-control-next-icon {
  background-image: none;
}

.performance-overview-carousel .carousel-control-next:after {
  font-family: "themify";
  content: '\e649';
  font-size: .875rem;
  color: #ffffff;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.detailed-report-carousel .carousel-control-prev,
.detailed-report-carousel .carousel-control-next {
  top: 1.3rem;
  width: 1.875rem;
  height: 1.875rem;
  background: #ecedf2;
  border-radius: 0.375rem;
  opacity: 1;
}

.detailed-report-carousel .carousel-control-prev:hover,
.detailed-report-carousel .carousel-control-next:hover {
  opacity: .7;
}

.detailed-report-carousel .carousel-control-prev {
  left: auto;
  right: 4rem;
}

.detailed-report-carousel .carousel-control-prev .carousel-control-prev-icon {
  background-image: none;
}

.detailed-report-carousel .carousel-control-prev:after {
  font-family: "themify";
  content: '\e64a';
  font-size: .875rem;
  color: #6c7383;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.detailed-report-carousel .carousel-control-next {
  left: auto;
  right: 1.681rem;
}

.detailed-report-carousel .carousel-control-next .carousel-control-next-icon {
  background-image: none;
}

.detailed-report-carousel .carousel-control-next:after {
  font-family: "themify";
  content: '\e649';
  font-size: .875rem;
  color: #6c7383;
  line-height: 1.875rem;
  margin-right: 0.48rem;
}

.charts-data .progress {
  background: transparent;
}

.charts-data .progress .progress-bar {
  border-radius: 11px;
}

.show > .btn-out-line-light .dropdown-toggle:focus {
  box-shadow: none;
}

.navbar-brand.landing img {
  height: 20px;
}

.landing-effect {
  overflow: hidden;
  box-shadow: 0px 0px 5px 1px rgba(222, 222, 222, 0.75);
}

.landing-effect img {
  transition: transform .5s;
}

.landing-effect:hover img {
  transform: scale(1.1);
}

#proBanner {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 9999;
  background: #000;
}

#proBanner .card-body-padding {
  padding-top: .55rem;
  padding-bottom: .55rem;
  padding-left: 2rem;
  padding-right: 2rem;
}

@media (max-width: 766px) {
  #proBanner .card-body-padding {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}

#proBanner .buy-now-text {
  color: #ffffff;
}

@media (max-width: 766px) {
  #proBanner .buy-now-text {
    font-size: 10px;
    line-height: 1.5;
  }
}

#proBanner .btn.buy-now-btn, #proBanner .ajax-upload-dragdrop .buy-now-btn.ajax-file-upload, .ajax-upload-dragdrop #proBanner .buy-now-btn.ajax-file-upload, #proBanner .swal2-modal .swal2-buttonswrapper .buy-now-btn.swal2-styled, .swal2-modal .swal2-buttonswrapper #proBanner .buy-now-btn.swal2-styled {
  background: transparent;
  color: #88b6ff;
  border-radius: 10px;
  padding: 1rem 0;
  border-radius: 4px;
  font-weight: bold;
  font-size: 1rem;
}

@media (max-width: 766px) {
  #proBanner .btn.buy-now-btn, #proBanner .ajax-upload-dragdrop .buy-now-btn.ajax-file-upload, .ajax-upload-dragdrop #proBanner .buy-now-btn.ajax-file-upload, #proBanner .swal2-modal .swal2-buttonswrapper .buy-now-btn.swal2-styled, .swal2-modal .swal2-buttonswrapper #proBanner .buy-now-btn.swal2-styled {
    min-width: 80px;
    padding: 1rem .5rem;
    font-size: 12px;
  }
}

#proBanner .btn#bannerClose i, #proBanner .ajax-upload-dragdrop #bannerClose.ajax-file-upload i, .ajax-upload-dragdrop #proBanner #bannerClose.ajax-file-upload i, #proBanner .swal2-modal .swal2-buttonswrapper #bannerClose.swal2-styled i, .swal2-modal .swal2-buttonswrapper #proBanner #bannerClose.swal2-styled i {
  margin-right: 1rem;
  font-size: 1.25rem;
}

@media (max-width: 766px) {
  #proBanner .btn#bannerClose i, #proBanner .ajax-upload-dragdrop #bannerClose.ajax-file-upload i, .ajax-upload-dragdrop #proBanner #bannerClose.ajax-file-upload i, #proBanner .swal2-modal .swal2-buttonswrapper #bannerClose.swal2-styled i, .swal2-modal .swal2-buttonswrapper #proBanner #bannerClose.swal2-styled i {
    font-size: 1rem;
    margin-right: 0;
  }
}

#proBanner a {
  text-decoration: none;
}

#proBanner a i {
  font-size: 1.25rem;
}

@media (max-width: 766px) {
  #proBanner a i {
    font-size: 1rem;
  }
}

.proBanner-padding-top {
  padding-top: 97px !important;
}

#performance-line-legend .chartjs-legend {
  margin-right: 20px;
}

#performance-line-legend .chartjs-legend ul li {
  color: #737F8B;
  font-size: 12px;
}

#performance-line-legend .chartjs-legend ul li span {
  width: 10px;
  height: 10px;
  border-radius: 100%;
}

.home-tab .btn, .home-tab .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .home-tab .ajax-file-upload, .home-tab .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .home-tab .swal2-styled {
  padding: 8px 15px;
  border: 1px solid #CADDFF;
  box-sizing: border-box;
  border-radius: 6px;
  color: #000000;
  font-weight: 500;
  font-size: 12px;
  line-height: 12px;
  margin-bottom: 12px;
  margin-right: 12px;
  align-items: center;
}

@media (max-width: 991px) {
  .home-tab .btn, .home-tab .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .home-tab .ajax-file-upload, .home-tab .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .home-tab .swal2-styled {
    padding: 8px 12px;
  }
}

.home-tab .btn i, .home-tab .ajax-upload-dragdrop .ajax-file-upload i, .ajax-upload-dragdrop .home-tab .ajax-file-upload i, .home-tab .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .home-tab .swal2-styled i {
  font-size: 1rem;
  margin-right: .25rem;
  line-height: 1;
  vertical-align: bottom;
}

.home-tab .btn.btn-lg, .home-tab .btn-group-lg > .btn, .home-tab .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .ajax-upload-dragdrop .home-tab .btn-group-lg > .ajax-file-upload, .home-tab .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .swal2-modal .swal2-buttonswrapper .home-tab .btn-group-lg > .swal2-styled, .home-tab .ajax-upload-dragdrop .btn-lg.ajax-file-upload, .ajax-upload-dragdrop .home-tab .btn-lg.ajax-file-upload, .home-tab .swal2-modal .swal2-buttonswrapper .btn-lg.swal2-styled, .swal2-modal .swal2-buttonswrapper .home-tab .btn-lg.swal2-styled {
  font-size: 14px;
  line-height: 18px;
  padding: 10px;
}

.home-tab .btn.upgrade-btn, .home-tab .ajax-upload-dragdrop .upgrade-btn.ajax-file-upload, .ajax-upload-dragdrop .home-tab .upgrade-btn.ajax-file-upload, .home-tab .swal2-modal .swal2-buttonswrapper .upgrade-btn.swal2-styled, .swal2-modal .swal2-buttonswrapper .home-tab .upgrade-btn.swal2-styled {
  font-style: normal;
  font-weight: bold;
  font-size: 17px;
  line-height: 23px;
  padding: 15px 24px;
  color: #ffffff;
  border: none;
  margin-top: 21px;
}

.home-tab .btn.btn-icons, .home-tab .ajax-upload-dragdrop .btn-icons.ajax-file-upload, .ajax-upload-dragdrop .home-tab .btn-icons.ajax-file-upload, .home-tab .swal2-modal .swal2-buttonswrapper .btn-icons.swal2-styled, .swal2-modal .swal2-buttonswrapper .home-tab .btn-icons.swal2-styled {
  width: 24px;
  height: 24px;
  padding: 0;
  padding-top: 1px;
}

.home-tab .btn.btn-icons i, .home-tab .ajax-upload-dragdrop .btn-icons.ajax-file-upload i, .ajax-upload-dragdrop .home-tab .btn-icons.ajax-file-upload i, .home-tab .swal2-modal .swal2-buttonswrapper .btn-icons.swal2-styled i, .swal2-modal .swal2-buttonswrapper .home-tab .btn-icons.swal2-styled i {
  font-size: 1rem;
}

.home-tab .btn-wrapper .btn i, .home-tab .btn-wrapper .ajax-upload-dragdrop .ajax-file-upload i, .ajax-upload-dragdrop .home-tab .btn-wrapper .ajax-file-upload i, .home-tab .btn-wrapper .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .home-tab .btn-wrapper .swal2-styled i {
  font-size: .75rem;
}

.home-tab .dropdown .btn, .home-tab .dropdown .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .home-tab .dropdown .ajax-file-upload, .home-tab .dropdown .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .home-tab .dropdown .swal2-styled {
  border: none;
  font-weight: bold;
  font-size: 13px;
  line-height: 18px;
}

.home-tab .statistics-details {
  margin-bottom: 48px;
}

.home-tab .statistics-details .statistics-title {
  font-style: normal;
  font-weight: 500;
  font-size: 13px;
  line-height: 18px;
  color: #8D8D8D;
  margin-bottom: 4px;
}

@media (max-width: 991px) {
  .home-tab .statistics-details .statistics-title {
    font-size: 12px;
  }
}

.home-tab .statistics-details .rate-percentage {
  font-style: normal;
  font-weight: bold;
  font-size: 26px;
  line-height: 36px;
  color: #000000;
  margin-bottom: 0;
}

@media (max-width: 991px) {
  .home-tab .statistics-details .rate-percentage {
    font-size: 18px;
  }
}

.home-tab .statistics-details .status {
  font-style: normal;
  font-weight: bold;
  font-size: 12px;
  line-height: 16px;
}

.home-tab .statistics-details .status i {
  font-size: 12px;
}

.home-tab .statistics-details p {
  font-weight: bold;
  font-size: 12px;
}

.home-tab .statistics-details p i {
  font-size: 20px;
}

.home-tab .chartjs-wrapper {
  height: 150px !important;
}

.home-tab .status-summary-ight-white {
  color: rgba(255, 255, 255, 0.6);
}

.home-tab .status-summary-chart-wrapper {
  height: 90px;
}

.home-tab .circle-progress-width {
  width: 45px;
}

@media (max-width: 991px) {
  .home-tab .circle-progress-width {
    width: 50%;
    margin-bottom: 20px;
  }
}

.home-tab h3.upgrade-info, .home-tab .upgrade-info.h3 {
  font-style: normal;
  font-weight: normal;
  font-size: 28px;
  line-height: 40px;
  text-align: left;
}

.home-tab .chartjs-legend ul {
  list-style: none;
  padding-left: 0;
  display: flex;
  align-items: center;
  margin-bottom: 0;
}

.home-tab .chartjs-legend ul li {
  margin-right: 8%;
  display: flex;
  align-items: center;
  white-space: nowrap;
  color: #737F8B;
  font-size: 10px;
}

.home-tab .chartjs-legend ul li span {
  height: 10px;
  width: 10px;
  border-radius: 100%;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.812rem;
}

.rtl .home-tab .chartjs-legend ul {
  padding-right: 0;
}

.rtl .home-tab .chartjs-legend ul li {
  margin-right: 0;
  margin-left: 8%;
}

.rtl .home-tab .chartjs-legend ul li span {
  margin-right: 0;
  margin-left: 1rem;
}

.home-tab .text-light-green {
  color: #224BCA;
}

/*-------------------------------------------------------------------*/
/* === Components === */
/* Accordions */
.accordion {
  border-radius: 8px;
}

.accordion > .card {
  margin-bottom: .75rem;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  border-radius: .25rem;
  border-radius: 8px;
}

.accordion > .card:not(:last-of-type) {
  border-bottom: 0;
  border-bottom-right-radius: 8;
  border-bottom-left-radius: 8;
  border-radius: 8px;
}

.accordion > .card:not(:first-of-type) {
  border-top-left-radius: 8;
  border-top-right-radius: 8;
  border-radius: 8px;
}

.accordion > .card .card-header {
  background-color: transparent;
  border: none;
  padding: 2rem;
  border-radius: 8px;
}

.accordion > .card .card-header * {
  font-weight: 400;
  font-size: 1rem;
}

.accordion > .card .card-header a {
  display: block;
  color: inherit;
  text-decoration: none;
  font-size: inherit;
  position: relative;
  -webkit-transition: color 0.5s ease;
  -moz-transition: color 0.5s ease;
  -ms-transition: color 0.5s ease;
  -o-transition: color 0.5s ease;
  transition: color 0.5s ease;
  padding-right: 1.5rem;
}

.accordion > .card .card-header a:before {
  font-family: "themify";
  position: absolute;
  right: 7px;
  top: 0;
  font-size: 14px;
  display: block;
}

.accordion > .card .card-header a[aria-expanded="true"] {
  color: #1F3BB3;
}

.accordion > .card .card-header a[aria-expanded="true"]:before {
  content: "\e622";
}

.accordion > .card .card-header a[aria-expanded="false"]:before {
  content: "\e61a";
}

.accordion > .card .card-body {
  font-size: 14px;
  padding: 0 2rem 2rem 2rem;
  font-weight: 400;
  line-height: 1.5;
}

.accordion > .card .card-body i {
  font-size: 1.25rem;
}

.accordion.accordion-bordered {
  background: #ffffff;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
}

.accordion.accordion-bordered .card {
  margin: 0 2rem;
  border-top: 1px solid #dee2e6;
  box-shadow: none;
  border-radius: 0;
  border-left: 0;
  border-right: 0;
}

.accordion.accordion-bordered .card .card-header,
.accordion.accordion-bordered .card .card-body {
  padding-left: 0;
  padding-right: 0;
}

.accordion.accordion-bordered .card .card-header a:before {
  color: #F95F53;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"]:before {
  content: "\e65c";
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="false"]:before {
  content: "\e65f";
}

.accordion.accordion-bordered .card:first-child {
  border-top: 0;
}

.accordion.accordion-bordered .card:last-child {
  border-bottom: 0;
}

.accordion.accordion-filled .card {
  padding: 0;
}

.accordion.accordion-filled .card .card-header {
  padding: 0;
}

.accordion.accordion-filled .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-filled .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"] {
  background: #52CDFF;
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

.accordion.accordion-filled .card .card-body {
  padding: 0 2rem 2rem 2rem;
  background: #52CDFF;
  color: #ffffff;
}

.accordion.accordion-solid-header .card {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-header .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"] {
  background: #1F3BB3;
  color: #ffffff;
  border-radius: 8px;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
  color: #ffffff;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

.accordion.accordion-solid-header .card .card-body {
  padding: 2rem;
}

.accordion.accordion-solid-content .card {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-content .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

.accordion.accordion-solid-content .card .card-body {
  padding: 2rem;
  background: #34B1AA;
  color: #ffffff;
  border-radius: 8px;
}

.accordion.accordion-multi-colored .card .card-header,
.accordion.accordion-multi-colored .card .card-body {
  background: transparent;
  color: #ffffff;
}

.accordion.accordion-multi-colored .card:nth-child(1) {
  background: #1F3BB3;
}

.accordion.accordion-multi-colored .card:nth-child(2) {
  background: #34B1AA;
}

.accordion.accordion-multi-colored .card:nth-child(3) {
  background: #F95F53;
}

.accordion.accordion-multi-colored .card:nth-child(4) {
  background: #ffaf00;
}

.accordion.accordion-multi-colored .card:nth-child(5) {
  background: #52CDFF;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"]:before {
  content: "\e648";
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="false"]:before {
  content: "\e64b";
}

/* Badges */
.badge {
  border-radius: 20px;
  font-size: 12px;
  line-height: 1;
  padding: .375rem .5625rem;
  font-weight: normal;
}

.badge.badge-pill {
  border-radius: 10rem;
}

/*Badge outlined variations*/
.badge-outline-primary {
  color: #1F3BB3;
  border: 1px solid #1F3BB3;
}

.badge-outline-secondary {
  color: #F1F1F1;
  border: 1px solid #F1F1F1;
}

.badge-outline-success {
  color: #34B1AA;
  border: 1px solid #34B1AA;
}

.badge-outline-info {
  color: #52CDFF;
  border: 1px solid #52CDFF;
}

.badge-outline-warning {
  color: #ffaf00;
  border: 1px solid #ffaf00;
}

.badge-outline-danger {
  color: #F95F53;
  border: 1px solid #F95F53;
}

.badge-outline-light {
  color: #fbfbfb;
  border: 1px solid #fbfbfb;
}

.badge-outline-dark {
  color: #1E283D;
  border: 1px solid #1E283D;
}

.badge-opacity-primary {
  background: #b6c1f2;
  color: #172d88;
}

.badge-opacity-secondary {
  background: white;
  color: #d8d8d8;
}

.badge-opacity-success {
  background: #cbf0ee;
  color: #288a84;
}

.badge-opacity-info {
  background: white;
  color: #1fbeff;
}

.badge-opacity-warning {
  background: #fff2d6;
  color: #cc8c00;
}

.badge-opacity-danger {
  background: white;
  color: #f73122;
}

.badge-opacity-light {
  background: white;
  color: #e2e2e2;
}

.badge-opacity-dark {
  background: #768cbb;
  color: #0d121b;
}

.badge-primary {
  color: #1F3BB3;
  border: 1px solid #1F3BB3;
}

.badge-secondary {
  color: #F1F1F1;
  border: 1px solid #F1F1F1;
}

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  color: #34B1AA;
  border: 1px solid #34B1AA;
}

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  color: #52CDFF;
  border: 1px solid #52CDFF;
}

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  color: #ffaf00;
  border: 1px solid #ffaf00;
}

.badge-danger {
  color: #F95F53;
  border: 1px solid #F95F53;
}

.badge-light {
  color: #fbfbfb;
  border: 1px solid #fbfbfb;
}

.badge-dark {
  color: #1E283D;
  border: 1px solid #1E283D;
}

/* Bootstrap Alerts */
.alert {
  font-size: 0.812rem;
}

.alert i {
  font-size: 1.25rem;
  margin-right: 1.25rem;
  vertical-align: middle;
  line-height: .5;
}

.alert-primary {
  color: #1F3BB3;
}

.alert-secondary {
  color: #F1F1F1;
}

.alert-success {
  color: #34B1AA;
}

.alert-info {
  color: #52CDFF;
}

.alert-warning {
  color: #ffaf00;
}

.alert-danger {
  color: #F95F53;
}

.alert-light {
  color: #fbfbfb;
}

.alert-dark {
  color: #1E283D;
}

.alert-fill-primary {
  color: white;
  background: #1F3BB3;
}

.alert-fill-secondary {
  color: white;
  background: #F1F1F1;
}

.alert-fill-success {
  color: white;
  background: #34B1AA;
}

.alert-fill-info {
  color: white;
  background: #52CDFF;
}

.alert-fill-warning {
  color: white;
  background: #ffaf00;
}

.alert-fill-danger {
  color: white;
  background: #F95F53;
}

.alert-fill-light {
  color: white;
  background: #fbfbfb;
}

.alert-fill-dark {
  color: #f8f9fb;
  background: #1E283D;
}

/* Bootstrap Progress */
.progress {
  border-radius: 7px;
  height: 8px;
}

.progress .progress-bar {
  border-radius: 7px;
}

.progress.progress-sm {
  height: 0.375rem;
}

.progress.progress-md {
  height: 5px;
}

.progress.progress-lg {
  height: 15px;
}

.progress.progress-xl {
  height: 18px;
}

/* Buttons */
.btn, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
  font-size: 0.875rem;
  line-height: 1;
  font-weight: 400;
  border-radius: 5px;
  /* Buttons with only icons */
  /* Buttons with icon and text */
}

.btn i, .ajax-upload-dragdrop .ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel i {
  font-size: 1rem;
}

.btn.btn-rounded, .ajax-upload-dragdrop .btn-rounded.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-rounded.swal2-styled {
  border-radius: 50px;
}

.btn.btn-sm, .btn-group-sm > .btn, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .ajax-upload-dragdrop .btn-sm.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-sm.swal2-styled {
  font-size: 0.812rem;
  border-radius: 15px;
}

.btn.btn-lg, .btn-group-lg > .btn, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .ajax-upload-dragdrop .btn-lg.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-lg.swal2-styled {
  font-size: 0.875rem;
  padding: 1.375rem 3.4rem;
}

.btn.btn-xs, .ajax-upload-dragdrop .btn-xs.ajax-file-upload, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-submit, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-cancel, .swal2-modal .swal2-buttonswrapper .btn-xs.swal2-styled, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-submit, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-cancel {
  padding: 0.5rem 0.75rem;
  font-size: 0.625rem;
}

.btn.btn-icons, .ajax-upload-dragdrop .btn-icons.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-icons.swal2-styled {
  width: 40px;
  height: 40px;
  padding: 10px;
  text-align: center;
  vertical-align: middle;
}

.btn.btn-icons.todo-list-add-btn, .ajax-upload-dragdrop .btn-icons.todo-list-add-btn.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-icons.todo-list-add-btn.swal2-styled {
  border-radius: 100%;
}

.btn.btn-icons.todo-list-add-btn i, .ajax-upload-dragdrop .btn-icons.todo-list-add-btn.ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .btn-icons.todo-list-add-btn.swal2-styled i {
  line-height: 1;
}

.btn.btn-icons i, .ajax-upload-dragdrop .btn-icons.ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .btn-icons.swal2-styled i {
  margin: auto;
  line-height: initial;
}

.btn.btn-icon-text .btn-icon-prepend, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-prepend, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-prepend {
  margin-right: .5rem;
}

.btn.btn-icon-text .btn-icon-append, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-append, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-append {
  margin-left: .5rem;
}

.btn.btn-social-icon, .ajax-upload-dragdrop .btn-social-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-social-icon.swal2-styled {
  width: 50px;
  height: 50px;
  padding: 0;
}

.btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus,
.btn:active,
.ajax-upload-dragdrop .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active {
  outline: 0;
  box-shadow: none;
}

.btn-group .btn + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .btn, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .btn + .swal2-styled, .btn-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group .ajax-file-upload + .swal2-styled, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .swal2-styled {
  border-left: 0;
}

/*social buttons*/
.btn-primary {
  background: #1F3BB3;
  color: #ffffff;
}

.btn-primary.btn-light, .btn-primary.btn-secondary {
  color: #1E283D;
}

.btn-primary:hover, .btn-primary:focus {
  background: #172d88;
  color: #ffffff;
}

.btn-primary.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #2b4cda;
}

.btn-primary.btn-social-icon-text i {
  background: #1F3BB3;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-primary {
  border: 1px solid #081031;
  color: #081031;
}

.btn-outline-primary:hover {
  background: #1F3BB3;
  color: #ffffff;
}

.btn-secondary {
  background: #F1F1F1;
  color: #ffffff;
}

.btn-secondary.btn-light, .btn-secondary.btn-secondary {
  color: #1E283D;
}

.btn-secondary:hover, .btn-secondary:focus {
  background: #d8d8d8;
  color: #ffffff;
}

.btn-secondary.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: white;
}

.btn-secondary.btn-social-icon-text i {
  background: #F1F1F1;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  border: 1px solid #a5a5a5;
  color: #a5a5a5;
}

.btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover {
  background: #F1F1F1;
  color: #ffffff;
}

.btn-success {
  background: #34B1AA;
  color: #ffffff;
}

.btn-success.btn-light, .btn-success.btn-secondary {
  color: #1E283D;
}

.btn-success:hover, .btn-success:focus {
  background: #288a84;
  color: #ffffff;
}

.btn-success.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4dcbc4;
}

.btn-success.btn-social-icon-text i {
  background: #34B1AA;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit {
  border: 1px solid #113b38;
  color: #113b38;
}

.btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover {
  background: #34B1AA;
  color: #ffffff;
}

.btn-info {
  background: #52CDFF;
  color: #ffffff;
}

.btn-info.btn-light, .btn-info.btn-secondary {
  color: #1E283D;
}

.btn-info:hover, .btn-info:focus {
  background: #1fbeff;
  color: #ffffff;
}

.btn-info.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #85dcff;
}

.btn-info.btn-social-icon-text i {
  background: #52CDFF;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-info {
  border: 1px solid #0083b8;
  color: #0083b8;
}

.btn-outline-info:hover {
  background: #52CDFF;
  color: #ffffff;
}

.btn-warning {
  background: #ffaf00;
  color: #ffffff;
}

.btn-warning.btn-light, .btn-warning.btn-secondary {
  color: #1E283D;
}

.btn-warning:hover, .btn-warning:focus {
  background: #cc8c00;
  color: #ffffff;
}

.btn-warning.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ffbf33;
}

.btn-warning.btn-social-icon-text i {
  background: #ffaf00;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-warning {
  border: 1px solid #664600;
  color: #664600;
}

.btn-outline-warning:hover {
  background: #ffaf00;
  color: #ffffff;
}

.btn-danger {
  background: #F95F53;
  color: #ffffff;
}

.btn-danger.btn-light, .btn-danger.btn-secondary {
  color: #1E283D;
}

.btn-danger:hover, .btn-danger:focus {
  background: #f73122;
  color: #ffffff;
}

.btn-danger.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #fb8d84;
}

.btn-danger.btn-social-icon-text i {
  background: #F95F53;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-danger {
  border: 1px solid #ad1206;
  color: #ad1206;
}

.btn-outline-danger:hover {
  background: #F95F53;
  color: #ffffff;
}

.btn-light {
  background: #fbfbfb;
  color: #ffffff;
}

.btn-light.btn-light, .btn-light.btn-secondary {
  color: #1E283D;
}

.btn-light:hover, .btn-light:focus {
  background: #e2e2e2;
  color: #ffffff;
}

.btn-light.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: white;
}

.btn-light.btn-social-icon-text i {
  background: #fbfbfb;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-light {
  border: 1px solid #afafaf;
  color: #afafaf;
}

.btn-outline-light:hover {
  background: #fbfbfb;
  color: #ffffff;
}

.btn-dark {
  background: #1E283D;
  color: #ffffff;
}

.btn-dark.btn-light, .btn-dark.btn-secondary {
  color: #1E283D;
}

.btn-dark:hover, .btn-dark:focus {
  background: #0d121b;
  color: #ffffff;
}

.btn-dark.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #2f3e5f;
}

.btn-dark.btn-social-icon-text i {
  background: #1E283D;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-dark {
  border: 1px solid black;
  color: black;
}

.btn-outline-dark:hover {
  background: #1E283D;
  color: #ffffff;
}

.btn-twitter {
  background: #4747A1;
  color: #ffffff;
}

.btn-twitter:hover, .btn-twitter:focus {
  background: #37377e;
  color: #ffffff;
}

.btn-twitter.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #6161ba;
}

.btn-twitter.btn-social-icon-text i {
  background: #4747A1;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-twitter {
  border: 1px solid #4747A1;
  color: #4747A1;
}

.btn-outline-twitter:hover {
  background: #4747A1;
  color: #ffffff;
}

.btn-facebook {
  background: #7DA0FA;
  color: #ffffff;
}

.btn-facebook:hover, .btn-facebook:focus {
  background: #4c7cf8;
  color: #ffffff;
}

.btn-facebook.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #aec4fc;
}

.btn-facebook.btn-social-icon-text i {
  background: #7DA0FA;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-facebook {
  border: 1px solid #7DA0FA;
  color: #7DA0FA;
}

.btn-outline-facebook:hover {
  background: #7DA0FA;
  color: #ffffff;
}

.btn-google {
  background: #dc4a38;
  color: #ffffff;
}

.btn-google:hover, .btn-google:focus {
  background: #bf3322;
  color: #ffffff;
}

.btn-google.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e47163;
}

.btn-google.btn-social-icon-text i {
  background: #dc4a38;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-google {
  border: 1px solid #dc4a38;
  color: #dc4a38;
}

.btn-outline-google:hover {
  background: #dc4a38;
  color: #ffffff;
}

.btn-linkedin {
  background: #7978E9;
  color: #ffffff;
}

.btn-linkedin:hover, .btn-linkedin:focus {
  background: #4d4ce2;
  color: #ffffff;
}

.btn-linkedin.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #a5a4f0;
}

.btn-linkedin.btn-social-icon-text i {
  background: #7978E9;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-linkedin {
  border: 1px solid #7978E9;
  color: #7978E9;
}

.btn-outline-linkedin:hover {
  background: #7978E9;
  color: #ffffff;
}

.btn-pinterest {
  background: #cc2127;
  color: #ffffff;
}

.btn-pinterest:hover, .btn-pinterest:focus {
  background: #a01a1f;
  color: #ffffff;
}

.btn-pinterest.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e04046;
}

.btn-pinterest.btn-social-icon-text i {
  background: #cc2127;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-pinterest {
  border: 1px solid #cc2127;
  color: #cc2127;
}

.btn-outline-pinterest:hover {
  background: #cc2127;
  color: #ffffff;
}

.btn-youtube {
  background: #e52d27;
  color: #ffffff;
}

.btn-youtube:hover, .btn-youtube:focus {
  background: #c21d17;
  color: #ffffff;
}

.btn-youtube.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ea5955;
}

.btn-youtube.btn-social-icon-text i {
  background: #e52d27;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-youtube {
  border: 1px solid #e52d27;
  color: #e52d27;
}

.btn-outline-youtube:hover {
  background: #e52d27;
  color: #ffffff;
}

.btn-github {
  background: #333333;
  color: #ffffff;
}

.btn-github:hover, .btn-github:focus {
  background: #1a1a1a;
  color: #ffffff;
}

.btn-github.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4d4d4d;
}

.btn-github.btn-social-icon-text i {
  background: #333333;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-github {
  border: 1px solid #333333;
  color: #333333;
}

.btn-outline-github:hover {
  background: #333333;
  color: #ffffff;
}

.btn-behance {
  background: #1769ff;
  color: #ffffff;
}

.btn-behance:hover, .btn-behance:focus {
  background: #0050e3;
  color: #ffffff;
}

.btn-behance.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4a8aff;
}

.btn-behance.btn-social-icon-text i {
  background: #1769ff;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-behance {
  border: 1px solid #1769ff;
  color: #1769ff;
}

.btn-outline-behance:hover {
  background: #1769ff;
  color: #ffffff;
}

.btn-dribbble {
  background: #ea4c89;
  color: #ffffff;
}

.btn-dribbble:hover, .btn-dribbble:focus {
  background: #e51e6b;
  color: #ffffff;
}

.btn-dribbble.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ef7aa7;
}

.btn-dribbble.btn-social-icon-text i {
  background: #ea4c89;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-dribbble {
  border: 1px solid #ea4c89;
  color: #ea4c89;
}

.btn-outline-dribbble:hover {
  background: #ea4c89;
  color: #ffffff;
}

.btn-reddit {
  background: #ff4500;
  color: #ffffff;
}

.btn-reddit:hover, .btn-reddit:focus {
  background: #cc3700;
  color: #ffffff;
}

.btn-reddit.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ff6a33;
}

.btn-reddit.btn-social-icon-text i {
  background: #ff4500;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-reddit {
  border: 1px solid #ff4500;
  color: #ff4500;
}

.btn-outline-reddit:hover {
  background: #ff4500;
  color: #ffffff;
}

/* inverse buttons */
.btn-inverse-primary {
  background-color: rgba(31, 59, 179, 0.2);
  background-image: none;
  border-color: rgba(31, 59, 179, 0);
}

.btn-inverse-primary:not(.btn-inverse-light) {
  color: #1F3BB3;
}

.btn-inverse-primary.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-primary.focus, .btn-inverse-primary:focus {
  box-shadow: 0 0 0 3px rgba(31, 59, 179, 0.5);
}

.btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
  color: #1F3BB3;
  background-color: transparent;
}

.btn-inverse-primary.active, .btn-inverse-primary:active,
.show > .btn-inverse-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #1F3BB3;
  border-color: #1F3BB3;
}

.btn-inverse-secondary {
  background-color: rgba(241, 241, 241, 0.2);
  background-image: none;
  border-color: rgba(241, 241, 241, 0);
}

.btn-inverse-secondary:not(.btn-inverse-light) {
  color: #F1F1F1;
}

.btn-inverse-secondary.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
  box-shadow: 0 0 0 3px rgba(241, 241, 241, 0.5);
}

.btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
  color: #F1F1F1;
  background-color: transparent;
}

.btn-inverse-secondary.active, .btn-inverse-secondary:active,
.show > .btn-inverse-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #F1F1F1;
  border-color: #F1F1F1;
}

.btn-inverse-success {
  background-color: rgba(52, 177, 170, 0.2);
  background-image: none;
  border-color: rgba(52, 177, 170, 0);
}

.btn-inverse-success:not(.btn-inverse-light) {
  color: #34B1AA;
}

.btn-inverse-success.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-success.focus, .btn-inverse-success:focus {
  box-shadow: 0 0 0 3px rgba(52, 177, 170, 0.5);
}

.btn-inverse-success.disabled, .btn-inverse-success:disabled {
  color: #34B1AA;
  background-color: transparent;
}

.btn-inverse-success.active, .btn-inverse-success:active,
.show > .btn-inverse-success.dropdown-toggle {
  color: #ffffff;
  background-color: #34B1AA;
  border-color: #34B1AA;
}

.btn-inverse-info {
  background-color: rgba(82, 205, 255, 0.2);
  background-image: none;
  border-color: rgba(82, 205, 255, 0);
}

.btn-inverse-info:not(.btn-inverse-light) {
  color: #52CDFF;
}

.btn-inverse-info.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-info.focus, .btn-inverse-info:focus {
  box-shadow: 0 0 0 3px rgba(82, 205, 255, 0.5);
}

.btn-inverse-info.disabled, .btn-inverse-info:disabled {
  color: #52CDFF;
  background-color: transparent;
}

.btn-inverse-info.active, .btn-inverse-info:active,
.show > .btn-inverse-info.dropdown-toggle {
  color: #ffffff;
  background-color: #52CDFF;
  border-color: #52CDFF;
}

.btn-inverse-warning {
  background-color: rgba(255, 175, 0, 0.2);
  background-image: none;
  border-color: rgba(255, 175, 0, 0);
}

.btn-inverse-warning:not(.btn-inverse-light) {
  color: #ffaf00;
}

.btn-inverse-warning.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-warning.focus, .btn-inverse-warning:focus {
  box-shadow: 0 0 0 3px rgba(255, 175, 0, 0.5);
}

.btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
  color: #ffaf00;
  background-color: transparent;
}

.btn-inverse-warning.active, .btn-inverse-warning:active,
.show > .btn-inverse-warning.dropdown-toggle {
  color: #ffffff;
  background-color: #ffaf00;
  border-color: #ffaf00;
}

.btn-inverse-danger {
  background-color: rgba(249, 95, 83, 0.2);
  background-image: none;
  border-color: rgba(249, 95, 83, 0);
}

.btn-inverse-danger:not(.btn-inverse-light) {
  color: #F95F53;
}

.btn-inverse-danger.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-danger.focus, .btn-inverse-danger:focus {
  box-shadow: 0 0 0 3px rgba(249, 95, 83, 0.5);
}

.btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
  color: #F95F53;
  background-color: transparent;
}

.btn-inverse-danger.active, .btn-inverse-danger:active,
.show > .btn-inverse-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #F95F53;
  border-color: #F95F53;
}

.btn-inverse-light {
  background-color: rgba(251, 251, 251, 0.2);
  background-image: none;
  border-color: rgba(251, 251, 251, 0);
}

.btn-inverse-light:not(.btn-inverse-light) {
  color: #fbfbfb;
}

.btn-inverse-light.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-light.focus, .btn-inverse-light:focus {
  box-shadow: 0 0 0 3px rgba(251, 251, 251, 0.5);
}

.btn-inverse-light.disabled, .btn-inverse-light:disabled {
  color: #fbfbfb;
  background-color: transparent;
}

.btn-inverse-light.active, .btn-inverse-light:active,
.show > .btn-inverse-light.dropdown-toggle {
  color: #ffffff;
  background-color: #fbfbfb;
  border-color: #fbfbfb;
}

.btn-inverse-dark {
  background-color: rgba(30, 40, 61, 0.2);
  background-image: none;
  border-color: rgba(30, 40, 61, 0);
}

.btn-inverse-dark:not(.btn-inverse-light) {
  color: #1E283D;
}

.btn-inverse-dark.btn-inverse-secondary {
  color: #1E283D;
}

.btn-inverse-dark.focus, .btn-inverse-dark:focus {
  box-shadow: 0 0 0 3px rgba(30, 40, 61, 0.5);
}

.btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
  color: #1E283D;
  background-color: transparent;
}

.btn-inverse-dark.active, .btn-inverse-dark:active,
.show > .btn-inverse-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #1E283D;
  border-color: #1E283D;
}

.btn-outline-light {
  color: #6c7383;
  border-color: #e3e3e3;
}

/* Breadcrumbs */
.breadcrumb {
  border: 1px solid #dee2e6;
}

.breadcrumb .breadcrumb-item {
  font-size: 0.812rem;
}

.breadcrumb.breadcrumb-custom {
  padding: 0 0;
  border-color: #dbe3e6;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item {
  font-size: 0.812rem;
  background: #dbe3e6;
  padding: 0.56rem 12px;
  color: #000000;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:before {
  content: "";
  padding-right: 0;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a {
  position: relative;
  color: inherit;
  border: 1px solid #dbe3e6;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before, .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  position: absolute;
  top: -9px;
  width: 0;
  height: 0;
  content: "";
  border-top: 21px solid transparent;
  border-bottom: 21px solid transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before {
  right: -22px;
  z-index: 3;
  border-left-color: #dbe3e6;
  border-left-style: solid;
  border-left-width: 12px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  border-top: 21px solid transparent;
  border-bottom: 22px solid transparent;
  border-left: 12px solid #ffffff;
  top: -9px;
  right: -23px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item span {
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item > .breadcrumb-item {
  padding-right: 0;
}

.breadcrumb.bg-success, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm, .settings-panel .color-tiles .breadcrumb.tiles.success, .breadcrumb.bg-dark, .settings-panel .color-tiles .breadcrumb.tiles.dark, .breadcrumb.bg-danger, .settings-panel .color-tiles .breadcrumb.tiles.danger, .breadcrumb.bg-warning, .settings-panel .color-tiles .breadcrumb.tiles.warning, .breadcrumb.bg-primary, .settings-panel .color-tiles .breadcrumb.tiles.primary, .breadcrumb.bg-info, .settings-panel .color-tiles .breadcrumb.tiles.info {
  border: none;
}

.breadcrumb.bg-success .breadcrumb-item, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item, .breadcrumb.bg-dark .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item, .breadcrumb.bg-danger .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item, .breadcrumb.bg-warning .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item, .breadcrumb.bg-primary .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item, .breadcrumb.bg-info .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item {
  color: #ffffff;
}

.breadcrumb.bg-success .breadcrumb-item:before, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item:before, .breadcrumb.bg-dark .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item:before, .breadcrumb.bg-danger .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item:before, .breadcrumb.bg-warning .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item:before, .breadcrumb.bg-primary .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item:before, .breadcrumb.bg-info .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item:before {
  color: inherit;
}

.breadcrumb.bg-success .breadcrumb-item a, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item a, .breadcrumb.bg-success .breadcrumb-item span, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item span, .breadcrumb.bg-dark .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item a, .breadcrumb.bg-dark .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item span, .breadcrumb.bg-danger .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item a, .breadcrumb.bg-danger .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item span, .breadcrumb.bg-warning .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item a, .breadcrumb.bg-warning .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item span, .breadcrumb.bg-primary .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item a, .breadcrumb.bg-primary .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item span, .breadcrumb.bg-info .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item a, .breadcrumb.bg-info .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item span {
  color: inherit;
}

/* inverse breadcrumb */
.bg-inverse-primary {
  background: #6c83e6;
  border-color: #1F3BB3;
}

.bg-inverse-primary .breadcrumb-item {
  color: #1F3BB3;
}

.bg-inverse-primary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-primary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-primary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item {
  background: #6c83e6;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a {
  color: #1F3BB3;
  border: none;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #6c83e6;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item span {
  color: #1F3BB3;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-secondary {
  background: white;
  border-color: #F1F1F1;
}

.bg-inverse-secondary .breadcrumb-item {
  color: #F1F1F1;
}

.bg-inverse-secondary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-secondary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-secondary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item {
  background: white;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a {
  color: #F1F1F1;
  border: none;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: white;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item span {
  color: #F1F1F1;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-success {
  background: #88dcd7;
  border-color: #34B1AA;
}

.bg-inverse-success .breadcrumb-item {
  color: #34B1AA;
}

.bg-inverse-success .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-success .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-success.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item {
  background: #88dcd7;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a {
  color: #34B1AA;
  border: none;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #88dcd7;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item span {
  color: #34B1AA;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-info {
  background: #d2f2ff;
  border-color: #52CDFF;
}

.bg-inverse-info .breadcrumb-item {
  color: #52CDFF;
}

.bg-inverse-info .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-info .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-info.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item {
  background: #d2f2ff;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a {
  color: #52CDFF;
  border: none;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #d2f2ff;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item span {
  color: #52CDFF;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-warning {
  background: #ffd780;
  border-color: #ffaf00;
}

.bg-inverse-warning .breadcrumb-item {
  color: #ffaf00;
}

.bg-inverse-warning .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-warning .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-warning.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item {
  background: #ffd780;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a {
  color: #ffaf00;
  border: none;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #ffd780;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item span {
  color: #ffaf00;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-danger {
  background: #fdd2ce;
  border-color: #F95F53;
}

.bg-inverse-danger .breadcrumb-item {
  color: #F95F53;
}

.bg-inverse-danger .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-danger .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-danger.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item {
  background: #fdd2ce;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a {
  color: #F95F53;
  border: none;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #fdd2ce;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item span {
  color: #F95F53;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-light {
  background: white;
  border-color: #fbfbfb;
}

.bg-inverse-light .breadcrumb-item {
  color: #fbfbfb;
}

.bg-inverse-light .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-light .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-light.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item {
  background: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a {
  color: #fbfbfb;
  border: none;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item span {
  color: #fbfbfb;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-dark {
  background: #486092;
  border-color: #1E283D;
}

.bg-inverse-dark .breadcrumb-item {
  color: #1E283D;
}

.bg-inverse-dark .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-dark .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-dark.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item {
  background: #486092;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a {
  color: #1E283D;
  border: none;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #486092;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item span {
  color: #1E283D;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

/* Cards */
.card {
  box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
  -webkit-box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
  -moz-box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
  -ms-box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
  transition: background 0.25s ease;
  -webkit-transition: background 0.25s ease;
  -moz-transition: background 0.25s ease;
  -ms-transition: background 0.25s ease;
  border: none;
  border: none;
}

.card.card-rounded {
  border-radius: 15px;
  box-shadow: none;
  border: none;
}

.card.table-darkBGImg {
  background: #1E283D url("../../images/dashboard/darkBG.png") repeat-y right top;
}

.card.tale-bg {
  background: #DAE7FF;
}

.card.transparent {
  background: transparent;
}

.card .card-body {
  padding: 1.5rem 1.5rem;
}

.card .card-body + .card-body {
  padding-top: 1rem;
}

.card .card-title {
  color: #010101;
  margin-bottom: 1.2rem;
  text-transform: capitalize;
  font-size: 1.125rem;
  font-weight: 600;
}

.card .card-title.card-title-dash {
  font-style: normal;
  font-weight: 800;
  font-size: 16px;
  line-height: 22px;
  color: #1F1F1F;
  margin-bottom: 2px;
}

.card .card-title.card-title-dash.card-subtitle-dash {
  font-style: normal;
  font-weight: normal;
  font-size: 13px;
  line-height: 18px;
  color: #1F1F1F;
  margin: 0;
}

.card .card-subtitle {
  font-weight: 400;
  margin-top: 0.625rem;
  margin-bottom: 0.625rem;
}

.card .card-description {
  margin-bottom: .875rem;
  font-weight: 400;
  color: #76838f;
}

.card.card-outline-success {
  border: 1px solid theme-color("success");
}

.card.card-outline-primary {
  border: 1px solid theme-color("primary");
}

.card.card-outline-warning {
  border: 1px solid theme-color("warning");
}

.card.card-outline-danger {
  border: 1px solid theme-color("danger");
}

.card.card-faded {
  background: #b5b0b2;
  border-color: #b5b0b2;
}

.card.card-circle-progress {
  color: #ffffff;
  text-align: center;
}

.card.card-img-holder {
  position: relative;
}

.card.card-img-holder .card-img-absolute {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
}

.card.card-weather .weather-daily .weather-day {
  opacity: .5;
  font-weight: 900;
}

.card.card-weather .weather-daily i {
  font-size: 20px;
}

.card.card-weather .weather-daily .weather-temp {
  margin-top: .5rem;
  margin-bottom: 0;
  opacity: .5;
  font-size: .75rem;
}

.card.card-tale {
  background: #7DA0FA;
  color: #ffffff;
}

.card.card-tale:hover {
  background: #96b2fb;
}

.card.card-dark-blue {
  background: #4747A1;
  color: #ffffff;
}

.card.card-dark-blue:hover {
  background: #5050b2;
}

.card.card-light-blue {
  background: #7978E9;
  color: #ffffff;
}

.card.card-light-blue:hover {
  background: #8f8eed;
}

.card.card-light-danger {
  background: #F3797E;
  color: #ffffff;
}

.card.card-light-danger:hover {
  background: #f59095;
}

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
    margin-bottom: 0.75rem;
  }
}

.card-inverse-primary {
  background: rgba(31, 59, 179, 0.2);
  border: 1px solid theme-color-level(primary, 1);
  color: theme-color-level(primary, 3);
}

.card-inverse-secondary {
  background: rgba(241, 241, 241, 0.2);
  border: 1px solid theme-color-level(secondary, 1);
  color: theme-color-level(secondary, 3);
}

.card-inverse-success {
  background: rgba(52, 177, 170, 0.2);
  border: 1px solid theme-color-level(success, 1);
  color: theme-color-level(success, 3);
}

.card-inverse-info {
  background: rgba(82, 205, 255, 0.2);
  border: 1px solid theme-color-level(info, 1);
  color: theme-color-level(info, 3);
}

.card-inverse-warning {
  background: rgba(255, 175, 0, 0.2);
  border: 1px solid theme-color-level(warning, 1);
  color: theme-color-level(warning, 3);
}

.card-inverse-danger {
  background: rgba(249, 95, 83, 0.2);
  border: 1px solid theme-color-level(danger, 1);
  color: theme-color-level(danger, 3);
}

.card-inverse-light {
  background: rgba(251, 251, 251, 0.2);
  border: 1px solid theme-color-level(light, 1);
  color: theme-color-level(light, 3);
}

.card-inverse-dark {
  background: rgba(30, 40, 61, 0.2);
  border: 1px solid theme-color-level(dark, 1);
  color: theme-color-level(dark, 3);
}

.data-icon-card-primary {
  background: #1F3BB3;
  color: #ffffff;
}

.data-icon-card-primary .card-title {
  color: #ffffff;
}

.data-icon-card-primary .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-primary .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-secondary {
  background: #F1F1F1;
  color: #ffffff;
}

.data-icon-card-secondary .card-title {
  color: #ffffff;
}

.data-icon-card-secondary .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-secondary .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-success {
  background: #34B1AA;
  color: #ffffff;
}

.data-icon-card-success .card-title {
  color: #ffffff;
}

.data-icon-card-success .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-success .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-info {
  background: #52CDFF;
  color: #ffffff;
}

.data-icon-card-info .card-title {
  color: #ffffff;
}

.data-icon-card-info .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-info .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-warning {
  background: #ffaf00;
  color: #ffffff;
}

.data-icon-card-warning .card-title {
  color: #ffffff;
}

.data-icon-card-warning .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-warning .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-danger {
  background: #F95F53;
  color: #ffffff;
}

.data-icon-card-danger .card-title {
  color: #ffffff;
}

.data-icon-card-danger .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-danger .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-light {
  background: #fbfbfb;
  color: #ffffff;
}

.data-icon-card-light .card-title {
  color: #ffffff;
}

.data-icon-card-light .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-light .background-icon i {
  z-index: 1;
  color: #ffffff;
}

.data-icon-card-dark {
  background: #1E283D;
  color: #ffffff;
}

.data-icon-card-dark .card-title {
  color: #ffffff;
}

.data-icon-card-dark .background-icon::before {
  content: url("../../images/dashboard/shape-4.svg");
  position: absolute;
}

.data-icon-card-dark .background-icon i {
  z-index: 1;
  color: #ffffff;
}

/* Checkboxes and Radios */
.form-check {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 0;
}

.form-check .form-check-label {
  min-height: 18px;
  display: block;
  margin-left: 1.75rem;
  font-size: 0.812rem;
  line-height: 1.5;
}

.rtl .form-check .form-check-label {
  margin-left: 0;
  margin-right: 1.75rem;
}

.form-check .form-check-label input {
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 0;
  margin-top: 0;
  z-index: 1;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}

.rtl .form-check .form-check-label input {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before, .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  position: absolute;
  top: 0;
  left: 0;
}

.rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before {
  content: "";
  width: 18px;
  height: 18px;
  border-radius: 2px;
  border: none;
  border-width: 2px;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  background: #EBEDF2;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  font-family: themify;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  content: '\e64c';
  font-size: .9375rem;
  font-weight: bold;
  color: #ffffff;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
  background: #1F3BB3;
  border-width: 0;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
  width: 18px;
  opacity: 1;
  line-height: 18px;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
  border-color: #dee2e6;
}

.form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
  background: #dee2e6;
  color: #ffffff;
}

.form-check .form-check-label input[type="radio"] + .input-helper:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  border: solid #1F3BB3;
  border-width: 2px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:before {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="radio"] + .input-helper:after {
  content: "";
  width: 8px;
  height: 8px;
  background: #ffffff;
  border-radius: 50%;
  top: 6px;
  left: 6px;
  -webkit-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  position: absolute;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:after {
  left: auto;
  right: 6px;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
  background: #1F3BB3;
  border-width: 0;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
  opacity: 1;
  line-height: 1.5;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
  border-color: #dee2e6;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
  background: #dee2e6;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
  background: #ffffff;
}

.todo-list-rounded .form-check {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 0;
}

.todo-list-rounded .form-check .form-check-label {
  min-height: 18px;
  display: block;
  margin-left: 1.75rem;
  font-size: 0.812rem;
  line-height: 1.5;
}

.rtl .todo-list-rounded .form-check .form-check-label {
  margin-left: 0;
  margin-right: 1.75rem;
}

.todo-list-rounded .form-check .form-check-label input {
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 0;
  margin-top: 0;
  z-index: 1;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}

.rtl .todo-list-rounded .form-check .form-check-label input {
  left: auto;
  right: 0;
}

.todo-list-rounded .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .todo-list-rounded .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  position: absolute;
  top: 0;
  left: 0;
}

.rtl .todo-list-rounded .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .todo-list-rounded .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  left: auto;
  right: 0;
}

.todo-list-rounded .form-check .form-check-label input[type="checkbox"] + .input-helper:before {
  content: "";
  width: 18px;
  height: 18px;
  border-radius: 100%;
  border: 2px solid #dee2e6;
  border-width: 2px;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  background: #ffffff;
  margin-top: 5px;
}

.todo-list-rounded .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  font-family: themify;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  content: '\e64c';
  font-size: .9375rem;
  font-weight: bold;
  color: #1F3BB3;
  margin-top: 5px;
}

.todo-list-rounded .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
  background: #ffffff;
  color: #1F3BB3;
  border: 2px solid #1F3BB3;
}

.todo-list-rounded .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
  width: 18px;
  opacity: 1;
  line-height: 14px;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1.15);
  -ms-transform: scale(1.15);
  -o-transform: scale(1.15);
  transform: scale(1.15);
  text-align: center;
}

.todo-list-rounded .form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
  border-color: #dee2e6;
}

.todo-list-rounded .form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
  background: #dee2e6;
  color: #ffffff;
}

.todo-list-rounded .form-check .form-check-label input[type="radio"] + .input-helper:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  border: solid #1F3BB3;
  border-width: 2px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.rtl .todo-list-rounded .form-check .form-check-label input[type="radio"] + .input-helper:before {
  left: auto;
  right: 0;
}

.todo-list-rounded .form-check .form-check-label input[type="radio"] + .input-helper:after {
  content: "";
  width: 8px;
  height: 8px;
  background: #ffffff;
  border-radius: 50%;
  top: 6px;
  left: 6px;
  -webkit-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  position: absolute;
}

.rtl .todo-list-rounded .form-check .form-check-label input[type="radio"] + .input-helper:after {
  left: auto;
  right: 6px;
}

.todo-list-rounded .form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
  background: #1F3BB3;
  border-width: 0;
}

.todo-list-rounded .form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
  opacity: 1;
  line-height: 1.5;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.todo-list-rounded .form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
  border-color: #dee2e6;
}

.todo-list-rounded .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
  background: #dee2e6;
}

.todo-list-rounded .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
  background: #ffffff;
}

.form-check-primary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-primary.form-check label input[type="radio"] + .input-helper:before {
  border-color: primary;
}

.form-check-primary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-primary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #1F3BB3;
}

.form-check-secondary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"] + .input-helper:before {
  border-color: secondary;
}

.form-check-secondary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #F1F1F1;
}

.form-check-success.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-success.form-check label input[type="radio"] + .input-helper:before {
  border-color: success;
}

.form-check-success.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-success.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #34B1AA;
}

.form-check-info.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-info.form-check label input[type="radio"] + .input-helper:before {
  border-color: info;
}

.form-check-info.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-info.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #52CDFF;
}

.form-check-warning.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-warning.form-check label input[type="radio"] + .input-helper:before {
  border-color: warning;
}

.form-check-warning.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-warning.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #ffaf00;
}

.form-check-danger.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-danger.form-check label input[type="radio"] + .input-helper:before {
  border-color: danger;
}

.form-check-danger.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-danger.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #F95F53;
}

.form-check-light.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-light.form-check label input[type="radio"] + .input-helper:before {
  border-color: light;
}

.form-check-light.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-light.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #fbfbfb;
}

.form-check-dark.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-dark.form-check label input[type="radio"] + .input-helper:before {
  border-color: dark;
}

.form-check-dark.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-dark.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #1E283D;
}

/* Dropdowns */
.dropdown .dropdown-toggle:after {
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  font: normal normal normal 24px/1 "themify";
  content: "\e64b";
  width: auto;
  height: auto;
  vertical-align: middle;
  line-height: .625rem;
  font-size: .5rem;
  margin-left: .3rem;
  font-weight: bold;
}

.dropdown .dropdown-menu {
  margin-top: 2px;
  font-size: 0.812rem;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
}

.dropdown .dropdown-menu .dropdown-item {
  font-size: .875rem;
  padding: .25rem 1.5rem;
}

.dropdown .dropdown-menu .dropdown-item:active {
  background: initial;
}

/* Forms */
.form-group {
  margin-bottom: 1.5rem;
}

.input-group-append,
.input-group-prepend {
  color: #c9c8c8;
  width: auto;
  border: none;
}

.input-group-append .input-group-text,
.input-group-prepend .input-group-text {
  border-color: #dee2e6;
  padding: .5rem .75rem;
  color: #c9c8c8;
}

.form-control, .asColorPicker-input, .dataTables_wrapper select, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  border: 1px solid #dee2e6;
  font-weight: 400;
  font-size: 0.875rem;
  border-radius: 4px;
  height: 2rem;
}

select.form-control, select.asColorPicker-input, .dataTables_wrapper select, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead,
select.tt-query,
select.tt-hint {
  padding: .4375rem .75rem;
  border: 0;
  outline: 1px solid #dee2e6;
  color: #c9c8c8;
}

select.form-control:focus, select.asColorPicker-input:focus, .dataTables_wrapper select:focus, .select2-container--default select.select2-selection--single:focus, .select2-container--default .select2-selection--single select.select2-search__field:focus, select.typeahead:focus,
select.tt-query:focus,
select.tt-hint:focus {
  outline: 1px solid #dee2e6;
}

select.form-control.border-primary, select.border-primary.asColorPicker-input, .dataTables_wrapper select.border-primary, .select2-container--default select.border-primary.select2-selection--single, .select2-container--default .select2-selection--single select.border-primary.select2-search__field, select.border-primary.typeahead,
select.border-primary.tt-query,
select.border-primary.tt-hint {
  outline: 1px solid #1F3BB3;
}

select.form-control.border-primary:focus, select.border-primary.asColorPicker-input:focus, .dataTables_wrapper select.border-primary:focus, .select2-container--default select.border-primary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-primary.select2-search__field:focus, select.border-primary.typeahead:focus,
select.border-primary.tt-query:focus,
select.border-primary.tt-hint:focus {
  outline: 1px solid #1F3BB3;
}

select.form-control.border-secondary, select.form-control.loader-demo-box, select.loader-demo-box.asColorPicker-input, .dataTables_wrapper select.loader-demo-box, .select2-container--default select.loader-demo-box.select2-selection--single, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field, select.loader-demo-box.typeahead,
select.loader-demo-box.tt-query,
select.loader-demo-box.tt-hint, select.border-secondary.asColorPicker-input, .dataTables_wrapper select.border-secondary, .select2-container--default select.border-secondary.select2-selection--single, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field, select.border-secondary.typeahead,
select.border-secondary.tt-query,
select.border-secondary.tt-hint {
  outline: 1px solid #F1F1F1;
}

select.form-control.border-secondary:focus, select.form-control.loader-demo-box:focus, select.loader-demo-box.asColorPicker-input:focus, .dataTables_wrapper select.loader-demo-box:focus, .select2-container--default select.loader-demo-box.select2-selection--single:focus, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field:focus, select.loader-demo-box.typeahead:focus,
select.loader-demo-box.tt-query:focus,
select.loader-demo-box.tt-hint:focus, select.border-secondary.asColorPicker-input:focus, .dataTables_wrapper select.border-secondary:focus, .select2-container--default select.border-secondary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field:focus, select.border-secondary.typeahead:focus,
select.border-secondary.tt-query:focus,
select.border-secondary.tt-hint:focus {
  outline: 1px solid #F1F1F1;
}

select.form-control.border-success, select.border-success.asColorPicker-input, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm, .dataTables_wrapper select.border-success, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm, .select2-container--default select.border-success.select2-selection--single, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm, .select2-container--default .select2-selection--single select.border-success.select2-search__field, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint, select.border-success.typeahead,
select.border-success.tt-query,
select.border-success.tt-hint {
  outline: 1px solid #34B1AA;
}

select.form-control.border-success:focus, select.border-success.asColorPicker-input:focus, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm:focus, .dataTables_wrapper select.border-success:focus, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm:focus, .select2-container--default select.border-success.select2-selection--single:focus, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm:focus, .select2-container--default .select2-selection--single select.border-success.select2-search__field:focus, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead:focus,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query:focus,
.swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint:focus, select.border-success.typeahead:focus,
select.border-success.tt-query:focus,
select.border-success.tt-hint:focus {
  outline: 1px solid #34B1AA;
}

select.form-control.border-info, select.border-info.asColorPicker-input, .dataTables_wrapper select.border-info, .select2-container--default select.border-info.select2-selection--single, .select2-container--default .select2-selection--single select.border-info.select2-search__field, select.border-info.typeahead,
select.border-info.tt-query,
select.border-info.tt-hint {
  outline: 1px solid #52CDFF;
}

select.form-control.border-info:focus, select.border-info.asColorPicker-input:focus, .dataTables_wrapper select.border-info:focus, .select2-container--default select.border-info.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-info.select2-search__field:focus, select.border-info.typeahead:focus,
select.border-info.tt-query:focus,
select.border-info.tt-hint:focus {
  outline: 1px solid #52CDFF;
}

select.form-control.border-warning, select.border-warning.asColorPicker-input, .dataTables_wrapper select.border-warning, .select2-container--default select.border-warning.select2-selection--single, .select2-container--default .select2-selection--single select.border-warning.select2-search__field, select.border-warning.typeahead,
select.border-warning.tt-query,
select.border-warning.tt-hint {
  outline: 1px solid #ffaf00;
}

select.form-control.border-warning:focus, select.border-warning.asColorPicker-input:focus, .dataTables_wrapper select.border-warning:focus, .select2-container--default select.border-warning.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-warning.select2-search__field:focus, select.border-warning.typeahead:focus,
select.border-warning.tt-query:focus,
select.border-warning.tt-hint:focus {
  outline: 1px solid #ffaf00;
}

select.form-control.border-danger, select.border-danger.asColorPicker-input, .dataTables_wrapper select.border-danger, .select2-container--default select.border-danger.select2-selection--single, .select2-container--default .select2-selection--single select.border-danger.select2-search__field, select.border-danger.typeahead,
select.border-danger.tt-query,
select.border-danger.tt-hint {
  outline: 1px solid #F95F53;
}

select.form-control.border-danger:focus, select.border-danger.asColorPicker-input:focus, .dataTables_wrapper select.border-danger:focus, .select2-container--default select.border-danger.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-danger.select2-search__field:focus, select.border-danger.typeahead:focus,
select.border-danger.tt-query:focus,
select.border-danger.tt-hint:focus {
  outline: 1px solid #F95F53;
}

select.form-control.border-light, select.border-light.asColorPicker-input, .dataTables_wrapper select.border-light, .select2-container--default select.border-light.select2-selection--single, .select2-container--default .select2-selection--single select.border-light.select2-search__field, select.border-light.typeahead,
select.border-light.tt-query,
select.border-light.tt-hint {
  outline: 1px solid #fbfbfb;
}

select.form-control.border-light:focus, select.border-light.asColorPicker-input:focus, .dataTables_wrapper select.border-light:focus, .select2-container--default select.border-light.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-light.select2-search__field:focus, select.border-light.typeahead:focus,
select.border-light.tt-query:focus,
select.border-light.tt-hint:focus {
  outline: 1px solid #fbfbfb;
}

select.form-control.border-dark, select.border-dark.asColorPicker-input, .dataTables_wrapper select.border-dark, .select2-container--default select.border-dark.select2-selection--single, .select2-container--default .select2-selection--single select.border-dark.select2-search__field, select.border-dark.typeahead,
select.border-dark.tt-query,
select.border-dark.tt-hint {
  outline: 1px solid #1E283D;
}

select.form-control.border-dark:focus, select.border-dark.asColorPicker-input:focus, .dataTables_wrapper select.border-dark:focus, .select2-container--default select.border-dark.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-dark.select2-search__field:focus, select.border-dark.typeahead:focus,
select.border-dark.tt-query:focus,
select.border-dark.tt-hint:focus {
  outline: 1px solid #1E283D;
}

.form-group label {
  font-size: 0.812rem;
  line-height: 1.4rem;
  vertical-align: top;
  margin-bottom: .5rem;
}

.form-group.has-danger .form-control, .form-group.has-danger .asColorPicker-input, .form-group.has-danger .dataTables_wrapper select, .dataTables_wrapper .form-group.has-danger select, .form-group.has-danger .select2-container--default .select2-selection--single, .select2-container--default .form-group.has-danger .select2-selection--single, .form-group.has-danger .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-group.has-danger .select2-search__field, .form-group.has-danger .typeahead,
.form-group.has-danger .tt-query,
.form-group.has-danger .tt-hint {
  border-color: #F95F53;
}

.form-group .file-upload-default {
  visibility: hidden;
  position: absolute;
}

.form-group .file-upload-info {
  background: transparent;
}

.map-container {
  position: relative;
  min-width: 100%;
  max-width: 100%;
  display: block;
  padding: 35% 0;
  overflow: hidden;
  border-radius: 5px;
}

.map-container .google-map {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.map-container .google-map.no-controls .gmnoprint, .map-container .google-map.no-controls .gm-style-cc {
  display: none;
}

/* Icons */
.icons-list {
  border-left: 1px solid #dee2e6;
  border-top: 1px solid #dee2e6;
}

.icons-list > div {
  background: #ffffff;
  border-bottom: 1px solid #dee2e6;
  border-right: 1px solid #dee2e6;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 15px 15px;
  font-weight: 400;
  font-size: 0.812rem;
}

.icons-list > div i {
  display: inline-block;
  font-size: 20px;
  width: 40px;
  text-align: left;
  color: #1F3BB3;
}

.icon-in-bg {
  width: 55px;
  height: 55px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.icon-lg, .data-icon-card-primary .background-icon i, .data-icon-card-secondary .background-icon i, .data-icon-card-success .background-icon i, .data-icon-card-info .background-icon i, .data-icon-card-warning .background-icon i, .data-icon-card-danger .background-icon i, .data-icon-card-light .background-icon i, .data-icon-card-dark .background-icon i {
  font-size: 2.875rem;
}

.icon-md {
  font-size: 2rem;
}

.icon-sm {
  font-size: 1rem;
}

/* Loaders */
#pgloading {
  position: static;
}

#pgloading .bokeh {
  font-size: 100px;
  width: 1em;
  height: 1em;
  position: relative;
  margin: 0 auto;
  border-radius: 50%;
  border: 0.01em solid #dee2e6;
  list-style: none;
  padding: 0;
}

#pgloading .bokeh li {
  position: absolute;
  width: .2em;
  height: .2em;
  border-radius: 50%;
}

#pgloading .bokeh li:nth-child(1) {
  left: 50%;
  top: 0;
  margin: 0 0 0 -.1em;
  background: #34B1AA;
  -webkit-transform-origin: 50% 250%;
  transform-origin: 50% 250%;
  -webkit-animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
  animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(2) {
  top: 50%;
  right: 0;
  margin: -.1em 0 0 0;
  background: #F95F53;
  -webkit-transform-origin: -150% 50%;
  transform-origin: -150% 50%;
  -webkit-animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
  animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(3) {
  left: 50%;
  bottom: 0;
  margin: 0 0 0 -.1em;
  background: #ffaf00;
  -webkit-transform-origin: 50% -150%;
  transform-origin: 50% -150%;
  -webkit-animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
  animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(4) {
  top: 50%;
  left: 0;
  margin: -.1em 0 0 0;
  background: #1F3BB3;
  -webkit-transform-origin: 250% 50%;
  transform-origin: 250% 50%;
  -webkit-animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
  animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
}

@-webkit-keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-webkit-keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

@keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

.glowing-loader {
  position: relative;
}

.s2 {
  position: absolute;
  height: 70px;
  width: 70px;
  top: 50px;
  background-color: transparent;
  left: 50%;
  transform: translate(-50%, -50%);
}

.s1 {
  position: absolute;
  height: 70px;
  width: 70px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(45deg);
  background-color: transparent;
}

.bigcon {
  position: absolute;
  height: 75px;
  width: 75px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(-45deg);
  background-color: transparent;
  animation: bigcon 2s infinite linear;
  animation-delay: 0.25s;
}

.b {
  border-radius: 50%;
  position: absolute;
}

.s {
  width: 15px;
  height: 15px;
  animation: small 2s infinite ease;
  box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  background-color: #1F3BB3;
}

.s:nth-child(1) {
  top: 0%;
  left: 0%;
}

.s:nth-child(2) {
  top: 0%;
  right: 0%;
}

.s:nth-child(3) {
  right: 0%;
  bottom: 0%;
}

.s:nth-child(4) {
  bottom: 0%;
  left: 0%;
}

.big {
  width: 15px;
  height: 15px;
  border-radius: 15px;
  box-shadow: 0px 0px 10px #1F3BB3, 0px 0px 20px #1F3BB3, 0px 0px 30px #1F3BB3, 0px 0px 50px #1F3BB3, 0px 0px 60px #1F3BB3;
  z-index: 1;
  background-color: #1F3BB3;
  animation: bigball 1s infinite linear;
}

.sb1 {
  animation-delay: -1.75s;
}

.sb6 {
  animation-delay: -1.5s;
}

.sb2 {
  animation-delay: -1.25s;
}

.sb7 {
  animation-delay: -1s;
}

.sb3 {
  animation-delay: -0.75s;
}

.sb8 {
  animation-delay: -0.5s;
}

.sb4 {
  animation-delay: -0.25s;
}

.sb5 {
  animation-delay: -0s;
}

@keyframes bigcon {
  0% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(45deg);
  }
  100% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(405deg);
  }
}

@keyframes small {
  0% {
    transform: scale(1);
    background-color: #5671e2;
  }
  10% {
    transform: scale(1.3);
    background-color: #1F3BB3;
  }
  15% {
    transform: scale(1);
  }
  25% {
    transform: scale(1);
    background-color: #1F3BB3;
  }
  100% {
    transform: scale(1);
    background-color: #1F3BB3;
  }
}

/* Pixel loader */
.pixel-loader {
  width: 10px;
  height: 10px;
  background: #ffaf00;
  color: #ffaf00;
  margin: 80px auto;
  box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  animation: anim 2s linear infinite;
}

@keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg);
  }
  50% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  75% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  100% {
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg);
  }
}

/* Square box loader */
@keyframes dyinglight {
  15% {
    transform: scale(1.6);
  }
  50% {
    transform: rotate(-89deg);
  }
  100% {
    transform: rotate(-90deg);
  }
}

.square-box-loader {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  display: inline-block;
}

.square-box-loader-square {
  display: block;
  width: 30px;
  height: 30px;
  background: #1F3BB3;
}

.square-box-loader-container {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  transform-origin: 50% 50% 0;
  animation: dyinglight 1s ease infinite;
  backface-visibility: hidden;
}

.square-box-loader-corner-top:before,
.square-box-loader-corner-top:after,
.square-box-loader-corner-bottom:before,
.square-box-loader-corner-bottom:after {
  position: absolute;
  width: 10px;
  height: 10px;
  color: #1F3BB3;
  content: '';
}

.square-box-loader-corner-top:before {
  border-left: 1px solid;
  border-top: 1px solid;
  top: -4px;
  left: -4px;
}

.square-box-loader-corner-top:after {
  border-right: 1px solid;
  border-top: 1px solid;
  top: -4px;
  right: -4px;
}

.square-box-loader-corner-bottom:before {
  border-left: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  left: -4px;
}

.square-box-loader-corner-bottom:after {
  border-right: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  right: -4px;
}

/* Circle loader */
.circle-loader {
  width: 70px;
  height: 70px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.circle-loader:before, .circle-loader:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: #ffaf00;
}

.circle-loader:before {
  z-index: 10;
  animation: spin 1s infinite;
}

.circle-loader:after {
  border: 10px solid #F1F1F1;
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/* Jumping dots loader */
.jumping-dots-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.jumping-dots-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: rgba(249, 95, 83, 0.8);
  margin: 35px 5px;
}

.jumping-dots-loader span:nth-child(1) {
  animation: bounce 1s ease-in-out infinite;
}

.jumping-dots-loader span:nth-child(2) {
  animation: bounce 1s ease-in-out 0.33s infinite;
}

.jumping-dots-loader span:nth-child(3) {
  animation: bounce 1s ease-in-out 0.66s infinite;
}

@keyframes bounce {
  0%, 75%, 100% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  25% {
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
}

/* Bar loader */
.bar-loader {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.bar-loader span {
  display: inline-block;
  width: 5px;
  height: 30px;
  background-color: rgba(249, 95, 83, 0.7);
}

.bar-loader span:nth-child(1) {
  animation: grow 1s ease-in-out infinite;
}

.bar-loader span:nth-child(2) {
  animation: grow 1s ease-in-out 0.15s infinite;
}

.bar-loader span:nth-child(3) {
  animation: grow 1s ease-in-out 0.30s infinite;
}

.bar-loader span:nth-child(4) {
  animation: grow 1s ease-in-out 0.45s infinite;
}

@keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -o-transform: scaleY(1);
    transform: scaleY(1);
  }
  50% {
    -webkit-transform: scaleY(1.8);
    -ms-transform: scaleY(1.8);
    -o-transform: scaleY(1.8);
    transform: scaleY(1.8);
  }
}

/* Square path loader */
.square-path-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.square-path-loader:before, .square-path-loader:after {
  content: "";
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: calc(50% - 10px);
  background-color: rgba(52, 177, 170, 0.7);
  animation: squaremove 1s ease-in-out infinite;
}

.square-path-loader:after {
  bottom: 0;
  animation-delay: 0.5s;
}

@keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    -ms-transform: translate(0, 0) rotate(0);
    -o-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0);
  }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    -ms-transform: translate(40px, 40px) rotate(45deg);
    -o-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg);
  }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    -ms-transform: translate(0px, 80px) rotate(0deg);
    -o-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg);
  }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    -ms-transform: translate(-40px, 40px) rotate(45deg);
    -o-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg);
  }
}

/* Dot opacity loader */
.dot-opacity-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.dot-opacity-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: #1F3BB3;
  margin: 35px 5px;
  opacity: 0;
}

.dot-opacity-loader span:nth-child(1) {
  animation: opacitychange 1s ease-in-out infinite;
}

.dot-opacity-loader span:nth-child(2) {
  animation: opacitychange 1s ease-in-out 0.33s infinite;
}

.dot-opacity-loader span:nth-child(3) {
  animation: opacitychange 1s ease-in-out 0.66s infinite;
}

@keyframes opacitychange {
  0%, 100% {
    opacity: 0;
  }
  60% {
    opacity: 1;
  }
}

/* Flip square */
.flip-square-loader {
  -webkit-perspective: 120px;
  -moz-perspective: 120px;
  -ms-perspective: 120px;
  perspective: 120px;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.flip-square-loader:before {
  content: "";
  position: absolute;
  left: 25px;
  top: 25px;
  width: 50px;
  height: 50px;
  background-color: rgba(52, 177, 170, 0.7);
  animation: flip 1s infinite;
}

@keyframes flip {
  0% {
    transform: rotate(0);
  }
  50% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(180deg) rotateX(180deg);
  }
}

/* Moving square loader */
.moving-square-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.moving-square-loader:before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  top: calc(50% - 10px);
  left: 0px;
  background-color: rgba(249, 95, 83, 0.7);
  animation: rotatemove 1s infinite;
}

@keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    -ms-transform: scale(1) translateX(0px);
    -o-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px);
  }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    -ms-transform: scale(2) translateX(45px);
    -o-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px);
  }
}

/* Lists */
ul,
ol,
dl {
  padding-left: 1rem;
  font-size: 0.812rem;
}

ul li,
ol li,
dl li {
  line-height: 1.8;
}

.list-ticked,
.list-arrow,
.list-star {
  list-style: none;
  padding: 0;
}

.list-ticked li,
.list-arrow li,
.list-star li {
  padding-left: 1.5rem;
}

.list-ticked li:before,
.list-arrow li:before,
.list-star li:before {
  font-family: "themify";
  margin-left: -1.5rem;
  width: 1.5rem;
  margin-right: .5rem;
  font-size: .6rem;
}

.list-ticked li:before {
  content: '\e64c';
  color: #F95F53;
}

.list-arrow li:before {
  content: '\e649';
  color: #34B1AA;
}

.list-star li:before {
  content: '\e60a';
  color: #ffaf00;
}

.solid-bullet-list {
  position: relative;
  padding-left: 0;
}

.rtl .solid-bullet-list {
  padding-right: 0;
}

.solid-bullet-list li {
  position: relative;
  list-style-type: none;
  padding-left: 25px;
  line-height: 1;
  padding-bottom: 2.125rem;
}

.solid-bullet-list li * {
  line-height: .8;
}

.solid-bullet-list li:before, .solid-bullet-list li:after {
  content: "";
  position: absolute;
}

.solid-bullet-list li:before {
  top: 0;
  left: 0;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #1F3BB3;
  z-index: 1;
}

.solid-bullet-list:after {
  content: "";
  border: 1px solid #dee2e6;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 4px;
  z-index: 0;
}

.bullet-line-list {
  padding-left: 30px;
  position: relative;
  list-style-type: none;
  margin-bottom: 0;
}

.rtl .bullet-line-list {
  padding-left: unset;
  padding-right: 30px;
}

.bullet-line-list li {
  position: relative;
  padding-bottom: 10px;
}

.bullet-line-list li:last-child {
  padding-bottom: 0;
}

.bullet-line-list li:before {
  width: 13px;
  height: 13px;
  left: -28px;
  top: 6px;
  border: 4px solid  #E9EDFB;
  margin-right: 15px;
  z-index: 2;
  background: #1F3BB3;
}

.rtl .bullet-line-list li:before {
  left: unset;
  right: -45px;
}

.bullet-line-list li:before {
  content: "";
  position: absolute;
  border-radius: 100%;
}

.bullet-line-list:after {
  content: "";
  border: 1px solid #dee2e6;
  position: absolute;
  top: 3px;
  bottom: 0;
  left: 7px;
}

.rtl .bullet-line-list:after {
  left: unset;
  right: 7px;
}

.bullet-line-list:last-child:after {
  display: none;
}

.icon-data-list {
  list-style-type: none;
  padding-left: 0;
  position: relative;
  margin-bottom: 0;
  font-family: "Manrope", sans-serif;
}

.icon-data-list li {
  margin-bottom: 1rem;
}

.icon-data-list li img {
  width: 40px;
  height: 40px;
  margin-right: 10px;
  border-radius: 100%;
}

/* Modals */
.modal .modal-dialog {
  margin-top: 100px;
}

.modal .modal-dialog .modal-content .modal-header {
  padding: 25px 26px;
}

.modal .modal-dialog .modal-content .modal-header .close {
  border: none;
  background: transparent;
}

.modal .modal-dialog .modal-content .modal-header .close span {
  font-size: 20px;
  font-weight: 400;
  color: #6a6a6a;
}

.modal .modal-dialog .modal-content .modal-body {
  padding: 35px 26px;
}

.modal .modal-dialog .modal-content .modal-footer {
  padding: 15px 31px;
}

@media (max-width: 400px) {
  .modal .modal-dialog .modal-content .modal-footer {
    padding-left: .25rem;
    padding-right: .25rem;
    flex-direction: column;
  }
  .modal .modal-dialog .modal-content .modal-footer > :not(:last-child) {
    margin-right: 0;
    margin-bottom: .7rem;
  }
  .modal .modal-dialog .modal-content .modal-footer > :not(:first-child) {
    margin-left: 0;
  }
}

/* Pagination */
.pagination .page-item .page-link {
  border-color: #dee2e6;
  color: color(black);
  font-size: .875rem;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
}

.pagination .page-item .page-link:focus {
  background: inherit;
}

.pagination .page-item .page-link i:before {
  font-size: inherit;
  line-height: 1;
  vertical-align: middle;
}

.pagination .page-item.active .page-link, .pagination .page-item:hover .page-link, .pagination .page-item:focus .page-link, .pagination .page-item:active .page-link {
  background: theme-color("primary");
  border-color: theme-color("primary");
  color: color(white);
}

.pagination.pagination-flat .page-item {
  margin: 0 .25rem;
}

.pagination.pagination-flat .page-item .page-link {
  border: none;
  border-radius: 2px;
}

.pagination.pagination-separated .page-item {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-separated .page-item:first-child {
  margin-left: 0;
}

.pagination.pagination-separated .page-item:last-child {
  margin-right: 0;
}

.pagination.pagination-separated .page-item .page-link {
  border-radius: 2px;
}

.pagination.pagination-rounded .page-item:first-child .page-link {
  border-radius: 25px 0 0 25px;
}

.pagination.pagination-rounded .page-item:last-child .page-link {
  border-radius: 0 25px 25px 0;
}

.pagination.pagination-rounded-flat .page-item {
  margin-right: 3px;
  margin-left: 3px;
}

.pagination.pagination-rounded-flat .page-item .page-link {
  border: none;
  border-radius: 50px;
}

.pagination.pagination-rounded-separated .page-item {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-rounded-separated .page-item:first-child {
  margin-left: 0;
}

.pagination.pagination-rounded-separated .page-item:first-child .page-link {
  border-radius: 10px 0 0 10px;
}

.pagination.pagination-rounded-separated .page-item:last-child {
  margin-right: 0;
}

.pagination.pagination-rounded-separated .page-item:last-child .page-link {
  border-radius: 0 10px 10px 0;
}

.pagination.pagination-rounded-separated .page-item .page-link {
  border-radius: 2px;
}

/* pagination variations */
.pagination-primary .page-item.active .page-link {
  background: #1F3BB3;
  border-color: #1F3BB3;
}

.pagination-primary .page-item:hover .page-link {
  background: #2342c9;
  border-color: #1F3BB3;
  color: #ffffff;
}

.pagination-secondary .page-item.active .page-link {
  background: #F1F1F1;
  border-color: #F1F1F1;
}

.pagination-secondary .page-item:hover .page-link {
  background: #fefefe;
  border-color: #F1F1F1;
  color: #ffffff;
}

.pagination-success .page-item.active .page-link {
  background: #34B1AA;
  border-color: #34B1AA;
}

.pagination-success .page-item:hover .page-link {
  background: #3ac5bd;
  border-color: #34B1AA;
  color: #ffffff;
}

.pagination-info .page-item.active .page-link {
  background: #52CDFF;
  border-color: #52CDFF;
}

.pagination-info .page-item:hover .page-link {
  background: #6cd4ff;
  border-color: #52CDFF;
  color: #ffffff;
}

.pagination-warning .page-item.active .page-link {
  background: #ffaf00;
  border-color: #ffaf00;
}

.pagination-warning .page-item:hover .page-link {
  background: #ffb71a;
  border-color: #ffaf00;
  color: #ffffff;
}

.pagination-danger .page-item.active .page-link {
  background: #F95F53;
  border-color: #F95F53;
}

.pagination-danger .page-item:hover .page-link {
  background: #fa766c;
  border-color: #F95F53;
  color: #ffffff;
}

.pagination-light .page-item.active .page-link {
  background: #fbfbfb;
  border-color: #fbfbfb;
}

.pagination-light .page-item:hover .page-link {
  background: white;
  border-color: #fbfbfb;
  color: #ffffff;
}

.pagination-dark .page-item.active .page-link {
  background: #1E283D;
  border-color: #1E283D;
}

.pagination-dark .page-item:hover .page-link {
  background: #26334e;
  border-color: #1E283D;
  color: #ffffff;
}

/* Popovers */
.popover-static-demo .popover {
  width: 185px;
  position: relative;
  display: block;
  float: left;
  margin: 1rem .5rem;
  z-index: 10;
}

.popover-static-demo .popover.bs-popover-bottom-demo .arrow, .popover-static-demo .popover.bs-popover-top-demo .arrow {
  left: 50%;
}

.popover-static-demo .popover.bs-popover-left-demo .arrow, .popover-static-demo .popover.bs-popover-right-demo .arrow {
  top: 50%;
}

.popover {
  z-index: 1029;
}

.popover.bs-popover-top-demo .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-top-demo .arrow:after {
  border-top-color: #fff;
}

.popover.bs-popover-right-demo .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-right-demo .arrow:after {
  border-right-color: #fff;
}

.popover.bs-popover-bottom-demo .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-bottom-demo .arrow:after {
  border-bottom-color: #fff;
}

.popover.bs-popover-bottom-demo .popover-header:before {
  border-bottom: 0;
}

.popover.bs-popover-left-demo .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-left-demo .arrow:after {
  border-left-color: #fff;
}

.popover .popover-header {
  font-size: .9375rem;
  border-bottom: 0;
  background: #ffffff;
  color: inherit;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.popover .popover-body {
  color: #737F8B;
}

.popover.left .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.left .arrow:after {
  border-left-color: #fff;
}

.popover.right .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.right .arrow:after {
  border-right-color: #fff;
}

.popover.top .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.top .arrow:after {
  border-top-color: #fff;
}

.popover.bottom .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bottom .arrow:after {
  border-bottom-color: #fff;
}

.popover-primary {
  border-color: #1F3BB3;
}

.popover-primary .popover-header {
  background: #1F3BB3;
  color: #ffffff;
  border-bottom: 0;
}

.popover-primary.bs-popover-top .arrow:before, .popover-primary.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-primary.bs-popover-top .arrow:after, .popover-primary.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #1F3BB3;
}

.popover-primary.bs-popover-right .arrow:before, .popover-primary.bs-popover-right .arrow:after {
  border-right-color: #1F3BB3;
}

.popover-primary.bs-popover-bottom .arrow:before, .popover-primary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-primary.bs-popover-bottom .arrow:after, .popover-primary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #1F3BB3;
}

.popover-primary.bs-popover-left .arrow:before, .popover-primary.bs-popover-left .arrow:after {
  border-left-color: #1F3BB3;
}

.popover-secondary {
  border-color: #F1F1F1;
}

.popover-secondary .popover-header {
  background: #F1F1F1;
  color: #ffffff;
  border-bottom: 0;
}

.popover-secondary.bs-popover-top .arrow:before, .popover-secondary.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-secondary.bs-popover-top .arrow:after, .popover-secondary.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #F1F1F1;
}

.popover-secondary.bs-popover-right .arrow:before, .popover-secondary.bs-popover-right .arrow:after {
  border-right-color: #F1F1F1;
}

.popover-secondary.bs-popover-bottom .arrow:before, .popover-secondary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-secondary.bs-popover-bottom .arrow:after, .popover-secondary.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #F1F1F1;
}

.popover-secondary.bs-popover-left .arrow:before, .popover-secondary.bs-popover-left .arrow:after {
  border-left-color: #F1F1F1;
}

.popover-success {
  border-color: #34B1AA;
}

.popover-success .popover-header {
  background: #34B1AA;
  color: #ffffff;
  border-bottom: 0;
}

.popover-success.bs-popover-top .arrow:before, .popover-success.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-success.bs-popover-top .arrow:after, .popover-success.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #34B1AA;
}

.popover-success.bs-popover-right .arrow:before, .popover-success.bs-popover-right .arrow:after {
  border-right-color: #34B1AA;
}

.popover-success.bs-popover-bottom .arrow:before, .popover-success.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-success.bs-popover-bottom .arrow:after, .popover-success.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #34B1AA;
}

.popover-success.bs-popover-left .arrow:before, .popover-success.bs-popover-left .arrow:after {
  border-left-color: #34B1AA;
}

.popover-info {
  border-color: #52CDFF;
}

.popover-info .popover-header {
  background: #52CDFF;
  color: #ffffff;
  border-bottom: 0;
}

.popover-info.bs-popover-top .arrow:before, .popover-info.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-info.bs-popover-top .arrow:after, .popover-info.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #52CDFF;
}

.popover-info.bs-popover-right .arrow:before, .popover-info.bs-popover-right .arrow:after {
  border-right-color: #52CDFF;
}

.popover-info.bs-popover-bottom .arrow:before, .popover-info.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-info.bs-popover-bottom .arrow:after, .popover-info.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #52CDFF;
}

.popover-info.bs-popover-left .arrow:before, .popover-info.bs-popover-left .arrow:after {
  border-left-color: #52CDFF;
}

.popover-warning {
  border-color: #ffaf00;
}

.popover-warning .popover-header {
  background: #ffaf00;
  color: #ffffff;
  border-bottom: 0;
}

.popover-warning.bs-popover-top .arrow:before, .popover-warning.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-warning.bs-popover-top .arrow:after, .popover-warning.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #ffaf00;
}

.popover-warning.bs-popover-right .arrow:before, .popover-warning.bs-popover-right .arrow:after {
  border-right-color: #ffaf00;
}

.popover-warning.bs-popover-bottom .arrow:before, .popover-warning.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-warning.bs-popover-bottom .arrow:after, .popover-warning.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #ffaf00;
}

.popover-warning.bs-popover-left .arrow:before, .popover-warning.bs-popover-left .arrow:after {
  border-left-color: #ffaf00;
}

.popover-danger {
  border-color: #F95F53;
}

.popover-danger .popover-header {
  background: #F95F53;
  color: #ffffff;
  border-bottom: 0;
}

.popover-danger.bs-popover-top .arrow:before, .popover-danger.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-danger.bs-popover-top .arrow:after, .popover-danger.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #F95F53;
}

.popover-danger.bs-popover-right .arrow:before, .popover-danger.bs-popover-right .arrow:after {
  border-right-color: #F95F53;
}

.popover-danger.bs-popover-bottom .arrow:before, .popover-danger.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-danger.bs-popover-bottom .arrow:after, .popover-danger.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #F95F53;
}

.popover-danger.bs-popover-left .arrow:before, .popover-danger.bs-popover-left .arrow:after {
  border-left-color: #F95F53;
}

.popover-light {
  border-color: #fbfbfb;
}

.popover-light .popover-header {
  background: #fbfbfb;
  color: #ffffff;
  border-bottom: 0;
}

.popover-light.bs-popover-top .arrow:before, .popover-light.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-light.bs-popover-top .arrow:after, .popover-light.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #fbfbfb;
}

.popover-light.bs-popover-right .arrow:before, .popover-light.bs-popover-right .arrow:after {
  border-right-color: #fbfbfb;
}

.popover-light.bs-popover-bottom .arrow:before, .popover-light.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-light.bs-popover-bottom .arrow:after, .popover-light.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #fbfbfb;
}

.popover-light.bs-popover-left .arrow:before, .popover-light.bs-popover-left .arrow:after {
  border-left-color: #fbfbfb;
}

.popover-dark {
  border-color: #1E283D;
}

.popover-dark .popover-header {
  background: #1E283D;
  color: #ffffff;
  border-bottom: 0;
}

.popover-dark.bs-popover-top .arrow:before, .popover-dark.bs-popover-auto[data-popper-placement^="top"] .arrow:before, .popover-dark.bs-popover-top .arrow:after, .popover-dark.bs-popover-auto[data-popper-placement^="top"] .arrow:after {
  border-top-color: #1E283D;
}

.popover-dark.bs-popover-right .arrow:before, .popover-dark.bs-popover-right .arrow:after {
  border-right-color: #1E283D;
}

.popover-dark.bs-popover-bottom .arrow:before, .popover-dark.bs-popover-auto[data-popper-placement^="bottom"] .arrow:before, .popover-dark.bs-popover-bottom .arrow:after, .popover-dark.bs-popover-auto[data-popper-placement^="bottom"] .arrow:after {
  border-bottom-color: #1E283D;
}

.popover-dark.bs-popover-left .arrow:before, .popover-dark.bs-popover-left .arrow:after {
  border-left-color: #1E283D;
}

/* Portfolio */
.portfolio-grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  background: #1F3BB3;
  text-align: center;
  cursor: pointer;
}

.portfolio-grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  width: 100%;
  opacity: 0.8;
}

.portfolio-grid figure figcaption {
  padding: 2em;
  color: #ffffff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.portfolio-grid figure figcaption:after, .portfolio-grid figure figcaption:before {
  pointer-events: none;
}

.portfolio-grid figure.effect-text-in {
  border-radius: 0.25rem;
}

.portfolio-grid figure.effect-text-in h4, .portfolio-grid figure.effect-text-in .h4,
.portfolio-grid figure.effect-text-in img {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

.portfolio-grid figure.effect-text-in img {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.portfolio-grid figure.effect-text-in h4, .portfolio-grid figure.effect-text-in .h4,
.portfolio-grid figure.effect-text-in p {
  position: absolute;
  bottom: 10px;
  left: 0;
  padding: 10px;
  margin-bottom: 0;
  width: 100%;
}

.portfolio-grid figure.effect-text-in p {
  text-transform: none;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0, 50px, 0);
  transform: translate3d(0, 50px, 0);
}

.portfolio-grid figure.effect-text-in:hover img {
  -webkit-transform: translate3d(0, -80px, 0);
  transform: translate3d(0, -80px, 0);
}

.portfolio-grid figure.effect-text-in:hover h4, .portfolio-grid figure.effect-text-in:hover .h4 {
  -webkit-transform: translate3d(0, -100px, 0);
  transform: translate3d(0, -100px, 0);
}

.portfolio-grid figure.effect-text-in:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

/* Preview */
.preview-list .preview-item {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-align-items: flex-start;
  align-items: flex-start;
  padding: 1.25rem 0;
}

.preview-list .preview-item:last-child {
  border-bottom: 0;
}

.preview-list .preview-item .form-check {
  margin-top: 8px;
  margin-right: 1rem;
}

.preview-list .preview-item .preview-thumbnail {
  color: color(white);
  position: relative;
}

.preview-list .preview-item .preview-thumbnail img,
.preview-list .preview-item .preview-thumbnail .preview-icon {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.preview-list .preview-item .preview-thumbnail .preview-icon {
  padding: 6px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.preview-list .preview-item .preview-thumbnail .preview-icon i {
  font-size: 1.125rem;
  margin: 0;
}

.preview-list .preview-item .preview-thumbnail .badge {
  border: 2px solid color(white);
  border-radius: 100%;
  bottom: 5px;
  display: block;
  height: 14px;
  left: -5px;
  padding: 0;
  position: absolute;
  width: 14px;
}

.preview-list .preview-item .preview-item-content {
  line-height: 1;
  padding-left: 15px;
}

.preview-list .preview-item .preview-item-content:first-child {
  padding-left: 0;
}

.preview-list .preview-item .preview-item-content p {
  margin-bottom: 10px;
}

.preview-list .preview-item .preview-item-content p .content-category {
  font-family: 'source-sans-pro-semibold', sans-serif;
  padding-right: 15px;
  border-right: 1px solid #dee2e6;
}

.rtl .preview-list .preview-item .preview-item-content {
  padding-left: 0;
  padding-right: 1rem;
  margin-right: 0;
  margin-left: auto;
}

.preview-list .preview-item .preview-actions {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
}

.preview-list .preview-item .preview-actions i {
  width: 29px;
  color: color(gray-lightest);
  height: 29px;
  border: 2px solid color(gray-lightest);
  border-radius: 100%;
  padding: 3px 6px;
  display: inline-block;
}

.preview-list .preview-item .preview-actions i:first-child {
  margin-right: 10px;
}

.preview-list.comment-preview .preview-item {
  padding: .87rem 0;
}

.preview-list.comment-preview .preview-item:first-child {
  padding-top: 0;
}

.preview-list.comment-preview .preview-item p {
  line-height: 27px;
}

.preview-list.bordered .preview-item {
  border-bottom: 1px solid #dee2e6;
}

.preview-list.bordered .preview-item:last-child {
  border-bottom: 0;
}

/* Tables */
.table {
  margin-bottom: 0;
}

.table thead th {
  border-top: 0;
  border-bottom-width: 1px;
  font-weight: 600;
  font-size: .875rem;
}

.table thead th i {
  margin-left: 0.325rem;
}

.table th,
.table td {
  vertical-align: middle;
  line-height: 1;
  white-space: nowrap;
  padding: 1.125rem 1.375rem;
}

.table td {
  font-size: 0.812rem;
}

.table td img {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.table td .badge {
  margin-bottom: 0;
}

.table tr:last-child td {
  border-bottom: none;
}

.table.table-borderless {
  border: none;
}

.table.table-borderless tr,
.table.table-borderless td,
.table.table-borderless th {
  border: none;
}

.table.table-bordered {
  border-top: 1px solid #dee2e6;
}

.table.select-table tr td:first-child {
  padding-right: 10px;
}

.table.select-table th {
  color: #A3A3A3;
  font-style: normal;
  font-weight: bold;
  font-size: 11px;
  line-height: 15px;
  text-transform: uppercase;
  padding-right: 5px;
  padding-left: 0;
}

.table.select-table th .form-check {
  margin-bottom: 0;
  width: 20px;
}

.table.select-table td {
  font-family: Manrope;
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  color: #8D8D8D;
  padding-top: 14px;
  padding-bottom: 14px;
  padding-left: 0;
}

.table.select-table td .form-check {
  width: 20px;
}

.table.select-table td h6, .table.select-table td .h6 {
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  line-height: 18px;
  color: #000000;
  margin-bottom: 5px;
}

.table.select-table td p {
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  color: #737F8B;
  margin-bottom: 0;
}

.table.select-table td img {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  margin-right: 15px;
}

.table.select-table td .max-width-progress-wrap {
  width: 120px;
}

.table.select-table td .form-check {
  margin-bottom: 0;
}

.table > :not(:last-child) > :last-child > *, .jsgrid .jsgrid-table > :not(:last-child) > :last-child > * {
  border-bottom-color: #dee2e6;
}

.table > :not(:first-child), .jsgrid .jsgrid-table > :not(:first-child) {
  border-top: none;
}

.nav-tabs .nav-link {
  background: #f6f8fa;
  color: #000000;
  border-radius: 0;
  border: 1px solid #dee2e6;
  padding: .75rem 1.5rem;
}

@media (max-width: 767px) {
  .nav-tabs .nav-link {
    padding: .75rem .5rem;
  }
}

.nav-tabs .nav-item:first-child .nav-link {
  border-radius: 4px 0 0 0;
}

.nav-tabs .nav-item:last-child .nav-link {
  border-radius: 0 4px 0 0;
}

.nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom {
  border-bottom: 0;
}

.nav-tabs.nav-tabs-vertical .nav-link.active, .nav-tabs.nav-tabs-vertical-custom .nav-link.active {
  border-bottom-color: #dee2e6;
}

.nav-tabs.nav-tabs-vertical .nav-item:first-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:first-child .nav-link {
  border-radius: 4px 4px 0 0;
}

.nav-tabs.nav-tabs-vertical .nav-item:last-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:last-child .nav-link {
  border-radius: 0 0 4px 4px;
}

.nav-tabs.nav-tabs-vertical-custom {
  background: #1F3BB3;
  border-radius: 4px;
}

.nav-tabs.nav-tabs-vertical-custom .nav-link {
  background: transparent;
  border-color: rgba(255, 255, 255, 0.2);
  color: #081031;
  font-weight: 600;
  padding: 1.75rem;
}

.nav-tabs.nav-tabs-vertical-custom .nav-link.active {
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.2);
}

.nav-pills {
  border-bottom: 1px solid #dee2e6;
  padding-bottom: 1rem;
}

.nav-pills .nav-link {
  border: 1px solid #dee2e6;
  padding: .5rem 1.75rem;
}

@media (max-width: 767px) {
  .nav-pills .nav-link {
    padding: .5rem .5rem;
  }
}

.nav-pills .nav-item {
  margin-right: 1rem;
}

@media (max-width: 767px) {
  .nav-pills .nav-item {
    margin-right: .5rem;
  }
}

.nav-pills.nav-pills-vertical {
  border-bottom: 0;
}

.nav-pills.nav-pills-vertical .nav-item {
  margin-right: 0;
  margin-bottom: 1rem;
}

.nav-pills.nav-pills-custom {
  border-bottom: 0;
}

.nav-pills.nav-pills-custom .nav-link {
  border-radius: 20px;
  padding: .5rem 2.5rem;
  background: #fcfcfd;
  color: #000000;
}

.nav-pills.nav-pills-custom .nav-link.active {
  background: #F95F53;
  color: #ffffff;
}

.nav-pills.nav-pills-custom .nav-item {
  margin-top: .875rem;
}

/* Pills color variations */
.nav-pills-primary .nav-link {
  color: #1F3BB3;
}

.nav-pills-primary .nav-link.active {
  background: primary;
}

.nav-pills-secondary .nav-link {
  color: #F1F1F1;
}

.nav-pills-secondary .nav-link.active {
  background: secondary;
}

.nav-pills-success .nav-link {
  color: #34B1AA;
}

.nav-pills-success .nav-link.active {
  background: success;
}

.nav-pills-info .nav-link {
  color: #52CDFF;
}

.nav-pills-info .nav-link.active {
  background: info;
}

.nav-pills-warning .nav-link {
  color: #ffaf00;
}

.nav-pills-warning .nav-link.active {
  background: warning;
}

.nav-pills-danger .nav-link {
  color: #F95F53;
}

.nav-pills-danger .nav-link.active {
  background: danger;
}

.nav-pills-light .nav-link {
  color: #fbfbfb;
}

.nav-pills-light .nav-link.active {
  background: light;
}

.nav-pills-dark .nav-link {
  color: #1E283D;
}

.nav-pills-dark .nav-link.active {
  background: dark;
}

.tab-content {
  border: 1px solid #dee2e6;
  border-top: 0;
  padding: 2rem 1rem;
  text-align: justify;
}

.tab-content.tab-content-vertical {
  border-top: 1px solid #dee2e6;
}

.tab-content.tab-content-vertical-custom {
  border: 0;
  padding-top: 0;
}

.tab-content.tab-content-custom-pill {
  border: 0;
  padding-left: 0;
}

.home-tab {
  font-family: "Manrope", sans-serif;
}

.home-tab .nav-tabs {
  font-family: "Manrope", sans-serif;
  border-bottom: none;
}

.home-tab .nav-tabs .nav-item {
  background: transparent;
}

.home-tab .nav-tabs .nav-item .nav-link {
  font-style: normal;
  font-weight: 500;
  font-size: 13px;
  line-height: 18px;
  color: #212121;
  padding: 12px 14px;
  border: none;
  border-right: 1px solid #dee2e6;
  font-family: "Manrope", sans-serif;
  background: transparent;
}

@media (max-width: 991px) {
  .home-tab .nav-tabs .nav-item .nav-link {
    padding: 5px 4px;
    margin-bottom: 15px;
  }
}

.home-tab .nav-tabs .nav-item .nav-link.active {
  background: transparent;
  color: #1F3BB3;
}

.home-tab .tab-content {
  padding: 24px 0;
  font-family: "Manrope", sans-serif;
  border: none;
}

/* Timeline */
.timeline {
  list-style: none;
  padding: 0;
  position: relative;
}

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #F1F1F1;
  left: 50%;
  margin-left: -1.5px;
}

.timeline .timeline-wrapper {
  display: block;
  margin-bottom: 20px;
  position: relative;
  width: 100%;
  padding-right: 90px;
}

.timeline .timeline-wrapper:before {
  content: " ";
  display: table;
}

.timeline .timeline-wrapper:after {
  content: " ";
  display: table;
  clear: both;
}

.timeline .timeline-wrapper .timeline-panel {
  border-radius: 2px;
  padding: 20px;
  position: relative;
  background: #ffffff;
  border-radius: 6px;
  box-shadow: 1px 2px 35px 0 rgba(1, 1, 1, 0.1);
  width: 35%;
  margin-left: 15%;
}

.timeline .timeline-wrapper .timeline-panel:before {
  position: absolute;
  top: 0;
  width: 100%;
  height: 2px;
  content: "";
  left: 0;
  right: 0;
}

.timeline .timeline-wrapper .timeline-panel:after {
  position: absolute;
  top: 10px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #ffffff;
  border-right: 0 solid #ffffff;
  border-bottom: 14px solid transparent;
  content: " ";
}

.timeline .timeline-wrapper .timeline-panel .timeline-title {
  margin-top: 0;
  color: #1E283D;
  text-transform: uppercase;
}

.timeline .timeline-wrapper .timeline-panel .timeline-body p + p {
  margin-top: 5px;
}

.timeline .timeline-wrapper .timeline-panel .timeline-body ul {
  margin-bottom: 0;
}

.timeline .timeline-wrapper .timeline-panel .timeline-footer span {
  font-size: .6875rem;
}

.timeline .timeline-wrapper .timeline-panel .timeline-footer i {
  font-size: 1.5rem;
}

.timeline .timeline-wrapper .timeline-badge {
  width: 14px;
  height: 14px;
  position: absolute;
  top: 16px;
  left: calc(50% - 7px);
  z-index: 10;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  border: 2px solid #ffffff;
}

.timeline .timeline-wrapper .timeline-badge i {
  color: #ffffff;
}

.timeline .timeline-wrapper.timeline-inverted {
  padding-right: 0;
  padding-left: 90px;
}

.timeline .timeline-wrapper.timeline-inverted .timeline-panel {
  margin-left: auto;
  margin-right: 15%;
}

.timeline .timeline-wrapper.timeline-inverted .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}

@media (max-width: 767px) {
  .timeline .timeline-wrapper {
    padding-right: 150px;
  }
  .timeline .timeline-wrapper.timeline-inverted {
    padding-left: 150px;
  }
  .timeline .timeline-wrapper .timeline-panel {
    width: 60%;
    margin-left: 0;
    margin-right: 0;
  }
}

@media (max-width: 576px) {
  .timeline .timeline-wrapper .timeline-panel {
    width: 68%;
  }
}

.timeline-wrapper-primary .timeline-panel:before {
  background: #1F3BB3;
}

.timeline-wrapper-primary .timeline-badge {
  background: #1F3BB3;
}

.timeline-wrapper-secondary .timeline-panel:before {
  background: #F1F1F1;
}

.timeline-wrapper-secondary .timeline-badge {
  background: #F1F1F1;
}

.timeline-wrapper-success .timeline-panel:before {
  background: #34B1AA;
}

.timeline-wrapper-success .timeline-badge {
  background: #34B1AA;
}

.timeline-wrapper-info .timeline-panel:before {
  background: #52CDFF;
}

.timeline-wrapper-info .timeline-badge {
  background: #52CDFF;
}

.timeline-wrapper-warning .timeline-panel:before {
  background: #ffaf00;
}

.timeline-wrapper-warning .timeline-badge {
  background: #ffaf00;
}

.timeline-wrapper-danger .timeline-panel:before {
  background: #F95F53;
}

.timeline-wrapper-danger .timeline-badge {
  background: #F95F53;
}

.timeline-wrapper-light .timeline-panel:before {
  background: #fbfbfb;
}

.timeline-wrapper-light .timeline-badge {
  background: #fbfbfb;
}

.timeline-wrapper-dark .timeline-panel:before {
  background: #1E283D;
}

.timeline-wrapper-dark .timeline-badge {
  background: #1E283D;
}

/* Tabs */
.add-items {
  margin-bottom: 1.5rem;
  overflow: hidden;
}

.add-items input[type="text"] {
  width: 100%;
  background: transparent;
  border: 0;
  padding-left: 0;
}

.add-items input[type="text"]::-webkit-input-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items input[type="text"]:-moz-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items input[type="text"]::-moz-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items input[type="text"]:-ms-input-placeholder {
  font-size: 1rem;
  color: #9b9b9b;
}

.add-items .btn, .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .add-items .ajax-file-upload, .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled {
  margin-left: .5rem;
}

.add-items .btn i, .add-items .ajax-upload-dragdrop .ajax-file-upload i, .ajax-upload-dragdrop .add-items .ajax-file-upload i, .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled i {
  font-size: 1.25rem;
}

.rtl .add-items .btn, .rtl .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .rtl .add-items .ajax-file-upload, .rtl .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .rtl .add-items .swal2-styled {
  margin-left: auto;
  margin-right: .5rem;
}

.todo-list-rounded .form-check .form-check-label input:checked + .input-helper:before {
  border-radius: 100%;
}

.todo-list-rounded .form-check .flag-color {
  color: #D1D1D1;
  line-height: 1;
}

.list-wrapper {
  height: 100%;
  max-height: 100%;
}

.list-wrapper ul {
  padding: 0;
  text-align: left;
  list-style: none;
  margin-bottom: 0;
}

.list-wrapper ul li {
  font-size: 0.9375rem;
  padding: 0.4rem 0;
  border-bottom: 1px solid #dee2e6;
}

.list-wrapper ul li .form-check {
  max-width: 90%;
}

.list-wrapper ul li .form-check.w-100 {
  max-width: 100%;
}

.list-wrapper ul li:last-child {
  padding-bottom: 0;
  margin-bottom: 0;
}

.list-wrapper ul li:last-child .form-check {
  margin-bottom: 0;
  padding-bottom: 0;
}

.list-wrapper ul li .col-content {
  width: 100%;
}

.list-wrapper ul li .col-content > div {
  width: 100%;
}

.list-wrapper ul.todo-list-rounded .form-check .form-check-label input:checked + .input-helper:before {
  border-radius: 100%;
}

.list-wrapper ul.todo-list-rounded .flag-color {
  color: #D1D1D1;
  line-height: 1;
}

.list-wrapper input[type="checkbox"] {
  margin-right: 15px;
}

.list-wrapper .remove {
  margin-left: auto;
  cursor: pointer;
  font-size: 1.3rem;
  font-weight: 600;
  color: #1F3BB3;
  width: 1.25rem;
  height: 1.25rem;
  line-height: 20px;
  text-align: center;
}

.rtl .list-wrapper .remove {
  margin-right: auto;
  margin-left: 0;
}

.list-wrapper .completed {
  text-decoration: line-through;
  text-decoration-color: #1F3BB3;
}

.list-wrapper .completed .remove {
  text-decoration: none;
}

/* Tooltips */
.tooltip-static-demo .tooltip {
  position: relative;
  display: inline-block;
  opacity: 1;
  margin: 0 10px 10px 0;
  z-index: 10;
}

.tooltip-static-demo .bs-tooltip-bottom-demo .arrow,
.tooltip-static-demo .bs-tooltip-top-demo .arrow {
  left: 50%;
}

.tooltip-static-demo .bs-tooltip-right-demo .arrow:before,
.tooltip-static-demo .bs-tooltip-left-demo .arrow:before {
  top: calc((100%-0.8rem)/2);
}

.tooltip {
  font-size: 0.75rem;
  min-width: 5.625rem;
  z-index: 1029;
}

.tooltip .tooltip-inner {
  font-weight: 400;
}

.tooltip-primary .tooltip-inner {
  background: #1F3BB3;
  color: #ffffff;
}

.tooltip-primary.bs-tooltip-top .arrow::before, .tooltip-primary.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #1F3BB3;
}

.tooltip-primary.bs-tooltip-right .arrow::before {
  border-right-color: #1F3BB3;
}

.tooltip-primary.bs-tooltip-bottom .arrow::before, .tooltip-primary.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #1F3BB3;
}

.tooltip-primary.bs-tooltip-left .arrow::before {
  border-left-color: #1F3BB3;
}

.tooltip-secondary .tooltip-inner {
  background: #F1F1F1;
  color: #ffffff;
}

.tooltip-secondary.bs-tooltip-top .arrow::before, .tooltip-secondary.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #F1F1F1;
}

.tooltip-secondary.bs-tooltip-right .arrow::before {
  border-right-color: #F1F1F1;
}

.tooltip-secondary.bs-tooltip-bottom .arrow::before, .tooltip-secondary.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #F1F1F1;
}

.tooltip-secondary.bs-tooltip-left .arrow::before {
  border-left-color: #F1F1F1;
}

.tooltip-success .tooltip-inner {
  background: #34B1AA;
  color: #ffffff;
}

.tooltip-success.bs-tooltip-top .arrow::before, .tooltip-success.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #34B1AA;
}

.tooltip-success.bs-tooltip-right .arrow::before {
  border-right-color: #34B1AA;
}

.tooltip-success.bs-tooltip-bottom .arrow::before, .tooltip-success.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #34B1AA;
}

.tooltip-success.bs-tooltip-left .arrow::before {
  border-left-color: #34B1AA;
}

.tooltip-info .tooltip-inner {
  background: #52CDFF;
  color: #ffffff;
}

.tooltip-info.bs-tooltip-top .arrow::before, .tooltip-info.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #52CDFF;
}

.tooltip-info.bs-tooltip-right .arrow::before {
  border-right-color: #52CDFF;
}

.tooltip-info.bs-tooltip-bottom .arrow::before, .tooltip-info.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #52CDFF;
}

.tooltip-info.bs-tooltip-left .arrow::before {
  border-left-color: #52CDFF;
}

.tooltip-warning .tooltip-inner {
  background: #ffaf00;
  color: #ffffff;
}

.tooltip-warning.bs-tooltip-top .arrow::before, .tooltip-warning.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #ffaf00;
}

.tooltip-warning.bs-tooltip-right .arrow::before {
  border-right-color: #ffaf00;
}

.tooltip-warning.bs-tooltip-bottom .arrow::before, .tooltip-warning.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #ffaf00;
}

.tooltip-warning.bs-tooltip-left .arrow::before {
  border-left-color: #ffaf00;
}

.tooltip-danger .tooltip-inner {
  background: #F95F53;
  color: #ffffff;
}

.tooltip-danger.bs-tooltip-top .arrow::before, .tooltip-danger.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #F95F53;
}

.tooltip-danger.bs-tooltip-right .arrow::before {
  border-right-color: #F95F53;
}

.tooltip-danger.bs-tooltip-bottom .arrow::before, .tooltip-danger.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #F95F53;
}

.tooltip-danger.bs-tooltip-left .arrow::before {
  border-left-color: #F95F53;
}

.tooltip-light .tooltip-inner {
  background: #fbfbfb;
  color: #ffffff;
}

.tooltip-light.bs-tooltip-top .arrow::before, .tooltip-light.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #fbfbfb;
}

.tooltip-light.bs-tooltip-right .arrow::before {
  border-right-color: #fbfbfb;
}

.tooltip-light.bs-tooltip-bottom .arrow::before, .tooltip-light.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #fbfbfb;
}

.tooltip-light.bs-tooltip-left .arrow::before {
  border-left-color: #fbfbfb;
}

.tooltip-dark .tooltip-inner {
  background: #1E283D;
  color: #ffffff;
}

.tooltip-dark.bs-tooltip-top .arrow::before, .tooltip-dark.bs-tooltip-auto[data-popper-placement^="top"] .arrow::before {
  border-top-color: #1E283D;
}

.tooltip-dark.bs-tooltip-right .arrow::before {
  border-right-color: #1E283D;
}

.tooltip-dark.bs-tooltip-bottom .arrow::before, .tooltip-dark.bs-tooltip-auto[data-popper-placement^="bottom"] .arrow::before {
  border-bottom-color: #1E283D;
}

.tooltip-dark.bs-tooltip-left .arrow::before {
  border-left-color: #1E283D;
}

.profile-navbar .nav-item .nav-link {
  color: #1F1F1F;
}

.profile-navbar .nav-item .nav-link.active {
  color: #1F3BB3;
}

.profile-navbar .nav-item .nav-link i {
  font-size: 1.25rem;
}

.profile-feed-item {
  padding: 1.5rem 0;
  border-bottom: 1px solid #dee2e6;
}

/* Pricing table */
.pricing-table .pricing-card .pricing-card-body {
  padding: 50px 56px 43px 56px;
}

.pricing-table .pricing-card .pricing-card-body .plan-features {
  width: 100%;
  margin-bottom: 32px;
}

.pricing-table .pricing-card .pricing-card-body .plan-features li {
  text-align: left;
  padding: 4px 0px;
  font-weight: 400;
  font-size: 0.812rem;
}

/*-------------------------------------------------------------------*/
/* === Email === */
/* Mail Sidebar */
@media (max-width: 769px) {
  .email-wrapper .mail-sidebar {
    position: relative;
  }
}

@media (max-width: 575.98px) {
  .email-wrapper .mail-sidebar {
    position: fixed;
    z-index: 99;
    background: color(white);
    width: 45%;
    min-width: 300px;
    left: -100%;
    display: block;
    transition: 0.4s ease;
    -webkit-transition: 0.4s ease;
    -moz-transition: 0.4s ease;
  }
}

.email-wrapper .mail-sidebar .menu-bar {
  width: 100%;
  float: right;
  height: 100%;
  min-height: 100%;
}

@media (max-width: 575.98px) {
  .email-wrapper .mail-sidebar .menu-bar {
    min-height: 100vh;
    max-height: 100%;
    height: auto;
    overflow-y: auto;
    overflow-x: hidden;
  }
}

.email-wrapper .mail-sidebar .menu-bar .menu-items {
  padding: 0;
  margin-bottom: 0;
  height: auto;
  list-style-type: none;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li {
  padding: 10px 15px;
  transition: 0.4s;
  position: relative;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: space-between;
  justify-content: space-between;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li:hover {
  background: rgba(240, 244, 249, 0.8);
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li a {
  color: #303a40;
  font-size: 0.812rem;
  text-decoration: none;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li a i {
  margin-right: 8px;
  font-size: 0.812rem;
  line-height: 1.5;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.active {
  background: color(gray-lightest);
  border-radius: 4px;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.active a {
  color: #1F3BB3;
}

.email-wrapper .mail-sidebar .menu-bar .menu-items li.compose:hover {
  background: transparent;
}

.email-wrapper .mail-sidebar .menu-bar .online-status {
  margin-top: 1rem;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .chat {
  font-size: 0.812rem;
  color: #1F3BB3;
  margin-bottom: 0;
  font-weight: 600;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status {
  height: 10px;
  width: 10px;
  border-radius: 100%;
  display: inline-flex;
  justify-content: flex-start;
  transform: translateX(-43px) translateY(2px);
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status:after {
  font-size: 12px;
  color: #2e383e;
  margin: -5px 0 0 18px;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.offline {
  background: #F95F53;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.offline:after {
  content: "Offline";
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.online {
  background: #34B1AA;
}

.email-wrapper .mail-sidebar .menu-bar .online-status .status.online:after {
  content: "Online";
}

.email-wrapper .mail-sidebar .menu-bar .profile-list {
  padding: 10px 0;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item {
  border-bottom: 1px solid #dee2e6;
  padding: 6px 0;
  display: block;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item:last-child {
  border-bottom: 0;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a {
  text-decoration: none;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 0;
  width: 20%;
  max-width: 40px;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic img {
  max-width: 100%;
  width: 100%;
  border-radius: 100%;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
  width: 100%;
  padding: 5px 10px 0 15px;
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name {
  font-weight: 400;
  font-size: 0.812rem;
  line-height: 1;
  color: color(black);
}

.email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation {
  font-size: calc(0.812rem - 0.1rem);
  margin-bottom: 0;
}

.email-wrapper .sidebar.open {
  left: 0;
}

/* Mail List Container */
.email-wrapper .mail-list-container {
  border-left: 1px solid #dee2e6;
  height: 100%;
  padding-left: 0;
  padding-right: 0;
}

.email-wrapper .mail-list-container a {
  text-decoration: none;
}

.email-wrapper .mail-list-container .mail-list {
  border-bottom: 1px solid #dee2e6;
  display: flex;
  flex-direction: row;
  padding: 10px 15px;
  width: 100%;
}

.email-wrapper .mail-list-container .mail-list:last-child {
  border-bottom: none;
}

.email-wrapper .mail-list-container .mail-list .form-check {
  margin-top: 12px;
  width: 11%;
  min-width: 20px;
}

.email-wrapper .mail-list-container .mail-list .content {
  width: 83%;
  padding-left: 0;
  padding-right: 0;
}

.email-wrapper .mail-list-container .mail-list .content .sender-name {
  font-size: 0.812rem;
  font-weight: 400;
  max-width: 95%;
}

.email-wrapper .mail-list-container .mail-list .content .message_text {
  margin: 0;
  max-width: 93%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.email-wrapper .mail-list-container .mail-list .details {
  width: 5.5%;
}

.email-wrapper .mail-list-container .mail-list .details .date {
  text-align: right;
  margin: auto 15px auto 0;
  white-space: nowrap;
}

.email-wrapper .mail-list-container .mail-list .details i {
  margin: auto 0;
  color: #ddd;
}

.email-wrapper .mail-list-container .mail-list .details i.favorite {
  color: #ffaf00;
}

.email-wrapper .mail-list-container .mail-list.new_mail {
  background: color(gray-lightest);
}

.email-wrapper .mail-list-container .mail-list.new_mail .details .date {
  color: color(black);
}

/* Message Content */
.email-wrapper .message-body .sender-details {
  padding: 20px 15px 0;
  border-bottom: 1px solid #dee2e6;
  display: -webkit-flex;
  display: flex;
}

.email-wrapper .message-body .sender-details .details {
  padding-bottom: 0;
}

.email-wrapper .message-body .sender-details .details .msg-subject {
  font-weight: 600;
}

.email-wrapper .message-body .sender-details .details .sender-email {
  margin-bottom: 20px;
  font-weight: 400;
}

.email-wrapper .message-body .sender-details .details .sender-email i {
  font-size: 1rem;
  font-weight: 600;
  margin: 0 1px 0 7px;
}

.email-wrapper .message-body .message-content {
  padding: 50px 15px;
}

.email-wrapper .message-body .attachments-sections ul {
  list-style: none;
  border-top: 1px solid #dee2e6;
  padding: 30px 15px 20px;
}

.email-wrapper .message-body .attachments-sections ul li {
  padding: 10px;
  margin-right: 20px;
  border: 1px solid #dee2e6;
  border-radius: 5px;
}

.email-wrapper .message-body .attachments-sections ul li .thumb {
  display: inline-block;
  margin-right: 10px;
}

.email-wrapper .message-body .attachments-sections ul li .thumb i {
  font-size: 30px;
  margin: 0;
  color: #2e383e;
}

.email-wrapper .message-body .attachments-sections ul li .details p.file-name {
  display: block;
  margin-bottom: 0;
  color: #2e383e;
}

.email-wrapper .message-body .attachments-sections ul li .details .buttons .file-size {
  margin-right: 10px;
  margin-bottom: 0;
  font-size: 13px;
}

.email-wrapper .message-body .attachments-sections ul li .details .buttons a {
  font-size: 13px;
  margin-right: 10px;
}

.email-wrapper .message-body .attachments-sections ul li .details .buttons a:last-child {
  margin-right: 0;
}

/*-------------------------------------------------------------------*/
/* === Plugin overrides === */
/* Ace Editor */
.ace_editor {
  margin: auto;
  height: 300px;
  width: 100%;
  font: 14px/normal SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.ace_editor .ace_content {
  font-size: 0.812rem;
}

/* Avgrund Popup */
.avgrund-popin {
  position: fixed;
  background: #fff;
  padding: 37px 33px;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 50%;
  left: 53%;
  z-index: 1000;
  font-size: 0.812rem;
  font-weight: 400;
  font-weight: initial;
  line-height: 1.85;
  border-radius: 10px;
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -o-transform: scale(0.8);
  transform: scale(0.8);
}

.avgrund-popin p {
  font-size: 0.812rem;
  font-weight: 400;
  font-weight: initial;
}

.avgrund-overlay {
  background: #000000;
  width: 100%;
  position: fixed;
  top: 0px;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 101;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
}

body.avgrund-ready,
.avgrund-ready .avgrund-popin,
.avgrund-ready .avgrund-overlay {
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transition: 0.3s all ease-out;
  -moz-transition: 0.3s all ease-out;
  -ms-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}

body.avgrund-active {
  overflow: hidden;
}

.avgrund-active .avgrund-popin {
  visibility: visible;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

@media (max-width: 767px) {
  .avgrund-active .avgrund-popin {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
  }
}

.avgrund-active .avgrund-overlay {
  visibility: visible;
  opacity: .5;
  filter: alpha(opacity=50);
  height: 20000px;
}

.avgrund-popin.stack {
  -webkit-transform: scale(1.5);
  -moz-transform: scale(1.5);
  -ms-transform: scale(1.5);
  -o-transform: scale(1.5);
  transform: scale(1.5);
}

.avgrund-active .avgrund-popin.stack {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

/* Optional close button styles */
.avgrund-close {
  display: block;
  color: #fff;
  background: #1F1F1F;
  font-size: 10px;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  top: 10px;
  right: 10px;
  height: 17px;
  width: 17px;
  text-align: center;
  line-height: 16px;
  border-radius: 50px;
}

.avgrund-close:hover {
  color: #fff;
  text-decoration: none;
}

/* Chartist */
.ct-series-a .ct-line {
  stroke: #a29afc;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-a .ct-point {
  stroke: #6355f9;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-b .ct-line {
  stroke: #80d691;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-b .ct-point {
  stroke: #4ac462;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-c .ct-line {
  stroke: #f7cb9b;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px;
}

.ct-series-c .ct-point {
  stroke: #f2a859;
  stroke-width: 10px;
  stroke-linecap: round;
}

.ct-series-a .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-b .ct-bar {
  stroke: #80d691;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-c .ct-bar {
  stroke: #f7cb9b;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-d .ct-bar {
  stroke: #fcb2b2;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

.ct-series-a .ct-slice-pie {
  fill: #a29afc;
  stroke-width: 4px;
}

.ct-series-b .ct-slice-pie {
  fill: #80d691;
  stroke-width: 4px;
}

.ct-series-c .ct-slice-pie {
  fill: #fcb2b2;
  stroke-width: 4px;
}

.ct-series-d .ct-slice-pie {
  fill: #f7cb9b;
  stroke-width: 4px;
}

.ct-series-a .ct-slice-donut-solid {
  fill: #a29afc;
}

.ct-series-b .ct-slice-donut-solid {
  fill: #80d691;
}

.ct-series-c .ct-slice-donut-solid {
  fill: #fcb2b2;
}

.ct-series-a .ct-slice-donut-solid {
  fill: #f7cb9b;
}

#ct-chart-dash-barChart .ct-series-a .ct-bar {
  stroke: #fb9999;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-b .ct-bar {
  stroke: #8b81fb;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-c .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

#ct-chart-dash-barChart .ct-series-d .ct-bar {
  stroke: #b9b3fc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre;
}

/* CodeMirror */
.CodeMirror {
  font-size: 0.812rem;
  height: auto;
  text-align: left;
  min-height: auto;
}

.CodeMirror-scroll {
  min-height: auto;
}

/* Colcade */
* {
  box-sizing: border-box;
}

.grid {
  border: 1px solid color(gray-light) est;
}

.grid:after {
  display: block;
  content: '';
  clear: both;
}

.grid-col {
  float: left;
  width: 49%;
  margin-right: 2%;
  background: rgba(31, 59, 179, 0.2);
}

.grid-col--4 {
  margin-right: 0;
}

/* hide two middle */
.grid-col--2, .grid-col--3 {
  display: none;
}

@media (min-width: 768px) {
  .grid-col {
    width: 32%;
  }
  .grid-col--2 {
    display: block;
  }
}

@media (min-width: 1200px) {
  .grid-col {
    width: 23.5%;
  }
  .grid-col--2, .grid-col--3 {
    display: block;
  }
}

.grid-item {
  background: #1F3BB3;
  margin-bottom: 20px;
  border-radius: 8px;
}

.grid-item--a {
  height: 80px;
}

.grid-item--b {
  height: 140px;
}

.grid-item--c {
  height: 300px;
}

/* Colorpicker */
.asColorPicker-dropdown {
  max-width: initial;
}

.asColorPicker-trigger {
  height: auto;
  border: 0;
}

.asColorPicker-trigger span {
  border-radius: 2px;
  width: 35px;
}

/* Data Tables */
.dataTables_wrapper {
  padding-left: 0;
  padding-right: 0;
}

.dataTables_wrapper label {
  font-size: .8125rem;
}

.dataTables_wrapper select {
  padding: .4rem;
  outline-offset: -2px;
}

.dataTables_wrapper .dataTables_length select {
  min-width: 70px;
  margin-left: .25rem;
  margin-right: .25rem;
  width: -webkit-fill-available;
  border-radius: 4px;
}

.dataTables_wrapper .dataTable .btn, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled {
  padding: 0.1rem 1rem;
  vertical-align: top;
}

.dataTables_wrapper .dataTable .btn i, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload i, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload i, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled i {
  font-size: .875rem;
  margin-right: .3rem;
}

.dataTables_wrapper .dataTable thead th {
  border-bottom-width: 0;
}

.dataTables_wrapper .dataTable thead .sorting:before, .dataTables_wrapper .dataTable thead .sorting:after,
.dataTables_wrapper .dataTable thead .sorting_asc:before,
.dataTables_wrapper .dataTable thead .sorting_asc:after,
.dataTables_wrapper .dataTable thead .sorting_desc:before,
.dataTables_wrapper .dataTable thead .sorting_desc:after,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
  line-height: 2.5;
  font-family: themify;
  font-size: .65rem;
}

.dataTables_wrapper .dataTable thead .sorting:before,
.dataTables_wrapper .dataTable thead .sorting_asc:before,
.dataTables_wrapper .dataTable thead .sorting_desc:before,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:before {
  content: "\e64b";
  right: 1.2em;
  bottom: 0;
}

.dataTables_wrapper .dataTable thead .sorting:after,
.dataTables_wrapper .dataTable thead .sorting_asc:after,
.dataTables_wrapper .dataTable thead .sorting_desc:after,
.dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
.dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
  content: "\e648";
  right: 1.2em;
  top: 0;
}

.dataTables_wrapper .dataTables_paginate {
  margin-top: 20px;
}

.dataTables_wrapper .dataTables_info {
  font-size: 0.812rem;
}

@media (max-width: 576px) {
  .dataTables_wrapper .dataTables_info {
    margin-bottom: 1rem;
  }
}

.expandable-table thead tr th {
  background: #1F3BB3;
  padding: 10px;
  color: #ffffff;
  font-size: 14px;
}

.expandable-table thead tr th:first-child {
  border-radius: 8px 0 0 8px;
}

.expandable-table thead tr th:last-child {
  border-radius: 0 8px 8px 0;
}

.expandable-table tr.odd, .expandable-table tr.even {
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.03);
  border-radius: 4px;
}

.expandable-table tr td {
  padding: 14px;
  font-size: 14px;
}

.expandable-table tr td.select-checkbox {
  padding-left: 26px;
}

.expandable-table tr td.select-checkbox:after {
  top: 2rem;
}

.expandable-table tr td.select-checkbox:before {
  top: 2rem;
}

.expandable-table tr td .cell-hilighted {
  background-color: #1F3BB3;
  border-radius: 10px;
  padding: 18px;
  color: #fff;
  font-size: 11px;
}

.expandable-table tr td .cell-hilighted h5, .expandable-table tr td .cell-hilighted .h5 {
  font-size: 20px;
  color: #52C4FF;
}

.expandable-table tr td .cell-hilighted p {
  opacity: .6;
  margin-bottom: 0;
}

.expandable-table tr td .cell-hilighted h6, .expandable-table tr td .cell-hilighted .h6 {
  font-size: 14px;
  color: #52C4FF;
}

.expandable-table tr td .expanded-table-normal-cell {
  padding: 10px;
}

.expandable-table tr td .expanded-table-normal-cell p {
  font-size: 11px;
  margin-bottom: 0;
}

.expandable-table tr td .expanded-table-normal-cell h6, .expandable-table tr td .expanded-table-normal-cell .h6 {
  color: #0B0F32;
  font-size: 14px;
}

.expandable-table tr td .expanded-table-normal-cell .highlighted-alpha {
  width: 34px;
  height: 34px;
  border-radius: 100%;
  background: #FE5C83;
  color: #ffffff;
  text-align: center;
  padding-top: 7px;
  font-size: 14px;
  margin-right: 8px;
}

.expandable-table tr td .expanded-table-normal-cell img {
  width: 34px;
  height: 34px;
  border-radius: 100%;
  margin-right: 8px;
}

.expandable-table tr td.details-control:before {
  content: '\e64b';
  font-family: "themify";
}

.expandable-table tr.shown td.details-control:before {
  content: '\e648';
}

.expandable-table .expanded-row {
  background: #fafafa;
}

table.dataTable tbody td.select-checkbox:before {
  top: 1.4rem;
  left: 10px;
  border: 1px solid #dee2e6;
  width: 14px;
  height: 14px;
}

table.dataTable tbody td.select-checkbox:after {
  top: 1.5rem;
  left: 10px;
}

/* Datepicker */
.datepicker.datepicker-dropdown,
.datepicker.datepicker-inline {
  padding: 5px 5px 15px 5px;
  width: 30%;
  max-width: 300px;
  min-width: 200px;
  -webkit-box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
  border-radius: .25rem;
  border: none;
  z-index: 9999 !important;
}

.datepicker.datepicker-dropdown .datepicker-days,
.datepicker.datepicker-inline .datepicker-days {
  padding: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed,
.datepicker.datepicker-inline .datepicker-days table.table-condensed {
  width: 100%;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th {
  text-align: center;
  padding: 0.5rem 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.prev,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.prev {
  color: #1F1F1F;
  padding-bottom: 1rem;
  padding-top: 1rem;
  background: #ffffff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.datepicker-switch,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.datepicker-switch {
  color: #1F1F1F;
  background: #ffffff;
  padding-bottom: 1rem;
  padding-top: 1rem;
  font-size: 1rem;
  font-weight: 600;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.next,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.next {
  color: #1F1F1F;
  padding-bottom: 1rem;
  padding-top: 1rem;
  background: #ffffff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow,
.datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow {
  font-family: "Manrope", sans-serif;
  color: #1F1F1F;
  font-size: 0.875rem;
  font-weight: initial;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody {
  position: relative;
  top: 13px;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td {
  text-align: center;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day {
  font-size: 0.875rem;
  padding: 0.5rem 0;
  color: #1F1F1F;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day:hover,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day:hover {
  background: #ffffff;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active {
  color: #fff;
  background: transparent;
  position: relative;
  z-index: 1;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active:before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active:before {
  content: "";
  width: 28px;
  height: 28px;
  background: #34B1AA;
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today {
  color: #fff;
  background: transparent;
  position: relative;
  z-index: 1;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today:before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today:before {
  content: "";
  width: 28px;
  height: 28px;
  background: #1F3BB3;
  border-radius: 4px;
  box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
  -webkit-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
  -moz-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.old.day,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.old.day {
  color: #d9dde3;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end {
  background: transparent;
  position: relative;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start::before, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end::before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start::before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end::before {
  content: "";
  width: 28px;
  height: 28px;
  background: rgba(52, 177, 170, 0.2);
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range {
  position: relative;
  background: transparent;
}

.datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range::before,
.datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range::before {
  content: "";
  width: 28px;
  height: 28px;
  background: #eee;
  border-radius: 4px;
  display: block;
  margin: auto;
  vertical-align: middle;
  position: absolute;
  top: 6px;
  z-index: -1;
  left: 0;
  right: 0;
}

.datepicker.datepicker-inline {
  width: 100%;
  max-width: 100%;
  min-width: 250px;
}

.datepicker.datepicker-inline thead tr th.prev {
  color: grey;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker.datepicker-inline thead tr th.datepicker-switch {
  color: #1F3BB3;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker.datepicker-inline thead tr th.next {
  color: grey;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
}

.datepicker > div {
  display: initial;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  border-radius: 2px;
}

.datepicker.input-group, .datepicker.asColorPicker-wrap {
  border: 1px solid #dee2e6;
  padding: 0;
}

.datepicker.input-group .form-control, .datepicker.asColorPicker-wrap .form-control, .datepicker.input-group .asColorPicker-input, .datepicker.asColorPicker-wrap .asColorPicker-input, .datepicker.input-group .dataTables_wrapper select, .dataTables_wrapper .datepicker.input-group select, .datepicker.asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .datepicker.asColorPicker-wrap select, .datepicker.input-group .select2-container--default .select2-selection--single, .select2-container--default .datepicker.input-group .select2-selection--single, .datepicker.asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .datepicker.asColorPicker-wrap .select2-selection--single, .datepicker.input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .datepicker.input-group .select2-search__field, .datepicker.asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .datepicker.asColorPicker-wrap .select2-search__field, .datepicker.input-group .typeahead, .datepicker.asColorPicker-wrap .typeahead,
.datepicker.input-group .tt-query,
.datepicker.asColorPicker-wrap .tt-query,
.datepicker.input-group .tt-hint,
.datepicker.asColorPicker-wrap .tt-hint {
  border: none;
}

.datepicker-dropdown:after {
  border-bottom-color: #fff;
}

.datepicker-dropdown:before {
  border-bottom-color: #dee2e6;
}

.datepicker-dropdown.datepicker-orient-top:before, .datepicker-dropdown.datepicker-orient-top:after {
  top: auto;
}

.datepicker-dropdown.datepicker-orient-top:after {
  border-top-color: #fff;
}

.datepicker-dropdown.datepicker-orient-top:before {
  border-top-color: #dee2e6;
}

/* Dropify */
.dropify-wrapper {
  border: 2px dashed #dee2e6;
  border-radius: 7px;
}

.dropify-wrapper:hover {
  background-size: 30px 30px;
  background-image: -webkit-linear-gradient(135deg, #F2F7F8 25%, transparent 25%, transparent 50%, #F2F7F8 50%, #F2F7F8 75%, transparent 75%, transparent);
  background-image: linear-gradient(135deg, #F2F7F8 25%, transparent 25%, transparent 50%, #F2F7F8 50%, #F2F7F8 75%, transparent 75%, transparent);
  -webkit-animation: stripes 2s linear infinite;
  animation: stripes 2s linear infinite;
}

.dropify-wrapper .dropify-message span.file-icon:before {
  display: inline-block;
  font: normal normal normal 24px/1 "themify";
  font-size: inherit;
  text-rendering: auto;
  line-height: inherit;
  -webkit-font-smoothing: antialiased;
  content: '\e66b';
  color: #1F1F1F;
  font-size: 1.25rem;
}

.dropify-wrapper .dropify-message p {
  font-size: .8125rem;
  color: #1F1F1F;
}

.dropify-wrapper .dropify-preview .dropify-infos {
  background: rgba(255, 255, 255, 0.9);
}

.dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-filename {
  color: #1F3BB3;
  font-size: 20px;
  font-weight: 400;
}

.dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-infos-message {
  color: #333;
  font-weight: 500;
}

.dropify-wrapper .dropify-preview .dropify-render img {
  opacity: 0.7;
}

.dropify-wrapper .dropify-clear {
  background: #fff;
  border: none;
  font-weight: 600;
  color: color(gray);
}

/* Dropzone */
.dropzone {
  border: 1px solid #dee2e6;
  min-height: 200px;
}

.dropzone .dz-message {
  text-align: center;
  width: 100%;
}

.dropzone .dz-message span {
  font-size: .8125rem;
  color: #1F1F1F;
}

.dropzone .dz-preview {
  margin: 5px;
}

.dropzone .dz-preview .dz-image {
  width: 75px;
  height: 75px;
  border-radius: 6px;
}

.dropzone .dz-preview .dz-error-message {
  top: 80px;
  left: -35px;
}

.dropzone .dz-preview .dz-success-mark,
.dropzone .dz-preview .dz-error-mark {
  margin-left: -17px;
}

.dropzone .dz-preview .dz-success-mark svg,
.dropzone .dz-preview .dz-error-mark svg {
  width: 35px;
  height: 35px;
}

/* Icheck */
.icheck,
.icheck-flat,
.icheck-square,
.icheck-line {
  margin-bottom: .5rem;
}

.icheck label,
.icheck-flat label,
.icheck-square label,
.icheck-line label {
  font-size: .8125rem;
  line-height: 1.5;
  margin-left: 5px;
  margin-bottom: 0;
}

/* Jquery File Upload */
.ajax-upload-dragdrop {
  border-color: #dee2e6;
  border-style: dotted;
  max-width: 100%;
}

.ajax-upload-dragdrop span b {
  font-size: .8125rem;
  color: #1F1F1F;
  font-weight: initial;
}

.ajax-upload-dragdrop .ajax-file-upload {
  background: #52CDFF;
  box-shadow: none;
  height: auto;
}

.ajax-file-upload-container {
  min-height: 100px;
}

.ajax-file-upload-container .ajax-file-upload-statusbar {
  max-width: 100%;
}

/* Listify */
.listify-list input {
  border: 1px solid #f2f7f8;
  color: color(gray-light);
  background: #fff;
}

.listify-list ul.list {
  list-style: none;
  padding-left: 0;
}

.listify-list ul.list li {
  display: block;
  border-bottom: 1px solid #dee2e6;
  padding: 15px 10px;
}

.listify-list ul.list li h5, .listify-list ul.list li .h5 {
  color: theme-color("primary");
}

.listify-list ul.list li p {
  color: color(gray-light);
  margin: 0;
}

/* No-ui-slider */
.noUi-target {
  border: none;
  box-shadow: none;
  border-radius: 0px;
}

.noUi-target.noUi-horizontal {
  height: 0.25rem;
}

.noUi-target.noUi-horizontal .noUi-handle {
  left: -17px;
}

.noUi-target.noUi-vertical {
  width: 0.25rem;
  height: 156px;
  display: inline-block;
}

.noUi-target.noUi-vertical .noUi-handle {
  left: -6px;
}

.noUi-target .noUi-base {
  background: color(gray-lightest);
  box-shadow: none;
  border: none;
}

.noUi-target .noUi-base .noUi-connect {
  background: #1F3BB3;
  box-shadow: none;
}

.noUi-target .noUi-base .noUi-origin {
  background: #34B1AA;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle {
  background: #ffffff;
  border-radius: 100%;
  border: 1px solid #dee2e6;
  width: 18px;
  height: 18px;
  top: -7px;
  outline: none;
  -webkit-transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  transition-duration: 0.4s;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle:after, .noUi-target .noUi-base .noUi-origin .noUi-handle:before {
  display: none;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle:after {
  display: block;
  position: absolute;
  top: 5px;
  left: 0;
  right: 0;
  margin: auto;
  width: 6px;
  height: 6px;
  background: #1F3BB3;
  border-radius: 100%;
}

.noUi-target .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  font-weight: 600;
  border-radius: 4px;
  border: none;
  line-height: 1;
  font-size: 0.812rem;
  padding: 13px 12px;
  bottom: 190%;
}

.noUi-target .noUi-pips .noUi-marker-horizontal, .noUi-target .noUi-pips .noUi-marker-vertical {
  background: #dee2e6;
}

.noUi-target .noUi-pips .noUi-marker-horizontal {
  height: 9px;
  width: 1px;
}

.noUi-target .noUi-pips .noUi-marker-vertical {
  height: 1px;
  width: 9px;
}

.noUi-target .noUi-pips .noUi-value {
  color: #000000;
  font-size: 0.94rem;
  font-weight: 600;
}

/* Slider Color variations */
.slider-primary .noUi-base .noUi-connect {
  background: #1F3BB3;
}

.slider-primary .noUi-base .noUi-origin {
  background: #1F3BB3;
}

.slider-primary .noUi-base .noUi-origin .noUi-handle:after {
  background: #1F3BB3;
}

.slider-primary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #1F3BB3;
  color: #ffffff;
}

.slider-secondary .noUi-base .noUi-connect {
  background: #F1F1F1;
}

.slider-secondary .noUi-base .noUi-origin {
  background: #F1F1F1;
}

.slider-secondary .noUi-base .noUi-origin .noUi-handle:after {
  background: #F1F1F1;
}

.slider-secondary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #F1F1F1;
  color: #ffffff;
}

.slider-success .noUi-base .noUi-connect {
  background: #34B1AA;
}

.slider-success .noUi-base .noUi-origin {
  background: #34B1AA;
}

.slider-success .noUi-base .noUi-origin .noUi-handle:after {
  background: #34B1AA;
}

.slider-success .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #34B1AA;
  color: #ffffff;
}

.slider-info .noUi-base .noUi-connect {
  background: #52CDFF;
}

.slider-info .noUi-base .noUi-origin {
  background: #52CDFF;
}

.slider-info .noUi-base .noUi-origin .noUi-handle:after {
  background: #52CDFF;
}

.slider-info .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #52CDFF;
  color: #ffffff;
}

.slider-warning .noUi-base .noUi-connect {
  background: #ffaf00;
}

.slider-warning .noUi-base .noUi-origin {
  background: #ffaf00;
}

.slider-warning .noUi-base .noUi-origin .noUi-handle:after {
  background: #ffaf00;
}

.slider-warning .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #ffaf00;
  color: #ffffff;
}

.slider-danger .noUi-base .noUi-connect {
  background: #F95F53;
}

.slider-danger .noUi-base .noUi-origin {
  background: #F95F53;
}

.slider-danger .noUi-base .noUi-origin .noUi-handle:after {
  background: #F95F53;
}

.slider-danger .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #F95F53;
  color: #ffffff;
}

.slider-light .noUi-base .noUi-connect {
  background: #fbfbfb;
}

.slider-light .noUi-base .noUi-origin {
  background: #fbfbfb;
}

.slider-light .noUi-base .noUi-origin .noUi-handle:after {
  background: #fbfbfb;
}

.slider-light .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #fbfbfb;
  color: #ffffff;
}

.slider-dark .noUi-base .noUi-connect {
  background: #1E283D;
}

.slider-dark .noUi-base .noUi-origin {
  background: #1E283D;
}

.slider-dark .noUi-base .noUi-origin .noUi-handle:after {
  background: #1E283D;
}

.slider-dark .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
  background: #1E283D;
  color: #ffffff;
}

/* Progressbar-js */
.progress-bar-js-line {
  height: 6px;
}

.progressbar-js-circle {
  width: 100%;
  position: relative;
}

/* Pws-tabs */
.pws_tabs_container ul.pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li:last-child a {
  border-right: 1px solid #1F3BB3;
  border-radius: 0px 5px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li a {
  border: 1px solid #1F3BB3;
  border-bottom: none;
  border-right: none;
  background: #fff;
  color: #1F3BB3;
  padding: 0.6em 1.3em;
  margin-right: 0;
}

.pws_tabs_container ul.pws_tabs_controll li a:hover {
  background: #fff;
  color: #1F3BB3;
}

.pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
  background: #1F3BB3;
  color: #fff;
}

.pws_tabs_container .demo-tabs {
  border: 1px solid #1F3BB3;
  border-radius: 0px 5px 5px 5px;
  overflow: hidden;
  background: color(white-smoke);
  margin-bottom: 45px;
  padding-top: 3.5rem;
}

.pws_tabs_container .demo-tabs .CodeMirror {
  margin-bottom: 20px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll {
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:last-child a {
  border-bottom: 1px solid #1F3BB3;
  border-radius: 0px 0px 0px 5px;
  border-right: 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #1F3BB3;
  border-right: none;
  border-bottom: none;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_list {
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll {
  border-top: 1px solid #1F3BB3;
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:first-child a {
  border-radius: 0px 0px 0px 5px;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:last-child a {
  border-radius: 0px 0px 5px 0px;
  border-right: 1px solid #1F3BB3;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #1F3BB3;
  border-top: none;
  border-right: none;
  margin-right: 0;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:first-child a {
  border-radius: 0px 5px 0px 0px;
  border-right: 1px solid #1F3BB3;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:last-child a {
  border-right: none;
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li a {
  border: 1px solid #1F3BB3;
  border-bottom: none;
  border-right: none;
  margin-right: 0;
  margin-left: 0;
}

/* Quill Editor */
.quill-container {
  height: 300px;
}

.ql-toolbar.ql-snow,
.quill-container.ql-snow {
  border-color: #dee2e6;
}

/* Rating */
.br-theme-fontawesome-stars .br-widget a,
.br-theme-css-stars .br-widget a {
  font-size: 20px;
}

.br-theme-fontawesome-stars .br-widget a.br-selected:after, .br-theme-fontawesome-stars .br-widget a.br-active:after,
.br-theme-css-stars .br-widget a.br-selected:after,
.br-theme-css-stars .br-widget a.br-active:after {
  color: #1F3BB3;
}

.br-theme-bars-1to10 .br-widget a,
.br-theme-bars-movie .br-widget a,
.br-theme-bars-pill .br-widget a,
.br-theme-bars-reversed .br-widget a,
.br-theme-bars-horizontal .br-widget a {
  background-color: rgba(31, 59, 179, 0.6);
  color: #1F3BB3;
}

.br-theme-bars-1to10 .br-widget a.br-selected, .br-theme-bars-1to10 .br-widget a.br-active,
.br-theme-bars-movie .br-widget a.br-selected,
.br-theme-bars-movie .br-widget a.br-active,
.br-theme-bars-pill .br-widget a.br-selected,
.br-theme-bars-pill .br-widget a.br-active,
.br-theme-bars-reversed .br-widget a.br-selected,
.br-theme-bars-reversed .br-widget a.br-active,
.br-theme-bars-horizontal .br-widget a.br-selected,
.br-theme-bars-horizontal .br-widget a.br-active {
  background-color: #1F3BB3;
}

.br-theme-bars-square .br-widget a {
  border-color: rgba(31, 59, 179, 0.6);
  color: rgba(31, 59, 179, 0.6);
}

.br-theme-bars-square .br-widget a.br-selected, .br-theme-bars-square .br-widget a.br-active {
  border-color: #1F3BB3;
  color: #1F3BB3;
}

.br-theme-bars-movie .br-widget .br-current-rating,
.br-theme-bars-reversed .br-widget .br-current-rating,
.br-theme-bars-1to10 .br-widget .br-current-rating,
.br-theme-bars-horizontal .br-widget .br-current-rating {
  color: #1F1F1F;
  font-size: 0.812rem;
  font-weight: initial;
}

.br-theme-bars-1to10 {
  height: 26px;
}

.br-theme-bars-1to10 .br-widget {
  height: 24px;
}

.br-theme-bars-1to10 .br-widget .br-current-rating {
  line-height: 1;
}

.br-theme-bars-pill .br-widget a {
  line-height: 2.5;
}

/* Select2 */
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background: #1F3BB3;
}

.select2-container--default .select2-selection--single,
.select2-container--default .select2-dropdown,
.select2-container--default .select2-selection--multiple {
  border-color: #dee2e6;
}

.select2-container--default .select2-selection--single .select2-search__field,
.select2-container--default .select2-dropdown .select2-search__field,
.select2-container--default .select2-selection--multiple .select2-search__field {
  border-color: #dee2e6;
}

.select2-container--default .select2-selection--single {
  height: auto;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: 14px;
}

.select2-container--default .select2-dropdown {
  font-size: .8125rem;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #dee2e6;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  color: color(white);
  border: 0;
  border-radius: 3px;
  padding: 6px;
  font-size: .625rem;
  font-family: inherit;
  line-height: 1;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
  color: color(white);
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+1) {
  background: #1F3BB3;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+2) {
  background: #34B1AA;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+3) {
  background: #52CDFF;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+4) {
  background: #F95F53;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+5) {
  background: #ffaf00;
}

/* Summernote Editor */
.note-editor.note-frame {
  border: 1px solid #dee2e6;
}

.note-popover {
  border: 1px solid #dee2e6;
}

/* SweetAlert */
.swal2-container {
  z-index: 1500;
}

.swal2-modal {
  min-height: 315px;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-flex-direction: column;
  flex-direction: column;
  border-radius: 10px;
}

.swal2-modal .swal2-title {
  font-size: 25px;
  line-height: 1;
  font-weight: 600;
  color: #1F1F1F;
  font-weight: initial;
  margin-bottom: 0;
}

.swal2-modal .swal2-icon,
.swal2-modal .swal2-success-ring {
  margin-top: 0;
  margin-bottom: 42px;
}

.swal2-modal .swal2-buttonswrapper {
  margin-top: 0;
  padding: 0;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled {
  margin-top: 0;
  font-weight: initial;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  font-weight: initial;
  margin-top: 32px;
}

.swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
  margin-top: 32px;
  border: 1px solid #dee2e6;
  color: #ffffff;
  font-weight: initial;
}

.swal2-modal .swal2-content {
  font-size: 0.812rem;
  font-weight: 600;
  color: #1F1F1F;
  font-weight: initial;
  margin-top: 11px;
}

.swal2-modal .swal2-close {
  font-size: 20px;
}

.swal2-modal .swal2-success-ring {
  left: -30px;
}

/* Switchery */
.switchery {
  width: 35px;
  height: 21px;
  border-radius: 11px;
}

.switchery > small, .switchery > .small {
  width: 20px;
  height: 20px;
}

.switchery-small {
  width: 25px;
  height: 13px;
}

.switchery-small > small, .switchery-small > .small {
  width: 13px;
  height: 13px;
}

.switchery-large {
  width: 50px;
  height: 28px;
  border-radius: 14px;
}

.switchery-large > small, .switchery-large > .small {
  width: 27px;
  height: 27px;
}

/* Tags */
div.tagsinput {
  padding: 15px 15px 10px;
  border-color: #dee2e6;
}

div.tagsinput span.tag {
  background: #1F3BB3;
  border: 0;
  color: color(white);
  padding: 6px 14px;
  font-size: .8125rem;
  font-family: inherit;
  line-height: 1;
}

div.tagsinput span.tag a {
  color: color(white);
}

/* TinyMCE Editor */
.mce-tinymce.mce-panel,
.mce-tinymce .mce-panel {
  border-color: #dee2e6;
}

/* Toast */
.jq-toast-wrap .jq-icon-success {
  background-color: theme-color("success");
}

.jq-toast-wrap .jq-icon-info {
  background-color: theme-color("info");
}

.jq-toast-wrap .jq-icon-warning {
  background-color: theme-color("warning");
}

.jq-toast-wrap .jq-icon-error {
  background-color: theme-color("danger");
}

/* Typeahead */
.tt-menu,
.gist {
  text-align: left;
}

.twitter-typeahead {
  max-width: 100%;
}

.typeahead {
  background-color: color(white);
}

.typeahead:focus {
  border-color: #dee2e6;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: color(gray);
}

.tt-menu {
  width: 100%;
  margin: 12px 0;
  padding: 8px 0;
  background-color: color(white);
  border: 1px solid #dee2e6;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.tt-suggestion {
  padding: 3px 20px;
  font-size: inherit;
}

.tt-suggestion:hover {
  cursor: pointer;
  color: color(white);
  background-color: #1F3BB3;
}

.tt-suggestion .tt-cursor {
  color: color(white);
  background-color: #1F3BB3;
}

.tt-suggestion p {
  margin: 0;
}

/* Wysi Editor */
.wysi-editor #toolbar [data-wysihtml-action] {
  float: right;
}

.wysi-editor #toolbar,
.wysi-editor textarea {
  width: 920px;
  padding: 5px;
  -webkit-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.wysi-editor textarea {
  height: 280px;
  border: 1px solid #dee2e6;
  font-family: inherit;
  font-size: 1rem;
}

.wysi-editor textarea:focus {
  color: black;
  border: 1px solid #dee2e6;
}

.wysi-editor .wysihtml-action-active,
.wysi-editor .wysihtml-command-active {
  font-weight: bold;
}

.wysi-editor [data-wysihtml-dialog] {
  margin: 5px 0 0;
  padding: 5px;
  border: 1px solid #666;
}

.wysi-editor a[data-wysihtml-command-value="red"] {
  color: #F95F53;
}

.wysi-editor a[data-wysihtml-command-value="green"] {
  color: #34B1AA;
}

.wysi-editor a[data-wysihtml-command-value="blue"] {
  color: #52CDFF;
}

.wysi-editor .wysihtml-editor,
.wysi-editor .wysihtml-editor table td {
  outline: 1px dotted #dee2e6;
}

.wysi-editor code {
  background: #ddd;
  padding: 10px;
  white-space: pre;
  display: block;
  margin: 1em 0;
}

.wysi-editor .toolbar {
  display: block;
  border-radius: 3px;
  border: 1px solid #fff;
  margin-bottom: 9px;
  line-height: 1em;
}

.wysi-editor .toolbar a {
  display: inline-block;
  height: 1.5em;
  border-radius: 3px;
  font-size: 1rem;
  line-height: 1.5em;
  text-decoration: none;
  background: color(white);
  border: 1px solid #dee2e6;
  padding: 0 0.2em;
  margin: 1px 0;
  color: #1F3BB3;
}

.wysi-editor .toolbar .wysihtml-action-active,
.wysi-editor .toolbar a.wysihtml-command-active {
  background: #222;
  color: white;
}

.wysi-editor .toolbar .block {
  padding: 1px;
  display: inline-block;
  background: #eee;
  border-radius: 3px;
  margin: 0 1px 1px 0;
}

.wysi-editor div[data-wysihtml-dialog="createTable"] {
  position: absolute;
  background: white;
}

.wysi-editor div[data-wysihtml-dialog="createTable"] td {
  width: 10px;
  height: 5px;
  border: 1px solid #dee2e6;
}

.wysi-editor .wysihtml-editor table td.wysiwyg-tmp-selected-cell {
  outline: 2px solid #34B1AA;
}

.wysi-editor .editor-container-tag {
  padding: 5px 10px;
  position: absolute;
  color: white;
  background: rgba(0, 0, 0, 0.8);
  width: 100px;
  margin-left: -50px;
  -webkit-transition: 0.1s left, 0.1s top;
}

.wysi-editor .wrap {
  max-width: 700px;
  margin: 40px;
}

.wysi-editor .editable .wysihtml-uneditable-container {
  outline: 1px dotted #dee2e6;
  position: relative;
}

.wysi-editor .editable .wysihtml-uneditable-container-right {
  float: right;
  width: 50%;
  margin-left: 2em;
  margin-bottom: 1em;
}

.wysi-editor .editable .wysihtml-uneditable-container-left {
  float: left;
  width: 50%;
  margin-right: 2em;
  margin-bottom: 1em;
}

/* X-editable */
.editable-form .editable {
  color: #1F1F1F;
  font-size: .8125rem;
}

.editable-form .editable-click {
  border-color: #1F1F1F;
}

.editable-container.editable-inline {
  max-width: 100%;
}

.editable-container.editable-inline .editableform {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group {
  max-width: 100%;
  white-space: initial;
}

.editable-container.editable-inline .editableform .control-group > div {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input input,
.editable-container.editable-inline .editableform .control-group .editable-input textarea {
  max-width: 100%;
  width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input .combodate .form-control, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .asColorPicker-input, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .dataTables_wrapper select, .dataTables_wrapper .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single, .select2-container--default .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-selection--single, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-search__field, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .typeahead,
.editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-query,
.editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-hint {
  padding-left: 0;
  padding-right: 0;
}

@media (max-width: 991px) {
  .editable-container.editable-inline .editableform .control-group .editable-buttons {
    display: block;
    margin-top: 10px;
  }
}

/*-------------------------------------------------------------------*/
/* === Landing screens === */
/* Auth */
.auth .login-half-bg {
  background: url("../../images/auth/login-bg.jpg");
  background-size: cover;
}

.auth .register-half-bg {
  background: url("../../images/auth/register-bg.jpg");
  background-size: cover;
}

.auth.lock-full-bg {
  background: url("../../images/auth/lockscreen-bg.jpg");
  background-size: cover;
}

.auth .lock-profile-img {
  width: 90px;
  height: 90px;
  border-radius: 100%;
}

.auth .auth-form-light {
  background: #ffffff;
}

.auth .auth-form-light select {
  color: #c9c8c8;
}

.auth .auth-form-light .input-group .form-control:focus, .auth .auth-form-light .asColorPicker-wrap .form-control:focus, .auth .auth-form-light .input-group .asColorPicker-input:focus, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:focus, .auth .auth-form-light .input-group .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .input-group select:focus, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:focus, .auth .auth-form-light .input-group .typeahead:focus, .auth .auth-form-light .asColorPicker-wrap .typeahead:focus,
.auth .auth-form-light .input-group .tt-query:focus,
.auth .auth-form-light .asColorPicker-wrap .tt-query:focus,
.auth .auth-form-light .input-group .tt-hint:focus,
.auth .auth-form-light .asColorPicker-wrap .tt-hint:focus, .auth .auth-form-light .input-group .form-control:active, .auth .auth-form-light .asColorPicker-wrap .form-control:active, .auth .auth-form-light .input-group .asColorPicker-input:active, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:active, .auth .auth-form-light .input-group .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .input-group select:active, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:active, .auth .auth-form-light .input-group .typeahead:active, .auth .auth-form-light .asColorPicker-wrap .typeahead:active,
.auth .auth-form-light .input-group .tt-query:active,
.auth .auth-form-light .asColorPicker-wrap .tt-query:active,
.auth .auth-form-light .input-group .tt-hint:active,
.auth .auth-form-light .asColorPicker-wrap .tt-hint:active {
  border-color: #dee2e6;
}

.auth .auth-form-transparent {
  background: transparent;
}

.auth .auth-form-transparent .form-control, .auth .auth-form-transparent .asColorPicker-input, .auth .auth-form-transparent .dataTables_wrapper select, .dataTables_wrapper .auth .auth-form-transparent select, .auth .auth-form-transparent .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-transparent .select2-selection--single, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field, .auth .auth-form-transparent .typeahead,
.auth .auth-form-transparent .tt-query,
.auth .auth-form-transparent .tt-hint,
.auth .auth-form-transparent .input-group-text {
  border-color: #F1F1F1;
}

.auth .auth-form-transparent .form-control:focus, .auth .auth-form-transparent .asColorPicker-input:focus, .auth .auth-form-transparent .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-transparent .select2-selection--single:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:focus, .auth .auth-form-transparent .typeahead:focus,
.auth .auth-form-transparent .tt-query:focus,
.auth .auth-form-transparent .tt-hint:focus, .auth .auth-form-transparent .form-control:active, .auth .auth-form-transparent .asColorPicker-input:active, .auth .auth-form-transparent .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-transparent select:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-transparent .select2-selection--single:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:active, .auth .auth-form-transparent .typeahead:active,
.auth .auth-form-transparent .tt-query:active,
.auth .auth-form-transparent .tt-hint:active,
.auth .auth-form-transparent .input-group-text:focus,
.auth .auth-form-transparent .input-group-text:active {
  border-color: #F1F1F1;
}

.auth .auth-form-transparent select {
  outline-color: #F1F1F1;
}

.auth.auth-img-bg {
  padding: 0;
}

@media (min-width: 768px) {
  .auth.auth-img-bg .auth-form-transparent {
    width: 55%;
    margin: auto;
  }
}

.auth .brand-logo {
  margin-bottom: 2rem;
}

.auth .brand-logo img {
  width: 90px;
}

.auth form .form-group {
  margin-bottom: 1.5rem;
}

.auth form .form-group label {
  font-size: .8125rem;
}

.auth form .form-group .form-control, .auth form .form-group .asColorPicker-input, .auth form .form-group .dataTables_wrapper select, .dataTables_wrapper .auth form .form-group select, .auth form .form-group .select2-container--default .select2-selection--single, .select2-container--default .auth form .form-group .select2-selection--single, .auth form .form-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth form .form-group .select2-search__field, .auth form .form-group .typeahead,
.auth form .form-group .tt-query,
.auth form .form-group .tt-hint {
  background: transparent;
  border-radius: 0;
  font-size: .9375rem;
}

.auth form .auth-form-btn {
  padding: 1rem 3rem;
  line-height: 1.5;
}

.auth form .auth-link {
  font-size: 0.812rem;
}

.auth form .auth-link:hover {
  color: initial;
}

.page-body-wrapper {
  min-height: calc(100vh - 97px);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  padding-left: 0;
  padding-right: 0;
  padding-top: 97px;
}

.page-body-wrapper.full-page-wrapper {
  width: 100%;
  min-height: 100vh;
  padding-top: 0;
}

.main-panel {
  transition: width 0.25s ease, margin 0.25s ease;
  width: calc(100% - 220px);
  min-height: calc(100vh - 97px);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
}

@media (max-width: 991px) {
  .main-panel {
    margin-left: 0;
    width: 100%;
  }
}

.content-wrapper {
  background: #F4F5F7;
  padding: 1.5rem 2.187rem 1.5rem 3.5rem;
  width: 100%;
  -webkit-flex-grow: 1;
  flex-grow: 1;
}

@media (max-width: 767px) {
  .content-wrapper {
    padding: 0 1.5rem 1.5rem 1.5rem;
  }
}

/* Sidebar */
.sidebar {
  min-height: calc(100vh - 97px);
  background: #F4F5F7;
  font-family: "Manrope", sans-serif;
  font-weight: 500;
  padding: 0;
  width: 220px;
  z-index: 11;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
}

.sidebar .nav {
  overflow: hidden;
  flex-wrap: nowrap;
  flex-direction: column;
  margin-bottom: 60px;
}

.sidebar .nav .nav-item {
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  transition-property: background;
  -webkit-transition-property: background;
}

.sidebar .nav .nav-item .collapse {
  z-index: 999;
}

.sidebar .nav .nav-item .nav-link {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  white-space: nowrap;
  padding: 10px 35px 10px 35px;
  color: #484848;
  border-radius: 0px 20px 20px 0px;
  -webkit-transition-duration: 0.45s;
  -moz-transition-duration: 0.45s;
  -o-transition-duration: 0.45s;
  transition-duration: 0.45s;
  transition-property: color;
  -webkit-transition-property: color;
  font-weight: 400;
}

@media (max-width: 991px) {
  .sidebar .nav .nav-item .nav-link {
    border-radius: 0;
  }
}

.sidebar .nav .nav-item .nav-link i {
  color: inherit;
}

.sidebar .nav .nav-item .nav-link i.menu-icon {
  font-size: 22px;
  line-height: 1;
  margin-right: 1rem;
  color: #484848;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-icon {
  margin-left: 2rem;
  margin-right: 0;
}

.sidebar .nav .nav-item .nav-link i.menu-icon:before {
  vertical-align: middle;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: auto;
  margin-right: 0;
  color: #bfccda;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-arrow {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow:before {
  content: "\F142";
  font-family: "Material Design Icons";
  font-style: normal;
  display: block;
  font-size: 0.687rem;
  line-height: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.sidebar .nav .nav-item .nav-link .menu-title {
  color: inherit;
  display: inline-block;
  font-size: 12px;
  line-height: 1;
  vertical-align: middle;
}

.sidebar .nav .nav-item .nav-link .badge {
  margin-left: auto;
}

.rtl .sidebar .nav .nav-item .nav-link .badge {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link[aria-expanded="true"] i.menu-arrow:before {
  -moz-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.sidebar .nav .nav-item.active {
  border-radius: 0px 20px 20px 0px;
}

.sidebar .nav .nav-item.active > .nav-link {
  background: #fff;
  position: relative;
  font-weight: bold;
  font-size: 13px;
}

.sidebar .nav .nav-item.active > .nav-link i,
.sidebar .nav .nav-item.active > .nav-link .menu-title,
.sidebar .nav .nav-item.active > .nav-link .menu-arrow {
  color: #1F3BB3;
}

.sidebar .nav .nav-item.active > .nav-link .menu-title {
  font-size: 13px;
}

.sidebar .nav .nav-item.active > .nav-link i.menu-arrow::before {
  content: "\e64b";
}

.sidebar .nav .nav-item:hover > .nav-link i,
.sidebar .nav .nav-item:hover > .nav-link .menu-title,
.sidebar .nav .nav-item:hover > .nav-link .menu-arrow {
  color: #1F3BB3;
}

.sidebar .nav .nav-item.nav-category {
  color: #404040;
  border-bottom: 1px solid rgba(255, 255, 255, 0.13);
  margin: 0 30px;
  font-size: 11px;
  font-weight: 700;
  padding: 20px 0px 5px 0px;
  text-transform: uppercase;
}

.sidebar-dark .sidebar .nav .nav-item.nav-category {
  color: #fff;
  border-bottom: none;
}

.sidebar .nav:not(.sub-menu) {
  margin-top: 0;
  margin-left: 0;
  margin-right: 0;
}

.sidebar .nav:not(.sub-menu) > .nav-item {
  margin-top: .2rem;
}

.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link, .sidebar .nav:not(.sub-menu) > .nav-item:hover[aria-expanded="true"] {
  background: #fff;
  color: #fff;
}

.sidebar .nav:not(.sub-menu) > .nav-item > .nav-link {
  margin: 0;
}

.sidebar .nav:not(.sub-menu) > .nav-item > .nav-link[aria-expanded="true"] {
  border-radius: 8px 8px 0 0;
  background: #fff;
  color: #1F3BB3;
}

.sidebar .nav:not(.sub-menu) > .nav-item.active {
  background: transparent;
}

.sidebar .nav.sub-menu {
  margin-bottom: 0;
  margin-top: 0;
  list-style: none;
  padding: 0.25rem 0 0 3.07rem;
  background: #fff;
  padding-bottom: 12px;
}

.sidebar .nav.sub-menu .nav-item {
  padding: 0;
}

.sidebar .nav.sub-menu .nav-item::before {
  content: '';
  width: 5px;
  height: 5px;
  position: absolute;
  margin-top: 16px;
  border-radius: 50%;
  background: #b2b2b2;
}

.sidebar .nav.sub-menu .nav-item .nav-link {
  color: #484848;
  padding: 0.7rem 1rem;
  position: relative;
  font-size: 12px;
  line-height: 1;
  height: auto;
  border-top: 0;
}

.sidebar .nav.sub-menu .nav-item .nav-link:hover {
  color: #000;
}

.sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: #1F3BB3;
  background: transparent;
}

.sidebar .nav.sub-menu .nav-item:hover {
  background: transparent;
}

.sidebar-dark .sidebar {
  background: #232227;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link {
  color: #FFFFFF;
  position: relative;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link .sidebar-icon-only {
  color: #1E283D;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link i {
  color: inherit;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link i.menu-icon {
  color: #FFFFFF;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link .menu-title {
  color: inherit;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link[aria-expanded="true"] .menu-title {
  color: #FFFFFF;
}

.sidebar-dark .sidebar .nav .nav-item.active > .nav-link {
  background: transparent;
}

.sidebar-dark .sidebar .nav .nav-item.active > .nav-link:before {
  content: '';
  width: 2px;
  height: 100%;
  background: #ffffff;
  left: 0;
  top: 0;
  position: absolute;
}

.sidebar-dark .sidebar .nav .nav-item.active > .nav-link .menu-title,
.sidebar-dark .sidebar .nav .nav-item.active > .nav-link i {
  color: #ffffff;
}

.sidebar-dark .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: transparent;
  color: #fff;
}

.sidebar-dark .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link:before {
  content: '';
  width: 2px;
  height: 100%;
  background: #ffffff;
  left: 0;
  top: 0;
  position: absolute;
}

.sidebar-dark .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link .menu-arrow {
  color: #fff;
}

.sidebar-dark .sidebar .nav:not(.sub-menu) > .nav-item .nav-link[aria-expanded="true"] {
  background: #1a1f26;
  color: #ffffff;
}

.sidebar-dark .sidebar .nav.sub-menu {
  background: #1a1f26;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link {
  color: #FFFFFF;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:before {
  color: white;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: #ffffff;
  background: transparent;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:hover {
  color: #9a94a7;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item:hover {
  background: transparent;
}

/* style for off-canvas menu*/
@media screen and (max-width: 991px) {
  .sidebar-offcanvas {
    position: fixed;
    max-height: calc(100vh - 97px);
    top: 97px;
    bottom: 0;
    overflow: auto;
    right: -220px;
    -webkit-transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }
  .sidebar-offcanvas.active {
    right: 0;
  }
}

/* Navbar */
.navbar {
  font-weight: 400;
  transition: background 0.25s ease;
  -webkit-transition: background 0.25s ease;
  -moz-transition: background 0.25s ease;
  -ms-transition: background 0.25s ease;
  box-shadow: none;
  background: #F4F5F7;
  /* Navbar color variations */
}

.sidebar-dark .navbar {
  box-shadow: none;
}

.navbar .navbar-brand-wrapper {
  background: #F4F5F7;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
  width: 220px;
  height: 97px;
  padding: 20px 35px;
}

.sidebar-dark .navbar .navbar-brand-wrapper {
  background: #232227;
}

@media (max-width: 991px) {
  .sidebar-dark .navbar .navbar-brand-wrapper {
    background: #F4F5F7;
  }
}

@media (max-width: 991px) {
  .navbar .navbar-brand-wrapper {
    padding: 20px 0;
  }
}

.navbar .navbar-brand-wrapper .navbar-brand {
  color: #27367f;
  font-size: 1.5rem;
  margin-right: 0;
  padding: 0;
  line-height: 1;
}

.navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
  display: none;
}

.navbar .navbar-brand-wrapper .navbar-brand:active, .navbar .navbar-brand-wrapper .navbar-brand:focus, .navbar .navbar-brand-wrapper .navbar-brand:hover {
  color: #1b2658;
}

.navbar .navbar-brand-wrapper .navbar-brand img {
  max-width: 100%;
  height: 34px;
  margin: auto;
  vertical-align: middle;
}

.navbar .navbar-brand-wrapper .brand-logo-mini {
  padding-left: 0;
  text-align: center;
}

.navbar .navbar-brand-wrapper .brand-logo-mini img {
  width: calc(70px - 30px);
  max-width: 100%;
  margin: auto;
}

.navbar .navbar-brand-wrapper .navbar-toggler {
  border: 0;
  color: inherit;
  font-size: 1rem;
  padding: 0;
  border-radius: 0;
}

.navbar .navbar-brand-wrapper .navbar-toggler:focus {
  box-shadow: none;
}

.navbar .navbar-brand-wrapper .navbar-toggler:not(.navbar-toggler-right) {
  transform: rotate(0deg);
  -webkit-transition: transform 0.3s linear;
  -moz-transition: transform 0.3s linear;
  -ms-transition: transform 0.3s linear;
  -o-transition: transform 0.3s linear;
  transition: transform 0.3s linear;
}

@media (max-width: 991px) {
  .navbar .navbar-brand-wrapper .navbar-toggler:not(.navbar-toggler-right) {
    display: none;
  }
}

.sidebar-icon-only .navbar .navbar-brand-wrapper .navbar-toggler:not(.navbar-toggler-right) {
  transform: rotate(180deg);
}

@media (max-width: 991px) {
  .navbar .navbar-brand-wrapper .navbar-toggler.navbar-toggler-right {
    padding-left: 15px;
    padding-right: 0;
  }
}

.sidebar-dark .navbar .navbar-brand-wrapper .navbar-toggler {
  padding-left: 0;
  color: #ffffff;
}

.navbar .navbar-menu-wrapper {
  background: #F4F5F7;
  transition: width 0.25s ease;
  -webkit-transition: width 0.25s ease;
  -moz-transition: width 0.25s ease;
  -ms-transition: width 0.25s ease;
  color: #6C7383;
  padding-left: 3.5rem;
  padding-right: 2.187rem;
  padding-top: 30px;
  padding-bottom: 25px;
  width: calc(100% - 220px);
  height: 97px;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper {
    width: calc(100% - 55px);
    padding-top: 12px;
    padding-left: 15px;
    padding-right: 11px;
    height: auto;
  }
}

.navbar .navbar-menu-wrapper .navbar-toggler {
  border: 0;
  color: inherit;
  font-size: 1.25rem;
  padding: 0;
  border-radius: 0;
}

.navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
  transform: rotate(0deg);
  -webkit-transition: transform 0.3s linear;
  -moz-transition: transform 0.3s linear;
  -ms-transition: transform 0.3s linear;
  -o-transition: transform 0.3s linear;
  transition: transform 0.3s linear;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
    display: none;
  }
}

.sidebar-icon-only .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
  transform: rotate(180deg);
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
    padding-left: 15px;
    padding-right: 0;
  }
  .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right:focus {
    box-shadow: none;
  }
}

.sidebar-dark .navbar .navbar-menu-wrapper .navbar-toggler {
  padding-left: 2.375rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item {
  margin-left: 1.25rem;
}

@media (max-width: 992px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item {
    margin-left: 10px;
    margin-right: 0px;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item:last-child {
  margin-right: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
  color: #212121;
  font-size: 12px;
  vertical-align: middle;
}

@media (max-width: 767px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i {
  font-size: 1.25rem;
  vertical-align: middle;
  margin-right: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i.icon-lg, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-primary .background-icon i, .data-icon-card-primary .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-secondary .background-icon i, .data-icon-card-secondary .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-success .background-icon i, .data-icon-card-success .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-info .background-icon i, .data-icon-card-info .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-warning .background-icon i, .data-icon-card-warning .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-danger .background-icon i, .data-icon-card-danger .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-light .background-icon i, .data-icon-card-light .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .data-icon-card-dark .background-icon i, .data-icon-card-dark .background-icon .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i {
  font-size: 1.4rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .small-text {
  font-size: 0.75rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search {
  margin-left: 2rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap {
  border-radius: 4px;
  padding: .75rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-text,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .input-group-text {
  background: transparent;
  border: 0;
  color: #000000;
  padding: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-text i, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  font-size: 1.25rem;
  color: #6C7383;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  margin-left: .7rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #6c7383;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #6c7383;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #6c7383;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #6c7383;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings {
  margin: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings .nav-link {
  padding: 0;
  text-align: center;
  height: 34px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings i {
  font-size: 1.25rem;
  vertical-align: middle;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile {
  margin-left: .2rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile img {
  width: 40px;
  height: 40px;
  border-radius: 100%;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile.dropdown .dropdown-toggle:after {
  display: none;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  border: none;
  -webkit-box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  position: absolute;
  font-size: 0.9rem;
  margin-top: 0;
  right: 0;
  left: auto;
  top: 70px;
  padding-top: 0;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  right: auto;
  left: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
  margin-bottom: 0;
  padding: 5px 25px;
  cursor: pointer;
  border-bottom: 1px solid #dee2e6;
  line-height: 1;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  font-size: 24px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis {
  max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 1;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  margin-left: 10px;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 0;
  margin-right: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-divider {
  margin: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown i {
  margin-right: 0;
  vertical-align: middle;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
    position: static;
  }
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
    left: 20px;
    right: 20px;
    top: 97px;
    width: calc(100% - 40px);
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator {
  position: relative;
  padding: 0;
  text-align: center;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator .count {
  position: absolute;
  left: 45%;
  width: 7px;
  height: 7px;
  border-radius: 100%;
  background: #F95F53;
  color: #ffffff;
  font-size: 11px;
  top: -2px;
  font-weight: 600;
  line-height: 1rem;
  border: 1px solid #ffffff;
  text-align: center;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator:after {
  display: none;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .welcome-text {
  font-family: "Manrope", sans-serif;
  font-style: normal;
  font-weight: normal;
  font-size: 28px;
  line-height: 38px;
  color: #8D8D8D;
  margin-bottom: 10px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .welcome-text .text-dark {
  color: #000000;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .welcome-sub-text {
  font-family: "Manrope", sans-serif;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 22px;
  color: #8D8D8D;
  margin-bottom: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .dropdown-bordered {
  padding: 8px 15px;
  border: 1px solid #DFDFDF;
  border-radius: 6px;
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  line-height: 16px;
  font-family: "Manrope", sans-serif;
  min-width: 170px;
  height: 34px;
  background: #ffffff;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .dropdown-bordered.dropdown-toggle:after {
  position: absolute;
  right: 15px;
  top: 35%;
  margin-left: auto;
  color: #000000;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker {
  background: #ffffff;
  font-family: "Manrope", sans-serif;
  height: 36px;
  border: 1px solid #DFDFDF;
  border-radius: 6px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .calendar-icon {
  color: #000000;
  font-size: 12px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .input-group-prepend {
  height: 34px;
  border-color: transparent;
  border-radius: 6px 0 0 6px;
  background: r=transparent;
  border-right: 1px solid #dee2e6;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .input-group-prepend > .input-group-text {
  border-color: transparent;
  border-right: 1px solid #dee2e6;
  background: transparent;
  height: 100%;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .form-control, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .asColorPicker-input, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .dataTables_wrapper select, .dataTables_wrapper .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker select, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .select2-container--default .select2-selection--single, .select2-container--default .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .select2-selection--single, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .select2-search__field, .navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .typeahead,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .tt-query,
.navbar .navbar-menu-wrapper .navbar-nav .nav-item .navbar-date-picker .tt-hint {
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  line-height: 16px;
  color: #000000;
  border: none;
  border-left: none;
  max-width: 120px;
  height: 34px;
  border-radius: 0 6px 6px 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .search-form {
  position: relative;
  margin-right: 0;
  vertical-align: middle;
  height: 14px;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item .search-form {
  margin-right: 0;
  margin-left: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .search-form i {
  font-size: 1.25rem;
  position: absolute;
  left: 0;
  top: 60%;
  transform: translateY(-50%);
  color: #212121;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item .search-form i {
  left: auto;
  right: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .search-form input {
  background-color: transparent;
  border: none;
  cursor: pointer;
  width: 0;
  height: 24px;
  padding: 0 0 0 20px;
  position: relative;
  transition: width 400ms ease, background 400ms ease;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .search-form input:focus {
  background-color: transparent;
  border-bottom: 1px solid #212121;
  border-radius: 0;
  padding-left: 30px;
  cursor: text;
  outline: 0;
  width: 140px;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item .search-form input:focus {
  padding-right: 30px;
  padding-left: 0;
}

@media (min-width: 992px) {
  .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
    margin-left: auto;
  }
  .rtl .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
    margin-left: 0;
    margin-right: auto;
  }
}

.navbar.navbar-primary .navbar-menu-wrapper {
  background: #1F3BB3;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

.navbar.navbar-secondary .navbar-menu-wrapper {
  background: #F1F1F1;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

.navbar.navbar-success .navbar-menu-wrapper {
  background: #34B1AA;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

.navbar.navbar-info .navbar-menu-wrapper {
  background: #52CDFF;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

.navbar.navbar-warning .navbar-menu-wrapper {
  background: #ffaf00;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

.navbar.navbar-danger .navbar-menu-wrapper {
  background: #F95F53;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #fbfbfb;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  background: #1E283D;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-webkit-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-webkit-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-webkit-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead::-moz-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead::-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query::-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint::-moz-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint::-moz-placeholder {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .form-control:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .asColorPicker-input:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group select:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap select:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-selection--single:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .select2-search__field:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .typeahead:-ms-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-query:-ms-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder,
.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .tt-hint:-ms-input-placeholder {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .input-group .input-group-text i, .navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap .input-group-text i {
  color: #ffffff;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #dee2e6;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #1E283D;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group, .navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .asColorPicker-wrap {
  background: rgba(30, 40, 61, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #556370;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #1F3BB3;
}

@media (max-width: 991px) {
  .navbar {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
    display: none;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
    display: inline-block;
  }
  .navbar-collapse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 0.5rem;
  }
}

@media (max-width: 480px) {
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .brand-logo-mini {
    padding-top: 0px;
  }
}

/* Layouts */
@media (min-width: 992px) {
  .sidebar-mini .navbar .navbar-brand-wrapper {
    width: 145px;
    background: #fff;
  }
  .sidebar-mini .navbar .navbar-brand-wrapper .navbar-brand {
    display: none;
  }
  .sidebar-mini .navbar .navbar-menu-wrapper {
    width: calc(100% - 145px);
  }
  .sidebar-mini .sidebar {
    width: 145px;
    background: #fff;
  }
  .sidebar-mini .sidebar .nav .nav-item {
    padding: 0;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    border-bottom: none;
    margin-bottom: .875rem;
    padding: 10px 24px;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .menu-title {
    display: block;
    margin: auto;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .badge {
    margin-left: 5px;
    display: none;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-icon {
    display: block;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: .25rem;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: inline-block;
    margin-left: 5px;
    position: absolute;
    top: 50%;
    right: 20px;
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  .sidebar-mini .sidebar .nav .nav-item.nav-category {
    display: none;
  }
  .sidebar-mini .sidebar .nav.sub-menu .nav-item::before {
    display: none;
  }
  .sidebar-mini .main-panel {
    width: calc(100% - 145px);
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu {
    padding: 0;
    border-top: none;
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu .nav-item .nav-link {
    padding: .75rem 0 .75rem .15rem;
    margin-left: auto;
    margin-right: auto;
    display: block;
    text-align: left;
    width: 66%;
  }
}

@media (min-width: 992px) {
  .sidebar-icon-only .navbar .navbar-brand-wrapper {
    width: 70px;
    padding-left: 1.625rem;
    background: #fff;
  }
  .sidebar-dark.sidebar-icon-only .navbar .navbar-brand-wrapper .navbar-toggler {
    color: #484848;
  }
  .sidebar-icon-only .navbar .navbar-brand-wrapper .brand-logo {
    display: none;
  }
  .sidebar-icon-only .navbar .navbar-brand-wrapper .brand-logo-mini {
    display: inline-block;
  }
  .sidebar-icon-only .navbar .navbar-menu-wrapper {
    width: calc(100% - 70px);
  }
  .sidebar-icon-only .sidebar {
    width: 70px;
    background: #fff;
  }
  .sidebar-icon-only .sidebar .nav {
    overflow: visible;
    margin-left: 0;
    margin-right: 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item {
    position: relative;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link {
    display: block;
    padding-left: .5rem;
    padding-right: .5rem;
    text-align: center;
    position: static;
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item .nav-link {
    color: #484848;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title,
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .badge, .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-sub-title {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 0 5px 5px 0px;
    background: #fff;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 5px 0 0 5px;
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    background: #484848;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
    margin-right: 0;
    margin-left: 0;
    margin-bottom: 0;
    color: rgba(31, 59, 179, 0.7);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
    color: rgba(31, 59, 179, 0.7);
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 0 5px 0 0px;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 5px 0 0 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .collapse {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    background: #fff;
    padding: 0.5rem 1.4rem;
    left: 70px;
    position: absolute;
    text-align: left;
    top: 0;
    bottom: 0;
    width: 190px;
    z-index: 1;
    line-height: 1.8;
    -webkit-box-shadow: 4px 0px 7px 0px rgba(182, 185, 189, 0.25);
    box-shadow: 4px 0px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    background: #fff;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    left: auto;
    right: 70px;
    text-align: left;
    -webkit-box-shadow: -4px 0px 7px 0px rgba(182, 185, 189, 0.25);
    box-shadow: -4px 0px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    color: #484848;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title:after {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link:hover .menu-title {
    background: #fff;
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link:hover .menu-title {
    background: #fff;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse,
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    display: block;
    background: #fff;
    border-radius: 0 0 5px 0;
    position: absolute;
    left: 70px;
    width: 190px;
    -webkit-box-shadow: 4px 4px 7px 0px rgba(182, 185, 189, 0.25);
    box-shadow: 4px 4px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    background: #232227;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    left: auto;
    right: 70px;
    border-radius: 0 0 0 5px;
    -webkit-box-shadow: -4px 4px 7px 0px rgba(182, 185, 189, 0.25);
    box-shadow: -4px 4px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-icon-only .sidebar .nav .nav-item.nav-category {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.active .nav-link:before {
    content: "";
    position: absolute;
    width: 3px;
    height: 100%;
    top: 0;
    left: 0;
    background: #1F3BB3;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.active .nav-link i.menu-icon {
    color: #1F3BB3;
  }
  .sidebar-icon-only .sidebar .nav:not(.sub-menu) .nav-item.active {
    border-radius: 0;
    background: transparent;
  }
  .sidebar-icon-only .sidebar .nav:not(.sub-menu) .nav-item:hover .nav-link {
    border-radius: 0;
  }
  .sidebar-icon-only .sidebar .nav.sub-menu {
    padding: 0 0 0 1.5rem;
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav.sub-menu {
    background: #fff;
  }
  .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
    text-align: left;
    padding-left: 20px;
  }
  .sidebar-icon-only .main-panel {
    width: calc(100% - 70px);
  }
}

@media (min-width: 992px) {
  .sidebar-hidden .sidebar {
    transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -ms-transition: width 0.25s ease;
    width: 0;
  }
  .sidebar-hidden .main-panel {
    width: 100%;
  }
}

@media (min-width: 992px) {
  .sidebar-absolute .page-body-wrapper {
    position: relative;
  }
  .sidebar-absolute .page-body-wrapper .sidebar {
    -webkit-transition: none;
    transition: none;
  }
  .sidebar-absolute:not(.sidebar-hidden) .sidebar {
    position: absolute;
    height: 100%;
    -webkit-box-shadow: 0 0 3px 1px #a7a3a3;
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    /* Firefox 3.5 - 3.6 */
    box-shadow: 0 0 3px 1px #a7a3a3;
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  }
  .sidebar-absolute .main-panel {
    width: 100%;
    -webkit-transition: none;
    transition: none;
  }
}

@media (min-width: 992px) {
  .sidebar-fixed .sidebar {
    position: fixed;
    max-height: auto;
  }
  .sidebar-fixed .sidebar .nav {
    max-height: calc(100vh - 97px);
    overflow: auto;
    position: relative;
  }
  .sidebar-fixed .sidebar .nav.sub-menu {
    max-height: none;
  }
  .sidebar-fixed .sidebar .nav:not(.sub-menu) {
    padding-bottom: 3rem;
  }
  .sidebar-fixed .main-panel {
    margin-left: 220px;
  }
  .sidebar-fixed.sidebar-icon-only .main-panel {
    margin-left: 70px;
  }
}

@media (min-width: 992px) {
  .boxed-layout .container-scroller {
    background: #c6c8ca;
    padding: 0 calc((100% - 1200px) / 2);
  }
  .boxed-layout .navbar.fixed-top {
    margin: auto;
    max-width: 1200px;
  }
}

.rtl {
  direction: rtl;
  text-align: right;
}

.rtl .sidebar .nav {
  padding-right: 0;
}

.rtl .sidebar .nav.sub-menu {
  padding: 0 4.5rem 0 0;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu {
  padding-right: 0rem;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link {
  padding-right: 3rem;
  text-align: right;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link:before {
  right: 1.75rem;
}

.rtl .product-chart-wrapper::-webkit-scrollbar,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar,
.rtl .sidebar-fixed .nav::-webkit-scrollbar,
.rtl .table-responsive::-webkit-scrollbar,
.rtl ul.chats::-webkit-scrollbar {
  width: 0.5em;
}

.rtl .product-chart-wrapper::-webkit-scrollbar-track,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-track,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-track,
.rtl .table-responsive::-webkit-scrollbar-track,
.rtl ul.chats::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.rtl .product-chart-wrapper::-webkit-scrollbar-thumb,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-thumb,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-thumb,
.rtl .table-responsive::-webkit-scrollbar-thumb,
.rtl ul.chats::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}

/* Settings Panel */
.settings-panel {
  border-left: 1px solid #dee2e6;
  display: block;
  position: fixed;
  top: 97px;
  right: -300px;
  bottom: 0;
  width: 300px;
  height: 100vh;
  min-height: 100%;
  background: #ffffff;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-property: right, box-shadow;
  -moz-transition-property: right, box-shadow;
  -o-transition-property: right, box-shadow;
  transition-property: right, box-shadow;
  z-index: 9999;
}

.settings-panel .nav-tabs {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  width: auto;
  margin: 0;
  padding: 0;
  background: #ffffff;
}

.settings-panel .nav-tabs .nav-item {
  border: none;
}

.settings-panel .nav-tabs .nav-item .nav-link {
  background: transparent;
  text-align: center;
  border: none;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  color: #1F1F1F;
  -webkit-transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  transition-duration: 0.4s;
  transition-property: color;
  -webkit-transition-property: color;
  -webkit-justify-content: center;
  justify-content: center;
}

.settings-panel .nav-tabs .nav-item .nav-link.active {
  background: transparent;
  color: #1F3BB3;
}

.settings-panel .tab-content {
  border: none;
  padding: 20px 0 0px 0;
}

.settings-panel .tab-content .tab-pane.scroll-wrapper {
  position: relative;
  max-height: 100vh;
  height: 100%;
  padding-bottom: 180px;
}

.settings-panel .settings-heading {
  padding: 16px 0 13px 35px;
  font-size: 0.812rem;
  font-family: "Manrope", sans-serif;
  font-weight: 500;
  line-height: 1;
  color: rgba(0, 0, 0, 0.9);
  opacity: 0.9;
  margin-bottom: 0;
  border-top: 1px solid #dee2e6;
  border-bottom: 1px solid #dee2e6;
}

.rtl .settings-panel .settings-heading {
  padding: 16px 35px 13px 0;
  text-align: right;
}

.rtl .settings-panel small.settings-heading, .rtl .settings-panel .settings-heading.small {
  padding: 16px 0 13px 12px;
}

.settings-panel .sidebar-bg-options {
  padding: 13px 35px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  font-size: 0.812rem;
  line-height: 1;
  color: #595959;
  background: #ffffff;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-property: background;
  -moz-transition-property: background;
  -o-transition-property: background;
  transition-property: background;
}

.settings-panel .sidebar-bg-options.selected {
  background: color(gray-lightest);
}

.settings-panel .color-tiles {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0px 35px 10px 35px;
  padding-top: 15px;
}

.settings-panel .color-tiles .tiles {
  margin: 10px 18px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.settings-panel .color-tiles .tiles:before {
  content: "";
  width: 0px;
  height: 0px;
  opacity: 0;
  background: rgba(0, 0, 0, 0.3);
  border-radius: 100%;
  border: 0;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
}

.settings-panel .color-tiles .tiles.selected:before {
  width: 10px;
  height: 10px;
  opacity: 1;
  border-width: 1px;
}

.settings-panel .color-tiles .tiles.light {
  border: 1px solid #e2e4e7;
}

.settings-panel .color-tiles .tiles.default {
  border: 1px solid #e2e4e7;
}

.settings-panel .chat-list {
  padding-left: 0;
}

.settings-panel .chat-list .list {
  padding: 0.4rem 0.8rem;
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  border-bottom: 1px solid #dee2e6;
}

.settings-panel .chat-list .list:last-child {
  border-bottom: none;
}

.settings-panel .chat-list .list .profile {
  position: relative;
  margin-right: 1rem;
}

.settings-panel .chat-list .list .profile img {
  width: 2.50rem;
  height: 2.50rem;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span {
  height: 0.75rem;
  width: 0.75rem;
  position: absolute;
  bottom: 0.34rem;
  right: 0;
  border: 0.13rem solid #ffffff;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span.online {
  background: #34B1AA;
}

.settings-panel .chat-list .list .profile span.offline {
  background: #ffaf00;
}

.settings-panel .chat-list .list .info {
  margin-right: auto;
}

.settings-panel .chat-list .list .info p {
  display: block;
  margin-bottom: 0;
}

.settings-panel .chat-list .list .info p:last-child {
  opacity: 0.5;
  font-size: 0.8rem;
}

.rtl .settings-panel .chat-list .list .info p:last-child {
  text-align: right;
}

.settings-panel .chat-list .list.active {
  background: #fbfbfb;
}

.settings-panel.open {
  right: 0;
}

.settings-panel .settings-close {
  position: absolute;
  top: 16px;
  right: 10px;
  color: #1F3BB3;
  background: transparent;
  border-radius: 4px;
  padding: 0 3px;
  cursor: pointer;
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  transition-duration: 0.2s;
  z-index: 999;
}

.settings-panel .settings-close:hover {
  background: rgba(255, 255, 255, 0.3);
}

.rtl .settings-panel .settings-close {
  right: unset;
  left: 10px;
}

.settings-panel .events p {
  font-family: "Manrope", sans-serif;
  font-weight: 400;
}

.rtl .settings-panel .events p {
  text-align: right;
}

.rtl .settings-panel {
  right: unset;
  left: -300px;
  -webkit-transition-property: left;
  -moz-transition-property: left;
  -o-transition-property: left;
  transition-property: left;
}

.rtl .settings-panel .chat-list {
  padding-right: 0;
}

.rtl .settings-panel .chat-list .list .profile {
  margin-right: 0;
  margin-left: 1rem;
}

.rtl .settings-panel .chat-list .list .info {
  margin-right: 0;
  margin-left: auto;
}

.rtl .settings-panel .chat-list .list .info .badge {
  margin-right: 10px;
}

.rtl .settings-panel.open {
  left: 0;
  right: unset;
}

#theme-settings .settings-close {
  top: 12px;
  background: transparent;
}

#settings-trigger {
  position: fixed;
  bottom: 40px;
  right: 30px;
  height: 45px;
  width: 45px;
  background: #1F3BB3;
  z-index: 99;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  border-radius: 100%;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  -ms-animation-delay: 1s;
  -o-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

#settings-trigger i {
  color: #ffffff;
  font-size: 1rem;
  line-height: 1rem;
}

.rtl #settings-trigger {
  right: auto;
  left: 30px;
}

@media (max-width: 991px) {
  #settings-trigger {
    display: none;
  }
}

/*# sourceMappingURL=../maps/vertical-layout-light/style.css.map */

</style>