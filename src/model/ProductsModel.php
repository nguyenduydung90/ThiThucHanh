<?php


namespace User\model;


class ProductsModel
{
private $database;
public function __construct()
{
    $db=new DBconnect();
    $this->database=$db->connect();
}

    public function getAllProduct()
    {
        $sql="SELECT * FROM products";
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $products=[];
        foreach ($data as $item){
            $prduct=new Products($item['productName'],$item['productType'],$item['priceEach'],$item['quantity'],$item['status']);
            $prduct->setId($item['prodctCode']);
            array_push($products,$prduct);
        }
        return $products;
}

    public function getById($id)
    {
        $sql="SELECT * FROM products WHERE prodctCode=$id";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetch();
        $product=new Products($data['productName'],$data['productType'],$data['priceEach'],$data['quantity'],$data['status']);
        return $product;
}

    public function add($product)
    {
        $sql='INSERT INTO `products`(`productName`, `productType`, `priceEach`, `quantity`, `status`) VALUES (:productName,:productType,:priceEach,:quantity,:status)';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':productName',$product->getProductName());
        $stmt->bindParam(':productType',$product->getProductType());
        $stmt->bindParam(':priceEach',$product->getPriceEach());
        $stmt->bindParam(':quantity',$product->getQuantity());
        $stmt->bindParam(':status',$product->getStatus());
        $stmt->execute();
}

    public function delete($id)
    {
        $sql='DELETE FROM `products` WHERE prodctCode = :id';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
}

    public function edit($product)
    {
        $sql='UPDATE `products` SET `productName`=:name,`productType`=:productType,`priceEach`=:priceEach,`quantity`=:quantity,`status`=:status WHERE prodctCode = :id';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':name',$product->getProductName());
        $stmt->bindParam(':productType',$product->getProductType());
        $stmt->bindParam(':priceEach',$product->getPriceEach());
        $stmt->bindParam(':quantity',$product->getQuantity());
        $stmt->bindParam(':status',$product->getStatus());
        $stmt->bindParam(':id',$product->getId());
        $stmt->execute();
}

    public function search($productName)
    {
        $sql="SELECT * FROM products WHERE productName LIKE  '$productName'";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetchAll();
        $products=[];
        foreach ($data as $item){
            $product=new Products($item['productName'],$item['productType'],$item['priceEach'],$item['quantity'],$item['status']);
            $product->setId($item['prodctCode']);
            array_push($products,$product);
        }return $products;
}
}