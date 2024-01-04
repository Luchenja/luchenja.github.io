<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <div class="register-body">
                <form action="../logics/register-lecturer.php" method="post" onsubmit="return validateForm()">


                    <label for="name">User Name: </label>
                    <input type="text" name="name" id="name" placeholder="joe">
                    <span id="error-name" class="error"></span>

                    <label for="">Email:</label>
                    <input type="email" name="email" id="email" placeholder="youremail@gmail.com" >
                    <span id="error-email" class="error"></span>

                    <label for="telphone">Phone Number:</label>
                    <input type="tel" name="telphone" id="telphone" placeholder="+255 062 815 219" >
                    <span id="error-telphone" class="error"></span>

                    <label for="">Password:</label>
                    <input type="password" name="password" id="password" placeholder="password" >
                    <span id="error-password" class="error"></span>

                    <label for="">Confirm Password:</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password" >
                    <span id="error-cpassword" class="error"></span>

                    <input type="submit" name="submit" value="Submit">


                </form>
            </div>
        </div>
    </div>

















    

    <script>
        function validateForm(){
            // reset all the previous error messages 
            document.getElementById('error-name').innerHTML='';
            document.getElementById('error-email').innerHTML='';
            document.getElementById('error-password').innerHTML='';
            document.getElementById('error-cpassword').innerHTML='';

            // get the values entered by te sers then set code to validate yhe form
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var telphone = document.getElementById('telphone').value;
            var password = document.getElementById('password').value;
            var cpassword = document.getElementById('cpassword').value;

            if(name ===''){
                document.getElementById('error-name').innerHTML='Please enter your name';
                return false;
            }
            if(email ===''){
                document.getElementById('error-email').innerHTML='Please enter your email';
                return false;
            }
            if(password ===''){
                document.getElementById('error-password').innerHTML='Please enter password';
                return false;
            }
            if(cpassword ===''){
                document.getElementById('error-cpassword').innerHTML='Please confirm password';
                return false;
            }
            if(password.length<8){
                document.getElementById('error-password').innerHTML='Password must have 8 characters';
                return false;
            }
            if(password !==cpassword){
                document.getElementById('error-cpassword').innerHTML='Password did match';
                return false;
            }
            alert('Student registered successfully');
            return true;


        }
    </script>
</body>


