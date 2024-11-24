<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manager process</title>
</head>
<body>
<?php
session_start();
include '../Model/mydb.php';

if ($_SESSION['roles'] === 'manager') {

    $myDB = new myDB();
    $conn = $myDB->openCon();

    if (isset($_POST['createTask'])) {
        $taskName = $_POST['taskName'];
        $assignedTo = $_POST['assignedTo'];

        // Use the new function to create a task
        $myDB->createTask($conn, 'tasks', $taskName, $assignedTo);
    } elseif (isset($_POST['editTask'])) {
        $taskName = $_POST['taskName'];
        $newTaskName = $_POST['newTaskName'];
        $assignedTo = $_POST['assignedTo'];

        // Use the new function to edit a task
        $myDB->editTask($conn, 'tasks', $taskName, $newTaskName, $assignedTo);
    } elseif (isset($_POST['deleteTask'])) {
        $taskName = $_POST['taskName'];

        // Use the new function to delete a task
        $myDB->deleteTask($conn, 'tasks', $taskName);
    }
    $myDB->closeCon($conn);

    if (isset($_POST['logout'])) {
        
        if(isset($_COOKIE['auth_cookie'])){
        header('Location: ./remout.php'); 
        exit();
        }

        if(!isset($_COOKIE['auth_cookie'])){
        session_destroy();
        header('Location: ../view/login.php');
        exit();
        }
    }

    
    header('Location: ../view/taskManipulate.php');
} else {
    echo 'Access denied. Please log in with a valid role.';
}
?>
</body>
</html>
