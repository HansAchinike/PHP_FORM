<?php
    if(isset($_POST['submit'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $dob = $_POST['dob'];
        $md5Id = md5($email);
        $arrayData = [
            'id' => $md5Id,
            'firstName' => $firstName,
            'lastName'=> $lastName, 
            'email' => $email,
            'password' => $password,
            'dob' => $dob
        ];

        $db = file_get_contents('database.json');
        
        $tempDb = json_decode($db, TRUE);

        foreach ($tempDb as $data) {
            if ($data['email'] == $email){
                echo "<script>alert ('Email already exist')</script>";
                echo "<script>window.open('form.php','_self')</script>";
                return;
            }
        }
        array_push($tempDb, $arrayData);
        $jsonData = json_encode($tempDb);

        file_put_contents('database.json', $jsonData);
        echo "<script>alert ('Registration success!! Now login')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    
?>