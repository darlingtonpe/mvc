<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <!--  -->

<?php $__env->startSection('content'); ?>
<div class="container">
            <?php if(Auth::check()): ?>
                    <h2>Tasks List</h2>
                    <a href="/task" class="btn btn-primary">Add new Task</a>
                    <table class="table">
                        <thead><tr>
                            <th colspan="2">Tasks</th>
                        </tr>
                    </thead>
                    <tbody><?php $__currentLoopData = $user->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($task->description); ?>

                            </td>
                            <td>

                                <form action="/task/<?php echo e($task->id); ?>">
                                    <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                    <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </td>
                        </tr>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></tbody>
                    </table>
            <?php else: ?>
                <h3>You need to log in. <a href="/login">Click here to login</a></h3>
            <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
    </body>
</html>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>