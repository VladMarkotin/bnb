<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 27.04.2019
 * Time: 8:02
 */

spl_autoload_register(function ($class) {
    if ( strpos($class, "Request" )){
        $class = str_replace('\\', '/', $class) . '.php';
        require_once($class);
    }
    else if( strpos($class, "EmployeeModel") ){
        $class = "app/models/".str_replace('\\', '/', $class) . '.php';
        require_once($class);
    }
});
use app\controllers\Request\RequestClass as Request;
use Models\EmployeeModel as EM;

class editController {

    public function edit(Request $request){

        $eM = new EM();
        $eM->exec("update", $request);

        header("Location: /");
    }
} 