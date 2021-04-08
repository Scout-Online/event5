<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Deac-event</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="bootstrap.min.css">

<!--  <link rel="stylesheet" href="fontawesome-all.min.css">

 <link rel="stylesheet" href="swiper.min.css"> -->

<link rel="stylesheet" href="style.css">
</head>
<body>
	<style>
	$success: #2ecc71;
$warning: #e67e22;
$danger: #e74c34;
$grey: #cccccc;

.alert {
	text-align: center;
  position: relative;
  border-radius: 5px;
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
    background-color: $color;
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
<h2>onze stream begint over:</h2>

</div>
<div class="countdown flex flex-wrap justify-content-between" data-date="2021/04/12 16:00">
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
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 ">
<div class="entry-footer">

<a title="Add to Calendar" class="addeventatc" data-id="Zg6229695" href="https://www.addevent.com/event/Zg6229695" target="_blank" rel="nofollow">Toevoegen aan kalender</a> <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
<a href="error.html" class="btn current">Deelnemen aan livestream</a>
<a href="https://drive.google.com/uc?id=1xu5_-Ive9p4zo6RRgtY-eYpTQE8Nn6U1&export=download" class="btn current">Verslag download</a>
</div>
</div>
</div>
</div>
</div>
<div class="column-2">
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
	background-color: #FEDE00;
}
#highlight td:hover{
background-color:#ffff66
}
</style>

<table id="customers">
  <tr>
    <th>Hoogstwaarschijnlijke Tijden</th>
    <th>Presentatie</th>
  </tr>
  <tr>
    <td>14:00-14:15</td>
    <td>Algemene introductie alle presentaties</td>
  </tr>
  <tr>
    <td>14:15-16:10</td>
    <td>Presentaties andere onderzoeken</td>
  </tr>
  <tr id="highlight">
    <td >16:10-16:15</td>
    <td >Introductie over ons en ons onderzoek</td>
  </tr>
  <tr id="highlight">
    <td>16:15-16:40</td>
    <td>Presentatie over waterstof</td>
  </tr>
  <tr id="highlight">
    <td>16:40-16:50</td>
    <td>Mogelijkheid tot vragen</td>
  </tr>
  <tr>
    <td id="highlight">16:35-16:45</td>
    <td>Afronding presesntatie</td>
  </tr>
  <tr>
    <td>16:45-18:00</td>
    <td>Andere presentaties</td>
  </tr>
</table>
	
	
<style type="text/css">
	* {
	  box-sizing: border-box;
	}
	h1 {color: black;}
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
	  background-color: #FEDE00;
	  line-height:2;
	}
</style>

	
<script type='text/javascript' src='jquery.js'></script>
<!--<script type='text/javascript' src='masonry.pkgd.min.js'></script>
<script type='text/javascript' src='jquery.collapsible.min.js'></script>
<script type='text/javascript' src='swiper.min.js'></script> --> 
<script type='text/javascript' src='jquery.countdown.min.js'></script>
<!-- <script type='text/javascript' src='circle-progress.min.js'></script>
<script type='text/javascript' src='jquery.countTo.min.js'></script>
<script type='text/javascript' src='custom.js'></script> 

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
