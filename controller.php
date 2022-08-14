<?php
session_start();
include_once("DB.php");
// register handling
if(isset($_POST["submit"])){
    // echo "register successful";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "INSERT INTO `register`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
    $res = mysqli_query($con,$sql);
    if($res){
        echo "<script> alert('Register Successful')</script>";
        // 
        ?>
        <script>
            window.location.href = "index.php"
        </script>


<?php
    }else{
        echo "<script> alert('Ooooops Something went wrong') </script>";
        ?>
        <script>
        window.location.href = "index.php"
    </script>
    <?php
    }
}

// end of register handling

// login handling

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM `register` WHERE email = '$email' AND password = '$pass'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_num_rows($res);
    if($row > 0){
        $_SESSION["login"] = $email;
        header("location:Dashboard.php");
    }else{
        echo"Wrong Email or Password";
    }
}



?>