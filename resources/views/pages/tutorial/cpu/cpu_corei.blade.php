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
                <h3>مقایسه پردازنده‌های Core i شرکت اینتل</h3>
                <p>
                        <a href="">پردازنده</a>‌های جدید شرکت اینتل در Core i3، Core i5 و Core i7 (مدل جدید Core i9) عرضه می‌شوند. سوال مهمی که هنگام خرید پردازنده‌های اینتل مطرح می‌شود این است که این مدل‌ها چه تفاوتی دارند و کدام یک <b>سریعتر و بهتر</b> است. بعنوان یک پاسخ کلی می‌توان گفت که هرچه عدد جلوی Core i بیشتر باشد پردازنده سریعتر است.
                        اما با کمی دقت متوجه می‌شویم که این پاسخ کاملاً <b>اشتباه</b> است.
                </p>
                <p>
                        نام i3، i5 و i7 پردازنده‌های اینتل تنها مربوط به برند اینتل می‌باشند و نشان‌دهنده‌ی یک خانواده از پردازنده‌ها هستند و هیچ ارتباطی با سرعت پردازنده <b>ندارند</b> برای تعیین سرعت پردازنده باید به اعداد مربوط به مدل پردازنده توجه کرد.
                </p>
                <h4>نامگذاری پردازنده‌‌های اینتل لپ‌تاپ</h4>
                <p>مدل‌های مختلف پردانده‌های لپ تاپ به صورت زیر نامگذاری می‌شوند.</p>
                <img class="img-responsive" alt="مدل پردازنده‌‌های اینتل لپ‌تاپ" style="max-width:400px;" src="/images/md/cpu/مدل-پردازنده-اینتل-لپ-تاپ.jpg">
                <p>
                        قسمت اول نشان‌دهنده‌ی نوع <b>خانواده پردازنده</b> (i3,i5,i7) می‌باشد رقم اول عدد پس از نوع خانواده پردازنده نشان‌دهنده‌ی نسل پردازنده است (در جدول انتهای این صفحه ویژگی‌های مختلف نسل‌ها آمده است). سه رقم بعدی رنج (<b>range</b>) پردازنده را نشان می‌دهند (هر چه این عدد بزرگتر پردازنده <b>قوی‌تر</b> است).
                </p>
                <p> 
                        حرف انتهایی (گاهی دو حرف) مدل پردازنده، بسته به نوع آن معنی خاص خود را دارد
                </p>
                <ul class="custom-list">
                    <li><b>U</b> پردازنده‌های کم مصرف و کوچک و مخصوص لپ‌تاپ‌های <b>ارزان و ظریف</b> را معرفی می‌کند. (i7-7500U)</li>
                    <li><b>Y</b> مربوط پردازنده‌های بسیار کم مصرف و کوچک (<b>مخصوص موبایل</b>) می‌باشد. (برای مثال i7-7Y75)</li>
                    <li><b>H</b> معرفی‌کننده پردازنده‌های <b>لپ‌تاپ‌های معمولی</b> و قوی (High performance) می‌باشد. (i3-6100H)</li>
                    <li><b>HQ یا MQ</b> مربوط به لپ‌تاپ‌های <b>گیمینگ</b> و چهار هسته‌ای (Quad-Core) می‌باشد. (i7-6700 HQ)</li>
                    <li><b>HK</b> لپ‌تاپ‌های گیمینگ و قوی با <a href=""><b>قابلیت اورکلاک</b></a> (overclock) را معرفی می‌کند. (i7-6820 HK)</li>
                </ul>
                <h4>نامگذاری پردازنده‌های Desk Top</h4>
                <p>
                        مدل‌های مختلف کامپیوتر‌های رومیزی (Desk Top) به صورت زیر طبقه بندی می‌شوند.
                </p>
                <img class="img-responsive" alt="مدل پردازنده‌‌های اینتل کامپیوتر" style="max-width:500px;" src="/images/md/cpu/نامگذاری-پردازنده-کامپیوتر-اینتل.jpg">
                <p>
                        عدد بعد از رنج پردازنده نشان دهنده‌ی تعداد <b>هسته‌ها</b> (core) در <a href="">پردازنده‌های چند هسته‌ای</a> (multi-core) و عدد بعدی مربوط <b>تعداد رشته‌ها</b> (Threads) را در پردازنده‌ها  با <a href="">فناوری چند رشته‌ای</a> یا HTT می‌باشد.
                </p>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>ممکن است در انتهای مدل پردازنده <b>حرف K</b> قرار گرفته باشد که <b>قابلیت اورکلاک</b> (Overclock) را نشان می‌دهد.
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection