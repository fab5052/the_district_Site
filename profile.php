<?php

require_once('header.php');


?>

<?php 
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

?>
<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'Afpa1234';
$DATABASE_NAME = 'the_district';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $conn->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>


<div class="parallax">

<main class="main-content h-100 top-40">


  <h1 class="p-4">
    <i class="neon-red">Votre</i>
    <i class="neon-blue">compte</i>
  </h1>



<div class="  container-fluid  col-md-6 d-block justify-content-center align-items-center mt-40">

<h2>Nous sommes ravies de vous revoir !</h2>
<p>Détails:</p>
<fieldset>
        <table>
            <tr>
                <td>Nom d'utilisateur:</td>
                <td><?= isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : '' ?></td>
            </tr>
            <tr>
                <td>Mot de passe:</td>
                <td><?= isset($password) ? htmlspecialchars($password) : '' ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= isset($email) ? htmlspecialchars($email) : '' ?></td>
            </tr>
        </table>
    
    </fieldset>
</div>

</main>
</div>

<?php

require_once('footer.php');


?>