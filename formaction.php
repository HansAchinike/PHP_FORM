<?php
session_start();


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
                   $_SESSION['mail'] = $Email;
                   $_SESSION['pass'] = $Password;
                   $_SESSION['array_data'] = $array_data;
}
     echo 'You Have Successfully Registered';

     file_put_contents('files/'.$array_data['First_name'] . ".json" , json_encode($array_data));

     

     ?>