<?php
include 'header.php';
if (isset($_GET['id'])) {
    $tech_info = $tech_obj->view_tech($_GET['id']);
    if (isset($_POST['update_tech']) && $_GET['id'] === $_POST['id']) {
        $tech_obj->update_tech_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">รายชื่อบุคลากรทั้งหมด</a> 
        <h3>Update tech Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($tech_info['member_id'])) {
            echo $tech_info['member_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="member_name_lastname">ชื่อ:</label>
                <input type="text" name="member_name_lastname" value="<?php if (isset($tech_info['member_name_lastname'])) {
                   echo $tech_info['member_name_lastname'];
        } ?>" id="member_name_lastname" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="member_level">ระดับ:</label>
                <input type="text" class="form-control" value="<?php if (isset($tech_info['member_level'])) {
            echo $tech_info['member_level'];
        } ?>" name="member_level" id="member_level" required maxlength="50">
            </div>
           
            <input type="submit" class="btn btn-success" name="update_tech" value="บันทึก"/>
            <a href="index.php"><button type="button" class="btn btn-warning ">ย้อนกลับ </button></a> 
            
            
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

