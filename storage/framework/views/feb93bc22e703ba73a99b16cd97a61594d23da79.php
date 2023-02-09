
<?php $__env->startSection('content'); ?>
<aside class="nav-sidebar flex-column" >
<div class="menu">
    <div class="menuitem text"><a href ="<?php echo e(url('http://localhost:8000/addHotel')); ?>"><i class="fa fa-home"></i><span>Add New Hotel</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('viewHotel')); ?>"><i class="fa fa-hotel"></i><span>Hotel List</span></a></div>
   
</div>
</aside>



<style>
    aside{
        display:block;
    }
    .menu {

height:500px;
  width: 100px;
  background: #B5B5B5;
  transition:width 1s;
  overflow: hidden;
  font-family: Arial;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 400;
  padding: 0;
  display:block;
  float: left;
}
 
.menu:hover {
  width: 220px;
}
 
.menuitem span {
  position: absolute;
  left:80px;
  top:20px;
  transition:color 1s;
  color:rgba(255,255,255,0);
}
 
.menu:hover .menuitem  span {
 color:rgba(255,255,255,1);
}
 
.menuitem {
  position: relative;
  padding: 20px;
  transition:border .5s, background .2s;  
}
 
.menuitem:hover {
  background: #87B3AF;
  cursor: pointer;
}
 
 
.text:hover{
  border-left:20px solid #16a085;
}
    </style>


<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered";border-collapse="collapse";width="100%";border="1px solid #c6c6c6 !important";margin-bottom="20px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Hotel Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($hotel->id); ?></td>
                    <td><?php echo e($hotel->name); ?></td>
                    <td><?php echo e($hotel->quantity); ?></td>
                    <td>RM <?php echo e($hotel->price); ?></td>
                    
                    <td><a href="<?php echo e(route('deleteHotel',['id'=>$hotel->id])); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;
                    <a href="<?php echo e(route('editHotel',['id'=>$hotel->id])); ?>" class="btn btn-info btn-xs" >Edit</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/viewHotel.blade.php ENDPATH**/ ?>