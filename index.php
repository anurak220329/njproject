<?php
include 'header.php';
$tech_list = $tech_obj->tech_list();
?>
<div class="container " > 
    <div class="row content">
        <a  href="add.php"  class="button button-purple mt-12 pull-right">เพิ่มบุคลากร</a> 
        <h3>รายชื่อนายช่าง</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ชื่อ-นามสกุลนายช่าง</th>
                    <th>ระดับ</th>
                   
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($tech_list->num_rows > 0) {
  while ($row = $tech_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["member_name_lastname"] ?></td>
                <td><?php echo $row["member_level"] ?></td>
               
                <td class="text-right">
                    <a  href="<?php echo 'delete.php?id=' . $row["member_id"] ?>" class="button button-red">Delete</a>  
                    <a  href="<?php echo 'update.php?id=' . $row["member_id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read.php?id=' . $row["member_id"] ?>" class="button button-green">View</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

