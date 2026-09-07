<?php /* Oppgave 3 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*    Programmet sjekker om det er svart j eller n på spørsmålet og skriver ut en passende melding
*/
$svar=$_POST ["svar"];


if (!$svar)
  {print ("Du har ikke svart p&aring; sp&oslash;rsm&aring;let");}

else if ($svar == "ja" or $svar == "JA" or $svar == "Ja")
  {print ("Gratulerer! Du er student:)");}

else if ($svar == "nei" or $svar == "NEI" or $svar == "Nei")
  {print ("Taper, du er ikke student!!");}

else 
  {print ("Du har verken svart ja eller nei p&aring om du er student:( Du har svart $svar ?");}

?>