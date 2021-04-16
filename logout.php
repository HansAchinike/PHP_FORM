<?php
session_start();
unset($_SESSION["Email"]);
unset($_SESSION["Password"]);

echo 'Welcome<br>';
//Logout
     echo "<a href='http://localhost/project/task/form.php'><button>Logout</button> </a>";


?>