<?php
class Tech
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "localhost";
    $dbname = "nj_system";
    $username = "root";
    $password = "";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

    }


    public function tech_list(){
        
       $sql = "SELECT * FROM member ORDER BY member_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function add($post_data=array()){
         
       if(isset($post_data['create'])){
       $member_name_lastname= mysqli_real_escape_string($this->conn,trim($post_data['member_name_lastname']));
       $member_level= mysqli_real_escape_string($this->conn,trim($post_data['member_level']));
      

       $sql="INSERT INTO member (member_name_lastname, member_level) VALUES ('$member_name_lastname', '$member_level')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="เพิ่มข้อมูลสำเร็จ";
               
              header('Location: index.php');
           }
          
       unset($post_data['create']);
       }
       
        
    }
    
    public function view_tech($id){
       if(isset($id)){
       $member_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from member where member_id='$member_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function update_tech_info($post_data=array()){
       if(isset($post_data['update_tech'])&& isset($post_data['id'])){
           
       $member_name_lastname= mysqli_real_escape_string($this->conn,trim($post_data['member_name_lastname']));
       $member_level= mysqli_real_escape_string($this->conn,trim($post_data['member_level']));
       $member_id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE member SET member_name_lastname='$member_name_lastname', member_level='$member_level' WHERE member_id =$member_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated ";
           }
       unset($post_data['update_tech']);
       }   
    }
    
    public function delete($id){
        
       if(isset($id)){
       $member_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  member  WHERE member_id =$member_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully";
            
           }
       }
         header('Location: index.php'); 
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>