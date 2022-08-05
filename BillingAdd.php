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
                background: linear-gradient(0deg, rgba(195,34,57,1) 0%, rgba(255,0,245,1) 93%);
            }
            .background{
                width: 430px;
                height: 100%;
                position: absolute;
                animation-name: scrollscreen;
            }
            :webkit-schroll
            @keyframes scrollscreen {
                0% {::-webkit-scrollbar{
                    height:500px;
                }}
                50%{::-webkit-scrollbar{
                    margin-top:100px;
                }}
                
            }
            form{
                height: 100%;
                width: 1000px;
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
            label{
                display: block;
                margin-top: 30px;
                font-size: 16px;
                font-weight: 500;
            }
            input{
                display: block;
                height: 50px;
                width: 200px;
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
            ::placeholder{
                color: #e5e5e5;
            }
        </style>
        <script type="text/javascript">
            function addRows(){                
                var table = document.getElementById('purtbl');
                var rowCount = table.rows.length;
                var cellCount = table.rows[0].cells.length; 
                var row = table.insertRow(rowCount);
                for(var i =0; i <= cellCount; i++){
                    var cell = 'cell'+i;
                    cell = row.insertCell(i);
                    var copycel = document.getElementById('col'+i).innerHTML;
                    cell.innerHTML=copycel;
                }
            }
            function deleteRows(){
                var table = document.getElementById('purtbl');
                var rowCount = table.rows.length;
                if(rowCount > '2'){
                    var row = table.deleteRow(rowCount-1);
                    rowCount--;
                }
                else{
                    alert('There should be atleast one row');
                }
            }
            function sub(){
                //document.getElementById("bill").submit();
                if($res)
                {
                    if($res1){
                        alert('Records Inserted Sucessfully');
                    }
                }
                else{
                    alert('Not Inserted!!!');
                }
            }
        </script>

    </head>
    <body>
        <div class="background">
        </div>
        <div>
            <form name="Billing" id="bill" method="post" action="BillingAdd.php">
                <h2>Billing System  </h2>
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Billing ID</th>
                            <th>Purchasing Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="type" placeholder="Enter Custmoer Name" name="p_pname" id="p_pname" required></td>
                            <td><input type="type" placeholder="Enter Customer Phone No" name="p_pid" id="p_pid" required></td>
                            <td><input type="date" placeholder="Enter Purchasing Date" name="p_pdate" id="p_pdate" required></td>
                        </tr>
                    </tbody>
                </table>
                <table id="purtbl">
                    <thead>
                        <tr>
                            <th>Pro Id</th>
                            <th>Pro Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="col0"><input class="form-control" type="text" placeholder="Enter Product ID" name="pro_id" id="pro_id"></td>
                            <td id="col1"><input class="form-control" type="text" placeholder="Enter Product Name" name="pro_name" id="pro_name" ></td>
                            <td id="col2"><input class="form-control" type="text" placeholder="Enter Product Quantity" name="pro_qty" id="pro_qty" ></td>
                            <td id="col3"><input class="form-control" type="text" placeholder="Enter Product Price" name="pro_price" id="pro_price"></td>
                            <td id="col4"><input class="form-control" type="text" placeholder="Enter Product Amount" name="pro_amount" id="pro_amount" ></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tr> 
                        <td><input type="button" value="Add Row" onclick="addRows()" /></td> 
                        <td><input type="button" value="Delete Row" onclick="deleteRows()" /></td> 
                        <td><input type="submit" value="Submit"  /></td> 
                    </tr>
                </table>
            </form>
          </div>
    </body>
    <?php
    $con =  mysqli_connect('localhost', 'root', '','minipro');

    if($con->connect_errno)
    {
        echo "Sorry";
    }
    else{
        //echo "Database Connected";
    }
    // get the post records
    
    $c_id =$_POST['pro_id'];
    $pro_name =$_POST['pro_name'];
    $pro_qty = $_POST['pro_qty'];
    $pro_price = $_POST['pro_price'];
    $pro_amt = $_POST['pro_amount'];

    $p_name =$_POST['p_pname'];
    $p_pid =$_POST['p_pid'];
    $p_pdate =$_POST['p_pdate'];
    
    // database insert SQL code
    $sql = "INSERT INTO `Billing` (`Id`,`Name`,`Quantity`,`Price`, `Amount`,`BillID`) VALUES ('$c_id', '$pro_name', '$pro_qty', '$pro_price','$pro_amt','$p_pid')";
    $query = "INSERT INTO `Customer1` (`ID`,`Name`,`Date`) VALUES('$p_pid','$p_name','$p_pdate')";
    
    // insert in database 
    $res = mysqli_query($con, $sql);
    $res1 = mysqli_query($con,$query);
    
    
    
?>
</html>