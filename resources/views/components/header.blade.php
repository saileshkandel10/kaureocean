<header class="kaure-header">
    <div class="kaure-topbar">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center gap-3">
                <span><i class="fas fa-phone-alt me-1"></i> 01-5923201</span>
                <span><i class="fas fa-envelope me-1"></i> kaureocean7@gmail.com</span>
                <span class="d-none d-md-inline"><i class="fas fa-clock me-1"></i> 9:00 AM – 5:30 PM Nepal Time</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="badge bg-warning text-dark font-jp">ライセンス番号：221/082/083</span>
                <a href="https://line.me" target="_blank"><i class="fab fa-line me-1"></i> LINE Contact</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg kaure-navbar py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <img class="logo" src="{{ asset('assets/logos/kaure-logo.webp') }}" alt="Kaure Ocean Logo" width="42" height="42" style="border-radius:50%;" onerror="this.src='https://via.placeholder.com/150x45?text=Kaure+Ocean'">
                <span class="d-flex flex-column">
                    <b style="color: var(--ink); font-family:'Shippori Mincho',serif; font-size:1.15rem; letter-spacing:.04em;">KAURE <span style="color:var(--red)">OCEAN</span></b>
                    <small class="font-jp" style="color: var(--mute); font-size:0.68rem;">カウレ オーシャン 日本語学校</small>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#kaureNavbar" aria-controls="kaureNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="kaureNavbar">
                <ul class="navbar-nav align-items-center gap-lg-2 mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('about-us') || request()->is('mission-vision') || request()->is('leadership') || request()->is('our-team') ? 'active' : '' }}" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item py-2" href="{{ url('/about-us') }}">Company Profile</a></li>
                            <li><a class="dropdown-item py-2" href="{{ url('/mission-vision') }}">Mission & Vision</a></li>
                            <li><a class="dropdown-item py-2" href="{{ url('/leadership') }}">Leadership Message</a></li>
                            <li><a class="dropdown-item py-2" href="{{ url('/our-team') }}">Our Team</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('japanese-language') || request()->is('jlpt-preparation') || request()->is('training') ? 'active' : '' }}" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Japanese Language
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="langDropdown">
                            <li><a class="dropdown-item py-2" href="{{ url('/japanese-language') }}">Language School Overview</a></li>
                            <li><a class="dropdown-item py-2" href="{{ url('/jlpt-preparation') }}">JLPT Preparation (N5-N1)</a></li>
                            <li><a class="dropdown-item py-2" href="{{ url('/training') }}">Professional Training</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('training') ? 'active' : '' }}" href="{{ url('/training') }}">Training</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('japan-opportunities/*') || request()->is('recruitment-process') ? 'active' : '' }}" href="#" id="oppDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Japan Opportunities
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="oppDropdown">
                            <li><a class="dropdown-item py-2" href="{{ url('/japan-opportunities/ssw') }}">SSW Program (特定技能)</a></li>
                            <li><a class="dropdown-item py-2" href="{{ url('/japan-opportunities/titp') }}">TITP Program (技能実習)</a></li>
                            <li><a class="dropdown-item py-2" href="{{ url('/recruitment-process') }}">Recruitment Process</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('blog*') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a></li>

                    <li class="nav-item"><a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ url('/contact-us') }}">Contact Us</a></li>
                    <li class="nav-item ms-lg-3">
                        <a href="{{ url('/apply-now') }}" class="btn btn-kaure-primary btn-sm">Apply Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
