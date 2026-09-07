<?php /* Oppgave 3 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/*    Programmet sjekker om det er svart j eller n på spørsmålet og skriver ut en passende melding
*/
$svar=$_POST ["svar"];

if (!$svar)
  {print ("Du har ikke svart p&aring; sp&oslash;rsm&aring;let");}
else if ($svar == "ja" or "JA" or "Ja")

  {print ("Gratulerer! Du er student:)");}

else if ($svar == "nei" or "NEI" or "Nei")
  {print ("Taper, du er ikke student!!");}

else 
  {print ("Du har verken svar ja eller nei p&aring om du er studnet:(");}

?>