<?php include 'header.php' ?>

    <h1>Create Task</h1>

<form action="index.php?page=tasks&action=save" method="post">

    Create Date: <input type="text" name="createddate" value=""><br>
    Due Date: <input type="text" name="duedate" value=""><br>
    Message: <textarea rows="4" cols="50" name="message" form="usrform">
    </textarea><br>

    Is Done?: <input type="text" name="isdone" value=""><br>
    <input type="submit" value="Save">
</form>


<?php include 'footer.php' ?>