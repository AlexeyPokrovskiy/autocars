@extends('layouts.app')
@section('title',$title)
@section('meta_description',$meta_description)
@section('content')

    <div class="sub-header-sec p-relative">
        <img src="/images/blog/banner/banner-1.jpg" class="img-fluid" alt="Sub header">
        <div class="sub-header-overlay"></div>
        <div class="sub-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sub-header-text-wrapper text-center">
                            <h1 class="text-custom-white">{{$blog->title}}</h1>
                            <ul class="breadcrumbs">
                                <li><a href="/" class="text-custom-white">Главная</a>
                                </li>
                                <li><a href="/news" class="text-custom-white">Новости</a>
                                </li>
                                <li><span class="text-custom-white">{{$blog->title}}</span>
                                </li>
                            </ul>
                            {{--                            <ul class="tags-links">--}}
                            {{--                                <li class="cat-tags"> --}}
                            {{--                                    <a href="blog.html#">Luxury Car</a>--}}
                            {{--                                    <a href="blog.html#">Sports Car</a>--}}
                            {{--                                    <a href="blog.html#">Economy Car</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li><a href="blog.html#" class="text-custom-white"><i class="fas fa-user"></i> <span>Jhon Deo</span></a>--}}
                            {{--                                </li>--}}
                            {{--                                <li><a href="blog.html#" class="text-custom-white"><i class="far fa-comments"></i> <span>No Comments</span></a>--}}
                            {{--                                </li>--}}
                            {{--                                <li><a href="blog.html#" class="text-custom-white"><i class="fas fa-calendar"></i> <span>November 25, 2019</span></a>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub header -->
    <!-- Blog -->
    <section class="section-padding our_articles blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- article 1 -->
                            <article class="post">
                                <div class="blog-wrap p-relative">
                                    <div class="blog-img no-margin p-relative">
                                        <a href="#">
                                            <img src="{{$blog->image}}" class="img-fluid full-width" alt="Blog img">
                                        </a>
                                        <div class="post-type">
                                            <a href="#">  <i class="flaticon-film"></i>
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <a href="#">
                                                <span class="date">{{$blog->created_at->format('d')}}</span>
                                                <span class="month">{{$blog->created_at->format('M')}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-meta">
                                        <div class="blog-caption">
                                            <h2 class="blog-title">
                                                <a href="#" class="text-light-black">{{$blog->title}}</a>
                                            </h2>
                                            <p class="text-dark-grey">
                                                {!!$blog->description!!}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- article 1 -->
                            <!-- Social tag -->
                            <div class="social-tags"> <span class="text-light-black"> Поделиться</span>
                                <ul>
                                    <li class="fb"> <a href="blog-details-right.html"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="tweet"> <a href="blog-details-right.html"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="messenger"> <a href="blog-details-right.html"><i class="fab fa-facebook-messenger"></i></a>
                                    </li>
                                    <li class="pintrist"> <a href="blog-details-right.html"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li class="whastsapp"> <a href="blog-details-right.html"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Social tag -->
                            <!-- Comments -->
                            <div class="comments">
                                <h4 class="text-light-black comment-title">Комментарии</h4>
{{--                                <ul class="comment-list">--}}
{{--                                    <li class="comment">--}}
{{--                                        <div class="comment the-comment">--}}
{{--                                            <div class="comment-avatar">--}}
{{--                                                <img alt="image" src="/images/blog/avatar/avatar-2.jpg" class="avatar rounded-circle">--}}
{{--                                            </div>--}}
{{--                                            <div class="comment-content">--}}
{{--                                                <div class="comment-meta"> <span class="comment-time"> 15th May, 2019</span>--}}
{{--                                                    <span class="comment-author"> <a href="#" class="url">Rosalina Pong</a></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <div class="comment-text">--}}
{{--                                                        <p class="text-dark-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> <span class="reply"> <a rel="nofollow" class="text-light-black" href="#"><i class="fa fa-reply"></i> Reply</a> </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="comment">--}}
{{--                                        <div class="comment the-comment">--}}
{{--                                            <div class="comment-avatar">--}}
{{--                                                <img alt="image" src="/images/blog/avatar/avatar-1.jpg" class="avatar rounded-circle">--}}
{{--                                            </div>--}}
{{--                                            <div class="comment-content">--}}
{{--                                                <div class="comment-meta"> <span class="comment-time"> 20th May, 2019</span>--}}
{{--                                                    <span class="comment-author"> <a href="#" class="url">Arista Williamson</a></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="text">--}}
{{--                                                    <div class="comment-text">--}}
{{--                                                        <p class="text-dark-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> <span class="reply"> <a rel="nofollow" class="text-light-black" href="#"><i class="fa fa-reply"></i> Reply</a> </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="comment-answer">--}}
{{--                                            <li>--}}
{{--                                                <div class="comment the-comment">--}}
{{--                                                    <div class="comment-avatar">--}}
{{--                                                        <img alt="image" src="/images/blog/avatar/avatar-3.jpg" class="avatar rounded-circle">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-content">--}}
{{--                                                        <div class="comment-meta"> <span class="comment-time"> 15th May, 2019</span>--}}
{{--                                                            <span class="comment-author"> <a href="#" class="url">Rosalina Pong</a></span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="text">--}}
{{--                                                            <div class="comment-text">--}}
{{--                                                                <p class="text-dark-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> <span class="reply"> <a rel="nofollow" class="text-light-black" href="#"><i class="fa fa-reply"></i> Reply</a> </span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </div>
                            <!-- Comments -->
                            <!-- Comment form -->
                            <div class="comment-form">
                                <h4 class="text-light-black form-title">Оставить комментарий</h4>
                                <form>

                                    <div class="form-group">
                                        <label class="text-dark-grey">Комментарий<sup>*</sup>
                                        </label>
                                        <textarea class="form-control form-control-custom" rows="4" name="#" placeholder="Введите ваш комментарий"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn-second orange-btn mt-5">Отправить</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Comment form -->
                        </div>

                    </div>
                </div>
                <aside class="col-lg-4">
                    <div class="side-bar">
                        <!-- Popular News -->
                        <div class="sidebar-widget">
                            <h4 class="text-light-black widget-title"><i class="flaticon-checklist"></i> Популярные новости</h4>
                            <div class="widget-content">
                                <!--./ thumb-wrap -->

                                @forelse($blog_popular as $key=>$blog_p)
                                    <article class="side-post">
                                        <div class="thumb-img">
                                            <a href="news/{{$blog_p->slug}}">
                                                <img src="{{$blog_p->image}}" alt="thumb-img">
                                            </a>  <span class="count">{{$key+1}}</span>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="entry-meta-content">
                                                <div class="entry-date"> <span class="text-dark-white">{{$blog->created_at->format('Y-m-d')}}</span>
                                                </div>
                                            </div>
                                            <h6 class="entry-title no-margin">
                                                <a href="news/{{$blog_p->slug}}" class="text-light-black">{{$blog_p->title}}</a>
                                            </h6>
                                        </div>
                                    </article>
                                @endforeach

                                <!--./ thumb-wrap -->
                            </div>
                        </div>
                        <!-- Popular News -->
                        <!-- tags -->
                    {{--                        <div class="sidebar-widget">--}}
                    {{--                            <h4 class="text-light-black widget-title"><i class="flaticon-price-tag"></i> Tags</h4>--}}
                    {{--                            <div class="widget-content">--}}
                    {{--                                <div class="tag-cloud">--}}
                    {{--                                    <a href="/news">#luxury car</a>--}}
                    {{--                                    <a href="/news">#excutive car</a>--}}
                    {{--                                    <a href="/news">#economy car</a>--}}
                    {{--                                    <a href="/news">#sports car</a>--}}
                    {{--                                    <a href="/news">#vintage car</a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <!-- tags -->
                        <!-- Instagram Gallery -->
                        <div class="sidebar-widget">
                            <h4 class="text-light-black widget-title"><i class="flaticon-review"></i> Instagram Gallery</h4>
                            <div class="widget-content">
                                <ul class="instagram-img">
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-1.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-2.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-3.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-4.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-5.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-3.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-5.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-6.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                    <li class="insta-item">
                                        <a href="https://www.instagram.com/car_stock.com.ua/">
                                            <img src="/images/blog/sidebar/blog-7.jpg" class="img-fluid full-width" alt="instagram post">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Instagram Gallery -->
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
