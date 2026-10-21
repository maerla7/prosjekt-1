<h3>Oppgave 1</h3>

    <form
      method="post"
      action="tema-5-oppgaver/oppgave1.php"
      id="oppgave1"
      name="oppgave1"
    >
      Skriv inn Studiekode og studiumnavn <br />
      <input type="text" id="studiumkode" name="studiumkode" />
      <input type="text" id="studiumnavn" name="studiumnavn" /><br />

      Skriv inn emnekode, emnenavn og studiumkode <br />
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

  

    include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
  
      $sqlSetning="SELECT * FROM studium WHERE studiumkode='$studiumkode';";
      $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
      $antallRader=mysqli_num_rows($sqlResultat);

      if ($antallRader!=0) /* studium er registrert fra før */
        {
          print ("Studiumkode og navn er registrert fra f&oslashr");
        }

        else 
          {
            $sqlSetning="INSERT INTO studium VALUES('$studiumkode', '$studiumnavn');";
            mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
              /* SQL-setning sendt til database-serveren */

                print ("F&oslash;lgende studium er n&aring; registrert: $studiumkode $studiumnavn");     
              }

 $sqlSetning="SELECT * FROM emne WHERE emnekode='$emnekode';";
      $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
      $antallRader=mysqli_num_rows($sqlResultat);

      if ($antallRader!=0) /* studium er registrert fra før */
        {
          print ("Emnekode er registrert fra f&oslashr");
        }

        else 
          {
            $sqlSetning="INSERT INTO emne VALUES('$emnekode', '$emnenavn', '$studiumkode');";
            mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
              /* SQL-setning sendt til database-serveren */

                print ("F&oslash;lgende emne er n&aring; registrert: $emnekode $emnenavn");     
              }

      }
?>