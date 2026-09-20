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

  else if ($tall1<$tall2 && $tall3)
    {
      print ("Tall 1 er mindre enn tall 2 og tall 3");
    } 
    else if ($tall1>$tall2 && $tall3)
      {
        print ("Tall 1 er større enn tall 2 og tall 3");
      }
    else if ($tall2<$tall1 && $tall3)
      {
        print ("Tall 2 er mindre enn tall 1 og tall 3");
      }
      else if ($tall2>$tall1 && $tall3)
        {
          print ("Tall 2 er større enn tall 1 og tall 3");
        }

  else 
    {
      print ("Kan ikke utføre fordi du kødder med boksene, dust..");
    }
    {
       echo sammenlign($tall1, $tall2, "Tall 1", "Tall 2") . "<br>";
        echo sammenlign($tall1, $tall3, "Tall 1", "Tall 3") . "<br>";
        echo sammenlign($tall2, $tall3, "Tall 2", "Tall 3") . "<br>";
    }
?>