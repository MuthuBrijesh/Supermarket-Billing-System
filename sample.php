<html>
<head>
   <style media="screen">
* {
  font-family: sans-serif; /* Change your font family */
}
body{
          background-color: #080710;
      }
      .background{
          width: 430px;
          height: 420px;
          position: absolute;
      }
      .background img{
        width: 1530px;
        height: 800px;
      }
      button {
         margin-left:450px;
         background-color: #009879; /* Green */
         border: none;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
}
form{
          height: 450px;
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
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 1.5 em;
  min-width: 1000px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 3px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
</style>
   <title>Billing Table</title>
</head>
<body>
<div class="background">
<img src="home1.jpg" alt="Home">
</div>
<div>
   <form>
<table class="content-table">
   <thead>
   <tr>
      <th>ProID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Amount</th>
   </tr>
</thead>
            
   <?php
      $con=mysqli_connect("localhost","root","","minipro");
      if($con->connect_errno)
      {
         echo "Sorry";
      }
      
      $bc_phone = $_POST['bc_phone'];
      $sql="SELECT ID,Name,Quantity,Price,Amount FROM Billing  where BillID='$bc_phone'";
      $res=$con->query($sql);
      if($res)
      {
      if($res-> num_rows > 0)
      {
         while($row =$res->fetch_assoc())
         {
            echo "<tbody><tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".
            $row["Quantity"]."</td><td>".$row["Price"]."</td><td>".$row["Amount"]."</td></tr></tbody>";
         }
         echo "</table>";
      }
      else
      {
         echo "0 result";
      }
   }
   else
   {
      echo "Error in".$sql." ".$db->error;
   }
      $con->close();
   ?>

            <div>
                <button type="submit" name="submit1" >Submit</button> 
            </div>
</table>
</form>
</div>
   </body>
   </html>