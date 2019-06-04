<!DOCTYPE HTML>

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
						<li><a href="#two">Party Profile</a></li>
					 <!-- <li><a href="#three">A Few Accomplishments</a></li> -->
						<li><a href="#four">Contact</a></li>
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
									<img src="images/banner.png" alt="" />
								</div>
								<div class="container">
									<header class="major">
										<h2>Party Profile Information</h2>
										<p></p>
									</header>
							</section>

							<section id="two">
								<div class="container">
							<table class="table">
								<thead>
								<tr>
										<th>Party ID</th>
										<th>Party Name</th>
										<th>Ideology</th>
										<th>Existence</th>
										<th>Party Symbol</th>    
										<th>Abbreviation</th>
										<th>Chair Person First Name</th>
										<th>Chair Person Last Name</th>
										<th>Chairperson DOB</th>
										</tr>
									</thead>
					
								
								<tbody>
								<?php 
								$conn = mysqli_connect("localhost", "root", "", "elections_database2");
								$result = mysqli_query($conn, "SELECT * FROM party");
								
								while ($row = mysqli_fetch_assoc($result)):
								
								?>
								<tr>
									<td><?php echo $row['party_id']; ?></td>
									<td><?php echo $row['party_name']; ?></td>
									<td><?php echo $row['ideology']; ?></td>
									<td><?php echo $row['existence']; ?></td>
									<?php echo "<td><img src='data:images/jpg;base64,".base64_encode($row['election_symbol'])."' height='50' width='50'  /></td>"; ?>
									<td><?php echo $row['abbreviation']; ?></td>
									<td><?php echo $row['chairperson_first_name']; ?></td>
									<td><?php echo $row['chairperson_last_name']; ?></td>
									<td><?php echo $row['chairperson_DOB']; ?></td>
									</tr>
	
									<?php endwhile; ?> 
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



					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Guyana Elections Hub All rights reserved.</li><li>Design:Corey Young <a href="http://html5up.net"></a></li>
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