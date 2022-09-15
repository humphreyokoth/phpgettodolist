<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <?php
   include ('./db_connnection.php');
   $conn = OpenCon();
    $to_do_item = $_POST["item"];
    // echo "$post";
    // error_log("$post"."\n",3,"./php_error.log");
    
    $sql = "INSERT INTO to_do_list_items(`title`) VALUES ('$to_do_item')";
   
    $result = $conn->query($sql);
    // var_dump($result);
    error_log($result."\n",3,"./php_error.log");

    if ($result) {
        echo ' successful.';
    } else {
        echo 'ERROR:'.$sql.'\n'. $conn->close();
    }
    ?>
    
<!-- </body>
</html> -->