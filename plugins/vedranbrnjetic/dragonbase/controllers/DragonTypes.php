<?php namespace VedranBrnjetic\Dragonbase\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class DragonTypes extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('VedranBrnjetic.Dragonbase', 'main-menu-dragons', 'side-menu-dragon-types');
    }
}
