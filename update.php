<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Product Update</h4
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="PID" value="<?php if(isset($_GET['PID'])){echo $_GET['PID'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","minipro");

                                    if(isset($_GET['PID']))
                                    {
                                        $pid = $_GET['PID'];

                                        $query = "SELECT * FROM product WHERE PID='$pid' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">PID</label>
                                                    <input type="text" value="<?= $row['PID']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['Name']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Descr</label>
                                                    <input type="text" value="<?= $row['Descr']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Price</label>
                                                    <input type="text" value="<?= $row['Price']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">COMBO OFFER</label>
                                                    <input type="text" value="<?= $row['COffer']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Quantity</label>
                                                    <input type="text" value="<?= $row['Quantity']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Manufacture Date</label>
                                                    <input type="text" value="<?= $row['MDate']; ?>" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>