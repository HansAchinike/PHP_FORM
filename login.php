<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
</head>
<body style="background-color: #f1d6a9">
    <h1>Sign In</h1>
    <form method="POST">
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="pwd" placeholder="Password" required><br>
        <button type="submit" name="submit"> Login </button><br>
        Dont have an account? <a href='form.php'>Register Here</a><br>
        Forgot Password? <a href='reset.php'>Reset password</a>
        <?php
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];

                $inp = file_get_contents('database.json');
        
                $tempArray = json_decode($inp, TRUE);
                
                $loginCheck;
                foreach ($tempArray as $data) {
                    if ($data['Email'] == $email && $data['Password'] == $pwd){
                        $loginCheck += 1;
                        $_SESSION['array_data'] = $data;
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
    </form>
</body>

</html>