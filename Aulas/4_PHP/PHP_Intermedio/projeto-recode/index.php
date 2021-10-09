<?php
    require "./Models/Student.php";
    $students = Student::getAll();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Recode</title>
</head>
<body>
    <?php require "partials/header.html"?>

    <?php
    foreach($students as $student){
    ?>
        <main>
            <div class="card w-50 mx-auto mt-5">
                <div class="card-header">
                    <?= $student['name']?>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam minus, culpa totam atque accusantium optio a hic libero unde, itaque laboriosam dicta consequuntur, rem blanditiis nesciunt minima impedit sed. Blanditiis?
                </div>
                <div class="card-footer d-flex align-items-center justify-content-end">
                    <a class="btn btn-success" href="https://wa.me/<?= $student['telphone']?>">
                        <i class="fab fa-whatsapp" style="font-size: 30px"></i>
                    </a>
                </div>
            </div>
        <?php  }?>
    </main>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</body>
</html>