<?php include 'header.php' ?>

<h1>Edit Task</h1>

<?php $array = get_object_vars($data[0]);?>

<form action="index.php?page=tasks&action=store" method="post">

    Create Date: <input type="text" name="createddate" value="<?php echo $array['createddate']?>"><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $array['duedate']?>"><br>
    Message:<textarea rows="4" cols="50" name="message"  form="usrform"><?php echo $array['message']?></textarea><br>
    Is Done?: <input type="text" name="isdone" value="<?php echo $array['isdone']?>"><br>
    <input type="submit" value="Update">
</form>


<?php include 'footer.php' ?>