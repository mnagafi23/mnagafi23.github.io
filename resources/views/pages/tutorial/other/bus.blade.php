@extends('layouts.app')

@section('title')
انواع اسلات توسعه و تفاوت آن‌ها
@endsection

@section('description')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('includes.tutorial_side_nav')
            </div>
            
            <div class="col-sm-9 page-content">
                <h3>گذرگاه یا Bus</h3>
                <p>
                        گذرگاه، وظیفه‌ی انتقال داده‌‌ها و دستوالعمل‌ها بین اجزای یک سیستم را بر عهده دارد و شامل تعدادی خطوط سخت‌افزاری (سیم مسی) است که توسط <b>کنترلر گذرگاه</b> مدیریت می‌شود. در کامپیوتر انتقال داده‌ها به <b>سه شکل</b> صورت می‌گیرد:
                </p>
                <ul class="custom-list">
                    <li>بین <a href="">پردازنده</a> و <a href="">حافظه‌ی اصلی</a></li>
                    <li>بین پردازنده و وسایل ورودی/خروجی</li>
                    <li>بین وسایل ورودی/خروجی و حافظه‌ی اصلی</li>
                </ul>
                <img class="img-responsive" alt="گذرگاه‌‌های کامپیوتر" style="max-width:500px;" src="/images/md/other/گذرگاه-های-کامپیوتر.jpg">
                <h4>روش‌های اتصال به گذرگاه</h4>
                <p>
                        تمامی قطعات کامپیوتر می‌بایست به یکی از <b>سه روش</b> زیر  به گذرگاه متصل شوند:
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">از طریق اسلات‌های توسعه (Expansion Slot) :</span> در این روش، هر گذرگاه دارای یک یا چند اتصال دهنده‌ی فیزیکی به نام <a href="">اسلات توسعه</a> است. و کارت‌های توسعه به این اسلات‌ها متصل می‌شوند. هرکارت توسعه برای اتصال به گذرگاه خاصی طراحی شده است. از انواع کارت‌های توسعه می‌توان به <a href="">کارت گرافیک</a> (ویدیو)، <a href="">کارت صدا</a> و <a href="">کارت شبکه</a> اشاره کرد.</li>
                    <p>
                        <span class="glyphicon glyphicon-info-sign"></span>برخی گذرگاه‌ها (مانند <a href="">PCI</a>) می‌توانند چندین قطعه را به سیستم متصل کنند و هر گذرگاه شامل چندین اسلات توسعه می‌باشد و این گذرگاه توسط تمام قطعات متصل، مورد استفاده قرار می‌گیرد و سرعت گذرگاه بین این قطعات <b>تقسیم می‌شود</b>. اما برخی گذرگاه‌ها (مانند <a href="">PCI-E</a>) <b>تنها یک قطعه</b> را با سرعت کامل پشتیبانی می‌کنند.
                    </p>
                    <li><span class="sublist-title">از طریق کانکتور‌ها :</span> در این روش هر قطعه به طور مستقیم یا از طریق کابل به کانکتور متصل می‌شود. تمام <b>قطعات خارج <a href="">کیس</a></b> و برخی قطعات داخل کیس (هارد و درایو نوری) از این طریق برای اتصال به گذرگاه استفاده می‌کنند.</li>
                    <li><span class="sublist-title">از طریق اتصالات داخلی (Internal Connection) :‌</span> در این روش، مدار‌های قطعه هنگام ساخت <b>به صورت مستقیم</b> به گذرگاه سیم‌کشی شده و متصل می‌شوند. این روش در قطعات پیش فرض <a href="">مادربورد</a> (on-board) کاربرد دارد.</li>
                </ul>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection