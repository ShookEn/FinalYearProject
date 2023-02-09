
<?php $__env->startSection('content'); ?>
<style>
   .card-heading{
    font-size:50px;
   }
    
    .body{
        background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
    }
    .card-body{
        margin-left:200px;
    }
    .img-fluid{
        width:250px;
        height:250px;
    }
</style>
    <div class="row">
        <?php $__currentLoopData = $camerons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cameron): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($cameron->name); ?></h5>
                <a href="<?php echo e(route('showCameronDetail',['id'=>$cameron->id])); ?>">
                <img src="<?php echo e(asset('images')); ?>/<?php echo e($cameron->image); ?>" alt="" class="img-fluid"></a><br><br>
                <div class="card-heading">RM <?php echo e($cameron->price); ?></div><br>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\f\resources\views/showCameron.blade.php ENDPATH**/ ?>