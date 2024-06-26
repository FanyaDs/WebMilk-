<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="assets/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>WebMilk - Login</title>
</head>

<body>
    <center>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <img src="assets/logo.jpg" alt="" width="150" height="auto" />
                </div>
                <div class="menu-items">
                    <a href="index.php">Beranda</a>
                    <a href="#">Kategori</a>
                    <a href="login.php">Login</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="form-login">
                <h3>Login</h3>
                <form action="login-proses.php" method="post">
                    <input class="input" type="text" name="username" placeholder="Username" required />
                    <input class="input" type="password" name="password" placeholder="Password" required />
                    <button type="submit" class="btn_login" name="login" id="login"> Login </button>
                </form>
                <a href="register.php">Register Disini</a>
            </div>
        </main>
    </center>
    <footer>
        <center>
            <h4>&copy; WebMilk - Enjoy the Creamy Goodness</h4>
        </center>
    </footer>
</body>

</html>