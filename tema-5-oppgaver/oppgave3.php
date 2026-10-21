<?php
?>
<h3>Oppgave 3</h3>

    <form
      method="post"
      action="tema-5-oppgaver/oppgave3.php"
      id="oppgave3"
      name="oppgave3"
    >
      Skriv inn Studiekode og studiumnavn for &aring; endre <br />
      <input type="text" id="studiumkode" name="studiumkode" />
      <input type="text" id="studiumnavn" name="studiumnavn" /><br />

      Skriv inn emnekode, emnenavn og studiumkode for &aring; endre <br />
      <input type="text" id="emnekode" name="emnekode" /> 
      <input type="text" id="emnenavn" name="emnenavn" />
      <input type="text" id="studiumkode" name="studiumkode" /> <br />

      <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
      <br />
      <input type="reset" value="Nullstill" id="nullstill" name="nullstill" />
      <br />

      <br />
    </form>

<?php 

if (isset($_POST ["fortsett"]))
  {
    $studiumkode=$_POST ["studiumkode"];
    $studiumnavn=$_POST ["studiumnavn"];

    $emnekode=$_POST ["emnekode"];
    $emnenavn=$_POST ["emnenavn"];
    $studiumkode=$_POST ["studiumkode"];

    include("db-tilkobling.php");

    $sqlSetning="SELECT * FROM emne WHERE emnekode='$emnekode';";
    $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    $antallRader=mysqli_num_Rows($sqlResultat);

    if ($antallRader!=1)  /* det er ikke registrert*/
    {
      print ("Studium eller emne finnes ikke");
    }

else 
  {
    $sqlSetning="UPDATE emne SET emnekode='emnekode' WERE emnenavn='emnenavn';";
    mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; endre data i databasen");
                /* SQL-setning sendt til database-serveren */

                print ("Emne med emnekode $emnekode er n&aring; endret");
  }
  }

?>
