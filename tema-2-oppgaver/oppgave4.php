<?php  /* Eksempel 4 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*      og et svar på spørsmålet "Hvor gammel er du ?"
/*    Programmet sjekker hva som er svart på spørsmålene og skriver ut en passende melding*/

$gift=isset ($_POST) ["gift"] ? strotolower ($_POST["gift"]) : "";
$barn=isset ($_POST) ["barn"] ? strotolower ($_POST["barn"]) : "";

if (!$gift or !$barn)
  {print ("Du har ikke svart p&aring; begge sp&oslash;rsm&aring;lene");}

else if ($gift == "ja" && $barn == "ja")
  {print ("Gratulerer, du har barn og er gift!");}

else if ($gift == "nei" && $barn == "nei")
  {print ("Uffda, du har ingen barn og er ikke gift:(");}

else if ($gift == "nei" && $barn == "ja" )
  {print ("Jaja, du har i det minste barn:)");}

else if ($gift == "ja" && $barn == "nei")
{print ("Jaja, du er i det minste gift:)");}

else 
  {print ("Ingen av sp&oslash;rsm&aring;lene har gyldig svar. Pr&oslash;v igjen!");}



?>