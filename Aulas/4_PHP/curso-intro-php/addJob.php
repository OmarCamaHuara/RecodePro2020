<?php

    var_dump($_GET);
    var_dump($_POST)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Add Job</title>
</head>
<body>
    <form action="addJob.php" method="post">
        <h2>Add Job</h2>
        <label for="">Title: </label>
        <input type="text" name="title">
        <br>
        <label for="">Description: </label>
        <input type="text" name="description">
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>