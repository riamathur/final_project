<?php include 'header.php' ?>

<h1>Edit Task</h1>

<?php $array = get_object_vars($data);?>

<form action="index.php?page=tasks&action=store&id=<?php echo $array['id']?>" method="post">

    Create Date: <input type="text" name="createddate" value="<?php echo $array['createddate']?>"><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $array['duedate']?>"><br>

    Message: <input type="text" name="message" value="<?php echo $array['message']?>"><br>
    
    Is Done?: <input type="text" name="isdone" value="<?php echo $array['isdone']?>"><br>
    <input type="submit" value="Update">
</form>


<?php include 'footer.php' ?>