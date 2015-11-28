<?php
//    Install composer. curl -s http://getcomposer.org/installer | php


//    Create composer.json containing:

  
//{
//    "require": {
//        "elasticsearch/elasticsearch": "~1.0"
//    }
//}

  
//  Run ./composer.phar install
  
//  Keep up-to-date: ./composer.phar update

//use Kir\XML\XPath\DomXPath;
//use Kir\Streams\Impl\StringStream;

include('functions.php');



require 'vendor/autoload.php';


function requete($q){
	$paramsH['hosts'] = array (
    '5.135.106.169:9200'
	);

	$client = new Elasticsearch\Client($paramsH);


	// Requete JSON Globale
	$json = $q;
	//'{"query":{"bool":{"must":[{"query_string":{"default_field":"oeuvre.pubDate","query":"alaoui"}}],"must_not":[],"should":[{"query_string":{"default_field":"oeuvre.pubDate","query":"Figuratif"}},{"query_string":{"default_field":"_all","query":"tendance"}}]}},"from":0,"size":10,"sort":[],"facets":{}}';
	//$json = '{"query":{"bool":{"must":[{"match_all":{}}],"must_not":[],"should":[]}},"from":0,"size":5000,"sort":[],"facets":{}}';

	$params['body']  = $json;
	$params['type']  = 'oeuvre';
	$params['index']  = 'arts';

	return $client->search($params);
}


function requete2($id){
    $paramsH['hosts'] = array (
    '5.135.106.169:9200'
    );

    $client = new Elasticsearch\Client($paramsH);

    $params['type']  = 'oeuvre';
    $params['index']  = 'arts';
    $params['id']  = $id;

    return $client->get($params);
}


function ID($r,$i){
    $id = $r['hits']['hits'][$i]['_id'];
    return $id;
}

function totale($r){
    return count($r['hits']['hits']);
}

function titre($r,$i){
	return $r['hits']['hits'][$i]['_source']['title'];
}

function titre_oeuvres($r){
     $pubd = array();
    foreach($r['hits']['hits'] as $ev)
        array_push($pubd,$ev['_source']['title']);
    return $pubd;
}

function images($r,$i){
    $img  = $r['hits']['hits'][$i]['_source']['images'];
    $imgs = explode(" ", $img);
    return $imgs;
}

function pubData($r,$i){
    $pubd = array();
    array_push($pubd,between('Artiste :','Matériaux :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Matériaux :','Support :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Support :','Format :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Format :','Style :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Style :','Prix :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,between('Conversion :','Référence :',$r['hits']['hits'][$i]['_source']['pubDate']));
    array_push($pubd,after ('Référence :',$r['hits']['hits'][$i]['_source']['pubDate']));
    return $pubd;
}

function namesArtist($r){
    
    $pubd = array();
    foreach($r['hits']['hits'] as $ev)
        array_push($pubd,between('Artiste :','Matériaux :',$ev['_source']['pubDate']));
    return $pubd;
}

function body_div($r,$i){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($r['hits']['hits'][$i]['_source']['body']);
    libxml_clear_errors();            

    $xpath = new DOMXpath($doc);                  
    foreach($xpath->query('//div[@class="tableau-description-node"]') as $div){
    }
    return $div->textContent;
}

function body_title($r,$i){
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($r['hits']['hits'][$i]['_source']['body']);
    libxml_clear_errors();            

    $xpath = new DOMXpath($doc);                  
    foreach($xpath->query('//h1[@class="title"]') as $div){
    }
    return $div->textContent;
}

function body_titles($r){
    $var = array();
    foreach ($r['hits']['hits'] as $value) {
        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($value['_source']['body']);
        libxml_clear_errors();            

        $xpath = new DOMXpath($doc);                  
        foreach($xpath->query('//h1[@class="title"]') as $div){
            array_push($var,$div->textContent);
        } 
    }
  
    return $var;
}

function score($r,$i){
    return $r['hits']['hits'][$i]['_score'];
}
                                           

?>
