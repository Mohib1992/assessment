<?php
/**
 * Created by PhpStorm.
 * User: Moinkhan
 * Date: 12/21/2014
 * Time: 9:33 PM
 */

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LogController {

    public $logger;

    function __construct($channelName,$fileName)
    {
        $this->logger = new Logger($channelName);
        if(!file_exists($fileName))
            fopen($fileName,'w');

        $this->logger->pushHandler(new StreamHandler(storage_path().'/logs/'.$fileName,Logger::INFO));
    }

    public function printLog($message)
    {
        $this->logger->addInfo($message);
    }

}