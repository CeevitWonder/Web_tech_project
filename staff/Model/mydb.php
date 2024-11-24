<?php

class myDB
{
    function openCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $dbname = "staffs";
        $conn = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
        return $conn;
    }

    function insertUser($conn,$tablename, $name, $email, $username, $password, $gender, $address, $dob, $roles, $phonumber)
    {
        $sql = "INSERT INTO $tablename (name, email, username, password, gender, address, dob, roles, phonumber) VALUES ('$name', '$email', '$username', '$password', '$gender', '$address', '$dob', '$roles', '$phonumber')";
        $result = $conn->query($sql);
        return $result;
    }

    function checkUser($conn,$tablename, $username, $password)
    {
        $sql = "SELECT * FROM $tablename WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        return $result;
    }

    function getUserInfo($conn,$tablename, $email)
    {
        $sql = "SELECT * FROM $tablename WHERE email='$email'";
        $result = $conn->query($sql);
        return $result;
    }

    function getAllUsers($conn,$tablename)
    {
        $sql = "SELECT * FROM $tablename";
        $result = $conn->query($sql);
        return $result;
    }

    function updateUser($conn,$tablename, $name, $email, $username,$address, $phonumber)
    {
        $sql = "UPDATE $tablename SET name='$name' WHERE email = '$email'";
        $result = $conn->query($sql);
        "UPDATE $tablename SET username='$username' WHERE email = '$email'";
        $result = $conn->query($sql);
        "UPDATE $tablename SET address='$address' WHERE email = '$email'";
        $result = $conn->query($sql);
        "UPDATE $tablename SET phonumber='$phonumber' WHERE email = '$email'";
        $result = $conn->query($sql);
        return $result;
    }

    function updatePass($conn,$tablename, $email, $password)
    {
        $sql = "UPDATE $tablename SET password='$password' WHERE email = '$email'";
        $result = $conn->query($sql);
        return $result;
    }

    function deleteUser($conn,$tablename, $email)
    {
        $sql = "DELETE FROM $tablename WHERE email = '$email'";
        $result = $conn->query($sql);
        return $result;
    }

    function searchUser($conn,$tablename, $email)
    {
        $sql = "SELECT * FROM $tablename WHERE email = '$email'";
        
        $result = $conn->query($sql);
        return $result;
    }

    function checkUserExist($conn, $tablename, $email, $username)
    {
        $sql = "SELECT * FROM $tablename WHERE email = '$email' OR username = '$username'";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function createTask($conn, $tablename, $taskName, $assignedTo)
    {
        $sql = "INSERT INTO $tablename (taskName, assignedTo) VALUES ('$taskName', '$assignedTo')";
        $result = $conn->query($sql);
        return $result;
    }

    function editTask($conn, $tablename, $taskName, $newTaskName, $assignedTo)
    {
        $sql = "UPDATE $tablename SET taskName='$newTaskName', assignedTo='$assignedTo' WHERE taskName = '$taskName'";
        $result = $conn->query($sql);
        return $result;
    }

    function deleteTask($conn, $tablename, $taskName)
    {
        $sql = "DELETE FROM $tablename WHERE taskName = '$taskName'";
        $result = $conn->query($sql);
        return $result;
    }

    function getAllTasks($conn, $tablename)
    {
        $sql = "SELECT * FROM $tablename";
        $result = $conn->query($sql);
        return $result;
    }

    function getTasksForUser($conn, $tablename, $assignedTo)
    {
        $sql = "SELECT * FROM $tablename WHERE assignedTo = '$assignedTo'";
        $result = $conn->query($sql);
        return $result;
    }

    function closeCon($conn){
        return $conn->close();
    }
}

?>
