<?php
session_start();
$urladmin ="http://postgres://oypqlcjyudheiy:13912114f57a7aaebb463f73218face5376961cfbc547f3bc124b024dc4411a9@ec2-44-199-9-102.compute-1.amazonaws.com:5432/dbha29cjdmnlfo/shopp/admin/";
$urluser ="http://postgres://oypqlcjyudheiy:13912114f57a7aaebb463f73218face5376961cfbc547f3bc124b024dc4411a9@ec2-44-199-9-102.compute-1.amazonaws.com:5432/dbha29cjdmnlfo/shopp/";
$home = "home.php";
$register = "register.php";
$shoppingcart = "shoppingcart.php";
$order = "order.php";
$logout = "logout.php";

//Connection
$host = "ec2-44-199-9-102.compute-1.amazonaws.com";
$username="oypqlcjyudheiy";
$password="13912114f57a7aaebb463f73218face5376961cfbc547f3bc124b024dc4411a9";
$db= "dbha29cjdmnlfo";
$conn = pg_connect(getenv("postgres://oypqlcjyudheiy:13912114f57a7aaebb463f73218face5376961cfbc547f3bc124b024dc4411a9@ec2-44-199-9-102.compute-1.amazonaws.com:5432/dbha29cjdmnlfo")) or die("Can not connect database ".mysqli_connect_error());

include('theme.php');