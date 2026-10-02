<?php
/*
/*    Programmet skriver ut tallene fra 1 til 10 på hver sin linje
/*    Eksempelet viser bruk av while-setning
*/

$tall=1;

for ($tall = 1; $tall <= 10; $tall++)

  {
    echo "$tall har kvadratet " . ($tall*$tall) . "<br>";
  }

  /*
startverdi: $tall=1 
betingelse: $tall<=10
økning: $tall++ (dette er det samme som $tall=$tall+1)
*/

?>