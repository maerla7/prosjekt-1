<?php

include("db-tilkobling.php");

$sqlSetning="SELECT * FROM studium;";

$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat); /* antall rader i resultatet beregnet */

print ("<h3>Registrerte studier</h3>");
print ("<table border=1>");
print ("<tr> <th align=left>studiumkode</th> <th align=left>studiumnavn</th></tr>");

for ($r=1;$r<=$antallRader;$r++)
  {
    $rad=mysqli_fetch_array($sqlResultat); 
    $studiumkode=$rad[0];
    $studiumnavn=$rad[1];

    print ("<tr> <td> $studiumkode </td> <td> $studiumnavn</td></tr>");
  }
print ("</table>");

?>