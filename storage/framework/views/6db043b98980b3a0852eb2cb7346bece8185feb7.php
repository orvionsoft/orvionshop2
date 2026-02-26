 
<?php $__env->startSection('title','Hot Deals'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/jquery-ui.css')); ?>" />
<style>
/* Product card styles (kept visual-only, same as home) */
.product-card{width:100%;max-width:220px;background:#fff;border-radius:15px;border:1px solid #e0e0e0;padding:12px 12px 10px;box-shadow:0 4px 6px rgba(0,0,0,0.05);position:relative;display:flex;flex-direction:column;align-items:stretch;box-sizing:border-box;margin:0 auto}
.product-card .card-media{background:#e9e9e9;border-radius:12px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:8px;height:180px}
.product-card .card-media img{max-width:100%;height:auto;display:block;margin:0 auto}
.product-card .card-body{margin-top:14px;display:flex;flex-direction:column;gap:8px}
.product-card .card-title{margin:0;font-size:14px;font-weight:700;color:#333;line-height:1.2;display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis}
.product-card .card-price{display:flex;align-items:center;gap:8px}
.product-card .order-btn{width:100%;background:#1a1a1a;color:#fff;border:none;padding:0;border-radius:20px;font-size:14px;font-weight:600;box-sizing:border-box}
.product-card .cart_btn .order-btn,
.product-card .cart_btn button.order-btn{display:flex;width:100%;box-sizing:border-box;align-items:center;justify-content:center;background:#1a1a1a;color:#fff;border:none;padding:0;border-radius:20px;font-size:14px;font-weight:600;height:44px}
product-card .cart_btn .order-btn span,
product-card .cart_btn button.order-btn span{display:block;line-height:normal}
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

/* Equal-height helpers for product lists on this page */
.product-item-row .product-card{height:100%;display:flex;flex-direction:column}
.product-card .card-body{flex:1;display:flex;flex-direction:column;justify-content:space-between;gap:8px}
.product-card .cart_btn{margin-top:0}
.product-card{min-height:300px}
.product-card .cart_btn{padding-bottom:0}

@media (max-width: 575px){
    .product-card{max-width:160px;padding:10px;border-radius:12px}
    .product-card .card-media{height:140px;border-radius:10px}
    .product-card .card-title{font-size:13px}
}
@media (min-width:576px) and (max-width: 991px){
    .product-card{max-width:200px}
    .product-card .card-media{height:160px}
}
</style>
<?php $__env->stopPush(); ?> 
<?php $__env->startSection('content'); ?>
<section class="product-section">
    <div class="container" style="margin-top: 50px;">
        <div class="sorting-section">
            <div class="row">
                <div class="col-sm-6">
                    <div class="category-breadcrumb d-flex align-items-center">
                        <a href="<?php echo e(route('home')); ?>">Home</a>
                        <span>/</span>
                        <strong>Hot Deals</strong>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="showing-data">
                                <span>Showing <?php echo e($products->firstItem()); ?>-<?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> Results</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mobile-filter-toggle">
                                <i class="fa fa-list-ul"></i><span>filter</span>
                            </div>
                            <div class="page-sort">
                                <form action="" class="sort-form">
                                    <select name="sort" class="form-control form-select sort">
                                        <option value="1" <?php if(request()->get('sort')==1): ?>selected <?php endif; ?>>Product: Latest</option>
                                        <option value="2" <?php if(request()->get('sort')==2): ?>selected <?php endif; ?>>Product: Oldest</option>
                                        <option value="3" <?php if(request()->get('sort')==3): ?>selected <?php endif; ?>>Price: High To Low</option>
                                        <option value="4" <?php if(request()->get('sort')==4): ?>selected <?php endif; ?>>Price: Low To High</option>
                                        <option value="5" <?php if(request()->get('sort')==5): ?>selected <?php endif; ?>>Name: A-Z</option>
                                        <option value="6" <?php if(request()->get('sort')==6): ?>selected <?php endif; ?>>Name: Z-A</option>
                                    </select>
                                    <input type="hidden" name="min_price" value="<?php echo e(request()->get('min_price')); ?>" />
                                    <input type="hidden" name="max_price" value="<?php echo e(request()->get('max_price')); ?>" />
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                 <div class="offer_timer" id="simple_timer"></div>
            </div>
            <div class="col-sm-12">
                <div class="category-product main_product_inner">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" wist_item wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.<?php echo e($key); ?>s">
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
                                            <a class="addcartbutton order-btn" style="height: 38px !important;" data-id="<?php echo e($value->id); ?>" data-checkout="yes">
                                                <span style="">অর্ডার করুন</span>
                                            </a>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="custom_paginate">
                    <?php echo e($products->links('pagination::bootstrap-4')); ?>

                   
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>
    $(".sort").change(function(){
       $('#loading').show();
       $(".sort-form").submit();
    })
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
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
    (function($){
        function equalizeCards(){
            var $cards = $('.category-product .product-card');
            if(!$cards.length) return;
            $cards.css('height','auto');
            var max = 0;
            $cards.each(function(){
                var h = $(this).outerHeight(); if(h>max) max = h;
            });
            if(max>0) $cards.css('height', max+'px');
        }
        $(window).on('load resize', function(){ setTimeout(equalizeCards,100); });
        $(document).ready(function(){ setTimeout(equalizeCards,200); });
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\shop\resources\views/frontEnd/layouts/pages/hotdeals.blade.php ENDPATH**/ ?>