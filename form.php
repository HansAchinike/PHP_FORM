<!DOCTYPE html>
<html>

<head>
    <title>Registration page</title>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<body style="background-color: #f1d6a9">
    <h1> Sign up </h1>
    <h4>Please fill this form to create an account</h4>
    <form action="formaction.php" method="post">
        <input type="text" required name="first_name" placeholder="First Name"><br>
        <input type="text" required name="last_name" placeholder="Last Name"><br>
        <input type="email" required name="email" placeholder="Email"><br>
        <input type="password" required required name="pwd" placeholder="Password"><br>
        <input type="date" required name="dob" placeholder="Date of Birth" max=2021-04-10><br>
        <button type="submit" name="submit"> Create account </button><br>
    </form>
    Already have an account? <a href='login.php'>Login Here</a>
</body>

</html>