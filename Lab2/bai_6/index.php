<?php
    require 'vendor/autoload.php';
    use App\App\Controller\BaseController as B;
    use App\App\Model\BaseModel as M;
    use App\App\Core\Route as R;
    $controller = new B();
    $model = new M();
    $route = new R();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
</body>
</html>