<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register.html</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <div class="register-body">
                <h2 class="confirmation-heading">Admin Registration</h2>
                <form action="../logics/register-admin.php" method="POST">

                    <label for="username">User Name: </label>
                    <input type="text" name="username" id="username" placeholder="joe" required>

                    <label for="telphone">Phone Number:</label>
                    <input type="tel" name="telphone" id="telphone" placeholder="+255 062 815 219" required>

                    <label for="">Email:</label>
                    <input type="email" name="email" id="email" placeholder="youremail@gmail.com" required>

                    <label for="">Password:</label>
                    <input type="password" name="password" id="password" placeholder="password" required>

                    <label for="">Confirm Password:</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password" required>

                    <input type="submit" name="submit" value="Submit">


                </form>
            </div>
        </div>
    </div>
</body>
</html>