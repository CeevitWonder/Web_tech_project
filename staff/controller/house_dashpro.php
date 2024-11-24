<!DOCTYPE html>
<html lang="en">
<head>
    <title>Housekeeping Process</title>
</head>
<body>
<?php
session_start();
include '../Model/mydb.php';
if ($_SESSION['roles'] === 'hskeep') {

    $myDB = new myDB();
    $conn = $myDB->openCon();
    $assignedTo = $_SESSION['username'];
    $result = $myDB->getTasksForUser($conn, 'tasks', $assignedTo);

if ($result && $result->num_rows > 0) {
    echo '<h2>Tasks Assigned to ' . $assignedTo . '</h2>';
    echo '<ul>';
    
    while ($row = $result->fetch_assoc()) {
        echo '<li>';
        echo 'Task Name: ' . $row['taskName'] . ', Assigned To: ' . $row['assignedTo'];
        echo '</li>';
    }

    echo '</ul>';
} else {
    echo 'No tasks assigned';
}

// Close the connection
$myDB->closeCon($conn);

echo '<br>';
echo '<br>';
    
    if (isset($_POST['logout'])) {
        
        if(isset($_COOKIE['auth_cookie'])){
        header('Location: ./remout.php'); 
        }

        if(!isset($_COOKIE['auth_cookie'])){
        session_destroy();
        header('Location: ../view/login.php');
        exit();
        }
    }

}else {
    echo 'Access denied. Please log in with a valid role.';
}
?>

</body>
</html>