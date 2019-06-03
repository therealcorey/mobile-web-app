

<html>
<head>
  <title>Artifacts View</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">



 <div id = "heading">
  <br>
  <br>
  <br>
    <h1>Users Details</h1>
  </div>

  <?php

   
    include "connection.php";
    include "index4.php";
/*
    session_start();
 
    $data = ("SELECT * FROM artifacts");

    $results = mysqli_query($con, $data);
 
    if (mysqli_num_rows($results) > 0) {
     // output data of each row
         while($row = $results->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " Donor " . $row["donor"]. " Description" . $row["description"]. "Material " . $row["Material"]. " Dimension". $row["Dimension"]. " Weight " .$row["Weight"]."";
    }
} else {
  echo "no results <br>";
}
*/

$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Permission level: " . $row["level"]. "<br/>";
        echo " Name: " . $row["name"]. "<br/>";
        echo " Email " . $row["email"]. "<br/>";
       


        echo '<hr />';
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>

  </head>
  
  <body>

</body>
</html>
