<?php
session_start();
if (!($_SESSION['id'] == 1))
    header('Location: ../view/index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Backoffice</title>
    <meta name="generator" content="Bootply"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<!-- header -->
<?php include('../include/header.php'); ?>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="fa fa-bars" aria-hidden="true"></i> Links</strong></a>
            <hr>
            <ul class="nav nav-stacked">
                <ul class="nav nav-stacked collapse in" id="userMenu">
                    <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Acceuil</a>
                    </li>
                    <li><a href="users.php"><i class="fa fa-user-o" aria-hidden="true"></i> Utilisateurs</a></li>
                    <li><a href="category.php"><i class="fa fa-rss" aria-hidden="true"></i> Catégories</a>
                    <li><a href="redaction.php"><i class="fa fa-bolt" aria-hidden="true"></i> Articles</a>
                    </li>
                    <li><a href="messages.php"><i class="fa fa-envelope" aria-hidden="true"></i> Messages </a></li>

                </ul>
                </li>
            </ul>
            <hr>