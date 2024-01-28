<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    session_start();
    require_once __DIR__."/vendor/autoload.php";
    use App\core\Route as Router;
    use App\Home;
    use App\Invoices;
    
    $router = new Router();

    $router->get('/', [App\Home::class, 'index'])
            ->post('/upload', [App\Home::class,'upload'])
            ->get('/login', [App\Login::class, 'login'])
            ->post('/loginUser', [App\Login::class, 'loginUser'])
            ->get('/login', [App\Login::class, 'login'])
            ->get('/logout', [App\Login::class, 'logout']);

    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
?>
</body>
</html>