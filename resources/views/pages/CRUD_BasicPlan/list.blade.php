<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Custom Styled DataTables</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dashboard_assets/assets/img/favicon.ico')}}" />
    <link href="{{asset('dashboardAssets/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('dashboardAssets/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('dashboardAssets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboardAssets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/plugins/table/datatable/custom_dt_custom.css')}}">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>
<body class="">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->


    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>
            <ul class="navbar-item flex-row navbar-dropdown search-ul">
                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('dashboard_assets/assets/img/90x90.jpg')}}" alt="admin-profile" class="img-fluid">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{asset('dashboard_assets/assets/img/90x90.jpg')}}" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>Siam</h5>

                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            {{--------------------------------- Navbar -----------------------------------}}
            <nav id="compactSidebar">
                <ul class="navbar-nav theme-brand flex-row">
                    <li class="nav-item theme-logo">
                        <a href="{{route('admin.dashboard')}}">
                            <img src="{{asset('dashboardAssets/assets/img/90x90.jpg')}}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                </ul>
                <ul class="menu-categories">

                    {{--------------------------------------- Dashboard ----------------------------------------}}
                    <li class="menu">
                        <a href="#dashboard" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/dashboard.png')}}" alt="">
                                </div>
                                <span>Dashboard</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------------- Dashboard ----------------------------------------}}



                    {{------------------------------------ About Us ---------------------------------------}}
                    <li class="menu">
                        <a href="#aboutus" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/aboutus.png')}}" alt="">
                                </div>
                                <span>About Us</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{------------------------------------ About Us ---------------------------------------}}




                    {{--------------------------------------------- SWOT --------------------------------------}}
                    <li class="menu">
                        <a href="#uiKit" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/swot.png')}}" alt="">
                                </div>
                                <span>SWOT</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------------------- SWOT --------------------------------------}}




                    {{---------------------------------- Creative Works ---------------------------------}}
                    <li class="menu">
                        <a href="#creativeWork" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/idea.png')}}" alt="">
                                </div>
                                <span>Creative</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{---------------------------------- Creative Works ---------------------------------}}






                    {{----------------------------------- Clients --------------------------------------}}
                    <li class="menu">
                        <a href="#clients" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/clients.png')}}" alt="">
                                </div>
                                <span>Clients</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Clients --------------------------------------}}





                    {{----------------------------------- Category --------------------------------------}}
                    <li class="menu">
                        <a href="#ServicesCategory" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/category.png')}}" alt="">
                                </div>
                                <span>Category</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Category --------------------------------------}}






                    {{----------------------------------- Sector Services Overview(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#ServiceOverview" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/overview.png')}}" alt="">
                                </div>
                                <span>Overview</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Sector Services Overview(Dynamic) --------------------------------------}}





                    {{----------------------------------- Sector Services(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorServices" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/services.png')}}" alt="">
                                </div>
                                <span> Services </span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Sector Services(Dynamic) --------------------------------------}}





                    {{----------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorTechnologiesWeWillUse" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/technology.png')}}" alt="">
                                </div>
                                <span>Stack Name</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}



                    {{----------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#sector_technologies_details" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/technology.png')}}" alt="">
                                </div>
                                <span>Stack Details</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}







                    {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorCreativeWorks" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/creative.png')}}" alt="">
                                </div>
                                <span>Creative Works</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}






                    {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#pricing" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/dollar.png')}}" alt="">
                                </div>
                                <span>Pricing</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}





                    {{--------------------------------- Sector Our Clients(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorOurclients" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/clients.png')}}" alt="">
                                </div>
                                <span>Sector Clients</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Our Clients(Dynamic) --------------------------------------}}


                    {{--------------------------------- Case Study Details --------------------------------------}}
                    <li class="menu">
                        <a href="#CaseStudy" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/case-study.png')}}" alt="">
                                </div>
                                <span>Case Study</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Case Study Details --------------------------------------}}




                    {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}
                    <li class="menu">
                        <a href="#caseStudyAboutProjectStackImages" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/programing.png')}}" alt="">
                                </div>
                                <span>Project Stacks</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}



                    {{--------------------------------- Case Study Single Project Image Slider --------------------------------------}}
                    <li class="menu">
                        <a href="#caseStudyslider" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/sliders.png')}}" alt="">
                                </div>
                                <span>CaseStudy Sliders</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Case Study Single Project Image Slider --------------------------------------}}


                    {{--------------------------------- Contact Informations --------------------------------------}}
                    <li class="menu">
                        <a href="#contact-information" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/telephone.png')}}" alt="">
                                </div>
                                <span>Contact</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Contact Informations --------------------------------------}}



                    {{--------------------------------- Project Proposal Informations --------------------------------------}}
                    <li class="menu">
                        <a href="#projectProposal-information" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/deals.png')}}" alt="">
                                </div>
                                <span>Proposal</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Project Proposal Informations --------------------------------------}}


                </ul>
            </nav>
            {{--------------------------------- Navbar -----------------------------------}}


            {{--------------------------------- Navbar Route -----------------------------------}}
            <div id="compact_submenuSidebar" class="submenu-sidebar">

                {{--------------------------------- Dashboard Homepage --------------------------------------}}
                <div class="submenu" id="dashboard">
                    <ul class="submenu-list" data-parent-element="#dashboard">
                        <li>
                            <a href="{{route('admin.dashboard')}}"> Homepage </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Dashboard Homepage --------------------------------------}}






                {{--------------------------------- AboutUs Route --------------------------------------}}
                <div class="submenu" id="aboutus">
                    <ul class="submenu-list" data-parent-element="#aboutus">
                        <li>
                            <a href="{{route('about.create')}}"> <img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('about.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- AboutUs Route --------------------------------------}}




                {{--------------------------------- Swot Route --------------------------------------}}
                <div class="submenu" id="uiKit">
                    <ul class="submenu-list" data-parent-element="#uiKit">
                        <li>
                            <a href="{{route('strength.create')}}">
                                <img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('strength.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Swot Route --------------------------------------}}



                {{--------------------------------- Creative Works --------------------------------------}}
                <div class="submenu" id="creativeWork">
                    <ul class="submenu-list" data-parent-element="#creativeWork">
                        <li>
                            <a href="{{route('creative_work.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('creative_work.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>




                {{--------------------------------- our Clients --------------------------------------}}
                <div class="submenu" id="clients">
                    <ul class="submenu-list" data-parent-element="#clients">
                        <li>
                            <a href="{{route('ourClients.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('ourClients.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- our Clients --------------------------------------}}






                {{--------------------------------- Category --------------------------------------}}
                <div class="submenu" id="ServicesCategory">
                    <ul class="submenu-list" data-parent-element="#ServicesCategory">
                        <li>
                            <a href="{{route('ServicesCategory.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('ServicesCategory.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Category --------------------------------------}}




                {{--------------------------------- Sector Service Overview(Dynamic) --------------------------------------}}
                <div class="submenu" id="ServiceOverview">
                    <ul class="submenu-list" data-parent-element="#ServiceOverview">
                        <li>
                            <a href="{{route('ServiceOverviewDetails.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('ServiceOverviewDetails.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Service Overview(Dynamic) --------------------------------------}}






                {{--------------------------------- Sector Services(Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorServices">
                    <ul class="submenu-list" data-parent-element="#SectorServices">
                        <li>
                            <a href="{{route('SectorServices.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('SectorServices.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Services(Dynamic) --------------------------------------}}




                {{--------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorTechnologiesWeWillUse">
                    <ul class="submenu-list" data-parent-element="#SectorTechnologiesWeWillUse">
                        <li>
                            <a href="{{route('SectorTechnologiesWeWillUse.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('SectorTechnologiesWeWillUse.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}



                {{--------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}
                <div class="submenu" id="sector_technologies_details">
                    <ul class="submenu-list" data-parent-element="#sector_technologies_details">
                        <li>
                            <a href="{{route('sector_technologies_details.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('sector_technologies_details.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}





                {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorCreativeWorks">
                    <ul class="submenu-list" data-parent-element="#SectorCreativeWorks">
                        <li>
                            <a href="{{route('SectorCreativeWorks.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('SectorCreativeWorks.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}




                {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}
                <div class="submenu" id="pricing">
                    <ul class="submenu-list" data-parent-element="#pricing">
                        <li>
                            <a href="{{route('PricingPlan.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('PricingPlan.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}



                {{--------------------------------- Sector Our Clients (Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorOurclients">
                    <ul class="submenu-list" data-parent-element="#SectorOurclients">
                        <li>
                            <a href="{{route('sectorClients.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('sectorClients.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Our Clients (Dynamic) --------------------------------------}}



                {{--------------------------------- Case Study Details --------------------------------------}}
                <div class="submenu" id="CaseStudy">
                    <ul class="submenu-list" data-parent-element="#CaseStudy">
                        <li>
                            <a href="{{route('CaseStudy.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('CaseStudy.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Case Study Details --------------------------------------}}




                {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}
                <div class="submenu" id="caseStudyAboutProjectStackImages">
                    <ul class="submenu-list" data-parent-element="#caseStudyAboutProjectStackImages">
                        <li>
                            <a href="{{route('caseStudyAboutProjectStackImages.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('caseStudyAboutProjectStackImages.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}



                {{--------------------------------- Case Study Single Project Sliders --------------------------------------}}
                <div class="submenu" id="caseStudyslider">
                    <ul class="submenu-list" data-parent-element="#caseStudyslider">
                        <li>
                            <a href="{{route('caseStudyslider.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('caseStudyslider.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Case Study Single Project Sliders --------------------------------------}}


                {{--------------------------------- Contact informations --------------------------------------}}
                <div class="submenu" id="contact-information">
                    <ul class="submenu-list" data-parent-element="#contact-information">
                        <li>
                            <a href="{{route('contact.list')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Show </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Contact informations --------------------------------------}}


                {{--------------------------------- Project Proposal informations --------------------------------------}}
                <div class="submenu" id="projectProposal-information">
                    <ul class="submenu-list" data-parent-element="#projectProposal-information">
                        <li>
                            <a href="{{route('ProjectProposalDetails.list')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Show </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Project Proposal informations --------------------------------------}}




            </div>
            {{--------------------------------- Navbar Route -----------------------------------}}

        </div>
        <!--  END SIDEBAR  -->


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Custom</a></li>
                        </ol>
                    </nav>
                </div>


                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column text-center"> Record Id </th>
                                            <th class="text-center">Package Name</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Small Description</th>
                                            <th class="text-center">Service Price</th>
                                            <th class="text-center">Services List</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($SectorPricingbasic as $key=>$basicPlan)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{$key+1}} </td>
                                            <td class="text-center">{{$basicPlan->planName}}</td>
                                            <td class="text-center">{{$basicPlan->get_category_name($basicPlan->category_id)}}</td>
                                            <td class="text-center">{{$basicPlan->small_description}}</td>
                                            <td class="text-center">{{$basicPlan->basic_plan_price}}</td>
                                            <td class="text-center">{!!$basicPlan->services_name!!}</td>
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li><a href="{{route('PricingPlan.edit' , $basicPlan->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                            </svg></a></li>


                                                    <li><a href="{{ route('PricingPlan.destroy', $basicPlan->id) }}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            </svg></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('dashboardAssets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/assets/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });

    </script>
    <script src="{{asset('dashboardAssets/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('dashboardAssets/plugins/table/datatable/datatables.js')}}"></script>
    <script>
        c3 = $('#style-3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>"
            , "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>'
                    , "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                }
                , "sInfo": "Showing page _PAGE_ of _PAGES_"
                , "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>'
                , "sSearchPlaceholder": "Search..."
                , "sLengthMenu": "Results :  _MENU_"
            , }
            , "stripeClasses": []
            , "lengthMenu": [5, 10, 20, 50]
            , "pageLength": 5
        });

        multiCheck(c3);

    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
