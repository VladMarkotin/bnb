<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 03.01.2019
 * Time: 12:49
 */
namespace App\Controllers;


use core\CoreClass as Core;

class testController {

    private $core;

    public function __construct($view = null)
    {
        if($view){
            $this->core = Core::getInstance();
            if($view){
                $this->core->init();
                $template = $this->core->getSystemObject("template");
                $twig = $template->getTwig();
                echo $twig->render($view);
            }

        }

    }

    public function index(){

    }
} 