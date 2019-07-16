<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 05.01.2019
 * Time: 6:08
 */
namespace App\Controllers\Validator;


use Core\Exceptions\ValidateException as Ex;

class ValidatorClass {

    private function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 1;
        }
        return 0;
    }

    private function checkPhone($phone)
    {
        if(preg_match("/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/", $phone)){
            return 1;
        }

        return 0;
    }

    private function checkCity($city)
    {
        if(!preg_match("/[а-яА-Я]{3,12}+/", $city)){
            return 0;
        }

        return 1;
    }

    private function getSummary($results) {
        foreach ($results as $v){
            if (!$v)
                throw new Ex("Validation Error!");
        }
        return 1;
    }

    public function validate(array $data){

        $results = [];
        foreach ( $data as $i => $v ){
            switch( $i ){
                case "email":
                    array_push($results, $this->checkEmail($v));
                    break;
                case "phone":
                    array_push($results, $this->checkPhone($v));
                    break;
                case "city":
                    array_push($results, $this->checkCity($v));
                    break;
            }
        }

        return $this->getSummary($results);
    }
} 