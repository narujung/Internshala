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
    $id = $_GET['id'];
    $query = " select * from tbl_user where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $email = $row['email'];
        //echo $id;
        //echo $email;
    }

?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</head>
<body class="bg">
    <section>

       <form method="POST" action="wellogin.php?id=<?php echo $id ?>" >
    <div class="container bg-light text-dark mt-3 mb-sm-5">
      <div class="row justify-content-center">
        <div class="col-md-12 col-12">
          <div class="row">
            <div class="col text-center mt-2">
              <p class="text-h2 float-left">Secret Diary</p>
              <p class="float-right"><a type="button" class="btn btn-outline-success" href="index.php">Logout</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container bg-light text-dark mt-3 mb-sm-5">
      <div class="row justify-content-center">
        <div class="col-md-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col-md-12 col-12 text-center mt-3 mb-sm-5">
<input type="hidden" id="id" name="id" class="form-control" required>   
              <label>Write your comment</label>
             <textarea class="form-control" id="comment" rows="3" name="comment" value="<?php echo $comment ?>">
             </textarea>
             <center><input type="submit" name="wel_submit" class="btn btn-success mt-4" value="Save"></center>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>
</body>

</html>