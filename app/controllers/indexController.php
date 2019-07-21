<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 20.05.2018
 * Time: 8:10
 */
namespace App\Controllers;


use App\Model\PhoneModel;
use App\Model\OfficeModel;
use App\Model\EmployeeModel;

/**
 * Class indexController
 * @package App\Controllers
 */
class indexController extends Controller
{
    /**
     * indexController constructor.
     * @param null $view
     */
    public function __construct($view = null)
    {
        parent::__construct($view);
        /* При наличии шаблона для страницы
         * рендерим его с помощью шаблонизатора Twig. Предварительно
         * получаем объеки-ядро приложения, который и обеспечивает доступ к шаблонизатору
         */
        if($view){
            $employeeModel = new EmployeeModel();
            $officeModel = new OfficeModel();
            $phoneModel = new PhoneModel();
            $office_ids = $officeModel->exec();
            $emps = $employeeModel->exec();
            $phoneNums = $phoneModel->exec("select",$emps);
            $twig = $this->template->getTwig();
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
} 