
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/styleforlogin.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="http://localhost/internet/server.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="" value="Login">
            <a href="http://localhost/internet/Registration.php">Don't have an account? Register here</a><br>
            <a href="Account_recovery.html">Lost your password?</a>
        </form>
        
    </div>

</body>
</head>
</html>