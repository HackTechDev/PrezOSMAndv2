<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>OsmAnd — Cartes de voyage et navigation hors-ligne</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="dist/reset.css">
		<link rel="stylesheet" href="dist/reveal.css">
		<link rel="stylesheet" href="dist/theme/sky.css" id="theme">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="plugin/highlight/monokai.css">
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
	    <div class="slides">		
        <?php

        include("conf.php");

        include("couverture.php");

        include("sommaire1.php"); 
        include("sommaire2.php"); 

        include("presentation.php"); 

        include("openstreetmap.php"); 
        include("openstreetmap_france.php"); 

        include("version.php"); 

        include("fonctionnalite.php"); 

        include("affichage.php"); 

        include("donnees.php"); 

        include("securite.php"); 

        include("pietonroue.php"); 

       include("geographie.php"); 


        include("installation.php"); 
        include("installation1.php"); 
        include("installation2.php"); 

        include("configuration.php"); 

        include("1ervue.php"); 
        include("1ervue1.php"); 



        include("utilisation.php"); 


        include("liens.php"); 

        include("ilard.php");    

        include("zeend.php"); 

        ?>
        
			</div>

		</div>

		<script src="dist/reveal.js"></script>
		<script src="plugin/zoom/zoom.js"></script>
		<script src="plugin/notes/notes.js"></script>
		<script src="plugin/search/search.js"></script>
		<script src="plugin/markdown/markdown.js"></script>
		<script src="plugin/highlight/highlight.js"></script>
		<script>

			// Also available as an ES module, see:
			// https://revealjs.com/initialization/
			Reveal.initialize({
				controls: true,
				progress: true,
				center: true,
				hash: true,

				// Learn about plugins: https://revealjs.com/plugins/
				plugins: [ RevealZoom, RevealNotes, RevealSearch, RevealMarkdown, RevealHighlight ]
			});

// Slide every five seconds
Reveal.initialize({
  autoSlide: 5000,
  loop: true
});
		</script>

	</body>
</html>
