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
if(isset($_POST['submit']))
{    
     $email = $_POST['email'];
     $password = md5($_POST['password']);
     $query = "INSERT INTO tbl_user(email,password)VALUES( '$email','$password')";
     if (mysqli_query($conn, $query)) 
     {
        header('location:index.php');
     } 
     else 
     {
        echo "Error: " . $query . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>