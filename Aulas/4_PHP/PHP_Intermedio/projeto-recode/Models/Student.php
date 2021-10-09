<?php

    require "Connection.php";

    class Student
    {
        public $id;
        public $name;
        public $telephone;

        public static function getAll()
        {
            // Recuperar os registros da tabela estudante
            $connection = Connection :: getDb();

            $sql = $connection->query("SELECT * FROM students");
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public static function getTotalStudents()
        {
        $connection = Connection :: GetDb();

        $stmt = $connection->query("SELECT COUNT(*) AS Total_student
        FROM students");
        return $stmt->fetchAll(PDO :: FETCH_ASSOC);
        }

        public static function registerStudent()
        {

        }
        public static function updateStudent()
        {

        }
        public static function deleteStudent()
        {
            
        }
    }

    
?>