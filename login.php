<?php
session_start();
?>
<?php      
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "intern";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn)
      {
          die('Could not Connect MySql Server:' .mysql_error());
        }
        else
        {
            //echo"connected";
        }

        $email = $_POST['email'];  
        $password = md5($_POST['password']);  
        $error = "Your Email-Id or Password is invalid";
    //to prevent from mysqli injection  
        $sql = "select * from tbl_user where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
         $id = $row["id"]; 
        $count = mysqli_num_rows($result);    
        if($count == 1)

        { 
           //$_SESSION['login_user'] = $id;
             echo $id;
           header("location: welcome.php?id=$id");
        }  
        else
        {  
             $_SESSION["error"] = $error;
            header("location:index.php");
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
