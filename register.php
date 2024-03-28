<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'Afpa1234';
$DATABASE_NAME = 'the_district';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// W


// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}

if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    exit('Username is not valid!');
}


if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}


// We need to check if the account with that username exists.
if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
		header('Location: ../register.php');
	} else {

// Username doesn't exists, insert new account   //if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email, activation_code) VALUES (?, ?, ?, ?)')) {
if ($stmt = $conn->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {	
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
	// $uniqid = uniqid();
   // $stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $uniqid);
	$stmt->execute();
/*$from  = 'noreply@localhost';
$subject = 'Account Activation Required';
$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
// Update the activation variable below
$activate_link = 'http://localhost/the_district/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
$message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
mail($_POST['email'], $subject, $message, $headers);
echo 'Please check your email to activate your account!';*/

	echo 'You have successfully registered! You can now login!';
	header('Location: ../login.php');
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all three fields.
	echo 'Could not prepare statement!';

}
}
$stmt->close();
} else {
// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
echo 'Could not prepare statement!';
}
$conn->close();

