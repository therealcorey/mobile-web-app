<?php

//Header to Json
header('Content-Type: application/json');



define ('DB_HOST','localhost');
define ('DB_USERNAME','root');
define ('DB_PASSWORD','');
define ('DB_NAME','elections_database2');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//query to pull data from table
$query = sprintf("SELECT district, district_name, apnu, ppp, tuf, urp  FROM district ORDER BY district, district_name");

//execute query
$result= $mysqli->query($query);

$data=array();
foreach ($result as $row){$data[] = $row;
}

//free result memory
$result->close();

///print data in json format
print json_encode($data);


?>