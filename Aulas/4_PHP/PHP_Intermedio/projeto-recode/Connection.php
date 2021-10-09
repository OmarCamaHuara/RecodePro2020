<?php

class Connection 
{
    public function getDb()
    {
        $conn = new PDO(
            "mysql:host=localhost; dbname=recode; charset=utf8",
            "root",
            ""
        );
        if($conn) {
            return $conn;
        } else {
            return "<h1>Error ao realizar </h1>";
        }
    }
}