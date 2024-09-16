
<?php $__env->startSection('content'); ?>
<?php 
    $credentials = array_replace_recursive(config('setting.recaptcha'), (array)$general->recaptcha);
?>
 <div class="col-xl-5 col-lg-6">
        <div class="login-left-section d-flex align-items-center justify-content-center">
            <div class="form-container">
                <div class="mb-5">
                    <a href="<?php echo e(route('home')); ?>" class="site-logo">
                        <img src="<?php echo e(showImage(filePath()['site_logo']['path'].'/'.$general->site_logo)); ?>" class="logo-sm" alt="">
                    </a>

                    <h4><?php echo e(translate('Sign Up With')); ?> <span class="site--title"><?php echo e(ucfirst($general->site_name)); ?></span></h4>
                </div>

                <form action="<?php echo e(route('register.store')); ?>" method="POST" id="login-form">
                    <?php echo csrf_field(); ?>
                    <div class="my-3">
                        <label for="name" class="form-label d-block"><?php echo e(translate('Name')); ?></label>
                        <div class="input-field">
                            <span>
                                <i class="las la-envelope-open-text"></i>
                            </span>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(translate('Enter Name')); ?>" id="name"aria-describedby="emailHelp"/>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="inputEmail1" class="form-label d-block"><?php echo e(translate('Email address')); ?></label>
                        <div class="input-field">
                            <span>
                                <i class="las la-envelope"></i>
                            </span>

                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(translate('Put here valid mail address')); ?>" id="inputEmail1"aria-describedby="emailHelp"/>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="inputPassword1" class="form-label d-block"><?php echo e(translate('Password')); ?></label>
                        <div class="input-field">
                            <span>
                                <i class="las la-lock"></i>
                            </span>
                            <input type="password" name="password" placeholder="<?php echo e(translate('Enter Password')); ?>" id="inputPassword1"/>
                        </div>
                    </div>

                     <div class="mb-5">
                        <label for="inputCPassword1" class="form-label d-block"><?php echo e(translate('Confirm Password')); ?></label>
                        <div class="input-field">
                            <span>
                                <i class="las la-lock"></i>
                            </span>

                            <input type="password" name="password_confirmation" placeholder="<?php echo e(translate('Enter Confirm Password')); ?>" id="inputCPassword1"/>
                        </div>
                    </div>
                    
                    
                    <div>
                        <button <?php if(\Illuminate\Support\Arr::get($credentials, 'recaptcha_status', '1') == 1 && $general->captcha_with_registration == "true"): ?> class="g-recaptcha btn btn-md btn--primary w-100"
                        data-sitekey="<?php echo e($credentials["recaptcha_key"]); ?>"
                        data-callback='onSubmit'
                        data-action='register'
                        <?php else: ?>
                        class=" btn btn-md btn--primary w-100"
                        <?php endif; ?>
                        type="submit">
                        <?php echo e(translate('Submit')); ?>

                        </button>
                    </div>
                </form>

                <p class="text-center mt-4">
                    <?php echo e(translate('Already have an account')); ?>? <a href="<?php echo e(route('login')); ?>"><?php echo e(translate('Sign In')); ?></a>
                </p>

                <div class="mt-5">
                    <?php if(\Illuminate\Support\Arr::get($general->social_login, 'g_client_status',     1) == 1): ?>
                        <div class="or text-center"><p class="m-0"><?php echo e(translate('Or')); ?></p></div>
                        <div class="mt-4">
                            <a class="btn btn-md btn--danger d-flex align-items-center justify-content-center google--login--text google--login gap-3"
                                href="<?php echo e(url('auth/google')); ?>">
                                <span>
                                    <i class="fa-brands fa-google fs-5"></i>
                                </span>

                                <?php echo e(translate('Continue with Google')); ?>

                            </a>
                        </div>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-include'); ?>
    <?php if($credentials && \Illuminate\Support\Arr::get($credentials, 'recaptcha_status', '1') == 1): ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("login-form").submit();
            }
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xsender\src\resources\views/user/auth/register.blade.php ENDPATH**/ ?>