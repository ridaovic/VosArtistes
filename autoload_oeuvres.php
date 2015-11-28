<?php
include('search.php'); //include config file

if($_POST)
{
	//sanitize post value
	$group_number = filter_var($_POST["group_no"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	
	//throw HTTP error if group number is not valid
	if(!is_numeric($group_number)){
		header('HTTP/1.1 500 Invalid number!');
		exit();
	}
	
	//get current starting point of records
	$items_per_group = 2;
	$position = ($group_number * $items_per_group);





    $result = requete('{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.parentUrl","query":"tendance"}}],"must_not":[],"should":[{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":'.$position.',"size":'.$items_per_group.',"sort":[],"facets":{}}');
    for($i=0; $i<totale($result) ; $i++ ){
        $imgs = images($result,$i);
        $p = pubData($result,$i);
        if(preg_match('`Inconnu`i', $p[0])) $a=body_title($result,$i);
        else $a=$p[0];
        echo '<div class="oeuvres">';
        echo '<img src='.$imgs[count($imgs)-1].'>';
        echo '<div class="oeuvres_detail">';
        echo '<div id="oeuvres_detail_title" class="oeuvres_titre"><span>'.$a.'</span><br></div>';
        echo '<div id="oeuvres_detail_img" class="oeuvres_servol"><span><a href="oeuvre.php?artiste='.$p[0].'&;oeuvre='.ID($result,$i).'"><img src="images/survol2.png"></a></span></div>';
        echo '</div>';
        echo '</div>';
    }

}
?>

