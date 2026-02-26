<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e($generalsetting->name); ?></title>
        <!-- App favicon -->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2355381278153504');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2355381278153504&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
        <link rel="shortcut icon" href="<?php echo e(asset($generalsetting->favicon)); ?>" alt="Super Ecommerce Favicon" />
        <meta name="author" content="Super Ecommerce" />
        <link rel="canonical" href="" />
        <?php echo $__env->yieldPushContent('seo'); ?> 
        <?php echo $__env->yieldPushContent('css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/animate.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/all.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.carousel.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.theme.default.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/mobile-menu.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/select2.min.css')); ?>" />
        <!-- toastr css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/backEnd/')); ?>/assets/css/toastr.min.css" />

        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/wsit-menu.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/style.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/responsive.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/main.css')); ?>" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta name="facebook-domain-verification" content="38f1w8335btoklo88dyfl63ba3st2e" />
        <style>
            .float{
            	position:fixed;
            	color:white;
            	width:60px;
            	height:60px;
            	bottom:40px;
            	left:40px;
            	background-color:#25d366;
            	color:#FFF;
            	border-radius:50px;
            	text-align:center;
                font-size:30px;
            	box-shadow: 2px 2px 3px #999;
                z-index:100;
            }
            
            .my-float{
            	margin-top:16px;
            }
            /* Media query to hide the .float class on screens 768px and smaller */
            @media (max-width: 767px) {
                .float {
                    display: none;
                }
            }
        </style>
        <style>
            /* Global product-card styles matching the provided design (visual only) */
            .product-card{width:100%;max-width:220px;background:#fff;border-radius:15px;border:1px solid #e0e0e0;padding:15px;box-shadow:0 4px 6px rgba(0,0,0,0.05);position:relative;display:flex;flex-direction:column;align-items:stretch;box-sizing:border-box;margin:0 auto}
            .product-card .card-media{background:#e9e9e9;border-radius:12px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:8px;height:180px}
            .product-card .card-media img{max-width:100%;height:auto;display:block;margin:0 auto}
            .product-card .discount-badge{position:absolute;top:10px;right:10px;background:#1a1a1a;color:#fff;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;line-height:1.1;text-align:center;z-index:5}

            .product-card .card-body{margin-top:15px;display:flex;flex-direction:column;gap:8px}
            .product-card .card-title{margin:0;font-size:14px;font-weight:700;color:#333;line-height:1.2}
            .product-card .card-price{margin:10px 0}
            .product-card .card-price .new-price{font-size:18px;font-weight:800;color:#000}
            .product-card .card-price .old-price{font-size:13px;color:#999;text-decoration:line-through;margin-left:6px}

            .product-card .cart_btn{margin-top:8px;padding-bottom:0}
            .product-card .order-btn{width:100%;background:#1a1a1a;color:#fff;border:none;padding:10px;border-radius:20px;cursor:pointer;font-size:14px;font-weight:600;display:inline-block;text-align:center;box-sizing:border-box}
            .product-card .cart_btn .order-btn,.product-card .cart_btn button.order-btn{display:flex;align-items:center;justify-content:center;width:100%}
            /* Enforce exact CTA appearance site-wide (override per-page rules) */
            .product-card .order-btn,
            .product-card .cart_btn .order-btn,
            .product-card .cart_btn button.order-btn{
                width:100% !important;
                background:#1a1a1a !important;
                color:#fff !important;
                border:none !important;
                padding:10px !important;
                border-radius:20px !important;
                font-size:14px !important;
                font-weight:600 !important;
                display:flex !important;
                align-items:center !important;
                justify-content:center !important;
                box-sizing:border-box !important;
                cursor:pointer !important;
                height:auto !important;
                min-height:0 !important;
            }
            .product-card .order-btn span,
            .product-card .cart_btn .order-btn span,
            .product-card .cart_btn button.order-btn span{display:block}
            .product-card .order-btn:hover,
            .product-card .cart_btn .order-btn:hover,
            .product-card .cart_btn button.order-btn:hover,
            .product-card .order-btn:focus,
            .product-card .cart_btn .order-btn:focus,
            .product-card .cart_btn button.order-btn:focus{
                background:#1a1a1a !important;
                color:#fff !important;
                text-decoration:none !important;
                box-shadow:none !important;
                transform:none !important;
            }

            /* Keep equal height helpers (JS also enforces heights) */
            .product-card .card-body{flex:1;display:flex;flex-direction:column;justify-content:space-between}
            .product-card{min-height:300px}

            @media (max-width: 575px){
                .product-card{max-width:160px;padding:10px;border-radius:12px}
                .product-card .card-media{height:140px;border-radius:10px}
                .product-card .card-title{font-size:13px}
            }
            @media (min-width:576px) and (max-width: 991px){
                .product-card{max-width:200px}
                .product-card .card-media{height:160px}
            }

            /* Header Marquee Styles */
            @keyframes headerMarquee {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(-50%);
                }
            }

            .header-marquee-container {
                overflow: hidden;
                flex: 1;
            }

            .header-marquee-text {
                display: inline-block;
                white-space: nowrap;
                animation: headerMarquee 30s linear infinite;
                padding-right: 50px;
            }

            .header-marquee-container:hover .header-marquee-text {
                animation-play-state: paused;
            }
        </style>
        <?php $__currentLoopData = $pixels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pixel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "<?php echo e($pixel->code); ?>");
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=<?php echo e($pixel->code); ?>&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php $__currentLoopData = $gtm_code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gtm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Google tag (gtag.js) -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-<?php echo e($gtm->code); ?>');</script>
        <!-- End Google Tag Manager -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </head>
    <body class="gotop">
        <?php $subtotal = Cart::instance('shopping')->subtotal(); ?>
        <div class="mobile-menu">
                <div class="mobile-menu-logo">
                    <div class="logo-image">
                        <img src="<?php echo e(asset($generalsetting->dark_logo)); ?>" alt="" />
                    </div>
                    <div class="mobile-menu-close">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <ul class="first-nav">
                    <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="parent-category">
                        <a href="<?php echo e(url('category/'.$scategory->slug)); ?>" class="menu-category-name">
                            <img src="<?php echo e(asset($scategory->image)); ?>" alt="" class="side_cat_img" />
                            <?php echo e($scategory->name); ?>

                        </a>
                        <?php if($scategory->subcategories->count() > 0): ?>
                        <span class="menu-category-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        <?php endif; ?>
                        <ul class="second-nav" style="display: none;">
                            <?php $__currentLoopData = $scategory->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="parent-subcategory">
                                <a href="<?php echo e(url('subcategory/'.$subcategory->slug)); ?>" class="menu-subcategory-name"><?php echo e($subcategory->subcategoryName); ?></a>
                                <?php if($subcategory->childcategories->count() > 0): ?>
                                <span class="menu-subcategory-toggle"><i class="fa fa-chevron-down"></i></span>
                                <?php endif; ?>
                                <ul class="third-nav" style="display: none;">
                                    <?php $__currentLoopData = $subcategory->childcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="childcategory"><a href="<?php echo e(url('products/'.$childcat->slug)); ?>" class="menu-childcategory-name"><?php echo e($childcat->childcategoryName); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
<style>
/* ===== CATEGORY DROPDOWN FIX (WORKS ALL PAGES) ===== */

.category-wrapper {
    position: relative;
}

.category-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    width: 250px;
    background: #fff;
    border: 1px solid #eee;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    display: none;
    z-index: 9999;
}

.category-wrapper:hover .category-dropdown {
    display: block !important;
}

/* ===== MULTI LEVEL MENU ===== */

.category-dropdown ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.category-dropdown li {
    position: relative;
}

.category-dropdown > ul > li > a {
    display: block;
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #f1f1f1;
}

.category-dropdown > ul > li > a:hover {
    background: #f5f5f5;
}

.sub-menu {
    position: absolute;
    top: 0;
    left: 100%;
    width: 250px;
    background: #fff;
    border: 1px solid #eee;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    display: none;
    z-index: 9999;
}

.category-dropdown li:hover > .sub-menu {
    display: block;
}

.sub-menu a {
    display: block;
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #f1f1f1;
}

.sub-menu a:hover {
    background: #f5f5f5;
}
</style>
<style>

/* =====================================
   GLOBAL FIX
===================================== */

* {
    box-sizing: border-box;
}

img {
    max-width: 100%;
    height: auto;
}

/* =====================================
   TABLET RESPONSIVE (≤ 991px)
===================================== */

@media (max-width: 991px) {

    /* Top bar padding */
    header > div:first-child {
        padding: 8px 20px !important;
    }

    /* Logo + Search + Right */
    header > div:nth-child(2) {
        flex-direction: column !important;
        align-items: stretch !important;
        gap: 15px !important;
        padding: 15px 20px !important;
    }

    /* Search full width */
    header form {
        width: 100% !important;
    }

    /* Right side icons */
    header > div:nth-child(2) > div:last-child {
        width: 100% !important;
        justify-content: space-between !important;
        flex-wrap: wrap !important;
        gap: 15px !important;
    }

    /* Hide desktop category dropdown */
    .category-wrapper {
        display: none !important;
    }

    /* Menu bar spacing */
    header > div:nth-child(3) {
        padding: 10px 20px !important;
        flex-wrap: wrap !important;
    }

    /* Hide main nav links */
    header > div:nth-child(3) > div:nth-child(2) {
        display: none !important;
    }

    /* Hot deals center */
    header > div:nth-child(3) > div:last-child {
        margin-left: 0 !important;
        width: 100% !important;
        text-align: center !important;
        margin-top: 5px !important;
    }

}

/* =====================================
   MOBILE RESPONSIVE (≤ 767px)
===================================== */

@media (max-width: 767px) {

    /* Top bar stacked */
    header > div:first-child {
        flex-direction: column !important;
        text-align: center !important;
        gap: 5px !important;
        padding: 8px 15px !important;
        font-size: 12px !important;
    }

    /* Logo smaller */
    .menu-logo img {
        height: 45px !important;
    }

    /* Logo + Search block */
    header > div:nth-child(2) {
        padding: 15px !important;
    }

    /* Search full width */
    header form {
        width: 100% !important;
        margin-top: 10px !important;
    }

    /* Right side icons evenly spaced */
    header > div:nth-child(2) > div:last-child {
        justify-content: space-around !important;
        font-size: 13px !important;
    }

    /* Footer spacing */
    footer {
        padding: 40px 20px 20px 20px !important;
    }

    footer > div:first-child {
        flex-direction: column !important;
        gap: 30px !important;
    }

    footer > div:last-child {
        flex-direction: column !important;
        text-align: center !important;
        gap: 15px !important;
    }

}

/* =====================================
   EXTRA SMALL DEVICES (≤ 480px)
===================================== */

@media (max-width: 480px) {

    header form input {
        font-size: 13px !important;
    }

    header form button {
        width: 28px !important;
        height: 28px !important;
    }

    #cart-qty {
        top: -6px !important;
        right: -10px !important;
    }

}

</style>


<header style="font-family: 'Inter', sans-serif; width: 100%; border-bottom: 1px solid #ddd;">

    <!-- Top Bar -->
    <div style="background-color: #1a1a1a; color: #fff; padding: 8px 50px; display: flex; align-items: center; font-size: 13px; justify-content: space-between; gap: 30px;">
        
        <div style="display: flex; align-items: center; flex-shrink: 0;">
            📞 <?php echo e($generalsetting->phone ?? '(406) 555-0120'); ?>

        </div>

        <div class="header-marquee-container">
            <span class="header-marquee-text">Orvionshop2  অনলাইন শপে আপনাকে স্বাগতম || অনলাইনে আস্থা ও বিশ্বস্ততার সাথে সারা বাংলাদেশে হোম ডেলিভারী দিয়ে থাকি অর্ডার করতে অগ্রিম টাকা দিতে হবে না এ্যাডভান্স বিকাশ পেমেন্টে ৫% ডিসকাউন্ট ৩-৫ দিনে সারাদেশে হোম ডেলিভারী দেওয়া হয় ক্যাশঅন ডেলিভারীর সুবিধা রয়েছে, তাই অর্ডার করুন নিশ্চিন্তে ধন্যবাদ || Orvionshop2  অনলাইন শপে আপনাকে স্বাগতম || অনলাইনে আস্থা ও বিশ্বস্ততার সাথে সারা বাংলাদেশে হোম ডেলিভারী দিয়ে থাকি অর্ডার করতে অগ্রিম টাকা দিতে হবে না এ্যাডভান্স বিকাশ পেমেন্টে ৫% ডিসকাউন্ট ৩-৫ দিনে সারাদেশে হোম ডেলিভারী দেওয়া হয় ক্যাশঅন ডেলিভারীর সুবিধা রয়েছে, তাই অর্ডার করুন নিশ্চিন্তে ধন্যবাদ</span>
        </div>

    </div>

    <!-- Logo + Search + Right -->
    <div style="display: flex; align-items: center; justify-content: space-between; padding: 15px 50px; background: #fff;">

        <!-- Logo -->
<div class="menu-logo">
                        <a  href="<?php echo e(route('home')); ?>"><img style="height: 60px" src="<?php echo e(asset($generalsetting->dark_logo)); ?>" alt="" /></a>
      </div>

        <!-- Search -->
        <form action="<?php echo e(route('search')); ?>" method="GET"
            style="display: flex; align-items: center; background: #f0f2f5; border-radius: 25px; padding: 5px 5px 5px 20px; width: 45%; border: 1px solid #e0e0e0; position:relative;">
        
            <input type="text"
                name="keyword"
                class="search_keyword"
                placeholder="Search for products"
                autocomplete="off"
                style="border: none; background: transparent; width: 100%; outline: none; font-size: 14px;">

            <button type="submit"
                style="background: #1a1a1a; border: none; border-radius: 50%; width: 32px; height: 32px; color: white; cursor: pointer;">
                🔍
            </button>

            <div class="search_result"
                style="position:absolute; top:110%; left:0; width:100%; background:#fff; border:1px solid #eee; z-index:999; display:none;">
            </div>
        </form>

        <!-- Right Side -->
        <div style="display: flex; gap: 25px; font-size: 14px; color: #333;">

            <a href="<?php echo e(route('customer.order_track')); ?>" style="text-decoration:none; color:#333;">
                🚚 Track Order
            </a>

          <a href="<?php echo e(route('customer.checkout')); ?>" class="cart-link">
    🛒 Cart
    <span id="cart-qty" class="cart-badge">
        <?php echo e(Cart::instance('shopping')->count()); ?>

    </span>
</a>

         <style>
.cart-link{
    position: relative;
    text-decoration: none;
    color: #333;
    font-weight: 500;
    display: inline-block;
}

/* শুধু নাম্বার একটু উপরে উঠবে */
.cart-badge{
    position: absolute;
    top: -8px;
    right: -2px;
    font-size: 12px;
    font-weight: 600;
    color: #000;
}
</style>


            <?php if(Auth::guard('customer')->user()): ?>
                <a href="<?php echo e(route('customer.account')); ?>" style="text-decoration:none; color:#333;">
                    👤 Account
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('customer.login')); ?>" style="text-decoration:none; color:#333;">
                    👤 Sign In
                </a>
            <?php endif; ?>

        </div>

    </div>

    <!-- Menu Bar -->
    <div style="display: flex; align-items: center; padding: 0 50px; background: #fff; border-top: 1px solid #f0f0f0;">

        <!-- All Categories -->
        <div class="category-wrapper">

            <div style="background: #1a1a1a; color: #fff; padding: 12px 90px; font-weight: 600; font-size: 14px; cursor:pointer;">
                ☰ All Categories
            </div>

            <div class="category-dropdown">
                <ul>

                    <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(url('category/'.$category->slug)); ?>">
                            <?php echo e($category->name); ?>

                        </a>

                        <?php if($category->subcategories->count() > 0): ?>
                        <ul class="sub-menu">

                            <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(url('subcategory/'.$subcategory->slug)); ?>">
                                    <?php echo e($subcategory->subcategoryName); ?>

                                </a>

                                <?php if($subcategory->childcategories->count() > 0): ?>
                                <ul class="sub-menu">

                                    <?php $__currentLoopData = $subcategory->childcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(url('products/'.$child->slug)); ?>">
                                            <?php echo e($child->childcategoryName); ?>

                                        </a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                                <?php endif; ?>

                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                        <?php endif; ?>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>

        </div>

        <!-- Main Menu -->
        <div style="margin-left: 30px; display: flex; gap: 25px; font-size: 14px; font-weight: 500;">
            <a href="<?php echo e(route('home')); ?>" style="text-decoration:none; color:#444;">Home</a>
            <a href="<?php echo e(route('contact')); ?>" style="text-decoration:none; color:#444;">Contact</a>
        </div>

        <!-- Hot Deals -->
        <div style="margin-left: auto; font-weight: bold; font-size: 14px;">
            <a href="<?php echo e(route('hotdeals')); ?>" style="text-decoration:none; color:#e67e22;">
                🔥 Hot Deals
            </a>
        </div>

    </div>

</header>


        <div id="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
            <!-- content end -->
        <style>
            @media (max-width: 768px) {
                .footer-responsive {
                    padding: 40px 20px 20px 20px !important;
                }
                .footer-section {
                    flex: 1 !important;
                    min-width: 100% !important;
                }
            }
        </style>
        <footer class="footer-responsive" style="background-color: #062a57; color: #ffffff; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; padding: 60px 80px 30px 80px;">
            
            <div style="display: flex; justify-content: space-between; gap: 40px; margin-bottom: 50px; flex-wrap: wrap;">
                
                <!-- Company Info -->
                <div style="flex: 1; min-width: 250px;">
                    <div style="display: flex; align-items: center; margin-bottom: 20px;">
                        <a href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset($generalsetting->white_logo)); ?>" alt="<?php echo e($generalsetting->name); ?>" style="height: 35px; margin-right: 10px;">
                        </a>
                    </div>

                    <p style="color: #ffffff; font-size: 15px; margin: 5px 0;">
                        <?php echo e($contact->address); ?>

                    </p>
                    <p style="color: #ffffff; font-size: 15px; margin: 5px 0;">
                        <a href="tel:<?php echo e($contact->hotline); ?>" style="color: #ffffff; text-decoration: none;"><?php echo e($contact->hotline); ?></a>
                    </p>
                </div>

                               <!-- Useful Link -->
<div style="flex: 0.6; min-width: 180px;">
    <h3 style="font-size: 16px; margin-bottom: 20px; font-weight: 600;">
        Useful Link
    </h3>

    <ul style="
        list-style: none;
        padding: 0;
        margin: 0;
        color: #b0b0b0;
        font-size: 14px;
        line-height: 2.2;
        display: flex;
        flex-direction: column;
    ">
        <li style="display: block;">
            <a href="<?php echo e(route('contact')); ?>" style="color: #b0b0b0; text-decoration: none;">
                Contact Us
            </a>
        </li>

        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li style="display: block;">
            <a href="<?php echo e(route('page',['slug'=>$page->slug])); ?>" style="color: #b0b0b0; text-decoration: none;">
                <?php echo e($page->name); ?>

            </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>


         <!-- Link -->
<div style="flex: 0.6; min-width: 180px;">
    <h3 style="font-size: 16px; margin-bottom: 20px; font-weight: 600;">
        Link
    </h3>

    <ul style="
        list-style: none;
        padding: 0;
        margin: 0;
        color: #b0b0b0;
        font-size: 14px;
        line-height: 2.2;
        display: flex;
        flex-direction: column;
    ">
        <?php $__currentLoopData = $pagesright; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li style="display:block;">
            <a href="<?php echo e(route('page',['slug'=>$value->slug])); ?>" 
               style="color: #b0b0b0; text-decoration: none;">
               <?php echo e($value->name); ?>

            </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

                <!-- Stay Connected -->
                <div style="flex: 0.8; min-width: 200px;">
                    <h3 style="font-size: 16px; margin-bottom: 20px; font-weight: 600;">Stay Connected</h3>
                    
                    <div style="display: flex; gap: 20px; margin-bottom: 25px;">
                        <?php $__currentLoopData = $socialicons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($value->link); ?>" style="font-size: 18px; cursor: pointer; color: #ffffff; text-decoration: none;"><i class="<?php echo e($value->icon); ?>"></i></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <h4 style="font-size: 15px; margin-bottom: 15px;">Download App</h4>

                    <a href="">
                        <img src="<?php echo e(asset('public/frontEnd/images/app-download.png')); ?>" alt="" style="max-width: 150px; width: 100%; height: auto;" />
                    </a>
                </div>
            </div>

            <hr style="border: 0; border-top: 1px solid #333; margin-bottom: 30px;">

            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 14px; color: #b0b0b0; flex-wrap: wrap; gap: 20px;">
                <div>© <?php echo e(date('Y')); ?> <?php echo e($generalsetting->name); ?> | Website Designed by: <a href="https://www.orvionsoft.com" style="color: #b0b0b0;">OrvionSoft</a></div>
                <div style="display: flex; gap: 30px;">
                    <span style="cursor: pointer;"><a href="<?php echo e(route('page',['slug'=>'terms-conditions'])); ?>" style="color: #b0b0b0; text-decoration: none;">Terms & Conditions</a></span>
                    <span style="cursor: pointer;"><a href="<?php echo e(route('page',['slug'=>'privacy-policy'])); ?>" style="color: #b0b0b0; text-decoration: none;">Privacy Policy</a></span>
                </div>
            </div>
        </footer>
        

        <div class="footer_nav">
            <ul>
                <li>
                    <a class="toggle">
                        <span>
                            <i class="fa-solid fa-bars"></i>
                        </span>
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo e($contact->whatsapp); ?>&text=Hello">
                        <span>
                            <i class="fa fa-whatsapp"></i>
                        </span>
                        <span>Message</span>
                    </a>
                </li>

                <li class="mobile_home">
                    <a href="<?php echo e(route('home')); ?>">
                        <span><i class="fa-solid fa-home"></i></span> <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('customer.checkout')); ?>">
                        <span>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <span>Cart (<b class="mobilecart-qty"><?php echo e(Cart::instance('shopping')->count()); ?></b>)</span>
                    </a>
                </li>
                <?php if(Auth::guard('customer')->user()): ?>
                <li>
                    <a href="<?php echo e(route('customer.account')); ?>">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Account</span>
                    </a>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo e(route('customer.login')); ?>">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Login</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        

        <div class="scrolltop" style="">
            <div class="scroll">
                <i class="fa fa-angle-up"></i>
            </div>
        </div>

        
        <a href="https://api.whatsapp.com/send?phone=<?php echo e($contact->whatsapp); ?>&text=Hello" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
        <!-- /. fixed sidebar -->

        <div id="custom-modal"></div>
        <div id="page-overlay"></div>
        <div id="loading"><div class="custom-loader"></div></div>

        <script src="<?php echo e(asset('public/frontEnd/js/jquery-3.6.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/mobile-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/wsit-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/mobile-menu-init.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/wow.min.js')); ?>"></script>
        <script>
            new WOW().init();
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <!-- feather icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
        <script src="<?php echo e(asset('public/backEnd/')); ?>/assets/js/toastr.min.js"></script>
        <?php echo Toastr::message(); ?> <?php echo $__env->yieldPushContent('script'); ?>
        <script>
            $(".quick_view").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('quickview')); ?>",
                        success: function (data) {
                            if (data) {
                                $("#custom-modal").html(data);
                                $("#custom-modal").show();
                                $("#loading").hide();
                                $("#page-overlay").show();
                            }
                        },
                    });
                }
            });
        </script>
        <!-- quick view end -->
        <!-- cart js start -->
        <script>
            $(".addcartbutton").on("click", function (e) {
                e.preventDefault();
                var id = $(this).data("id");
                var checkout = $(this).data("checkout");
                var qty = 1;
                if (id) {
                    $.ajax({
                        cache: "false",
                        type: "GET",
                        url: "<?php echo e(url('add-to-cart')); ?>/" + id + "/" + qty,
                        dataType: "json",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart successfully');
                                if(checkout){
                                    window.location.href = '<?php echo e(route('customer.checkout')); ?>'; 
                                }
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });
            $(".cart_store").on("click", function () {
                var id = $(this).data("id");
                var qty = $(this).parent().find("input").val();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, qty: qty ? qty : 1 },
                        url: "<?php echo e(route('cart.store')); ?>",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart succfully');
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_remove").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.remove')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart() + cart_summary();
                            }
                        },
                    });
                }
            });

            $(".cart_increment").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.increment')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_decrement").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.decrement')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

      
         function cart_count() {
    $.ajax({
        type: "GET",
        url: "<?php echo e(route('cart.count')); ?>",
        success: function (data) {
            try {
                var str = data === undefined || data === null ? '' : data.toString();
                var m = str.match(/\d+/);
                var qty = m ? parseInt(m[0]) : 0;
                $("#cart-qty").text(qty);
            } catch (e) {
                $("#cart-qty").text(0);
            }
        },
    });
}

            function mobile_cart() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('mobile.cart.count')); ?>",
                    success: function (data) {
                        try {
                            var str = data === undefined || data === null ? '' : data.toString();
                            var m = str.match(/\d+/);
                            if (m) {
                                $(".mobilecart-qty").text(parseInt(m[0]));
                            } else {
                                $(".mobilecart-qty").empty();
                            }
                        } catch (e) {
                            $(".mobilecart-qty").empty();
                        }
                    },
                });
            }
            function cart_summary() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('shipping.charge')); ?>",
                    dataType: "html",
                    success: function (response) {
                        $(".cart-summary").html(response);
                    },
                });
            }
        </script>
        <!-- cart js end -->
      <script>
$(document).ready(function(){

    // DESKTOP LIVE SEARCH
    $(document).on("keyup", ".search_keyword", function () {

        var keyword = $(this).val();

        if(keyword.length > 0){

            $.ajax({
                type: "GET",
                data: { keyword: keyword },
                url: "<?php echo e(route('livesearch')); ?>",
                success: function (products) {

                    if (products) {
                        $(".search_result").html(products).show();
                    } else {
                        $(".search_result").hide();
                    }

                }
            });

        } else {
            $(".search_result").hide();
        }

    });

    // MOBILE LIVE SEARCH
    $(document).on("keyup", ".msearch_keyword", function () {

        var keyword = $(this).val();

        if(keyword.length > 0){

            $.ajax({
                type: "GET",
                data: { keyword: keyword },
                url: "<?php echo e(route('livesearch')); ?>",
                success: function (products) {

                    if (products) {
                        $(".search_result").html(products).show();
                    } else {
                        $(".search_result").hide();
                    }

                }
            });

        } else {
            $(".search_result").hide();
        }

    });

    // CLICK OUTSIDE HIDE
    $(document).click(function(e) {
        if (!$(e.target).closest('.search_keyword').length) {
            $(".search_result").hide();
        }
    });

});
</script>

        <!-- search js start -->
        <script></script>
        <script></script>
        <script>
            $(".district").on("change", function () {
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    data: { id: id },
                    url: "<?php echo e(route('districts')); ?>",
                    success: function (res) {
                        if (res) {
                            $(".area").empty();
                            $(".area").append('<option value="">Select..</option>');
                            $.each(res, function (key, value) {
                                $(".area").append('<option value="' + key + '" >' + value + "</option>");
                            });
                        } else {
                            $(".area").empty();
                        }
                    },
                });
            });
        </script>
        <script>
            $(".toggle").on("click", function () {
                $("#page-overlay").show();
                $(".mobile-menu").addClass("active");
            });

            $("#page-overlay").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
                $(".feature-products").removeClass("active");
            });

            $(".mobile-menu-close").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
            });

            $(".mobile-filter-toggle").on("click", function () {
                $("#page-overlay").show();
                $(".feature-products").addClass("active");
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".parent-category").each(function () {
                    const menuCatToggle = $(this).find(".menu-category-toggle");
                    const secondNav = $(this).find(".second-nav");

                    menuCatToggle.on("click", function () {
                        menuCatToggle.toggleClass("active");
                        secondNav.slideToggle("fast");
                        $(this).closest(".parent-category").toggleClass("active");
                    });
                });
                $(".parent-subcategory").each(function () {
                    const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
                    const thirdNav = $(this).find(".third-nav");

                    menuSubcatToggle.on("click", function () {
                        menuSubcatToggle.toggleClass("active");
                        thirdNav.slideToggle("fast");
                        $(this).closest(".parent-subcategory").toggleClass("active");
                    });
                });
            });
        </script>

        <script>
            var menu = new MmenuLight(document.querySelector("#menu"), "all");

            var navigator = menu.navigation({
                selectedClass: "Selected",
                slidingSubmenus: true,
                // theme: 'dark',
                title: "ক্যাটাগরি",
            });

            var drawer = menu.offcanvas({
                // position: 'left'
            });

            //  Open the menu.
            document.querySelector('a[href="#menu"]').addEventListener("click", (evnt) => {
                evnt.preventDefault();
                drawer.open();
            });
        </script>

        <script>
            // document.addEventListener("DOMContentLoaded", function () {
            //     window.addEventListener("scroll", function () {
            //         if (window.scrollY > 200) {
            //             document.getElementById("navbar_top").classList.add("fixed-top");
            //         } else {
            //             document.getElementById("navbar_top").classList.remove("fixed-top");
            //             document.body.style.paddingTop = "0";
            //         }
            //     });
            // });
            /*=== Main Menu Fixed === */
            // document.addEventListener("DOMContentLoaded", function () {
            //     window.addEventListener("scroll", function () {
            //         if (window.scrollY > 0) {
            //             document.getElementById("m_navbar_top").classList.add("fixed-top");
            //             // add padding top to show content behind navbar
            //             navbar_height = document.querySelector(".navbar").offsetHeight;
            //             document.body.style.paddingTop = navbar_height + "px";
            //         } else {
            //             document.getElementById("m_navbar_top").classList.remove("fixed-top");
            //             // remove padding top from body
            //             document.body.style.paddingTop = "0";
            //         }
            //     });
            // });
            /*=== Main Menu Fixed === */

            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $(".scrolltop:hidden").stop(true, true).fadeIn();
                } else {
                    $(".scrolltop").stop(true, true).fadeOut();
                }
            });
            $(function () {
                $(".scroll").click(function () {
                    $("html,body").animate({ scrollTop: $(".gotop").offset().top }, "1000");
                    return false;
                });
            });
        </script>
        <script>
            $(".filter_btn").click(function(){
               $(".filter_sidebar").addClass('active');
               $("body").css("overflow-y", "hidden");
            })
            $(".filter_close").click(function(){
               $(".filter_sidebar").removeClass('active');
               $("body").css("overflow-y", "auto");
            })
        </script>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K29C9BKJ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>
</html>
<?php /**PATH C:\laragon\www\shop\resources\views/frontEnd/layouts/master.blade.php ENDPATH**/ ?>