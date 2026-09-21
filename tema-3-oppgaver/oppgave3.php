<?php
/*
/*    Programmet legger inn 3 navn i et array
/*    Programmet skriver ut de 3 navnene
*/

$navn=array ("Maja","Mathea","Tuva","Gabi","Thea");

print ("Det første navnet er $navn[0] <br/>");

print ("Resten av navnene er <br/>");

for ($nr=0; $nr<count($navn); $nr++)
{
  print ("$navn[$nr] <br/>");
}
?>