<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<style type="text/css">

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background-color: hsla(89, 43%, 51%, 0.3);
}
</style>
</head>
<body>

<div class="login-page">
  <div class="form">
   <h3>Login to check your Task List</h3>
    <form class="login-form" name="" method="post">
      <input name="username" type="text" id="username" placeholder="Username">
      <input name="password" type="password" id="password" placeholder="Password">
      <input class="btn btn-warning" type="submit" name="submit" value="Login">
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>

<?php
if (isset($_POST['submit']))
  {   
include("config.php");

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['login_user']=$username;
$query = mysql_query("SELECT username FROM login WHERE username='$username' and password='$password'");

 if (mysql_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>"; 
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
    
?>


            
      </article>                
  </main>
      </div>
    </div>
   
  </div>
</body>
</html>
