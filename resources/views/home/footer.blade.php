<!-- Footer Section Begin -->
<footer class="footer set-bg" data-setbg="{{asset('assets')}}/img/footer-bg.jpg">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="footer__top__text">
                        <h2>Ready To Work With Us?</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer__top__newslatter">
                        <form action="#">
                            <input type="text" placeholder="Enter your email...">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
                    </div>
                    <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                    <ul>
                        <li>Info.colorlib@gmail.com</li>
                        <li>+84 123 456 789</li>
                    </ul>
                    <div class="footer__social">
                        <a href="https://m.facebook.com/102230685838556/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/bubbletourr?t=67oo5A4fAF2WpzW5sKze6w&s=09"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/bubbletourr/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Company</h6>
                    <ul>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Services</h6>
                    <ul>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">Interior Design</a></li>
                        <li><a href="#">Exterior Design</a></li>
                        <li><a href="#">Planning</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__address">
                    <h6>Get In Touch</h6>
                    <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                    <ul>
                        <li>Info.colorlib@gmail.com</li>
                        <li>+84 123 456 789</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="copyright__text">
                        <p>Copyright © <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                          aria-hidden="true"></i> by <a href="https://colorlib.com"
                                                                                                                        target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="copyright__widget">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/slick.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
</body>

</html>
