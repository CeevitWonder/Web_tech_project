<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager Page</title>
    <link rel="stylesheet" href="../layer/layout.css">
</head>

<body>
    <?php
    session_start();

    if ($_SESSION['roles'] === 'manager') {
        echo '<h1>Welcome to the Manager Page</h1>
        <h3>Hello, ' . $_SESSION['name'] . '!</h3>
        <a href="./taskManipulate.php">Task Manipulation</a><br>
        <a href="./manager_Editpass.php">Change Password</a><br>
        <a href="./manager_Editprof.php">Update Profile</a><br>
        <a href="./manager_Userdeal.php">Users</a><br>';
                
        echo '<table>
              <tr>';

        echo '<td>';
        include '../controller/assignedtasks.php';
        echo '</td>';

        echo '<td>';
        include '../controller/availablestaff.php';
        echo '</td>';

        echo '</tr>';
        echo '</table>';

        echo '<form method="POST" action="../controller/manager_dashpro.php">        
              <input type="submit" name="logout" value="Log Out">      
              </form>';
    } else {
        echo 'Access denied. Please log in with a valid role.';
    }
    ?>
</body>

</html>
