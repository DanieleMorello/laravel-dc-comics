<footer id="app_footer">

    @include('partials.footerTop')

    <div id="footer_bottom" class="text-white px-3">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <button class="my_btn btn">SIGN-UP NOW!</button>
                </div>

                <div class="col d-flex align-items-center justify-content-end">
                    <a class="pe-3 m-0 fw-bold text-decoration-none" href="">FOLLOW US</a>

                    <a href="#"><img class="pe-3" src="{{ Vite::asset('resources/img/footer-facebook.png') }}"
                            alt=""></a>

                    <a href="#"><img class="pe-3" src="{{ Vite::asset('resources/img/footer-twitter.png') }}"
                            alt=""></a>

                    <a href="#"><img class="pe-3" src="{{ Vite::asset('resources/img/footer-youtube.png') }}"
                            alt=""></a>

                    <a href="#"><img class="pe-3" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"
                            alt=""></a>

                    <a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#footer_bottom -->
</footer>
