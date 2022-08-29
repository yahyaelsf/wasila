@extends('front.header')
<!-- start navbar section 1 -->
<section class="sec-1-page-2">
    <div class="container">
        <!-- start row -->
        <div class="row">

            <div class="col-lg-2 col-xs-2">
            </div>
            <div class="col-lg-8 col-xs-8">
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
                            <li><a href="{{ route('index') }}">الرئيسية</a></li>


                        </ul>
                    </div><!-- /.navbar-collapse -->

                </nav>

            </div>
            <div class="col-lg-2 col-xs-2">
            </div>


            <!-- end row -->
        </div>
    </div>
</section>
<!-- end navbar section 1 -->
<!-- strat section-2 page2 -->
<section class="sec-2-page-2 page-3 sec-2-2-last">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="box-last">
                    <div class="boxs-boxs-last">

                    </div>
                    <button class="btn btn-primary btn-box-last">تواصل معنا</button>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

</section>
<!-- end section-2 page2 -->
<!-- start section-3 page2 -->
<section class="sec-3-page-2">
    <div class="container">
        <div class="row">

            <div class="col-lg-2 col-xs-2">
            </div>
            <div class="col-lg-8 col-xs-12">
                <nav class="navbar navbar-default">


                    <a class="navbar-brand navbar-left wasila-right" href="#">Wasilla <span>Shop</span> <img
                            src="{{ asset('front/image/photo_5341306013632019689_y-removebg-preview.png') }}"
                            alt="" class="img-responive"></a>
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse dispaly-logo" id="bs-example-navbar-collapse-1">
                        <div class="logo">
                            <a href=""><i class="fas fa-envelope i1"></i></a>
                            <a href=""><i class="fab fa-instagram i2 "></i></a>
                            <a href=""><i class="fab fa-twitter i3"></i></a>
                            <a href=""><i class="fab fa-facebook i4"></i></a>
                        </div>

                    </div><!-- /.navbar-collapse -->

                </nav>

            </div>
            <div class="col-lg-2 col-xs-2">
            </div>


            <!-- end row -->
        </div>
    </div>
</section>
<!-- end section-3 page2 -->


<script src="{{ asset('front/js/jquery.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
</body>

</html>
