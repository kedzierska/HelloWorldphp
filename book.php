<?php
class Book {
    var $title;
    var $price;
    var $author;
    function __construct($title,$author){
        $this->title = $title;
        $this->author = $author;
    } 
    function setPrice($par){
        $this->price =$par;
    }
    function getPrice(){
        return $this->price;
    }
}

$maths = new Book("Mróz","Pitagoras");
$chemistry = new Book("Jasnoch","Chemia cz.2");
$physics = new Book("Siecla","Psychologia");

?>