@extends('layouts.app')
@section('title',"AutoCar | Car Stock | Homepage Главная")
@section('meta_description',"CARSTOCK.COM.UA — купить новые и б/у автомобилей. Авторынок онлайн. Автобазар, крупнейший в Украине, все обьявления. Обьявления продажи авто. Каталоги автомобилей и продавцов на карсток.")

@section('content')
<!-- Slider Section -->
<section class="p-relative">
    <div class="main-slider home-2">
        <div class="slider-item">
            <img src="/images/banner/bannerh4.jpg" alt="Slider" class="img-fluid full-width">
            <div class="contant-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner-text text-center">
                                <p class="text-custom-white  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Найди машину своей мечты</p>
                                <h1 class="text-custom-white fw-900  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Откройте для себя автомобиль <br><span class="text-orange">который подходит именно</span> вам!</h1>
{{--                                <div class="space-30"></div> <a href="index.html#" class="btn-second orange-btn  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Learn More</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-overlay"></div>
        </div>
        <div class="slider-item">
            <img src="/images/banner/bannerh4a.jpg" alt="Slider" class="img-fluid full-width">
            <div class="contant-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner-text text-center">
                                <p class="text-custom-white  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Найди машину своей мечты</p>
                                <h2 class="text-custom-white fw-900  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Откройте для себя и купите автомобиль <br><span class="text-orange">который подходит именно </span> вам!</h2>
{{--                                <div class="space-30"></div> <a href="index.html#" class="btn-second black-btn  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Book Now</a><a href="index.html#" class="btn-second orange-btn  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Learn More</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-overlay"></div>
        </div>
{{--        <div class="slider-item">--}}
{{--            <img src="/images/banner/bannerh12.jpg" alt="Slider" class="img-fluid full-width">--}}
{{--            <div class="contant-wrapper">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="banner-text text-center">--}}
{{--                                <p class="text-custom-white  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Получи машину своей мечты</p>--}}
{{--                                <h1 class="text-custom-white fw-900  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Audi R8 Marine <br><span class="text-orange">$ 199</span> Monthly</h1>--}}
{{--                                <div class="space-30"></div> <a href="index.html#" class="btn-second orange-btn  wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">Test Drive Today</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="slider-overlay"></div>--}}
{{--        </div>--}}
    </div>
    <div class="main-slider-arrows">
        <div class="main-slider-prevtab slick-arrow"> <i class="flaticon-left-chevron"></i>
        </div>
        <div class="main-slider-nexttab slick-arrow"> <i class="flaticon-right-chevron"></i>
        </div>
    </div>
</section>
<!-- Slider Section -->
<!-- car-search-form -->
<div class="car-search-form-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="car-search-form">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link text-custom-white active" data-toggle="tab" href="index.html#allcondition">All Condition</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link text-custom-white" data-toggle="tab" href="index.html#newcar">New Cars</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link text-custom-white" data-toggle="tab" href="index.html#usedcar">Used Cars</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link text-custom-white" data-toggle="tab" href="index.html#certifiedusedcar">Certified Used Cars</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="allcondition">
                            <form>
                                <div class="row">
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Make</option>
                                            <option value="acura">Acura (1)</option>
                                            <option value="bmw">BMW (2)</option>
                                            <option value="chevrolet">Chevrolet (4)</option>
                                            <option value="ford">Ford (4)</option>
                                            <option value="honda">Honda (2)</option>
                                            <option value="hyundai">Hyundai (1)</option>
                                            <option value="kia">Kia (3)</option>
                                            <option value="lamborghini">Lamborghini (1)</option>
                                            <option value="lexus">Lexus (2)</option>
                                            <option value="mazda">Mazda (3)</option>
                                            <option value="mercedes-benz">Mercedes-Benz (0)</option>
                                            <option value="nissan">Nissan (3)</option>
                                            <option value="tesla">Tesla (1)</option>
                                            <option value="toyota">Toyota (3)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Model</option>
                                            <option value="1-series">1 Series (1)</option>
                                            <option value="3-serie-model">3 Series (1)</option>
                                            <option value="370z">370Z (1)</option>
                                            <option value="5-active">5 Active (1)</option>
                                            <option value="accord">Accord (1)</option>
                                            <option value="altima">Altima (1)</option>
                                            <option value="avalon">Avalon (1)</option>
                                            <option value="c-class">C-Class (0)</option>
                                            <option value="camry">Camry (1)</option>
                                            <option value="civic">Civic (1)</option>
                                            <option value="cr-v">CR-V (0)</option>
                                            <option value="cruze">Cruze (2)</option>
                                            <option value="cx-5">CX-5 (1)</option>
                                            <option value="e-class">E-Class (0)</option>
                                            <option value="elantra">Elantra (1)</option>
                                            <option value="es-300h">ES 300h (0)</option>
                                            <option value="explorer">Explorer (1)</option>
                                            <option value="flying-spur">Flying Spur (0)</option>
                                            <option value="focus">Focus (2)</option>
                                            <option value="g-class">G-Class (0)</option>
                                            <option value="huracan">Huracan (1)</option>
                                            <option value="is-250-c">IS 250 C (1)</option>
                                            <option value="malibu">Malibu (1)</option>
                                            <option value="model-x">Model X (1)</option>
                                            <option value="mustang">Mustang (1)</option>
                                            <option value="mx-5">MX-5 (1)</option>
                                            <option value="pilot">Pilot (0)</option>
                                            <option value="rdx">RDX (1)</option>
                                            <option value="rio">Rio (1)</option>
                                            <option value="rx-350">RX 350 (1)</option>
                                            <option value="silverado">Silverado (1)</option>
                                            <option value="sorento">Sorento (1)</option>
                                            <option value="soul">Soul (1)</option>
                                            <option value="tacoma">Tacoma (1)</option>
                                            <option value="veloster">Veloster (0)</option>
                                            <option value="versa">Versa (1)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Max Price</option>
                                            <option value="5000">$5 000</option>
                                            <option value="10000">$10 000</option>
                                            <option value="15000">$15 000</option>
                                            <option value="20000">$20 000</option>
                                            <option value="30000">$30 000</option>
                                            <option value="40000">$40 000</option>
                                            <option value="50000">$50 000</option>
                                            <option value="70000">$70 000</option>
                                            <option value="80000">$80 000</option>
                                            <option value="100000">$100 000</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Enter a location">
                                        </div>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <button class="btn-second orange-btn full-width" type="button"><i class="flaticon-search"></i> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="newcar">
                            <form>
                                <div class="row">
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Make</option>
                                            <option value="acura">Acura (1)</option>
                                            <option value="bmw">BMW (2)</option>
                                            <option value="chevrolet">Chevrolet (4)</option>
                                            <option value="ford">Ford (4)</option>
                                            <option value="honda">Honda (2)</option>
                                            <option value="hyundai">Hyundai (1)</option>
                                            <option value="kia">Kia (3)</option>
                                            <option value="lamborghini">Lamborghini (1)</option>
                                            <option value="lexus">Lexus (2)</option>
                                            <option value="mazda">Mazda (3)</option>
                                            <option value="mercedes-benz">Mercedes-Benz (0)</option>
                                            <option value="nissan">Nissan (3)</option>
                                            <option value="tesla">Tesla (1)</option>
                                            <option value="toyota">Toyota (3)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Model</option>
                                            <option value="1-series">1 Series (1)</option>
                                            <option value="3-serie-model">3 Series (1)</option>
                                            <option value="370z">370Z (1)</option>
                                            <option value="5-active">5 Active (1)</option>
                                            <option value="accord">Accord (1)</option>
                                            <option value="altima">Altima (1)</option>
                                            <option value="avalon">Avalon (1)</option>
                                            <option value="c-class">C-Class (0)</option>
                                            <option value="camry">Camry (1)</option>
                                            <option value="civic">Civic (1)</option>
                                            <option value="cr-v">CR-V (0)</option>
                                            <option value="cruze">Cruze (2)</option>
                                            <option value="cx-5">CX-5 (1)</option>
                                            <option value="e-class">E-Class (0)</option>
                                            <option value="elantra">Elantra (1)</option>
                                            <option value="es-300h">ES 300h (0)</option>
                                            <option value="explorer">Explorer (1)</option>
                                            <option value="flying-spur">Flying Spur (0)</option>
                                            <option value="focus">Focus (2)</option>
                                            <option value="g-class">G-Class (0)</option>
                                            <option value="huracan">Huracan (1)</option>
                                            <option value="is-250-c">IS 250 C (1)</option>
                                            <option value="malibu">Malibu (1)</option>
                                            <option value="model-x">Model X (1)</option>
                                            <option value="mustang">Mustang (1)</option>
                                            <option value="mx-5">MX-5 (1)</option>
                                            <option value="pilot">Pilot (0)</option>
                                            <option value="rdx">RDX (1)</option>
                                            <option value="rio">Rio (1)</option>
                                            <option value="rx-350">RX 350 (1)</option>
                                            <option value="silverado">Silverado (1)</option>
                                            <option value="sorento">Sorento (1)</option>
                                            <option value="soul">Soul (1)</option>
                                            <option value="tacoma">Tacoma (1)</option>
                                            <option value="veloster">Veloster (0)</option>
                                            <option value="versa">Versa (1)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Max Price</option>
                                            <option value="5000">$5 000</option>
                                            <option value="10000">$10 000</option>
                                            <option value="15000">$15 000</option>
                                            <option value="20000">$20 000</option>
                                            <option value="30000">$30 000</option>
                                            <option value="40000">$40 000</option>
                                            <option value="50000">$50 000</option>
                                            <option value="70000">$70 000</option>
                                            <option value="80000">$80 000</option>
                                            <option value="100000">$100 000</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Enter a location">
                                        </div>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <button class="btn-second orange-btn full-width" type="button"><i class="flaticon-search"></i> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="usedcar">
                            <form>
                                <div class="row">
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Make</option>
                                            <option value="acura">Acura (1)</option>
                                            <option value="bmw">BMW (2)</option>
                                            <option value="chevrolet">Chevrolet (4)</option>
                                            <option value="ford">Ford (4)</option>
                                            <option value="honda">Honda (2)</option>
                                            <option value="hyundai">Hyundai (1)</option>
                                            <option value="kia">Kia (3)</option>
                                            <option value="lamborghini">Lamborghini (1)</option>
                                            <option value="lexus">Lexus (2)</option>
                                            <option value="mazda">Mazda (3)</option>
                                            <option value="mercedes-benz">Mercedes-Benz (0)</option>
                                            <option value="nissan">Nissan (3)</option>
                                            <option value="tesla">Tesla (1)</option>
                                            <option value="toyota">Toyota (3)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Model</option>
                                            <option value="1-series">1 Series (1)</option>
                                            <option value="3-serie-model">3 Series (1)</option>
                                            <option value="370z">370Z (1)</option>
                                            <option value="5-active">5 Active (1)</option>
                                            <option value="accord">Accord (1)</option>
                                            <option value="altima">Altima (1)</option>
                                            <option value="avalon">Avalon (1)</option>
                                            <option value="c-class">C-Class (0)</option>
                                            <option value="camry">Camry (1)</option>
                                            <option value="civic">Civic (1)</option>
                                            <option value="cr-v">CR-V (0)</option>
                                            <option value="cruze">Cruze (2)</option>
                                            <option value="cx-5">CX-5 (1)</option>
                                            <option value="e-class">E-Class (0)</option>
                                            <option value="elantra">Elantra (1)</option>
                                            <option value="es-300h">ES 300h (0)</option>
                                            <option value="explorer">Explorer (1)</option>
                                            <option value="flying-spur">Flying Spur (0)</option>
                                            <option value="focus">Focus (2)</option>
                                            <option value="g-class">G-Class (0)</option>
                                            <option value="huracan">Huracan (1)</option>
                                            <option value="is-250-c">IS 250 C (1)</option>
                                            <option value="malibu">Malibu (1)</option>
                                            <option value="model-x">Model X (1)</option>
                                            <option value="mustang">Mustang (1)</option>
                                            <option value="mx-5">MX-5 (1)</option>
                                            <option value="pilot">Pilot (0)</option>
                                            <option value="rdx">RDX (1)</option>
                                            <option value="rio">Rio (1)</option>
                                            <option value="rx-350">RX 350 (1)</option>
                                            <option value="silverado">Silverado (1)</option>
                                            <option value="sorento">Sorento (1)</option>
                                            <option value="soul">Soul (1)</option>
                                            <option value="tacoma">Tacoma (1)</option>
                                            <option value="veloster">Veloster (0)</option>
                                            <option value="versa">Versa (1)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Max Price</option>
                                            <option value="5000">$5 000</option>
                                            <option value="10000">$10 000</option>
                                            <option value="15000">$15 000</option>
                                            <option value="20000">$20 000</option>
                                            <option value="30000">$30 000</option>
                                            <option value="40000">$40 000</option>
                                            <option value="50000">$50 000</option>
                                            <option value="70000">$70 000</option>
                                            <option value="80000">$80 000</option>
                                            <option value="100000">$100 000</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Enter a location">
                                        </div>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <button class="btn-second orange-btn full-width" type="button"><i class="flaticon-search"></i> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="certifiedusedcar">
                            <form>
                                <div class="row">
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Make</option>
                                            <option value="acura">Acura (1)</option>
                                            <option value="bmw">BMW (2)</option>
                                            <option value="chevrolet">Chevrolet (4)</option>
                                            <option value="ford">Ford (4)</option>
                                            <option value="honda">Honda (2)</option>
                                            <option value="hyundai">Hyundai (1)</option>
                                            <option value="kia">Kia (3)</option>
                                            <option value="lamborghini">Lamborghini (1)</option>
                                            <option value="lexus">Lexus (2)</option>
                                            <option value="mazda">Mazda (3)</option>
                                            <option value="mercedes-benz">Mercedes-Benz (0)</option>
                                            <option value="nissan">Nissan (3)</option>
                                            <option value="tesla">Tesla (1)</option>
                                            <option value="toyota">Toyota (3)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Choose Model</option>
                                            <option value="1-series">1 Series (1)</option>
                                            <option value="3-serie-model">3 Series (1)</option>
                                            <option value="370z">370Z (1)</option>
                                            <option value="5-active">5 Active (1)</option>
                                            <option value="accord">Accord (1)</option>
                                            <option value="altima">Altima (1)</option>
                                            <option value="avalon">Avalon (1)</option>
                                            <option value="c-class">C-Class (0)</option>
                                            <option value="camry">Camry (1)</option>
                                            <option value="civic">Civic (1)</option>
                                            <option value="cr-v">CR-V (0)</option>
                                            <option value="cruze">Cruze (2)</option>
                                            <option value="cx-5">CX-5 (1)</option>
                                            <option value="e-class">E-Class (0)</option>
                                            <option value="elantra">Elantra (1)</option>
                                            <option value="es-300h">ES 300h (0)</option>
                                            <option value="explorer">Explorer (1)</option>
                                            <option value="flying-spur">Flying Spur (0)</option>
                                            <option value="focus">Focus (2)</option>
                                            <option value="g-class">G-Class (0)</option>
                                            <option value="huracan">Huracan (1)</option>
                                            <option value="is-250-c">IS 250 C (1)</option>
                                            <option value="malibu">Malibu (1)</option>
                                            <option value="model-x">Model X (1)</option>
                                            <option value="mustang">Mustang (1)</option>
                                            <option value="mx-5">MX-5 (1)</option>
                                            <option value="pilot">Pilot (0)</option>
                                            <option value="rdx">RDX (1)</option>
                                            <option value="rio">Rio (1)</option>
                                            <option value="rx-350">RX 350 (1)</option>
                                            <option value="silverado">Silverado (1)</option>
                                            <option value="sorento">Sorento (1)</option>
                                            <option value="soul">Soul (1)</option>
                                            <option value="tacoma">Tacoma (1)</option>
                                            <option value="veloster">Veloster (0)</option>
                                            <option value="versa">Versa (1)</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <select class="form-control form-control-custom">
                                            <option value="">Max Price</option>
                                            <option value="5000">$5 000</option>
                                            <option value="10000">$10 000</option>
                                            <option value="15000">$15 000</option>
                                            <option value="20000">$20 000</option>
                                            <option value="30000">$30 000</option>
                                            <option value="40000">$40 000</option>
                                            <option value="50000">$50 000</option>
                                            <option value="70000">$70 000</option>
                                            <option value="80000">$80 000</option>
                                            <option value="100000">$100 000</option>
                                        </select>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="#" class="form-control form-control-custom" placeholder="Enter a location">
                                        </div>
                                    </div>
                                    <div class="col-xl col-lg-4 col-sm-6">
                                        <button class="btn-second orange-btn full-width" type="button"><i class="flaticon-search"></i> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- car-search-form -->
<!-- Car Models -->
<section class="section-padding car-model-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <div class="text-wrapper text-center">
                        <h3 class="fw-500 no-margin">Новинки</h3>
                        <span class="line-grey"></span><span class="line-orange"></span><span class="line-grey"></span>
                        <p class="text-dark-grey">Самый свежий подбор авто специально для Вас.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-section-car-box">
            <div class="row">
                @foreach($cars as $car)
                    <div class="col-lg-4 col-md-6">
                        <div class="car-grid-layout-box">
                            <div class="car-grid-layout-inner text-center">
                                <h5 class="car-name"><a href="/car/{{$car->id}}"  class="text-light-black">{{$car->mark->name}} {{$car->model->name}} </a><span class="text-orange float-right custom-tooltip" data-tip="Add to wishlist"><i class="flaticon-add"></i></span></h5>
                                <p class="time-publication">
                                    @if(((time()-strtotime($car->created_at))/3600) < 24)
                                        @if(((time()-strtotime($car->created_at))/3600) < 1)
                                            <span class="time-publication-green"><i class="far fa-clock"></i> {{(int)((time()-strtotime($car->created_at))/60)}} минут назад</span>
                                        @else
                                            <span class="time-publication-green"><i class="far fa-clock"></i> {{(int)((time()-strtotime($car->created_at))/3600)}} часов назад</span>
                                        @endif
                                    @else
                                        <i class="far fa-clock"></i> {{$car->created_at->format('d.m.Y')}}
                                    @endif
                                </p>

                                <p class="text-dark-grey">{{isset($car->core->modification)?$car->core->modification:$car->year." год"}}</p> <span class="text-orange price-text">${{$car->price}}</span>
                                <div class="car-grid-layout-img">
                                    <a href="/car/{{$car->id}}">
                                        <img src="{{$car->img}}" class="img-fluid full-width" alt="Car img">
                                    </a>
                                </div>

                                <div class="car-grid-layout-details"> <span class="text-dark-white"><i class="flaticon-dashboard text-orange mr-2"></i> {{$car->run}} Km</span>
                                    <span class="text-dark-white p-relative"><i class="icon-car"></i> {{$car->year}}</span>
                                </div>
                                <div class="car-grid-layout-location">  <span class="text-dark-white"><i class="fas fa-map-marker-alt mr-2"></i>
                                                    @if(isset($car->city->title_ru) and isset($car->region->title_ru))
                                            {{$car->city->title_ru}}
                                        @else
                                            Не указано
                                        @endif
                                                </span>
                                    <span class="text-dark-white"><i class="fas fa-cog mr-2"></i> {{isset($car->core->transmission)?$car->core->transmission:"Не указана"}}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Car Models -->
<!-- Car browse -->
<section class="car-browse-make-type-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="car-browse-make-type">
                    <h4 class="text-light-black text-center">Искать по марке <span class="text-orange"></span></h4>
                    <ul class="make all-categories all-categories-hide">
                        @foreach($marks as $mark)
                        <li>
                            <a href="/listing/brand/{{$mark->code}}" class="text-light-black">
                                <span>{{$mark->name}}
                              </span>
                                </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="text-center pb-3">
                        <a href="javascript:void(0)" class="text-dark-grey fs-14 rubik show-all-category">Показать все модели</a>
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-6">--}}
{{--                <div class="car-browse-make-type">--}}
{{--                    <h4 class="text-light-black">Browse by <span class="text-orange">Type</span> <small><a href="javascript:void(0)" class="text-dark-grey fs-14 rubik showtypebtn">Show all Types</a> </small></h4>--}}
{{--                    <ul class="type">--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car1.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                Convertible (2)</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car1.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                Coupe (2)</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car2.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                Hatchback (1)</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car3.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                Minivan (1)</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car4.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                Pickups (2)</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car5.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                Sedan (12)</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car6.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                Sport Cars (2)</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="index.html#" class="text-light-black"> <span>--}}
{{--                    <img src="/images/car2.jpg" class="img-fluid" alt="brand-logo">--}}
{{--                  </span>--}}
{{--                                SUV (1)</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- Car browse -->
<!-- About -->
{{--<section class="section-padding about-us-sec">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="about-img-sec p-relative">--}}
{{--                    <img src="/images/aboutus-.jpg" class="img-fluid full-width" alt="about-img">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-7 align-self-center">--}}
{{--                <div class="about-content-wrapper">--}}
{{--                    <div class="section-header no-margin">--}}
{{--                        <div class="text-wrapper text-left">--}}
{{--                            <h6 class="text-orange fw-400 mb-2">ABOUT THE CARVELLEY</h6>--}}
{{--                            <h3 class="fw-500 no-margin">WE ARE THE BEST CAR SERVICE PROVIDE IN THE WORLD OF AUTOMOTIVE</h3>--}}
{{--                            <h3 class="fw-500 no-margin">WE ARE THE BEST CAR SERVICE PROVIDE IN THE WORLD OF AUTOMOTIVE</h3>--}}
{{--                            <span class="line-grey"></span><span class="line-orange"></span><span class="line-grey"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p class="text-dark-grey">On the other hand, we denounce with righteous indignation the foult anuals dislike men who are so beguiled and demoralized by the nuhaiicharms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound toen sue; and equal blame belongs to those who fail in their duty.</p>--}}
{{--                    <ul>--}}
{{--                        <li class="text-dark-grey">Lorem ipsum dolor sit amet.</li>--}}
{{--                        <li class="text-dark-grey">Ut enim ad minim veniam.</li>--}}
{{--                        <li class="text-dark-grey">Duis aute irure dolor in reprehenderit.</li>--}}
{{--                        <li class="text-dark-grey">Excepteur sint occaecat cupidatat non proident.</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- About -->
<!-- Featured Brands -->
{{--<section class="section-padding bg-light-theme">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="section-header">--}}
{{--                    <div class="text-wrapper text-center">--}}
{{--                        <h3 class="fw-500 no-margin">Featured Brands</h3>--}}
{{--                        <span class="line-grey"></span><span class="line-orange"></span><span class="line-grey"></span>--}}
{{--                        <p class="text-dark-grey">A masterful combination of style, power, sporty handling and comfort. A masterful combination of style, power, sporty handling and comfort.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <!-- Car Tabs -->--}}
{{--                <div class="car-tabs">--}}
{{--                    <ul class="nav nav-tabs" role="tablist">--}}
{{--                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="index.html#ghibli">Ghibli</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="index.html#levante">Levante</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="index.html#quattroporte">Quattroporte</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="index.html#granturismo">GranTurismo</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- Car Tabs -->--}}
{{--                <!-- Car Tabs Contant -->--}}
{{--                <div class="car-tab-box">--}}
{{--                    <div class="tab-content">--}}
{{--                        <div id="ghibli" class="container tab-pane active">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Ghibli</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar9.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Ghibli S</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar8.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">5979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">4.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">550 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Ghibli S Q4</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar7.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description ">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V8</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2639 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">6.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">450 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div id="levante" class="container tab-pane fade">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Levante</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar9.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Levante S</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar8.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Levante 250 Diesel</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar7.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div id="quattroporte" class="container tab-pane fade">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Quattroporte</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar7.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Quattroporte S</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar9.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Quattroporte S Q4</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar8.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div id="granturismo" class="container tab-pane fade">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Granturismo</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar9.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6 car-border">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Granturismo MC</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar8.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                    <div class="car-box align-item-center">--}}
{{--                                        <h4><a href="index.html#" class="text-light-black">Granturismo Sport</a></h4>--}}
{{--                                        <span class="tag">2019</span>--}}
{{--                                        <a href="index.html#">--}}
{{--                                            <img src="/images/showcar7.jpg" class="img-fluid full-width" alt="Car Model Image">--}}
{{--                                        </a> <a href="index.html#" class="btn-third transparent-btn"><span>$ 22,000</span><span>Booking Now</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-description">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-grey">Engine Layout <strong class="text-light-black">V6</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Displacement <strong class="text-light-black">2979 cc</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Acceleration <strong class="text-light-black">5.5 sec</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Speed <strong class="text-light-black">270 km/h</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Max Power <strong class="text-light-black">350 HP</strong>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-grey">Traction <strong class="text-light-black">RWD</strong>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Car Tabs Contant -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Featured Brands -->
<!-- parallex sec-->
{{--<section class="about-theme">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section-padding">--}}
{{--                    <div class="about-text-wrapper">--}}
{{--                        <p class="text-custom-white sub-title">OUR MAIN GOAL -</p>--}}
{{--                        <h2 class="text-custom-white title">The Best Theme for <span class="text-orange">Car Listing</span></h2>--}}
{{--                        <div class="video-btn">--}}
{{--                            <a href="JavaScript:Void(0);" data-toggle="modal" data-target="#videomodal">--}}
{{--                                <div class="circle-box"> <span class="video-btn">--}}
{{--                        <i class="flaticon-triangle"></i>--}}
{{--                      </span>--}}
{{--                                </div> <span class="text text-custom-white">Watch intro video <br>About theme</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- parallex sec-->
<!-- Car Categories -->
{{--<section class="section-padding car-categories-sec">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="section-header">--}}
{{--                    <div class="text-wrapper text-center">--}}
{{--                        <h3 class="fw-500 no-margin">Find Your Best Match</h3>--}}
{{--                        <span class="line-grey"></span><span class="line-orange"></span><span class="line-grey"></span>--}}
{{--                        <p class="text-dark-grey">A masterful combination of style, power, sporty handling and comfort. A masterful combination of style, power, sporty handling and comfort.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 p-relative">--}}
{{--                <div class="category-slider">--}}
{{--                    <div class="car-categories">--}}
{{--                        <a href="index.html#">--}}
{{--                            <img src="/images/match/match-1.jpg" class="img-fluid full-width" alt="Category Image" />--}}
{{--                        </a>--}}
{{--                        <div class="category-caption">--}}
{{--                            <div class="category-wrapper">--}}
{{--                                <a href="index.html#">--}}
{{--                                    <h4 class="text-custom-white">Practice <span class="brand-logo">--}}
{{--                      <img src="/images/bmw_logo.png" class="img-fluid" alt="brand logo">--}}
{{--                    </span></h4>--}}
{{--                                </a>--}}
{{--                                <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="car-categories">--}}
{{--                        <a href="index.html#">--}}
{{--                            <img src="/images/match/match-2.jpg" class="img-fluid full-width" alt="Category Image" />--}}
{{--                        </a>--}}
{{--                        <div class="category-caption">--}}
{{--                            <div class="category-wrapper">--}}
{{--                                <a href="index.html#">--}}
{{--                                    <h4 class="text-custom-white">Sports Car--}}
{{--                                        <span class="brand-logo">--}}
{{--                      <img src="/images/wv_logo.png" class="img-fluid" alt="brand logo">--}}
{{--                    </span></h4>--}}
{{--                                </a>--}}
{{--                                <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="car-categories">--}}
{{--                        <a href="index.html#">--}}
{{--                            <img src="/images/match/match-3.jpg" class="img-fluid full-width" alt="Category Image" />--}}
{{--                        </a>--}}
{{--                        <div class="category-caption">--}}
{{--                            <div class="category-wrapper">--}}
{{--                                <a href="index.html#">--}}
{{--                                    <h4 class="text-custom-white">Luxury--}}
{{--                                        <span class="brand-logo">--}}
{{--                      <img src="/images/bmw_logo.png" class="img-fluid" alt="brand logo">--}}
{{--                    </span></h4>--}}
{{--                                </a>--}}
{{--                                <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="car-categories">--}}
{{--                        <a href="index.html#">--}}
{{--                            <img src="/images/match/match-4.jpg" class="img-fluid full-width" alt="Category Image" />--}}
{{--                        </a>--}}
{{--                        <div class="category-caption">--}}
{{--                            <div class="category-wrapper">--}}
{{--                                <a href="index.html#">--}}
{{--                                    <h4 class="text-custom-white">Fmaily Car--}}
{{--                                        <span class="brand-logo">--}}
{{--                      <img src="/images/wv_logo.png" class="img-fluid" alt="brand logo">--}}
{{--                    </span></h4>--}}
{{--                                </a>--}}
{{--                                <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="category-slider-arrows">--}}
{{--                    <div class="category-slider-prevtab slick-arrow" style=""> <i class="flaticon-left-chevron"></i>--}}
{{--                    </div>--}}
{{--                    <div class="category-slider-nexttab slick-arrow" style=""> <i class="flaticon-right-chevron"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Car Categories -->
<!-- News Sec Desktop -->
<section class="section-padding news-sec-desktop bg-light-theme d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <div class="text-wrapper text-center">
                        <h3 class="fw-500 no-margin">Новости и технологии</h3>
                        <span class="line-grey"></span><span class="line-orange"></span><span class="line-grey"></span>
                        <p class="text-dark-grey">Мастерское сочетание стиля, мощности, спортивной управляемости и комфорта.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="news-sec-img p-relative">
                            <a href="index.html#">
                                <img src="/images/news/news-3.jpg" class="img-fluid full-width" alt="News Image">
                            </a>
                            <div class="news-caption">
                                <div class="news-wrapper">
                                    <a href="index.html#">
                                        <h4 class="text-custom-white text-capitalize">the love of power is the demon of men & women</h4>
                                    </a>
                                    <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-sec-img p-relative">
                            <a href="index.html#">
                                <img src="/images/news/news-1.jpg" class="img-fluid full-width" alt="News Image">
                            </a>
                            <div class="news-caption">
                                <div class="news-wrapper">
                                    <a href="index.html#">
                                        <h4 class="text-custom-white text-capitalize">Life is hard, and a lot of people come home tired from work</h4>
                                    </a>
                                    <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-sec-img p-relative">
                            <a href="index.html#">
                                <img src="/images/news/news-2.jpg" class="img-fluid full-width" alt="News Image">
                            </a>
                            <div class="news-caption">
                                <div class="news-wrapper">
                                    <a href="index.html#">
                                        <h4 class="text-custom-white text-capitalize">The PC has improved the world in just about every area</h4>
                                    </a>
                                    <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="news-sec-img news-last-image">
                    <a href="index.html#">
                        <img src="/images/news/news-4.jpg" class="img-fluid full-width" alt="News Image">
                    </a>
                    <div class="news-caption">
                        <div class="news-wrapper">
                            <a href="index.html#">
                                <h4 class="text-custom-white text-capitalize">the love of power is the demon of men & women</h4>
                            </a>
                            <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Sec Desktop -->
<!-- News Sec Mobile -->
<section class="section-padding news-sec-mobile bg-light-theme d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <div class="text-wrapper text-center">
                        <h3 class="fw-500 no-margin">News</h3>
                        <span class="line-grey"></span><span class="line-orange"></span><span class="line-grey"></span>
                        <p class="text-dark-grey">A masterful combination of style, power, sporty handling and comfort. A masterful combination of style, power, sporty handling and comfort.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="news-mobile-slider">
                    <div class="news-sec-img p-relative">
                        <a href="index.html#">
                            <img src="/images/news/news-3.jpg" class="img-fluid full-width" alt="News Image">
                        </a>
                        <div class="news-caption">
                            <div class="news-wrapper">
                                <a href="index.html#">
                                    <h4 class="text-custom-white text-capitalize">the love of power is the demon of men & women</h4>
                                </a>
                                <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-sec-img p-relative">
                        <a href="index.html#">
                            <img src="/images/news/news-2.jpg" class="img-fluid full-width" alt="News Image">
                        </a>
                        <div class="news-caption">
                            <div class="news-wrapper">
                                <a href="index.html#">
                                    <h4 class="text-custom-white text-capitalize">The PC has improved the world in just about every area</h4>
                                </a>
                                <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-sec-img p-relative">
                        <a href="index.html#">
                            <img src="/images/news/news-1.jpg" class="img-fluid full-width" alt="News Image">
                        </a>
                        <div class="news-caption">
                            <div class="news-wrapper">
                                <a href="index.html#">
                                    <h4 class="text-custom-white text-capitalize">Life is hard, and a lot of people come home tired from work</h4>
                                </a>
                                <p class="text-custom-white no-margin">A masterful combination of style, power, sporty handling and comfort.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Sec Mobile -->
<!-- About counter -->
{{--<section class="about-counter-sec">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec-content">--}}
{{--                    <h3 class="text-custom-white mb-2"><span class="count">500</span> <i class="flaticon-add"></i></h3>--}}
{{--                    <h5 class="text-custom-white no-margin text-uppercase rubik">Happy client</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec">--}}
{{--                    <img src="/images/about/aboutus-2.jpg" class="img-fluid full-width" alt="#">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec-content">--}}
{{--                    <h3 class="text-custom-white mb-2"><span class="count">1000</span> <i class="flaticon-add"></i></h3>--}}
{{--                    <h5 class="text-custom-white no-margin text-uppercase rubik">EQUIPMENTS</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec">--}}
{{--                    <img src="/images/about/aboutus-3.jpg" class="img-fluid full-width" alt="#">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec-content">--}}
{{--                    <h3 class="text-custom-white mb-2"><span class="count">100</span> <i class="flaticon-add"></i></h3>--}}
{{--                    <h5 class="text-custom-white no-margin text-uppercase rubik">EXPERT TRAINERS</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec">--}}
{{--                    <img src="/images/about/aboutus-2.jpg" class="img-fluid full-width" alt="#">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec">--}}
{{--                    <img src="/images/about/aboutus-4.jpg" class="img-fluid full-width" alt="#">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec-content">--}}
{{--                    <h3 class="text-custom-white mb-2"><span class="count">150</span> <i class="flaticon-add"></i></h3>--}}
{{--                    <h5 class="text-custom-white no-margin text-uppercase rubik">AWARD WIN</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec">--}}
{{--                    <img src="/images/about/aboutus-5.jpg" class="img-fluid full-width" alt="#">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec-content">--}}
{{--                    <h3 class="text-custom-white mb-2"><span class="count">20</span> <i class="flaticon-add"></i></h3>--}}
{{--                    <h5 class="text-custom-white no-margin text-uppercase rubik">PERSONAL TRAINERS</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec">--}}
{{--                    <img src="/images/about/aboutus-6.jpg" class="img-fluid full-width" alt="#">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">--}}
{{--                <div class="counter-sec-content">--}}
{{--                    <h3 class="text-custom-white mb-2"><span class="count">100</span> <i class="flaticon-add"></i></h3>--}}
{{--                    <h5 class="text-custom-white no-margin text-uppercase rubik">CLASS ROOM</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- About counter -->

<!-- Video popup -->
<!-- The Modal -->
<div class="modal fade" id="videomodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <iframe src="https://www.youtube.com/embed/AdZrEIo6UYU" allow="autoplay"></iframe>
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
                        <li><a href="index.html#">Recover Password</a>
                        </li>
                    </ul>
                </div>
                <div class="social-login"> <span>Or Signup with</span>
                    <div class="social-btn"> <a href="index.html#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="index.html#" class="google"><i class="fab fa-google-plus-g"></i> Google</a>
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
                        <li><a href="index.html#">Recover Password</a>
                        </li>
                    </ul>
                </div>
                <div class="social-login"> <span>Or connect with</span>
                    <div class="social-btn"> <a href="index.html#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="index.html#" class="google"><i class="fab fa-google-plus-g"></i> Google</a>
                    </div>
                </div>
            </div>
            <!-- Sign in form -->
        </div>
    </div>
</div>
@endsection


