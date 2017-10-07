<?php

$zipcode = "-1245  ";

$nzip = strlen(trim($zipcode));

// FIXME: only trim the space, need to remove other characters for other characters
if( $nzip != 5 ) {
  print "Please enter zip code that is 5 characters long\n";
  print "This zipcode is $nzip digits long\n";
}
else {
  print "This zip code is OK: $zipcode\n";
}

?>
