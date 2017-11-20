<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title> FastandFamousAfrica | Home</title>
  </head>
  <body>
      

  <?php $__env->startSection('content'); ?>
  <div class="container">

    <div class="center_display">

    </div>

    <div class="right_display">
      <div class="video_display">
        
      </div>

    </div>


  </div>
  <?php $__env->stopSection(); ?>
  </body>
</html>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>