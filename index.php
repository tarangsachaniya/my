<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <h2>Login Page</h2><br>
    <div class="login">
    <form id="login" method="post">
        <label><b>User Name
        </b>
        </label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</div>
  <?php 
  if(isset($_POST['submit'])){
    $user=$_POST['uname'];
    if($user='akang'){
        header('location:firstpage.html');
    }
  }
  
  ?>
</body>
</html>
