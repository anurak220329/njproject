<?php
include 'header.php';
if (isset($_POST['create'])) {
    $tech_obj->add($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">รายชื่อนายช่าง</a> 
        <h3>เพิ่มข้อมูลบุคลากร</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">ชื่อ-นามสกุล:</label>
                <input type="text" name="member_name_lastname" id="member_name_lastname" class="form-control" required maxlength="50">
            </div>
            <label for="cars">ระดับ:</label>
            <div  class="form-group" >
            <select id="member_level" name="member_level" >
  <option id="member_level" name="member_level"  value="นายช่างรังวัดอาวุโส">นายช่างรังวัดอาวุโส</option>
  <option id="member_level" name="member_level" value="นายช่างรังวัดชำนาญงาน">นายช่างรังวัดชำนาญงาน</option>
  <option id="member_level" name="member_level" value="นายช่างรังวัดปฎิบัติงาน">นายช่างรังวัดปฎิบัติงาน</option>
  
</select>
          </div>
          
            <input type="submit" class="button button-green  pull-right" name="create" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

