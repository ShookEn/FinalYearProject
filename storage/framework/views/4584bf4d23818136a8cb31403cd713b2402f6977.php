<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
<meta name="about-us" content="My Application Description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<div>
    <img src="<?php echo e(asset('images/logo.png')); ?>" class="center" width="200" alt=""/>
    <h1>Hotelo Iru</h1>
    <p style="font-family:Monospace;">We are Hotelo Iru, an accommodation booking website. We were established in 2022 and want to make it easier for customers to order online accommodation as a production team. We've done away with annoying, view-obstructing ads while other ordering sites are struggling to get customers to click through.
    </p>
    <div class = apps>
        <div><a href="https://twitter.com">Twitter</a></div>
        <div><a href="https://www.facebook.com">Facebook</a></div>
        <div><a href="https://www.instagram.com">Instagram</a></div>
    </div>
</div>
</body>

 
 
</body>
</html>

<?php $__env->startSection('content'); ?>
<style>
   .card-heading{
    font-size:50px;

   }
    
    .body{
        background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
    }
    .card-body{
        margin-left:150px;
    }
    .img-fluid{
        width:250px;
        height:250px;
    }
    h1{
        color:black;

    }
    p{
        color:black;
        font:
    }
    .center,h1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
  }
</style>
    <div class="row">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/aboutUs.blade.php ENDPATH**/ ?>