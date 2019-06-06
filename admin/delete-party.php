<?php
session_start();
include("connection.php");

$pid=$_GET['del'];
mysqli_query($con,"DELETE FROM party WHERE party_id='$pid'");
header("location:party1.php");








?>