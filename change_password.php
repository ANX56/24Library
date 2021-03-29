<html lang="en">
    <head>
        <title>24 Library</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container container-fluid" style="padding-top: 3rem;">
            <div class="jumbotron">
                <h1>Register</h1>
                <hr>
                <form action="change_password.php" method="POST">
                    <div class="form-group">
                        <label for="old">Old Password</label>
                        <input type="password" class="form-control" name="old" required>
                    </div>
                    <div class="form-group">
                        <label for="new">New Password</label>
                        <input type="password" class="form-control" name="new" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm">Retry Password</label>
                        <input type="password" class="form-control" name="confirm" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </div>
                </form>
            </div>            
        </div>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    session_start();
    include 'koneksi.php';

    $old = $_POST['old'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];
    $email = $_SESSION['Email'];
    $pass = $_SESSION['Password'];

    $q = mysqli_query($koneksi, "SELECT Password FROM user WHERE Email = '$email'");
    $cek = mysqli_num_rows($q);
    if($cek>0){
        if($old != $pass){
            echo "<script>alert('The old password you have entered is incorrect');</script>";
        } else if($new != $confirm){
            echo "<script>alert('Confirm password must be same with new password');</script>";
        }else if($old == $pass){
            $insert = mysqli_query($koneksi, "UPDATE user SET Password = '$new' WHERE Email='$email'");
            echo "<script>alert('Password successfully updated');</script>";
        } else {
            echo "<script>alert('unknowned error');</script>";
        }
    }
}
?>