<?php include 'header.php' ?>

<h1>View Task</h1>

<?php
//this is how you print something  $data contains the record that was selected on the table.

$array = get_object_vars($data);


?>

<form action="index.php?page=todos&action=button&id=<?php echo $array['id']?>" method="post">

    Create Date: <input type="text" name="createddate" value="<?php echo $array['createddate']?>" readonly><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $array['duedate']?>" readonly><br>
    Message:<textarea rows="4" cols="50" name="message"  form="usrform" readonly><?php echo $array['message']?></textarea><br>
    Is Done?: <input type="text" name="isdone" value="<?php echo $array['isdone']?>" readonly><br>
    <input type="submit" name="btSubmit" value="Edit">
    <input type="submit" name="btSubmit" value="Delete">
</form>

<?php include 'footer.php' ?>

