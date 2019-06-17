<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `party_votes` WHERE CONCAT(`district`, `polling_station_name`, `apnu`, `ppp`, `tuf`, `urp`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `party_votes`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "elections_database2");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Election's Result Hub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/district_table.css" />
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
								<form action="filter.php" method="post">
								<input type="text" name="valueToSearch" placeholder="Search by Polling Station Name">
								 <input type="submit" name="search" value="Filter"><br><br>
									<table class="rtable">
											<thead>
												<tr>
													<th>District NO.</th>
													<th>Polling Station</th>
													<th>APNU/AFC Total</th>
													<th>PPP/C Total</th>
													<th>TUF Total</th>
													<th>URP Total</th>
												</tr>
											</thead>

											<tbody>
											<?php
											
											while($row = mysqli_fetch_array($search_result)):?>

											
											<tr>
												<td><?php echo $row['id']; ?></td>
												<td><?php echo $row['polling_station_name']; ?></td>
												<td><?php echo $row['apnu']; ?></td>
												<td><?php echo $row['ppp']; ?></td>
												<td><?php echo $row['tuf']; ?></td>
												<td><?php echo $row['urp']; ?></td>
												</tr>

											
											<?php endwhile;?>
											</tbody>
											</table>

										
								</div>
								<link rel="stylesheet" href="assets/css/bootstrap.css">
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
