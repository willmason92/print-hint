<?php

  include_once('/home/content/80/11356380/html/3d/cloud/models/main/index.php');

  //$resp = searchComp('3D');
  //print_r($resp);
  
  function searchComp($searchTerm){


  	$searchResults = dbMassData("SELECT name, homepage, overview FROM companies WHERE name LIKE '%$searchTerm%' OR category LIKE '%$searchTerm%'");

    //$results = dbMassData("SELECT * FROM products WHERE name= '$term'")
    return $searchResults;
  }
?>