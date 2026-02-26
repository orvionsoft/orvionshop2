
<?php $__env->startSection('title','Forgot Password Reset'); ?>
<?php $__env->startSection('content'); ?>
<section class="auth-section">
    <div class="container" style="margin-top:50px !important;">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="form-content">
                    <p class="auth-title">পাসওয়ার্ড রিসেট করুন</p>
                    <form action="<?php echo e(route('customer.forgot.store')); ?>" method="POST"  data-parsley-validate="">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label for="code">যাচাইকরণ কোড</label>
                            <input type="text" id="code" class="form-control <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="code" value="<?php echo e(old('code')); ?>" placeholder="আপনার ইমেইলে পাঠানো কোড" required>
                            <?php $__errorArgs = ['code'];
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

                        <div class="form-group mb-3">
                            <label for="password">নতুন পাসওয়ার্ড</label>
                            <input type="password" id="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="নতুন পাসওয়ার্ড" required>
                            <?php $__errorArgs = ['password'];
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
                        <div class="form-group mb-3">
                            <button class="submit-btn">পাসওয়ার্ড আপডেট করুন</button>
                        </div>
                     <!-- col-end -->
                     </form>
                     <div class="resend_otp">
                        <form action="<?php echo e(route('customer.forgot.resendotp')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="button" onclick="this.closest('form').submit();"><i data-feather="rotate-cw"></i> পুনরায় কোড পাঠান</button>
                        </form>
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
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\shop\resources\views/frontEnd/layouts/customer/forgot_reset.blade.php ENDPATH**/ ?>