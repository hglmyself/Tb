<?php
/**
 * Created by PhpStorm.
 * User: Lover
 * Date: 2016/6/22
 * Time: 16:14
 */
?>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <?php
    if(isset($_GET['user_id'])){
        echo $_GET['user_id'];
    }?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
</div>
<div class="modal-body">
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
</div>
<div class="modal-footer">
    <a href="users.php" aria-hidden="true">Cancel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <a href="admin_function/deleteUser.php?user_id=<?=$_GET['user_id']?>" data-toggle="modal">Delete</a>
</div>
</div>