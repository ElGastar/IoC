<?php


namespace App\Controllers;


use App\Services\ProductService;

class ProductController
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return json_encode($this->productService->getProductList());
    }
}