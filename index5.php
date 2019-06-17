<!DOCTYPE HTML>

<html>
	<head>
		<title>Election's Result Hub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/district_table.css" />

		<style type="text/css">
		

			
		</style>
		

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
						<li><a href="index4.php">View Prilimary Results</a></li>
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
<script type="text/javascript" src="assets/js/resize_table.js"></script>
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
								<table  class="rtable">
      <!--  <caption class="text-center"> :</caption>-->
											<thead>
												<tr>
													<th>District NO.</th>
												    <th>District Name</th>
													<th>APNU/AFC Total</th>
													<th>PPP/C Total</th>
													<th>TUF Total</th>
													<th>URP Total</th>
												</tr>
											</thead>

											<tbody>
																						
											<?php
											$conn = mysqli_connect("localhost", "root", "", "elections_database2");
											$result = mysqli_query($conn, "SELECT * FROM district");


											while ($row = mysqli_fetch_assoc($result)):


											?>
											<tr>
												<td><?php echo $row['district']; ?></td>
												<td><?php echo $row['district_name']; ?></td>
												<td><?php echo $row['apnu']; ?></td>
												<td><?php echo $row['ppp']; ?></td>
												<td><?php echo $row['tuf']; ?></td>
												<td><?php echo $row['urp']; ?></td>
											

												</tr>

											<?php endwhile;?>

											</tbody>
											</table>
											</div>
											</div>
											</div>
											<link rel="stylesheet" href="assets/css/bootstrap.css">

											

							</section>

						<!-- Three -->
							<section id="three">
							<div class="wrapper">
							<div class="container">
							
							<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script> 
							
						<div id="chart-container style=" position:absolute; top:60px; left:10px; width:80%; height:60vh; margin-top:10px">
							<canvas id="mycanvas"></canvas>
							 
						</div>
		
							<!-- javascript-->
							<script type="text/javascript" src="assets/js/app1.js"></script>
							<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

								</div>
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
