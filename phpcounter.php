<?php
/*
   Name: Connor And Johnathan
   Date: 4/13/2016
   Class: 2210
   Comment:
   Path: ~public_html/csc2210/practice/countProject/countProject/phpcount.php
*/

   require("../../include/utility.php");
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
      logMsg("Starting count");
      $id    = cleaninput($_POST["id"]);
      $count = cleaninput($_POST["count"]);
      logMsg("After Clean Input");
      
      // Increment
      $increment = 1;

      // Connect To Database
      $dbname="csc2210_cgordon_db";
      $dbuser="cgordonweb";
      $dbpass=")&#@$($"
      $dbconn = connectToDB($dbname,$dbuser,$dbpass);

      // Add to Database
      logMsg("SELECTING count from Database (COUNT = ".$count);
      $query = "SELECT count FROM countProject WHERE count='$count';";
      
      $result = $dbconn->query($query);
      logMsg($query);
      logMsg("After Selecting From Database");
   
      if(!$result)
         logMsg("Select Unsuccessful");
      else
         logMsg("Select Successful");

      $result += $increment;
      logMsg($result);
      logMsg("After Increment Count = ".$count);

      $query = "UPDATE count FROM countProject;";
      $result = $dbconn->query($query);
      logMsg($query);

      if(!$result)
        logMsg("Update Failed");
      else
        logMsg("Update Successful"); 

      disconnectDB($dbconn);
   } // End If Statment

?>
