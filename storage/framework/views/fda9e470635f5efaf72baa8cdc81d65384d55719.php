
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
<div class="container">
<div class="row" style="position:relative;left:20px; display:block;">
    <div class="column">
        <div class="col-md-9">
        <img src="<?php echo e(asset('images/logo.png')); ?>" class="center" width="200" alt=""/>
        <h1>Hotelo Iru</h1>
        <p class="intro" style="font-family:Monospace;">We are Hotelo Iru, an accommodation booking website. We were established in 2022 and want to make it easier for customers to order online accommodation as a production team. We've done away with annoying, view-obstructing ads while other ordering sites are struggling to get customers to click through.
        </p>

        <div class = "apps">
            <div>
                <strong>Contact us by</strong><br>
                <a style="margin:15px" href="https://www.facebook.com"><img src="<?php echo e(url('https://www.freepnglogos.com/uploads/facebook-logo-icon/facebook-logo-icon-facebook-logo-png-transparent-svg-vector-bie-supply-16.png')); ?>" width="50" alt="">
                </a>
                <a style="margin:15px" href="https://www.instagram.com"><img src="<?php echo e(url('https://www.transparentpng.com/thumb/logo-instagram/orzG9u-instagram-picture-logo-png.png')); ?>" width="45" alt="">
                </a>
                <a style="margin:15px" href="https://wa.link/27fznx"><img src="<?php echo e(url('https://www.freeiconspng.com/uploads/whatsapp-logo-background-29.png')); ?>" width="55" alt="">
                </a>
                <a style="margin:15px" href="https://www.twitter.com"><img src="<?php echo e(url('https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png')); ?>" width="55" alt="">
                </a>     
            </div>
        </div>
        </div>
    </div>
</div>
</div>

<style>
   .card-heading{
    font-size:50px;

   }
    
    .card-body{
        margin-left:150px;
    }

    .img-fluid{
        width:250px;
        height:250px;
    }

    Strong{
        color:black;
        margin-left: 100px;
    }
    .intro{
        color:black;
        display: block;
        margin-left: auto;
        margin-right: auto;
        
    }
    p{
        color:white;
        margin-left: 150px;
    }

    .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 20%;
    }
    .apps{
        margin-left: 300px;
        margin-right: auto;
       
    }
    h1{
        margin-left: 300px;
        margin-right: auto;
        color:black;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/fullcalendar.blade.php ENDPATH**/ ?>