<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Deac-event</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="bootstrap.min.css">

<link rel="stylesheet" href="fontawesome-all.min.css">

 <link rel="stylesheet" href="swiper.min.css">

<link rel="stylesheet" href="style.css">
</head>
<body>
	<style>
	$success: #2ecc71;
$warning: #cf6d17;
$danger: #e74c34;
$grey: #cccccc;

.alert {
	text-align: center;
  position: relative;
  border-radius: 5px;
background-color: #cf6d17;
text-align: center;
  box-sizing: border-box;
  color: white;
  font-size: 1.5em;
  margin: 0 auto;
  margin-bottom: 1em;
  padding: 1em;
  width: calc(100% - 100px);
}

@each $name, $color in(
  'success': $success,
  'warning': $warning,
  'danger': $danger
) {
  .alert-#{$name} {
    background-color: #cf6d17;
	  text-align: center;
  }
}








</style>
<div class="alert alert-warning">
	<strong>Belangrijk!</strong> - De stream zal vanwege uitloop 10 minuten later starten (16:10). Sorry voor het ongemak.</div>
	<script>
		$('.close').on('click', function() {
  $(this).parent('.alert').hide();
});

$('.reset').on('click', function() {
  $('.alert').show();
});

	</script>
</div>
<header class="site-header">
<div class="header-bar">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-10 col-lg-4">
<h1 class="site-branding flex">
<a href="#">Deac-event</a>
</h1>
</div>
<div class="col-2 col-lg-8">
<nav class="site-navigation">
<div class="hamburger-menu d-lg-none">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
<ul>

</ul>
</nav>
</div>
</div>
</div>
</div>
</header>
<div class="hero-content">
<div class="container">
<div class="row">
<div class="col-12 offset-lg-2 col-lg-10">
<div class="entry-header">
<h2>Deac Waterstof presentatie</h2>

</div>
<?-- <div class="countdown flex flex-wrap justify-content-between" data-date="2021/04/12 16:10">  
<div class="countdown-holder">
<div class="dday"></div>
<label>Dagen</label>
</div>
<div class="countdown-holder">
<div class="dhour"></div>
<label>Uren</label>
</div>
<div class="countdown-holder">
<div class="dmin"></div>
<label>Minuten</label>
</div>
<div class="countdown-holder">
<div class="dsec"></div>
<label>Seconden</label>
</div> --> 
</div>
</div>
</div>
<div class="row">
<div class="col-12 ">
<div class="entry-footer">


<a href="https://youtu.be/UG9N4M3MAx0"  rel="external" class="btn current">Livestream terug kijken</a>
<a href="https://drive.google.com/uc?id=1xu5_-Ive9p4zo6RRgtY-eYpTQE8Nn6U1&export=download" class="btn current">Download verslag</a>
</div>
</div>
</div>
</div>
</div>
	
<div class="column-3">
    <h1>Over ons</h1>
    <p>Super dat u interesse heeft in onze presentatie. Wij zijn 4 jonge studenten die afgelopen jaar in samenwerking met DEAC Teuge onderzoek hebben gedaan naar de integratie van waterstof op GA-vliegvelden. Onze presentatie zal plaatsvinden op 12 april om 16:00 uur. Deze presentatie zal ongeveer een half uur duren, waarin wij proberen u zoveel mogelijk bij te leren over de integratie van waterstof op GA-vliegvelden.</p>
    <p>Graag zien we u 12 april.</p>
    <p>Met vriendleijke groet,</p>
    <p>Bram Teunis, Maurits van der Molen, Jochem Kleverwal en Mette Bouma</p>
</div>

<style>
.hero-content .entry-footer {
    margin-top: 125px;
    text-align: center;
}

.hero-content .entry-footer .btn {
    background: hsl(0, 0%, 100%);
    padding: 16px 40px;
    border-radius: 0;
    margin-left: 20px;
    color: hsl(0, 0%, 17%);
    font-weight: 600;
}

.hero-content .entry-footer a:hover, .hero-content .entry-footer .current {
    background: -webkit-linear-gradient(#00d0ff, #25ffbf);
    color: hsl(0, 0%, 0%);
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 45%;
  side: left;
color: black;
	padding: 40px;
	  padding-left:70px;
	  padding-right: 70px;
	  height: auto;
	  margin:30px;
	  margin-right:30px;
	  margin-bottom: 70px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 16px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background: -webkit-linear-gradient(#00d0ff, #25ffbf);
  color: black;
}
#highlight td{
	background-color: #75cc2c;
}
#highlight td:hover{
background-color:#ffff66
}
</style>


<div class="column-3">
    <h1>Realisatie Waterstof op General-Aviation Vliegvelden (samenvatting)</h1>
    <h3>Een onderzoeksrapport naar de integratie van waterstof op GA-luchthavens.</h3>
    <p>Voor het onderzoek naar de implementatie van waterstof in de luchtvaart hebben we gekeken naar vier aspecten en daar een integratie van gemaakt. De vier belangrijke aspecten zijn: de productie van waterstof, het transport van waterstof, de opslag van waterstof en het tanken van waterstof. </p>
    <p>Bij het produceren van waterstof zijn er verschillende mogelijke methodes. Onder deze methodes zijn de meest noemenswaardige methodes de elektrolysers. Deze methodes maken gebruik van elektrische energie, wat zorgt voor een splitsing van een watermolecuul. Deze methodes zijn goed voor het milieu, omdat ze geen koolstofdioxide uitstoten. Ook staat in het rapport wat de beste locatie voor een installatie zou zijn. Op korte termijn is dat op het vliegveld zelf, omdat de infrastructuur nog niet daar is. Op langer termijn kan waterstof in een fabriek geproduceerd worden. Dit is een efficiëntere manier van produceren, omdat er sprake is van een massavoordeel. </p>
    <p>Het tweede aspect is transporteren. Bij het transporteren van waterstof zijn er verschillende mogelijkheden, echter zijn ze niet allemaal even effectief. Het transporteren van waterstof via een vrachtwagen kan tot moeilijkheden lijden, dit komt door de hoge compressie en lage temperatuur waarin de waterstof moet worden getransporteerd. Waterstof zou ook in de bestaande leidingen van gas kunnen worden vervoerd hier zijn wel een paar aanpassingen voor nodig. De leidingen moeten bijvoorbeeld een nieuwe binnenlaag krijgen om ervoor te zorgen dat er geen waterstof lekt. </p>
    <p>Bij het opslaan van waterstof zijn de mogelijkheden opgesplitst in twee onderdelen, waaronder: Physical-based en Material-based. De Material-based opslag kan pas op langer termijn worden gerealiseerd, omdat het nu nog niet effectief genoeg is. De Physical-based, de grote opslag tanken en bijvoorbeeld zoutgrotten, kunnen echter wel op korte termijn gerealiseerd worden. De tanken kunnen makkelijk op locatie gebruikt worden en de zoutgrotten kunnen grote hoeveelheden aan waterstof opslaan. De waterstof wordt, zowel in de grotten als in de tank, in gasvormige substantie gehouden, dit betekent dat het niet tot het smeltpunt moet worden gekoeld. Dit kost namelijk veel energie en is op dit moment nog niet rendabel genoeg. </p>
	<p>Het tanken van waterstof is het laatste aspect wat staat beschreven in het rapport. Het tanken van waterstof kan je vergelijken met het tanken van LPG. Alleen bij het tanken van waterstof is de druk vele malen hoger. De tankinstallatie kan tot wel een druk van 700 bar tanken, dit is genoeg om voor een reële hoeveelheid energie in de tank. Daarnaast moeten er bij het tanken van vliegtuigen op het vliegveld verschillende leidingen worden aangepast om ze voor waterstof beschikbaar te maken.  </p>
	<p> </p>
	<h4>Contactgegevens</h4>
	<p>Auteur:              Bram Teunis, Jochem Kleverwal, Maurits van der Molen en Mette Bouma </p>
	<p>Functie:             Meesterproef bij DEAC  </p>
	<p>Organisatie:         Veluws College Walterbosch </p>
	<p>E-mail adres:        bramteunis@leerling.veluwscollege.nl </p>
	<p>          jochemkleverwal@leerling.veluwscollege.nl </p>
	<p>                     mauritsvandermolen@leerling.veluwscollege.nl </p>
	<p>                     mettebouma@leerling.veluwscollege.nl </p>
	</div>	
<style type="text/css">
	* {
	  box-sizing: border-box;
	}
	h1 {color: black;}
	h3 {color: black;}
	p {color: black;}
	/* Create two equal columns that float next to each other */
	.column-2 {
		
	  float: right;
	  width: 45%;
	  padding: 40px;
	  padding-left:70px;
	  padding-right: 70px;
	  height: auto;
	  margin:30px;
	  margin-right:30px;
	  margin-bottom: 70px;
	  background-color: #75cc2c;
	  line-height:2;
	}
	.column-3 {
		
	  float: center;
	  width: 90%;
	  padding: 40px;
	  padding-left:5%;
	  padding-right: 5%;
	  height: auto;
	  margin:5%;
	  margin-right:5%;
	  margin-top: 70px;
	  margin-bottom: 70px;
	  background-color: #75cc2c;
	  line-height:2;
	}
</style>

	
<script type='text/javascript' src='jquery.js'></script>
<!--<script type='text/javascript' src='masonry.pkgd.min.js'></script>
<script type='text/javascript' src='jquery.collapsible.min.js'></script>
<script type='text/javascript' src='swiper.min.js'></script> -->
<script type='text/javascript' src='jquery.countdown.min.js'></script>
<!--<script type='text/javascript' src='circle-progress.min.js'></script>-->
<script type='text/javascript' src='jquery.countTo.min.js'></script>
<script type='text/javascript' src='custom.js'></script> 

<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
