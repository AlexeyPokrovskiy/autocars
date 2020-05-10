<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <title>@yield("title")</title>
    <meta  name="description" content="@yield("meta_description")">
    <meta name="yandex-verification" content="0ced6f1bf4142ef2" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/images/favicon.png">
    <link rel="shortcut icon" href="/images/favicon.png">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="/css/font/flaticon.css" rel="stylesheet">
    <link href="{{ mix('/css/theme/all.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88400030-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-88400030-3');
    </script>
</head>
{{--<body class="drag mobile-menu-second">--}}
<body>
<!-- Start Header -->
<!-- Start top bar -->
<div class="d-none d-md-block">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12">
                    <div class="top-contact">
                        <ul>
{{--                            <li><a href="/#" class="text-dark-grey "><i class="fas fa-phone-alt"></i> +380 93 158 84 85</a>--}}
{{--                            </li>--}}
                            <li><a href="/#" class="text-dark-grey"><i class="fas fa-map-marker-alt"></i> Украина</a>
                            </li>
{{--                            <li><a href="/#" class="text-dark-grey"><i class="fas fa-crosshairs"></i> Cars Around me</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12">
                    <div class="top-contact float-right">
                        <ul>
                            <li class="border-left-0">
                                <a href="login.html" class="text-dark-grey">
                                    <img src="/images/user.png" class="rounded-circle" alt="#">Войти
                                </a>
                            </li>
{{--                            <li class="dropdown">--}}
{{--                                <a href="javascript:void(0)" class="text-dark-grey" data-toggle="dropdown">--}}
{{--                                    <img src="/images/usa.png" class="rounded-circle" alt="#">USD <i class="fas fa-caret-down"></i>--}}
{{--                                </a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li>--}}
{{--                                        <a href="/#" class="text-dark-grey">--}}
{{--                                            <img src="/images/italy.png" class="rounded-circle" alt="#">EUR</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="/#" class="text-dark-grey">--}}
{{--                                            <img src="/images/germany.png" class="rounded-circle" alt="#">GBP</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li class="dropdown border-right"><a href="javascript:void(0)" class="text-dark-grey" data-toggle="dropdown">Помощь <i class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact.html" class="text-dark-grey">Контакты </a>
                                    </li>
                                    <li><a href="contact.html" class="text-dark-grey">Поддержка </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header sec 1 -->
    <header id="menu-style-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="/">
                            <img src="/images/favicon.png" class="img-fluid" alt="Logo" style="height: 60px;">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="searchbox align-item-center">
                        <div class="input-group">
                            <input type="text" class="form-control h-100" placeholder="Введите марку, модель авто">
                            <div class="input-group-prepend catergory-selct">
                                <ul class="list-unstyled cat-selc">
                                    <li class="init">Все категории <i class="fas fa-caret-down"></i>
                                    </li>
                                    <li data-value="Luxury Car"><i class="flaticon-supercar"></i> Легковые</li>
                                    <li data-value="Sports Car"><i class="flaticon-sportive-car"></i> Мото</li>
                                    <li data-value="Economy Car"><i class="flaticon-coupe-car"></i> Грузовики</li>
                                    <li data-value="Vintage Car"><i class="flaticon-vintage-car"></i> Спецтехника</li>
                                    <li data-value="Excutive Car"><i class="flaticon-minivan-car"></i> Автобусы</li>
                                </ul>
                            </div>
                            <div class="input-group-prepend">
                                <button class="btn-second orange-btn" type="submit">Искать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="cart-sec float-right">
                        <ul>
                            <li><a href="/#" class="text-dark-grey"><i class="flaticon-reload"></i></a>
                            </li>
                            <li><a href="/#" class="text-dark-grey"><i class="flaticon-like"></i></a>
                                <span class="pro-value bg-orange">0</span>
                            </li>
{{--                            <li><a href="/#" class="text-light-black"><i class="flaticon-shopping-cart text-dark-grey"></i>$ 0</a>--}}
{{--                                <span class="pro-value bg-orange">0</span>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header sec 1 -->
</div>
<!-- End top bar -->
<!-- Start Mobile Menu -->
<div class="mobile-menu d-block d-md-none">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="top-contact">
                        <ul>
                            <li><a href="/#" class="text-dark-grey "><i class="fas fa-phone-alt"></i> +123 4567 8910</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="top-contact float-right">
                        <ul>
                            <li class="border-left-0">
                                <a href="login.html" class="text-dark-grey">
                                    <img src="/images/user.png" class="rounded-circle" alt="#">Войти</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav">
        <div class="container">
            <div class="row" id="main-sec">
                <div class="col-sm-9 col-6">
                    <div class="logo">
                        <a href="/">
                            <img src="/images/120x50logo.jpg" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="mobile-search align-item-center">
                        <div class="input-group">
                            <input type="text" class="form-control h-100" placeholder="Search keywords, category, brand of part">
                            <div class="input-group-append">
                                <button class="btn-second orange-btn" type="submit"><i class="flaticon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-6">
                    <div class="mobile-search align-item-center">
                        <div class="mobile-cart  float-right">
                            <div class="cart-sec">
                                <ul>
                                    <li class="mob-search" id="search-btn"><a href="/#" class="text-dark-grey"><i class="flaticon-search"></i></a>
                                    </li>
                                    <li><a href="/#" class="text-dark-grey"><i class="flaticon-like"></i></a>
                                        <span class="pro-value bg-orange">5</span>
                                    </li>
{{--                                    <li><a href="/#" class="text-light-black"><i class="flaticon-shopping-cart text-dark-grey"></i></a>--}}
{{--                                        <span class="pro-value bg-orange">5</span>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row none" id="show-search">
                <div class="col-12">
                    <div class="mobile-search-new align-item-center"> <span class="close-icon" id="close">X</span>
                        <div class="input-group">
                            <input type="text" class="form-control h-100" placeholder="Введите марку, модель авто">
                            <div class="input-group-append">
                                <button class="btn-second orange-btn" type="submit"><i class="flaticon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id="mobile-mySidenav" class="sidenav">
                    <div class="side-nav-wrapper"> <span class="float-left ">Car Stock</span>
                        <span class="float-right">
                          <a href="javascript:void(0)" class="closebtn" id="mobile-close-nav">X</a>
                          </span>
                        <ul>
                            <li class="custom-dropdown-nav"><a href="javascript:void(0)" class="text-custom-white"><h3 class="mb-0">Home</h3></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/">Landing Page</a>
                                    </li>
                                    <li><a href="homepage-2.html">Home 1</a>
                                    </li>
                                    <li><a href="homepage-3.html">Home 3</a>
                                    </li>
                                    <li><a href="homepage-4.html">Home 4</a>
                                    </li>
                                    <li><a href="homepage-5.html">Home 5</a>
                                    </li>
                                    <li><a href="homepage-6.html">Home 6</a>
                                    </li>
                                    <li><a href="homepage-7.html">Home 7</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="in-media.html"><h3 class="mb-0">Media</h3></a>
                            </li>
                            <li class="custom-dropdown-nav"><a href="javascript:void(0)"><h3 class="mb-0">Pages</h3></a>
                                <ul class="dropdown-menu">
                                    <li><a href="listing.html">Listing</a>
                                    </li>
                                    <li><a href="listing-1.html">Listing 1</a>
                                    </li>
                                    <li><a href="listing-2.html">Listing 2</a>
                                    </li>
                                    <li><a href="listing-3.html">Listing 3</a>
                                    </li>
                                    <li><a href="listing-4.html">Listing 4</a>
                                    </li>
                                    <li><a href="listing-1-style-2.html">Listing 1 Style 2</a>
                                    </li>
                                    <li><a href="listing-2-style-2.html">Listing 2 Style 2</a>
                                    </li>
                                    <li><a href="add-listing.html">Add Listing</a>
                                    </li>
                                    <li><a href="about.html">About Us</a>
                                    </li>
                                    <li><a href="car-details.html">Car Details</a>
                                    </li>
                                    <li><a href="car-page.html">Car Page</a>
                                    </li>
                                    <li><a href="user-page.html">User</a>
                                    </li>
                                    <li><a href="register.html">Register</a>
                                    </li>
                                    <li><a href="login.html">Login</a>
                                    </li>
                                    <li><a href="invoice.html">Invoice</a>
                                    </li>
                                    <li><a href="404.html">404</a>
                                    </li>
                                    <li><a href="coming-soon.html">Coming Soon</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="custom-dropdown-nav"><a href="javascript:void(0)" class="text-custom-white"><h3 class="mb-0">Blog</h3></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog Grid</a>
                                    </li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                    </li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                    </li>
                                    <li><a href="blog-details.html">Blog Single</a>
                                    </li>
                                    <li><a href="blog-details-gallery.html">Blog Gallery</a>
                                    </li>
                                    <li><a href="blog-details-video.html">Blog Video</a>
                                    </li>
                                    <li><a href="blog-details-quote.html">Blog Quote</a>
                                    </li>
                                    <li><a href="blog-details-left.html">Blog Details Left</a>
                                    </li>
                                    <li><a href="blog-details-right.html">Blog Details Right</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="pricing.html"><h3 class="mb-0">Pricing</h3></a>
                            </li>
                            <li><a href="contact.html"><h3 class="mb-0">Контакты</h3></a>
                            </li>
                        </ul>
                        <div class="mobile-social-icon">
                            <ul>
                                <li><a href="/#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="/#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="/#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li><a href="/#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Menu -->
<!-- Desktop Menu -->
<div id="menu-style-2" class="bg-orange">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10">
                <div class="category-sec-head bg-custom-black p-relative"><span class="black-sepreta"></span>
                    <button class="text-custom-white full-width bg-transparent fw-600 category-button" id="categoryheadaccordionbtn"><i class="flaticon-menu"></i> Все категории</button>
                    <div id="accordion" class="categoryheadaccordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 rubik">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="flaticon-supercar"></i> Легковые
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        Мото
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 rubik">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="flaticon-sportive-car"></i> Грузовики
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0 rubik">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="flaticon-coupe-car"></i> Спецтехника
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-8 col-sm-6 col-2">
                <div class="navigation">
                    <nav class="d-none d-md-block">
                        <ul>
                            <li class="menu-item active "><a href="/" class="text-custom-white fw-600 ">Главная</a>
                            </li>
                            <li class="menu-item"><a href="/listing" class="text-custom-white fw-600">Автомобили б/у</a>
                            </li>
                            <li class="menu-item"><a href="/listing" class="text-custom-white fw-600">Новые авто</a>
                            </li> <li class="menu-item"><a href="/listing" class="text-custom-white fw-600">Новости</a>
                            </li>

                            <li class="menu-item"><a href="contact.html" class="text-custom-white fw-600">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="d-block d-md-none" type="button" id="mobile-open-nav"><i class="flaticon-menu"></i>
                    </button>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12">
                <div class="shipping-content">
                    <p class="no-margin"><a href="/#" class="text-custom-white no-margin fw-500 text-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Desktop Menu -->
<!-- End Header -->
@yield('content')

<!-- Start Footer -->
<footer class="bg-custom-black" id="footer-style-1">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="row ft-space">
                        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-8">
                            <div class="footer-box ft-space-col">
                                <div class="ft-logo">
                                    <a href="index.html">
                                        <img src="/images/favicon.png" style="height: 50px;" class="img-fluid" alt="Logo">
                                    </a>
                                </div>
                                <p class="text-dark-white ">Car-stock — наиболее крупный авто базар Украины среди всех отечественных сайтов подобного рода. В намерении помочь как покупателям транспортных средств, так и желающим их продать, мы разработали удобный и масштабный ресурс, представленный в виде доски онлайн-объявлений.</p>
{{--                                <div class="space-20"></div>--}}
{{--                                <label class="text-custom-white fw-600 ">Address:</label>--}}
{{--                                <p class="text-dark-white ">45 Grand Central Terminal New York--}}
{{--                                    <br>NY 1245, United State USA</p>--}}
{{--                                <label class="text-custom-white fw-600 ">Email:</label>--}}
{{--                                <p><a href="mailto:" class="text-dark-white ">Support@demosite.com</a>--}}
{{--                                </p>--}}
{{--                                <label class="text-custom-white fw-600 ">Phone:</label>--}}
{{--                                <p><a href="tel:" class="text-dark-white ">+123 4567 8910</a>--}}
{{--                                </p>--}}
                            </div>
                        </div>
                        <div class="offset-xl-1 col-xl-4 offset-lg-1 col-lg-4 col-md-6 col-sm-4">
                            <div class="footer-box ft-space-col">
                                <h5 class="text-custom-white">Quick Links</h5>
                                <ul>
                                    <li><a href="index.html#" class="text-dark-white ">Support</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Helpline</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Affilates</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Live Support</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Customer Care</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-8">
                            <div class="footer-box ft-space-col">
                                <h5 class="text-custom-white">Informations</h5>
                                <ul>
                                    <li><a href="index.html#" class="text-dark-white ">About Us</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Customer Services</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Privacy and Policy</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Order & Returns</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Shipping Policy</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Our Sitemap</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-4">
                            <div class="footer-box">
                                <h5 class="text-custom-white">My Account</h5>
                                <ul>
                                    <li><a href="index.html#" class="text-dark-white ">Balance</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Checkout</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Cards</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Track Order</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Terms</a>
                                    </li>
                                    <li><a href="index.html#" class="text-dark-white ">Site Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12  align-self-center"> <a href="index.html#" class="text-custom-white ">© Car-stock - 2020 | All Right Reserved</a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="social-icons text-center">
                        <ul>
                            <li><a href="index.html#" class="text-dark-white"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="index.html#" class="text-dark-white"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="index.html#" class="text-dark-white"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li><a href="index.html#" class="text-dark-white"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="payement-cards">
                        <ul>
                            <li>
                                <img src="/images/card-1.png" alt="Payment Icons">
                            </li>
                            <li>
                                <img src="/images/card-2.jpg" alt="Payment Icons">
                            </li>
                            <li>
                                <img src="/images/card-3.jpg" alt="Payment Icons">
                            </li>
                            <li>
                                <img src="/images/card-4.png" alt="Payment Icons">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<div class="modal fade" id="videomodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
{{--                <iframe src="https://www.youtube.com/embed/AdZrEIo6UYU" allow="autoplay"></iframe>--}}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-left no-margin"><i class="fas fa-unlock-alt mr-2"></i> <span id="signup-text">Sign Up</span><span
                        id="signin-text" class="none">Sign In</span></h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Sign up form -->
            <div class="modal-body" id="signup-form">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" name="#" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="#" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-second orange-btn full-width">Sign Up</button>
                    </div>
                </form>
                <div class="form-excerpts">
                    <ul>
                        <li>Already a member? <a href="javascript:void(0)" id="signin-btn">Sign In</a>
                        </li>
                        <li><a href="/#">Recover Password</a>
                        </li>
                    </ul>
                </div>
                <div class="social-login"> <span>Or Signup with</span>
                    <div class="social-btn"> <a href="/#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="/#" class="google"><i class="fab fa-google-plus-g"></i> Google</a>
                    </div>
                </div>
            </div>
            <!-- Sign up form -->
            <!-- Sign in form -->
            <div class="modal-body none" id="signin-form">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="#" placeholder="Username or Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="#" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="#">Keep me signed in <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-second orange-btn full-width">Sign In</button>
                    </div>
                </form>
                <div class="form-excerpts">
                    <ul>
                        <li>Not a member? <a href="javascript:void(0)" id="signup-btn">Sign Up</a>
                        </li>
                        <li><a href="/#">Recover Password</a>
                        </li>
                    </ul>
                </div>
                <div class="social-login"> <span>Or connect with</span>
                    <div class="social-btn"> <a href="/#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="/#" class="google"><i class="fab fa-google-plus-g"></i> Google</a>
                    </div>
                </div>
            </div>
            <!-- Sign in form -->
        </div>
    </div>
</div>
<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>

<!-- Place all Scripts Here -->
<script src="{{ mix('/js/theme/all.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>


</body>

</html>
