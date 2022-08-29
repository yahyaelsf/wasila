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
<!-- end navbar section 1 -->
<!-- start navbar section 1 -->
<section class="sec-2-page10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wasila-page-10">
                    <span>Wasilla</span>Shop
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="box-fav">
                    <p>الاكل و المنتجات الافضل على الاطلاق</p>
                    <ul>
                        <li>
                            <i class="fas fa-crosshairs"></i>
                            <p>اختيار المحافظة</p>
                        </li>
                        <li>
                            <i class="fas fa-crosshairs"></i>
                            <p>اختيار المحافظة</p>
                        </li>
                        <li>
                            <i class="fas fa-crosshairs"></i>
                            <p>اختيار المحافظة</p>
                        </li>
                    </ul>
                    <button class="btn btn-primary bttn-page-10">عرض اصحاب الخدمة</button>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- end navbar section 1 -->
<section class="sec-3-page10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hash-tag">
                    <i class="fas fa-hamburger"></i>
                    <p>الوجبات السريعة (20)</p>
                </div>
            </div>
        </div>
        <div class="row manal-box-top">
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hash-tag">
                    <i class="fas fa-hamburger"></i>
                    <p>المنتجات الخضراء (25)</p>
                </div>
            </div>
        </div>
        <div class="row manal-box-top">
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-xs-4">
                <div class="manal-box">
                    <img src="{{ asset('front/image/sew.png') }}" alt="">
                    <div class="manal-star">
                        <p>منال</p>
                        <div class="star">
                            <i class="fas fa-star star0"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                            <i class="fas fa-star star1"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@extends('front.footer')
