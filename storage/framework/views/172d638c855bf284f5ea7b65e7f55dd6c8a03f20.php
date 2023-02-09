
<?php $__env->startSection('content'); ?>

<div class="container">
    <h1 class="page-header text-center">Laravel Query Between 2 Dates</h1>
    <div class="row">
  
        <div class="col-md-8 col-md-offset-2">
            <h2>Results
                <a href="/" class="btn btn-primary pull-right">Back</a>
            </h2>
            <?php if(count($posts)>0): ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Post Date</th>
                        <th>Post</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(date('M d, Y h:i A', strtotime($post->created_at))); ?></td>
                                <td><?php echo e($post->post); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h3 class="text-center">No Post from Selected Range</h3>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\f\resources\views/result.blade.php ENDPATH**/ ?>