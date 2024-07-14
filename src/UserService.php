<?php

namespace Pc\BelajarPhpPsr;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class UserService {
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function save(string $name): void {
        $this->logger->log(LogLevel::INFO, "User {$name} is saved");
    }
}




