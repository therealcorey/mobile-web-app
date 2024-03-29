<?php
// RESTRICT ACCESS
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config1.php";
session_start();
if (!is_array($_SESSION['party'])) {
  die("ERR");
}

// INIT
require PATH_LIB . "lib-party.php";
$parLib = new Party();

// HANDLE AJAX REQUEST
switch ($_POST['req']) {
  /* [INVALID REQUEST] */
  default:
    die("ERR");
    break;

  /* [SHOW ALL USERS] */
  case "list":
    $party = $parLib->getAll(); ?>
    <h1>MANAGE USERS</h1>
    <input type="button" value="Add Party" onclick="par.addEdit()"/>
    <?php
    if (is_array($party)) {
      echo "<table class='zebra'>";
      foreach ($party as $p) {
        printf("<tr><td>%s (%s)</td><td class='right'>"
          . "<input type='button' value='Delete' onclick='par.del(%p)'>"
          . "<input type='button' value='Edit' onclick='par.addEdit(%p)'>"
          . "</td></tr>", 
          $p['party_name'],$p['abbreviation'],
		  $p['party_id'],$p['party_id'] );
      }
      echo "</table>";
    } else {
      echo "<div>No userrs found.</div>";
    }
    break;

  /* [ADD/EDIT USER DOCKET] */
  case "addEdit":
    $edit = is_numeric($_POST['id']);
    if ($edit) {
      $party = $parLib->get($_POST['id']);
    } ?>
    <h1><?=$edit?"EDIT":"ADD"?> Party</h1>
    <form onsubmit="return par.save()">
      <input type="hidden" id="par_id" value="<?=$party['party_id']?>"/>
      <label for="par_name">Name:</label>
      <input type="text" id="par_name" required value="<?=$party['party_name']?>"/>
      <label for="par_ideology">Ideology:</label>
	  <input type="text" id="par_name" required value="<?=$party['ideology']?>"/>
	  <label for="par_abbreviation">Abbreviation:</label>
      <input type="text" id="par_abbreviation" required value="<?=$party['abbreviation']?>"/>
      <label for="par_chairperson_first_name">Chairperson First Name:</label>
      <input type="text" id="par_chairperson_first_name" required value="<?=$party['chairperson_first_name']?>"/>
	   <label for="par_chairperson_last_name">Chairperson Last Name:</label>
      <input type="text" id="par_chairperson_last_name" required value="<?=$party['chairperson_last_name']?>"/>
	  
	  

      
      <input type="button" value="Cancel" onclick="par.list()"/>
      <input type="submit" value="Save"/>
    </form>
    <?php break;

  /* [ADD USER] */
  case "add":
    echo $parLib->add($_POST['party_name'], $_POST['ideology'],$_POST['abbreviation'], $_POST['chairperson_first_name'], $_POST['chairperson_last_name']) ? "OK" : "ERR" ;
    break;

  /* [EDIT USER] */
  case "edit":
    echo $parLib->edit($_POST['party_name'], $_POST['ideology'],  $_POST['abbreviation'],$_POST['chairperson_first_name'], $_POST['chairperson_last_name'], $_POST['id']) ? "OK" : "ERR" ;
    break;

  /* [DELETE USER] */
  case "del":
    echo $parLib->del($_POST['id']) ? "OK" : "ERR" ;
    break;
}
?>