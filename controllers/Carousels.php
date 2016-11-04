<?php namespace Travis\Carousel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Carousels extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'travis.carousel.manage_carousel' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Travis.Carousel', 'carousel', 'carousels');
    }
}