<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>P.O.O.</title>
	<link rel="stylesheet"
	      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="../agc7/assets/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="../assets/css/mdb.min.css">
	<link rel="stylesheet" href="../assets/css/combined.css">
</head>

<body>
<div class="navLi mtnav">
	<a href="/">Do</a> |
	<a href="/agc7">AC7</a> | P.O.O.
</div>
<hr>
<div class="maingc7 mainPoo">

	<div class="container-fluid">
		<br>

		<div class="row">

			<div class="col">

				<form action="index.php" method="post">

					<select name='choix' onchange='this.form.submit()' class="mdb-select" id="choix">
						<option disabled>oOo</option>
						<option>personne</option>
						<option>vehicule</option>
					</select>
					<label>Choix de la fonction POO</label>

				</form>


				<div id="sujet"></div>

			</div>


			<div class="col">
				<?php
				var_dump( $_POST );
				if ( count( $_POST ) ) {
					echo $_POST[ 'choix' ];
				}
				?>
			</div>

		</div>
	</div>
	<?php


	// Simple classe
	//include 'personne.php';

	// Classe Mère & classe fille
	//include 'vehicule.php';

	// Classe Mère & classe fille /|\ : Bug exprès en fin de fichier
	//include 'kid.php';


	// Méthodes magiques __call()
	// include 'manchot.php';

	// Méthodes magiques __clone()
	//include 'point.php';

	// Méthodes magiques __sleep() & __wakeup()
	// include 'dormeur.php';

	// Classes abstraites et finales
	//  include 'humains.php';

	// Iterator (Interface)
	// include 'iterator.php';

	// OneTrait (Trait)
	// include '../class/OneTrait.php';

	echo str_repeat( '<br>&nbsp;', 5 );

	?>
</div>

<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../assets/js/popper.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../assets/js/mdb.min.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function () {
		// Animations init
		new WOW().init();

		var requestURL ='poo.json';

		var content = '<hr>Oki2';

		$('#sujet').addClass('cr').append(requestURL).append(content);
		$('#sujet').removeClass('cr').html(requestURL);


		$('.mdb-select').material_select('destroy');
		$('.mdb-select').material_select();

		//$('form').addClass('cr'); // Cadre Rouge

		$(".select-dropdown").click();
		$(".select-dropdown").click();

		$(".select-dropdown").mouseover(function () {
			//console.log('enter');
			$("ul").css('display', 'block');
			$("ul").css('opacity', 1);
		});
		$(".select-dropdown").mouseout(function () {
			//console.log('out');
			$("ul").css('display', 'none');
		});

	});

</script>
</body>

</html>
