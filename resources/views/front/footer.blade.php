    <!-- end section 7 -->
    <section class="sec-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xs-3"></div>
                <div class="col-lg-6 col-xs-6">
                    <div class="box-sec-7">
                        <h3>إتصل بنا</h3>
                        <p>انها حقيقة مثبتة من زمن طويل وهي ان المحتوى المقروء لصفحة ما</p>
                        <div class="sent-here">
                            <button onclick="contact()">ارسال</button>
                            <p>أرسل هنا</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-3"></div>
            </div>
        </div>
    </section>
    <!-- end section 7 -->
    <!-- start section 8 -->
    <section class="sec-8" id="call">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xs-3">
                    <div class="words-sec-8">
                        <h4>Contact Us</h4>
                        <p>00000000000000</p>
                        <p>yourmail@gmail.com</p>
                        <p>غزة</p>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-3">
                    <div class="support-sec-8">
                        <h4>Support</h4>
                        <p>aa</p>
                        <p>aa</p>
                        <p>aa</p>
                        <p>aa</p>
                        <p>aa</p>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-3">
                    <div class="link-sec-8">
                        <h4>Links</h4>
                        <a href="#">الرئيسية</a>
                        <a href="#">00</a>
                        <a href="#">00</a>
                        <a href="#">00</a>
                        <a href="#">00</a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-3">
                    <div class="logo-sec-8">
                        <img src="{{ asset('front/image/photo_5341306013632019689_y-removebg-preview.png') }}" alt=""
                            class="img-responive">
                        <div class="logo">
                            <i class="fas fa-envelope i1"></i>
                            <i class="fab fa-instagram i2 "></i>
                            <i class="fab fa-twitter i3"></i>
                            <i class="fab fa-facebook i4"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 8 -->

    <script src="{{ asset('front/js/jquery.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script>
         function contact(){
             window.location.href ='/contact'
         }
    </script>
</body>

</html>
