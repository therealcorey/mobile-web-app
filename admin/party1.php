<?php
// INIT

include("connection.php");
include("lib/page-top1.php");



session_start();

$result=mysqli_query($con,"SELECT party_id,party_name, existence, election_symbol, abbreviation, chairperson_first_name, chairperson_last_name, chairperson_DOB FROM party");
$row=mysqli_num_rows($result);



echo"<div class='container'>";
echo"<table class='table  table-responsive table-striped'>";
echo"<tr align='char'>";
echo "<th>Party ID</th>";
echo "<th>Party Name</th>";
echo "<th>Existence</th>";
echo "<th>Party Symbol</th>";   
echo "<th>Abbreviation</th>";
echo "<th>Chair Person First Name</th>";
echo "<th>Chair Person Last Name</th>";
echo "<th>Chairperson DOB</th>";
echo "<th>Delete Candidate</th>";
echo "<th>Edit Cadidate</th>";
echo "</tr>";
	

while($retrieve=mysqli_fetch_array($result))
{
	$pid=$retrieve['party_id'];
	$pname=$retrieve['party_name'];
	$existence=$retrieve['existence'];
	$pro=$retrieve['election_symbol'];
	$abbreviation=$retrieve['abbreviation'];
	$cfname=$retrieve['chairperson_first_name'];
	$clname=$retrieve['chairperson_last_name'];
	$date=$retrieve['chairperson_DOB'];
	echo"<tr align='char'>";
	
	echo"<th>$pid<th>";
	echo"<th>$pname<th>";
	echo"<th>$existence<th>";
	echo "<td><img src='data:images/jpg;base64,".base64_encode($pro)."' align='center' height='50' width='50'  /></td>";
	echo"<th>$abbreviation<th>";
	echo"<th>$cfname<th>";
	echo"<th>$clname<th>";
	echo"<th>$date<th>";
	echo "<th> <a href='delete-party.php?del=$pid'><button class='btn btn-danger'> Delete</button></a></th>";
	echo "<th> <a href='update-party.php?party=$pid'><button class='btn btn-success'> Update</button></a></th>";
	
}
include("lib/page-bottom.php");
?>
<head>
<h2>MANAGE CANDIDATES</h2>
<a href="newCan.php" ><button>Add Candidate</button></a>
</head>

<!-- <script src="public/users.js"></script> -->
