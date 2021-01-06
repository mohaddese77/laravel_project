@extends('user.user_layout')

@section('content')
    <div class="wrapper">
        <div id="sidebar">
            <h2>دسته بندی</h2>
            <ul id="cats">
                <li>
                    <a href="#">برنامه نویسی</a>
                    <ul>
                        <li><a href="#">PHP و MySQL</a></li>
                        <li><a href="#">C# , C++ , C</a></li>
                        <li><a href="#">Perl , Ruby , Python</a></li>
                        <li>
                            <a href="#">JavaScript</a>
                            <ul>
                                <li><a href="#">jQuery</a></li>
                                <li><a href="#">AngularJS</a></li>
                                <li><a href="#">Node.js</a></li>
                                <li><a href="#">Backbone.js</a></li>
                            </ul>
                        </li>
                        <li><a href="#">MATLAB , Fortran</a></li>
                        <li><a href="#">برنامه نویسی موبایل</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">طراحی</a>
                    <ul>
                        <li>
                            <a href="#">طراحی وب</a>
                            <ul>
                                <li><a href="#">HTML و CSS</a></li>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">SASS و Compass</a></li>
                            </ul>
                        </li>
                        <li><a href="#">طراحی سه بعدی و انیمیشن</a></li>
                        <li><a href="#">طراحی دکوراسیون</a></li>
                        <li><a href="#">طراحی لوگو و بنر</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">درسی و کنکوری</a>
                    <ul>
                        <li><a href="#">دروس دبیرستان</a></li>
                        <li><a href="#">دروس کاردانی</a></li>
                        <li><a href="#">دروس کارشناسی</a></li>
                        <li><a href="#">دروس کارشناسی ارشد</a></li>
                        <li><a href="#">دروس دکتری</a></li>
                        <li><a href="#">دروس کنکوری</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="content">
            <div class="courses">
                <h2>آخرین دوره های آموزشی</h2>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/htmlcss.jpg') }}" width="260" height="150"/>
                        <h3>آموزش طراحی صفحات وب با HTML5 و CSS3</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/bootstrap.jpg') }}" width="260" height="150"/>
                        <h3>آموزش Bootstrap 3</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/matlab.jpg') }}" width="260" height="150"/>
                        <h3>اصول برنامه نویسی در MATLAB (از مبتدی تا پیشرفته)</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/jquery.png') }}" width="260" height="150"/>
                        <h3>آموزش کامل jQuery و jQuery UI</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/phpmysql.jpg') }}" width="260" height="150"/>
                        <h3>آموزش برنامه نویسی با PHP و MySQL</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
            </div>
            <div class="courses">
                <h2>پر طرفدارترین دوره های آموزشی</h2>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/htmlcss.jpg') }}" width="260" height="150"/>
                        <h3>آموزش طراحی صفحات وب با HTML5 و CSS3</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/bootstrap.jpg') }}" width="260" height="150"/>
                        <h3>آموزش Bootstrap 3</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/matlab.jpg') }}" width="260" height="150"/>
                        <h3>اصول برنامه نویسی در MATLAB (از مبتدی تا پیشرفته)</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/jquery.png') }}" width="260" height="150"/>
                        <h3>آموزش کامل jQuery و jQuery UI</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
                <div class="post">
                    <a href="#">
                        <img src="{{ asset('images/phpmysql.jpg') }}" width="260" height="150"/>
                        <h3>آموزش برنامه نویسی با PHP و MySQL</h3>
                        <span class="postlabel right">۳۰:۲۲:۲۲</span>
                        <span class="postlabel left">۳۳ ثبت نام</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@endsection