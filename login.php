<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
    <style>
        .form-group{
            margin:10px;
        }
    </style>
</head>
<body>
    <form action="controller.php" method="post">
        
        <div class="form-group">
             <label for="">Email</label>
            <input type="email" name="email"required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pass" required>
        </div>
        <input type="submit" value="Login" name="login">
        
    </form>
    <p>Dont have account? <a href="index.php">Register</a></p>

</body>
</html>