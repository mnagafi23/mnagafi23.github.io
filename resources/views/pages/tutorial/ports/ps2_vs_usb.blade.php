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
                <h3>مقایسه پورت‌های USB و PS/2 برای کیبورد و ماوس</h3>
                <p>
                        از هر دو پورت <a href="">USB</a> و <a href="">PS/2</a> می‌توان برای اتصال کیبورد و ماوس استفاده کرد. کدام یک از این دو پورت برتر است و مزیت‌های یکی نسبت به دیگری کدام است؟ برای پاسخ به این سوال ابتدا باید نحوه <b>عملکرد</b> هر پورت را مورد بررسی قرار دهیم.
                </p>
                <img class="img-responsive" alt="مقایسه پورت‌های USB و PS/2 برای ماوس و کیبورد" style="max-width:350px;" src="/images/md/ports/مقایسه-پورت-usb-ps-2.jpg">
                <h4>نحوه عملکرد کیبورد و ماوس USB و PS/2</h4>
                <p>
                        در وسایل  USB (برای مثال کیبورد) کامپیوتر (<a href="">پردازنده</a>) برای آگاهی نسبت به حالت فعلی (State) کیبورد مجبور است، به کیبورد پیام بفرستد و حالت فعلی کیبورد را از آن سوال کند. اما وسایل PS/2 <b>همواره</b> به پردازنده پیام می‌فرستند و حالت فعلی خود را برای پردازنده مشخص می‌کنند. این ویژگی PS/2 باعث <b>افزایش سرعت</b> آن نسبت به USB می‌شود.
                </p>
                <h4>مزیت‌های PS/2</h4>
                <ul class="custom-list">
                    <li>همانطور که ذکر شد مقدار تاخیر در پاسخ دهی وسایل PS/2 کمتر است و <b>سرعت عملکرد بیشتری</b> دارند.</li>
                    <li>کیبورد‌های PS/2 از قابلیت <b>فشردن چندین دکمه</b> به طور همزمان پشتیبانی می‌کنند. اما در کیبورد‌های USB این قابلیت وجود ندارد یا محدود است همچنین بدلیل استفاده از کیبورد شبیه‌سازی شده (به صورت نرم‌افزاری) تعداد وسایل متصل به سیستم را <b>محدود</b> می‌کنند.</li>
                    <li>وسایل USB گاهی در <a href="">BIOS</a> شناسایی نمی‌شوند و کامپیوتر تا قبل از بالا آمدن ویندوز این وسایل را شناسایی نمی‌کند.</li>
                </ul>
                <h4>مزیت‌های USB</h4>
                <ul class="custom-list">
                    <li>از مهم‌ترین ویژگی‌های USB می‌توان به ویژگی <a href="">Hot Swappable</a> بودن اشاره کرد که بدین معنی است که می‌توان آن را هنگام روشن بودن سیستم به کامپیوتر متصل کرد و از آن استفاده کرد. اما وسایل PS/2 اگر پس از بالا آمدن ویندوز به سیستم متصل شوند باید سیستم را <b>ریستارت</b> کرد تا بتوان از آن‌ها استفاده کرد.</li>
                    <li>کانکتور ۶ پین PS/2 به شدت آسیب پذیر است و امکان <b>کج شدن و شکستن پین‌ها</b> در آن بسیار زیاد می‌باشد.</li>
                    <li>کیبورد‌ها و ماوس‌های مدرن بدلیل <b>محبوبیت بالای</b> پورت USB از این نوع هستند.</li>
                </ul>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection