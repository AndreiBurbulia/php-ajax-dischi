<?php
include './database/db.php';
$dischi //include i dischi;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./dist/css/app.css">
</head>

<body>
    <?php
    include __DIR__ . './templates/header.php';
    include __DIR__ . './templates/main.php';
    ?>


</body>

</html>