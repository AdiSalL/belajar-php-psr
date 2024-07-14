<?php


namespace Pc\BelajarPhpPsr;
use Pc\BelajarPhpPsr\ProductService;

class ProductController {
    public function __construct(public ProductService $productService) {

    }


}