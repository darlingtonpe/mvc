<!DOCTYPE html>
<html>
  <head>
    <title>Simple AUthentication in Laravel</title>
  </head>
  <body>
    <h2>Simple AUthentication With LAravel</h2>
      <?php $messages = $errors->all('<p style="color:red;">:message</p>') ?>
      <?php foreach($messages as $msg): ?>
        <?= $msg ?>
      <?php endforeach ?>
        <?= Form::open() ?>
          <?= Form::label('Email','Email address:')?>
          <?= Form::text('email',Input::old('email')) ?>
          <br/>
          <?= Form::label('password','password') ?>
          <?= Form::password('password') ?>
          <br/>
          <?= Form::label('password_confirm','retype password') ?>
          <?=Form::password('password_confirm') ?>
          <br/>
          <?= Form::label('name','Enter name') ?>
          <?= Form::text('name',Input::old('name'))?>
          <br/>
          <?= Form::label('admin','Admin:?') ?>
          <?= Form::checkbox('admin','true',Input::old('admin')) ?>
          <br/>
          <?= Form::submit('Register') ?>
        <?= Form::close() ?>

  </body>
</html>
