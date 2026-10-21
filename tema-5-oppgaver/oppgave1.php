<?php 
  if (isset($_POST ["fortsett"]))
    {
      $studiumkode=$_POST ["studiumkode"];
      $studiumnavn=$_POST ["studiumnavn"];

      $emnekode=$_POST ["emnekode"];
      $emnenavn=$_POST ["emnenavn"];
  

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