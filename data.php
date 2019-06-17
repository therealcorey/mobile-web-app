<?php

//Header to Json
header('Content-Type: application/json');



define ('DB_HOST','localhost');
define ('DB_USERNAME','root');
define ('DB_PASSWORD','');
define ('DB_NAME','elections_database2');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//query to pull data from table
$query = sprintf("SELECT apnu_total, ppp_total, tuf_total, urp_total  FROM results ORDER BY id");

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