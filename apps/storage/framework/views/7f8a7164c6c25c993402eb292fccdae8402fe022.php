<h1>hello welcome to file upload</h1>
<h1>File Upload</h1>
<?php $messages = $errors->all('<p style="color:red">:message</
p>') ?>

<?= Form::open(array('files'=>TRUE))?>
<?= Form::label('myfiles','My files') ?>
<br/>

<?= Form::file('myfiles') ?>
<br/>
<?= Form::submit('send it') ?>

<? = Form:close() ?>
