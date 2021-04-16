<?php
    session_start();
    session_destroy();
    echo "<script>alert ('logout success')</script>";
    echo "<script>window.open('form.php','_self')</script>";
    //Logout
        // echo "<a href='http://localhost/project/task/form.php'><button>Logout</button> </a>";
?>