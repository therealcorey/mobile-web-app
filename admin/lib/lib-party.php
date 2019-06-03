<?php
class Party {
  private $pdo = null;
  private $stmt = null;

  function __construct () {
  // __construct() : connect to the database
  // PARAM : DB_HOST, DB_CHARSET, DB_NAME, DB_USER, DB_PASSWORD

    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
        ]
      );
      return true;
    } catch (Exception $ex) {
      $this->CB->verbose(0, "DB", $ex->getMessage(), "", 1);
    }
  }

  function __destruct () {
  // __destruct() : close connection when done

    if ($this->stmt !== null) {
      $this->stmt = null;
    }
    if ($this->pdo !== null) {
      $this->pdo = null;
    }
  }

  function get ($party_id) {
  // get() : get user
  // PARAM $id : user ID

    $sql = "SELECT * FROM `party` WHERE `party_id`=?";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute([$party_id]);
    $entry = $this->stmt->fetchAll();
    return count($entry)==0 ? false : $entry[0] ;
  }

  function getByName ($party_name) {
  // get() : get user by email
  // PARAM $email : user email

    $sql = "SELECT * FROM `party` WHERE `party_name`=?";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute([$email]);
    $entry = $this->stmt->fetchAll();
    return count($entry)==0 ? false : $entry[0] ;
  }

  function getAll () {
  // getAll() : get all users

    $sql = "SELECT * FROM `party`";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute();
    $entry = $this->stmt->fetchAll();
    return count($entry)==0 ? false : $entry ;
  }
($_POST['party_name'], $_POST['ideology'], $_POST['abbreviation'], $_POST['chairperson_first_name'], $_POST['chairperson_last_name'])
  function add ($party_name, $ideology, $abbreviation, $chairperson_first_name, $chairperson_last_name) {
  // add() : add a new user
  // PARAM $email - email
  //       $name - name
  //       $password - password (clear text)

    $sql = "INSERT INTO `party` (`party_name`, `ideology`, `abbreviation`, `chairperson_first_name`, `chairperson_last_name`)) VALUES (?, ?, ?, ?, ?)";
    $cond = [$party_name, $ideology, $abbreviation, $chairperson_first_name, $chairperson_last_name)];
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
    } catch (Exception $ex) {
      return false;
    }
    return true;
  }

  function edit ($party_name, $ideology, $abbreviation, $chairperson_first_name, $chairperson_last_name, $party_id) {
  // edit() : update user
  // PARAM $email - email
  //       $name - name
  //       $password - password (clear text)
  //       $id - user ID

    $sql = "UPDATE `party` SET `party_name`=?, `ideology`=?, `chairperson_first_name`=?, `chairperson_last_name`=?, `abbreviation`=? WHERE `party_id`=?";
    $cond = [$party_name, $ideology, $abbreviation, $chairperson_first_name, $chairperson_last_name, $party_id];
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
    } catch (Exception $ex) {
      return false;
    }
    return true;
  }

  function del ($party_id) {
  // del() : delete user
  // PARAM $id - user ID

    $sql = "DELETE FROM `party` WHERE `party_id`=?";
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute([$party_id]);
    } catch (Exception $ex) {
      return false;
    }
    return true;
  }
}
?>