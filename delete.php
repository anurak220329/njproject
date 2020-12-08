<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $tech_info=$tech_obj->delete($_GET['id']);
 
     
 }else{
  header('Location: index.php');
 }
 
 ?>
