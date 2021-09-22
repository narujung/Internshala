<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</head>
<body class="bg">
		<section>
    <div class="container bg-light text-dark mt-3 mb-sm-5">
      <form method="POST" action="insert.php" onsubmit="return validform();">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Secret Diary</h1>
              <p class="text-h3 ">Store your thoughts permanently and securely.</p>
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="email" class="form-control" placeholder="Email" name="email" id="email">
            </div>
            <span class="text-danger"><div id="email_error" name="email_error" style="font-size:15px;"></div></span>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
              <span class="text-danger"><div id="password_error" name="password_error" style="font-size:15px;"></div></span>
            </div>
            <div class="col">
              <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword">
               <span class="text-danger"><div id="cpassword_error" name="cpassword_error" style="font-size:15px;"></div></span>
            </div>
          </div>
          <span class="text-danger"><div id="spassword_error" name="spassword_error" style="font-size:15px;"></div></span>
          <div class="row justify-content-start mt-4">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember me                </label>
              </div>
              <center><input type="submit" name="submit" class="btn btn-success mt-4" value="Sign Up">
              <p class="text-h3">Already have an account <a href="index.php">Sign In</a></p>
              </center>
            </div>
          </div><br>
        </div>
      </div>
    </div>
  </form>
  </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(function(){
    if (localStorage.checkbox && localStorage.checkbox !== "") 
    {
      $('#remember').attr('checked','checked');
      $('#email').val(localStorage.email);
      $('#password').val(localStorage.password);
    }
    else
    {
      $('#remember').removeAttr('checked');
      $('#email').val('');
      $('#password').val('');
    }
    $('#remember').click(function(){
         if($('#remember').is(':checked'))
         {
           localStorage.email = $('#email').val();
           localStorage.password = $('#password').val();
           localStorage.checkbox = $('#remember').val();

         }
         else
         {
           localStorage.email = '';
           localStorage.password = '';
           localStorage.checkbox = '';
         }
    });
  });
</script>
<script type="text/javascript">
  function validform()
  {
      if(email.value == '')
      {
         $('#email_error').show();
         var error="Please Enter your Email Id";
         document.getElementById('email_error').innerHTML=error;
         $('#email').focus();
         return false;
      }
      else
      {
          $('#email_error').hide();
      }
      if(password.value == "")
      {
         $('#password_error').show();
         var error="Please Enter your Password";
         document.getElementById('password_error').innerHTML=error;
         $('#password').focus();
         return false;
      }
      else
      {
        $('#password_error').hide();
      }
      if(cpassword.value == "")
      {
         $('#cpassword_error').show();
         var error="Please Enter your Confirm Password";
         document.getElementById('cpassword_error').innerHTML=error;
         $('#cpassword').focus();
         return false;
      }
      else
      {
        $('#cpassword_error').hide();
      }
      if(password.value != cpassword.value)
      {
           $('#spassword_error').show();
           var error="your Password and Confirm password are not equal";
           document.getElementById('spassword_error').innerHTML=error;
           $('#spassword').focus();
           return false;
      }
      else
      {
        $('#spassword_error').hide();
      }

  }
</script>

</html>