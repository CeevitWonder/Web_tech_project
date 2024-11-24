<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guard Dashboard</title>
    <link rel="stylesheet" href="../layer/layout.css">
</head>
<body>
<?php
    session_start();

    if ($_SESSION['roles'] === 'guard') {
        echo '<h1>Welcome to the Guard Page</h1>
        <h3>Hello, ' . $_SESSION['name'] . '!</h3>
        <a href="./guard_Editpass.php">Change Password</a><br>
        <a href="./guard_Editprof.php">Update Profile</a><br>';       

        
        echo '<table>
              <tr>';

        // Assigned Tasks
        echo '<td>';
        include '../controller/guard_dashpro.php';
        echo '</td>';

        echo '</tr>';
        echo '</table>';

        echo '<form method="POST" action="../controller/guard_dashpro.php">        
              <input type="submit" name="logout" value="Log Out">      
              </form>';
    } else {
        echo 'Access denied. Please log in with a valid role.';
    }
    ?>
</body>

</html>