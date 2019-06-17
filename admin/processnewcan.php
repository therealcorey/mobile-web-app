<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","elections_database2");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['ok']))
{

$party_name=$_POST['party_name'];
$existence=$_POST['existence'];
$election_symbol=$_POST['election_symbol'];
$abbreviation=$_POST['abbreviation'];
$chairperson_first_name=$_POST['chairperson_first_name'];
$chairperson_last_name=$_POST['chairperson_last_name'];
$chairperson_DOB=$_POST['chairperson_DOB'];

	//insert query

	$sql="INSERT INTO `party` (`party_name`,`existence`,`election_symbol`,`abbreviation`,`chairperson_first_name`,`chairperson_last_name`,`chairperson_DOB`) VALUES('$party_name','$existence','$election_symbol','$abbreviation','$abbreviation',''$chairperson_first_name,'$chairperson_last_name','$chairperson_DOB')";
	mysqli_query($con,$sql);
}
header('location:party1.php');


?>