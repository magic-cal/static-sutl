<?php session_start();
  include $_SERVER['DOCUMENT_ROOT']."/templates/util.php";
  // if there is no event set, Send them to INDEX
  if(!isset($_GET["Event"])){
    redirect("index");
  }else{
      // include "templates/header.php";
      // connect to the database
        require($_SERVER['DOCUMENT_ROOT']."/templates/connection.php");

// Get all data about the selective and acticve competition
        $query = "SELECT * FROM Comp where comp_id = '".$_GET["Event"]."' AND comp_active = '1';";
        $resultEvent = get_data($query);
        $numResults = mysqli_num_rows($resultEvent);
        // if there are no valid competitions, Return them to index
        if(!$numResults > 0){
          redirect("index");
        }
        $Comp = mysqli_fetch_assoc($resultEvent);

        $img = '/images/crests/new/'.strtolower(str_replace(" ","-",$Comp['comp_name'])).'.png';

      ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="mystyle.css" media="screen">
  <!-- <link href='https://fonts.googleapis.com/css?family=Tahoma' rel='stylesheet'> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images\favicons\faviconx32.ico" type="image/x-icon">
  <title>Southern Universities Trampoline League</title>
</head>
<header>
  <!-- <h1>Southern Universities Trampoline League</h1> -->

  <a href="index">   <img id="logo" src="images/logo.png" alt="Southern Universities Trampoline League Logo"></a>
  <nav>
    <ul>
      <li><a href="index">Home</a></li>
      <li><a href="about">About</a></li>
      <li><a href="committee">Committee</a></li>
      <li><a href="results">Results</a></li>
      <li><a href="teamwear">Teamwear</a></li>
      <li><a href="resources">Resources</a></li>
      <li><a href="affiliate">Affiliate</a></li>
      <li><a href="login">SUTL<span id="Portal">Portal</span></a></li>

    </ul>
  </nav>
</header>

<body>

  <article class='comp'>
    <figure>
<?php

      if (!file_exists($_SERVER['DOCUMENT_ROOT'].$img)){
        $img = "/images/dude-square.png";
      }

      echo "<img src = \"$img\">";?> </td>
    </figure>

    <section class="slider split">
      <h1><?php echo$Comp['comp_host']; ?></h1>

      <?php
      $files = ["Start List", "Timetable", "Officials","Entry Report"];

      for ($i=0; $i <count($files); $i++) {
        $file = $_SERVER['DOCUMENT_ROOT']."/res/".$Comp['comp_name'].date("Y",strtotime($Comp['comp_date']))."/".$files[$i].".pdf";
         $outFile = "/res/".$Comp['comp_name'].date("Y",strtotime($Comp['comp_date']))."/".$files[$i].".pdf";
         // echo ($outFile);
        if (file_exists($file)){
         echo("<a href=\"$outFile\">- $files[$i]                      </a>");
       }
      }

$img = '/images/comp-venue/'.strtolower(str_replace(" ","-",$Comp['comp_name'])).'.png';
      if (!file_exists($_SERVER['DOCUMENT_ROOT'].$img)){
        $img = '/images/comp-venue/'.strtolower(str_replace(" ","-",$Comp['comp_name'])).'.jpg';
        if (!file_exists($_SERVER['DOCUMENT_ROOT'].$img)){
        $img = "images/slides/1.png";
      }
      }
      echo(" <img src=\"$img\" alt=\"Gym Venue $\">")
     ?>
</section>
</aside>

      <!-- <h3>SUTL *UNIVERSITY* </h3> -->
      <time>Date: <?php echo date("jS F Y",strtotime($Comp['comp_date'])); ?></time>
      <h3>Address:</h3>

      <address>
        <pre>

<?php echo$Comp['comp_address']; ?>
        </pre>
      </address>
      <div class="resources">

        <br>
        <time>Entries Open: <?php echo date("d/M/y",strtotime($Comp['comp_entries_open'])); ?></time>
        <br>
        <time>Entries Close: <?php echo date("d/M/y",strtotime($Comp['comp_entries_close'])); ?></time>
        <br>

      </div>
      <div>
        <table>
          <tr>
            <th>Entry Cost</th>
          </tr>
          <tr>
            <td>Individual</td>
            <td>£<?php echo$Comp['comp_individual_price']; ?></td>
          </tr>
          <tr>
            <td>Synchronised</td>
            <td>£<?php echo$Comp['comp_synchro_price']; ?></td>
          </tr>
          <tr>
            <td>Team</td>
            <td>£<?php echo$Comp['comp_team_price']; ?></td>
          </tr>
          <tr>
            <td>Non-Affiliated Entry Fee</td>
            <td>£<?php echo$Comp['comp_individual_price']; ?></td>
          </tr>

        </table>
      </div>
      <div>


        <h3>Info</h3>
        <p><?php echo$Comp['comp_misc']; ?></p>


        <h3>Social</h3>
        <p><?php echo$Comp['comp_social']; ?></p>
        <p> <?php if($Comp['comp_social_price'] > 0){
          echo"Social Cost: £".$Comp['comp_social_price'];} ?></p>

      </div>
    </aside>

    <!-- <picture>
      <img src="images/trampoline.png" alt="eurotramp trampoline">
    </picture> -->
  </article>



</body>
<footer>
  <section class="branding">
    <img class="logo" src="images/dude-square.png" alt="Southern Universities Trampoline League Logo">
  </section>
  <section class="social">
    <a href="http://www.facebook.com/sutrampolineleague">
      <img src="images\icons\facebook.svg" alt="Facebook Logo"></a>
    <a href="http://twitter.com/sutleague">
      <img src="images\icons\twitter.png" alt="Twitter Logo"></a>
    <a href="http://www.youtube.com/channel/UCZlpPEwmJixWSLsmonMU_zg">
      <img src="images\icons\youtube.png" alt="Youtube Logo"></a>
  </section>

  <section class="links">
    <a href="index">Home</a>
    <a href="sitemap.xml">Sitemap</a>
    <a href="about">About</a>
    <a href="mailto:info@sutleague.co.uk">Contact</a>
  </section>
  <section class="legal">
<small>© Copyright Callum McClure <?php echo date("Y"); ?> </small>
  </section>

</footer>

</html>

<?php } ?>
