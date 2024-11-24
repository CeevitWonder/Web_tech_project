<!DOCTYPE html>
<script src="../js/myscript.js"></script>
<html lang="en">
<head>
    <title>Housekeeping Edit Password</title>
    <link rel="stylesheet" href="../layer/layout.css">
</head>
<body>
<?php
    session_start();

    if ($_SESSION['roles'] === 'hskeep') {
        include '../Model/mydb.php';

        $myDB = new myDB();
        $conn = $myDB->openCon();
        $email = $_SESSION['email'];
        $result = $myDB->getUserInfo($conn, 'users', $email);

        if ($result && $result->num_rows > 0) {


            echo '<h1> IF YOU COME UPDATING YOUR PROFILE THEN YOU MUST SET PASSWORD </h1>
            <form method="POST" action="../controller/house_Editpasspro.php" onsubmit="return getpassform();">
            <table>
            <tr>
                            <td>
                            New Password: <input type="password" name="newPassword" id="newPassword" onkeyup="getPassword();"><br>
                            </td>
                            <td
                                id="passwordError">
                            </td>
            </tr>
            <tr>
                            <td>
                            Confirm Password: <input type="password" name="confirmPassword" id="confirmPassword" onkeyup="getPassword();"><br>
                            </td>
                            <td
                                id="passwordError">
                            </td>
            </tr>
            <tr>
                            <td>
                            <input type="submit" name="submit" value="Update Password">
                            </td>
            </tr>
            </table>
            ';
        } else {
            echo 'Error fetching manager profile.';
        }
        $myDB->closeCon($conn);

        echo '<p><a href="../view/housekeeping_dashboard.php">Back to Dashboard</a></p>';
    } else {
        echo 'Access denied. Please log in with a valid role.';
    }
    ?>
</body>

</html>