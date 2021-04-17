<!DOCTYPE html>
<html>
<head>
    <title>Reset password</title>
</head>
<body style="background-color: #f1d6a9">
    <h1>Reset Password</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="pwd" placeholder="New Password" required><br>
        <button type="submit" name="submit"> Reset </button><br>
        <?php
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = $_POST['pwd'];

                $db = file_get_contents('database.json');
        
                $tempDb = json_decode($db, TRUE);
                
                $resetCheck = FALSE;
                foreach ($tempDb as $key => $data) {
                    if ($data['email'] == $email){
                        $tempDb[$key]['password'] = $password;
                        $resetCheck = TRUE;
                    }
                }
                if ($resetCheck){
                    echo "<script>alert ('Reset password success!!')</script>";
                    echo "<script>window.open('login.php','_self')</script>";
                }else{
                    echo "<script>alert ('Wrong details')</script>";
                }
                $jsonData = json_encode($tempDb);
                file_put_contents('database.json', $jsonData);
            }
        ?>
    </form>
</body>

</html>