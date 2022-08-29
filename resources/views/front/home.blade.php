@extends('front.header')

    <!-- start navbar section 1 -->
    <section class="sec-1">
        <div class="overlay">
            <div class="container">
                <!-- start row -->
                <div class="row">

                    <div class="col-lg-2 col-xs-2">
                        <button class="btn ntn-primary button-sec-1"><a href="#call">اتصل بنا</a></button>
                    </div>
                    <div class="col-lg-8 col-xs-8">
                        <nav class="navbar navbar-default">


                            <a class="navbar-brand navbar-left" href="#">Wasilla <span>Shop</span> <img
                                    src="{{ asset('front/image/photo_5341306013632019689_y-removebg-preview.png') }}" alt=""
                                    class="img-responive"></a>
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#sec-5">خدمات الموقع</a></li>
                                    <li><a href="#sec-3">من نحن</a></li>
                                    <li><a href="#sec-2">حول الموقع</a></li>
                                    <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                                    <li><a href="#">الرئيسية</a></li>


                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </nav>

                    </div>
                    <div class="col-lg-2 col-xs-2">

                    </div>


                    <!-- end row -->
                </div>
                <div class="row padding-sec-1">
                    <div class="col-lg-6 ">
                        <div class="img-right-sec-1">
                            <img src="{{ asset('front/image/1540-removebg-preview (1).png') }}" alt=""
                                class="img-responive first">
                            <img src="{{ asset('front/image/1540-removebg-preview.png') }}" alt=""
                                class="img-responive secound">
                            <img src="{{ asset('front/image/2222-removebg-preview.png') }}" alt=""
                                class="img-responive thierd">
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="contain-sec-1">
                            <h1>موقع ومتجر وسيلة خيارك الافضل</h1>
                            <p>انها حقيقة مثبتة علمية بان ترى ان موقع وسيلة خيارك الافضل للتسوق انها حقيقة مثبتة علمية
                                بان ترى ان موقع وسيلة خيارك الافضل للتسوق انها حقيقة مثبتة علمية بان ترى ان موقع وسيلة
                                خيارك الافضل للتسوقموقع وسيلة خيارك الافضل للتسوق انها حقيقة مثبتة علمية بان ترى ان موقع
                                وسموقع فضل للتسوق انها</p>
                            <div class="fiex-img">
                                <img src="{{ asset('front/image/Landin121212g Page.png') }}" alt="" class="img-responive thierd">
                                <img src="{{ asset('front/image/Landing Page.png565fdgdfg.png') }}" alt=""
                                    class="img-responive thierd">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row wasila-img">
                    <div class="col-lg-12 co;-xs-12 img-left-sec-1">
                        <img src="{{ asset('front/image/photo_5341306013632019689_y-removebg-preview.png') }}" class="img-responive"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end navbar section 1 -->
    <!-- start section 2 -->
    <section class="sec-2" id="sec-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-6">
                    <div class="word-sec2">
                        <h1>حول الموقع</h1>
                        <h4>نص تعريفي حول خدمات الموقع يتم وضعه من المشرفين</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <div class="contain-sec-2">
                        <h1>موقع ومتجر وسيلة</h1>
                        <p>
                        موقع وسيلة يقدم خدمة لسيدات من خلال استخدام خبراتهم في الطبخ وبيعهم لمنتجاتهم وتحقيق الارباح لهم
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 img-sec-2">
                    <img src="{{ asset('front/image/Landing Page222.png') }}" alt="" class="img-responive">
                </div>
            </div>
        </div>
    </section>
    <!-- end section 2 -->
    <!-- start section 3 -->
    <section class="sec-3"id="sec-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="head-sec-3">
                        <h1>
                            <h1>من نحن</h1>
                            <h2>متجر وموقع وسيلة</h2>
                            <p>انها حقيقة مثبتة منذ وقت طويل وهي ان المقروء لصفحة ما سيلهي القارئ مع التركيز على تخطيطه
                                الهدف من استخدام لوريم</p>
                        </h1>
                    </div>

                </div>
            </div>
            <div class="row image-sec-3">
                <div class="col-lg-12">
                    <img src="{{ asset('front/image/Landing Page.png') }}" alt="" class="img-responive">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                    <div class="pargraph-sec-3">
                        <p>انها حقيقحة مثبتة منذ وقت طويل وهي ان المحتوى لصفحة ما</p>
                        <p>سيلهي القارئ تركيزه على تخطيط الهدف من استخدام لوريم</p>
                        <p class="pargraph3">وسيلة تيم</p>
                        <p>حساب الفريق</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 img-left-sec-3">
                    <img src="{{ asset('front/image/5159502.jpg') }}" alt="" class="img-responive">
                </div>
            </div>

        </div>
    </section>
    <!-- end section 3 -->
    <!-- start section 5 -->
    <section class="sec-5"id="sec-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="head-sec-4">
                        <h1>خدمات الموقع</h1>
                        <h4>نص تعريفي حول خدمات الموقع يتم وضعه من المشرفين</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xs-4">
                    <div class="box">
                        <img src="{{ asset('front/image/b875a59e-6546-49c2-9322-ea495084d7d0.jpg') }}" class="img-responive"
                            width="70%" alt="">
                        <h5>الطعام والمنتجات</h5>
                        <p>نص عبر الموقع يتم وضعه من قبل</p>
                        <p>المشرف</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-4">
                    <div class="box">
                        <img src="{{ asset('front/image/de1c35c7-2341-4563-8359-382c2eb08aea.jpg') }}" class="img-responive"
                            width="70%" alt="">
                        <h5>استقطاب شيفات</h5>
                        <p>نص عبر الموقع يتم وضعه من قبل</p>
                        <p>المشرف</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-4">
                    <div class="box">
                        <img src="{{ asset('front/image/7fa78ab3-ece2-4138-82a0-5b5d0bc689a7.jpg') }}" class="img-responive"
                            width="73%" alt="">
                        <h5>الدليفري</h5>
                        <p>نص عبر الموقع يتم وضعه من قبل</p>
                        <p>المشرف</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 5 -->
    <!-- start section 6 -->
    <section class="sec-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <h1>اعلانات هامة</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xs-12 img-sec-6">
                    <img src="{{ asset('front/image/Landing Page.png666666666666666.png') }}" alt="" class="img-responive">
                    <img src="{{ asset('front/image/62327a19-4590-4cc9-afc4-699d838b833d.jpg') }}" alt=""
                        class="img-responive img2-sec-6">
                </div>
            </div>
        </div>
    </section>
    <!-- end section 6 -->
    <!-- end section 7 -->
@extends('front.footer')
