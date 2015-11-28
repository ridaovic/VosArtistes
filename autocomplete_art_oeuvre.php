<?php 

require 'vendor/autoload.php';
include('search.php');

$x=requete('{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":100,"sort":[],"facets":{}}');

 $results1=namesArtist($x);
$results2=body_titles($x);
 $results = array_merge($results1, $results2);

 $q=$_GET["term"];

$i=0;
foreach( $results as $value){

				
			if (stripos($value, $q) === 1) {
																										
            $row['id']=$i;
            $row['value']=$value;
            $row_tab[]=$row;
            $i++;	}

}
echo json_encode($row_tab);























?>