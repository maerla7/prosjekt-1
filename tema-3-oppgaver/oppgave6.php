<?php

$tall=$_POST ["tall"];

if ($tall > 0)
  {
    $i = 1;

    while ($i <= $tall) 
      {
        echo $i . " ";
        $i++;
      }
  }

  else 
    {
      echo "Skriv inn et positivt tall uten decimaler";
    } 
?>