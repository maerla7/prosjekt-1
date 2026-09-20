<?php
$tall1=$_POST ["tall1"];
$tall2=$_POST ["tall2"];
 if ($tall1==$tall2)
  {
print ("Tallene er like");
}
 
else if ($tall1!=$tall2)
  {print ("Tallene er ikke like");}

else if ($tall1 > $tall2)
  {print ("Tall1 er st$oslash;re enn tall2");}

else if ($tall1 < $tall2)
{print ("Tall1 er mindre enn tall2");}

else 
  {print ("Det er ikke mulig $aring; avgj$oslash;re om tallene er like eller ikke:(");}

?>