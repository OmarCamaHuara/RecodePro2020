<?php
    require "./Models/Student.php";

    $stundents = Student::getAll();

    echo "<pre>";
    print_r(json_encode($stundents));
    echo "</pre>"

?>