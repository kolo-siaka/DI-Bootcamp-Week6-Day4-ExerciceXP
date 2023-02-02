<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Exercice XP</title>
</head>
<body>
	        <style> h3{text-align:center; }
</style>
	<!--Exercice 1 -->
	<h3>Exercice 1</h3>
	<?php 
        $cars = array('Dastun', 'Honda', 'BMW');
        foreach ($cars as $value) {
        	echo $value . '<br>';
        }

	 ?>
	 <!--Exercice 2 -->
	
	 <hr>
	  <h3>Exercice 2</h3>
	 <?php 

      $mois = array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
      print_r($mois).'<br>';
      $retirer = "Janvier";
      echo '<br> Le Mois a retirer est : '.$retirer .' <br>';
       unset($mois[array_search($retirer, $mois)]);

      print_r($mois);


	  ?>
	  <!--Exercice 3 -->
	  
	 <hr>
	 <h3>Exercice 3</h3>
	 <?php 
        
        $renverser = 'cette phrase sera inverser';
        echo $renverser . '<br>';
        echo strrev($renverser);

	  ?>
	  <hr>
	 <h3>Exercice 4</h3>
	 <?php 
        $tab1 =array(0,1,2,3,4,5,6 );
        $tab2 =array(10,44);
        $intersect = array_intersect($tab1,$tab2);
        if (count($intersect) == 0) {
        	echo 'ses tableaux sont disjoint .';
        }else{
        	print_r($intersect);
        }
        
	  ?>

</body>
</html>