
<?php 
  
  // Defining a multidimensional array 
  $favorites = array( 
      array( 
          "name" => "Dave Punk", 
          "mob" => "5689741523", 
          "email" => "davepunk@gmail.com", 
      ), 
      array( 
          "name" => "Monty Smith", 
          "mob" => "2584369721", 
          "email" => "montysmith@gmail.com", 
      ), 
      array( 
          "name" => "John Flinch", 
          "mob" => "9875147536", 
          "email" => "johnflinch@gmail.com", 
      ), 
      array(
          "name" => "Angelika Kędzierska",
          "mob" => "793276781",
          "email" => "kedzierska@o2.pl",
      ));
      // Accessing elements 
echo "Dave Punk email-id is: " . $favorites[0]["email"], "\n"; 
echo "John Flinch mobile number is: " . $favorites[1]["mob"]; 
echo "Angelika Kędzierska mobile number is:" .$favorites[3]["mob"];

      ?> 