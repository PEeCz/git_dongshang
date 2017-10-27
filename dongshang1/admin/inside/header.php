<?php
    session_start();
    if(@$_SESSION["lang"] == "TH"){
        require '../assets/lang/th.php';
    }else{
        require '../assets/lang/cn.php';
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dong Shang Travel Service Group(Thailand) Co.,Ltd.">
    <meta name="author" content="Dong Shang | Travel">
    <meta name="keywords" content="">

    <title>
        Dong Shang Travel Service Group(Thailand) Co.,Ltd.
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="../assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="../assets/css/custom.css" rel="stylesheet">

    <script src="../assets/js/respond.min.js"></script>

    <link rel="shortcut icon" href="main/favicon.png">

    <!-- Side Bar Dropdown Menu -->
    <link rel="stylesheet" href="../assets/css/dropdown-sidebar.css">



</head>

<body>