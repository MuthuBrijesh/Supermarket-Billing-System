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
    

    if(isset($_POST['submit1'])){
        $bc_phone =$_POST['bc_phone']; 
    }
    
    // database insert SQL code
   //$sql = "SELECT * FROM `Billing` Where BillID="6384975705"";
    
    
    // insert in database 
    //$res = mysqli_query($con, $sql);
   
    
    
?>  
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        font-family: 'Artifika';
        font-size: 22px;
        background:linear-gradient(50deg,#080710,#2193b0,#6dd5ed);
        background-repeat: no-repeat;
    }
    .background{
        width: 100%;
        height: 100%;
        position: absolute;
        background-repeat: no-repeat;

    }
    .background img{
        width: 1530px;
        height: 700px;
    }
    form{
        height: 500px;
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
    form h2{
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
    <body>
    <div class="background">
        <img src="home1.jpg" alt="Home">
    </div>
    <div>
        <form name="BillDetails" id="billdtl" method="POST" action="sample.php">
            <h2>Billing Details </h2>
            <input type="text" placeholder="Enter the Customer phone" name="bc_phone" id="bc_phone" required>
            <div>
                <button type="submit" name="submit1" >Submit</button> 
            </div>
        </form>
    </div>
    </body>  
   
</html>