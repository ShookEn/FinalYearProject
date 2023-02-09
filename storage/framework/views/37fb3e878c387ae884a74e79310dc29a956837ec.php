
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="<?php echo e(route('addCameron')); ?>" method="post" enctype="multipart/form-data"><br><br>
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
            <h3>Add New Product</h3>
             Name: <input name="productName" type="text" class="form-control"><br>
            
            Description:<input name="description" type="text" class="form-control"><br>
            Price: <input name="price" type="number" class="form-control"><br>
            Quantity: <input name="quantity" type="number" class="form-control"><br>

            Image: <input name="image" type="file" class="form-control" id="images" multiple="multiple"><br>

            Image: <input name="image_a" type="file" class="form-control" id="images" multiple="multiple"><br>

            Image: <input name="image_b" type="file" class="form-control" id="images" multiple="multiple"><br>

            Image: <input name="image_c" type="file" class="form-control" id="images" multiple="multiple"><br>
                
            Category: <select name="categoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="1">Hotel</option>
                <option value="2">House</option>
            </select> <br>           
            <button type="submit" name="submit" class="btn btn-info">
                Upload Images
            </button><br><br>
        </form>
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\f\resources\views/addCameron.blade.php ENDPATH**/ ?>