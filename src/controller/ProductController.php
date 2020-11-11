<?php
namespace User\controller;

use User\model\Products;
use User\model\ProductsModel;

class ProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductsModel();
    }

    public function showProduct()
    {
        $products = $this->productModel->getAllProduct();
        include_once 'src/view/listProduct.php';
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "src/view/add.php";
        } else {
            $productName = $_REQUEST['productName'];
            $productType = $_REQUEST['productType'];
            $priceEach = $_REQUEST['priceEach'];
            $quantity = $_REQUEST['quantity'];
            $status = $_REQUEST['status'];
            $product = new Products($productName, $productType, $priceEach, $quantity, $status);
            $this->productModel->add($product);
            header('location:index.php');
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->productModel->delete($id);
        header('location:index.php');
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $products = $this->productModel->getById($id);
            include_once "src/view/edit.php";
        }else {
                $id = $_REQUEST['id'];
                $productName = $_REQUEST['productName'];
                $productType = $_REQUEST['productType'];
                $priceEach = $_REQUEST['priceEach'];
                $quantity = $_REQUEST['quantity'];
                $status = $_REQUEST['status'];
                $newProduct = new Products($productName, $productType, $priceEach, $quantity, $status);
                $newProduct->setId($id);
                $this->productModel->edit($newProduct);
                header('location:index.php');
            }
        }

    public function searchProduct()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $search="%".$_REQUEST['search']."%";
            $input=$this->productModel->search($search);
            include_once 'src/view/searchList.php';
        }
        }

}
