<?php 
session_start();
        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM member 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["member_id"] = $row["member_id"];
                      $_SESSION["member_name_lastname"] = $row["member_name_lastname"];
                      $_SESSION["status"] = $row["status"];

                      if($_SESSION["status"]=="admin"){ 
                       
                        Header("Location: index.php");
                        echo "<script>";
                        echo "alert(\" เข้าสู่ระบบสำเร็จ\");"; 
                        echo "</script>";
                      }
                      
                 
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: login.php"); //user & password incorrect back to login again
 
        }
?>