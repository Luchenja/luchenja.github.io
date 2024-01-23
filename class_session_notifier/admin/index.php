<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.html</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="login-container">
        <h2 class="confirmation-heading">Admin</h2>
        <div class="login-body">
            <div class="login-head">
                <div class="login-image">
                    <img src="../img/log.png" alt="person">
                </div>
            </div>
            <div class="login-content">
                <form action="../logics/register-admin.php" method="post">
                    <input type="email" name="email" autofocus required placeholder="youremail.com">
                    <input type="password" name="pass" required placeholder="your password">
                    <input type="submit" name="submit">
                </form>
                <p>Do you have an account ?</p>

                <div class="register">
                    <a href="register.php">Register</a>
                </div>
            </div>

            
        </div>
    </div>
</body>
</html>