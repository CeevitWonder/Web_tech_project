<?php

$myDB = new myDB();
$conobj = $myDB->openCon();

echo '<h2>Available Staff</h2>';

$tablename = 'users';
$users = $myDB->getAllUsers($conobj, $tablename);

$staffByRole = [];

while ($user = $users->fetch_assoc()) {
    $role = $user['roles'];

    if ($role === 'hskeep' || $role === 'catering' || $role === 'waiter' || $role === 'guard') {
        $staffByRole[$role][] = $user['name'];
    }
}

echo '<table>';
echo '<tr>';

foreach ($staffByRole as $role => $staffMembers) {
    echo '<td style="vertical-align: top; padding-right: 20px;">';
    echo "<h2>$role</h2>";

    if (!empty($staffMembers)) {
        echo '<ul>';
        foreach ($staffMembers as $staffMember) {
            echo "<li>$staffMember</li>";
        }
        echo '</ul>';
    } else {
        echo 'No staff members available for this role.';
    }

    echo '</td>';
}

echo '</tr>';
echo '</table>';

$myDB->closeCon($conobj);
?>
