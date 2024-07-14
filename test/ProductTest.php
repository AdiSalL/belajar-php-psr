<?php

namespace Pc\BelajarPhpPsr;

use PHPUnit\Framework\TestCase;
use DI\Container;
use Pc\BelajarPhpPsr\ProductRepository;
use Pc\BelajarPhpPsr\ProductService;
use Pc\BelajarPhpPsr\ProductController;


class ProductTest extends TestCase {
    public function testManual(){

        $repository = new ProductRepository();
        $service = new ProductService($repository);
        $controller = new ProductController($service);

        self::assertNotNull($controller);
        self::assertNotNull($service);
        

        
    }

    public function testDi() {
        $container = new Container();
        $controller = $container->get(ProductController::class);
        self::assertNotNull($controller);
        self::assertNotNull($controller->productService);
        self::assertNotNull($controller->productService->productRepository);
        
        $service = $container->get(ProductService::class);
        self::assertNotNull($service);
        self::assertSame($service, $controller->productService);
    }
}   

