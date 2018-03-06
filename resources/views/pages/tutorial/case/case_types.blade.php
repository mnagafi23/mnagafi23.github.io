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
                <h3>انواع کیس کامپیوتر</h3>
                <p>
                        کیس کامپیوتر در بردارنده و محافظ تمام قطعات داخلی سیستم می‌باشد. امروزه کیس‌های ویژگی‌های فوق‌العاده زیادی هستند که باعث می‌شوندگاهی قیمت یک کیس با قیمت یک سیستم گیمنگ برابری کند.
                </p>
                <p>
                        تنوع اندازه در کیس‌ها بسیار زیاد است و استاندارد خاصی برای اندازه کیس‌ها وجود <b>ندارد</b> اما انواع متفاوت کیس براساس اندازی عبارت‌اند از:
                </p>
                <img class="img-responsive" style="min-width:90%; max-width:600px;" alt="مقایسه کیس‌ها براساس اندازه" src="/images/md/case/اندازه-مختلف-کیس.jpg">
                <h4>Mini Tower</h4>
                <p>
                    این کیس برای <a href="">مادربور‌ها</a> با <a href="">فرم فاکتور</a> <a href="">Micro ATX</a> طراحی شده اند و ارتفاع از <b>۳۵ تا ۴۰</b> سانتی‌متر می‌باشد. فضای موجود در این کیس به کاربر امکان نصب حداکثر <b>دو</b> <a href="">کارت گرافیک</a> را می‌دهد.
                </p>
                <h4>Mid Tower</h4>
                <p>
                        <b>متداول‌ترین</b> و <b>محبوب‌ترین</b> نوع کیس با ارتفاع <b>۴۳ تا ۵۳</b> سانتی‌متر می‌باشد. امکان نصب ۶ تا ۸ <a href="">هارد</a> بروی کیس وجود دارد. کیس Mid Tower برای مادربورد‌ها با فرم فاکتور <a href="">ATX</a> مناسب می‌باشد و فضا و خنک کنندگی مناسب برای دو کارت گرافیک را براحتی تامین می‌کند.
                </p>
                <h4>Full Tower</h4>
                <p>
                        این نوع کیس برای مادربورد‌های بزرگ مانند <a href="">EATX</a> و XL-ATX طراحی و بهینه سازی شده‌اند. ارتفاع Full Tower بین <b>۵۶ تا ۶۸</b> سانتی‌متر می‌باشد همچنین امکان نصب سیستم <b>خنک‌کننده آبی</b> (liquid cooling loop) بروی این نوع کیس وجود دارد.
                </p>
                <h4>Super/Ultra Tower</h4>
                <p>
                        این نوع کیس نیز برای مادربورد‌‌های بزرگ طراحی شده است. ارتفاع آن <b>بیشتر از ۶۸</b> سانتی‌متر می‌باشد. امکان نصب دو <a href="">پاور</a> و سیستم خنک کننده آبی نیز در بیشتر انواع Ultra Tower وجود دارد.
                </p>
                <h4>SSF</h4>
                <p>
                        کوتا شده‌ی Small Form Factor برای مادربورد‌ها با فرم فاکتور کوچک مانند <a href="">Mini ITX</a> بهینه سازی شده است. حداکثر کارت‌گرافیک قابل نصب در این کیس‌ها ۱ عدد می‌باشد.
                </p>
                <h4>Cube Case</h4>
                <p>
                        استاندارد خاصی برای این نوع کیس‌ها وجود ندارد و تنها ویژگی بارز آن <b>مکعب شکل</b> بودن Cube Case می‌باشد.
                </p>
                <h4>ویژگی‌های دیگر کیس‌ها:</h4>
                <ul class="custom-list">
                    <div class="row">
                        <div class="col-sm-6">
                            <li><a href="{{url('tutorial/case/کیس-ماژولار')}}">کیس‌های ماژولار</a></li>
                            <li><a href="{{url('tutorial/other/خنک-کننده-آبی')}}">سیستم خنک کننده آبی</a></li>
                            <li><a href="{{url('tutorial/case/کنترل-فن-کیس')}}">مدیریت فن</a></li>
                        </div>
                        <div class="col-sm-6">
                            <li><a href="{{url('tutorial/case/مدیریت-کابل-کیس')}}">مدیریت کابل</a></li>
                            <li><a href="{{url('tutorial/case/فیلتر-گرد-خاک-کیس')}}">فیلتر گرد‌ و غبار</a></li>
                            <li><a href="{{url('tutorial/case/کیس-شفاف')}}">کیس بدنه شفاف</a></li>
                        </div>
                    </div>
                </ul>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection