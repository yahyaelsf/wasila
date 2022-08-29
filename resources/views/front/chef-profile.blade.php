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
                            src="{{ asset('front/image/photo_5341306013632019689_y-removebg-preview.png') }}"
                            alt="" class="img-responive"></a>
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
                            <li><a href="{{ route('user.profile') }}"><img
                                        src="{{ asset('front/image/‏‏NoPath - نسخة (2).png') }}" alt=""></a>
                            </li>
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
            <div class="col-lg-12 sec-1-page-9 contain-sec-1-page4 sec-1-page-5">

            </div>
        </div>
    </div>
</section>
<!-- start section2-page-7 -->
<section class="sec-2page-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xs-12">
                <div class="boxs-page-7">
                    <img src="{{ asset('front/image/Web 1920 – 6.png84595894984984695489562pookoijoijiojiojkijijiojiojiojojiojoijiojiojiojoijiohuigygyihuhoijooi.png') }}"
                        alt="">
                    <div class="content">
                        <h4>الشيف منال محمد</h4>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                        <h4>(التعليقات 3)</h4>
                        <p>فلسطين / غزة</p>
                    </div>


                </div>
            </div>
            <div class="col-lg-2 col-xs-12 border-box-paage-7 " style="opacity: 0;">

            </div>
            <div class="col-lg-5 col-xs-12 top-of-box-left-page-7 border-box-paage-7" style=" margin-top: 5px;">
                <div class="boxs-left-pge-7">
                    <div class="col-lg-4">
                        <div class="box-left-page-7">
                            <img src="{{ asset('front/image/33333333333333.png') }}" class="img-responive" alt="">
                            <div class="p-page-7">
                                <p>بداية العمل</p>
                                <p class="center-p">8:00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-left-page-7">
                            <img src="{{ asset('front/image/33333333333333.png') }}" class="img-responive" alt="">
                            <div class="p-page-7">
                                <p>نهاية العمل</p>
                                <p class="center-p">11:00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-left-page-7">
                            <img src="{{ asset('front/image/33333333333333.png') }}" class="img-responive image2-box-left-page7"
                                alt="">
                            <div class="p-page-7">
                                <p>الدفع عند</p>
                                <p class="center-p">الاستلام</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxs-left-pge-7">
                    <div class="col-lg-4">
                        <div class="box-left-page-7">
                            <img src="{{ asset('front/image/33333333333333.png') }}" class="img-responive" alt="">
                            <div class="p-page-7">
                                <p>بداية العمل</p>
                                <p class="center-p">8:00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 display-none" style="opacity: 0;">
                        <div class="box-left-page-7">
                            <img src="{{ asset('front/image/33333333333333.png') }}" class="img-responive" alt="">
                            <div class="p-page-7">
                                <p>نهاية العمل</p>
                                <p class="center-p">11:00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-left-page-7">
                            <img src="{{ asset('front/image/44444444444444444.png') }}" class="img-responive image2-box-left-page7"
                                alt="">
                            <div class="p-page-7">
                                <p>الدفع عند</p>
                                <p class="center-p">الاستلام</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    </div>

</section>
<!-- end section2-page-7 -->

<section class="sec-3-page-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="box_mune">
                    <ul class="box_mune">
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                        <li>
                            <p>الافطار (4)</p>
                            <i class="fas fa-caret-left"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="button-page-9-center">
                    <button class="btn btn-primary btn-2-page-9">قائمة الطعام</button>
                    <button class="btn btn-primary btn-2-page-9 btn-2-page-9-top">الافطار</button>
                </div>
                <div class="boxs-center-page-9">
                    <div class="text-center">
                        <p class="right-text-centre">الصنف/الوجبة</p>
                        <p class="right-text-centre`">السعر/الطلب</p>
                    </div>
                    <ul>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                    </ul>
                </div>
                <div class="button-page-9-center">

                    <button class="btn btn-primary btn-2-page-9 btn-2-page-9-top">الافطار الشرقي</button>
                </div>
                <div class="boxs-center-page-9">
                    <div class="text-center">
                        <p class="right-text-centre">الصنف/الوجبة</p>
                        <p class="right-text-centre`">السعر/الطلب</p>
                    </div>
                    <ul>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                    </ul>
                </div>
                <div class="button-page-9-center">

                    <button class="btn btn-primary btn-2-page-9 btn-2-page-9-top">الشوربة</button>
                    <img src="{{ asset('front/image/images.jpg') }}" class="img-responive" alt="">
                </div>
                <div class="boxs-center-page-9">
                    <div class="text-center">
                        <p class="right-text-centre">الصنف/الوجبة</p>
                        <p class="right-text-centre`">السعر/الطلب</p>
                    </div>
                    <ul>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                    </ul>
                </div>
                <div class="button-page-9-center">

                    <button class="btn btn-primary btn-2-page-9 btn-2-page-9-top">السلطة</button>
                    <img src="{{ asset('front/image/السلطة.jpg') }}" class="img-responive" alt="">
                </div>
                <div class="boxs-center-page-9">
                    <div class="text-center">
                        <p class="right-text-centre">الصنف/الوجبة</p>
                        <p class="right-text-centre`">السعر/الطلب</p>
                    </div>
                    <ul>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                        <li>
                            <img src="{{ asset('front/image/Image -56.png') }}" class="img-responive" alt="">
                            <div class="paragraph-boxs-center">
                                <p>شوربة</p>
                                <p>0000</p>
                            </div>
                            <p>شيقل 25</p>
                            <i class="fas fa-plus-circle"></i>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-4 col-xs-12 basket_shop">
                <div class="top_content">
                    <h4>قائمة المشتريات</h4>
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <button class="btn btn-primary boooton">اضافة الى المفضلة <i
                        class="fas fa-heart love-btn"></i></button>
            </div>
        </div>
    </div>
</section>
@extends('front.footer')
