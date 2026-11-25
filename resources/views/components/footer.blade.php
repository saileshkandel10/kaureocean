<footer class="kaure-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="{{ asset('assets/logos/kaure-logo.webp') }}" alt="Kaure Ocean" height="40" style="filter: brightness(0) invert(1);">
                    <h5 class="mb-0 text-white border-0 pb-0">Kaure Ocean</h5>
                </div>
                <p class="text-light opacity-75 small">
                    Kaure Ocean Educational & Consultancy Pvt. Ltd. (Kaure Ocean Japanese Language School) is dedicated to providing world-class Japanese language education, technical training, and ethical recruitment for SSW and TITP programs.
                </p>
                <p class="small text-warning font-jp mb-0">
                    ライセンス番号：221/082/083<br>
                    ネパール政府 労働・雇用・社会保障省 海外雇用局
                </p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Quick Links</h5>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('/mission-vision') }}">Mission & Vision</a></li>
                    <li><a href="{{ url('/leadership') }}">Leadership</a></li>
                    <li><a href="{{ url('/our-team') }}">Our Team</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Programs & Services</h5>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="{{ url('/japanese-language') }}">Japanese Language</a></li>
                    <li><a href="{{ url('/jlpt-preparation') }}">JLPT Preparation</a></li>
                    <li><a href="{{ url('/japan-opportunities/ssw') }}">SSW Program</a></li>
                    <li><a href="{{ url('/japan-opportunities/titp') }}">TITP Program</a></li>
                    <li><a href="{{ url('/recruitment-process') }}">Recruitment Process</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Legal & Contact</h5>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>

                    <li><a href="{{ url('/blog') }}">Blog & News</a></li>
                    <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a></li>
                    <li><a href="{{ url('/disclaimer') }}">Disclaimer</a></li>
                </ul>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start small opacity-75">
                &copy; {{ date('Y') }} Kaure Ocean Educational & Consultancy Pvt. Ltd. All rights reserved.
            </div>
            <div class="col-md-6 text-center text-md-end small opacity-75 font-jp">
                信頼と実績のネパール人財拠点
            </div>
        </div>
    </div>
</footer>
