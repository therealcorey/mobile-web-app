<?php
session_start();
include("lib/page-top1.php");

require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
include("lib/page-bottom.php");
?>

<html>
 <title> Candidate Registration Form</title>
 <head>
 <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
 
 </head>
<body class="is-preload">
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<section>
<div class='container'>
		<h3 > Candidate Registration Form</h3></br>
		<p>Enter Party Information</p>

		<form action ="processnewcan.php" method="POST">
		<div class="row gtr-uniform">
		<div class="form-group" "col-6">
		<label>Party Name:</label>
		<input type='text' name='party_name' placeholder="Enter Party Name" class='form-control' >
		</div>
		<div class="form-group" "col-4">
		<label> Date of Party Existence</label>
		<input type='date' name='existence' placeholder=" Date of Party's Existence" class='form-control' >
		</div>
		<div class="form-group" "col-6">
		<label> Party Logo:</label>
		<input type='file' name='election_symbol'/>
		</div>
		<div class="form-group" "col-2">
		<label>Party Abbreviation:</label>
		<input type='text' name='abbreviation' placeholder="Enter Party Abbreviation" class='form-control' >
		</div>
		<div class="form-group" "col-6">
		<label>Chairperson First Name:</label>
		<input type='text' name='chairperson_first_name' placeholder="Enter Chairperson First Name" class='form-control' >
		</div>
		<div class="form-group" "col-6">
		<label>Chairperson Last Name:</label>
		<input type='text' name='chairperson_last_name' placeholder="Enter Chairperson  last Name" class='form-control' >
		</div>
		<div class="form-group" "col-4">
		<label> Candidate Date of Birth</label>
		<input type='date' name='chairperson_DOB' placeholder"Candidate's Date of Birth" class='form-control' >
		</div>
		<div class="form-group" "col-12">
												<ul class="actions">
													<li><input type="submit" name="ok" class="btn btn-primary" value="Submit" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
 </form>
 </div>
 </section>
 </div>

 </body>
 </html>
 
