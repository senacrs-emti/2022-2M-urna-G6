<?php

class DB
{
    public static function connect()
    {
        try {
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbName = 'urna';

            $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
            return $conn;
            
        }catch(Exception $e) {
            echo 'Erro ao se conectar ao banco de dados -> ' . $e->getMessage();
        }
    }
}