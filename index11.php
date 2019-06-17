<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
					<h1 id="logo"><a href="#">Co-Operative Republic of Guyana</a></h1>
					<p>Crowdsource Hub <br />
					for elections results</p>
				</header>
				<nav id="nav">
					<ul>
								<li><a href="#one" class="active">About</a></li>
								<li><a href="#two">Things I Can Do</a></li>
								<li><a href="#three">Insert Statement of Polls</a></li>
								<li><a href="index4.php">View Prilimary Results</a></li>
								<li><a href="admin/login.php">Admin Login</a></li>

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

								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<table  class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>APNU/AFC TOTAL</th>
													<th>PPP/C Total</th>
													<th>TUF Total</th>
													<th>URP Total</th>
												</tr>
											</thead>

											<tbody>
											<?php
											$conn = mysqli_connect("localhost", "root", "", "elections_database2");
											$result = mysqli_query($conn, "SELECT * FROM results");


											while ($row = mysqli_fetch_assoc($result)):

											?>
											<tr>
												<td><?php echo $row['apnu_total']; ?></td>
												<td><?php echo $row['ppp_total']; ?></td>
												<td><?php echo $row['tuf_total']; ?></td>
												<td><?php echo $row['urp_total']; ?></td>
												</tr>

											<?php endwhile;?>
											</tbody>
											</table>

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
								</div>
							</section>

						<!-- Three -->
							<section id="three">
							<div class="container">

								</div>
							</section>

						<!-- Four -->
							<section id="four">
							<div class="container">

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
