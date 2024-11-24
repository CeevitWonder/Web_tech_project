<!DOCTYPE html>
<html lang="en">
<head>
      <title>Access Center</title>
</head>
<body>
<?php
    session_start();
    var_dump($_POST['roles']);
    var_dump($_SESSION['roles']);

    if (isset($_COOKIE['session_cookie'])) {
        
        $_SESSION['roles'] = $_COOKIE['session_cookie'];
                
        switch ($_SESSION['roles']) {
            case "hskeep":
                header("Location: ../view/housekeeping_dashboard.php");
                break;
            case "catering":
                header ("Location: ../view/catering_dash.php");
                break;
            case "guard":
                header ("Location: ../view/guard_dash.php");
                break;
            case "waiter":
                header ("Location: ../view/waiter_dash.php");
                break;
            case "manager":
                header ("Location: ../view/manager_dash.php");
                break;
            default:
                echo 'Unknown user role';
                break;
        }
    } else {
        echo 'Access denied. Please log in with a valid role......';
    }

//######################  NOrmal LOgin

    if (isset($_SESSION['roles'])) {
        
        switch ($_SESSION['roles']) {
            case 'hskeep':
                header("Location: ../view/housekeeping_dashboard.php");
                break;
            case 'catering':
                header ("Location: ../view/catering_dash.php");
                break;
            case 'guard':
                header ("Location: ../view/guard_dash.php");
                break;
            case 'waiter':
                header ("Location: ../view/waiter_dash.php");
                break;
            case 'manager':
                header ("Location: ../view/manager_dash.php");
                break;
            default:
                echo 'Unknown user role';
                break;
        }
    } else {
        echo 'Access denied. Please log in with a valid role......';
    }

    ?>
</body>
</html>