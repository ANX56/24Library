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
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                            <label class="form-check-label" for="gender">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Female">
                            <label class="form-check-label" for="gender2">Female</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Handphone</label>
                        <input type="number" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    </div>
                </form>
            </div>            
        </div>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
    include 'koneksi.php';

    function genidm(){
        include 'koneksi.php';
        global $id;
        $sql = "SELECT UserID from user WHERE UserID LIKE 'UM%' order by UserID desc LIMIT 1";
        $query = mysqli_query($koneksi, $sql);
        $cek = mysqli_num_rows($query);
	    $data = mysqli_fetch_assoc($query);
        $newId = substr($data['UserID'], 2,3);
        $tambah = (int)$newId + 1;
        if ($cek > 0) {
            if (strlen($tambah) == 1){
                $id = "UM00" .$tambah;
            }
            else if (strlen($tambah) == 2){
                $id = "UM0" .$tambah;
            }
            else if(strlen($tambah) == 3){
                $id = "UM" .$tambah;   
            }
            return $id;
        } else {
            echo "<script>alert('ID Not Found');</script>";
            return $id;
        }
    }

    $id = genidm();
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $q = mysqli_query($koneksi, "INSERT INTO user VALUES('$id','$email','$password','$name','$gender','$phone','$address', 'Member')");
    echo "<script>alert('Register success');</script>";
}
?>