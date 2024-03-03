@extends('website.welcome')
@section('title', 'Blog')

@section('custom-styles')
@endsection

@section('content')

    <div class="mt-3 pb-xl-5"></div>
    <section class="blog-page-title mb-4 mb-xl-5">
        <div class="title-bg">
            <img loading="lazy" src="{{asset('images/blog_title_bg.jpg')}}" width="1780" height="420" alt="">
        </div>
        <div class="container">
            <h2 class="page-title">The Blog</h2>
            <div class="blog__filter">
                <a href="#" class="menu-link menu-link_us-s">ALL</a>
                <a href="#" class="menu-link menu-link_us-s">COMPANY</a>
                <a href="#" class="menu-link menu-link_us-s menu-link_active">FASHION</a>
                <a href="#" class="menu-link menu-link_us-s">STYLE</a>
                <a href="#" class="menu-link menu-link_us-s">TRENDS</a>
                <a href="#" class="menu-link menu-link_us-s">BEAUTY</a>
            </div>
        </div>
    </section>
    <section class="blog-page container">
        <h2 class="d-none">The Blog</h2>
        <div class="blog-grid row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="{{asset('images/blog/blog-5.jpg')}}" width="450" height="400"
                        alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Woman with good shoes is never be ugly place</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered,
                            grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="{{asset('images/blog/blog-6.jpg')}}" width="450" height="400"
                        alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Heaven upon heaven moveth every have.</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered,
                            grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="{{asset('images/blog/blog-7.jpg')}}" width="450" height="400"
                        alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Tree doesn't good void, waters without created</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered,
                            grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="{{asset('images/blog/blog-8.jpg')}}" width="450" height="400"
                        alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Given Set was without from god divide rule Hath</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered,
                            grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="{{asset('images/blog/blog-9.jpg')}}" width="450" height="400"
                        alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Tree earth fowl given moveth deep lesser After</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered,
                            grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="blog-grid__item">
                <div class="blog-grid__item-image">
                    <img loading="lazy" class="h-auto" src="{{asset('images/blog/blog-10.jpg')}}" width="450" height="400"
                        alt="">
                </div>
                <div class="blog-grid__item-detail">
                    <div class="blog-grid__item-meta">
                        <span class="blog-grid__item-meta__author">By Admin</span>
                        <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                    </div>
                    <div class="blog-grid__item-title">
                        <a href="blog_single.html">Us yielding Fish sea night night the said him two</a>
                    </div>
                    <div class="blog-grid__item-content">
                        <p>Midst one brought greater also morning green saying had good. Open stars day let over gathered,
                            grass face one every light of under.</p>
                        <a href="blog_single.html" class="readmore-link">Continue Reading</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="mb-1 text-center fw-medium">SHOWING 36 of 497 items</p>
        <div class="progress progress_uomo mb-3 ms-auto me-auto" style="width: 300px;">
            <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div>

        <div class="text-center">
            <a class="btn-link btn-link_lg text-uppercase fw-medium" href="#">Show More</a>
        </div>
    </section>

    <div class="mb-5 pb-xl-5"></div>
@endsection

@section('custom-scripts')
@endsection
