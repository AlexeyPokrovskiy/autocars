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
                            <h1 class="text-custom-white">Новости</h1>
                            <ul class="breadcrumbs">
                                <li><a href="/" class="text-custom-white">Главная</a>
                                </li>
                                <li><span class="text-custom-white">Новости</span>
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
    <section class="section-padding our_articles">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @forelse($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <article class="post">
                                <div class="blog-wrap p-relative">
                                    <div class="blog-img no-margin p-relative">
                                        <a href="/news/{{$blog->slug}}">
                                            <img src="{{$blog->image}}" class="img-fluid full-width" alt="Blog img">
                                        </a>
                                        <div class="read-more-wrap">  <a href="/news/{{$blog->slug}}" class="read-more">
                                                Читать эту новость
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-type">
                                        <a href="/news/{{$blog->slug}}">  <i class="flaticon-photo-camera"></i>
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <div class="entry-meta-content">
                                            <div class="entry-date"> <span class="text-dark-white"><a href="/news/{{$blog->slug}}" class="text-dark-white">{{$blog->created_at->format('Y-m-d')}}</a></span>
                                            </div>
                                        </div>
                                        <div class="blog-caption">
                                            <h2 class="blog-title">
                                                <a href="/news/{{$blog->slug}}" class="text-light-black">{{$blog->title}}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @empty
                            <h2>Пусто</h2>
                        @endforelse

                        <!-- pagination -->
                        <div class="col-12">
                            <nav class="custom-pagination">
                                <ul class="pagination">
                                    {{$blogs->links()}}
                                </ul>
                            </nav>
                        </div>
                        <!-- pagination -->
                    </div>
                </div>
                <aside class="col-lg-4">
                    <div class="side-bar">
                        <!-- social -->
{{--                        <div class="sidebar-widget">--}}
{{--                            <h4 class="text-light-black widget-title"><i class="flaticon-share"></i> Follow Us</h4>--}}
{{--                            <div class="widget-content">--}}
{{--                                <div class="social-profile-box-wrapper">--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon facebook">--}}
{{--                        <i class="fab fa-facebook-f"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">30.2k</span>--}}
{{--                                            <span class="social-type">Likes</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon google-plus">--}}
{{--                        <i class="fab fa-google-plus-g"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">10.2k</span>--}}
{{--                                            <span class="social-type">Followers</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon twitter">--}}
{{--                        <i class="fab fa-twitter"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">62.4k</span>--}}
{{--                                            <span class="social-type">Followers</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon youtube">--}}
{{--                        <i class="fab fa-youtube"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">30.2k</span>--}}
{{--                                            <span class="social-type">Subscribe</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon instagram">--}}
{{--                        <i class="fab fa-instagram"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">30.2k</span>--}}
{{--                                            <span class="social-type">Likes</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon vimeo">--}}
{{--                        <i class="fab fa-vimeo-v"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">10.4k</span>--}}
{{--                                            <span class="social-type">Followers</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon pinterest">--}}
{{--                        <i class="fab fa-pinterest"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">10.2k</span>--}}
{{--                                            <span class="social-type">Followers</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="social-profile-box">--}}
{{--                                        <a href="/news" target="_blank" class="icon"> <span class="social-icon soundcloud">--}}
{{--                        <i class="fab fa-soundcloud"></i>--}}
{{--                      </span>--}}
{{--                                            <span class="count">5.2k</span>--}}
{{--                                            <span class="social-type">Followers</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- social -->
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
