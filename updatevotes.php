<?php

//update Poll Information
session_start();

include('admin/connection.php');

$district=$_POST['district'];
$polling_station=$_POST['polling_station'];
$valid_votes=$_POST['valid_votes'];
$rejected_votes=$_POST['rejected_votes'];
$rejected_ballots=$_POST['rejected_ballots'];
$unmarked_ballots=$_POST['unmarked_ballots'];
$ballots=$_POST['ballots'];
$APNU=$_POST['APNU'];
$PPP=$_POST['PPP'];
$URP=$_POST['URP'];
$TUF=$_POST['TUF'];

if(empty($district) || empty($polling_station)){
	echo "error";
}else {


//initialize variables


$sql1="INSERT INTO miscellaneous (district,polling_station,valid_votes,rejected_votes,rejected_ballots,unmarked_ballots,ballots) VALUES ('$district','$polling_station','$valid_votes','$rejected_votes','$rejected_ballots','$unmarked_ballots','$ballots')";
mysqli_query($con,$sql1);
$sql2="INSERT INTO apnu (district,polling_station,votes) VALUES ('$district','$polling_station','$APNU]')";
mysqli_query($con,$sql2);
$sql3="INSERT INTO ppp (district,polling_station,votes) VALUES ('$district','$polling_station','$PPP')";
mysqli_query($con,$sql3);
$sql4="INSERT INTO tuf (district,polling_station,votes) VALUES ('$district','$polling_station','$URP')";
mysqli_query($con,$sql4);
$sql5="INSERT INTO urp (district,polling_station,votes) VALUES ('$district','$polling_station','$TUF')";
mysqli_query($con,$sql5);
}







$_SESSION['message'] = "Polls Submitted";
header('location:index.html');





?>


