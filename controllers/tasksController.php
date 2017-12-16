<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        session_start();
        $record = todos::findTasksbyID($_SESSION['userID']);


      //  print_r($_SESSION['userID']);

       self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        session_start();
        $records = todos::findTasksbyID($_SESSION['userID']);

        /*session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        */

        $records ?  self::getTemplate('all_tasks', $records) : self::getTemplate('create_task');


    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        self::getTemplate('create_task');
    }

    //this is the function to view edit record form
    public static function edit()
    {

        session_start();
        $record = todos::findTasksbyID($_SESSION['userID']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {
        session_start();
        $task = new todo();
        $task->id = $_SESSION['userID'];
        $task->owneremail = $_SESSION['email'];
        $task->ownerid = $_SESSION['userID'];
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];
        $task->save();

       // print_r($task);

         header("Location: index.php?page=todos&action=all");
    }

    public static function save() {
        session_start();
        $task = new todo();
        $task->owneremail = $_SESSION['email'];
        $task->ownerid = $_SESSION['userID'];
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];



        $task->save();
        header("Location: index.php?page=todos&action=all");

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_SESSION['id']);
        $record->delete();


    }
    public static function button()
    {

        if($_POST['btSubmit']=="Edit")
        {
            self::edit();
        }
        elseif ($_POST['btSubmit']=="Delete")
        {
            self::delete();
        }

    }

}