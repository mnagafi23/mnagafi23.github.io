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
                <h3>پاور (منبع تغذیه)</h3>
                <p>
                    پاور یا منبع تغذیه (Power Supply) وسیله‌ای است که برق متناوب (AC) شهر را به <b>برق مستقیم</b> (DC) با ولتاژهای مختلف تبدیل می‌کند. قسمت‌هایی که در پشت پاور قرار گرفته‌اند و می‌توان از پشت <a href="">کیس</a> مشاهده کرد معمولاً شامل موارد زیر می‌باشد.
                </p>
                <ul class="custom-list">
                    <li>کانکتور برق ورودی برای اتصال به برق شهری</li>
                    <li>فن برای ارسال هوا به بیرون</li>
                    <li>دکمه خاموش و روشن کردن پاور</li>
                </ul>
                <img class="img-responsive" alt="منبع تغذیه یا پاور" style="max-width:350px;" src="/images/md/power_supply/پاور.jpg">
                <h4>انواع کانکتور‌ها و کابل‌های برق</h4>
                <p>
                        از بخش جلوی پاور (قسمت درون کیس) سیم‌هایی با رنگ‌های مختلف خارج می‌شوند و در انتهای آن‌ها کانکتور‌هایی برای برق رسانی به قطعات کامپیوتر وجود دارد. برخی از این کانکتور‌ها عبارت است از:
                </p>
                <ul class="custom-list">
                    <div class="row">
                        <div class="col-sm-6">
                            <li><a href="{{url('/tutorial/power_supply/کانکتور-MOLEX-پاور')}}">کانکتور Molex</a></li>
                            <li><a href="{{url('/tutorial/motherboard/components/SATA-چیست')}}">کانکتور SATA</a></li>
                        </div>
                        <div class="col-sm-6">
                            <li><a href="{{url('/tutorial/motherboard/components/کانکتور-پاور-فرم-atx')}}">کانکتور ۲۰ یا ۲۴ پین</a></li>
                            <li><a href="{{url('/tutorial/motherboard/components/کانکتور-p4-پاور')}}">کانکتور ۴ یا ۸ پین </a></li>
                        </div>
                    </div>
                </ul>
                <h4>رنگ سیم‌های پاور</h4>
                <p>
                        کابل‌های برق رنگ‌های مختلفی دارند که نشان دهنده‌ی <b>ولتاژ</b> دورن کابل است. در جدول زیر رنگ سیم‌ها، ولتاژ‌های مربوطه و کاربرد آن‌ها نمایش داده شده است:
                </p>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>نام کابل</th>
                            <th>رنگ کابل</th>
                            <th>ولتاژ (ولت)</th>
                            <th>موارد استفاده</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12 V</td>
                            <td>زرد</td>
                            <td>۱۲</td>
                            <td><a href="">پردازنده</a>، <a href="">کارت گرافیک</a>، ذخیره‌ساز‌ها و <a href="">فن</a>‌ها</td>
                        </tr>
                        <tr>
                            <td>5 V</td>
                            <td>قرمز</td>
                            <td>۵</td>
                            <td>تقربیاً همه‌ی مدار‌های کامپیوتر</td>
                        </tr>
                        <tr>
                            <td>12-</td>
                            <td>آبی</td>
                            <td>۱۲-</td>
                            <td>مورد استفاده در کامپیوتر‌های قدیمی</td>
                        </tr>
                        <tr>
                            <td>5-</td>
                            <td>سفید</td>
                            <td>۵-</td>
                            <td>مورد استفاده در کامپیوتر‌های قدیمی</td>
                        </tr>
                        <tr>
                            <td>5 VSB</td>
                            <td>بنفش</td>
                            <td>۵</td>
                            <td>در زمان خاموشی سیستم این امکان را می‌دهد که کامپیوتر به صورت نرم‌افزاری روشن شود</td>
                        </tr>
                        <tr>
                            <td>3.3 V</td>
                            <td>نارنجی</td>
                            <td>۳.۳</td>
                            <td><a href="">رم</a>‌ها، ذخیره‌ساز‌های <a href="">SATA</a> و کارت ویدیو‌های <a href="">AGP</a></td>
                        </tr>
                        <tr>
                            <td>Ground (COM)</td>
                            <td>مشکی</td>
                            <td>صفر (زمین)</td>
                            <td>اتصال مدار‌ها به زمین</td>
                        </tr>
                        <tr>
                            <td>PWR_OK</td>
                            <td>خاکستری</td>
                            <td>باید حدود ۵ ولت باشد</td>
                            <td>در صورت عدم صحت جریان خروجی به <a href="">مادربورد</a> برق‌رسانی نمی‌کند</td>
                        </tr>
                        <tr>
                            <td>PS_ON</td>
                            <td>سبز</td>
                            <td>۳.۳</td>
                            <td>روشن و خاموش کردن منبع تغذیه توسط مادربورد</td>
                        </tr>
                        
                    </tbody>
                </table>
                <h4>توان پاور</h4>
                <p>
                        پاور باید توان مورد نیاز قطعات داخلی را تامین نماید، در غیر اینصورت <b>عمر قطعات کاهش</b> می‌یابد و باعث بروز خطا‌‌های اتفاقی می‌شود. پس توان پاور باید برابر یا بیشتر از مجموع توان‌‌های تمام قطعات باشد. امروزه توان پاور‌ها بین <b>۲۵۰ تا ۱۳۰۰</b> وات می‌باشد. 
                </p>
                <p>
                        توان پاور به دو صورت توان بیشینه (peak power) و توان واقعی (real power) بیان می‌شود. توان بیشینه توانی است که پاور می‌تواند برای مدت کوتاهی (حدود یک دقیقه) تامین کند و توان واقعی توانی است که همواره توسط پاور پشتیبانی می‌شود.
                </p>
                <h5>در جدول زیر محدوده بیشینه توان مصرفی برخی قطعات نمایش داده شده است.</h5>
                <table class="table table-bordered table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>نوع قطعه</th>
                            <th>محدوده بیشینه توان مصرفی (وات)</th>
                            <th>ولتاژ کاری (وات)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>پردازنده</td>
                            <td>۸۰ الی ۲۸۰</td>
                            <td>۱۲</td>
                        </tr>
                        <tr>
                            <td>کارت گرافیک</td>
                            <td>۶۵ الی ۳۲۰</td>
                            <td>۱۲</td>
                        </tr>
                        <tr>
                            <td>مادربورد</td>
                            <td>۶۰ الی ۱۵۰</td>
                            <td>۱۲، ۵، ۳.۳</td>
                        </tr>
                        <tr>
                            <td>رم</td>
                            <td>۱۰ الی ۱۲</td>
                            <td>۳.۳</td>
                        </tr>
                        <tr>
                            <td>هارد درایو</td>
                            <td>۲۰ الی ۴۵</td>
                            <td>۱۲، ۵، ۳.۳</td>
                        </tr>
                        <tr>
                            <td>درایو نوری</td>
                            <td>۲۰ الی ۳۰</td>
                            <td>۱۲، ۵، ۳.۳</td>
                        </tr>
                        <tr>
                            <td>فن‌های پردازنده و سیستم</td>
                            <td>۱۰</td>
                            <td>۱۲</td>
                        </tr>
                        <tr>
                            <td>کیبورد و ماوس</td>
                            <td>۳</td>
                            <td>۵</td>
                        </tr>
                        <tr>
                            <td>وسایل USB</td>
                            <td>۵</td>
                            <td>۵</td>
                        </tr>
                    </tbody>
                </table>
                <h4>چطور می‌توان بیشینه توان مصرفی یک قطعه را محاسبه کرد؟</h4>
                <p>
                    برای این کار باید ولتاژ‌های کاری قطعه را با مقدار جریان آن‌ها (برحسب آمپر) ضرب و نتایج را با هم جمع کنید. برای مثال، بیشینه توان یک درایو DVD که با ولتاژ‌های ۵ ولت و ۱ آمپر و ۱۲ ولت و ۱.۵ آمپر کار می‌کند به صورت زیر محاسبه می‌شود.
                </p>
                <h5 class="text-center">(5*1) + (12*1.5) = 23 W</h5>
                <p>
                    <span class="glyphicon glyphicon-alert"></span>پاور‌ها با توان بالاتر، دارای <b>مصرف برق بیشتر</b> و <b>گران‌تر</b> هستند. بنابرین باید از منبع تغذیه (پاور) مناسب سیستم خود استفاده کنید.
                </p>
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('/tutorial/power_supply/پاور-ماژولار')}}">پاور‌های ماژولار</a>
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection