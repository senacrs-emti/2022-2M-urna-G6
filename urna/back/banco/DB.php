<?php

class DB
{
    public static function connect()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'urna';

        try{
            return new PDO("mysql:host=$host;dbname=$dbName;charset=UTF8;", $username, $password);
        }catch(Exception $e){
            echo 'Erro ao se conectar com o banco de dados' . $e->getMessage();
        }
    }
}