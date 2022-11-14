<?php
            session_start();

            if(isset($_SESSION['uname'])){
                header('location:home.php');
            }


        require_once "connection.php";

        if($_POST)
        {
            $username = $_POST['uname'];
            $password = $_POST['pass'];
        
        
            $sql = "INSERT INTO `signup`(`username`, `password`) VALUES ('$username','$password')";
            $res = $con->query($sql);
            if($res)
                    header("Location:index.php");
            
                else
                    echo "failed2";       
            
        } 
          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<div class="container">
                    <div class="card card-container">
                        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                        <p id="profile-name" class="profile-name-card"></p>
                        <p class="col-3"> Sign up</p>
                        <form action=""class="form-signin" method="post">
                            <span id="reauth-email" class="reauth-email"></span>
                            <input type="text" name="uname" class="form-control" placeholder="Enter Username" required autofocus>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">confirm</button>
                        </form><!-- /form -->
                     
                    </div><!-- /card-container -->
                </div><!-- /container -->
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="hk.js"></script>

</body>
</html>