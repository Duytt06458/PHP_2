<?php
    require 'Database.php';
    // spl_autoload_register(function($class){
    //     include $class .'.php';
    // });
    use Core\Database as DB;

    $db = new DB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Home Page</h2>
</body>
</html>