<?php
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];

if ($tall3 == 1)
  {$sum=$tall1+$tall2;
  
    print ("tall1 er $tall1 og tall2 er $tall2. Hvis vi plusser tall1 med $tall2 får vi $sum");
  }  

else if ($tall3 == 2)
 {
  $sum=$tall1-$tall2;
    print ("tall1 er $tall1 og tall2 er $tall2. Hvis vi trekker fra $tall2 fra $tall1 får vi $sum");
 } 

else if ($tall3==3)
  {
    $sum=$tall1*$tall2;
  print ("tall1 er $tall1 og tall2 er $tall2. Hvis vi ganger $tall1 med $tall2 får vi $sum");
  }

  else if ($tall3==4)
    {
      $sum=$tall1/$tall2;
      print ("tall1 er $tall1 og tall2 er $tall2. Hvis vi deler $tal1 med $tall2 får vi $sum");
    }

    else 
      {
        print ("Du har ikke skrevet noen tall?");
      }
?>