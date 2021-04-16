<?php
    session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Front Page</title>
</head>

<body style="background-color: #f1d6a9">
    <?php
        if(isset($_SESSION['array_data'])){
            $name = $_SESSION['array_data']['First_name']. " ". $_SESSION['array_data']['Last_name'];
            echo "
                <h1> Welcome $name </h1>
                <button>
                    <a href='logout.php'>Logout</a>
                </button>
            ";
        
        }

    ?>
</body>

</html>