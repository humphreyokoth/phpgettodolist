<?php
//  include('./db_connnection.php');
// $conn = OpenCon();
    // Getting all items for the Database
    $sql = "SELECT * FROM to_do_list_items";
   
    $result = $conn->query($sql);
    //error_log("$result"."\n",3,"./php_error.log");

    if ($result->num_rows > 0) {
        // output data of each row
        return $row = $result->fetch_assoc();
        //echo ' successful retrieved.';
       
      } else {
        echo "0 results";
      }

    ?>

