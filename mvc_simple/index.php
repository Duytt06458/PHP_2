<?php
    require_once 'vendor/autoload.php';
    use App\core\Database;
    use App\core\Field;
    use App\core\Form;

    // $db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Create an Account</h1>
        <?php $form = Form::begin('', 'post'); ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field('firstname'); ?>
            </div>
            <div class="col">
                <?php echo $form->field('lastname'); ?>
            </div>
        </div>
        <?php echo $form->field('email'); ?>
        <?php echo $form->field('password')->passwordField(); ?>
        <?php echo $form->field('confirmPassword')->passwordField(); ?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo Form::end(); ?>
    </div>
</body>
</html>