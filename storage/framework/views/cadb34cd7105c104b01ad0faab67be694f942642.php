
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="<?php echo e(route('addFlight')); ?>" method="post" enctype="multipart/form-data"><br><br>
        <?php echo csrf_field(); ?>
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <strong><?php echo e($message); ?></strong>
                </div>
            <?php endif; ?>

            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <h3>Add New Flight</h3>
             Name: <input name="productName" type="text" class="form-control"><br>
            
            Description:<input name="description" type="text" class="form-control"><br>
            Price: <input name="price" type="number" class="form-control"><br>
            

            
            </select> <br>           
            <button type="submit" name="submit" class="btn btn-info">
                Submit
            </button><br><br>
        </form>
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/addFlight.blade.php ENDPATH**/ ?>