<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <title> تسجيل دخول : وسيلة</title>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                                {{-- <li><a href="#sec-5">خدمات الموقع</a></li>
                                <li><a href="#sec-3">من نحن</a></li>
                                <li><a href="#sec-2">حول الموقع</a></li>
                                <li><a href="#">تسجيل الدخول</a></li> --}}
                                <li><a href="{{ route('index') }}">الصفحة الرئيسية</a></li>


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
    <section class="sec-2-page-2">
        <div class="container">
            <div class="row row-page-2-sec-2">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-xs-12">
                    <div class="box-page-2">

                        <form class="form-horizontal" method="POST">
                            @csrf
                            <h3>وسيلة تسجيل دخول</h3>
                            <div class="form-group form-right">
                                <label for="inputEmail3" class="col-sm-2 control-label logo-form"><i
                                        class="glyphicon glyphicon-user
                  "></i></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control input-page-2" name="email"  id="email">
                                </div>
                            </div>
                            <div class="form-group form-right ">
                                <label for="inputPassword3" class="col-sm-2 control-label logo-form"><i
                                        class="glyphicon glyphicon-lock
                  "></i></label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control input-page-2" name="password" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10 under-form">
                                    <div class="missing-password">
                                        <a href="#">هل نسيت كلمة السر ؟</a>
                                        <a href="{{ route('register') }}">انشاء حساب</a>
                                        <p class="pargraph-sec-2-page2">يتم انشاء حساب مزودين الخدمات</p>
                                        <p>من قبل مسئول الموقع</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10 last-form">
                                    <button type="button" onclick="login()"
                                        class="btn btn-default button-sec-2-page-2">دخول</button>
                                    <button type="submit"
                                        class="btn btn-default button-sec-2-page-2 button-sec-2-page-2-2"><a
                                            href="index4.html">مزود خدمة</a></button>
                                    <p>أو</p>
                                    <div class="logo">
                                        <i class="fas fa-envelope i1"></i>
                                        <i class="fab fa-instagram i2 "></i>
                                        <i class="fab fa-twitter i3"></i>
                                        <i class="fab fa-facebook i4"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <img src="{{ asset('front/image/photo_5341306013632019689_y-removebg-preview.png') }}"
                            class="img-responive" alt="">
                    </div>
                    <div class="col-lg-2"></div>
                </div>
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
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('cms/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        function login() {
            axios.post('/front/login', {
                email: document.getElementById('email').value,
                password: document.getElementById('password').value
            }).then(function(response) {
                // handle success
                console.log(response);
                // toastr.success(response.data.message)
                // document.getElementById('reset-form').reset();
                window.location.href = '/front/products';
            }).catch(function(error) {
                // handle error
                console.log(error);
                toastr.error(error.response.data.message)
            })
        }
    </script>
</body>

</html>
