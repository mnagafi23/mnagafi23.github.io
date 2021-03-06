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
                 <h3>کارت صدا</h3>
                 <p>
                        کارت صدا یا audio card یا Sound Card یک کارت توسعه است که امکان <b>پخش و ضبط</b> صدا را  در کامپیوتر فراهم می‌نماید و وسایل جانبی نظیر بلندگو و میکروفن به آن متصل می‌شوند.
                 </p>
                 <img class="img-responsive" alt="کارت-صدا" style="max-width:600px;" src="/images/md/sound/کارت-صدا.jpg">
                 <p>
                        امروزه تقریبا تمامی <a href="">مادربورد‌ها</a> شامل امکانات یک کارت صدای معمولی به صورت <b>on board</b> (بروی برد) هستند. با این وجود کاربران حرفه‌ای متناسب با نیاز خود از کارت‌های صدا برای تقویت کیفیت ضبط و پخش صدا استفاده می‌کنند.
                 </p>
                 <h4>پورت‌های کارت صدا</h4>
                 <img class="img-responsive" alt="پورت‌های پشت کارت صدا" style="max-width:600px; min-width:90%;" src="/images/md/sound/پشت-کارت-صدا.jpg">
                 <ul class="custom-list">
                     <li><b>پورت Digital Out</b> : به رنگ <b>زرد یا سفید</b> (متن کنار پورت: Digital یا Digital Out) می‌باشد و برای اتصال بلندگوهای بزرگ به کامپیوتر مورد استفاده قرار می‌گیرد.</li>
                     <li><b>پورت Line In</b> : به رنگ <b>آبی</b> (شکل کنار پورت: پیکان به سمت داخل امواج) می‌باشد و بوسیله‌ی آن می‌توان دستگاه‌‌هایی مانند <b>ضبط صوت</b> و دیگر پلیر‌ها را به سیستم متصل کنیم.</li>
                     <li><b>پورت Mic</b> : پورت میکروفن به رنگ صورتی (شکل میکروفن کنار پورت) برای اتصال میکروفن به سیستم استفاده می‌شود. پورت Mic ابتدا سیگنال ورودی را تقویت کرده و سپس آن را وارد سیستم می‌کند.</li>
                     <p><span class="glyphicon glyphicon-info-sign"></span>دستگاه‌های خارجی مثل ضبط صوت را می‌توان به پورت Mic نیز متصل کرد اما در این صورت پورت میکروفن قدرت و نویز صدا را بیشتر می‌کند که این کار باعث <b>کاهش کیفیت صدا</b> می‌شود. بنابراین بهتر است این وسایل به پورت Line In متصل شود.</p>
                     <li><b>پورت Line Out</b> : به رنگ <b>سبز</b> (شکل کنار پورت: پیکان به سمت بیرون امواج) برای ارسال سیگنال آنالوگ به بلندگو‌های خارجی می‌باشد. همچنین برخی کارت‌های صدا از چند پورت خروجی استفاده‌ می‌شود که به آن‌ها خوجی صدای چند کاناله می‌گویند. (در تصویر دو پورت خروجی به رنگ‌های مشکی و سبز وجود دارد)</li>
                     <p>
                        <span class="glyphicon glyphicon-zoom-in"></span>پورت‌های ذکر شده در بالا همگی از نوع <a href="{{url('tutorial/ports/پورت-RCA-mini-jack')}}">RCA mini-jack</a> هستند.
                     </p>
                     <li><a href="{{url('tutorial/ports/پورت-MIDI')}}"><b>پورت ‌MID/Joystick</b></a> : پورت <b>۱۵ پینی</b> است (پورت زرد رنگ در تصویر) برای اتصال کنترل‌کننده‌ی بازی‌ها  (Joystick) یا کیبورد به کارت صدا استفاده می‌شود.</li>
                     <li><a href="{{url('tutorial/ports/پورت-Firewire')}}"><b>پورت Firewire</b></a> : در برخی از کارت‌های صدا با کیفیت بالا قرار داده شده است و برای اتصال دستگا‌ه‌هایی مانند <b>دوربین دیجیتال</b> به سیستم مورد استفاده قرار می‌گیرد.</li>
                 </ul>
                 
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>کابل‌های مربوط به هر پورت در قسمت انتهایی به رنگ پورت مورد نظر هستند و گاهی شکل پورت نیز بروی آن‌ها قابل حک می‌شود.
                 </p>
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('tutorial/sound/خروجی-صدای-چند-کاناله')}}">صدای خروجی چند کاناله</a>
                    <a href="{{url('tutorial/ports/پورت-RCA')}}">کانکتور صدای RCA</a>
                </div>
            </div>
        </div>
    </div>
@endsection