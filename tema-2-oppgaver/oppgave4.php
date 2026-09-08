<?php  /* Eksempel 4 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*      og et svar på spørsmålet "Hvor gammel er du ?"
/*    Programmet sjekker hva som er svart på spørsmålene og skriver ut en passende melding*/

$svarg=$_POST ["gift"];
$svarb=$_POST ["barn"];

if (!$gift or !$barn)
  {print ("Du har ikke svart p&aring; begge sp&oslash;rsm&aring;lene");}

else if ($gift == "ja" or $gift =="JA" or $gift == "Ja" and $barn == "ja" or $barn == "JA" or $barn == "Ja")
  {print ("Gratulerer, Du har barn, og er gift!");}

else if ($gift == "nei" or $gift =="NEI" or $gift == "Nei" and $barn == "nei" or $barn == "NEI" or $barn == "Nei")
  {print ("Uffda, du har ingen barn og er ikke gift:(");}

else if ($gift == "nei" or $gift =="NEI" or $gift == "Nei" and $barn == "ja" or $barn == "JA" or $barn == "Ja")
  {print ("Jaja, du har i det minste barn:)");}

else if ($gift == "ja" or $gift =="JA" or $gift == "Ja" and $barn == "nei" or $barn == "NEI" or $barn == "Nei")
{print ("Jaja, du er i det minste gift:)");}

else 
  {print ("Ingen av sp&oslash;rsm&aring;lene har gyldig svar. Pr&oslash;v igjen!");}



?>