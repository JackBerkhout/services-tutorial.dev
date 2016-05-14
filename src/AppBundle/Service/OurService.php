<?php

namespace AppBundle\Service;

class OurService
{
    private $myParam;
    private $placeholderService;

    public function __construct($myParam, PlaceholderService $placeholderService)
    {
        $this->myParam = $myParam;
        $this->placeholderService = $placeholderService;
    }

    public function getText()
    {
        return 'some text from our_service: ' . $this->myParam;
    }

    public function getPlaceholder()
    {
        return $this->placeholderService->getPlaceholder();
    }
}
