<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23333'/><text x='50%25' y='50%25' text-anchor='middle' dy='.3em' font-size='50' fill='white' font-weight='bold'>M</text></svg>">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="menu">
        <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="50" fill="white" />
                <text x="50%" y="50%" text-anchor="middle" dy=".3em" font-size="50" fill="#333" font-weight="bold">M</text>
            </svg>
        </a>
        <div class="hamburger" onclick="toggleMenu()">☰</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="container">
        <h1 class="title">LOGIN PAGE</h1>
        <form class="login-form" action="login.php" method="post">
            <input type="text" name="user" placeholder="User" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Log in">
        </form>
    </div>
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> Marek Grabowski</p>
    </div>
    <script src="js/main.js" async defer></script>
</body>

</html>