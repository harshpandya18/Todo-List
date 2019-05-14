<html>
  <head>
    <title>Todo App</title>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>   
  </head>
  <body>

    <div class="container">

<div class="row">
    <div class="col-lg-6">
      <h1>Welcome 
 <?php 
session_start();
if(!isset($_SESSION["login_user"])){
header("Location: login.php");
  die();
}

$login_session=$_SESSION['login_user'];
echo $login_session;?> !</div>


    <div class="col-lg-6"><br><br><a class="btn btn-md btn-secondary display-4" href="logout.php"> Logout </a></div>
  </div>


      <p>
        <label for="new-task">Add Item</label><input id="new-task" type="text"><button class="btn btn-md btn-secondary display-4">Add</button>
      </p>
      
      <h3>Todo Tasks</h3>
      <ul id="incomplete-tasks">
        <?php 
$hostname='localhost';
  $user = 'root';
  $password = '';
  $mysql_database = 'user';

  $db = mysqli_connect($hostname, $user, $password,$mysql_database);

  $query = "select * from tasks where username = '$login_session' and checked = '0'";

  $result = mysqli_query($db, $query);

  $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

  foreach($result as $task){
    $value = $task["task"];
    echo '<li><input type="checkbox"><input type="text"><label>'.$value.'</label><button class="edit">Edit</button><button class="delete">Delete</button></li>';
     }


   ?>
      </ul>
      
      <h3>Completed Tasks</h3>
      <ul id="completed-tasks">
       <?php 
$hostname='localhost';
  $user = 'root';
  $password = '';
  $mysql_database = 'user';

  $db = mysqli_connect($hostname, $user, $password,$mysql_database);

  $query = "select * from tasks where username = '$login_session' and checked = '1'";

  $result = mysqli_query($db, $query);

  $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

  foreach($result as $task){
    $value = $task["task"];
    echo '<li><input type="checkbox" checked><input type="text"><label>'.$value.'</label><button class="edit">Edit</button><button class="delete">Delete</button></li>';
  }


   ?>
      </ul>
    </div>

    <script type="text/javascript" src="app.js"></script>


  </body>
</html>