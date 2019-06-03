?>
	<html>

	<head>
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
				f1.action="userdelete.php";
				f1.submit();
			}
		}
	</script>

	<div id = "heading">
  <br>
    <h1>Delete user</h1>
  </div>
	</head>

	<body bgcolor="#fff">

	<?php
		include "connection.php";
		include "index4.php";
	?>

	
	<form action="userdelete.php" method="post" name="f1">
	
	<table  border=0 align=center>
		

		<tr>
			<th align=left>Email Address</th>
			<td>
				<input type="text" name="email">
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
