<?php
 $error_message="";
 $daname="";
 $dapassword="";
 ?>
 <?php
  if(isset($_POST["submit"]))
  {
$daname=$_POST["username"];
$dapassword=$_POST["password"];

$conn=mysqli_connect('localhost','root','','routes');
$sql="SELECT*from admin where name='$daname' and password='$dapassword'";
  $result=$conn->query($sql);
  
  $result = $conn->query($sql);

       
        if ($result && $result->num_rows > 0) {
           
            header("Location: main.php");
            session_start();
            $_SESSION['admin']=$_POST["username"];
     
            exit(); 
        } else
         {
           
            $error_message = "please enter valid name or password";
           
         }
        

 

  
  }

  ?>
<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  margin: 0;
  padding: 0;
}

.form-wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  border-radius: 8px;
  backdrop-filter: blur(5px);
  background-color: rgba(255, 255, 255, 0.5);
  padding: 30px; 
  max-width: 400px; 
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  outline: none;
}

.form-group input[type="submit"] {
  margin-top: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}


.form-text {
  text-align: center;
  margin-bottom: 20px;
}
</style>
</head>
<body>
  <center>
    <div class="form-wrapper">
      <div class="form-text" method="post">
        <h2>Welcome to our admin Login Page</h2>
        <p>Please enter your credentials to log in.</p>
      </div>
      <form class="login-form"  method="post">
        <div class="form-group">
          <label for="username">Name:</label>
          <input type="text" id="username" name="username" placeholder="Enter your name" value="<?php echo$daname?>"required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password"value="<?php echo $dapassword?>" required>
        </div>
       <p id="para" style="color:red;">
<?php echo"".$error_message?>
       </p>
        <div class="form-group">
          <input type="submit" value="Login" name="submit">
        </div>
        <a href="addadmin.php">want to add admin??</a>
      </form>
    </div>
  </center>
  
 
 

</body>
</html>
