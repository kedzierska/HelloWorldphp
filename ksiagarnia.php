<?php
require("book.php");


$maths = new Book("Mróz","Pitagoras");
$chemistry = new Book("Jasnoch","Chemia cz.2");
$physics = new Book("Siecla","Psychologia");
echo $physics-> title."<br>";
echo $maths -> author;

?>