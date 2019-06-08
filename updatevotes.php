<?php
ob_start();
session_start();
$con=mysqli_connect("localhost","root","","elections_database2");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySql:".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['ok']))
{

$polling_station_name=$_POST['polling_station_name'];
$district=$_POST['district'];
$valid_votes=$_POST['valid_votes'];
$rejected_votes=$_POST['rejected_votes'];
$rejected_ballots=$_POST['rejected_ballots'];
$unmarked_ballots=$_POST['unmarked_ballots'];
$ballots=$_POST['ballots'];
$APNU=$_POST['APNU'];
$PPP=$_POST['PPP'];
$URP=$_POST['URP'];
$TUF=$_POST['TUF'];

	//insert query

	$insert="INSERT INTO `polling_station` (`polling_station_name`,`valid_votes`,`rejected_votes`,`rejected_ballots`,`unmarked_ballots`,`ballots`) VALUES('$polling_station_name','$valid_votes','$rejected_votes','$rejected_ballots','$unmarked_ballots','$ballots')";
	$query=mysqli_query($con,$insert) or die(mysqli_error($con));
	if($query==1)
	{
		$ins="INSERT INTO `party_votes`(`polling_station_name`,`district`,`apnu`,`ppp`,`tuf`,`urp`) VALUES ('$polling_station_name','$district','$APNU','$PPP','$TUF','$URP')";
		$quy=mysqli_query($con,$ins) or die(mysqli_error($con));
		if($quy==1)
			///update results table with current results
		{
			$ins1="UPDATE results SET results.apnu_total=(SELECT SUM(apnu) FROM party_votes),results.ppp_total=(SELECT SUM(ppp) FROM party_votes),results.tuf_total=(SELECT SUM(tuf) FROM party_votes),results.urp_total=(SELECT SUM(urp) FROM party_votes)";
			$quy1=mysqli_query($con, $ins1) or die (mysqli_error($con));
			if($quy==1)
			{$ins2="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='1') WHERE district.district='1'";
			$quy2=mysqli_query($con, $ins2) or die (mysqli_error($con));
			$ins3="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='2') WHERE district.district='2'";
			$quy3=mysqli_query($con, $ins3) or die (mysqli_error($con));
			$ins4="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='3') WHERE district.district='3'";
			$quy4=mysqli_query($con, $ins4) or die (mysqli_error($con));
			$ins5="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='4') WHERE district.district='4'";
			$quy5=mysqli_query($con, $ins5) or die (mysqli_error($con));
			$ins6="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='5') WHERE district.district='5'";
			$quy6=mysqli_query($con, $ins6) or die (mysqli_error($con));
			$ins7="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='6') WHERE district.district='6'";
			$quy7=mysqli_query($con, $ins7) or die (mysqli_error($con));
			$ins8="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='7') WHERE district.district='7'";
			$quy8=mysqli_query($con, $ins8) or die (mysqli_error($con));
			$ins9="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='8') WHERE district.district='8'";
			$quy9=mysqli_query($con, $ins9) or die (mysqli_error($con));
			$ins10="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='9') WHERE district.district='9'";
			$quy10=mysqli_query($con, $ins10) or die (mysqli_error($con));
			$ins11="UPDATE district SET district.apnu=(SELECT SUM(apnu) FROM party_votes WHERE party_votes.district='10') WHERE district.district='10'";
			$quy11=mysqli_query($con, $ins11) or die (mysqli_error($con));
			if($quy11==1){
			$ins12="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='1') WHERE district.district='1'";
			$quy12=mysqli_query($con, $ins12) or die (mysqli_error($con));
			$ins13="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='2') WHERE district.district='2'";
			$quy13=mysqli_query($con, $ins13) or die (mysqli_error($con));
			$ins14="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='3') WHERE district.district='3'";
			$quy14=mysqli_query($con, $ins14) or die (mysqli_error($con));
			$ins15="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='4') WHERE district.district='4'";
			$quy15=mysqli_query($con, $ins15) or die (mysqli_error($con));
			$ins16="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='5') WHERE district.district='5'";
			$quy16=mysqli_query($con, $ins16) or die (mysqli_error($con));
			$ins17="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='6') WHERE district.district='6'";
			$quy17=mysqli_query($con, $ins17) or die (mysqli_error($con));
			$ins18="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='7') WHERE district.district='7'";
			$quy18=mysqli_query($con, $ins18) or die (mysqli_error($con));
			$ins19="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='8') WHERE district.district='8'";
			$quy19=mysqli_query($con, $ins19) or die (mysqli_error($con));
			$ins20="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='9') WHERE district.district='9'";
			$quy20=mysqli_query($con, $ins20) or die (mysqli_error($con));
			$ins21="UPDATE district SET district.ppp=(SELECT SUM(ppp) FROM party_votes WHERE party_votes.district='10') WHERE district.district='10'";
			$quy21=mysqli_query($con, $ins21) or die (mysqli_error($con));
						if($quy==21)
			{$ins22="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='1') WHERE district.district='1'";
			$quy22=mysqli_query($con, $ins22) or die (mysqli_error($con));
			$ins23="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='2') WHERE district.district='2'";
			$quy23=mysqli_query($con, $ins23) or die (mysqli_error($con));
			$ins24="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='3') WHERE district.district='3'";
			$quy24=mysqli_query($con, $ins24) or die (mysqli_error($con));
			$ins25="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='4') WHERE district.district='4'";
			$quy25=mysqli_query($con, $ins25) or die (mysqli_error($con));
			$ins26="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='5') WHERE district.district='5'";
			$quy26=mysqli_query($con, $ins26) or die (mysqli_error($con));
			$ins27="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='6') WHERE district.district='6'";
			$quy27=mysqli_query($con, $ins27) or die (mysqli_error($con));
			$ins28="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='7') WHERE district.district='7'";
			$quy28=mysqli_query($con, $ins28) or die (mysqli_error($con));
			$ins29="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='8') WHERE district.district='8'";
			$quy29=mysqli_query($con, $ins29) or die (mysqli_error($con));
			$ins30="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='9') WHERE district.district='9'";
			$quy30=mysqli_query($con, $ins30) or die (mysqli_error($con));
			$ins31="UPDATE district SET district.tuf=(SELECT SUM(tuf) FROM party_votes WHERE party_votes.district='10') WHERE district.district='10'";
			$quy31=mysqli_query($con, $ins31) or die (mysqli_error($con));}
			if($quy31==1){
			$ins32="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='1') WHERE district.district='1'";
			$quy32=mysqli_query($con, $ins32) or die (mysqli_error($con));
			$ins33="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='2') WHERE district.district='2'";
			$quy33=mysqli_query($con, $ins33) or die (mysqli_error($con));
			$ins34="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='3') WHERE district.district='3'";
			$quy34=mysqli_query($con, $ins34) or die (mysqli_error($con));
			$ins35="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='4') WHERE district.district='4'";
			$quy35=mysqli_query($con, $ins35) or die (mysqli_error($con));
			$ins36="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='5') WHERE district.district='5'";
			$quy36=mysqli_query($con, $ins36) or die (mysqli_error($con));
			$ins37="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='6') WHERE district.district='6'";
			$quy37=mysqli_query($con, $ins37) or die (mysqli_error($con));
			$ins38="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='7') WHERE district.district='7'";
			$quy38=mysqli_query($con, $ins38) or die (mysqli_error($con));
			$ins39="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='8') WHERE district.district='8'";
			$quy39=mysqli_query($con, $ins39) or die (mysqli_error($con));
			$ins40="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='9') WHERE district.district='9'";
			$quy40=mysqli_query($con, $ins40) or die (mysqli_error($con));
			$ins41="UPDATE district SET district.urp=(SELECT SUM(urp) FROM party_votes WHERE party_votes.district='10') WHERE district.district='10'";
			$quy41=mysqli_query($con, $ins41) or die (mysqli_error($con)); }
			}
			}
			
			
		$_SESSION['message'] = "Polls Submitted";
		header('location:index.php');
		}
	}
	else
	{
		echo "Payment no done:";
	}
}




?>