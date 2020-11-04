<?php
namespace SilverStripe\Stereo;

use Page;    


class HomePage extends Page 
{
  
    private static $allowed_children = [
        ProductPage::class
      ];  

}