<?php

namespace Pc\BelajarPhpPsr;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\RotatingFileHandler;
use PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase {
    public function testSave(){
        $logger = new Logger("Belajar PHP PST");

        $streamHandler = new StreamHandler("php://stderr");
        $streamHandler->setFormatter(new JsonFormatter());
        $logger->pushHandler($streamHandler);
        
        $userService = new UserService($logger);
        $userService->save("Adi");

        self::assertNotNull($logger);
    }
}   

