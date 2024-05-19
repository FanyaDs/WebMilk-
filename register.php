<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="assets/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>WebMilk - Register</title>
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
                <h3>WebMilk: Register</h3>
                <form action="register-proses.php" method="post">
                    <input type="email" name="email" placeholder="Email" required /><br />
                    <input type="text" name="username" placeholder="Username" required /><br />
                    <input type="password" name="password" placeholder="Password" required /><br />
                    <button type="submit" name="register">Register</button>
                </form>
            </div>
        </main>
        <footer>
            <h4>&copy; WebMilk - Enjoy the Creamy Goodness</h4>
        </footer>
    </center>
</body>

</html>