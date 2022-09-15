<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    require_once("./introphp.php");
    include ('db_connnection.php');
    ?>
    <?php
    $conn = OpenCon();
   
    $sql = " SELECT * FROM to_do_list_items";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "id:" . $row["id"] . "-Title:" . $row["title"] . "-Date:" . $row["data_added"] .
            "<br>";
    } else {
        echo "0 results";
    }

    $sql = "INSERT INTO to_do_list_items(title,date_added,type) VALUES ('Todo',now,'type')";
    //$result = $conn->query($sql);
    if ($result) {
        echo 'Records inserted successfully.';
    } else {
        echo 'ERROR:Could not execute $sql.';
    }
    //    $conn->close();
    ?>

    <div class="container">
        <form action="index.php" method="post" class="addTask" id="addForm" name="todoList">
            <div class="row">
                <div class="col-1">
                    <input type="checkbox" name="checkbox" id="todo-checkbox" checked /><label class="label-1">
                        <h1>My Todo-s</h1>
                    </label>
                </div>

                <div class="custom-add">
                    <input type="text" class="custom-add-input" id="input-add" name="item" placeholder="Add new.." />
                    <i class="fas fa-calendar-alt"></i>
                    <button type="submit" class="submit" id="submit" value="submit">Add</button>
                </div>
            </div>
        </form>
        <hr />

        <div class="counter">
            Filter
            <input type="number" name="filter" id="filter" placeholder="All" />
            Sort
            <input type="number" name="sort" id="sort" placeholder="Added date" /><i class="fas fa-sort-amount-down-alt sort-icon" id="sort-icon"></i>
        </div>

        <div class="container-list">

            <div class="list" id="list">

                <ul class="list-li" id="task">

                    <?php $list = todo();

                    foreach ($list as $key => $item) { ?>

                        <li>
                            <input type="checkbox" name="checkbox" id="list-1" />

                            <label class="label-2"> <?php echo $item ?></label>
                            <i class="fa-solid fa-trash-can deleteIcon"></i>

                            <i class="fa-solid fa-pencil editIcon "></i>

                        </li>
                    <?php } ?>
                </ul>
            </div>


        </div>

    </div>

</body>
</body>

</html>