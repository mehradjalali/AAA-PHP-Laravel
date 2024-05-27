<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from huro.cssninja.io/admin-blank-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Sep 2021 05:34:33 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from temdemo.ir/huro/admin-blank-page-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 10:11:13 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Huro Test</title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />

    <!--Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>
        <!--Pageloader-->
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <!--Mobile navbar-->
        <nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <!-- Mobile menu toggler icon -->
                    <div class="brand-start">
                        <div class="navbar-burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a class="navbar-item is-brand" href="index-3.html">
                        <img class="light-image" src="{{asset('assets/img/logos/logo/logo.svg')}}" alt="">
                        <img class="dark-image" src="{{asset('assets/img/logos/logo/logo-light.svg')}}" alt="">
                    </a>

                    <div class="brand-end">
                        <div class="navbar-item has-dropdown is-notification is-hidden-tablet is-hidden-desktop">
                            <a class="navbar-link is-arrowless" href="javascript:void(0);">
                                <i data-feather="bell"></i>
                                <span class="new-indicator pulsate"></span>
                            </a>
                            <div class="navbar-dropdown is-boxed is-right">
                                <div class="heading">
                                    <div class="heading-left">
                                        <h6 class="heading-title">اعلان ها</h6>
                                    </div>
                                    <div class="heading-right">
                                        <a class="notification-link" href="#">مشاهده همه</a>
                                    </div>
                                </div>
                                <div class="inner has-slimscroll">

                                    <ul class="notification-list">
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt=""
                                                        src="https://via.placeholder.com/150x150"
                                                        data-demo-src="{{asset('assets/img/avatars/photos/7.jpg')}}" />
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">آلیس</span> دیدگاهی گذاشت.
                                                    </p>
                                                    <p class="time">1 ساعت پیش</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt=""
                                                        src="https://via.placeholder.com/150x150"
                                                        data-demo-src="{{asset('assets/img/avatars/photos/12.jpg')}}" />
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">پاشا</span> فایلی را آپلود
                                                        کرد</p>
                                                    <p class="time">2 ساعت پیش</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt=""
                                                        src="https://via.placeholder.com/150x150"
                                                        data-demo-src="{{asset('assets/img/avatars/photos/13.jpg')}}" />
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">رویا</span> به شما پیغامی
                                                        فرستاد.</p>
                                                    <p class="time">2 ساعت پیش</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt=""
                                                        src="https://via.placeholder.com/150x150"
                                                        data-demo-src="{{asset('assets/img/avatars/photos/25.jpg')}}" />
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">سارا</span> دیدگاهی گذاشت.
                                                    </p>
                                                    <p class="time">3 ساعت پیش</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown is-right is-spaced dropdown-trigger user-dropdown">
                            <div class="is-trigger" aria-haspopup="true">
                                <div class="profile-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/8.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-head">
                                        <div class="h-avatar is-large">
                                            <img class="avatar" src="https://via.placeholder.com/150x150"
                                                data-demo-src="{{asset('assets/img/avatars/photos/8.jpg')}}" alt="">
                                        </div>
                                        <div class="meta">
                                            <span>اریک کالسکی</span>
                                            <span>مدیر محصولات</span>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-user-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>پروفایل</span>
                                            <span>پروفایل خود را مشاهده کنید</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item is-media layout-switcher">
                                        <div class="icon">
                                            <i class="lnil lnil-layout"></i>
                                        </div>
                                        <div class="meta">
                                            <span>طرح بندی</span>
                                            <span>تغییر به admin/webapp</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-briefcase"></i>
                                        </div>
                                        <div class="meta">
                                            <span>پروژه ها</span>
                                            <span>همه پروژه های من</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-users-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>تیم</span>
                                            <span>تیم های خود را مدریت کنید</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-cog"></i>
                                        </div>
                                        <div class="meta">
                                            <span>تنظیمات</span>
                                            <span>تنظیمات حساب کاربری</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item is-button">
                                        <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                                <i data-feather="log-out"></i>
                                            </span>
                                            <span>خروج</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <!--Mobile sidebar-->
        <div class="mobile-main-sidebar">
            <div class="inner">
                <ul class="icon-side-menu">
                    <li>
                        <a href="admin-dashboards-personal-1.html" id="home-sidebar-menu-mobile">
                            <i data-feather="activity"></i>
                        </a>
                    </li>
                    <li>
                        <a href="admin-grid-users-1.html" id="layouts-sidebar-menu-mobile">
                            <i data-feather="grid"></i>
                        </a>
                    </li>
                    <li>
                        <a href="elements-hub.html" id="elements-sidebar-menu-mobile">
                            <i data-feather="box"></i>
                        </a>
                    </li>
                    <li>
                        <a href="components-hub.html" id="components-sidebar-menu-mobile">
                            <i data-feather="cpu"></i>
                        </a>
                    </li>
                    <li>
                        <a href="messaging-chat.html" id="open-messages-mobile">
                            <i data-feather="message-circle"></i>
                        </a>
                    </li>
                </ul>

                <ul class="bottom-icon-side-menu">
                    <li>
                        <a href="javascript:" class="right-panel-trigger" data-panel="search-panel">
                            <i data-feather="search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Circular menu-->
        <div id="circular-menu" class="circular-menu">

            <a class="floating-btn" onclick="document.getElementById('circular-menu').classList.toggle('active');">
                <i aria-hidden="true" class="fas fa-bars"></i>
                <i aria-hidden="true" class="fas fa-times"></i>
            </a>

            <div class="items-wrapper">
                <div class="menu-item is-flex">
                    <label class="dark-mode">
                        <input type="checkbox" checked>
                        <span></span>
                    </label>
                </div>
                <a class="menu-item is-flex right-panel-trigger" data-panel="languages-panel">
                    <img src="{{asset('assets/img/icons/flags/united-states-of-america.svg')}}" alt="">
                </a>
                <a class="menu-item is-flex">
                    <i data-feather="bell"></i>
                </a>
                <a class="menu-item is-flex">
                    <i data-feather="grid"></i>
                </a>
            </div>

        </div>
        <!--Sidebar float-->
        <div class="main-sidebar is-float">
            <div class="sidebar-brand">
                <a href="index-2.html">
                    <img class="light-image" src="{{asset('assets/img/logos/logo/logo.svg')}}" alt="">
                    <img class="dark-image" src="{{asset('assets/img/logos/logo/logo-light.svg')}}" alt="">
                </a>
            </div>
            <div class="sidebar-inner">

                <div class="naver"></div>

                <ul class="icon-menu">
                    <!-- Activity -->
                    <li>
                        <a href="admin-dashboards-personal-1.html" id="home-sidebar-menu" data-content="Dashboards">
                            <i class="sidebar-svg" data-feather="activity"></i>
                        </a>
                    </li> <!-- Layouts -->
                    <li>
                        <a href="admin-grid-users-1.html" id="layouts-sidebar-menu" data-content="Layouts">
                            <i class="sidebar-svg" data-feather="grid"></i>
                        </a>
                    </li> <!-- Bounties -->
                    <li>
                        <a href="elements-hub.html" id="elements-sidebar-menu" data-content="Elements">
                            <i class="sidebar-svg" data-feather="box"></i>
                        </a>
                    </li> <!-- Bugs -->
                    <li>
                        <a href="components-hub.html" id="components-sidebar-menu" data-content="Components">
                            <i class="sidebar-svg" data-feather="cpu"></i>
                        </a>
                    </li> <!-- Messaging -->
                    <li id="messages-menu">
                        <a href="admin-messaging-chat.html" id="open-messages" data-content="Messaging">
                            <i class="sidebar-svg" data-feather="message-circle"></i>
                        </a>
                    </li>
                </ul>

                <!-- User account -->
                <ul class="bottom-menu">
                    <!-- Notifications -->
                    <li class="right-panel-trigger" data-panel="search-panel">
                        <a href="javascript:void(0);" id="open-search" data-content="Search"><i class="sidebar-svg"
                                data-feather="search"></i></a>
                        <a href="javascript:void(0);" id="close-search" class="is-hidden is-inactive"><i
                                class="sidebar-svg" data-feather="x"></i></a>
                    </li> <!-- Wallet -->
                    <li>
                        <a href="admin-profile-settings.html" id="open-settings" data-content="Settings">
                            <i class="sidebar-svg" data-feather="settings"></i>
                        </a>
                    </li> <!-- Profile -->
                    <li id="user-menu">
                        <div id="profile-menu" class="dropdown profile-dropdown dropdown-trigger is-spaced is-up">
                            <img src="https://via.placeholder.com/150x150"
                                data-demo-src="{{asset('assets/img/avatars/photos/8.jpg')}}" alt="">
                            <span class="status-indicator"></span>

                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-head">
                                        <div class="h-avatar is-large">
                                            <img class="avatar" src="https://via.placeholder.com/150x150"
                                                data-demo-src="{{asset('assets/img/avatars/photos/8.jpg')}}" alt="">
                                        </div>
                                        <div class="meta">
                                            <span>اریک کالسکی</span>
                                            <span>Product Manager</span>
                                        </div>
                                    </div>
                                    <a href="admin-profile-view.html" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-user-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>پروفایل</span>
                                            <span>View your profile</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item is-media layout-switcher">
                                        <div class="icon">
                                            <i class="lnil lnil-layout"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Layout</span>
                                            <span>Switch to admin/webapp</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-briefcase"></i>
                                        </div>
                                        <div class="meta">
                                            <span>پروژه ها</span>
                                            <span>All my projects</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-users-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Team</span>
                                            <span>Manage your team</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-cog"></i>
                                        </div>
                                        <div class="meta">
                                            <span>تنظیمات</span>
                                            <span>Account settings</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item is-button">
                                        <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                                <i data-feather="log-out"></i>
                                            </span>
                                            <span>Logout</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
        <!--Languages panel-->
        <div id="languages-panel" class="right-panel-wrapper is-languages">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <h3>انتخاب زبان</h3>
                    <a class="close-panel">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
                <div class="right-panel-body has-slimscroll">
                    <div class="languages-boxes">
                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection" checked>
                                <div class="language-option-inner">
                                    <img src="{{asset('assets/img/icons/flags/united-states-of-america.svg')}}" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="{{asset('assets/img/icons/flags/france.svg')}}" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="{{asset('assets/img/icons/flags/spain.svg')}}" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="{{asset('assets/img/icons/flags/germany.svg')}}" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="{{asset('assets/img/icons/flags/mexico.svg')}}" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="{{asset('assets/img/icons/flags/china.svg')}}" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="img-wrap has-text-centered">
                        <img class="light-image" src="{{asset('assets/img/illustrations/right-panel/languages.svg')}}"
                            alt="">
                        <img class="dark-image"
                            src="{{asset('assets/img/illustrations/right-panel/languages-dark.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--Activity panel-->
        <div id="activity-panel" class="right-panel-wrapper is-activity">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <h3>فعالیت ها</h3>
                    <a class="close-panel">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
                <div class="tabs-wrapper is-triple-slider is-squared">
                    <div class="tabs-inner">
                        <div class="tabs">
                            <ul>
                                <li data-tab="team-side-tab" class="is-active"><a><span>تیم</span></a></li>
                                <li data-tab="projects-side-tab"><a><span>پروژه ها</span></a></li>
                                <li data-tab="schedule-side-tab"><a><span>برنامه ها</span></a></li>
                                <li class="tab-naver"></li>
                            </ul>
                        </div>
                    </div>

                    <div class="right-panel-body">
                        <div id="team-side-tab" class="tab-content is-active">
                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/12.jpg')}}" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/icons/flags/united-states-of-america.svg')}}"
                                        alt="">
                                </div>
                                <div class="meta">
                                    <span>پاشا</span>
                                    <span>
                                        <i data-feather="map-pin"></i>
                                        ایران , تهران
                                    </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/25.jpg')}}" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/icons/flags/united-states-of-america.svg')}}"
                                        alt="">
                                </div>
                                <div class="meta">
                                    <span>سارا</span>
                                    <span>
                                        <i data-feather="map-pin"></i>
                                        لاس وگاس
                                    </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/18.jpg')}}" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/icons/flags/united-states-of-america.svg')}}"
                                        alt="">
                                </div>
                                <div class="meta">
                                    <span>Esteban C.</span>
                                    <span>
                                        <i data-feather="map-pin"></i>
                                        Miami, FL
                                    </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/13.jpg')}}" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/icons/flags/united-states-of-america.svg')}}"
                                        alt="">
                                </div>
                                <div class="meta">
                                    <span>رویا</span>
                                    <span>
                                        <i data-feather="map-pin"></i>
                                        نیویورک
                                    </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </div>
                        </div>

                        <div id="projects-side-tab" class="tab-content">
                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/icons/logos/slicer.svg')}}" alt="">
                                    <div class="meta">
                                        <span>پروژه اسلایسر</span>
                                        <span>vahid.xyz</span>
                                    </div>
                                    <a class="link">
                                        <i data-feather="arrow-left"></i>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="31" max="100">31%</progress>
                                    <div class="foot-stats">
                                        <span>5 / 24</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150"
                                                    data-demo-src="{{asset('assets/img/avatars/photos/7.jpg')}}" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150"
                                                    data-demo-src="{{asset('assets/img/avatars/photos/5.jpg')}}" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150"
                                                    data-demo-src="{{asset('assets/img/avatars/photos/8.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/icons/logos/metamovies.svg')}}" alt="">
                                    <div class="meta">
                                        <span>بازسازی فیلم های متا</span>
                                        <span>metamovies.co</span>
                                    </div>
                                    <a class="link">
                                        <i data-feather="arrow-left"></i>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="84" max="100">84%</progress>
                                    <div class="foot-stats">
                                        <span>28 / 31</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150"
                                                    data-demo-src="{{asset('assets/img/avatars/photos/13.jpg')}}"
                                                    alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150"
                                                    data-demo-src="{{asset('assets/img/avatars/photos/18.jpg')}}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/icons/logos/fastpizza.svg')}}" alt="">
                                    <div class="meta">
                                        <span> طراحی مجدد پیتزای سریع</span>
                                        <span>fastpizza.com</span>
                                    </div>
                                    <a class="link">
                                        <i data-feather="arrow-left"></i>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="60" max="100">60%</progress>
                                    <div class="foot-stats">
                                        <span>25 / 39</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150"
                                                    data-demo-src="{{asset('assets/img/avatars/photos/7.jpg')}}" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150"
                                                    data-demo-src="{{asset('assets/img/avatars/photos/25.jpg')}}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="schedule-side-tab" class="tab-content">
                            <!--Timeline-->
                            <div class="icon-timeline">
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>تماس با دنی</p>
                                        <span>امروز - 11:30am</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <img class="avatar" src="https://via.placeholder.com/150x150"
                                            data-demo-src="{{asset('assets/img/avatars/photos/7.jpg')}}" alt="">
                                    </div>
                                    <div class="timeline-content">
                                        <p>جلسه با آلیس</p>
                                        <span>امروز - 01:00pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="message-circle"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>جواب دادن به پیغام علی</p>
                                        <span>امروز - 01:45pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="mail"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>ارسال کمپین جدید</p>
                                        <span>امروز - 02:30pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="smile"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>بررسی پروژه</p>
                                        <span>امروز - 03:30pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>تماس با بهراد</p>
                                        <span>امروز - 05:00pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="feather"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>نوشتن طرح برای دن</p>
                                        <span>امروز - 06:00pm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
        <!--Search panel-->
        <div id="search-panel" class="right-panel-wrapper is-search is-left">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <img class="light-image" src="{{asset('assets/img/logos/logo/logo.svg')}}" alt="" />
                    <img class="dark-image" src="{{asset('assets/img/logos/logo/logo-light.svg')}}" alt="" />
                    <a class="close-panel">
                        <i data-feather="chevron-left"></i>
                    </a>
                </div>
                <div class="right-panel-body has-slimscroll">
                    <div class="field">
                        <div class="control has-icon">
                            <input type="text" class="input is-rounded search-input" placeholder="Search...">
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                            <div class="search-results has-slimscroll"></div>
                        </div>
                    </div>

                    <div class="recent">
                        <h4>اخیرا دیده اید</h4>
                        <div class="recent-block">
                            <a class="media-flex-center">
                                <div class="h-icon is-info is-rounded is-small">
                                    <i data-feather="chrome"></i>
                                </div>
                                <div class="flex-meta">
                                    <span>پشتیبانی مرورگر</span>
                                    <span>Blog post</span>
                                </div>
                            </a>
                            <a class="media-flex-center">
                                <div class="h-icon is-orange is-rounded is-small">
                                    <i data-feather="tv"></i>
                                </div>
                                <div class="flex-meta">
                                    <span>API توییچ</span>
                                    <span>Blog post</span>
                                </div>
                            </a>
                            <a class="media-flex-center">
                                <div class="h-icon is-green is-rounded is-small">
                                    <i data-feather="twitter"></i>
                                </div>
                                <div class="flex-meta">
                                    <span>احراز هویت توییچ</span>
                                    <span>Blog post</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="recent">
                        <h4>کاربرانی که اخیرا اضافه شده اند</h4>
                        <div class="recent-block">
                            <a class="media-flex-center">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/7.jpg')}}" alt=""
                                        data-user-popover="0">
                                </div>
                                <div class="flex-meta">
                                    <span>آلیس</span>
                                    <span>مهندس نرم افزار</span>
                                </div>
                            </a>
                            <a class="media-flex-center">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/13.jpg')}}" alt=""
                                        data-user-popover="6">
                                </div>
                                <div class="flex-meta">
                                    <span>رویا</span>
                                    <span>طراح UI/UX</span>
                                </div>
                            </a>
                            <a class="media-flex-center">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{asset('assets/img/avatars/photos/22.jpg')}}" alt=""
                                        data-user-popover="5">
                                </div>
                                <div class="flex-meta">
                                    <span>Jimmy H.</span>
                                    <span>مدیر پروژه ها</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Page body-->

        <div id="layouts-sidebar" class="sidebar-panel is-generic">
            <div class="subpanel-header">

                <div class="dropdown project-dropdown dropdown-trigger is-spaced">
                    <div class="h-avatar is-small">
                        <span class="avatar is-fake is-h-green">
                            <span>H</span>
                        </span>
                    </div>
                    <span class="status-indicator"></span>

                    <div class="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-warning">
                                        <span>D</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Delivery App Project</span>
                                    <span>Food For Good</span>
                                </div>
                            </div>
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-h-green">
                                        <span>H</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Health and Fitness Dashboard</span>
                                    <span>Fit'n'Dance</span>
                                </div>
                            </div>
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-info">
                                        <span>L</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Learning Tracker Dashboard</span>
                                    <span>Fit'n'Dance</span>
                                </div>
                            </div>
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-h-purple">
                                        <span>B</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Banking and Finance Dashboard</span>
                                    <span>H Bank</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="no-mb">طرح ها</h3>
                <div class="panel-close">
                    <i data-feather="x"></i>
                </div>
            </div>
            <div class="inner" data-simplebar>
                <ul>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">لیست ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-view-1.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-2.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-3.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-4.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">فلکس لیست ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-1.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>فلکس لیست V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-2.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>فلکس لیست V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-3.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>فلکس لیست V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">جدول داده ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-1.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-2.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-3.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-4.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">لودینگ ها<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-placeload-1.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-2.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-3.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-4.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">کارت ها<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-1.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-4.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">کاشی ها<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-1.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>کاشی V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-2.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>کاشی V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-3.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>کاشی V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">کاربران <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-1.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-2.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-3.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-4.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">شخصی <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-profile-view.html">
                                    <i class="lnil lnil-user-alt"></i>
                                    <span>پروفایل</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-edit-1.html">
                                    <i class="lnil lnil-pencil"></i>
                                    <span>ویرایش پروفایل</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-notifications.html">
                                    <i class="lnil lnil-notification"></i>
                                    <span>اعلان ها</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-settings.html">
                                    <i class="lnil lnil-cog"></i>
                                    <span>تنظیمات</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">صفحات<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="auth-login-1.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>ورود v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-login-2.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>ورود v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-login-3.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>ورود v3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-2.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>ثبت نام v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-3.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>ثبت نام v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-1.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>روند ثبت نام</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-search-results.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>نتایج جست و جو</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-search-empty.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>جست و جو بدون نتیجه</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">زیر صفحات <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-saas-billing.html">
                                    <i class="lnil lnil-credit-card"></i>
                                    <span>صورتحساب</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-welcome.html">
                                    <i class="lnil lnil-door-alt"></i>
                                    <span>خوش آمدگویی</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-action-page-1.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>صفحه اقدام V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-action-page-2.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>صفحه اقدام V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">پروژه ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>پروژه ها V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>پروژه ها V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>پروژه ها V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-project.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>جزئیات پروژه</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-kanban-board.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Kanban Board</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">ابزارهای کاربردی <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-utility-account-confirm.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>تایید حساب کاربری</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-promotion.html">
                                    <i class="lnil lnil-magnet"></i>
                                    <span>صفحه تبلیغات</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-invoice.html">
                                    <i class="lnil lnil-calculator-alt"></i>
                                    <span>فاکتور</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-status.html">
                                    <i class="lnil lnil-checkmark-circle"></i>
                                    <span>وضعیت برنامه</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">معرفی ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-1.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>معرفی V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-2.html">
                                    <i class="lnil lnil-train-alt"></i>
                                    <span>معرفی V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-3.html">
                                    <i class="lnil lnil-car"></i>
                                    <span>معرفی V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-4.html">
                                    <i class="lnil lnil-car-alt"></i>
                                    <span>معرفی V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-5.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>معرفی V5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">صفحات خطا <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="error-page-1.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-2.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-3.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-4.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-5.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 500 V1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobile-subsidebar">
            <div class="inner">
                <div class="sidebar-title">
                    <h3>Layouts</h3>
                </div>

                <ul class="submenu">
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">لیست ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-view-1.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-2.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-3.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-view-4.html">
                                    <i class="lnil lnil-list-alt"></i>
                                    <span>لیست ویو V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">فلکس لیست ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-1.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>فلکس لیست V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-2.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>فلکس لیست V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-flex-3.html">
                                    <i class="lnil lnil-list-alt-1"></i>
                                    <span>فلکس لیست V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">جدول داده ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-1.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-2.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-3.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-list-datatable-4.html">
                                    <i class="lnil lnil-layout-alt"></i>
                                    <span>جدول داده V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">لودینگ ها<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-placeload-1.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-2.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-3.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-placeload-4.html">
                                    <i class="lnil lnil-reload"></i>
                                    <span>لودینگ V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">کارت ها<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-1.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-cards-4.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>گرید کارت V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">کاشی ها<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-1.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>کاشی V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-2.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>کاشی V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-tiles-3.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>کاشی V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">کاربران <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-1.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-2.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-3.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-grid-users-4.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>کاربران V4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">شخصی <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-profile-view.html">
                                    <i class="lnil lnil-user-alt"></i>
                                    <span>پروفایل</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-edit-1.html">
                                    <i class="lnil lnil-pencil"></i>
                                    <span>ویرایش پروفایل</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-notifications.html">
                                    <i class="lnil lnil-notification"></i>
                                    <span>اعلان ها</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-profile-settings.html">
                                    <i class="lnil lnil-cog"></i>
                                    <span>تنظیمات</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">صفحات<i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="auth-login-1.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>ورود v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-login-2.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>ورود v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-login-3.html">
                                    <i class="lnil lnil-pointer-right"></i>
                                    <span>ورود v3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-2.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>ثبت نام v1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-3.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>ثبت نام v2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="auth-signup-1.html">
                                    <i class="lnil lnil-crown"></i>
                                    <span>روند ثبت نام</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-search-results.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>نتایج جست و جو</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-search-empty.html">
                                    <i class="lnil lnil-search-alt"></i>
                                    <span>جست و جو بدون نتیجه</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">زیر صفحات <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-saas-billing.html">
                                    <i class="lnil lnil-credit-card"></i>
                                    <span>صورتحساب</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-welcome.html">
                                    <i class="lnil lnil-door-alt"></i>
                                    <span>خوش آمدگویی</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-action-page-1.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>صفحه اقدام V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-action-page-2.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>صفحه اقدام V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">پروژه ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>پروژه ها V1</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects-2.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>پروژه ها V2</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-projects-3.html">
                                    <i class="lnil lnil-grid-alt"></i>
                                    <span>پروژه ها V3</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-projects-project.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>جزئیات پروژه</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-kanban-board.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Kanban Board</span>
                                    <i class="is-auto" data-feather="map-pin"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">ابزارهای کاربردی <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-utility-account-confirm.html">
                                    <i class="lnil lnil-thunderbolt"></i>
                                    <span>تایید حساب کاربری</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-promotion.html">
                                    <i class="lnil lnil-magnet"></i>
                                    <span>صفحه تبلیغات</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-invoice.html">
                                    <i class="lnil lnil-calculator-alt"></i>
                                    <span>فاکتور</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-utility-status.html">
                                    <i class="lnil lnil-checkmark-circle"></i>
                                    <span>وضعیت برنامه</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">معرفی ها <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-1.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>معرفی V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-2.html">
                                    <i class="lnil lnil-train-alt"></i>
                                    <span>معرفی V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-3.html">
                                    <i class="lnil lnil-car"></i>
                                    <span>معرفی V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-4.html">
                                    <i class="lnil lnil-car-alt"></i>
                                    <span>معرفی V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-onboarding-page-5.html">
                                    <i class="lnil lnil-train"></i>
                                    <span>معرفی V5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">صفحات خطا <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="error-page-1.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-2.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-3.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-4.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 404 V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="error-page-5.html">
                                    <i class="lnil lnil-cross-circle"></i>
                                    <span>خطای 500 V1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- Content Wrapper -->
        <div class="view-wrapper" data-naver-offset="214" data-menu-item="#layouts-sidebar-menu"
            data-mobile-item="#home-sidebar-menu-mobile">

            <div class="page-content-wrapper">
                <div class="page-content is-relative">

                    <div class="page-title has-text-centered">
                        <!-- Sidebar Trigger -->
                        <div class="huro-hamburger nav-trigger push-resize" data-sidebar="layouts-sidebar">
                            <span class="menu-toggle has-chevron">
                                <span class="icon-box-toggle">
                                    <span class="rotate">
                                        <i class="icon-line-top"></i>
                                        <i class="icon-line-center"></i>
                                        <i class="icon-line-bottom"></i>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="title-wrap">
                            <h1 class="title is-4">قالب خالی</h1>
                        </div>

                        <div class="toolbar ml-auto">

                            <div class="toolbar-link">
                                <label class="dark-mode ml-auto">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>
                            </div>

                            <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                                <img src="{{asset('assets/img/icons/flags/united-states-of-america.svg')}}" alt="">
                            </a>

                            <div class="toolbar-notifications is-hidden-mobile">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="bell"></i>
                                        <span class="new-indicator pulsate"></span>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <div class="heading">
                                                <div class="heading-left">
                                                    <h6 class="heading-title">اعلان ها</h6>
                                                </div>
                                                <div class="heading-right">
                                                    <a class="notification-link"
                                                        href="admin-profile-notifications.html">مشاهده همه</a>
                                                </div>
                                            </div>
                                            <ul class="notification-list">
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="{{asset('assets/img/avatars/photos/7.jpg')}}" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">آلیس</span> دیدگاهی
                                                                گذاشت.</p>
                                                            <p class="time">1 ساعت پیش</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="{{asset('assets/img/avatars/photos/12.jpg')}}" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">پاشا</span> فایلی را
                                                                آپلود کرد.</p>
                                                            <p class="time">2 ساعت پیش</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="{{asset('assets/img/avatars/photos/13.jpg')}}" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">رویا</span> به شما
                                                                پیفامی فرستاد.</p>
                                                            <p class="time">2 ساعت پیش</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="{{asset('assets/img/avatars/photos/25.jpg')}}" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">سارا</span> دیدگاهی
                                                                گذاشت.</p>
                                                            <p class="time">3 ساعت پیش</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
                                <i data-feather="grid"></i>
                            </a>
                        </div>
                    </div>

                    <div class="page-content-inner">
                        <!--Page content goes here-->
                    </div>

                </div>
            </div>

        </div>

        <!--Huro Scripts-->
        <!--Load Mapbox-->

        <!-- Concatenated plugins -->
        <script src="{{asset('assets/js/app.js')}}"></script>

        <!-- Huro js -->
        <script src="{{asset('assets/js/functions.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}" async></script>
        <script src="{{asset('assets/js/components.js')}}" async></script>
        <script src="{{asset('assets/js/popover.js')}}" async></script>
        <script src="{{asset('assets/js/widgets.js')}}" async></script>


        <!-- Additional Features -->
        <script src="{{asset('assets/js/touch.js')}}" async></script>

        <!-- Landing page js -->

        <!-- Dashboards js -->

















        <!-- Charts js -->



        <!--Forms-->

        <!--Wizard-->

        <!-- Layouts js -->











        <script src="{{asset('assets')}}/js/syntax.js" async></script>
    </div>
</body>


<!-- Mirrored from huro.cssninja.io/admin-blank-page-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Sep 2021 05:34:33 GMT -->

<!-- Mirrored from temdemo.ir/huro/admin-blank-page-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 10:11:13 GMT -->

</html>