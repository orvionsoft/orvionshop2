 <?php $__env->startSection('title', 'Home'); ?> <?php $__env->startPush('seo'); ?>
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Open Graph data -->
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="<?php echo e(asset($generalsetting->white_logo)); ?>" />
<meta property="og:description" content="" />
<?php $__env->stopPush(); ?> <?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.carousel.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.theme.default.min.css')); ?>" />
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
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<section class="slider-section" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
             
            <div class="col-sm-3 hidetosm">
                <div class="sidebar-menu" style="margin-top: 26px;">
                    <ul class="hideshow">
                        <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li style="padding: 4px 0">
                                <a href="<?php echo e(route('category', $category->slug)); ?>">
                                   
                                    <?php echo e($category->name); ?>

                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('subcategory', $subcategory->slug)); ?>">
                                                <?php echo e($subcategory->subcategoryName); ?> <i
                                                    class="fa-solid fa-chevron-right"></i> </a>
                                            <ul class="sidebar-childmenu">
                                                <?php $__currentLoopData = $subcategory->childcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $childcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('products', $childcat->slug)); ?>">
                                                            <?php echo e($childcat->childcategoryName); ?>

                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item"  >
                                <img style="border-radius: 10px !important;" src="<?php echo e(asset($value->image)); ?>" alt="" />
                            </div>
                            <!-- slider item -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $sliderbottomads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="ads_item">
                            <a href="<?php echo e($menucategories->first() ? route('category', $menucategories->first()->slug) : '#'); ?>">
                                <img style="border-radius: 10px !important; height: 100%;" src="<?php echo e(asset($value->image)); ?>" alt="" />
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="cat_item">
                            <div class="cat_img">
                                <a href="<?php echo e(route('category', $value->slug)); ?>">
                                    <img src="<?php echo e(asset($value->image)); ?>" alt="" />
                                </a>
                            </div>
                            <div class="cat_name">
                                <a href="<?php echo e(route('category', $value->slug)); ?>">
                                    <?php echo e($value->name); ?>

                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $hitdealsbaner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12">
                <a href="<?php echo e($hotads->link); ?>?sold=show">
                    <img class="img-fluid w-100" src="<?php echo e($hotads->image); ?>"/>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $hotdeal_top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div  data-wow-duration="1.5s" data-wow-delay="0.<?php echo e($key); ?>s">
                            <div class="product-card">
                                <?php if($value->old_price): ?>
                                <?php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) ?>
                                <div class="discount-badge">
                                    <?php echo e(number_format($discount, 0)); ?>%<br>ছাড়
                                </div>
                                <?php endif; ?>

                                <div class="card-media">
                                    <a href="<?php echo e(route('product', $value->slug)); ?>">
                                        <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>" alt="<?php echo e($value->name); ?>" />
                                    </a>
                                </div>

                                <div class="card-body">
                                    <div style="display:flex;justify-content:space-between;align-items:center;">
                                        <h3 class="card-title"><?php echo e(Str::limit($value->name, 35)); ?></h3>
                                        <span style="font-size:12px;color:#666;display:flex;align-items:center;gap:4px;">
                                            <span style="color:#ffb400;">★</span>
                                            <span><?php echo e(number_format($value->reviews->avg('ratting') ?? 0, 1)); ?></span>
                                        </span>
                                    </div>

                                    <div class="card-price">
                                        <span>৳ <?php echo e($value->new_price); ?></span>
                                        <?php if($value->old_price): ?>
                                        <span style="font-size:13px;color:#999;text-decoration:line-through;">৳ <?php echo e($value->old_price); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div>
                                        <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty()): ?>
                                        <div class="cart_btn order_button">
                                            <a href="<?php echo e(route('product', $value->slug)); ?>" class="addcartbutton order-btn">
                                                <span>অর্ডার করুন</span>
                                            </a>
                                        </div>
                                        <?php else: ?>
                                        <div class="cart_btn order_button">
                                            <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                                                <input type="hidden" name="qty" value="1" />
                                                <button type="submit" class="order-btn">অর্ডার করুন</button>
                                            </form>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $homepageads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12">
                <a href="<?php echo e($homeads->link); ?>?sold=show">
                    <img class="img-fluid w-100" src="<?php echo e($homeads->image); ?>"/>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>




<?php $__currentLoopData = $homeproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homecat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="homeproduct">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sec_title">
                        <h3 class="section-title-header">
                            <span class="section-title-name"><?php echo e($homecat->name); ?></span>
                            <a href="<?php echo e(route('category', $homecat->slug)); ?>" class="view_more_btn">View More</a>
                        </h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="product_slider owl-carousel">
                        <?php $__currentLoopData = $homecat->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div  data-wow-duration="1.5s" data-wow-delay="0.<?php echo e($key); ?>s">
                                <div class="product-card">
                                    <?php if($value->old_price): ?>
                                    <?php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) ?>
                                    <div class="discount-badge">
                                        <?php echo e(number_format($discount, 0)); ?>%<br>ছাড়
                                    </div>
                                    <?php endif; ?>

                                    <div class="card-media">
                                        <a href="<?php echo e(route('product', $value->slug)); ?>" style="display:block;width:100%;height:100%;">
                                            <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>" alt="<?php echo e($value->name); ?>" />
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <div style="display:flex;justify-content:space-between;align-items:center;">
                                            <h3 class="card-title"><?php echo e(Str::limit($value->name, 35)); ?></h3>
                                            <span style="font-size:12px;color:#666;display:flex;align-items:center;gap:4px;">
                                                <span style="color:#ffb400;">★</span>
                                                <span><?php echo e(number_format($value->reviews->avg('ratting') ?? 0, 1)); ?></span>
                                            </span>
                                        </div>

                                        <div class="card-price">
                                            <span>৳ <?php echo e($value->new_price); ?></span>
                                            <?php if($value->old_price): ?>
                                            <span style="text-decoration:line-through;color:#999;">৳ <?php echo e($value->old_price); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div>
                                            <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty()): ?>
                                            <div class="cart_btn order_button">
                                                <a href="<?php echo e(route('product', $value->slug)); ?>" class="addcartbutton order-btn">
                                                    <span>অর্ডার করুন</span>
                                                </a>
                                            </div>
                                            <?php else: ?>
                                            <div class="cart_btn order_button">
                                                <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                                                    <input type="hidden" name="qty" value="1" />
                                                    <button type="submit" style="width:100%;background:#1a1a1a;color:#fff;border:none;padding:10px;border-radius:20px;cursor:pointer;font-size:14px;font-weight:600;">অর্ডার করুন</button>
                                                </form>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<section>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $homepageads2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeads2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12">
                <a href="<?php echo e($homeads2->link); ?>?sold=show">
                    <img class="img-fluid w-100" src="<?php echo e($homeads2->image); ?>"/>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php if($reviews->count()>0): ?>
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
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border rounded">
                            <img src="<?php echo e(asset($review->image)); ?>" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border rounded">
                            <img src="<?php echo e(asset($review->image)); ?>" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border rounded">
                            <img src="<?php echo e(asset($review->image)); ?>" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border rounded">
                            <img src="<?php echo e(asset($review->image)); ?>" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border rounded">
                            <img src="<?php echo e(asset($review->image)); ?>" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border rounded">
                            <img src="<?php echo e(asset($review->image)); ?>" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border rounded">
                            <img src="<?php echo e(asset($review->image)); ?>" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>


<section class="footer_top_ads_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="footertop_ads_inner">
                    <?php $__currentLoopData = $footertopads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="footertop_ads_item">
                            <a href="<?php echo e($value->link); ?>">
                                <img style="height: 100%; border-radius: 10px;" src="<?php echo e(asset($value->image)); ?>" alt="" />
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?> <?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontEnd/js/jquery.syotimer.min.js')); ?>"></script>

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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\shop\resources\views/frontEnd/layouts/pages/index.blade.php ENDPATH**/ ?>