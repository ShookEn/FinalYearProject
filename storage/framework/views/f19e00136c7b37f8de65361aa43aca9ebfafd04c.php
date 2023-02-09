
<?php $__env->startSection('content'); ?>
<style>
   .card-heading{
    font-size:50px;
   }
    
    .body{
        background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
    }
    .card-body{
        margin-left:150px;
    }
    .img-fluid{
        width:250px;
        height:250px;
    }
</style>
    <div class="row">
        <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($flight->name); ?></h5>
                <a href="<?php echo e(route('showFlightDetail',['id'=>$flight->id])); ?>">
                <img src="Area\Area\Cameron Highland\Cameron Lavender Farm\Picture96.jpg" alt="..." class="shown" class="img"></a>
                <div class="card-heading">RM <?php echo e($flight->price); ?></div>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/showFlight.blade.php ENDPATH**/ ?>