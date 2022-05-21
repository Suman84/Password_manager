 <?php
            session_start();
            $name = $_SESSION['nameorid'];


            $con = mysqli_connect('localhost', 'root');
            mysqli_select_db($con,'userdatas');  

            $indexx = $_POST['indexx'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $reg = "insert into id".$name."(indexx, userid, password) values ('$indexx', '$email', '$password')";
            $add_to_database = mysqli_query($con, $reg);
            

           
            header('location:dashboard.php');
        
            
    ?>
        
        
        
        
        
        
        