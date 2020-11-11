<?php


namespace User\model;


class Products
{
private $id;
private $productName;
private $productType;
private $priceEach;
private $quantity;
private $status;

    /**
     * Products constructor.
     * @param $productName
     * @param $productType
     * @param $priceEach
     * @param $quantity
     * @param $status
     */
    public function __construct($productName, $productType, $priceEach, $quantity, $status)
    {
        $this->productName = $productName;
        $this->productType = $productType;
        $this->priceEach = $priceEach;
        $this->quantity = $quantity;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param mixed $productType
     */
    public function setProductType($productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @return mixed
     */
    public function getPriceEach()
    {
        return $this->priceEach;
    }

    /**
     * @param mixed $priceEach
     */
    public function setPriceEach($priceEach): void
    {
        $this->priceEach = $priceEach;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

}