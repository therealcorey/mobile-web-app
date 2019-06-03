<?php
	session_start();
?>
<?php

//require('connection.php');
$con=mysqli_connect("localhost","root","","museumcatalogue");
// username and password sent from form

$password=$_POST['email'];
$_SESSION["email"] = $password;

// To protect MySQL injection (more detail about MySQL injection)

$password = stripslashes($password);

$password = mysqli_real_escape_string($con,$password);


$sql="SELECT * FROM users WHERE email ='$password'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
//Name variable
while($row = mysqli_fetch_assoc($result))
{
	$id = $row["user_id"];
   $name = $row["name"];
   $level = $row["level"];
   $email = $row["email"];
   
// Register $myusername, $mypassword and redirect to file "login_success.php"
// Start the session
//session_start();
// Set session variables
$_SESSION["dID"] = $id;
$_SESSION["demail"] = $email;
$_SESSION["dlevel"] = $level;
$_SESSION["dname"] = $name;

//echo "Session variables are set.";
//header("location:editpage.php");
}
}
else {
echo "Wrong Username or Password";
}
?>


	<html>

	<head>
		<div id = "heading">
  <br><br>
    <h1>Confirm user</h1>
  </div>
	<script language=javascript src="function.js">
	</script>
	<script language=javascript>

		function checkout()
		{
			var i=0;
			for(x=0;x<document.f1.elements.length;x++)
			{
				if(document.f1.elements[x].value=="")
				{
					f1.txtname.focus();
					alert("Pls Enter All Value");
					i=1;
					break;
				}
			}

			if(i==0)
			{
				f1.method="post";
				f1.action="udelete.php";
				f1.submit();
			}
		}
	</script>
	</head>

	<body bgcolor="#fff">

	<?php
		include "connection.php";
		include "index3.php";
	?>

	<br><br>
	<form action="udelete.php" method="post" name="f1">
	<br><br>
	<table  border=0 align=center>
		
		<tr>
			<th align=left> User ID</th>
				<td>
			 		<input type="text" name="objid" max="2979-12-31" value= <?php echo"$id" ?> readonly><br>
				</td>
		</tr>

		<tr>
			<th align=left> User email :</th>
				<td>
			 		<input type="text" name="date" max="2979-12-31" value=<?php echo $_SESSION["demail"] ?> readonly> <br>
				</td>
		</tr>
		

		<tr>
			<th align=left>User level </th>
			<td>
				<input type="text" name="objtype" value=<?php echo $_SESSION["dlevel"] ?> readonly><br>
			</td>
		</tr>

		<tr>
			<th align=left>Name </th>
			<td>
				<input type="text" name="objname" value =<?php echo $_SESSION["dname"] ?> readonly>
			</td>

		</tr>

		

	<br />
	<br />
	<tr>
	<td colspan=2 align=center><input type=button name=s1 value="submit" onClick="checkout()">
	<input type=reset name=s2 value="clear"><a href=reservation.php></a></td>
	</tr>
	</table>
	</form>
	<ul>
	<li><strong><a href="portfolio.php">Back</a></strong></li>
	</ul>

</body>
</html>

