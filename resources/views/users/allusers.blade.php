@extends('layouts.app')

@section('content')

<!-- Content Wrapper -->
<div id="grid-users" class="view-wrapper" data-naver-offset="214" data-menu-item="#layouts-sidebar-menu"
    data-mobile-item="#home-sidebar-menu-mobile">

    <div class="page-content-wrapper">
        <div class="page-content is-relative">

            <div class="user-grid-toolbar">
                <div class="control has-icon">
                    <input class="input custom-text-filter" placeholder="جستجو..." data-filter-target=".column">
                    <div class="form-icon">
                        <i data-feather="search"></i>
                    </div>
                </div>

                <div class="buttons">
                    <div class="field h-hidden-mobile">
                        <div class="control">
                            <div class="h-select">
                                <div class="select-box">
                                    <span>فیلتر</span>
                                </div>
                                <div class="select-icon">
                                    <i data-feather="chevron-down"></i>
                                </div>
                                <div class="select-drop has-slimscroll-sm">
                                    <div class="drop-inner">
                                        <div class="option-row">
                                            <input type="radio" name="grid_filter">
                                            <div class="option-meta">
                                                <span>طراح UI/UX</span>
                                            </div>
                                        </div>
                                        <div class="option-row">
                                            <input type="radio" name="grid_filter">
                                            <div class="option-meta">
                                                <span>توسعه دهنده وب</span>
                                            </div>
                                        </div>
                                        <div class="option-row">
                                            <input type="radio" name="grid_filter">
                                            <div class="option-meta">
                                                <span>مهندس کامپیوتر</span>
                                            </div>
                                        </div>
                                        <div class="option-row">
                                            <input type="radio" name="grid_filter">
                                            <div class="option-meta">
                                                <span>تجارت</span>
                                            </div>
                                        </div>
                                        <div class="option-row">
                                            <input type="radio" name="grid_filter">
                                            <div class="option-meta">
                                                <span>مدیر محصولات</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="button h-button is-primary is-raised">
                        <span class="icon">
                            <i aria-hidden="true" class="fas fa-plus"></i>
                        </span>
                        <span>اضافه کردن کاربر</span>
                    </button>
                </div>
            </div>

            <div class="page-content-inner">

                <div class="user-grid user-grid-v4">

                    <!--List Empty Search Placeholder -->
                    <div class="page-placeholder custom-text-filter-placeholder is-hidden">
                        <div class="placeholder-content">
                            <img class="light-image" src="assets/img/illustrations/placeholders/search-5.svg" alt="" />
                            <img class="dark-image" src="assets/img/illustrations/placeholders/search-5-dark.svg"
                                alt="" />
                            <h3>چیزی پیدا نشد!</h3>
                            <p class="is-larger">خیلی بد شد. ما نتوانستیم برای چیزی که شما جستجو کردید نتیجه ای پیدا
                                کنیم ، شیوه جستجوی خود را تغییر دهید. </p>
                        </div>
                    </div>

                    <div class="columns is-multiline">

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/13.jpg" alt="" data-user-popover="6">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/illustrator.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>ترا اسوینسون</h3>
                                <p data-filter-match>طراح UI/UX</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-primary is-raised">اضافه کردن به پروژه</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/37.jpg" alt="" data-user-popover="31">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/flags/france.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>هلمز فری</h3>
                                <p data-filter-match>مدیر محصولات</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/25.jpg" alt="" data-user-popover="4">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/js.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>مانلی والاس</h3>
                                <p data-filter-match>توسعه دهنده وب</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/29.jpg" alt="" data-user-popover="25">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/python.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>حکیم کلام</h3>
                                <p data-filter-match>مهندس کامپیوتر</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/39.jpg" alt="" data-user-popover="33">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/python.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>الکساندر باداز</h3>
                                <p data-filter-match>تحلیلگر کسب و کار</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/40.jpg" alt="" data-user-popover="11">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/android.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>جین مارش</h3>
                                <p data-filter-match>توسعه دهنده موبایل</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/19.jpg" alt="" data-user-popover="17">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/flags/germany.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>گرت کراپ</h3>
                                <p data-filter-match>مدیر فروش</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-primary is-raised">اضافه کردن به پروژه</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/9.jpg" alt="" data-user-popover="1">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/photoshop.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>آنا بیکر</h3>
                                <p data-filter-match>طراح UI/UX</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/5.jpg" alt="" data-user-popover="9">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>ماری لبوکسی</h3>
                                <p data-filter-match>مدیر پروژه</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-primary is-raised">اضافه کردن به پروژه</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/32.jpg" alt="" data-user-popover="28">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>جاناتان کراگر</h3>
                                <p data-filter-match>مدیر محصولات</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-primary is-raised">اضافه کردن به پروژه</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/36.jpg" alt="" data-user-popover="30">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/reactjs.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>بینوت لیب لنس</h3>
                                <p data-filter-match>مهندس کامپیوتر</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/38.jpg" alt="" data-user-popover="32">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/vuejs.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>کریس دالاس</h3>
                                <p data-filter-match>توسعه دهنده وب</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/26.jpg" alt="" data-user-popover="23">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/html5.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>کاترینlson</h3>
                                <p data-filter-match>توسعه دهنده وب</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/16.jpg" alt="" data-user-popover="16">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>جیسون گرنک</h3>
                                <p data-filter-match>تحلیلگر کسب و کار</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/23.jpg" alt="" data-user-popover="21">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>ایرنا وایر</h3>
                                <p data-filter-match>مدیر پروژه</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/28.jpg" alt="" data-user-popover="24">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/angular.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>ادوارد فلونت</h3>
                                <p data-filter-match>توسعه دهنده وب</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-primary is-raised">اضافه کردن به پروژه</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/7.jpg" alt="" data-user-popover="0">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/stacks/csharp.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>آلیسrasca</h3>
                                <p data-filter-match>مهندس کامپیوتر</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Grid item-->
                        <div class="column is-3">
                            <div class="grid-item">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-lock"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>دسترسی ها</span>
                                                    <span>ویرایش دسترسی ها</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bubble"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>پیغام</span>
                                                    <span>ارسال پیغام</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-share"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>به اشتراک گذاری</span>
                                                    <span>به اشتراک گذاری این پروفایل</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-trash-can-alt"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>حذف</span>
                                                    <span>حذف از گرید</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-avatar is-big">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/photos/22.jpg" alt="" data-user-popover="20">
                                    <img class="badge" src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>دیون هیکس</h3>
                                <p data-filter-match>مدیر محصولات</p>
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-dark-outlined">اضافه کردن به تیم</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
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

@endsection