<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"> </head>

<body>
    <?php
    require('connection.php');
    session_start();
    if(isset($_POST['submit'])){
        $username = stripslashes($_POST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_POST['password']);
		$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else{
            
           echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>" ;
        }
        
        
    } else{
?>
        <div class="form">
            <h1>login in</h1>
            <form action="" method="post">
                <input type="text" name="username" placeholder="user name" required>
                <input type="password" name="password" placeholder="password" required>
                <input type="submit" name="submit" value="login" required>
                <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
            </form>
        </div>
        <?php }?>
</body>

</html>
