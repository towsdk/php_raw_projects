<?php
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "towhid_new");
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if(!$conn){
    echo "<script> alert('not connected');</script>";
    
    }
?>