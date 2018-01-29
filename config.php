<?php
 $databaseHost = "au-cdbr-sl-syd-01.cleardb.net"; 
 $databaseUser = "b8147d7bb02447";
 $databasePassword = "4f66e637";
 $databaseName = "ibmx_e92556017390395";
        
      $con=mysql_connect($databaseHost ,$databaseUser ,$databasePassword )or die ('Connection Error');
      mysql_select_db("ibmx_e92556017390395",$con) or die ('Database Error');
 ?>