<html>
<head>
     <?php
            session_start();
            $name = $_SESSION['nameorid'];
    ?>
      
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="csss/dashboard.css">
<body>
    <div class="loginbox">
        <h1>Add new userid/email here, <?php  echo "$name" ?> </h1>
        <form action="http://localhost/internet/dashboardserver.php" method="post">
            <input type="text" name="indexx" placeholder="Enter index(eg: facebook)" required>
            <input type="text" name="email" placeholder="Enter userid/email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="" value="Add"><br><br>
        </form>

        
    </div>
            
    <?php
    
    
            $con = mysqli_connect('localhost', 'root');
            mysqli_select_db($con,'userdatas');  
    
            $query = "SELECT * FROM id".$name; //You don't need a ; like you do in SQL
            $result = mysqli_query($con, $query);
            
            ?>
            <h2> Your saved passwords are<h2><br>
    
        <?php
            echo "<table>"; // start a table tag in the HTML
                $i = 1;
            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                if($i == 1){
                echo "<tr><td>INDEX......</td><td>User ID  ......</td><td>Password</td></tr>"; }
                $i = 2;
                echo "<tr><td>" . $row['indexx'] . "</td><td>" . $row['userid'] . "</td><td>" . $row['password'] . "</td></tr>";  //$row['index'] the index here is a field name
            }

            echo "</table>"; //Close the table in HTML
    
        ?>

</body>
    <br><br><br><br><a href="http://localhost/internet/Login.php">Log Out</a><br>
</head>
</html>