<?php
include('settings_t.php');
$cap=$_GET['cap'];

$indirizzo ="https://docs.google.com/spreadsheets/d/1ex1LkymxjynC1kllGJZcQbNQJs3-MDWt63A6aHmGsaw/pub?gid=1033778007&single=true&output=csv";

$inizio=1;
$homepage ="";

  $urlgd  ="https://spreadsheets.google.com/tq?tqx=out:csv&tq=SELECT%20%2A%20WHERE%20J%20LIKE%20%27%25";
  $urlgd .=$cap;
  $urlgd .="%25%27&key=1ex1LkymxjynC1kllGJZcQbNQJs3-MDWt63A6aHmGsaw&gid=876856985";
//echo $urlgd;
	$csv = array_map('str_getcsv',file($urlgd));
//var_dump($csv[1][0]);
  $count = 0;
	foreach($csv as $data=>$csv1){
		$count = $count+1;
	}
  //echo $count;
//  $count=3;
	for ($i=$inizio;$i<$count;$i++){

		$homepage .="\n";
		$homepage .="Codice: ".$csv[$i][0]."\n";
		$homepage .="Cognome: ".$csv[$i][1]."\n";
		$homepage .="Nome: ".$csv[$i][2]."\n";
		$homepage .="Indirizzo studio: ".$csv[$i][14]."\n";
		$homepage .="Comune: ".$csv[$i][16];
		$homepage .="Incarico: ".$csv[$i][4]."\n";
		$homepage .="Studio aperto da: ".$csv[$i][13]."\n";
		/*
		$homepage .="Email: ".$csv[$i][3]."\n";
		$homepage .="Web: ".$csv[$i][4]."\n";
		$homepage .="Ticket: ".$csv[$i][7]."\n";
		$homepage .="Descrizione: ".$csv[$i][9]."\n";
		$homepage .="Inizio: ".$csv[$i][14]."\n";
		$homepage .="Fine: ".$csv[$i][15]."\n";
		$homepage .="Foto: ".$csv[$i][16]."\n";
	*/
	  $homepage .="____________\n";

}
echo $homepage;


?>
