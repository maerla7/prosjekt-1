<?php

$tekst="Maja;mj;it og ledelse;noobie";

$del=explode (";", $tekst);

$fornavn=$del[0];
$kallenavn=$del[1];
$studie=$del[2];
$nivå=$del[3];

print ("Hele settningen er: $tekst <br/> <br/>");

print ("Fornavnet er: $fornavn <br/>");
print ("Kallenavnet til $fornavn er: $kallenavn <br/>");
print ("Studiet $kallenavn er: $studie <br/>");
print ("Nivået på studiet til $kallenavn er: $nivå <br/>");

?>