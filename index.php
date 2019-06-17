<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php  include('updatevotes.php'); ?>
<html>
	<head>
		<title>Election's Result Hub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/avatar.png" alt="" /></span>
					<h1 id="logo">Co-Operative Republic of Guyana</h1>
					<p>Crowdsource Hub <br />
					for elections results</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About</a></li>
						<li><a href="#two">Things I Can Do</a></li>
						<li><a href="#three">Insert Statement of Polls</a></li>
						<li><a href="index4.php">View Prilimary Results</a></li>
		
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="image main" data-position="center">
									<img src="images/banner.png" alt="" height='5' width='5'/>
								</div>
								<div class="container">
									<header class="major">
										<h2>Crowd Source Hub for Elections Results. </h2>
										<p>Just an incredibly simple elections aggregation and tabulation site to publish Prilinary Results for Elections</p>
									</header>
									<p>This portal will inform you of current candidates from parties and the parties contributing in the current elections.Also the main purpose would be inserting statement of polls information from an area near you, for a faster and more reliable aggregation of Results for a transparent release of Prilimary resutls to the citizens of Guyana by the citizens.</p
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<h3>Things You Can Do</h3>
									<p></p>
									<ul class="feature-icons">
										<li class="fa fa-exchange" ><a href="#three">Submit Statement of Polls Information Near you</a></li>
										<li class="fa fa-eye"><a href="index4.php">View Prelinary Results</a></li>
										<li class="fa-users "><a href="candidate.php">Electoral Candidate's Profiles</a></li>
									</ul>
								</div>
							</section>



						<!-- Four -->
							<section id="three">
								<div class="container">
									<h3>Statement of Polls input</h3>
									<p>Enter specific information of statement of polls</p>
									<form action="updatevotes.php" method="POST">
									<div class="row gtr-uniform">
			<div class="form-group" "col-2 ">
				<input type="number" name="district" class="form-control" placeholder="District" min="1" max="10" required>
			</div>
			<div class="form-group" "col-6-small">
				<input type="text" name="polling_station_name" class="form-control" placeholder="Polling Station" required>
			</div>
			<div class="form-group" "col-4">
				
				<input type="number" name="valid_votes" class="form-control" placeholder="Valid Votes" min="0" required>
			</div>
			<div class="form-group" "col-4">
				
				<input type="number" name="rejected_votes" id="fee" class="form-control" placeholder="Rejected Votes"min="0">
			</div>
			<div class="form-group" "col-4">
				
				<input type="number" name="rejected_ballots" class="form-control" placeholder="Rejected Ballots" min="0" >
			</div>
			<div class="form-group" "col-6">
				
				<input type="number" name="unmarked_ballots" class="form-control"  placeholder="Unmarked Ballots" min="0">
			</div>
			<div class="form-group" "col-6">
				
				<input type="number" name="ballots" class="form-control" placeholder="Total Ballots" min="0" required>
			</div>
			<div class="form-group" "col-3">
				
				<input type="number" name="APNU" class="form-control" placeholder="APNU/AFC" min="0" required>
			</div>
			<div class="form-group" "col-3">
				
				<input type="number" name="PPP" class="form-control" placeholder="PPP/C" min="0" required>
			</div>
			<div class="form-group" "col-3">
				
				<input type="number" name="URP" class="form-control" placeholder="URP" min="0" required>
			</div>
			<div class="form-group" "col-3">
				<input type="number" name="TUF" class="form-control" placeholder="TUF" min="0" required>
			</div>

											<div class="form-group" "col-12">
												<ul class="actions">
													<li><input type="submit" name="ok" class="btn btn-primary" value="Submit" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
										</div>
										</div>
									</form>
								</div>
							</section>



					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Guyana Elections Hub All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
						<link rel="stylesheet" href="assets/css/bootstrap.css">
											<link rel="stylesheet" type="text/css" href="assets/tables/cs/dataTables.foundation.min.css"/>
											<link rel="stylesheet" type="text/css" href="assets/tables/cs/dataTables.foundation.css"/>
											<link rel="stylesheet" type="text/css" href="assets/tables/cs/jquery.dataTables.css"/>
											<link rel="stylesheet" type="text/css" href="assets/tables/cs/datatables.jqueryui.css"/>

											<script src="assests/tables/js/jquery.js"> </script>
											<script src="assests/tables/js/dataTables.foundation.min.js"></script>
											<script src="assests/tables/js/dataTables.foundation.js"></script>								</script>
											<script src="assests/tables/js/dataTables.jquery.dataTables.js"> </script>
							<script>
												$(".table").DataTable();
												</script>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
