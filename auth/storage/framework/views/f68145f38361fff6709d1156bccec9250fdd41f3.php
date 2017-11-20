<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration page</title>
  </head>
  <body>
    <?php $messages = $errors->all('<p style="color:red">:messages</p>') ?>
    <?php foreach($messages as $msg): ?>

      <?= $msg ?>
    <?php endforeach; ?>

    <?=Form::open() ?>

    <?=Form::label('email','Enter your email') ?>
    <?=Form::text('email',Input::old('email')) ?>
    <br  />
    <?=Form::label('name','Enter full name') ?>
    <?=Form::text('name',Input::old('name')) ?>
    <br  />
    <?=Form::label('password','Enter password') ?>
    <?=Form::password('password') ?>
    <br/>

    <?=Form::label('retype_password','Enter password again') ?>
    <?=Form::password('confirm_password') ?>
    <br  />
    <?=Form::label('Admin','Clcik if true') ?>
    <?=Form::checkbox('admin','true',Input::old('admin')) ?>
    <br / />
    <?=Form::submit('submit') ?>

    <?=Form::close() ?>
  </body>
</html>
