<?php
session_start();

require '../../vendor/autoload.php';

require_once '../source/Controller/Traits/ReturnViewTrait.php';
require_once '../source/Controller/HomeController.php';

use Chloe\Portfolio\Controller\HomeController;


if (isset($_GET['controller'])) {
    switch ($_GET['controller']) {
        case 'home' :
            $controller = new HomeController();
    }
}
else {
    $controller = new HomeController();
    $controller->homePage();
}