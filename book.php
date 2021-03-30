<html lang="en">
    <head>
        <title>24 Library</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php 
            session_start();

            if($_SESSION['Role']==""){
                header("location:index.php?message=error");
            } else if($_SESSION['Role']=="Member"){
                header("location:index.php?message=error");
            } 
        ?>
        <div class="container container-fluid">
            <center><h1 style="padding: 3rem;"><b>Book</b></h1></center>

            <div class="row justify-content-around">
                <div class="col">
                    <div class="col justify-content-around">
                        <div class="row">
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search..." name="search">
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-info" type="btnSearch">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <select class="browser-default custom-select" name="orderby">
                                        <option value="null" selected>Order By...</option>
                                        <option value="BookID">Book ID</option>
                                        <option value="Name">Name</option>
                                        <option value="Name">Category</option>
                                        <option value="Name">Author</option>
                                        <option value="Name">Book Qty</option>
                                        <option value="Name">Name</option>
                                    </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-info" type="btnOrder">Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-group">
                                <div class="input-group">
                                    <div class="form-check mx-sm-2">
                                        <input class="form-check-input" type="radio" name="order" id="order1" value="asc" checked>
                                        <label class="form-check-label" for="order1">Ascending</label>
                                    </div>
                                    <div class="form-check mx-sm-2">
                                        <input class="form-check-input" type="radio" name="order" id="order2" value="desc">
                                        <label class="form-check-label" for="order2">Descending</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <button type="button" class="form-control btn btn-outline-primary" name="add">Add Data</button>
                </div>
            </div><hr>
            <div class="row justify-content-around">
                <div class="col">
                    <table class="table table-bordered table-primary" name="tableData">
                        <thead>
                            <th>Book ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Book Qty</th>
                            <th>Action</th>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <th>Book ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Book Qty</th>
                            <th>Action</th>
                        </tfoot>
                    </table>
                </div>
                <div class="col jumbotron">
                    <h4 name="lblTitle">Information</h4><hr>
                    <form action="book.php" method="POST">
                        <div class="form-group">
                            <label for="id">Book ID</label>
                            <input type="text" class="form-control" name="id" disabled>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" name="author" required>
                        </div>
                        <div class="form-group">
                            <label for="publisheddate">Published Date</label>
                            <input type="date" class="form-control" name="publisheddate" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="browser-default custom-select" name="category" required>
                                <option value="null" selected>--Category--</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Non Fiction">Non Fiction</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="number" class="form-control" name="qty" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" name="location" required>
                        </div>
                        <div class="form-group custom-file">
                            <label class="custom-file-label" for="file">Photo</label>
                            <input type="file" class="custom-file-input" name="file" accept="image/png, image/jpeg" required>
                        </div><hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    include 'koneksi.php';

    function genidb($second, $third){
        include 'koneksi.php';
        global $id;
        $sql = "SELECT BookID from book WHERE BookID LIKE 'BK-$second-$third-%' order by BookID desc LIMIT 1";
        $query = mysqli_query($koneksi, $sql);
        $cek = mysqli_num_rows($query);
	    $data = mysqli_fetch_assoc($query);
        $newId = substr($data['BookID'], 11,2);
        $tambah = (int)$newId + 1;
        if (strlen($tambah) == 1){
            $id = "BK-".$second."-".$third."-0".$tambah;
        }
        else if (strlen($tambah) == 2){
            $id = "BK-".$second."-".$third."-".$tambah;
        }
        return $id;
    }

    $name = $_POST['name'];
    $author = $_POST['author'];
    $publisheddate = $_POST['publisheddate'];
    $category = $_POST['category'];
    $qty = $_POST['qty'];
    $location = $_POST['location'];
    $photo = $_POST['file'];
    $s1 = substr($author, 0,1);
    $s2 = substr($author, -1,1);
    $second = strtoupper($s1.$s2);
    $date = DateTime::createFromFormat("Y-m-d", $publisheddate);
    $third = $date->format("Y");;
    $id = genidb($second, $third);
    echo $photo;
    $q = mysqli_query($koneksi, "INSERT INTO book VALUES('$id','$name','$author','$publisheddate','$category','$qty','$location', '$photo')");
    echo "<script>alert('Register success');</script>";
}
?>