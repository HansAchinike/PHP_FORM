<!DOCTYPE html>
<html>
<head>
    <title>Reset password</title>
</head>
<body style="background-color: #f1d6a9">
    <h1>Reset Password</h1>
    <form method="POST">
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="pwd" placeholder="New Password" required><br>
        <button type="submit" name="submit"> Reset </button><br>
        <?php
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];

                $inp = file_get_contents('database.json');
        
                $tempArray = json_decode($inp, TRUE);
                
                foreach ($tempArray as $key => $data) {
                    if ($data['Email'] == $email){
                        $tempArray[$key]['Password'] = $pwd;
                        echo "<script>alert ('Reset password success!!')</script>";
                        echo "<script>window.open('login.php','_self')</script>";
                    }else{
                        echo "<script>alert ('Wrong details')</script>";
                    }
                }
                $jsonData = json_encode($tempArray);
                file_put_contents('database.json', $jsonData);

            }
        ?>
    </form>
</body>

</html>