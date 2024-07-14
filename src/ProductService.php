<?php


namespace Pc\BelajarPhpPsr;
use Pc\BelajarPhpPsr\ProductRepository;

class ProductService {
    public function __construct(public ProductRepository $productRepository) {

    }
}