<?php namespace Php;

include 'include/listeFiltres.php';

$txt    = '<h1>Une chaîne decaractères</</h1>';
$chNett = filter_var( $txt, FILTER_SANITIZE_STRING );
// <=> $chNettAvecId = filter_var( $txt, 513 );
echo '<code>filter_var( $txt, FILTER_SANITIZE_STRING )</code> ou <code>filter_var( $txt, 513 )</code> :';
var_dump( '$txt: ' . $txt, '=>', $chNett );
echo '<hr>';

echo '<h3>Ex.: Vérification de nombre si entier ou décimal :</h3><br>';
$t1 = 'Numéro: 123';
$t2 = '0';
$t3 = '0123';
$t4 = 'Numéro: 1.23';

// On filtre
//$ent1 ='ab';
$ent1 = filter_var( $t1, FILTER_SANITIZE_NUMBER_INT );
$ent2 = filter_var( $t2, 519 );
$ent3 = filter_var( $t3, 519 );
$ent4 = filter_var( $t4, 520 );

// Résultats
echo $ent1 . '<br>' . $ent2 . '<br>' . $ent3 . '<br>' . $ent4 . '<br>';

// On teste
echo '$ent1 contient un nbre entier: '
     . ( ( filter_var( $ent1, 257 ) ? 'VRAI' : 'FAUX' ) ) . '<br>';
echo '$ent3 contient un nbre entier: '
     . ( ( filter_var( $ent3, 257 ) ? 'VRAI' : 'FAUX' ) ) . '<br>';
echo '$ent4 contient un nbre décimal: '
     . ( ( filter_var( $ent3, 259 ) ? 'VRAI' : 'FAUX' ) ) . '<br>';
echo '<hr>';


$n    = 150.5;
$mini = 100;
$maxi = 200;

$vf = ( filter_var( $n, 257, [
	"options" =>
		[
			"min_range" => $mini,
			"max_range" => $maxi
		]
] ) ) ? 'VRAI' : 'FAUX';

echo '<h3>Ex.: Même vérification que précédemment,<br>
mais avec en plus contrôle si nombre dans un interval donné :</h3><br>
Ex.: ' . $n . ' : Entier compris dans [' . $mini . ', ' . $maxi . '] ? ' . $vf;
