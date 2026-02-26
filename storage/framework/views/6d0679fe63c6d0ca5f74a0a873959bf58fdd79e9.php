
<?php $__env->startSection('title','Forgot Password'); ?>
<?php $__env->startSection('content'); ?>
<section class="auth-section" style="margin-top: 30px;">
    <div class="container" style="margin-top:50px !important;">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="form-content">
                    <p class="auth-title">পাসওয়ার্ড রিসেট করুন</p>
                    <form action="<?php echo e(route('customer.forgot.verify')); ?>" method="POST"  data-parsley-validate="">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label for="email">ইমেইল</label>
                            <input type="email" id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="আপনার ইমেইল এড্রেস" required>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <!-- col-end -->
                        <p style="font-size: 13px; color: #666; margin-bottom: 15px;">আপনার নিবন্ধিত ইমেইল এড্রেসে পাসওয়ার্ড রিসেট লিংক পাঠানো হবে।</p>
                        <div class="form-group mb-3">
                            <button class="submit-btn">রিসেট লিংক পাঠান</button>
                        </div>
                     <!-- col-end -->
                     </form>
                     <div class="register-now no-account" style="margin-top: 20px;">
                        <a href="<?php echo e(route('customer.login')); ?>"><i data-feather="arrow-left"></i> লগিনে ফিরুন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('public/frontEnd/')); ?>/js/parsley.min.js"></script>
<script src="<?php echo e(asset('public/frontEnd/')); ?>/js/form-validation.init.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\shop\resources\views/frontEnd/layouts/customer/forgot_password.blade.php ENDPATH**/ ?>