<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 23.06.2018
 * Time: 7:56
 */
namespace App\Model;


use Core\DB\DBClass as DB;

class Model
{
    protected $dbh = null;

    protected $connect = null;

    public function getDBH()
    {
        if (!$this->dbh){
            $this->dbh = DB::getInstance();
            $this->dbh->init();
            $this->connect = $this->dbh->getDBConnect();
        }

        return $this->connect;
    }

    public function getConnect()
    {
        return $this->connect = DB::getDBConnect();
    }


} 