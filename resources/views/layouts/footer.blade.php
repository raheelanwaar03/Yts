<footer class="footer-section">
    <div class="newslater-section padding-bottom">
        <div class="container">
            <div class="newslater-area">
                <div class="newslater-content padding-bottom padding-top">
                    <span class="cate">SUBSCRIBE TO {{ env('APP_NAME') }}</span>
                    <h3 class="title">To Get Exclusive Benefits</h3>
                    <form class="newslater-form">
                        <input type="text" placeholder="Enter Your Email Here" required>
                        <button type="submit">subscribe</button>
                    </form>
                </div>
                <div class="newslater-thumb">
                    <img src="{{ asset('assets/images/footer/footer.png') }}" alt="footer">
                    <div class="coin-1">
                        <img src="{{ asset('assets/images/footer/Coin_01.png') }}" alt="footer">
                    </div>
                    <div class="coin-2">
                        <img src="{{ asset('assets/images/footer/Coin_02.png') }}" alt="footer">
                    </div>
                    <div class="coin-3">
                        <img src="{{ asset('assets/images/footer/Coin_03.png') }}" alt="footer">
                    </div>
                    <div class="coin-4">
                        <img src="{{ asset('assets/images/footer/Coin_04.png') }}" alt="footer">
                    </div>
                    <div class="coin-5">
                        <img src="{{ asset('assets/images/footer/Coin_05.png') }}" alt="footer">
                    </div>
                    <div class="coin-6">
                        <img src="{{ asset('assets/images/footer/Coin_06.png') }}" alt="footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="logo">
                <a href="{{ route('LandingPage') }}">
                    <img src="{{ asset('assets/images/logo/footer-logo.png') }}" alt="logo">
                </a>
            </div>
            <ul class="links">
                <li>
                    <a href="{{ route('LandingPage') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('LandingPage.Contact') }}">Contact Us</a>
                </li>
                <li>
                    <a href="{{ route('LandingPage.Affilate') }}">Affiliates</a>
                </li>
                @if (auth()->user())
                    <li>
                        <a href="{{ route('User.Dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('LandingPage.Product') }}">Product</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-area">
                <div class="left">
                    <p>&copy; 2019 <a href="#0">{{ env('APP_NAME') }}</a> | All right reserved</p>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>

<script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
</script>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/owl.min.js') }}"></script>
<script src="{{ asset('assets/js/paroller.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
