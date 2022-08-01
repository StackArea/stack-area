<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="INTUITIVE">
  <meta name="description" content="">
  <title>Page 1</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Page-1.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Page 1">
  <meta property="og:type" content="website">
</head>

<body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body u-xl-mode" data-lang="en">
  <header class="u-clearfix u-header u-white" id="sec-9c37">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-container-style u-group u-shape-rectangle u-group-1">
        <!-- <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img
              src="images/561127.png" alt=""></span><span class="u-file-icon u-icon u-icon-2"><img
              src="images/149302.png" alt=""></span>
          <a href="https://nicepage.site"
            class="u-border-none u-btn u-btn-round u-button-style u-hover-white u-radius-50 u-white u-btn-1"><span
              class="u-icon"><svg class="u-svg-content" viewBox="0 0 30.727 30.727" x="0px" y="0px"
                style="width: 1em; height: 1em;">
                <path
                  d="M29.994,10.183L15.363,24.812L0.733,10.184c-0.977-0.978-0.977-2.561,0-3.536c0.977-0.977,2.559-0.976,3.536,0   l11.095,11.093L26.461,6.647c0.977-0.976,2.559-0.976,3.535,0C30.971,7.624,30.971,9.206,29.994,10.183z">
                </path>
              </svg><img></span>&nbsp;ENG
          </a><span class="u-file-icon u-icon u-icon-4"><img src="images/900782.png" alt=""></span>
        </div>-->
      </div> 

      <div class="u-container-style u-group u-shape-rectangle u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <a href="../../../Profile/index.php">
          <p class="u-text u-text-default u-text-1">Profile<span style="font-size: 1.25rem;">
              <span style="font-size: 1.5rem;"></span>
            </span>
          </p><span class="u-file-icon u-icon u-icon-5"><img src="images/892498.png" alt=""></span><span
            class="u-file-icon u-icon u-icon-6"><img src="images/3135715.png" alt=""></span>
          <p class="u-text u-text-default u-text-2">Admin User</p>
          </a>
        </div>
      </div>
      <a href="../index.html"
        class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-palette-1-light-2 u-radius-2 u-btn-2">←
        Back&nbsp;</a>
    </div>
  </header>
  <section class="u-clearfix u-section-1" id="sec-594d">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h3 class="u-text u-text-default u-text-1">Product List<br>
      </h3>
      <a href="./addProduct.html"
        class="u-border-none u-btn u-button-style u-hover-palette-4-dark-2 u-palette-4-base u-btn-1">
        <span style="font-weight: 400;">
          <span style="font-weight: 700;"> + Add Product</span>
        </span>
        <br>
      </a>
      <a href= "./deleteProduct.html" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2"><span
          class="u-file-icon u-icon"><img src="images/8040259.png" alt=""></span>&nbsp;Delete Product<br>
      </a>
      <div class="u-border-3 u-border-palette-5-light-2 u-container-style u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <p class="u-text u-text-default u-text-2"><span class="u-file-icon u-icon"><img src="images/54481.png"
                alt=""></span>Search List
          </p>
        </div>
      </div>
      <a href="https://nicepage.com/html-templates"
        class="u-border-2 u-border-custom-color-1 u-btn u-button-style u-hover-custom-color-1 u-none u-text-hover-white u-btn-3">Filter</a><span
        class="u-file-icon u-icon u-text-custom-color-1 u-icon-3"><img src="images/7094575.png" alt=""></span><span
        class="u-file-icon u-icon u-text-palette-3-light-1 u-icon-4"><img src="images/3022276.png" alt=""></span>
      <div class="u-expanded-width u-opacity u-opacity-60 u-shape u-shape-rectangle u-white u-shape-1">
      <table class="table">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>CATEGORY</th>
        <th>SELLER</th>
        <th>QUANTITY</th>
        <th>UNIT_PRICE</th>
    </tr>
    <?php
        include "connection.php";

        error_reporting(0);
        session_start();
                
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["Product_id"] . "</td>";
            echo "<td>" . $row["Product_name"] . "</td>";
            echo "<td>" . $row["Category"] . "</td>";
            echo "<td>" . $row["Seller"] . "</td>";
            echo "<td>" . $row["Quantity"] . "</td>";
            echo "<td>" . $row["Unit_price"] . "</td>";
            echo "</tr>";
        }
    ?>
    </table>
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-43b3">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
    </div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
      <span>Website Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section><span
    style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px; padding: 15px;"
    class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base" data-href="#">
    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use>
    </svg>
    <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13"
      xmlns="http://www.w3.org/2000/svg" id="svg-1d98">
      <path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path>
    </svg>
  </span>

</body>

</html>