<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logo/logo.svg') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <title>Capca - Autobot Wijaya Solution</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('assets/logo/logo.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div><!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="" class="text-nowrap logo-img">
                        <img src="{{ asset('assets/logo/logo.svg') }}" class="dark-logo" alt="Logo-Dark" />
                        <img src="{{ asset('assets/logo/logo.svg') }}" class="light-logo"
                            alt="Logo-light" />
                    </a>
                    <a href="javascript:void(0)"
                        class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                        <i class="ti ti-x"></i>
                    </a>
                </div>


                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <!-- ---------------------------------- -->
                        <!-- Home -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Dashboard</span>
                        </li>
                       
                    </ul>
                </nav>

                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical"><!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ti ti-search"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="navbar-nav quick-links d-none d-lg-flex">
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    Settings<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-7 pt-7">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="../horizontal/app-chat.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Package
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">
                                                                            Set a package
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                <a href="../horizontal/app-invoice.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Help Desk
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">

                                                                            Desk Helping
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    Users Management<span class="mt-1"><i
                                            class="ti ti-chevron-down fs-3"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-7 pt-7">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="../horizontal/app-chat.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/user-pentagon.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Superadmin
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">
                                                                            Autobot Team
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                <a href="../horizontal/app-invoice.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/users-group.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Admin</h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">
                                                                            Admin of client
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                <a href="../horizontal/app-contact2.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/building-store.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Outlet</h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">
                                                                            Data outlets of client
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                <a href="../horizontal/app-email.html"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/user-scan.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">Operator
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">
                                                                            Operator for manage each outlets
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>

                        <div class="d-block d-lg-none">
                            <img src="{{ asset('assets/logo/logo.svg') }}" width="180" alt="" />
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0)"
                                    class="nav-link d-flex d-lg-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                    <!-- ------------------------------- -->
                                    <!-- start language Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)"
                                            id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://seeklogo.com/images/R/Republic_of_Indonesia_Flag-logo-3E5321CC56-seeklogo.com.png" alt=""
                                                width="20px" height="20px"
                                                class="rounded-circle object-fit-cover round-20" />
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <div class="position-relative">
                                                        <img src="https://seeklogo.com/images/R/Republic_of_Indonesia_Flag-logo-3E5321CC56-seeklogo.com.png"
                                                            alt="" width="20px" height="20px"
                                                            class="rounded-circle object-fit-cover round-20" />
                                                    </div>
                                                    <p class="mb-0 fs-3">Indonesia (IDN)</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end language Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start shopping cart Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item">
                                        <a class="nav-link position-relative nav-icon-hover"
                                            href="javascript:void(0)" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            <i class="ti ti-basket"></i>
                                            <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                                        </a>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end shopping cart Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start notification Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)"
                                            id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-bell-ringing"></i>
                                            <div class="notification bg-primary rounded-circle"></div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                                <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                                <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5
                                                    new</span>
                                            </div>
                                            <div class="message-body" data-simplebar>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-1.jpg"
                                                            alt="user" class="rounded-circle" width="48"
                                                            height="48" />
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">Congratulate
                                                            him</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-2.jpg"
                                                            alt="user" class="rounded-circle" width="48"
                                                            height="48" />
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Salma sent you
                                                            new message</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-3.jpg"
                                                            alt="user" class="rounded-circle" width="48"
                                                            height="48" />
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                        <span class="fs-2 d-block text-body-secondary">Check your
                                                            earnings</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-4.jpg"
                                                            alt="user" class="rounded-circle" width="48"
                                                            height="48" />
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">Assign her new
                                                            tasks</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-5.jpg"
                                                            alt="user" class="rounded-circle" width="48"
                                                            height="48" />
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">John received payment
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">$230 deducted
                                                            from account</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="py-6 px-7 d-flex align-items-center dropdown-item">
                                                    <span class="me-3">
                                                        <img src="../assets/images/profile/user-1.jpg"
                                                            alt="user" class="rounded-circle" width="48"
                                                            height="48" />
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle">
                                                        <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!
                                                        </h6>
                                                        <span class="fs-2 d-block text-body-secondary">Congratulate
                                                            him</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="py-6 px-7 mb-1">
                                                <button class="btn btn-outline-primary w-100">See All
                                                    Notifications</button>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end notification Dropdown -->
                                    <!-- ------------------------------- -->

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="35" height="35"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar>
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                            
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <div
                                                        class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="fs-4 mb-3 w-50 fw-semibold">Unlimited
                                                                    Access</h5>
                                                                <button class="btn btn-primary">Upgrade</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="m-n4 unlimited-img">
                                                                    <img src="../assets/images/backgrounds/unlimited-bg.png"
                                                                        alt="" class="w-100" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../horizontal/authentication-login.html" class="btn btn-outline-primary">Log Out</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->

                    <!-- ------------------------------- -->
                    <!-- apps Dropdown in Small screen -->
                    <!-- ------------------------------- -->
                    <!--  Mobilenavbar -->
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                        id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <nav class="sidebar-nav scroll-sidebar">
                            <div class="offcanvas-header justify-content-between">
                                <img src="../assets/images/logos/favicon.ico" alt="" class="img-fluid" />
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body" data-simplebar="" data-simplebar
                                style="height: calc(100vh - 80px)">
                                <ul id="sidebarnav">
                                    <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                            Settings<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="ps-7 pt-7">
                                                        <div class="border-bottom">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="position-relative">
                                                                        <a href="../horizontal/app-chat.html"
                                                                            class="d-flex align-items-center pb-9 position-relative">
                                                                            <div
                                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                                <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                                    alt="" class="img-fluid"
                                                                                    width="24" height="24" />
                                                                            </div>
                                                                            <div class="d-inline-block">
                                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                                    Package
                                                                                </h6>
                                                                                <span
                                                                                    class="fs-2 d-block text-body-secondary">
                                                                                    Set a package
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                        <a href="../horizontal/app-invoice.html"
                                                                            class="d-flex align-items-center pb-9 position-relative">
                                                                            <div
                                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                                <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                                                    alt="" class="img-fluid"
                                                                                    width="24" height="24" />
                                                                            </div>
                                                                            <div class="d-inline-block">
                                                                                <h6 class="mb-1 fw-semibold fs-3">Help Desk
                                                                                </h6>
                                                                                <span
                                                                                    class="fs-2 d-block text-body-secondary">
        
                                                                                    Desk Helping
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                            Users Management<span class="mt-1"><i
                                                    class="ti ti-chevron-down fs-3"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="ps-7 pt-7">
                                                        <div class="border-bottom">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="position-relative">
                                                                        <a href="../horizontal/app-chat.html"
                                                                            class="d-flex align-items-center pb-9 position-relative">
                                                                            <div
                                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                                <img src="../assets/images/svgs/user-pentagon.svg"
                                                                                    alt="" class="img-fluid"
                                                                                    width="24" height="24" />
                                                                            </div>
                                                                            <div class="d-inline-block">
                                                                                <h6 class="mb-1 fw-semibold fs-3">Superadmin
                                                                                </h6>
                                                                                <span
                                                                                    class="fs-2 d-block text-body-secondary">
                                                                                    Autobot Team
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                        <a href="../horizontal/app-invoice.html"
                                                                            class="d-flex align-items-center pb-9 position-relative">
                                                                            <div
                                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                                <img src="../assets/images/svgs/users-group.svg"
                                                                                    alt="" class="img-fluid"
                                                                                    width="24" height="24" />
                                                                            </div>
                                                                            <div class="d-inline-block">
                                                                                <h6 class="mb-1 fw-semibold fs-3">Admin</h6>
                                                                                <span
                                                                                    class="fs-2 d-block text-body-secondary">
                                                                                    Admin of client
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                        <a href="../horizontal/app-contact2.html"
                                                                            class="d-flex align-items-center pb-9 position-relative">
                                                                            <div
                                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                                <img src="../assets/images/svgs/building-store.svg"
                                                                                    alt="" class="img-fluid"
                                                                                    width="24" height="24" />
                                                                            </div>
                                                                            <div class="d-inline-block">
                                                                                <h6 class="mb-1 fw-semibold fs-3">Outlet</h6>
                                                                                <span
                                                                                    class="fs-2 d-block text-body-secondary">
                                                                                    Data outlets of client
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                        <a href="../horizontal/app-email.html"
                                                                            class="d-flex align-items-center pb-9 position-relative">
                                                                            <div
                                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                                <img src="../assets/images/svgs/user-scan.svg"
                                                                                    alt="" class="img-fluid"
                                                                                    width="24" height="24" />
                                                                            </div>
                                                                            <div class="d-inline-block">
                                                                                <h6 class="mb-1 fw-semibold fs-3">Operator
                                                                                </h6>
                                                                                <span
                                                                                    class="fs-2 d-block text-body-secondary">
                                                                                    Operator for manage each outlets
                                                                                </span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
                <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-xl-none">
                                <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block">
                                <a href="../horizontal/index.html" class="text-nowrap nav-link">
                                    <img src="{{ asset('assets/logo/logo.svg') }}" class="dark-logo"
                                        width="50" alt="" />
                                    <img src="{{ asset('assets/logo/logo.svg') }}" class="light-logo"
                                        width="50" alt="" />
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ti ti-search"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav quick-links d-none d-xl-flex">
                            <!-- ------------------------------- -->
                            <!-- start apps Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown-hover d-none d-lg-block">
                                <a class="nav-link" href="{{ route('capca.index')}}">Capca</a>
                              </li>
                            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    Report<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-7 pt-7">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="{{ route('capca.hasil')}}"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Hasil Identify
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">
                                                                            Hasil Capca sudha di Identify
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                <a href="{{ route('capca.presentase')}}"
                                                                    class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                           Persentase
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block text-body-secondary">
                                                                           Persetase Hasil Identify
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                          
                            <!-- ------------------------------- -->
                            <!-- end apps Dropdown -->
                            <!-- ------------------------------- -->
                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="../horizontal/index.html" class="text-nowrap nav-link">
                                <img src="{{ asset('assets/logo/logo.svg') }}" width="180" alt="" />
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <a href="javascript:void(0)"
                                    class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="../assets/images/profile/user-1.jpg"
                                                        class="rounded-circle" width="35" height="35"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="d-grid py-4 px-7 pt-8">
                                                <a href="../horizontal/authentication-login.html" class="btn btn-outline-primary">Log Out</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </header>
            <!--  Header End -->
            <div class="body-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/app.horizontal.init.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/theme.js"></script>

    <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/js/dashboards/dashboard.js"></script>
</body>

</html>
