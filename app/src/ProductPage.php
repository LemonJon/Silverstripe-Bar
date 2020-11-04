<?php

namespace SilverStripe\Stereo;

use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use Page;

class ProductPage extends Page
{
    


    private static $db = [
        'Name' => 'Varchar',
        'Description' => 'Text',
        'Ingredients' => 'Varchar',
        'Price' => 'Decimal'
    ];

    private static $has_one = [
        'Photo' => Image::class
    ];

    private static $owns = [
        'Photo'
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->fieldByName('Root.Main.Title')->setTitle('Name of drink');
        $fields->addFieldToTab('Root.Main', TextareaField::create('Description','Description of the drink'));
        $fields->addFieldToTab('Root.Main', TextField::create('Ingredients','Ingredients of the drink'));
        $fields->addFieldToTab('Root.Main', TextField::create('Price','The price of the drink'));
        $fields->removeFieldFromTab("Root.Main","Content");
        $fields->removeFieldFromTab("Root.Main","MenuTitle");

        $fields->addFieldToTab('Root.Attachments', $photo = UploadField::create('Photo'));

        $photo->setFolderName('product-photos');

        return $fields;
    }

  

}