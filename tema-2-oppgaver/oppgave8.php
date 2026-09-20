<!doctype html>
<html>
  <head>
    <title>Oppgave 1</title>
  </head>
  <body>
    <h3>Oppgave 1</h3>

    <form method="post" action="" id="oppgave" name="oppgave">
      Hva er 3 ganger 3? <br/>
      <input type="text" id="svar" name="svar" required />
      <br />
      <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
      <input type="reset" value="Nullstill" id="nullstill" name="nullstill" />
      <br />
    </form>
  </body>
</html>

<?php  /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
*/
if (isset($_POST["fortsett"]))
  {
$svar=$_POST ["svar"];

if ($svar == 9)
  {print ("Riktig! <br> 3 ganger 3 er 9 ");}

else

  {print ("Feil. <br> 3 ganger 3 er ikke $svar. <br> 3 ganger 3 er 9.");}
  }
?>