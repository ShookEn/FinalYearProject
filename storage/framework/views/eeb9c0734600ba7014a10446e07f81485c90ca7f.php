
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-6">
        <h3>Edit Hotel</h3>
        <form action="<?php echo e(route('updateHotel')); ?>" method="post" ><br><br> <?php echo csrf_field(); ?>
        
            <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Name: <input name="hotelName" type="text" class="form-control" value="<?php echo e($hotel->name); ?>"><br>
            Price: <input name="price" type="text" class="form-control" value="<?php echo e($hotel->price); ?>"><br>
            Quantity:<input name="hotelQuantity" type="number" class="form-control" value="<?php echo e($hotel->quantity); ?>"><br>
            Image:<input name="hotelImage" type="file" class="form-control" value="<?php echo e($hotel->image); ?>"><br>
            Category:<select name="categoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="1">Hotel</option>
                <option value="2">Resort</option>
                <br>
            </select>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="submit" class="btn btn-info" >Update Hotel Detail</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/editHotel.blade.php ENDPATH**/ ?>