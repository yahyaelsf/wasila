@extends('front.header')
<!-- start navbar section 1 -->
<section class="sec-1-page-4">
    <div class="container">
        <!-- start row -->
        <div class="row">
            <div class="col-lg-2 col-xs-2">
                <button class="btn ntn-primary button-sec-1">
                    <a href="#call">اتصل بنا</a>
                </button>
            </div>
            <div class="col-lg-10 col-xs-10">
                <nav class="navbar navbar-default">
                    <a class="navbar-brand navbar-left" href="#">Wasilla <span>Shop</span>
                        <img src="{{ asset('front/image/photo_5341306013632019689_y-removebg-preview.png') }}"
                            alt="" class="img-responive" /></a>
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
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>

            <!-- end row -->
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="{{ asset('front/image/‏‏لقطة الشاشة (10).png') }}" class="img-responive img-right-page4"
                    alt="" />
            </div>
            <div class="col-lg-10 contain-sec-1-page4">
                <div class="box-sec-1-page4">
                    <h1>Wasila Shop</h1>
                    <p>نقدم افضل واسرع الخدمات</p>
                    <div class="fiex-img">
                        <img src="{{ asset('front/image/Landin121212g Page.png') }}" alt=""
                            class="img-responive thierd" />
                        <img src="{{ asset('front/image/Landing Page.png565fdgdfg.png') }}" alt=""
                            class="img-responive thierd" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-xs-0">
                <img src="{{ asset('front/image/‏‏لقطة الشاشة (11).png') }}" class="img-responive img-right2-page4"
                    alt="" />
            </div>
            <div class="col-lg-10 col-xs-12">
                <div class="col-lg-4 col-xs-4">
                    <form class="form-horizontal">
                        <div class="form-group form-right">
                            <label for="inputEmail3" class="col-sm-2 control-label logo-form"><i
                                    class="glyphicon glyphicon-search"></i></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control input-page-4" id="inputEmail3" dir="ltr"
                                    placeholder="ابحث عن موقعك الجغرافي" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-xs-0"></div>
                <div class="col-lg-4 col-xs-8 wasila-left-page4">
                    <a class="navbar-brand navbar-left" href="#">Wasilla <span>Shop</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="all200">
                    <p>الكل (200)</p>
                </div>
                <div class="col-lg-10"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-xs-0"></div>
            <div class="col-lg-10 col-xs-12">
                <div class="col-lg-2 col-xs-2">
                    <div class="boxs-meet">
                        <div class="box1">
                            <i class="fas fa-hamburger"></i>
                            <p>الوجبات السريعة(20)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-2">
                    <div class="boxs-meet">
                        <div class="box1">
                            <i class="fas fa-hamburger"></i>
                            <p>الوجبات السريعة(20)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-2">
                    <div class="boxs-meet">
                        <div class="box1">
                            <i class="fas fa-hamburger"></i>
                            <p>الوجبات السريعة(20)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-2">
                    <div class="boxs-meet">
                        <div class="box1">
                            <i class="fas fa-hamburger"></i>
                            <p>الوجبات السريعة(20)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-2">
                    <div class="boxs-meet">
                        <div class="box1">
                            <i class="fas fa-hamburger"></i>
                            <p>الوجبات السريعة(20)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xs-2">
                    <div class="boxs-meet">
                        <div class="box1">
                            <i class="fas fa-hamburger"></i>
                            <p>الوجبات السريعة(20)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-2-page-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-3 height-box">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt=""
                                class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-3 height-box">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt=""
                                class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-3 height-box">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt=""
                                class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-3 height-box">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt=""
                                class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-xs-3">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt="" class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-3">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt="" class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-3">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt="" class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-3">
                <div class="boxs-section2-page-4">
                    <div class="box">
                        <div class="imgIcon">
                            <img src="{{ asset('front/image/Image -56.png') }}" alt="" class="img-responive" />
                        </div>
                        <div class="textArea">
                            <i class="fas fa-heart"></i>
                            <p class="p1">15$</p>
                            <p>برجر</p>
                        </div>
                        <div class="textarea2">
                            <p>مشاهدة 35</p>
                            <div class="star">
                                <i class="fas fa-star star0"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                        <div class="last-text-box-page-4">
                            <div class="disflex">
                                <p>10-20</p>
                                <i class="far fa-clock times"></i>
                            </div>
                            <div class="shef">
                                <p>منال</p>
                            </div>
                            <img src="{{ asset('front/image/‏‏NoPath - نسخة (7).png') }}" class="img-responive" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@extends('front.footer')
