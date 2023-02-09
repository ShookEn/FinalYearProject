
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Product Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $johors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $johor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($johor->id); ?></td>
                    <td><?php echo e($johor->name); ?></td>
                    <td><?php echo e($johor->quantity); ?></td>
                    <td><?php echo e($johor->price); ?></td>
                    <td></td>
                    <td><a href="<?php echo e(route('deleteJohor',['id'=>$johor->id])); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;
                    <a href="" class="btn btn-info btn-xs" >Edit</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/viewJohor.blade.php ENDPATH**/ ?>