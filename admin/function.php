<?php
function party_exists($party_name,$con)
{
$row=mysqli_query($con,"SELECT id FROM party WHERE party_name='$party_name'")
echo $row;
{
	if(mysqli_num_rows($row)==1)
	{
	return true;
	}
	else{
	return false;
}
}


?>