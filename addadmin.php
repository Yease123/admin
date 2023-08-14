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

input[type="submit"],
input[type="reset"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
  background-color: #45a049;
}


.form-text {
  text-align: center;
  margin-bottom: 20px;
}
</style>
</head>
<?php
$error="";
$sname="";
$spassword="";
$scpassword="";
if(isset($_POST["signup"]))
{
    $sname=$_POST["username"];
    $spassword=$_POST["password"];
    $scpassword=$_POST["cpassword"];
    $conn=mysqli_connect('localhost','root','','routes');
$sql="SELECT*from admin where name='$sname'";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
   $error="this name already taken"; 
     
   
}

if(strlen($spassword)<8)
{
  $error="please enter passwoird of length atleast 8";
}
if($spassword!=$scpassword)
{
  $error="password doesnt match";
  
}
if($error=="")
{
  $sql1="INSERT INTO admin(name,password)VALUES('$sname','$spassword')";
  if($conn->query($sql1))
  {
    header("Location: admin.php");
  }
}

}

?>
<body>
  <center>
    <div class="form-wrapper">
      <div class="form-text">
        <h2>Welcome to our signup Page</h2>
        <p>Please enter your credentials to signup.</p>
      </div>
      <form class="login-form"  method="post">
        <div class="form-group">
          <label for="username">Name:</label>
          <input type="text" id="username" name="username" placeholder="Enter your name" value="<?php echo"".$sname?>" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password"  value="<?php echo"".$spassword?>" required>
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="confirm-password" name="cpassword" placeholder="Confirm your password" value="<?php echo"".$scpassword?>"required>
        </div>
       <p style="color:red;">
        <?php echo"".$error?>
       </p>
        <div class="form-group">
          <input type="submit" value="signup" name="signup">
          <input type="reset" value="Cancel" name="signup">
        </div>
      </form>
    </div>
  </center>

 
  
</body>


</html>
