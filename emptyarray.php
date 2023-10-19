<?php
   // declare an empty array
   $phones = array();
   
   // at some point an error is generated, and is to be stored
   
   $phones[] = "Matarola Raiser";
   
   // later still
   
   $phones[] = "Nuukeya 0001";
   
   // to test if there have been any inputs in the array
   
   if (empty($phones)) {
     echo "No phones added";
   } else {
     echo "There are phones in the array.";
   }
?>