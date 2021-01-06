<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{--<meta name='viewport' content='width=device-width, initial-scale=1'>--}}
    <title> کالا به کالا </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/font_awesome_5/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin_home.css') }}">
    <link href="{{ asset('css/rtl.css') }}" rel="stylesheet" />

    @yield('custom_css')
</head>
<body>
<main class="background-c clearfix">
    <div class="row">
        <div class="col-3 d-none d-lg-block mt-3" style="max-width: 300px">
            <div class="row">
                <div class="col">
                    <div class="container-fluid bg-white border shadow-sm mr-3 px-0 pb-0">
                        <div class="w-100">
                            <ul class="list-unstyled px-3">
                                <li class="border-bottom py-2">
                                    <div class="media">
                                        <div>
                                            <img src="{{ asset('images/image3.jpg') }}" class="rounded-circle border border-light">
                                        </div>
                                        <div class="media-body  mr-3">
                                            <h5 class="pt-2">مهدی زاده </h5>
                                            <small style="font-size: 13px">09399604646</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="background-h border-bottom py-2"><a href="#" class="w-100 text-c">فعال سازی کیف پول<span class="float-left text-dark" style="font-size: 40px">&rsaquo;</span>
                                    </a></li>
                                <li class="background-h py-2"><a href="#" class="w-100 text-muted">
                                        <i class="fa">&zwnj;</i>کالا به کالا
                                        <span class="float-left text-dark" style="font-size: 40px; font-weight: 200">&rsaquo;</span>
                                        <span class="float-left text-muted pl-2"><span class="text-dark"> ۰ </span> امتیاز </span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-bg bg-transparent border border-top-0 shadow-sm w-100 btn-group py-0 mr-3 mb-3">
                        <button type="button" class="border-l button-bg btn w-100 text-center px-2"><i class="fa fa-lock px-1 d-block text-center"></i> تغییر رمز عبور</button>
                        <a type="button" class="button-bg btn w-100 text-center px-2 border-right" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out px-1 d-block text-center"></i> خروج از حساب </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border shadow-sm bg-white m-3 w-100">
                        <p class="border-bottom p-3 pr-5 header-listbar-color">حساب کاربری شما</p>
                        <ul class="list-unstyled mx-0 my-3 mt-2 pb-3">
                            <li class="list-h p-3"><a href="#"><i class="fa fa-user ml-2"></i> پروفایل</a></li>
                            <li class="list-h p-3"><a href="{{ route('category') }}"><i class="fa fa-user ml-2"></i>مدیریت دسته بندی</a></li>
                            <li class="active list-h p-3"><a href="#"><i class="fas fa-shopping-basket ml-2"></i> همه ی سفارش های من</a></li>
                            <li class="list-h p-3"><a href="{{ route('admin_product') }}"><i class="fa fa-plus ml-2"></i>مدیریت آگی فروش</a></li>
                            <li class="list-h p-3"><a href="#"><i class="fa fa-minus ml-2"></i>حذف کردن محصول</a></li>
                            <li class="list-h p-3"><a href="#"><i class="fas fa-undo-alt ml-2"></i>در خواست مرجوعی</a></li>
                            <li class="list-h p-3"><a href="#"><i class="fa fa-star-o ml-2"></i>لیست علاقه مندی ها</a></li>
                            <li class="list-h p-3"><a href="#"><i class="fas fa-glasses ml-2"></i>نقد ونظرات </a></li>
                            <li class="list-h p-3"><a href="#"><i class="fas fa-map-marker-alt ml-2"></i>آدرس ها </a></li>
                            <li class="list-h p-3"><a href="#"><i class="	far fa-bell ml-2"></i>اطلاع رسانی ها </a></li>
                            <li class="list-h p-3"><a href="#"><i class="fa fa-envelope-o ml-2"></i> پیغام های من </a></li>
                            <li class="list-h p-3"><a href="#"><i class="fa fa-clock-o ml-2"></i> بازدید های اخیر </a></li>
                            <li class="list-h p-3 pb-0"><a href="#"><i class="material-icons ml-2 mt-1">account_box</i>اطلاعات شخصی </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </div>
</main>


<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
