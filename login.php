<html>
    <head>
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
      top: -100px;
  }
  .shape:last-child{
      background: linear-gradient(
          to right,
          #ff512f,
          #f09819
      );
      right: -80px;
      bottom: -100px;
  }
  form{
      height: 470px;
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
      font-family: 'Poppins',sans-serif;
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
    <form name="login" action="login.php"onsubmit = "return validation()" method = "POST">
      <h1>LOGIN HERE</h1>  
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" >
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >
      <div>
        <button type="submit"  >Log In</button> 
      </div>
      <br>
      <p>Doesn't Have Account??</p>
      <p><a href="Signup.php">Signup!!</a>
      </p>
    </form>
  </div>
 <script>
    function myFunction() {
        location.replace("./Signup.html")
    }
    </script> 

<script>  
    function validation()  
    {  
        var id=document.login.uname.value;  
        var ps=document.login.psw.value;  
        if(id.length=="" && ps.length=="") {  
            alert("User Name and Password fields are empty");  
            return false;  
        }  
        else  
        {  
            if(id.length=="") {  
                alert("User Name is empty");  
                return false;  
            }   
            if (ps.length=="") {  
            alert("Password field is empty");  
            return false;  
            }  
        }                             
    }  
</script>  
</body>
<?php      
    
    $con=mysqli_connect("localhost","root","","minipro");
    if($con->connect_errno)
    {
       echo "Sorry";
    }
    
    $username = $_POST['uname'];  
    $password = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select UserName,Password from Signup where UserName = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            header('Location: home.html'); 
 
        }  
        else{             
               echo "<script>alert('Hello');</script>";
        }     
?>  
</html>