@extends('frontEnd.layouts.master') @section('title', 'Home') @push('seo')
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Open Graph data -->
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="{{ asset($generalsetting->white_logo) }}" />
<meta property="og:description" content="" />
@endpush @push('css')
<link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
<style>
/* Product card styles (kept visual-only, same as hotdeals) */
.product-card{width:100%;max-width:220px;background:#fff;border-radius:15px;border:1px solid #e0e0e0;padding:12px 12px 10px;box-shadow:0 4px 6px rgba(0,0,0,0.05);position:relative;display:flex;flex-direction:column;align-items:stretch;box-sizing:border-box;margin:0 auto}
.product-card .card-media{background:#e9e9e9;border-radius:12px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:8px;height:180px}
.product-card .card-media img{max-width:100%;height:auto;display:block;margin:0 auto}
.product-card .card-body{margin-top:14px;display:flex;flex-direction:column;gap:8px}
.product-card .card-title{margin:0;font-size:14px;font-weight:700;color:#333;line-height:1.2;display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis}
.product-card .card-price{display:flex;align-items:center;gap:8px}
.product-card .order-btn{width:100%;background:#1a1a1a;color:#fff;border:none;padding:0;border-radius:20px;font-size:14px;font-weight:600;box-sizing:border-box}
.product-card .cart_btn .order-btn,
.product-card .cart_btn button.order-btn{display:flex;width:100%;box-sizing:border-box;align-items:center;justify-content:center;background:#1a1a1a;color:#fff;border:none;padding:0;border-radius:20px;font-size:14px;font-weight:600;height:44px}
.product-card .cart_btn .order-btn span,
.product-card .cart_btn button.order-btn span{display:block;line-height:normal}
/* Disable hover/focus visual changes for CTA on this page */
.product-card .cart_btn .order-btn:hover,
.product-card .cart_btn button.order-btn:hover,
.product-card .cart_btn .order-btn:focus,
.product-card .cart_btn button.order-btn:focus{
    background:#1a1a1a !important;
    color:#fff !important;
    text-decoration:none !important;
    box-shadow:none !important;
    transform:none !important;
}
.product-card .discount-badge{position:absolute;top:12px;right:12px;background:#1a1a1a;color:#fff;width:44px;height:44px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;line-height:1.05;text-align:center;z-index:5}

/* Ensure only product-related carousels share equal card heights */
.product_slider .owl-item > div,
.product-inner .owl-item > div,
.related_slider .owl-item > div,
.hotdeals-slider .owl-item > div {height:100%;display:flex;align-items:stretch}

.product-card .card-body{flex:1;display:flex;flex-direction:column;justify-content:space-between;gap:8px}
.product-card .cart_btn{margin-top:0}
.product-card{min-height:300px}
.product-card .cart_btn{padding-bottom:0}

/* Responsive adjustments */
@media (max-width: 575px){
    .product-card{max-width:160px;padding:10px;border-radius:12px}
    .product-card .card-media{height:140px;border-radius:10px}
    .product-card .card-title{font-size:13px}
    .product-card .card-price span:first-child{font-size:16px}
}
@media (min-width:576px) and (max-width: 991px){
    .product-card{max-width:200px}
    .product-card .card-media{height:160px}
}

/* Marquee animation for customer reviews */
@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-14.28% - 2px));
    }
}

.customer-review-marquee {
    display: flex;
    overflow: hidden;
    width: 100%;
    cursor: grab;
}

.customer-review-marquee.grabbing {
    cursor: grabbing;
}

.customer-review-marquee .marquee-content {
    display: flex;
    gap: 8px;
    animation: marquee 6s linear infinite;
    will-change: transform;
}

.customer-review-marquee .marquee-content:hover {
    animation-play-state: paused;
}

.customer-review-marquee .border {
    flex-shrink: 0;
    min-width: auto;
}

.customer-review-marquee .border img {
    max-width: 180px;
    height: auto;
    border-radius: 8px;
}

@media (max-width: 600px) {
    .customer-review-marquee .border img {
        max-width: 120px;
    }
}
</style>
@endpush
@section('content')
<section class="slider-section" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
             
            <div class="col-sm-3 hidetosm">
                <div class="sidebar-menu" style="margin-top: 26px;">
                    <ul class="hideshow">
                        @foreach ($menucategories as $key => $category)
                            <li style="padding: 4px 0">
                                <a href="{{ route('category', $category->slug) }}">
                                   
                                    {{ $category->name }}
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    @foreach ($category->subcategories as $key => $subcategory)
                                        <li>
                                            <a href="{{ route('subcategory', $subcategory->slug) }}">
                                                {{ $subcategory->subcategoryName }} <i
                                                    class="fa-solid fa-chevron-right"></i> </a>
                                            <ul class="sidebar-childmenu">
                                                @foreach ($subcategory->childcategories as $key => $childcat)
                                                    <li>
                                                        <a href="{{ route('products', $childcat->slug) }}">
                                                            {{ $childcat->childcategoryName }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <style>
/* Sidebar hover effect */

.sidebar-menu ul li a {
    display: block;
    padding: 6px 10px;
    transition: 0.3s;
}

.sidebar-menu ul li a:hover {
    color: #398fe6 !important;
    background-color: #f2f2f2;
}
</style>

            <div class="col-sm-9">
                <div class="home-slider-container">
                    <div class="main_slider owl-carousel" >
                        @foreach ($sliders as $key => $value)
                            <div class="slider-item"  >
                                <img style="border-radius: 10px !important;" src="{{ asset($value->image) }}" alt="" />
                            </div>
                            <!-- slider item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider end -->
<section class="bottoads_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="bottoads_inner">
                    @foreach ($sliderbottomads as $key => $value)
                        <div class="ads_item">
                            <a href="{{ $menucategories->first() ? route('category', $menucategories->first()->slug) : '#' }}">
                                <img style="border-radius: 10px !important; height: 100%;" src="{{ asset($value->image) }}" alt="" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> Categories </span>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="category-slider owl-carousel">
                    @foreach ($menucategories as $key => $value)
                        <div class="cat_item">
                            <div class="cat_img">
                                <a href="{{ route('category', $value->slug) }}">
                                    <img src="{{ asset($value->image) }}" alt="" />
                                </a>
                            </div>
                            <div class="cat_name">
                                <a href="{{ route('category', $value->slug) }}">
                                    {{ $value->name }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            @foreach($hitdealsbaner as $hotads)
            <div class="col-md-12">
                <a href="{{$hotads->link}}?sold=show">
                    <img class="img-fluid w-100" src="{{$hotads->image}}"/>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> Hot Deal </span>
                            </div>

                            <div class="">
                                <div class="offer_timer" id="simple_timer"></div>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="product_slider owl-carousel">
                    @foreach ($hotdeal_top as $key => $value)
                        <div  data-wow-duration="1.5s" data-wow-delay="0.{{ $key }}s">
                            <div class="product-card">
                                @if($value->old_price)
                                @php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) @endphp
                                <div class="discount-badge">
                                    {{ number_format($discount, 0) }}%<br>ছাড়
                                </div>
                                @endif

                                <div class="card-media">
                                    <a href="{{ route('product', $value->slug) }}">
                                        <img src="{{ asset($value->image ? $value->image->image : '') }}" alt="{{ $value->name }}" />
                                    </a>
                                </div>

                                <div class="card-body">
                                    <div style="display:flex;justify-content:space-between;align-items:center;">
                                        <h3 class="card-title">{{ Str::limit($value->name, 35) }}</h3>
                                        <span style="font-size:12px;color:#666;display:flex;align-items:center;gap:4px;">
                                            <span style="color:#ffb400;">★</span>
                                            <span>{{ number_format($value->reviews->avg('ratting') ?? 0, 1) }}</span>
                                        </span>
                                    </div>

                                    <div class="card-price">
                                        <span>৳ {{ $value->new_price }}</span>
                                        @if($value->old_price)
                                        <span style="font-size:13px;color:#999;text-decoration:line-through;">৳ {{ $value->old_price }}</span>
                                        @endif
                                    </div>

                                    <div>
                                        @if (!$value->prosizes->isEmpty() || !$value->procolors->isEmpty())
                                        <div class="cart_btn order_button">
                                            <a href="{{ route('product', $value->slug) }}" class="addcartbutton order-btn">
                                                <span>অর্ডার করুন</span>
                                            </a>
                                        </div>
                                        @else
                                        <div class="cart_btn order_button">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $value->id }}" />
                                                <input type="hidden" name="qty" value="1" />
                                                <button type="submit" class="order-btn">অর্ডার করুন</button>
                                            </form>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            @foreach($homepageads as $homeads)
            <div class="col-md-12">
                <a href="{{$homeads->link}}?sold=show">
                    <img class="img-fluid w-100" src="{{$homeads->image}}"/>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>




@foreach ($homeproducts as $homecat)
    <section class="homeproduct">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sec_title">
                        <h3 class="section-title-header">
                            <span class="section-title-name">{{ $homecat->name }}</span>
                            <a href="{{ route('category', $homecat->slug) }}" class="view_more_btn">View More</a>
                        </h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="product_slider owl-carousel">
                        @foreach ($homecat->products as $key => $value)
                            <div  data-wow-duration="1.5s" data-wow-delay="0.{{ $key }}s">
                                <div class="product-card">
                                    @if($value->old_price)
                                    @php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) @endphp
                                    <div class="discount-badge">
                                        {{ number_format($discount, 0) }}%<br>ছাড়
                                    </div>
                                    @endif

                                    <div class="card-media">
                                        <a href="{{ route('product', $value->slug) }}" style="display:block;width:100%;height:100%;">
                                            <img src="{{ asset($value->image ? $value->image->image : '') }}" alt="{{ $value->name }}" />
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <div style="display:flex;justify-content:space-between;align-items:center;">
                                            <h3 class="card-title">{{ Str::limit($value->name, 35) }}</h3>
                                            <span style="font-size:12px;color:#666;display:flex;align-items:center;gap:4px;">
                                                <span style="color:#ffb400;">★</span>
                                                <span>{{ number_format($value->reviews->avg('ratting') ?? 0, 1) }}</span>
                                            </span>
                                        </div>

                                        <div class="card-price">
                                            <span>৳ {{ $value->new_price }}</span>
                                            @if($value->old_price)
                                            <span style="text-decoration:line-through;color:#999;">৳ {{ $value->old_price }}</span>
                                            @endif
                                        </div>

                                        <div>
                                            @if (!$value->prosizes->isEmpty() || !$value->procolors->isEmpty())
                                            <div class="cart_btn order_button">
                                                <a href="{{ route('product', $value->slug) }}" class="addcartbutton order-btn">
                                                    <span>অর্ডার করুন</span>
                                                </a>
                                            </div>
                                            @else
                                            <div class="cart_btn order_button">
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $value->id }}" />
                                                    <input type="hidden" name="qty" value="1" />
                                                    <button type="submit" style="width:100%;background:#1a1a1a;color:#fff;border:none;padding:10px;border-radius:20px;cursor:pointer;font-size:14px;font-weight:600;">অর্ডার করুন</button>
                                                </form>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach


<section>
    <div class="container">
        <div class="row">
            @foreach($homepageads2 as $homeads2)
            <div class="col-md-12">
                <a href="{{$homeads2->link}}?sold=show">
                    <img class="img-fluid w-100" src="{{$homeads2->image}}"/>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


@if($reviews->count()>0)
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h5 class="text-center text-light py-2" style="background-color:#1d2224">
                        Positive reviews from valued customers
                    </h5>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="customer-review-marquee">
                    <div class="marquee-content">
                        @foreach ($reviews as $review)
                        <div class="border rounded">
                            <img src="{{ asset($review->image) }}" />
                        </div>
                        @endforeach
                        @foreach ($reviews as $review)
                        <div class="border rounded">
                            <img src="{{ asset($review->image) }}" />
                        </div>
                        @endforeach
                        @foreach ($reviews as $review)
                        <div class="border rounded">
                            <img src="{{ asset($review->image) }}" />
                        </div>
                        @endforeach
                        @foreach ($reviews as $review)
                        <div class="border rounded">
                            <img src="{{ asset($review->image) }}" />
                        </div>
                        @endforeach
                        @foreach ($reviews as $review)
                        <div class="border rounded">
                            <img src="{{ asset($review->image) }}" />
                        </div>
                        @endforeach
                        @foreach ($reviews as $review)
                        <div class="border rounded">
                            <img src="{{ asset($review->image) }}" />
                        </div>
                        @endforeach
                        @foreach ($reviews as $review)
                        <div class="border rounded">
                            <img src="{{ asset($review->image) }}" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endif


<section class="footer_top_ads_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="footertop_ads_inner">
                    @foreach ($footertopads as $key => $value)
                        <div class="footertop_ads_item">
                            <a href="{{ $value->link }}">
                                <img style="height: 100%; border-radius: 10px;" src="{{ asset($value->image) }}" alt="" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection @push('script')
<script src="{{ asset('public/frontEnd/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/frontEnd/js/jquery.syotimer.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".main_slider").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            autoplayHoverPause: false,
            margin: 0,
            mouseDrag: true,
            smartSpeed: 8000,
            autoplayTimeout: 3000,
            animateOut: "fadeOutDown",
            animateIn: "slideInDown",

            navText: ["<i class='fa-solid fa-angle-left'></i>",
                "<i class='fa-solid fa-angle-right'></i>"
            ],
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".hotdeals-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                },
            },
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".category-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 8,
                    nav: true,
                    loop: false,
                },
            },
        });

        $(".product_slider").owlCarousel({
            margin: 15,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: false,
                },
            },
        });
		// Marquee animation is handled by CSS, no JavaScript needed
    });
</script>

<script>
    $("#simple_timer").syotimer({
        date: new Date(2015, 0, 1),
        layout: "hms",
        doubleNumbers: false,
        effectType: "opacity",

        periodUnit: "d",
        periodic: true,
        periodInterval: 1,
    });
</script>
<script>
    (function($){
        function equalizeCarouselCards($carousel){
            var $cards = $carousel.find('.product-card');
            if(!$cards.length) return;
            $cards.css('height','auto');
            var max = 0;
            $cards.each(function(){
                var h = $(this).outerHeight();
                if(h>max) max = h;
            });
            if(max>0) $cards.css('height', max+'px');
        }

        function equalizeAll(){
            $('.product_slider, .product-inner, .related_slider, .hotdeals-slider').each(function(){
                equalizeCarouselCards($(this));
            });
        }

        var resizeTimer;
        $(window).on('load resize', function(){
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(equalizeAll, 150);
        });

        $(document).ready(function(){
            // run after carousels initialize
            equalizeAll();
            // Re-run when owl carousel changes
            $('.owl-carousel').on('initialized.owl.carousel refreshed.owl.carousel translated.owl.carousel resized.owl.carousel', function(){
                equalizeCarouselCards($(this));
            });

            // Mouse wheel scroll for marquee
            const marquee = document.querySelector('.customer-review-marquee');
            const marqueeContent = document.querySelector('.customer-review-marquee .marquee-content');
            let scrollPos = 0;

            marquee.addEventListener('wheel', function(e) {
                e.preventDefault();
                scrollPos += e.deltaY * 0.5;
                marqueeContent.style.animation = 'none';
                marqueeContent.style.transform = 'translateX(' + scrollPos + 'px)';
            });

            marquee.addEventListener('mouseleave', function() {
                marqueeContent.style.animation = '';
                scrollPos = 0;
            });
        });
    })(jQuery);
</script>
@endpush
