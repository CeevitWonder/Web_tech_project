<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Manipulate</title>
    <link rel="stylesheet" href="../layer/layout.css">
</head>
<body>
<?php
session_start();

if ($_SESSION['roles'] === 'manager') {

    echo '<table>
    <tr>

    
    <td>
    <h2>Create Task</h2>
    <form method="POST" action="../controller/manager_dashpro.php">
    Task Name: <input type="text" name="taskName" required><br>
    Assign To: <input type="text" name="assignedTo" required><br>
    <input type="submit" name="createTask" value="Create Task">
    </form>
    </td>

    
    <td>
    <h2>Edit Task</h2>
    <form method="POST" action="../controller/manager_dashpro.php">
    Task Name: <input type="text" name="taskName" required><br>
    New Task Name: <input type="text" name="newTaskName" required><br>
    Assign To: <input type="text" name="assignedTo" required><br>
    <input type="submit" name="editTask" value="Edit Task">
    </form>
    </td>

    
    <td>
    <h2>Delete Task</h2>
    <form method="POST" action="../controller/manager_dashpro.php">
    Task Name: <input type="text" name="taskName" required><br>
    <input type="submit" name="deleteTask" value="Delete Task">
    </form>
    </td>

    </tr>
    </table>';

    echo '<td>';
        include '../controller/assignedtasks.php';
    echo '</td>';
    echo '<br>';
    echo '<br>';

    echo '<td>';
        include '../controller/availablestaff.php';
    echo '</td>';
    echo '<br>';
    echo '<br>';

    echo '<a href="../view/manager_dash.php">Dashboard</a><br>';
} else {
    echo 'Access denied. Please log in with a valid role.';
}
?>
</body>
</html>