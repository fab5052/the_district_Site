<?php


// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

?>

<?php

//don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $conn->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
    

?>

<div class="content">
    <h2>Profile Page</h2>
    <div>
        <p>Your account details are below:</p>
        <table>
            <tr>
                <td>Username:</td>
                <td><?= isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : '' ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><?= isset($password) ? htmlspecialchars($password) : '' ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= isset($email) ? htmlspecialchars($email) : '' ?></td>
            </tr>
        </table>
    </div>
</div>