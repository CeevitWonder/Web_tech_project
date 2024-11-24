<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager User Dealing</title>
    <link rel="stylesheet" href="../layer/layout.css">
</head>

<body>
<script src="../js/myscript.js"></script>
<?php
session_start();
if ($_SESSION['roles'] === 'manager') {
echo"<h1>Search User :</h1><br>";
echo'<input type="text" id="email" onkeyup="fetchUsers()" />';
echo'<p id="print"></p>';

echo'<h2>Delete User</h2>
<form method="POST" action="../controller/manager_Deleteuserpro.php">
User Email: <input type="text" name="email" required><br>
<input type="submit" name="deleteUser" value="Delete User">';

echo '<p><a href="../view/manager_dash.php">Back to Manager Dashboard</a></p>';
    }else {
    echo 'Access denied. Please log in with a valid role.';
}
?>

</body>

</html>
