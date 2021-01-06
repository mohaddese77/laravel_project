@extends('admin.admin_layout')

@section('content')
    <div class="col col-lg-9 mt-3">
        <div class="d-none d-md-block mx-3">
            <h4 class="color mb-4">همه ی سفارش ها</h4>
            <div id="table" class="pt-0 bg-white border">
                <table class="table table-striped text-center mb-0">
                    <thead>
                    <tr id="header-table-background" class="text-white">
                        <th>#</th>
                        <th>شماره سفارش</th>
                        <th>تاریخ ثبت سفارش</th>
                        <th>زمان تحویل سفارش</th>
                        <th>مبلغ قابل پرداخت</th>
                        <th>مبلغ کل</th>
                        <th>عملیات پرداخت</th>
                        <th>جزییات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr></tr>
                    <tr>
                        <td class="py-5 px-4 border-left"><a href="#" class="table-cell-1-color">۱</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">DKC-66437261</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">۲۵ مرداد ۱۳۹۸</a></td>
                        <td class="py-5 border-left"><a href="#" id="table-cell-4">لغو شده</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۰</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۱۵۰,۰۰۰ تومان</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-71">لغو شده</a></td>
                        <td class="py-5 table-h"><a href="#" class="w-100"><span class="mr-auto table-cell-8"><i class="fas fa-angle-left"></i></span></a></td>
                    </tr>
                    <tr>
                        <td class="py-5 px-4 border-left"><a href="#" class="table-cell-1-color">۲</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">DKC-55259996</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">۶ مرداد ۱۳۹۸</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-4-7 text-success">تحویل شده</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۰</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۵۸,۹۰۰ تومان</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-4-7  text-success ">پرداخت موفق</a></td>
                        <td class="py-5 table-h"><a href="#" class="w-100"><span class="mr-auto table-cell-8"><i class="fas fa-angle-left"></i></span></a></td>
                    </tr>
                    <tr>
                        <td class="py-5 px-4 border-left"><a href="#" class="table-cell-1-color">۳</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">DKC-5489774</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">۱۸ اردیبهشت ۱۳۹۸</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-4-7 text-success">تحویل شده</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۰</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۱۹۹,۰۰۰ تومان</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-4-7 text-success ">پرداخت موفق</a></td>
                        <td class="py-5 table-h"><a href="#" class="w-100"><span class="mr-auto table-cell-8"><i class="fas fa-angle-left"></i></span></a></td>
                    </tr>
                    <tr>
                        <td class="py-5 px-4 border-left"><a href="#" class="table-cell-1-color">۴</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">DKC-45386242</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-2-3">۶ بهمن ۱۳۹۷</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-4-7 text-success">تحویل شده</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۰</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-5-6">۵۸,۰۰۰ تومان</a></td>
                        <td class="py-5 border-left"><a href="#" class="table-cell-4-7  text-success ">پرداخت موفق</a></td>
                        <td class="py-5 table-h"><a href="#" class=w-100><span class="mr-auto table-cell-8"><i class="fas fa-angle-left"></i></span></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-md-none container-fluid mx-1">
            <div class="d-flex justify-content-between mb-3 px-3">
                <h5 class="mobile-header-color">سفارش های من</h5>
                <a href="#" class="mobile-header-color" style="font-size: 18px">بازگشت <i class="fas fa-angle-left" style="font-size: 18px"></i></a>
            </div>
            <div class="bg-white px-5 mt-2 mb-3 pb-2 pt-3 rounded shadow-sm">
                <div class="pt-2">
                    <a href="#" class="d-flex">
                        <p class="border-left p-color pl-2">DKC-66437261</p>
                        <p class="list-text-color pr-3">لغو شده</p>
                        <span class="mr-auto text-secondary"><i class="fas fa-angle-left" style="font-size: 20px"></i></span>
                    </a>
                    <ul class="list-border-top list-unstyled pt-2">
                        <li class="py-2 list-text-color border-bottom">تاریخ ثبت سفارش<span class="float-left">۲۵ مرداد ۱۳۹۸</span></li>
                        <li class="py-2 list-text-color border-bottom">مبلغ قابل پرداخت<span class="float-left">۰</span></li>
                        <li class="py-2 list-text-color ">مبلغ کل<span class="float-left">۱۵۰,۰۰۰ تومان</span></li>
                    </ul>
                </div>
            </div>
            <div class="bg-white px-5 mt-2 mb-3 pb-2 pt-3 rounded shadow-sm">
                <div class="pt-2">
                    <a href="#" class="d-flex">
                        <p class="border-left p-color pl-2">DKC-55259996</p>
                        <p class="text-success pr-3">پرداخت موفق</p>
                        <span class="mr-auto text-secondary"><i class="fas fa-angle-left" style="font-size: 20px"></i></span>
                    </a>
                    <ul class="list-border-top list-unstyled pt-2">
                        <li class="py-2 list-text-color border-bottom">تاریخ ثبت سفارش<span class="float-left">۶ مرداد ۱۳۹۸</span></li>
                        <li class="py-2 list-text-color border-bottom">مبلغ قابل پرداخت<span class="float-left">۰</span></li>
                        <li class="py-2 list-text-color ">مبلغ کل<span class="float-left">۵۸,۹۰۰ تومان</span></li>
                    </ul>
                </div>
            </div>
            <div class="bg-white px-5 mt-2 mb-3 pb-2 pt-3 rounded shadow-sm">
                <div class="pt-2">
                    <a href="#" class="d-flex">
                        <p class="border-left p-color pl-2">DKC-5489774</p>
                        <p class="text-success pr-3">پرداخت موفق</p>
                        <span class="mr-auto text-secondary"><i class="fas fa-angle-left" style="font-size: 20px"></i></span>
                    </a>
                    <ul class="list-border-top list-unstyled pt-2">
                        <li class="py-2 list-text-color border-bottom">تاریخ ثبت سفارش<span class="float-left">۱۸ اردیبهشت ۱۳۹۸</span></li>
                        <li class="py-2 list-text-color border-bottom">مبلغ قابل پرداخت<span class="float-left">۰</span></li>
                        <li class="py-2 list-text-color ">مبلغ کل<span class="float-left">۱۹۹,۰۰۰ تومان</span></li>
                    </ul>
                </div>
            </div>
            <div class="bg-white px-5 mt-2 mb-3 pb-2 pt-3 rounded shadow-sm">
                <div class="pt-2">
                    <a href="#" class="d-flex">
                        <p class="border-left p-color pl-2">DKC-45386242</p>
                        <p class="text-success pr-3">پرداخت موفق</p>
                        <span class="mr-auto text-secondary"><i class="fas fa-angle-left" style="font-size: 20px"></i></span>
                    </a>
                    <ul class="list-border-top list-unstyled pt-2">
                        <li class="py-2 list-text-color border-bottom">تاریخ ثبت سفارش<span class="float-left">۶ بهمن ۱۳۹۷</span></li>
                        <li class="py-2 list-text-color border-bottom">مبلغ قابل پرداخت<span class="float-left">۰</span></li>
                        <li class="py-2 list-text-color ">مبلغ کل<span class="float-left">۵۸,۰۰۰ تومان</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection