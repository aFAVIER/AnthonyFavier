<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Mon cv">
	<meta name="keyword" content="cv anthony favier developpeur codeur">
	<title>Anthony FAVIER CV</title>
<!--font-->
	<link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
<!--Mon fichier css pour quelques modif-->
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<!--
	<div class="container">
		<header class="row text-center col-xs-show"><strong><span id="menu_hamburger">&#9776;</span></strong></header>
		<section id="header_name" class="row">
			<h1 class="text-center">Anthony FAVIER</h1>
			<h1 class="text-center">Developpeur Web</h1>
			<img class="center-block img-circle" src="img/profil.jpg">
		</section>
		<div class="row" id="bandeau_bas"></div>
	</div>
	-->
	<!-- éléments cachés pour jouer avec :target -->
	<span id="s1"></span>
	<span id="s2"></span>
	<span id="s3"></span>
	 
	<!-- Le gros conteneur qui va glisser -->
	<main id="wrap">
	 
		<!-- La navigation -->
		<ul id="nav">
			<li><a href="#s1">Accueuil</a></li>
			<li><a href="#s2">A propos de moi</a></li>
			<li><a href="#s3">Contact</a></li>
		</ul>
	 
		<!-- Le slide 1 -->
		<section id="slide1">
			<article class="slide_inside">
				<h1 class="text-center">Anthony FAVIER</h1>
				<h1 class="text-center">Developpeur Web</h1>
				<img class="center-block img-circle" id='photo_profil' src="img/profil.jpg" alt="photo_de_profil">
			</article> 	 	
		</section> 
	 
		<!-- Le slide 2 -->
		<section id="slide2">
			<article class="slide_inside">
				<!-- Les deux éléments en 1er plan -->
				<img src="img/guitareSVG.png" id="img1" alt="guitare">
				<img src="img/note.svg" id="img2" alt="note_musique">
				<div class="row">
					<div class="col-md-9">
						<h2>A propos de moi</h2>
						<h4>Lorem Salu bissame !</h4>
						<div class="">
							<ul id="nav_slide2" class="nav navbar-nav text-center">
								<li><a href=""><h5>Bio</h5></a></li>
								<li><a href=""><h5>Compétences</h5></a></li>
								<li><a href=""><h5>Parcours</h5></a></li>
								<li><a href=""><h5>Hobbies</h5></a></li>
							</ul>
						</div>
					</div>
				<!--base en forme de chat-->
		 			<figure id="tangram" class="col-md-3"> 
						<svg width="200" height='200' viewBox="0 0 200 200">
							<path id="triangle1" d='m73 180 v-60 l30 30Z '/>
							<path id="triangle2" d='m60 195 h43 v-43Z '/>
							<path id="triangle3" d='M71 163 v-43 l-21 21Z '/>
							<path id='carre' d='M65 124 l15 -15 l-15 -15 l-15 15Z'/>
							<path id="triangle4" d='M66 93 l15 15 v-28Z '/>
							<path id="triangle5" d='M64 93 l-15 15 v-28Z '/>
							<path id='trapeze' d='M104 195 v-20 l20 -20 v20Z'/>
						</svg>
					</figure>
				</div>
				<article>
					<!--carroussel (bio/competences/parcours/hobbies)-->
				</article>
			</article>	     	
		</section>
	 	
		<!-- Le slide 2 -->
		<section id="slide3">
			<article class="slide_inside row">	
				<div class="col-md-5">		
					<h2>Contact</h2><br>		
						<h4><strong>Courriel:</strong><a href=""> anthony.favier03@gmail.com</a></h4><br>
						<h4><strong>Tel:</strong> 06.10.26.39.81</h4><br>
						<h4><strong>anthony FAVIER</strong></h4>
						<h4>8 rue de l'étang</h4>
						<h4>03110 St Rémy-en-Rollat</h4>
				</div>
				<div class="col-md-7">
					<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44203.73524511744!2d3.3741122511065167!3d46.17596144350246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f12d0c3d9441d5%3A0x4093cafcbebbb70!2s03110+Saint-R%C3%A9my-en-Rollat!5e0!3m2!1sfr!2sfr!4v1488667404235" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</article>	 
			<form class="col-md-offset-3 col-md-6">
				<legend>Légende</legend>
			    <div class="form-group">
			      	<label for="texte"><h5>Nom et Prénom :</h5></label>
			      	<input id="text" type="text" class="form-control" placeholder="votre Nom"><br>
			      	<input id="text" type="text" class="form-control" placeholder="votre Prénom">
			    </div>
			    <div class="form-group">
			      	<label for="textarea"><h5>Texte :</h5> </label>
			      	<textarea id="textarea" type="textarea" class="form-control" placeholder="écrivez votre message ici ..."></textarea>
			    </div>
			    <button type="submit" class="btn btn-default">Envoyer</button>
			</form> 
		</section>
	</main>
	<!--<script type="text/javascript" src='js/jquery-3.1.1.slim.js'></script>-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/script.js'></script>
</body>
</html>