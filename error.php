<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
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
      <li><a href="/index">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/committee">Committee</a></li>
      <li><a href="/results">Results</a></li>
      <li><a href="/teamwear">Teamwear</a></li>
      <li><a href="/resources">Resources</a></li>
      <li><a href="/affiliate">Affiliate</a></li>
      <li><a href="https://tramponline.org/entries/login.php">SUTL<span id="Portal">Portal</span></a></li>

    </ul>
  </nav>
</header>

<body>
  <article>
    <section>
      <h1>Error: <?php if (isset($_GET['error'])) {
    echo $_GET['error'];
} else {
    echo "Unknown error</h1> <h3>If this persists email: webmaster@sutleague.co.uk</h3>";
} ?></h1>
      <h3>Oops, this is not the page you are looking for</h3>
      <h3>Zero for excecution</h3>
    </section>
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
