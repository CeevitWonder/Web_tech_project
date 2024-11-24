<?php
session_start();

if ($_SESSION['roles'] === 'manager') {
    include("../Model/mydb.php");

    $myDB = new myDB();
    $conn = $myDB->openCon();
    $email = $_POST['email'];
    $result = $myDB->searchUser($conn, "users", $email);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $email = $row["email"];
            $username = $row["username"];
            $roles = $row["roles"];

            echo "name: " . $name . ", email: " . $email . ", username: " . $username . ", roles: " . $roles . "<br>";
        }
    } else {
        echo "no data found";
    }

    $myDB->closeCon($conn);
} else {
    echo 'Access denied. Please log in with a valid role.';
}
?>
