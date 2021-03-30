<html>
    <head>
        <title>24 Library</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php 
            if(isset($_GET['message'])){
                if($_GET['message']=="fail"){
                    echo "<script type='text/javascript'>alert('Email or Password is incorrect');</script>";
                } else if($_GET['message']=="error"){
                    echo "<script type='text/javascript'>alert('Access Restricted');</script>";
                }
            }
        ?>
        <center><h1 style="padding-top: 5rem;"><b>24 LIBRARY</b></h1></center>
        <div class="container container-fluid" style="padding-top: 5rem;">
            <div class="row justify-content-around">
                <div class="col-4 jumbotron">
                    <h3>Login</h3>
                    <form action="index.php" method="POST" style="padding-top: 2rem;">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required></input>
                        </div>
                        <div class="mb-3" style="padding-top: 3rem;">
                            <button type="submit" class="form-control btn btn-primary" name="login">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 jumbotron">
                    <center>
                    <h6 style="padding-bottom: 5rem;">Not a Member?</h6>
                    <h4>Register Now</h4><br>
                    <button type="submit" class="form-control btn btn-outline-info" name="register" onClick="myFunction()">Register</button>
                    </center>
                </div>
            </div>
        </div>
        <script>
            function myFunction() {
                window.location.href="register.php";
            }
        </script>
    </body>
</html>
<?php
if(isset($_POST['login'])){
    session_start();
    include 'koneksi.php';
     
    $email = $_POST['email'];
    $password = $_POST['password'];
     
     
    $login = mysqli_query($koneksi,"SELECT * FROM user WHERE Email='$email' AND Password='$password'");
    $cek = mysqli_num_rows($login);
    
    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        if($data['Role']=="Admin"){
            $_SESSION['Email'] = $email;
            $_SESSION['Password'] = $password;
            $_SESSION['Role'] = "Admin";
            header("location:index_admin.php");
        } else if($data['Role']=="Member"){
            $_SESSION['Email'] = $email;
            $_SESSION['Password'] = $password;
            $_SESSION['Role'] = "Member";
            header("location:index_member.php"); 
        } else{
            header("location:index.php?message=fail");
        }	
    } else{
        header("location:index.php?message=fail");
    }
}
?>