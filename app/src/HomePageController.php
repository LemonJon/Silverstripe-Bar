<?php

namespace SilverStripe\Stereo;


use PageController;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\ORM\PaginatedList;

class HomePageController extends PageController 
{

    

    public function ProductArticles() 
    {
    
        $pages = new PaginatedList(ProductPage::get(), $this->getRequest());
        $pages->setPageLength(9);

        return $pages;
    }
}