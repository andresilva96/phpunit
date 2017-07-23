<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 22/07/2017
 * Time: 20:00
 */

namespace App\Conexao;


class Conexao
{
    public function conexao(){
        try{
            $conn = new \PDO('mysql:host=localhost;dbname=phpunit','root','root');
        }catch (\Exception $e){
            echo $e->getMessage();
            exit;
        }

        return $conn;
    }
}