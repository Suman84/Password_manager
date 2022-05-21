 <?php
            
            $con = mysqli_connect('localhost', 'root');
            mysqli_select_db($con,'users');
            
            $name = $_POST['username'];
            $pass = $_POST['password'];

            $s = "select * from profiles where name = '$name' AND password = '$pass'";
            
            $result = mysqli_query($con, $s);
            $num = mysqli_num_rows($result);
            
            if($num == 1){
                session_start();
                echo "logged on";
                $_SESSION["nameorid"] = $name;
                header('location:dashboard.php');
                
                
            }else{
                echo "wrong";
                 
            }
?>