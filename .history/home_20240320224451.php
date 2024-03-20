<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <!-- Bootstrap core CSS -->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="assets/css/nav.css">

</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Website Title</h1>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><?=htmlspecialchars($password, ENT_QUOTES)?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?=htmlspecialchars($email, ENT_QUOTES)?></td>
                </tr>
            </table>
        </div>
</body>
</html>