<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Artifika' rel='stylesheet'>
        <style media="screen">
            *,
      *:before,
      *:after{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
      }
      body{
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
      .background .shape{
          height: 200px;
          width: 200px;
          position: absolute;
          border-radius: 50%;
      }
      .shape:first-child{
          background: linear-gradient(
              #1845ad,
              #23a2f6
          );
          left: -80px;
          top: -250px;
      }
      .shape:last-child{
          background: linear-gradient(
              to right,
              #ff512f,
              #f09819
          );
          right: -80px;
          bottom: -250px;
      }
      form{
          height: 630px;
          width: 400px;
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
      form h3{
          font-size: 32px;
          font-weight: 500;
          line-height: 42px;
          text-align: center;
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
          width: 100%;
          background-color: rgba(255,255,255,0.07);
          border-radius: 3px;
          padding: 0 10px;
          margin-top: 8px;
          font-size: 14px;
          font-weight: 300;
      }
      ::placeholder{
          color: #e5e5e5;
      }
      button{
          margin-top: 30px;
          width: 100%;
          background-color: #ffffff;
          color: #080710;
          padding: 15px 0;
          font-size: 18px;
          font-weight: 600;
          border-radius: 5px;
          cursor: pointer;
      }
      
          </style>
    </head>
    <body>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div>
            <form name="Billing" method="post" action="Billing.php">
            
              <h1>Billing Details</h1>
              
              <label for="c_id"><b>Name</b></label>
              <input type="text" placeholder="Enter the ID" name="c_id" id="c_id" required>
              
              <label for="b_amt"><b>Amount</b></label>
              <input type="text" placeholder="Enter the Amount" name="b_amt" id="b_amt" required>
              
              <label for="b_date"><b>Billing Date</b></label>
              <input type="date" placeholder="Enter the Date" name="b_date" id="b_date" required>
              
              <label for="b_id"><b>Billing ID</b></label>
              <input type="text" placeholder="Enter Billing ID" name="b_id" id="b_id" required>
              
              <div>
                <button type="submit" id="submit">Submit</button> 
            </div>
            
          </form>
        </div>
    </body>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con =  mysqli_connect('localhost', 'root', '','minipro');

if($con->connect_errno)
{
    echo "Sorry";
}
else{
    echo "Database Connected";
}
// get the post records

$c_id =$_POST['c_id'];
$b_amt = $_POST['b_amt'];
$b_date = $_POST['b_date'];
$b_id = $_POST['b_id'];

// database insert SQL code
$sql = "INSERT INTO `Billing` (`Id`, `Amount`, `Date`, `BillID`) VALUES ('$c_id', '$b_amt', '$b_date', '$b_id')";

// insert in database 
$res = mysqli_query($con, $sql);

if($res)
{
	echo "Records Inserted";
}
else{
    echo "Not Inserted!!!";
}

?>
</html>