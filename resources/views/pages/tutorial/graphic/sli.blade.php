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
                 <h3>فناوری SLI</h3>
                 <p>
                        بسیاری از بازی‌ها به قدرت پردازش گرافیکی بالایی نیاز دارند. فناوری SLT که توسط شرکت <b>nVIDIA</b> عرضه شده است امکان پردازش موازی تصاویر را در <a href="">کارت‌های گرافیک</a> می‌دهند. 
                 </p>
                 <p>
                        در فناوری SLI دو یا تعداد بیشتری کارت گرافیک (از نوع <a href="">PCI-Express</a>) در <a href="">مادربورد</a> نصب می‌شوند و هنگام رندر کردن تصاویر، بار کاری را بین یکدیگر به <b>اشتراک بگذارند</b> و قدرت پردازش گرافیکی سیستم را افزایش دهند.
                 </p>
                 <img class="img-responsive" alt="فناوری SLI" style="max-width:600px;" src="/images/md/graphic/فناوری-sli.jpg">
                 <h4>نحوه‌ی پردازش موازی تصاویر</h4>
                 <p>
                        کارت‌‌های ویدیو در پردازش موازی تصویر به روش <b>master-slave</b> با یکدیگر تعامل دارند. هر دو کارت اطلاعات یکسانی را برای رندر (تولید تصاویر) دریافت می‌کنند. اما نیمی از بار کاری تصویر به کارت Slave و نیمه‌ی دیگر توسط کارت master ارسال می‌شود. پس اتمام کار کارت slave خروجی به کارت master ارسال می‌شود و خروجی‌ها با هم ترکیب و خروجی نهایی به مانیتور متصل می‌شود؛ از این رو کارت master به <a href="">مانیتور</a> متصل می‌شود.
                 </p>
                 <p>
                    <span class="glyphicon glyphicon-alert"></span>فناوری‌های SLI و <a href="">CrossFire</a> مقدار برق مصرفی سیستم را زیاد و  حرارت زیادی تولید می‌کنند. همچنین <b>بازده‌ی</b> این فناوری‌ها پایین است.
                 </p>
                 <h4>انواع مختلف SLI</h4>
                 <ul class="custom-list">
                    <li><b>SLI</b> : در این فناوری <b>دو</b> کارت گرافیک می‌توانند با یکدیگر، پردازش تصاویر را به اشتراک بگذارند.</li>
                    <li><b>3-Way SLI</b> : این فناوری امکان پردازش تصاویر به وسیله <b>سه</b> کارت گرافیک به طور همزمان را فراهم می‌کند.</li>
                    <li><b>Quad SLI</b> : در این نوع فناوری دو کارت گرافیک که هر یک حاوی دو GPU می‌باشند، میتوانند با یکدیگر پردازش تصویر را به اشتراک بگذارند.</li>
                    <li><b>Hyprid SLI</b> : این فناوری از دو فناوری Boost GeForce و hybridPower استفاده می‌کند. فناوری Boost GeForce کارت گرافیک می‌تواند (برای افزایش کارایی) با ویدیوی انبورد مادربورد به صورت موازی تحت SLI کار کند. و فناوری hybridPower این امکان را فراهم می‌کند تا هنگام عدم استفاده از بازی‌ها کارت گرافیک نصب شده، خاموش شود و از <b>مصرف برق</b> کاسته شود.</li>
                 </ul>
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>برای استفاده از فناوری SLI کارت‌های گرافیک باید از نظر GPU و BIOS کاملاً <b>یکسان باشند</b>.
                 </p>
                 
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection