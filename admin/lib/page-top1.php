
<!DOCTYPE html>
<html>
  <head>
    <title>ADMIN PANEL</title>
    <meta name="robots" content="noindex">
    <link href="public/admin.css" rel="stylesheet">
    <script src="public/admin.js"></script>
  </head>
  <body>
    <!-- [NOW LOADING SPINNER] -->
    <div id="page-loader">
      <img id="page-loader-spin" src="public/cube-loader.svg">
    </div>

    <!-- [PAGE WRAPPER] -->
    <div id="page-wrap">
      <!-- [SIDE BAR] -->
      <nav id="page-sidebar">
        <a href="#">
          <span class="ico">&#9788;</span>
          SIDE BAR - PUT YOUR MODULES HERE
        </a>
        <a href="users.php">
          <span class="ico">&#9787;</span>
          Manage Users
        </a>
		<a href="party1.php">
          <span class="ico">&#9776;</span>
          Manage Candidates
        </a>
      </nav>

      <!-- [MAIN CONTENTS] -->
      <div id="page-main">
        <!-- [NAVIGATION BAR] -->
        <nav id="page-nav">
          <div id="page-button-side" onclick="adm.side();">&#9776;</div>
          <div id="page-button-out" onclick="adm.bye();">&#9747;</div>
        </nav>

        <!-- [PAGE CONTENTS] -->
        <div id="page-contents">