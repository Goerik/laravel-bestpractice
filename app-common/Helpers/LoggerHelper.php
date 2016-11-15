<?php

/**
 * Simple text file logger
 *
 * @category   Helpers
 * @author     Albert Umerov
 *
 */


namespace Common\Helpers;

use Monolog\Handler\StreamHandler;

class LoggerHelper
{
    public function initial ($type) {
        $logger = new \Monolog\Logger($type . '_logger');
        $logger->pushHandler(new StreamHandler(storage_path().'/logs/'  .$type . '.log', \Monolog\Logger::DEBUG));
        return $logger;
    }
}

