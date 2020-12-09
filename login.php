<?php  include('./class/tech.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    
    
    }
    
    .center {
      margin: auto;
      width: 60%;
      border: 3px solid #FFFFFF;
      padding: 10px;
    }
    
    
    img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
    .container {
      padding: 16px;
    }
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    /* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}



</style>
</head>
<body>


<div class="center">
<center><h1> สำนักงานกรมที่ดินสาขาหนองจอก</h1></center>
<form action="checklogin.php" method="post">
  <div class="imgcontainer">
  <center><h2></h2></center>
    <img src="./assets/images/ktd.png" width="23%" height="23%" alt="" class="">
  </div>

  <div class="container">
    <label for="uname"><b>ชื่อผู้ใช้</b></label>
    <input type="text" placeholder="กรอก ชื่อผู้ใช้" name="username" required>

    <label for="psw"><b>รหัสผ่าน</b></label>
    <input type="password" placeholder="กรอก รหัสผ่าน" name="password" required>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> 
    <button type="submit">Login</button>
   
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
  </div>
</form>
</div>
</body>
</html>
