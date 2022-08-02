
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Profile</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Profile.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "inventory management"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Profile">
  <meta property="og:type" content="website">
</head>

<body data-home-page="Profile.html" data-home-page-title="Profile" class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-header u-white u-header" id="sec-67a4">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-nav-container"></div>
        <div class="u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-1">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/stack-area/Profile/index.php">Profile</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <a href="/stack-area/inventory/Dashboard/index.php"
                class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-custom-item u-none u-text-body-color u-btn-1">Dashboard</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <a href="/stack-area/inventory/Dashboard/Store/index.php"
                class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-custom-item u-none u-text-body-color u-btn-2">Store</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <a href="/stack-area/index.html"
                class="u-border-2 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-custom-item u-hover-custom-color-1 u-radius-50 u-text-custom-color-1 u-text-hover-white u-white u-btn-3">Log
                out<br>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a href="/stack-area/Profile/index.php"
        class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-body-color u-btn-4">Profile</a>
    </div>
  </header>
  <section class="u-border-12 u-border-grey-10 u-clearfix u-white u-section-1" id="sec-0cb2">
    <div class="u-clearfix u-sheet u-sheet-1">
      <img class="u-image u-image-circle u-image-1" src="images/4.svg" alt="" data-image-width="400"
        data-image-height="265">
      <h3 class="u-text u-text-default u-text-1">
        <span style="font-weight: 700;">hai
        <?php
           include "connection.php";
           error_reporting(0);
           session_start();
           echo $_SESSION["user_id"];
          //  $sql = "SELECT * FROM `user` WHERE user_id =" .$_SESSION["user_id"];    
          //  $result = mysqli_query($conn, $sql);
          //  $row = mysqli_fetch_array($result);
          //  $worth = $row[0];
          //  echo  "$worth";
          ?>
      
      
      
      </span>
        <span style="font-weight: 700;"></span>
      </h3>
      <a href="./Update.html"
        class="u-border-1 u-border-grey-50 u-btn u-btn-round u-button-style u-hover-grey-50 u-none u-radius-18 u-text-body-color u-text-hover-white u-btn-1">
        <span style="font-size: 1rem;">
          <span style="font-size: 0.875rem;"> Edit Profile</span>
        </span>
        <br>
      </a>
      <p class="u-text u-text-default u-text-2">Admin user</p>
      <div class="u-list u-list-1"></div>




      <!-- Add Profile Table Here  -->





      <br>
      </a>
    </div>
  </section>

</body>
</html>