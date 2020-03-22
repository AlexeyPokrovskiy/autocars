@extends('layouts.app')

@section('content')
<!-- User Details -->
{{--<div class="user-page-sec p-relative car-details">--}}
{{--    <div class="car-details-slider">--}}
{{--        <div class="slider-item">--}}
{{--            <img src="/images/cardetails/cardetails-1.jpg" class="img-fluid full-width" alt="#">--}}
{{--        </div>--}}
{{--        <div class="slider-item">--}}
{{--            <img src="/images/cardetails/cardetails-2.jpg" class="img-fluid full-width" alt="#">--}}
{{--        </div>--}}
{{--        <div class="slider-item">--}}
{{--            <img src="/images/cardetails/cardetails-3.jpg" class="img-fluid full-width" alt="#">--}}
{{--        </div>--}}
{{--        <div class="slider-item">--}}
{{--            <img src="/images/cardetails/cardetails-4.jpg" class="img-fluid full-width" alt="#">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="slider-contant-wrapper offset-lg-1 col-lg-4 col-md-6">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="slider-contant">--}}
{{--                    <div class="content-box">--}}
{{--                        <h1 class="text-custom-white">BMW 535 v6</h1>--}}
{{--                        <p class="text-custom-white"><i class="fas fa-map-marker-alt"></i> 198 West 21th Street, Suite 721 NewYork, NY 10010</p>--}}
{{--                        <div class="social-share">  <span>Share: </span>--}}
{{--                            <div class="user-social-links"> <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>--}}
{{--                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>--}}
{{--                                <a href="#" class="pintrest"><i class="fab fa-pinterest-square"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="price-btn"> <span>$ 50,000</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="user-page-details-sec">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="offset-lg-1 col-lg-10">--}}
{{--                    <div class="user-about">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="user-left-wrapper">--}}
{{--                                    <div class="user-img">--}}
{{--                                        <img src="/images/cardetails/user-1.jpg" class="rounded-circle" alt="#">--}}
{{--                                    </div>--}}
{{--                                    <div class="user-details">--}}
{{--                                        <div class="user-details-top">--}}
{{--                                            <h5 class="title text-custom-white">Jhon Deo <span><i class="fas fa-check"></i></span></h5>--}}
{{--                                            <span><a href="#" class="text-custom-white"><i class="fas fa-map-marker-alt"></i> New York</a></span>--}}
{{--                                            <span><a href="#" class="text-custom-white"><i class="fas fa-link"></i> @jhon_deo</a></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-social-links"> <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>--}}
{{--                                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>--}}
{{--                                            <a href="#" class="pintrest"><i class="fab fa-pinterest-square"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="user-right-wrapper">--}}
{{--                                    <div class="star-rating"> <span class="text-yellow"><i class="fas fa-star"></i></span>--}}
{{--                                        <span class="text-yellow"><i class="fas fa-star"></i></span>--}}
{{--                                        <span class="text-yellow"><i class="fas fa-star"></i></span>--}}
{{--                                        <span class="text-yellow"><i class="fas fa-star"></i></span>--}}
{{--                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-custom-white">5.00 average</li>--}}
{{--                                            <li><a href="#" class="text-custom-white">3 Reviews</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="comment-details">--}}
{{--                                        <ul>--}}
{{--                                            <li class="text-dark-white">21 <span>Sold Car</span>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-white">3 <span>Top Sales</span>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-dark-white">1 <span>Latest Sale</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="space-85"></div>--}}
{{--</div>--}}
<!-- User Details -->
<!-- User page bottom -->

<div class="listing-with-map car-details">
    <div class="container">
        <div class="row no-use-row">
            <div class="col-lg-8">
                <div class="page-title">
                    <h3 class="text-light-black">{{$car->core->mark->name}} {{$car->core->model->name}}</h3>
                </div>
                <div class="image-slider-sec">
                    <div class="car-detail-slider-for">

                        @foreach($images as $img)
                            <div class="slide-item">
                                <img src="{{$img[0]}}" class="img-fluid full-width" alt="#">
                            </div>
                        @endforeach
                    </div>
                    <div class="car-detail-slider-nav">
                        @foreach($images as $img)
                            <div class="slide-item">
                                <img src="{{$img[0]}}" class="img-fluid full-width" alt="#">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="car-details-tab">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tech-spec">Технические параметры</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accessories">Опции</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#performance">Performance</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tech-spec">
                            <div class="car-details-box">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Базовая информация</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Год</td>
                                            <td>{{$car->year}}</td>
                                        </tr>
                                        <tr>
                                            <td>Владельцев</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Пробег</td>
                                            <td>{{$car->run}} км.</td>
                                        </tr>
                                        <tr>
                                            <td>Топливо</td>
                                            <td>{{$car->fuel->name}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="2">ТЕХНИЧЕСКИЕ ПАРАМЕТРЫ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Двигатель</td>
                                            <td>{{$car->core->modification}}</td>
                                        </tr>
                                        <tr>
                                            <td>Мощность</td>
                                            <td>{{$car->core->horse_power}} л.с. ({{$car->core->kwt}} KW)</td>
                                        </tr>
                                        <tr>
                                            <td>Привод</td>
                                            <td>{{$car->core->drive}}</td>
                                        </tr>
                                        <tr>
                                            <td>Дверей</td>
                                            <td>{{$car->core->doors_count}}</td>
                                        </tr>
                                        <tr>
                                            <td>КПП</td>
                                            <td>{{$car->core->transmission}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="accessories">
                            <div class="car-details-box">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th colspan="2">Accessories</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Air Conditioner</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>AntiLock Braking System</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Power Steering</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Power Windows</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CD Player</td>
                                            <td><i class="fas fa-times" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Leather Seats</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Central Locking</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Power Door Locks</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brake Assist</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Driver Airbag</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Passenger Airbag</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Crash Sensor</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Engine Check Warning</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Automatic Headlamps</td>
                                            <td><i class="fas fa-check" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="performance">
                            <div class="car-details-box">
                                <div class="text-wrapper">
                                    <h4 class="text-light-black">Описание</h4>
                                    <p class="text-dark-grey">{{$car->description}}</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="contant-wrapper">
                    <h4 class="text-light-black">Описание</h4>
                    <p class="text-dark-grey">{{$car->description}}</p>

                </div>

{{--                <div class="video-wrapper">--}}
{{--                    <h4 class="text-light-black">Watch Video</h4>--}}
{{--                    <div class="video_wrapper video_wrapper_full js-videoWrapper">--}}
{{--                        <iframe class="videoIframe js-videoIframe" src="https://www.youtube.com/embed/AdZrEIo6UYU" data-src="https://www.youtube.com/embed/AdZrEIo6UYU?autoplay=1" allow="autoplay"></iframe>--}}
{{--                        <div class="videoPoster js-videoPoster">--}}
{{--                            <img src="/images/cardetails/video-1.jpg" class="img-fluid full-width" alt="#">--}}
{{--                            <div class="video-inner"> <i class="flaticon-triangle"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="product-reviews">--}}
{{--                    <h4 class="text-light-black comment-reply-title">2 Reviews for Carvelley</h4>--}}
{{--                    <div class="reviews-section">--}}
{{--                        <article class="review-post">--}}
{{--                            <div class="review-box">--}}
{{--                                <div class="review-thumbnail">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="/images/cardetails/user-2.jpg" alt="#">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="user-name">--}}
{{--                                    <h6><a href="#" class="text-light-black">Jhon</a></h6>--}}
{{--                                    <p class="text-dark-white"><i class="fas fa-star text-yellow"></i> 36 Reviews</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <section class="details">--}}
{{--                                <div class="top-section">--}}
{{--                                    <h5 class="text-light-black rubik mb-1 fw-600">I loved there Cars.</h5>--}}
{{--                                    <span class="text-dark-grey">November 15, 2019 5:30 Pm</span>--}}
{{--                                    <div class="review-count">--}}
{{--                                        <div class="rating">  <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="far fa-star"></i>--}}
{{--                                        </div>  <span class="rate">4<sup>/ 5</sup></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="comment-box">--}}
{{--                                    <p class="text-dark-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
{{--                                    <div class="img-slider-reviews">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-5.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-4.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-1.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-3.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-6.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-2.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="comment-footer">  <span class="text-dark-white">Was This Review ...?</span>--}}
{{--                                        <ul>--}}
{{--                                            <li>  <a href="#" class="interesting"><i class="far fa-thumbs-up"></i> Interesting <span class="text-dark-white">220</span></a>--}}
{{--                                            </li>--}}
{{--                                            <li>  <a href="#" class="lol"><i class="far fa-laugh"></i> Lol <span class="text-dark-white">150</span></a>--}}
{{--                                            </li>--}}
{{--                                            <li>  <a href="#" class="love"><i class="far fa-heart"></i> Love <span class="text-dark-white">500</span></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </section>--}}
{{--                        </article>--}}
{{--                        <article class="review-post">--}}
{{--                            <div class="review-box">--}}
{{--                                <div class="review-thumbnail">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="/images/cardetails/user-3.jpg" alt="#">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="user-name">--}}
{{--                                    <h6><a href="#" class="text-light-black">Deo</a></h6>--}}
{{--                                    <p class="text-dark-white"><i class="fas fa-star text-yellow"></i> 20 Reviews</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <section class="details">--}}
{{--                                <div class="top-section">--}}
{{--                                    <h5 class="text-light-black rubik mb-1 fw-600">Amazing Cars</h5>--}}
{{--                                    <span class="text-dark-grey">October 18, 2019 7:26 Pm</span>--}}
{{--                                    <div class="review-count">--}}
{{--                                        <div class="rating">  <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                            <i class="fas fa-star"></i>--}}
{{--                                        </div>  <span class="rate">5<sup>/ 5</sup></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="comment-box">--}}
{{--                                    <p class="text-dark-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
{{--                                    <div class="img-slider-reviews">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-1.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-2.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-3.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-4.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-5.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="/images/cardetails/290x213/comment-6.jpg" class="img-fluid full-width" alt="#">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="comment-footer">  <span class="text-dark-white">Was This Review ...?</span>--}}
{{--                                        <ul>--}}
{{--                                            <li>  <a href="#" class="interesting"><i class="far fa-thumbs-up"></i> Interesting <span class="text-dark-white">180</span></a>--}}
{{--                                            </li>--}}
{{--                                            <li>  <a href="#" class="lol"><i class="far fa-laugh"></i> Lol <span class="text-dark-white">125</span></a>--}}
{{--                                            </li>--}}
{{--                                            <li>  <a href="#" class="love"><i class="far fa-heart"></i> Love <span class="text-dark-white">350</span></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </section>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="comment-form-second bg-white">--}}
{{--                    <h4 class="text-light-black comment-reply-title">Rate us and Write a Review</h4>--}}
{{--                    <form>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="row align-items-center">--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <label class="text-light-black">Your Rating for this listing</label>--}}
{{--                                    <div class="star-rating"> <span>--}}
{{--                        <i class="far fa-star"></i>--}}
{{--                      </span>--}}
{{--                                        <span>--}}
{{--                        <i class="far fa-star"></i>--}}
{{--                      </span>--}}
{{--                                        <span>--}}
{{--                        <i class="far fa-star"></i>--}}
{{--                      </span>--}}
{{--                                        <span>--}}
{{--                        <i class="far fa-star"></i>--}}
{{--                      </span>--}}
{{--                                        <span>--}}
{{--                        <i class="far fa-star"></i>--}}
{{--                      </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <label class="text-dark-grey">Email<sup>*</sup>--}}
{{--                                    </label>--}}
{{--                                    <input type="email" class="form-control form-control-custom" name="#" placeholder="Enter your email i'd">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <label class="text-dark-grey">Title<sup>*</sup>--}}
{{--                                    </label>--}}
{{--                                    <input type="email" class="form-control form-control-custom" name="#" placeholder="Example: It was an awesome experience to be there">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <label class="text-dark-grey">Review<sup>*</sup>--}}
{{--                                    </label>--}}
{{--                                    <textarea class="form-control form-control-custom" name="#" placeholder="Review" rows="6"></textarea>--}}
{{--                                    <p>Your review is recommended to be at least 140 characters long</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <button type="submit" class="btn-second orange-btn">Submit Review</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
            <aside class="col-lg-4">


                <div class="side-search-bar h-auto mb-4">
                    <div class="title-icon">
                        <h5 class="title"><i class="far fa-user"></i> Продавец</h5>
                    </div>
                    <div class="widget-search-filter">
                        <div class="widget-content">
                            <div class="author-sec">
                                <div class="author-img">
                                    <img src="/images/cardetails/user-1a.jpg" class="rounded-circle" alt="Author Image">
                                </div>
                                <div class="author-info">
                                    <h6><a href="#" class="text-light-black"> Не указан</a></h6>
                                    <p class="text-dark-grey">Регистрация: Март, 2020</p>
                                </div>
                            </div>
                            <div class="contact-details">
                                <ul>
                                    <li class="text-dark-grey"> <span><i class="fas fa-map-marker-alt"></i></span>
                                        Украина</li>
                                    <li class="text-dark-grey"> <span><i class="fas fa-phone-alt"></i></span>
                                        <a href="#" class="text-dark-grey">{{$car->phone}}</a>
                                    </li>
{{--                                    <li class="text-dark-grey"> <span><i class="fas fa-envelope"></i></span>--}}
{{--                                        <a href="#" class="text-dark-grey">information@domain.com</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
{{--                            <div class="social-media">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#" class="text-orange"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#" class="text-orange"><i class="fab fa-twitter"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#" class="text-orange"><i class="fab fa-pinterest-p"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#" class="text-orange"><i class="fab fa-instagram"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#" class="text-orange"><i class="fab fa-youtube"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
{{--                <div class="side-search-bar h-auto mb-4">--}}
{{--                    <div class="title-icon">--}}
{{--                        <h5 class="title"><i class="flaticon-frame"></i> Sponsored Car</h5>--}}
{{--                    </div>--}}
{{--                    <div class="widget-search-filter mb-0">--}}
{{--                        <div class="widget-content">--}}
{{--                            <div class="car-grid-layout-box mb-4">--}}
{{--                                <div class="car-grid-layout-inner text-center">--}}
{{--                                    <h5 class="car-name"><a href="#"  class="text-light-black">Acura TLX </a><span class="text-orange float-right custom-tooltip" data-tip="Add to compare"><i class="flaticon-add"></i></span></h5>--}}
{{--                                    <h6 class="text-light-black text-uppercase mb-2">Lorem ipsum dolor sit amet</h6>--}}
{{--                                    <p class="text-dark-grey">A masterful combination of style, power, sporty handling and comfort.</p> <span class="text-orange price-text">$25,000</span>--}}
{{--                                    <div class="car-grid-layout-img">--}}
{{--                                        <img src="/images/showcar2.jpg" class="img-fluid full-width" alt="Car img">--}}
{{--                                    </div>--}}
{{--                                    <div class="car-grid-layout-details"> <span class="text-dark-white"><i class="flaticon-dashboard text-orange mr-2"></i> 20,000 Km</span>--}}
{{--                                        <span class="text-dark-white p-relative"><i class="icon-car"></i> 2010 Model</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="car-grid-layout-location">  <span class="text-dark-white"><i class="fas fa-map-marker-alt mr-2"></i> New York</span>--}}
{{--                                        <span class="text-dark-white"><i class="fas fa-cog mr-2"></i> Automatic</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="side-search-bar h-auto mb-4">
                    <div class="title-icon">
                        <h5 class="title"><i class="flaticon-eye"></i> Похожие</h5>
                    </div>
                    <div class="widget-search-filter">
                        <div class="widget-content">

                            @foreach($car_similar as $car_sim)
                            <div class="recent-item">
                                <div class="recent-thumbnail-area">
                                    <div class="item-thumb">
                                        <img src="{{$car_sim->img}}" class="img-fluid full-width" alt="Thumbnail">
                                    </div>
                                    <!--./ item-thumb -->
                                </div>
                                <!--./ todo-thumbnail-area -->
                                <div class="content-entry-wrap">
                                    <div class="recent-content">
                                        <h6 class="title"><a href="/car/{{$car_sim->id}}" class=" text-light-black">{{$car_sim->core->model->name}} {{$car_sim->core->mark->name}}</a></h6>
                                        <div class="recent-rating">
                                            <div class="rating-value"> <span>${{$car_sim->price}}</span></div>
                                        </div>
                                        <!--./ todo-rating -->
                                        <div class="recent-meta">
                                            <div class="recent-location"> <i class="fas fa-map-marker-alt"></i>
                                                Украина</div>
                                            <div class="recent-number"> <i class="fas fa-phone-alt"></i>
                                                {{$car_sim->phone}} </div>
                                        </div>
                                        <!--./ todo-meta -->
                                    </div>
                                    <!--./ todo-content -->
                                </div>
                                <!--./ content-entry-wrap -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
<!-- User page bottom -->
@endsection
