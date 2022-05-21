<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/Registration.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Register an ID</h1>
        <form action="http://localhost/internet/Registration.php" method="post">
            <p>Username</p>
            <input type="text" name="username"minlength="3" maxlength="20" placeholder="Choose an Username" required>
            <p>Phone number</p>
            <input type="text" name="phonenum" placeholder="Your phone number" required>
            <p>password :
                <input name="password" id="password" type="password" onkeyup='check();' minlength="4"  / required>
            </p><br>
            <p>confirm password:
                    <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' minlength="4"/ required> 
                    <span id='message'></span>
            <script>
            var check = function() {
                    if (document.getElementById('password').value ==
                    document.getElementById('confirm_password').value) {
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = '';
                    } else {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'password do not match';
                    }
                }
            </script>
            </p>
            
            
            <input type="submit" name="" value="Register">
            <a href="login.php">Already have an account?login here</a><br>
        </form>
       
        
    </div>
    </body>
     <?php

            $con = mysqli_connect('localhost', 'root');
            mysqli_select_db($con,'users');
            
            $name = $_POST['username'];
            
            $pass = $_POST['password'];
            $phonenum = $_POST['phonenum'];
            $s = "select * from profiles where name = '$name'";
            
            $result = mysqli_query($con, $s);
            $num = mysqli_num_rows($result);
            $temp = 1;
        
        
            if($num == 1){  
                echo "Username already taken"; 
                          
            }else{
                $reg = "insert into profiles(name, password, phonenumber) values ('$name', '$pass', '$phonenum')";
                $register_user_to_database = mysqli_query($con, $reg);
                
                
                
                $con->close();
              
                 $con2 = mysqli_connect('localhost', 'root');
                    mysqli_select_db($con2,'userdatas');
                
    
                $sql2 = "CREATE TABLE Id".$name." (
                        indexx VARCHAR(30) NOT NULL,
                        userid VARCHAR(30) NOT NULL,
                        password VARCHAR(20)
                        
                        )";
                
                if ($con2->query($sql2) === TRUE) {
                    echo "Table MyGuests created successfully";
                        } else {
                    echo "Error creating table:" ;
                        $con2->error;
                        }
                
                $con2->close();
               
            }
        ?>
</head>
</html>
