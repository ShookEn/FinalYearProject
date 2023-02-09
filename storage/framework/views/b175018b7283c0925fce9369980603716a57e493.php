
<?php $__env->startSection('content'); ?>
<aside class="nav-sidebar flex-column" >
<div class="menu">
    <div class="menuitem text"><a href ="<?php echo e(url('welcome')); ?>"><i class="fa fa-home"></i><span>Home</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('showHotel')); ?>"><i class="fa fa-hotel"></i><span>Hotel</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('fullcalendar')); ?>"><i class="fa fa-cog"></i><span>About Us</span></a></div>
    <div class="menuitem text"><a href="<?php echo e(url('http://127.0.0.1:8000/')); ?>"><i class="fa fa-sign-out"></i><span>Log out</span></a></div>
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
  background: #34495e;
  cursor: pointer;
}
 
 
.text:hover{
  border-left:20px solid #16a085;
}
    </style>

<div class="row">
        <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($hotel->name); ?></h5>
                <a href="<?php echo e(route('showHotelDetail',['id'=>$hotel->id])); ?>">
                <img src="<?php echo e(asset('images')); ?>/<?php echo e($hotel->image); ?>" alt="" class="img-fluid"></a>
                
                <div class="card-heading">RM <?php echo e($hotel->price); ?> </div>
                <a href="<?php echo e(route('showHotelDetail',['id'=>$hotel->id])); ?>">
                <button class="btn btn-danger btn-xs">Detail</button></a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/showHotel.blade.php ENDPATH**/ ?>