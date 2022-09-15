<?php
//   include ('./db_connnection.php');
//    $conn = OpenCon();
    // $to_do_item = $_GET["item"];
    // echo "$post";
    // error_log("$post"."\n",3,"./php_error.log");
    
    $sql = "SELECT * FROM to_do_list_items";
   
    $result = $conn->query($sql);
    // var_dump($result);
    // error_log($result."\n",3,"./php_error.log");

    if ($result->num_rows > 0) {
        // output data of each row
        return $row = $result->fetch_assoc();
       
      } else {
        echo "0 results";
      }

    // if ($result) {
    //     echo ' successful.';
    // } else {
    //     echo 'ERROR:'.$sql.'\n'. $conn->close();
    // }
    ?>
