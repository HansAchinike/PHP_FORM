<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body style="background-color: #f1d6a9">
    <h1> Sign Up </h1>
    <h4>Please fill this form to create an account</h4>
    <form action="formaction.php" method="post">
        <input type="text" name="first_name" placeholder="First Name"><br>
        <input type="text" name="last_name" placeholder="Last Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="date" name="dob" placeholder="Date of Birth" max=2021-04-10><br>
        <button type="submit" name="submit"> Submit </button><br>
        Already have an account? <a href='login.php'>Login Here</a>
    </form>
</body>

</html>