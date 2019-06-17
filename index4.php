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
				
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
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
						
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php#three">Insert Statement of Polls</a></li>
						<li><a href="index5.php">District Results</a></li>
						<li><a href="candidate.php">Party Profile</a></li>
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
								<div class="table-responsive">
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
											</div>

								</div>
							</section>

						<!-- Three -->
							<section id="three">
							<div class="wrapper">
							<div class="container">
							
							<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script> 
						<div id="chart-container">
							<canvas id="mycanvas"></canvas>
						</div>
		
							<!-- javascript-->
							<script type="text/javascript" src="assets/js/app.js"></script>
							<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

								</div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
					 <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script>
					<script src="assets/js/popper.min.js"></script>
					<script src="bootstrap/js/bootstrap.min.js"></script>
					<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
					<script>
						  feather.replace()
						</script>
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
