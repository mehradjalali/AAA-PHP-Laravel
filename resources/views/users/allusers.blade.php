@extends('layouts.app')

@section('content')
<?php use App\Models\User;?>

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

                    @if($users->count() == 0)
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
                    @endif
                    @foreach ($users as $user)
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
                                        data-demo-src="{{asset('/assets/img/avatars/photos/' . $user->image . '')}}"
                                        alt="" data-user-popover=" 6">
                                </div>
                                <h3 class="dark-inverted" data-filter-match>{{$user->name}}</h3>
                                @foreach ($user->getRole() as $role)
                                <p data-filter-match>{{$role}}</p>
                                @endforeach
                                <div class="button-wrap has-text-centered">
                                    <button class="button h-button is-primary is-raised">اضافه کردن به پروژه</button>
                                    <div>
                                        <a class="dark-inverted-hover">مشاهده پروفایل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>

@endsection