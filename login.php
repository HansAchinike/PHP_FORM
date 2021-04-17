<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
<body style="background-color: #f1d6a9">
    <h1>Sign in</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="pwd" placeholder="Password" required><br>
        <button type="submit" name="submit"> Login </button><br>
    </form>

    Dont have an account? <a href='form.php'>Register Here</a><br>
    Forgot Password? <a href='reset.php'>Reset password</a>

    <?php
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['pwd'];

            $db = file_get_contents('database.json');
    
            $tempDb = json_decode($db, TRUE);
            
            $loginCheck;
            foreach ($tempDb as $data) {
                if ($data['email'] == $email && $data['password'] == $password){
                    $loginCheck += 1;
                    $_SESSION['arrayData'] = $data;
                }
            }
            if ($loginCheck == 0){
                echo "<script>alert ('Wrong details!!')</script>";
            }else{
                echo "<script>alert ('login success!!')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    ?>
</body>

</html>