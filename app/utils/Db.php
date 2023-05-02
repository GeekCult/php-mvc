<?php 

namespace App\Utils;
use PDO;

class Db
{
    public static function getConection()
    {
        $pdo = new PDO("mysql:host=localhost; dbname=teste", "root", "root");
        return $pdo;
    }


}