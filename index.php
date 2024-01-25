<?php
    //lab 4 bài 3
    // require_once __DIR__."/vendor/autoload.php";
    // use App\core\Route as Router;

    // $router = new Router();
    // $router->register('/', function(){
    //         echo "Home";
    //     }
    // );

    // $router->register('/invoices', function(){
    //     echo "Invoices";
    // }
    // );

    // $router->register('/invoices/create', function(){
    //     echo "Create Invoices";
    // }
    // );

    //lab 4 bài 4
    require_once __DIR__."/vendor/autoload.php";
    use App\core\Route as Router;
    use App\Home;
    use App\Invoices;
    
    $router = new Router();

    $router->register('/', [App\Home::class, 'index'])
            ->register('/invoices', [App\Invoices::class,'index'])
            ->register('/invoices/create', [App\Invoices::class, 'create']);

    echo $router->resolve($_SERVER['REQUEST_URI']);
?>