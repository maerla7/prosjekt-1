<?php
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
 

if ($tall1>$tall2)
  {
    print ("Tall 1 er $tall1 og tall 2 er $tall2. Tall1 er større enn tall2");
  }

else if ($tall1<$tall2)
{
  print ("Tall 1 er $tall1 og tall 2 er $tall2. Tall1 er mindre enn tall2");
  print ("Tall 2 er $tall2");
  print ("Tall 1 er mindre enn tall 2");
}

else 
  {
    print ("Det er ikke mulig å avgjøre om tallene er like eller ikke:(");
  }

?>