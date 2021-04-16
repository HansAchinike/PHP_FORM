<?php
    if(isset($_POST['submit'])) {
        $First_name = $_POST['first_name'];
        $Last_name = $_POST['last_name'];
        $Email = $_POST['email'];
        $Password = $_POST['pwd'];
        $Dob = $_POST['dob'];
        $array_data = [
            'First_name' => $First_name,
            'Last_name'=> $Last_name, 
            'Email' => $Email,
            'Password' => $Password,
            'Dob' => $Dob
        ];

        $inp = file_get_contents('database.json');
        
        $tempArray = json_decode($inp, TRUE);

        foreach ($tempArray as $data) {
            if ($data['Email'] == $Email){
                echo "<script>alert ('Email already exist')</script>";
                echo "<script>window.open('form.php','_self')</script>";
                return;
            }
        }
        array_push($tempArray, $array_data);
        $jsonData = json_encode($tempArray);

        file_put_contents('database.json', $jsonData);
        echo "<script>alert ('Registration success!! Now login')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    
?>