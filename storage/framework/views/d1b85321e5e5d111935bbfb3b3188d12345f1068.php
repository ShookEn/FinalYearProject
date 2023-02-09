
<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $johors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $johor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($johor->name); ?></h5>
                <a href="<?php echo e(route('showJohorDetail',['id'=>$johor->id])); ?>">
                <img src="<?php echo e(asset('images')); ?>/<?php echo e($johor->image); ?>" alt="" class="img-fluid"></a>
                <div class="card-heading">RM <?php echo e($johor->price); ?></div>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/showJohor.blade.php ENDPATH**/ ?>