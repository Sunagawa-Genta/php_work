<?php
include_once("./app/database/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>山口大学医学部附属病院 口コミ閲覧</title>
    <link rel="stylesheet" href="app/assets/style.css">
</head>
<body>
    <?php include("app/parts/header.php"); ?>

    <?php include("app/parts/validation.php"); ?>

    <?php include("app/parts/thread.php"); ?>
    <?php include("app/parts/newThreadButton.php"); ?>
</body>
</html>
