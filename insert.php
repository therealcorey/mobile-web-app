<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","");
    if(!$con)
    {
        die("Unable to connect to database" . mysqli_error());
    }

    mysqli_select_db("elections_database2",$con);
    $sql1="INSERT INTO election ( district, pollingstation, ) VALUES ('$_POST[district]','$_POST[polling_station]',)";
    $sql2="INSERT INTO miscellaneous (distrit, pollingstation, total_valid_votes, rejected_votes, unmarked_ballots, tot_ballot_boxes) VALUES ('$_POST[district]','$_POST[polling_station]','$_POST[rejected_votes]','$_POST[rejected_ballots]','$_POST[unmarked_ballots]','$_POST[ballots]','$_POST[]','$_POST[]')";
    mysqli_query($sql1,$con);
	mysqli_query($sql2, $con);
    mysqli_close($con);
}
?>