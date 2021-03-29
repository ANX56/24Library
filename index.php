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
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "<script type='text/javascript'>alert('Email dan Password tidak sesuai');</script>";
                } else if($_GET['pesan']=="error"){
                    echo "<script type='text/javascript'>alert('Access Restricted');</script>";
                }
            }
        ?>
        <center><h1 style="padding-top: 5rem;"><b>24 LIBRARY</b></h1></center>
        <div class="container container-fluid" style="padding-top: 5rem;">
            <div class="row justify-content-around">
                <div class="col-4 jumbotron">
                    <h3>Login</h3>
                    <form action="login_cek.php" method="POST" style="padding-top: 2rem;">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required></input>
                        </div>
                        <div class="mb-3" style="padding-top: 3rem;">
                            <button type="submit" class="form-control btn btn-primary" id="login">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 jumbotron">
                    <center>
                    <h6 style="padding-bottom: 5rem;">Not a Member?</h6>
                    <h4>Register Now</h4><br>
                    <button type="submit" class="form-control btn btn-outline-info" id="register" onClick="myFunction()">Register</button>
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