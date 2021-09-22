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
if(isset($_POST['wel_submit']))
{    
      $id = $_GET['id'];
     $comment = $_REQUEST['comment'];
     $query = "update tbl_user set comment = '".$comment."' where id='".$id."'";
     if (mysqli_query($conn, $query)) 
     {
        //echo "Comment has been added successfully !";
      header('location:index.php');
     } 
     else 
     {
        echo "Error: " . $query . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>