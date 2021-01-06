<!DOCTYPE html>
<html>
<head>
    <title>Practical Example</title>
    <meta charset="utf-8" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/rtl.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/user_layout.css') }}" rel="stylesheet" />
    @yield('custom_css')
</head>
<body>
<!-- Practical Example -->
<div id="topmenu">
    <div class="wrapper">
        <ul id="nav">
            <li><a href="#">صفحه اصلی</a></li>
            <li><a href="#">همکاری با ما</a></li>
            <li><a href="#">تبلیغات</a></li>
            <li><a href="#">تماس با ما</a></li>
            <li><a href="#">درباره ما</a></li>
            @if(Auth::check())
                <div class="dropdown float-left mt-2">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">خروج</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <li class="float-left"><a href="{{ url('/login') }}">ورود</a></li>
                <li class="float-left"><a href="{{ url('/register') }}">ثبت نام</a></li>
            @endif
        </ul>
    </div>
</div>
<div id="header">
    <div class="wrapper">
        <div id="search">
            <h1>مرجع آموزش آنلاین</h1>
            <form>
                <label>دوره مورد نظر خود را جستجو کنید</label><br />
                <input type="search" name="search" />
                <input type="submit" class="button" value="جستجو" />
            </form>
            <br>
        </div>
        {{--<div id="login">--}}
            {{--<form>--}}
                {{--<fieldset>--}}
                    {{--<legend>وارد شوید</legend>--}}
                    {{--<label>نام کاربری</label><input type="text" name="user" /><br />--}}
                    {{--<label>کلمه عبور</label><input type="password" name="pass" /><br />--}}
                    {{--<input type="checkbox" name="remember" /><label>مرا به خاطر بسپار</label><br />--}}
                    {{--<input type="submit" value="ورود" class="button" />--}}
                    {{--<a href="#" class="button">ثبت نام</a>--}}
                {{--</fieldset>--}}
            {{--</form>--}}
        {{--</div>--}}
        <div class="clear"></div>
    </div>
</div>
<div id="main">
    @yield('content')
</div>
<div id="footer">
    <div class="wrapper">
        <div id="sitemap" class="right">
            <h3>نقشه سایت</h3>
            <ul>
                <li><a href="#">صفحه اصلی</a></li>
                <li><a href="#">همکاری با ما</a></li>
                <li><a href="#">تبلیغات</a></li>
                <li><a href="#">درباره ما</a></li>
                <li><a href="#">تماس با ما</a></li>
            </ul>
        </div>
        <div id="newsletter" class="left">
            <h3>عضویت در خبرنامه</h3>
            <form>
                <label>ایمیل خود را وارد کنید</label>
                <input type="email" name="email" /><br />
                <input type="submit" value="عضویت" />
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div id="copyright">
        <p>
            کلیه حقوق مادی و معنوی این سایت متعلق به <b>مرجع آموزش آنلاین</b> است.
        </p>
    </div>
</div>

<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script>
    $('.dropdown-toggle').dropdown()
</script>
</body>
</html>
