<?php $__env->startSection('content'); ?>

<section class="page-section text-center error-page light">
    <div class="container">
        <h3>Thank You for Order</h3>
        <h2>Wiate Appel For confiramte your order</h2>
        <p><a class="btn btn-theme btn-theme-dark" href="<?php echo e(url('/')); ?>">Back to Home</a></p>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>