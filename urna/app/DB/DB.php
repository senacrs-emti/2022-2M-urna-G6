<?php

class DB
{
    public static function connect()
    {
        try{
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $dbName = 'urna';

            $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
            return $conn;
        }catch(Exception $e) {
            echo 'Erro ao conectar ao banco de dados -> ' . $e->getMessage();
        }
    }
}