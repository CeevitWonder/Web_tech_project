<script src="../js/myscript.js"></script>
<?php

session_start();

if ($_SESSION['roles'] === 'guard') {
    if (isset($_POST['submit'])) {

        $newName = $_POST['newName'];
        $newUsername = $_POST['newUsername'];
        $newAddress = $_POST['newAddress'];
        $newPhonumber = $_POST['newPhonumber'];

            include '../Model/mydb.php';

            $myDB = new myDB();
            $conn = $myDB->openCon();

            $email = $_SESSION['email'];
            $result = $myDB->updateUser($conn,'users',$newName, $email,$newUsername,$newAddress,$newPhonumber);
            
            if ($result) {
                echo 'Profile updated successfully.';
            } else {
                echo 'Error updating profile.';
            }

            $myDB->closeCon($conn);
            header("Location: ../view/guard_Editpass.php");
        } else {
            echo 'Profile Update Failed';
    }
} else {
    echo 'Access denied. Please log in with a valid role.';
}
?>
