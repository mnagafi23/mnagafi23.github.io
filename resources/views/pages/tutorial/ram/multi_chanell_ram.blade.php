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
                <h3>فناوری چند کاناله حافظه رم</h3>
                <p>
                        در حالت معمول، کنترلر رم، با تمامی ماژول‌های رم نصب شده بروی <a href="">مادربورد</a> از طریق <b>یک کانال مشترک</b> <a href="">۳۲ یا ۶۴ بیتی</a> (بسته به نوع مادربورد و پردازنده) ارتباط دارد و <a href="">پردازنده</a> هر لحظه می‌تواند به ۶۴ بیت از داده‌ها دسترسی داشته باشد. به این معماری، <b>تک کاناله</b> (single channel) گفته می‌شود.
                </p>
                <p>
                        معماری <b>دو کاناله</b> (dual channel) که اولین بار در <a href="">DDR SDRAM</a> معرفی شد، نوعی فناوری را توصیف می‌کند که در تئوری (در عمل افزایش کارایی کمتر است) قابلیت عبور داده‌‌ها بین رم و کنترلر رم را دو برابر می‌کند. برای مثال اگر دو کانال ۶۴ بیتی به <b>صورت موازی</b> برای ارتباط با ماژول‌های رم مورد استفاده قرار گیرد، یک ارتباط <b>۱۲۸ بیتی</b> بین کنترلر رم و <a href="">رم</a> ایجاد می‌شود.
                </p>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>در مادربورد‌های که از فناوری چند کاناله استفاده می‌شود <a href="">اسلات‌</a>های مربوط به هر کانال، با <b>یک رنگ</b> مشخص می‌شوند.
                </p>
                <img class="img-responsive" alt="فناوری چند کاناله رم‌های کامپیوتر" style="max-width:500px;" src="/images/md/ram/فناوری-چند-کاناله-رم.jpg">
                <p>
                    رم‌هایی که به صورت چند کاناله بروی مادربورد متصل می‌شوند، باید <b>از هر نظر شبیه</b> یکدیگر باشند. برای مثال باید از جهت ظرفیت، سرعت، میزان تاخیر (latency)، تعداد تراشه‌ها و تعداد پهلو (تراشه‌هایی رم در یک طرف نصب شده‌اند یا در دو طرف) یکسان باشند.
                </p>
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span>معماری چند کاناله <b>مربوط به کنترلر</b> موجود در مادربورد می‌باشد و هیچ ارتباطی با نوع رم ‌های متصل شده بروی مادربورد ندارد. حال اینکه برخی تولید کنندگان رم، محصولات خود را با نام دو کانال عرضه می‌کنند،  تنها <b>جنبه‌ی تبلیغاتی</b> دارد و تنها ویژگی که این رم‌ها دارند، <b>یکسان بودن آن‌ها</b> از هر جهت می‌باشد.
                </p>
                <img class="img-responsive" alt="رم ۲ کاناله کامپیوتر" style="max-width:600px;" src="/images/md/ram/رم-۲-کاناله.jpg">
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection