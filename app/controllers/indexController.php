<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 20.05.2018
 * Time: 8:10
 */
namespace App\Controllers;


use App\Model\PhoneModel;
use Core\CoreClass;
use App\Model\OfficeModel;
use App\Model\EmployeeModel;

/**
 * Class indexController
 * @package App\Controllers
 */
class indexController
{
    /**
     * indexController constructor.
     * @param null $view
     */
    public function __construct($view = null)
    {
        /* При наличии шаблона для страницы
         * рендерим его с помощью шаблонизатора Twig. Предварительно
         * получаем объеки-ядро приложения, который и обеспечивает доступ к шаблонизатору
         */
        if($view){
            $core = CoreClass::getInstance();
            $core->init();
            $employeeModel = new EmployeeModel();
            $officeModel = new OfficeModel();
            $phoneModel = new PhoneModel();
            $office_ids = $officeModel->exec();
            $emps = $employeeModel->exec();
            $phoneNums = $phoneModel->exec("select",$emps);
            $template = $core->getSystemObject("template");
            $twig = $template->getTwig();
            if($emps){
                $fio = $emps[0]['lname']. " ". $emps[0]['fname']. " " .$emps[0]['secondname'];
                echo $twig->render($view, array('emps' => $emps, "fio" => $fio, "office_ids" => $office_ids,
                    "phone_nums" => $phoneNums) );
            }
            else{
                echo $twig->render($view, array("office_ids" => $office_ids) );
            }
        }
    }

    /**
     *
     */
    public function index(){
    }
} 