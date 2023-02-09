
<?php $__env->startSection('content'); ?>
    
<div class="row">
        <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($hotel->name); ?></h5>
                <a href="<?php echo e(route('showHotelDetail',['id'=>$hotel->id])); ?>">
                <img src="<?php echo e(asset('images')); ?>/<?php echo e($hotel->image); ?>" alt="" class="img-fluid"></a>
                <div class="card-heading">RM <?php echo e($hotel->price); ?></div>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\f\resources\views/showHotel.blade.php ENDPATH**/ ?>