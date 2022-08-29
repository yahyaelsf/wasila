@extends('front.header')
<!-- start navbar section 1 -->
<section class="sec-1-page-4">
    <div class="container">
        <!-- start row -->
        <div class="row">

            <div class="col-lg-2 col-xs-2">
                <button class="btn ntn-primary button-sec-1"><a href="#call">اتصل بنا</a></button>
            </div>
            <div class="col-lg-10 col-xs-10">
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
                             <li><a href="{{ route('user.profile') }}"><img src="{{ asset('front/image/‏‏NoPath - نسخة (2).png') }}" alt=""></a></li>
                            <li><a href="{{ route('favorite') }}">المفضلة</a></li>
                            <li><a href="{{ route('card') }}">سلتي</a></li>
                            <li><a href="{{ route('chefs') }}">اصحاب الخدمة</a></li>
                            <li><a href="{{ route('products') }}">المنتجات</a></li>


                        </ul>
                    </div><!-- /.navbar-collapse -->

                </nav>

            </div>


            <!-- end row -->
        </div>
        <div class="row">
            <div class="col-lg-12 contain-sec-1-page4 sec-1-page-5">

            </div>
        </div>
    </div>
</section>
<!-- start section2-page-7 -->
<section class="sec-2page-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-xs-12">
                <div class="sales">
                    <p>المشتريات</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="boxs-page-7">
                    <div class="box-page-7">
                        <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                        <div class="word-right-box-page-7">
                            <p>سلطة خضار</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                            <p class="paragraph2-box-page-7">15$</p>
                        </div>

                    </div>
                    <div class="box-page-7 box-page7-top">
                        <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                        <div class="word-right-box-page-7">
                            <p>سلطة خضار</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                            <p class="paragraph2-box-page-7">15$</p>
                        </div>

                    </div>
                    <div class="box-page-7 box-page7-top">
                        <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                        <div class="word-right-box-page-7">
                            <p>سلطة خضار</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                            <p class="paragraph2-box-page-7">15$</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xs-12 border-box-paage-7">
                <div class="address">
                    <img src=" {{ asset('front/image/123123123123123123123123123123123123123123123123.png') }}"
                        class="img-responive image-page-8-1" alt="">
                    <img src="{{ asset('front/image/mab.png') }}" class="img-responive image-page-8-2" alt="">
                    <form class="form-horizontal form-page-8">
                        <div class="form-group form-right">
                            <label for="inputEmail3" class="col-sm-2 control-label logo-form"><i
                                    class="glyphicon glyphicon-search"></i></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control input-page-4" id="inputEmail3" dir="ltr"
                                    placeholder="ابحث عن موقعك الجغرافي">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- end section2-page-7 -->
<!-- start section3-page-8 -->
<section class="sec-2page-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 col-xs-12 boxs-page-8">
                <form action="">
                    <div class="col-lg-4 col-xs-4">
                        <label for="">المحافظة</label>
                        <input type="text">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <label for="">المنطقة</label>
                        <input type="text">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <label for="">اسم الشارع</label>
                        <input type="text">
                    </div>

                </form>
                <form action="" class="form-1-page-8">
                    <div class="col-lg-4 col-xs-4">
                        <label for="">رقم الجوال</label>
                        <input type="text">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <label for="">تفصيل المكان</label>
                        <input type="text">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <label for="">اسم المستلم</label>
                        <input type="text">
                    </div>

                </form>
                <textarea name="" id="" cols="30" rows="10" placeholder="اترك ملاحظة لديلفري ..."></textarea>

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- end section3-page-8 -->

@extends('front.footer')
