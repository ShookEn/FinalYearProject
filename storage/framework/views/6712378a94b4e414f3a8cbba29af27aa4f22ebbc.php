
<?php $__env->startSection('content'); ?>
<style>
    .img-fluid{
        float: left;
  width: 250px;
  height:200px;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
body {
    
    background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
}


</style>
    <div class="row">
        <?php $__currentLoopData = $gentings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="<?php echo e(route('addCart')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($genting->id); ?>">
                <h3 class="card-title"><?php echo e($genting->name); ?></h3>
            <div class="row">
           
                <div class="column">
                    
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($genting->image); ?>" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($genting->image_a); ?>" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($genting->image_b); ?>" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($genting->image_c); ?>" alt="" class="img-fluid" >
                    
                </div>
                <br><br>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text"><?php echo e($genting->description); ?></p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"> Available: <?php echo e($genting->quantity); ?></div>
                    <br><br>
                    <div class="card-heading">RM <?php echo e($genting->price); ?></div>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\f\resources\views/showGentingDetail.blade.php ENDPATH**/ ?>