 <!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Velkommen til sydbyen.info · Sydbyen.info · Haderslev</title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.io/min/jquery.cycle2.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66134145-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

<header>
<nav>
<div class="logo"><a href="pages/forside.php"><img src="images/logo.png" alt=""/></a></div>
<ul>
<li><a href="pages/forside.php">Forside</a></li>
<li><a href="pages/aktiviteter.php">Aktiviteter</a>
<ul>
<li><a href="pages/kommende.php">Kommende</a></li>
</ul>
</li>
<li><a href="pages/helhedsplan.php">Helhedsplan</a></li>
<li><a href="pages/kalender.php">Kalender</a></li>
<li><a href="pages/kontakt.php">Kontakt</a></li>
</ul>
</nav>
</header>

<div id="wrapper">

<aside style="height: 540px;">
<h3>Uge <?php echo date("W")?> </h3>

<?php
$day = date("N");
$mon = ("1");
$tue = ("2");
$wed = ("3");
$thu = ("4");
$fri = ("5");
$sat = ("6");
$sun = ("7");
 
if ($day == $mon) {
		echo ("<p>Mandag - 12:30 - 15:00 <br/><span>Lotto<br/></span></p>
		<p>Mandag - 15:00 - 16:00 <br/><span>Sprog-legestue<br/></span></p>
		<p>Mandag - 15:00 - 16:00 <br/><span>Sv&oslash;mmeklub (12 - 18 &aring;r)<br/></span></p>
		<p>Mandag - 15:00 - 17:30 <br/><span>Clubben</span></p>
		<p>Mandag - 16:00 - 18:00 <br/><span>Lektiecafeen<br/></span></p>
		<p>Mandag - 16:30 - 17:30 <br/><span>Fitforkids<br/></span></p>
		<p>Mandag - 19:00 - 20:00 <br/><span>Sv&oslash;mmeklub (11 - 18 &aring;r)<br/></span></p>");
}

if ($day == $tue) {
		echo ("<p>Tirsdag - 10:00 - 12:00 <br/><span>PC-kursus<br/></span></p>
		<p>Tirsdag - 10:00 - 12:00 <br/><span>Porcel&aelig;nsmaling<br/></span></p>
		<p>Tirsdag - 15:00 - 17:30 <br/><span>Clubben</span></p>
		<p>Tirsdag - 16:00 - 18:00 <br/><span>Lektiecafeen<br/></span></p>
		<p>Tirsdag - 17:30 - 18:30 <br/><span>F&aelig;llesspisning<br/></span></p>
		<p>Tirsdag - 17:30 - 18:30 <br/><span>F&aelig;lles madlavning<br/></span></p>
		<p>Tirsdag - 19:00 - 21:00 <br/><span>Voksen klub<br/></span></p>
		<p>Tirsdag - 19:00 - 22:00 <br/><span>Dart & Billiard<br/></span></p>");
}

if ($day == $wed) {
		echo ("<p>Onsdag - 10:00 - 12:00 <br/><span>Seniorcafé<br/></span></p>
		<p>Onsdag - 14:00 - 18:00 <br/><span>Krolf/petanque<br/></span></p>
		<p>Onsdag - 15:00 - 17:30 <br/><span>Clubben</span></p>
		<p>Onsdag - 18:00 - 20:30 <br/><span>B&oslash;rneklub<br/></span></p>
		<p>Onsdag - 18:30 - 20:30 <br/><span>Hyggek&aelig;lderen<br/></span></p>");
}

if ($day == $thu) {
		echo ("<p>Torsdag - 10:00 - 12:00 <br/><span>PC-kursus<br/></span></p>
		<p>Torsdag - 15:00 - 17:00 <br/><span>B&oslash;rneklub<br/></span></p>
		<p>Torsdag - 15:00 - 17:30 <br/><span>Clubben</span></p>
		<p>Torsdag - 15:30 - 16:30 <br/><span>Sv&oslash;mmeklub (6 - 10 &aring;r)<br/></span></p>");
}


if ($day == $fri) {
		echo ("<p>Fredag - 14:00 - 18:00 <br/><span>Krolf/petanque<br/></span></p>
		<p>Fredag - 15:00 - 17:30 <br/><span>Clubben</span></p>
		<p>Fredag - 19:00 - 21:00 <br/><span>Sv&oslash;mmeklub (18+ &aring;r)<br/></span></p>");
}

if ($day == $sat) {
		echo ("<p>L&oslash;rdag - 10:30 - 12:00 <br/><span>Fitfirkids<br/></span></p>
		<p>L&oslash;rdag - 12:00 - 14:00 <br/><span>Sv&oslash;mmeklub (piger og kvinder)<br/></span></p>
		<p>L&oslash;rdag - 14:15 - 15:45 <br/><span>Sv&oslash;mmeklub (drenge og m&aelig;nd)<br/></span></p>
		<p>L&oslash;rdag - 16:00 - 18:00 <br/><span>Sv&oslash;mmeklub (12 - 18 &aring;r)<br/></span></p>");
}
?>

<p>>> <a href="pages/kalender.php">Se hele kalenderen her</a></p>
</aside>

<div id="content">
<h1>Hvad er sydbyen.info?</h1>
<p>Sydbyen.info er en f&aelig;lles information platform. P&aring; siden kan du se hvilke aktiviteter og begivenheder, der sker i sydbyen i Haderslev. Du kan også l&aelig;se sydbyens helhedsplan samt mange andre ting.</p> 
</div>

<div id="slideshow">
<div class="cycle-slideshow" 
    data-cycle-fx=scrollHorz
    data-cycle-timeout=4000
    data-cycle-pause-on-hover="true"
>

<!-- empty element for overlay -->
<div class="cycle-overlay"></div>
<!-- empty element for pager links -->
<div class="cycle-pager"></div> 
<img src="images/slide37.jpg" 
	data-cycle-title="<strong>Kultur dans</strong>" 
    data-cycle-desc="V&aelig;r med til at opleve danse fra forskellige kultur. Det sker 21. april fra 18 - 21. <br/> <br/> Der er gratis adgang, så kom!">
<img src="images/slide38.jpg" 
	data-cycle-title="<strong>Frivillig fest</strong>" 
    data-cycle-desc="Den 24. maj holder vi talent og frivilligheds award! <br/><br/> Vi hylder alle frivillig indenfor kultur og fritidsomr	&aring;det med en brag har en fest!">
</div>
</div>

<section>
<div class="under_menu">
<a href="pages/aktiviteter.php"><img src="images/aktiviteter.jpg" alt="" /></a>
</div>
<div class="under_menu">
<a href="pages/helhedsplan.php"><img src="images/helhedsplan.jpg" alt="" /></a>
</div>
<div class="under_menu">
<a href="pages/kalender.php"><img src="images/kalender.jpg" alt="" /></a>
</div>
<div class="under_menu">
<a href="pages/kontakt.php"><img src="images/kontakt.jpg" alt="" /></a>
</div>
</section>

<footer>
<p>© <?php echo date("Y") ?> · Sydbyen.info · Hjortebrovej 23c · 6100 Haderslev · Tlf: (+45) 21 38 18 33 · Mail: hro@hab-bolig.dk</p>
</footer>

</div>
</body>
</html>
