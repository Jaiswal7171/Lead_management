<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vyavsaay Digiworld | Dashboard</title>
    
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/vendor/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/vendor/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="body-padding body-p-top light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <div class="header">
        <div class="row g-0 align-items-center">
            <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
                <div class="main-logo d-lg-block d-none">
                    <div class="logo-big">
                        <a href="index.php">
                        <img src="assets/images/logoe.png" style="height:40px; width:160px;" alt="Logo">
                        </a>
                    </div>
                    <div class="logo-small">
                        <a href="index.php">
                            <img src="assets/images/favicon.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="nav-close-btn">
                    <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
                </div>
                <a href="#" target="_blank" class="btn btn-sm btn-primary site-view-btn"><i class="fa-light fa-globe me-1"></i> <span>View Our Profile</span></a>
            </div>
            <div class="col-4 d-lg-none">
                <div class="mobile-logo">
                    <a href="index.php">
                        <img src="assets/images/logo-black.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
                <div class="header-right-btns d-flex justify-content-end align-items-center">
                    <div class="header-collapse-group">
                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                          
                            <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                               
                           
                             
                                <div class="header-btn-box">
                                    <div class="dropdown">
                                        <button class="header-btn" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="fa-light fa-calculator"></i>
                                        </button>
                                        <ul class="dropdown-menu calculator-dropdown">
                                            <div class="dgb-calc-box">
                                                <div>
                                                    <input type="text" id="dgbCalcResult" placeholder="0" autocomplete="off" readonly>
                                                </div>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="bg-danger">C</td>
                                                            <td class="bg-secondary">CE</td>
                                                            <td class="dgb-calc-oprator bg-primary">/</td>
                                                            <td class="dgb-calc-oprator bg-primary">*</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>8</td>
                                                            <td>9</td>
                                                            <td class="dgb-calc-oprator bg-primary">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>6</td>
                                                            <td class="dgb-calc-oprator bg-primary">+</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td rowspan="2" class="dgb-calc-sum bg-primary">=</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">0</td>
                                                            <td>.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <button class="header-btn fullscreen-btn" id="btnFullscreen"><i class="fa-light fa-expand"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="header-btn header-collapse-group-btn d-lg-none"><i class="fa-light fa-ellipsis-vertical"></i></button>
                    <button class="header-btn theme-settings-btn d-lg-none"><i class="fa-light fa-gear"></i></button>
                    <div class="header-btn-box profile-btn-box">
                        <button class="profile-btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/favicon.png" alt="image">
                        </button>
                        <ul class="dropdown-menu profile-dropdown-menu">
                            <li>
                                <div class="dropdown-txt text-center">
                                    <p class="mb-0">VyavsaayDigiworld</p>
                                    <span class="d-block">Admin</span>

                                </div>
                            </li>
                            <li><a class="dropdown-item" href="view.php?view_profile=true"><span class="dropdown-icon"><i class="fa-regular fa-circle-user"></i></span> Profile</a></li>
                            <li><a class="dropdown-item" href="view.php?all_admins=true"><span class="dropdown-icon"><i class="fa-regular fa-message-lines"></i></span>All Admins</a></li>
                            <li><a class="dropdown-item" href="add.php?add_admins=true"><span class="dropdown-icon"><i class="fa-regular fa-message-lines"></i></span>Add admin</a></li>

                          
                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item" href="logout.php"><span class="dropdown-icon"><i class="fa-regular fa-arrow-right-from-bracket"></i></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- profile right sidebar start -->
    <div class="profile-right-sidebar">
        <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>
        <div class="top-panel">
            <div class="profile-content scrollable">
                <ul>
                    <li>
                        <div class="dropdown-txt text-center">
                            <p class="mb-0">Shaikh Abu Dardah</p>
                            <span class="d-block">Web Developer</span>
                            <div class="d-flex justify-content-center">
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="checkbox" id="seeProfileAsDropdown">
                                    <label class="form-check-label" for="seeProfileAsDropdown">See as dropdown</label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="view-profile.html"><span class="dropdown-icon"><i class="fa-regular fa-circle-user"></i></span> Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="chat.html"><span class="dropdown-icon"><i class="fa-regular fa-message-lines"></i></span> Message</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="task.html"><span class="dropdown-icon"><i class="fa-regular fa-calendar-check"></i></span> Taskboard</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-circle-question"></i></span> Help</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bottom-panel">
            <div class="button-group">
                <a href="edit-profile.html"><i class="fa-light fa-gear"></i><span>Settings</span></a>
                <a href="login.html"><i class="fa-light fa-power-off"></i><span>Logout</span></a>
            </div>
        </div>
    </div>
    <!-- profile right sidebar end -->

    <div class="right-sidebar-btn d-lg-block d-none">
        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
    </div>

    <!-- right sidebar start -->
    <div class="right-sidebar">
        <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>
        <div class="sidebar-title">
            <h3>Layout Settings</h3>
        </div>
        <div class="sidebar-body scrollable">
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Nav Position <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="verticalMenu">
                            <div class="pb-2 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="border border-primary mb-1">
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                </div>
                                <div class="border border-primary">
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                </div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Vertical</span>
                        </div>
                    </div>
                    <div class="settings-col d-lg-block d-none">
                        <div class="dashboard-icon d-flex h-100 gap-1 border rounded" id="horizontalMenu">
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="p-1 bg-menu border-bottom">
                                        <div class="rounded-circle p-1 bg-nav w-max-content"></div>
                                    </div>
                                    <div class="p-1 bg-menu d-flex gap-1 mb-1">
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                    </div>
                                </div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Horizontal</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="twoColumnMenu">
                            <div class="p-1 bg-menu"></div>
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Two column</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="flushMenu">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Flush</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Theme Direction <span><i class="fa-light fa-angle-up"></i></span></span>
                <div>
                    <div class="btn-group d-flex">
                        <button class="btn btn-primary active w-50" id="dirLtr">LTR</button>
                        <button class="btn btn-primary w-50" id="dirRtl">RTL</button>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Primary Color <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row-2">
                    <button class="color-palette color-palette-1 active" data-color="blue-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-2" data-color="orange-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-3" data-color="pink-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-4" data-color="eagle_green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-5" data-color="purple-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-6" data-color="gold-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-7" data-color="green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-8" data-color="deep_pink-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-9" data-color="tea_green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-10" data-color="yellow_green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Theme Color <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex bg-blue-theme gap-1 border rounded" id="blueTheme">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Blue Theme</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded bg-body-secondary light-theme-btn active" id="lightTheme">
                            <div class="pb-4 px-1 pt-1 bg-dark-subtle">
                                <div class="px-2 py-1 rounded-pill bg-primary mb-2"></div>
                                <div class="px-2 pt-1 bg-primary mb-1"></div>
                                <div class="px-2 pt-1 bg-primary mb-1"></div>
                                <div class="px-2 pt-1 bg-primary mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-dark-subtle"></div>
                                <div class="px-2 py-1 bg-dark-subtle"></div>
                            </div>
                            <span class="part-txt">Light Theme</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded bg-dark" id="darkTheme">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Dark Theme</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group" id="navBarSizeGroup">
                <span class="sidebar-subtitle">Navbar Size <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="sidebarDefault">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Default</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="sidebarSmall">
                            <div class="pb-4 pt-1 bg-menu">
                                <div class="p-1 rounded-pill bg-nav mb-2"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Small icon</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="sidebarHover">
                            <div class="pb-4 pt-1 bg-menu">
                                <div class="p-1 rounded-pill bg-nav mb-2"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Expand on hover</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Sidebar Background <span><i class="fa-light fa-angle-up"></i></span></span>
                <div>
                    <div class="sidebar-bg-btn-box">
                        <button id="noBackground">
                            <span><i class="fa-light fa-xmark"></i></span>
                        </button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-1.jpg"></button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-2.jpg"></button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-3.jpg"></button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-4.jpg"></button>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Main Background <span><i class="fa-light fa-angle-up"></i></span></span>
                <div>
                    <div class="main-content-bg-btn-box">
                        <button id="noBackground2">
                            <span><i class="fa-light fa-xmark"></i></span>
                        </button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-1.jpg"></button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-2.jpg"></button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-3.jpg"></button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-4.jpg"></button>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Main preloader <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="enableLoader">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <div class="preloader-small">
                                <div class="loader">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <span class="part-txt">Enable</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="disableLoader">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Disable</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <div class="main-sidebar">
        <div class="main-menu">
            <ul class="sidebar-menu scrollable">
                <li class="sidebar-item open">
                    <a role="button" class="sidebar-link-group-title has-sub">Dashboard</a>
                    <ul class="sidebar-link-group">



                        <li class="sidebar-dropdown-item">
                            <a role="button" class="sidebar-link has-sub" data-dropdown="crmDropdown"><span class="nav-icon"><i class="fa-light fa-user-headset"></i></span> <span class="sidebar-txt">Category</span></a>
                            <ul class="sidebar-dropdown-menu" id="crmDropdown">
                                <li class="sidebar-dropdown-item"><a href="add.php?add_categories=true" class="sidebar-link">Add Category</a></li>
                                <li class="sidebar-dropdown-item"><a href="view.php?view_categories=true" class="sidebar-link">View Category</a></li>
                              
                          
                            </ul>   
                        </li>



                        <li class="sidebar-dropdown-item">
                            <a href="add.php?add_services=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Services</span></a>
                        </li>
                        


                        

                        <!-- <li class="sidebar-dropdown-item">
                            <a role="button" class="sidebar-link has-sub" data-dropdown="crmDropdown"><span class="nav-icon"><i class="fa-light fa-user-headset"></i></span> <span class="sidebar-txt">Services</span></a>
                            <ul class="sidebar-dropdown-menu" id="crmDropdown">
                                <li class="sidebar-dropdown-item"><a href="add.php?add_services=true" class="sidebar-link">Add Services</a></li>
                                <li class="sidebar-dropdown-item"><a href="view.php?view_services=true" class="sidebar-link">View Services</a></li>
                              
                          
                            </ul>   
                        </li> -->


                       
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a role="button" class="sidebar-link-group-title has-sub">Features</a>
                    <ul class="sidebar-link-group">
                   
                   
                     
                        
                      
                        <li class="sidebar-dropdown-item">
                            <a role="button" class="sidebar-link has-sub" data-dropdown="additionalDropdown"><span class="nav-icon"><i class="fa-light fa-square-plus"></i></span> <span class="sidebar-txt">Vendors</span></a>
                            <ul class="sidebar-dropdown-menu" id="additionalDropdown">
                                <li class="sidebar-dropdown-item"><a href="view.php?all_vendors=true" class="sidebar-link">All Vendors</a></li>
                                <li class="sidebar-dropdown-item"><a href="view.php?categorywise_vendors=true" class="sidebar-link">CategoryWise Vendors</a></li>
                                <li class="sidebar-dropdown-item"><a href="view.php?categorywise_vendors_count=true" class="sidebar-link">CategoryWise Vendors Count</a></li>
                            </ul>
                        </li> 


                        <li class="sidebar-dropdown-item">
                            <a role="button" class="sidebar-link has-sub" data-dropdown="ecommerceDropdown"><span class="nav-icon"><i class="fa-light fa-envelope-open-text"></i></span> <span class="sidebar-txt">Leads Section</span></a>
                            <ul class="sidebar-dropdown-menu" id="ecommerceDropdown">
                                <li class="sidebar-dropdown-item"><a href="view.php?leads=true" class="sidebar-link">Leads Base On Date</a></li>
                                <li class="sidebar-dropdown-item"><a href="view.php?leads_count=true" class="sidebar-link">Lead Count</a></li>
                                <li class="sidebar-dropdown-item"><a href="view.php?datewise_count=true" class="sidebar-link">DateWise Lead Count</a></li>

                            </ul>
                        </li>




                     
                   


                        <li class="sidebar-dropdown-item">
                            <a href="view.php?banners=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-file-invoice"></i></span> <span class="sidebar-txt">Vendors Offers</span></a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a role="button" class="sidebar-link has-sub" data-dropdown="authDropdown"><span class="nav-icon"><i class="fa-light fa-user-cog"></i></span> <span class="sidebar-txt">Collections</span></a>
                            <ul class="sidebar-dropdown-menu" id="authDropdown">
                                <li class="sidebar-dropdown-item"><a href="view.php?date_collection=true" class="sidebar-link">DateWise collection</a></li>
                                <li class="sidebar-dropdown-item"><a href="view.php?total_collection=true" class="sidebar-link">Total Collection</a></li>
                            </ul>
                        </li>

                        <li class="sidebar-dropdown-item">
                        <a href="view.php?Our_advertise=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-layer-group"></i></span> <span class="sidebar-txt">Vyavsaay Advertise</span></a>                        </li>



                 

                    </ul>
                </li>
                <li class="sidebar-item">
                  
                    <ul class="sidebar-link-group">
                        
                     


                    


                      
                      



                <li class="sidebar-item">
                    <a role="button" class="sidebar-link-group-title has-sub">Components</a>
                    <ul class="sidebar-link-group">
                        <li class="sidebar-dropdown-item">
                            <a role="button" class="sidebar-link has-sub" data-dropdown="advanceUiDropdown"><span class="nav-icon"><i class="fa-light fa-layer-group"></i></span> <span class="sidebar-txt">Vendor Suggestion</span></a>
                            <ul class="sidebar-dropdown-menu" id="advanceUiDropdown">
                                <li class="sidebar-dropdown-item"><a href="view.php?suggestions=true" class="sidebar-link">View Suggestion</a></li>
                               
                            </ul>
                        </li>


                        
                        <li class="sidebar-dropdown-item">
                            <a href="view.php?help_support=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-plus"></i></span> <span class="sidebar-txt">Help & Support</span></a>
                        </li>

                        <li class="sidebar-dropdown-item">
                        <a href="add.php?terms_conditions=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-plus"></i></span> <span class="sidebar-txt">Terms & Condition</span></a>
                        </li>




                        <li class="sidebar-dropdown-item">
                            <a href="view.php?packages=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Packages</span></a>
                        </li>

                        <li class="sidebar-dropdown-item">
                            <a href="view.php?refund_policy_view=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span> <span class="sidebar-txt">Refund Policy</span></a>
                        </li>
                        
                         <li class="sidebar-dropdown-item">
                            <a href="add.php?privacy_policy=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span> <span class="sidebar-txt">Privacy Policy</span></a>
                        </li>
                        
                        
                        <li class="sidebar-dropdown-item">
                            <a href="add.php?notification=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-table"></i></span> <span class="sidebar-txt">Send Notifications</span></a>
                        </li>

                        <li class="sidebar-dropdown-item">
                            <a href="add.php?Q_A=true" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-table"></i></span> <span class="sidebar-txt">Q & A</span></a>
                        </li>
                     
                      
                    </ul>
                </li>
                <li class="help-center">
                    
                </li>
            </ul>
        </div>
    </div>
    <!-- main sidebar end -->