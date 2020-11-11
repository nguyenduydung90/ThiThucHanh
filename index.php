<?php
require __DIR__.'/vendor/autoload.php';
$productController= new \User\controller\ProductController();

$page=isset($_REQUEST['page'])?$_REQUEST['page']:NULL;
switch ($page){
    case 'add':
        $productController->addProduct();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'edit':
        $productController->edit();
        break;
    case 'search':
        $productController->searchProduct();
        break;
    default:
$productController->showProduct();
}
