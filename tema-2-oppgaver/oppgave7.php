<?php
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
$tall3=$_POST ["tall3"];
{
  print ("Tall 1 er $tall1 <br> Tall 2 er $tall2 <br> Tall 3 er $tall3 <br>");
}

if ($tall1==$tall2 && $tall3)
  {
    print ("Alle tallene er like");
  }

  else 
    {
      print ("Kan ikke utføre fordi du kødder med boksene, dust..");
    }
?>