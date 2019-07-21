<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 25.06.2018
 * Time: 8:32
 */
namespace App\Controllers;


use App\Controllers\Request\RequestClass as Request;
use App\Model\EmployeeModel as EM;
use App\Controllers\Validator\ValidatorClass;

/**
 * Class addController
 * @package App\Controllers
 */
class addController extends Controller
{
    /**
     * @param Request $data
     * @param null $redirect
     * @throws \Core\Exceptions\ExceptionClass
     */
    public function getPostData(Request $data, $redirect = null)
    {
        $validator = new ValidatorClass();
        $email = $data->getElement('email');
        $phone = $data->getElement('phone');
        $validateArray = ["email" => $email, "phone" => $phone];
        if($validator->validate($validateArray)) {
            $emp_model = new EM();
            $emp_model->exec("insert", $data);
        }
    }
} 