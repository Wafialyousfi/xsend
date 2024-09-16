
<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="mainContent" class="main_content added">
		<?php echo $__env->make('admin.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="dashboard_container">
        	<?php echo $__env->yieldContent('panel'); ?>
        </div>

        <footer>
            <div class="footer-content">
                <p><?php echo e($general->copyright); ?> &copy; <?php echo e(carbon()->format('Y')); ?> </p>
                <div class="footer-right">
                    <ul>
                        <li><a href="https://support.igensolutionsltd.com"><?php echo e(translate('Support')); ?></a></li>
                    </ul>
                    <span><?php echo e(translate('App-Version')); ?>: <?php echo e(config('requirements.core.appVersion')); ?></span>
                </div>
            </div>
        </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xsender\src\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>