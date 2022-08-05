<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Artifika' rel='stylesheet'>
        <style>
            *:before,
            *:after{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                font-family: 'Artifika';
                font-size: 22px;
                background-color: #080710;
            }
            .background{
                width: 430px;
                height: 420px;
                position: absolute;
                transform: translate(-50%,-50%);
                left: 50%;
                top: 50%;
            }
            form{
                height: 500px;
                width: 1300px;
                background-color: rgba(255,255,255,0.13);
                position: absolute;
                transform: translate(-50%,-50%);
                top: 50%;
                left: 50%;
                border-radius: 10px;
                backdrop-filter: blur(10px);
                border: 2px solid rgba(255,255,255,0.1);
                box-shadow: 0 0 40px rgba(8,7,16,0.6);
                padding: 50px 35px;
            }
            form *{
                font-family: 'Artifika';
                color: #ffffff;
                letter-spacing: 0.5px;
                outline: none;
                border: none;
            }
            form table{
                font-size: 32px;
                font-weight: 500;
                line-height: 42px;
                text-align: center;
                border-radius: 3px;
                padding: 0 10px;
                margin-top: 8px;
                font-size: 14px;
                font-weight: 300;
            }
            input{
                display: block;
                height: 50px;
                width: 100%;
                background-color: rgba(255,255,255,0.07);
                border-radius: 3px;
                padding: 0 10px;
                margin-top: 8px;
                font-size: 14px;
                font-weight: 300;
            }
            button{
                margin-top: 10px;
                margin-left: 30px;
                width: 100%;
                height: 50px;
                background-color: #ffffff;
                color: #080710;
                padding: 15px 0;
                font-size: 18px;
                font-weight: 600;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                var html = '<tr><td><input class="form-control" type="text" placeholder="Enter Product ID" name="pro_id" ></td><td><input class="form-control" type="text" placeholder="Enter Product Name" name="pro_name" ></td><td><input class="form-control" type="text" placeholder="Enter Product Quantity" name="pro_qty" ></td><td><input class="form-control" type="text" placeholder="Enter Product Price" name="pro_price" ></td><td><input class="form-control" type="text" placeholder="Enter Product Amount" name="pro_amount" ></td><td><button class="btn btn-warning" type="button" name="add" id="add" value="Add">Add</button></td></tr>';
            
                var x=1;
                
                $("#add").click(function(){
                    $("table_field").append(html);
                });
                
                $("#table_field").on('click','#remove'function(){
                    $(this).removal();
                });
            });
        </script>
    </head>
    <body>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div>
            <form class="insert-form" id="insert_form" method="post" action="">
                <div class="input-feild">
                <table class="table table-bordered" id="table_field">
                    <thead>
                        <tr>
                            <th>Pro Id</th>
                            <th>Pro Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>    
                            <th>Add or Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-control" type="text" placeholder="Enter Product ID" name="pro_id" ></td>
                            <td><input class="form-control" type="text" placeholder="Enter Product Name" name="pro_name" ></td>
                            <td><input class="form-control" type="text" placeholder="Enter Product Quantity" name="pro_qty" ></td>
                            <td><input class="form-control" type="text" placeholder="Enter Product Price" name="pro_price" ></td>
                            <td><input class="form-control" type="text" placeholder="Enter Product Amount" name="pro_amount" ></td>
                            <td><button class="btn btn-warning" type="button" name="add" id="add" value="Add">Add</button></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </form>
          </div>
    </body>
</html>