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
        if(isset($_SESSION['arrayData'])){
            $name = $_SESSION['arrayData']['firstName']. " ". $_SESSION['arrayData']['lastName'];
            echo "
                <h1> Welcome $name </h1><br>
                <button>
                    <a href='logout.php'>Logout</a>
                </button>
            ";
        
        }else{
            echo "<script>alert ('Login before access!!')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        }

    ?>
</body>

</html>