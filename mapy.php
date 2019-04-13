<?php 

// One way to create an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any", 
				"Ram"=>"Rani", "Salim"=>"Sara", 
                "Raghav"=>"Ravina","Angelika"=>"Angela"); 
                
$name_one["Angelika"] = "Kędzierska" ;

foreach ($name_one as $val => $val_value){ 
    echo "męzczyzna to ".$val."kobieta to ".$val_value."\n";
}
$round = count($name_one);
echo "liczba elementow w liscie to $round";
?> 
