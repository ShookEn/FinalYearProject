
<?php $__env->startSection('content'); ?>
<style>
    h3 {
        text-align: center;
    }
    .img-fluid{
        float: left;
  width: 200px;
  height:200px;
  padding: 15px;
}

body {
    
    background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
}
</style>
    <div class="row">
        <?php $__currentLoopData = $camerons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cameron): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="<?php echo e(route('addCart')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($cameron->id); ?>">
            <div class="row">
            <div class="column">
                    <h3 class="card-title"><?php echo e($cameron->name); ?></h3>
                <br><br>
                    <div class="column">
                    <div class ="col-md-6">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($cameron->image); ?>" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($cameron->image_a); ?>" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($cameron->image_b); ?>" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($cameron->image_c); ?>" alt="" class="img-fluid" >
                    
                </div>
                </div>
                <br><br><br><br><br><br><br>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text"><?php echo e($cameron->description); ?></p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"> Available: <?php echo e($cameron->quantity); ?></div>
                    <br><br>
                    <div class="card-heading">RM <?php echo e($cameron->price); ?></div>
                    <br><br>
                    
                <?php echo e(csrf_field()); ?>

                <div class="mb-3">
                    <label>First Date:</label>
                    <input type="date" class="form-control" name="fdate">
                </div>
                <div class="mb-3">
                    <label>Second Date:</label>
                    <input type="date" class="form-control" name="sdate">
                </div>
                    <button class="btn btn-danger btn-xs" type="submit">Add to Cart</button>
                </div>
            </form>
            </div>                
            </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\f\resources\views/showCameronDetail.blade.php ENDPATH**/ ?>