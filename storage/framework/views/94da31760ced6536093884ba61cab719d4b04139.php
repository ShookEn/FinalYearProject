<!doctype html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Hotel Booking System</title>
  </head>

  <body>
    
    <style>
      p{
        color:white;
      }
     * {
  color: black;
  box-sizing: border-box;
}
 
body {
  
  min-height: 100vh;
    display: flex;
    flex-direction: column;
}
 
.bg {
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  text-shadow: 3px 3px 0px #2c3e50;
   
}
.bg img{
    width:200px;
    height: 200px;
    border-radius: 50%;
    border:5px solid #fff;
}
.menu {

height:500px;
  width: 100px;
  background: #262626;
  transition:width 1s;
  overflow: hidden;
  font-family: Arial;
  z-index: 99;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 400;
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
      .search-bar{
        height:50px;
        width: 250px;
        font-size:32px;
        border-width:1px;
        border-style:solid;
      }


     
      .navbar{
        background-color: #EFEBE5;
      }
      .navbar-brand{
        color: blue;
      }
  :root{
    --clr:#222327;
  }
  .search-bar{
    margin-left: 1700px;
  }
  .container-fluid{
    margin-top: auto;
  }
    
   </style>
   
    
  <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#"><img src="<?php echo e(asset('images/logo.png')); ?>" style="width: 100px; border-radius:50px;margin-right:20px;">Hotelo Iru</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  

  
  <form class="form-inline my-2 my-lg-0" method="post" action="#">
      <?php echo csrf_field(); ?>
      <input class="search-bar" type="search" placeholder="Search" aria-label="Search" name="keyword">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>&nbsp;

    <button type="button" class="btn btn-info" data-toggle="dropdown">
    <a href="<?php echo e(route('cart')); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> Cart <span class="badge badge-pill badge-danger"><?php echo e(count((array) session('cart'))); ?></span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger"><?php echo e(count((array) session('cart'))); ?></span>
                        </div>
                        <?php $total = 0 ?>
                        <?php $__currentLoopData = (array) session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ <?php echo e($total); ?></span></p>
                        </div>
                    </div>
                    <?php if(session('cart')): ?>
                        <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="<?php echo e($details['image']); ?>" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p><?php echo e($details['name']); ?></p>
                                    <span class="price text-info"> $<?php echo e($details['price']); ?></span> <span class="count"> Quantity:<?php echo e($details['quantity']); ?></span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="<?php echo e(route('cart')); ?>" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
   

      
</nav>

<div class="menu">
    <div class="menuitem text"><a href ="<?php echo e(route('showHotel')); ?>"><i class="fa fa-home"></i><span>Hotel</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('showFlight')); ?>"><i class="fa fa-list-alt"></i><span>Flight</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('viewHotel')); ?>"><i class="fa fa-cog"></i><span>View</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('viewComment')); ?>"><i class="fa fa-camera"></i><span>Comment</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('fullcalendar')); ?>"><i class="fa fa-image"></i><span>Calendar</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('register')); ?>"><i class="fa fa-envelope"></i><span>Register</span></a></div>
    <div class="menuitem text"><a href ="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i><span>Login</span></a></div>
</div>
<div class="container">
  
    <?php if(session('success')): ?>
        <div class="alert alert-success">
          <?php echo e(session('success')); ?>

        </div> 
    <?php endif; ?>
  
   
</div>
  
<?php echo $__env->yieldContent('scripts'); ?>
<div class="container-fluid">
    <?php echo $__env->yieldContent('content'); ?>    
    <div class="row" style="background-color: black;">
          <div class="col-md-4" style="margin-top:20px;">
          <p> we are Hotelo Iru, an accommodation booking website. We were established in 2022 and want to make it easier for customers to order online accommodation as a production team. We've done away with annoying, view-obstructing ads while other ordering sites are struggling to get customers to click through.</p>
          </div>
          <div class="col-md-4"  style="margin-top: 20px;">
            <strong>Please call us</strong><br>
            <p>01121957354</p>
          </div>
          <div class="col-md-4"  style="margin-top: 20px;">
            <a style="margin:20px" href="https://www.facebook.com"><img src="<?php echo e(asset('images/f.png')); ?>" width="50" alt="">
            </a>
            <a style="margin:20px" href="https://www.instagram.com"><img src="<?php echo e(asset('images/i.jfif')); ?>" width="50" alt="">
            </a>
            <a style="margin:20px" href="https://wa.link/27fznx"><img src="<?php echo e(asset('images/w.jfif')); ?>" width="50" alt="">
            </a>     
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\f\resources\views/layout.blade.php ENDPATH**/ ?>