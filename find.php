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
            } else if($_SESSION['Role']=="Admin"){
                header("location:index.php?message=error");
            } 
        ?>
        <div class="container container-fluid">
            <center><h1 style="padding: 3rem;"><b>Return Books</b></h1></center>

            <div class="row justify-content-around">
                <div class="col">
                    <div class="col justify-content-around">
                        <div class="row">
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
                    </div>
                </div>
                <div class="col">
                </div>
            </div><hr>
            <div class="row justify-content-around">
                <div class="col-7">
                    <div class="col justify-content-around">
                        <div class="row">
                            <table class="table table-bordered table-primary" name="tableBorrow">
                                <thead>
                                    <th>Book ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Qty</th>
                                    <th>Qty Avail</th>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <th>Book ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Qty</th>
                                    <th>Qty Avail</th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col">
                        <h4 name="lblTitle">Information</h4><hr>
                        <form action="find.php" method="POST">
                            <div class="form-group">
                                <label for="id">Book ID</label>
                                <input type="text" class="form-control" name="id" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author" disabled>
                            </div>
                            <div class="form-group">
                                <label for="publisheddate">Published Date</label>
                                <input type="date" class="form-control" name="publisheddate" disabled>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="browser-default custom-select" name="category">
                                    <option value="null" selected>--Category--</option>
                                    <option value="Fiction">Fiction</option>
                                    <option value="Non Fiction">Non Fiction</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty Available</label>
                                <input type="number" class="form-control" name="qty" disabled>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" name="location" disabled>
                            </div>
                            <div class="form-group custom-file">
                                <label class="custom-file-label" for="file">Photo</label>
                                <input type="file" class="custom-file-input" name="file" disabled>
                            </div><hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>