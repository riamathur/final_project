<html>
<body>

<?php $array = get_object_vars($data);?>

<form action="index.php?page=tasks&action=create" method="post">
    Owner Email <input type="text" name="owneremail" value="<?php echo $array['ownerid']?>"><br>
    Create Date: <input type="text" name="createddate" value="<?php echo $array['createddate']?>"><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $array['duedate']?>"><br>
    Message: <input type="text" name="message" value="<?php echo $array['message']?>"><br>
    Is Done?: <input type="text" name="isdone" value="<?php echo $array['isdone']?>"><br>
    <input type="submit" value="Submit form">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
