<?php /* Oppgave 2 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*    Programmet sjekker om det er svart j eller n på spørsmålet og skriver ut en passende melding
*/
$svar=$_POST ["svar"];

if (!$svar)
  {print ("Du har ikke svart p&aring; sp&oslash;rsm&aring;let");}

else if ($svar == "ja")

{print ("Gratulerer! Du er student:)");}

else if ($svar == "nei")
  {print ("Taper! Du er ikke student!!");}
else 
  {print ("Du har verken svart ja eller nei p&aring om du er student");}
?>