<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'myTodo Apps')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<style>
.new_header{
    width: 100%;
    height:150px;
    background: red;
}
</style>
<body>
    <div id="app">
        <div class="primary_header">
                <div class="container">


                    <div class="logo_controller">
                            <img src="<?php echo e(asset('img/FF-log.png')); ?>"/>
                    </div>





                    <div class="primary_header_right">
                        <span class="fa fa-search"></span>


                    </div>


                    <div class="primary_header_left">

                                    <a href="#">ENGLISH</a> <span>|</span>

                                    <a href="#">FRENCH</a> <span>|</span>

                                    <a href="#">SPANISH</a>

                    </div>



                </div>
        </div>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-center">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="/register" left-align>ROUTE</a></li>
                            <li>
                                <span>|</span>
                            </li>
                            <li><a href="/login"> GAME</a></li>
                            <li>
                                <span>|</span>
                            </li>

                            <li>
                                <a href="/fag">FAQ</a>
                            </li>


                        <?php endif; ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="/register" left-align>COMMITTEES</a></li>
                            <li>
                                <span>|</span>
                            </li>
                            <li><a href="/login">VOLUNTEERS</a></li>
                            <li>
                                <span>|</span>
                            </li>

                            <li><a href="/login">NEWS</a></li>
                            <li>
                                <span>|</span>
                            </li>
                            <li><a href="/login">CONTACT</a></li>




                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
