<?php>
include("connection.php");
include("lib/page-top1.php");
include("lib/page-bottom.php");
session_start();

?>


<html>
 <title> Candidate Registration Form</title>
 </head>
<style type='text/css'>
#body-bg
.error
{
	color:red;
}
.success
{
	color:green;
	font-weight:bold;
}
</style>
<body id='body-bg'>
<div class='container'>
	<div class='login-form col-md-4 offset-md-4'>
		<div class='jumbotron' '>
		<h3 > Candidate Registration Form</h3></br>

		</br>
		<form method='post' enctype="multipart/form-data">
		<div class="form-group">
		<label>Party Name:</label>
		<input type='text' name='party_name' placeholder="Enter Party Name" class='form-control' >
		</div>
		<div class="form-group">
		<label> Date of Party Existence</label>
		<input type='date' name='existence' placeholder=" Date of Party's Existence" class='form-control' >
		</div>
		<div class="form-group">
		<label> Party Logo:</label>
		<input type='file' name='election_symbol'/>
		</div>
		<div class="form-group">
		<label>Party Abbreviation:</label>
		<input type='text' name='abbreviation' placeholder="Enter Party Abbreviation" class='form-control' >
		</div>
		<div class="form-group">
		<label>Chairperson First Name:</label>
		<input type='text' name='chairperson_first_name' placeholder="Enter Chairperson First Name" class='form-control' >
		</div>
		<div class="form-group">
		<label>Chairperson Last Name:</label>
		<input type='text' name='chairperson_ last_name' placeholder="Enter Chairperson  last Name" class='form-control' >
		</div>
		<div class="form-group">
		<label> Candidate Date of Birth</label>
		<input type='date' name='chairperson_DOB' placeholder"Candidate's Date of Birth" class='form-control' >
		</div>
		<input type='submit' value='Submit' name='submit'class='btn btn-success'/>
 </form>
 </div>
 </div>
 </div>
 </body>
 </html>
 
