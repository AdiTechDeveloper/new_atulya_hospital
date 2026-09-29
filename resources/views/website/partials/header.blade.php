<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset(setting('logo')) }}" alt="{{ setting('hospital_name') }}">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button type="button"><i class="fas fa-times"></i></button>
                    </div>
                </div>

                @php
                    $headerDepartments = \App\Models\Department::where('is_active', true)
                        ->orderBy('sort_order')
                        ->orderBy('id')
                        ->get();
                @endphp

                <div class="mobile-nav-menu">
                    <ul>
                        <li class="mobile-has-dropdown">
                            <div class="mobile-menu-link">
                                <a href="{{ url('/about') }}">About Us</a>
                                <button type="button" class="mobile-submenu-toggle" aria-label="Toggle About Us">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <ul class="mobile-submenu">
                                <li><a href="{{ url('/doctors') }}">Our Doctors</a></li>
                                <li><a href="{{ url('/icu') }}">Emergency & ICU</a></li>
                                <li><a href="{{ url('/facilities') }}">Facilities</a></li>
                            </ul>
                        </li>

                        <li class="mobile-has-dropdown">
                            <div class="mobile-menu-link">
                                <a href="{{ url('/departments') }}">Department</a>
                                <button type="button" class="mobile-submenu-toggle" aria-label="Toggle Department">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                            <ul class="mobile-submenu department-mobile-menu">
                                @foreach($headerDepartments as $department)
                                    <li>
                                        <a href="{{ route('departments.show', $department->slug) }}">
                                            {{ $department->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="{{ url('/patient-corner') }}">Patient Corner</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="social-icon d-flex align-items-center">
                    <a href="https://www.facebook.com/AtulyaSuperSpecialityHospital/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/@atulyasuperspecialityhospital" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                    <a href="https://maps.app.goo.gl/Q57Xx13m5LiAcwwA6" target="_blank" rel="noopener noreferrer"><i class="fas fa-map-marker-alt"></i></a>
                    <a href="https://www.instagram.com/atulya_superspeciality/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                </div>

                <div class="offcanvas__contact">
                    <h3>Information</h3>
                    <ul class="contact-list">
                        <li>
                            <span>Address:</span>
                            Atulya Super Speciality Hospital & ICU,<br>
                            206–214, 2nd Floor, Elite Magnum,<br>
                            Bhuyangdev Cross Road,<br>
                            Ahmedabad – 380061, Gujarat
                        </li>
                        <li>
                            <span>Call Us:</span>
                            <a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a>
                        </li>
                    </ul>
                </div>

                <a href="{{ url('/contact') }}" class="theme-btn">
                    <i class="far fa-chevron-right"></i> Appointment
                </a>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
</div>

<div class="header-top-section">
    <div class="container">
        <div class="header-top-wrapper">
            <p>
                {{ setting('hospital_name') }} – Quality Healthcare With Compassionate Care
                <a href="{{ url('/contact') }}">Contact Us</a>.
            </p>
            <ul class="top-list">
                <li><i class="fas fa-phone"></i><a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a></li>
                <li><i class="far fa-clock"></i><p>24/7 Emergency Care</p></li>
                <li><i class="fal fa-map-pin"></i><p>Ahmedabad, Gujarat</p></li>
            </ul>
        </div>
    </div>
</div>

<header id="header-sticky" class="header-section header-1">
    <div class="container">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <a href="{{ url('/') }}" class="header-logo1">
                        <img width="220" src="{{ asset('assets/img/logo/Atulya-logo.png') }}" alt="{{ setting('hospital_name') }}">
                    </a>
                </div>

                <div class="header-right">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu desktop-menu">
                            <nav>
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="{{ url('/about') }}">About Us <i class="fas fa-chevron-down"></i></a>
                                        <ul class="submenu about-menu">
                                            <li><a href="{{ url('/doctors') }}">Our Doctors</a></li>
                                            <li><a href="{{ url('/icu') }}">Emergency & ICU</a></li>
                                            <li><a href="{{ url('/facilities') }}">Facilities</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown department-dropdown">
                                        <a href="{{ url('/departments') }}">Department <i class="fas fa-chevron-down"></i></a>
                                        <ul class="department-mega-menu">
                                            @foreach($headerDepartments as $department)
                                                <li>
                                                    <a href="{{ route('departments.show', $department->slug) }}">
                                                        {{ $department->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li><a href="{{ url('/patient-corner') }}">Patient Corner</a></li>
                                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header-contact-info">
                        <div class="info-items">
                            <div class="icon"><i class="flaticon-support"></i></div>
                            <div class="content">
                                <span>Call Emergency</span>
                                <h6><a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a></h6>
                            </div>
                        </div>
                        <a href="{{ url('/appointment') }}" class="theme-btn">
                            <i class="far fa-chevron-right"></i> Appointment
                        </a>
                    </div>

                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle"><i class="fal fa-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
.header-main{display:flex;align-items:center;justify-content:space-between;padding:15px 0}
.header-left{max-width:60%}.header-left img{max-width:220px;height:auto}
.header-right{display:flex;align-items:center;justify-content:flex-end;gap:15px}
.desktop-menu>nav>ul{display:flex;align-items:center}
.desktop-menu>nav>ul>li{position:relative}
.desktop-menu>nav>ul>li.has-dropdown>a{display:flex;align-items:center;gap:7px}
.desktop-menu>nav>ul>li.has-dropdown>a i{font-size:10px}
.desktop-menu .submenu,
.department-mega-menu{position:absolute;top:calc(100% + 5px);left:0;margin:0;padding:7px 0;background:#fff;list-style:none;opacity:0;visibility:hidden;transform:translateY(8px);transition:.2s ease;box-shadow:0 8px 25px rgba(0,0,0,.1);z-index:99999}
.desktop-menu .has-dropdown:hover>.submenu,
.desktop-menu .has-dropdown:hover>.department-mega-menu{opacity:1;visibility:visible;transform:translateY(0)}
.desktop-menu .submenu{min-width:205px}
.desktop-menu .submenu li,.department-mega-menu li{display:block;margin:0;padding:0}
.desktop-menu .submenu li a,.department-mega-menu li a{display:block;padding:9px 16px;color:#222;font-size:14px;font-weight:500;text-decoration:none;background:transparent!important;transition:color .2s}
.desktop-menu .submenu li a:hover,.department-mega-menu li a:hover{color:#00aaa8;background:transparent!important}
.department-mega-menu{
    left:50%;
    width:max-content;
    padding:8px 12px;
    display:grid;
    grid-template-columns:200px 200px;
    column-gap:10px;
}

.department-mega-menu li a{
    padding:5px 6px;
    font-size:12px;
    line-height:1.2;
    border-bottom:1px solid #eee;
}

.department-mega-menu li:nth-last-child(-n+2) a{
    border-bottom:0;
}

.offcanvas__info{position:fixed;top:0;right:-400px;width:400px;max-width:90%;height:100vh;background:#fff;z-index:99999;overflow-y:auto;padding:20px;transition:right .35s ease}
.offcanvas__info.info-open{right:0}
.offcanvas__overlay{position:fixed;inset:0;background:rgba(0,0,0,.6);z-index:99998;opacity:0;visibility:hidden;transition:.25s}
.offcanvas__overlay.overlay-open{opacity:1;visibility:visible}
.mobile-nav-menu>ul,.mobile-submenu{list-style:none;padding:0;margin:0}
.mobile-nav-menu>ul>li{border-bottom:1px solid #eee}
.mobile-nav-menu li a{display:block;padding:13px 5px;color:#111;font-size:16px;font-weight:500;text-decoration:none}
.mobile-nav-menu li a:hover{color:#00aaa8}
.mobile-menu-link{display:flex;align-items:center;justify-content:space-between}
.mobile-menu-link>a{flex:1}
.mobile-submenu-toggle{width:42px;height:42px;border:0;background:transparent;display:flex;align-items:center;justify-content:center;color:#111}
.mobile-submenu{display:none;background:#fafafa}
.mobile-has-dropdown.active>.mobile-submenu{display:block}
.mobile-has-dropdown.active .mobile-submenu-toggle i{transform:rotate(180deg)}
.mobile-submenu li{border-top:1px solid #eee}
.mobile-submenu li a{padding:10px 20px;font-size:14px}
.social-icon{gap:12px;margin:22px 0}.social-icon a{display:flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:50%;text-decoration:none}
.offcanvas__contact{margin-top:18px}.offcanvas__contact h3{margin-bottom:12px}
.offcanvas__contact .contact-list{list-style:none;padding:0;margin:0}
.offcanvas__contact .contact-list li{margin-bottom:14px;line-height:1.6}
.offcanvas__contact .contact-list li span{display:block;font-weight:600;margin-bottom:3px}
.offcanvas__contact .contact-list li a{color:inherit;text-decoration:none}

@media(max-width:1199px){
    .desktop-menu,.header-contact-info{display:none!important}
    .header__hamburger{display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:24px}
}
@media(max-width:575px){
    .offcanvas__info{width:100%;max-width:100%;right:-100%}
    .header-left img{max-width:180px}
    .offcanvas__top{margin-bottom:25px}
}
</style>

<script>
document.addEventListener('DOMContentLoaded',function(){
    const menu=document.querySelector('.offcanvas__info');
    const overlay=document.querySelector('.offcanvas__overlay');
    const openers=document.querySelectorAll('.sidebar__toggle');
    const close=document.querySelector('.offcanvas__close button');

    function closeMenu(){
        menu?.classList.remove('info-open');
        overlay?.classList.remove('overlay-open');
    }

    openers.forEach(btn=>btn.addEventListener('click',e=>{
        e.preventDefault();
        menu?.classList.add('info-open');
        overlay?.classList.add('overlay-open');
    }));

    close?.addEventListener('click',closeMenu);
    overlay?.addEventListener('click',closeMenu);

    document.querySelectorAll('.mobile-has-dropdown').forEach(item=>{
        const trigger=item.querySelector(':scope > .mobile-menu-link > a');
        const button=item.querySelector(':scope > .mobile-menu-link > .mobile-submenu-toggle');
        const toggle=e=>{
            e.preventDefault();
            item.classList.toggle('active');
        };
        trigger?.addEventListener('click',toggle);
        button?.addEventListener('click',toggle);
    });

    document.querySelectorAll('.mobile-submenu a').forEach(link=>{
        link.addEventListener('click',closeMenu);
    });
});
</script>
