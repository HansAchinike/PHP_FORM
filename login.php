<!DOCTYPE  html>
<html>
<head>
	<title>login page</title>
</head>
<body style="background-color: #f1d6a9">
<h1>Sign In</h1>

<form method="POST" action="logout.php">
    <input type="text" name="email" placeholder="Email"required><br>
    <input type="password" name="pwd" placeholder="Password" required><br>
    <button type="submit" name="login"> Login </button><br>

 <?php

session_start();

 $_SESSION['mail'];
 $_SESSION['pass'];
 $_SESSION['array_data'];

    if(isset($_POST['login']))
    {
       
       $_SESSION['mail'] = $_POST['email'];
       $_SESSION['pass'] = $_POST['pwd'];

        } 

    ?>




</form>
</body>
</html>