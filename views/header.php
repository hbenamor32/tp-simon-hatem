<?php
require_once 'defines.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?=SITE_NAME?></title>
    <meta name="author" content="Simon et Hatem"/>
    <link rel="stylesheet" href="style/main.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="script/cart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- start header -->
<header>
    <div id="logo">
        <h1><a href="index.php"><?=SITE_NAME?></a></h1>
        <div><a href="shopping_cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"><?=' '.count($card)?></i></a></div>
    </div>

    <!-- START MENU -->
    <div class="responsive-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="categories.php">Instruments</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</header>
<!-- End Header -->
