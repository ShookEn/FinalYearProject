<!doctype html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

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
      strong{
        color: white;
      }
     * {
  color: black;
  box-sizing: border-box;
}
 
body {
  
  min-height: 100vh;
    display: flex;
    flex-direction: column;
    background: #EFEBE5;

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

      
      .navbar{
        background-color: #EFEBE5;
      }
      .navbar-brand{
        color: blue;
      }
  :root{
    --clr:#222327;
  }
 
  .container-fluid{
    margin-top: auto;

  }
    
   </style>
   
    
  <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="<?php echo e(route('fullcalendar')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" style="width: 100px; border-radius:50px;margin-right:20px;"><a href ="<?php echo e(route('fullcalendar')); ?>">Hotelo Iru</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  

  
  <form class="form-inline my-2 my-lg-0" method="post" action="#">
      <?php echo csrf_field(); ?>
      
    </form>&nbsp;
    <button type="button" class="btn btn-info">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i><a href ="<?php echo e(url('cart')); ?>"><span class="badge badge-pill badge-danger"><?php echo e(count((array) session('cart'))); ?></span></a>
                </button>
                

                </div>
            </div>
        </div>
    </div>
</div>
   

      
</nav>


<div class="container">
  
    <?php if(session('success')): ?>
        <div class="alert alert-success">
          <?php echo e(session('success')); ?>

        </div> 
    <?php endif; ?>
  
   
</div>
<div class="content">
<div class="container-fluid">
<?php echo $__env->yieldContent('content'); ?>   
</div>
</div>
<?php echo $__env->yieldContent('scripts'); ?>

    <div class="row" style="background-color: black;">
          <div class="col-md-3" style="margin-top:20px;">
          <Strong>We are--</Strong><br>
          <p>  A Hotel Reservation Website, we uploads the website that avaiable for booking. <br><br>&copy;copyright <strong>Hotelo Iru Official</strong>. All Rights Reserved
          </p>
          </div>
          <div class="col-md-4"  style="margin-top: 20px;">
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


    <!--  jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  
  </body>
</html><?php /**PATH C:\Users\jenny\OneDrive\桌面\f\resources\views/layout.blade.php ENDPATH**/ ?>