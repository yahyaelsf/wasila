@extends('front.header')
<!-- start navbar section 1 -->
<section class="sec-1-page-4 sec-1-page-6">
    <div class="container">
        <!-- start row -->
        <div class="row">

            <div class="col-lg-2 col-xs-2">
                <button class="btn ntn-primary button-sec-1 button-sec-1-page6 "><a href="#call">اتصل بنا</a></button>
            </div>
            <div class="col-lg-10 col-xs-10">
                <nav class="navbar navbar-default nav-page6">


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
    </div>
</section>

<section class="sec-1-page-4 sec-2-page-6">
    <div class="container">
        <!-- start row -->
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <form action="" class="form-page-picture">
                    <label for="">الاسم</label>
                    <input type="text">
                </form>
                <form action="" class="form-page-picture form-marg-top">
                    <label for="">رقم الجوال</label>
                    <input type="text">
                </form>
                <form action="" class="form-page-picture form-marg-top">
                    <label for="">رقم جوال آخر</label>
                    <input type="text">
                </form>
                <form action="" class="form-page-picture form-marg-top">
                    <label for="">رقم الهوية</label>
                    <input type="text">
                </form>
            </div>
            <div class="col-lg-6 col-xs-6">
                <form action="" class="form-page-picture form-pic-2">
                    <label for="">الجيميل</label>
                    <input type="text">
                </form>
                <form action="" class="form-page-picture form-pic-2 form-marg-top">
                    <label for="">حساب جيميل آخر</label>
                    <input type="text">
                </form>
                <form action="" class="form-page-picture form-pic-2 form-marg-top">
                    <label for="">المحافظة</label>
                    <input type="text">
                </form>
                <form action="" class="form-page-picture form-pic-2 form-marg-top">
                    <label for="">المسكن</label>
                    <input type="text">
                </form>
            </div>



        </div>
        <!-- end row -->
    </div>
</section>

@extends('front.footer')
