<?php
  require("../../include/utility.php");
  $dbuser="cgordonweb";
  $dbname="csc2210_cgordon_db";
  $dbpass=")&#@$($";
  $dbconn=connectToDB($dbname,$dbuser,$dbpass);
  $query="select count from countProject where id=1;"
  $result=$dbconn->query($query);
  if($result) {
    echo $result;
  } else {
    echo "Error (or 0, take your pick)";
  }
?>
