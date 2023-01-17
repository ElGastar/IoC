<?php


namespace App\Services;


use App\Repository\MysqlProductRepository;

class ProductService
{
    private $productRepo;

    public function __construct(MysqlProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getProductList()
    {
        return $this->productRepo->getProducts();
    }
}