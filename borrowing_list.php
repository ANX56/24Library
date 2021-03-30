<html lang="en">
    <head>
        <title>24 Library</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container container-fluid">
            <center><h1 style="padding: 3rem;"><b>Borrowing List</b></h1></center>

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
                    <button type="button" class="form-control btn btn-outline-primary" name="borrow">Borrow a Book</button>
                </div>
            </div><hr>
            <div class="col justify-content-around">
                <div class="row">
                    <table class="table table-bordered table-primary" name="tableBorrow">
                        <thead>
                            <th>Borrow ID</th>
                            <th>Name</th>
                            <th>Borrow Date</th>
                            <th>Total Book</th>
                            <th>Should Return Before</th>
                            <th>Total Deposit</th>
                            <th>Status</th>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <th>Borrow ID</th>
                            <th>Name</th>
                            <th>Borrow Date</th>
                            <th>Total Book</th>
                            <th>Should Return Before</th>
                            <th>Total Deposit</th>
                            <th>Status</th>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col justify-content-around">
                <div class="row">
                    <table class="table table-bordered table-primary" name="tableBorrow">
                        <thead>
                            <th>Book ID</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Deposit</th>
                            <th>Total Deposit</th>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <th>Book ID</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Deposit</th>
                            <th>Total Deposit</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>