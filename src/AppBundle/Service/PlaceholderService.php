<?php
/**
 * Created by PhpStorm.
 * User: jacksoft
 * Date: 5/13/16
 * Time: 10:14 AM
 */

namespace AppBundle\Service;


use Psr\Log\LoggerInterface;

class PlaceholderService
{
    private $logger = null;

    public function setLogger(LoggerInterface $loggerInterface)
    {
        $this->logger = $loggerInterface;
    }

    public function getPlaceholder($width = 300, $height = 200)
    {
        if (null != $this->logger){
            $this->logger->warning('something happned');
        }
        return sprintf('http://placekitten.com/g/%d/%d',
            $width,
            $height
        );
    }
}