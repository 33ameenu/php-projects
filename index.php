<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index-Page</title>
    <style>
        .form-group{
            margin:10px;
        }
    </style>
</head>
<body>
    <form action="controller.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
             <label for="">Email</label>
            <input type="email" name="email"required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pass" required>
        </div>
        <input type="submit" value="Register" name="submit">
        
    </form>
    <p>have account? <a href="login.php">Login</a></p>
    
</body>
</html>