<?php include 'header.php' ?>

<h1>View Task</h1>

<?php
//this is how you print something  $data contains the record that was selected on the table.

$array = get_object_vars($data[0]);

//print_r($array);
?>

<form action="index.php?page=todos&action=button" method="post">

    Create Date: <input type="text" name="createddate" value="<?php echo $array['createddate']?>" readonly><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $array['duedate']?>" readonly><br>
    Message: <input type="text" name="message" value="<?php echo $array['message']?>" readonly><br>
    Is Done?: <input type="text" name="isdone" value="<?php echo $array['isdone']?>" readonly><br>
    <input type="submit" name="btSubmit" value="Edit">
    <input type="submit" name="btSubmit" value="Delete">
</form>

<?php include 'footer.php' ?>

