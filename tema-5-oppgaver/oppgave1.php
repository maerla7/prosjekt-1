<?php 
  if (isset($_POST ["fortsett"]))
    {
      $studiumkode=$_POST ["studiumkode"];
      $studiumnavn=$_POST ["studiumnavn"];
  

    include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
  
      $sqlSetning="SELECT * FROM studium WHERE studiumkode='$studiumkode';";
      $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
      $antallRader=mysqli_num_rows($sqlResultat);

      if ($antallRader!=0) /* studium er registrert fra før */
        {
          print ("Studiumkoden er registrert fra f&slashr");
        }

        else 
          {
            $sqlSetning="INSERT INTO studium VALUES('$studiumkode', '$studiumnavn');";
            mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
              /* SQL-setning sendt til database-serveren */

                print ("F&oslash;lgende studium er n&aring; registrert: $studiumkode $studiumnavn");     
              }
      }
?>