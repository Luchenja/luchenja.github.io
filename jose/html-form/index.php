<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 30%;
            margin-left: 35%;
            margin-top: 10%;
        }
        input{
            padding: 5px 5px 5px 5px;
        }
        body{
            background-color: aliceblue;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="register.php" method="post" onsubmit="return validateFrom()">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="Joe Nestory" >
        <span id="error-firstname" class="error"></span>

        <label for="lastname">Last name</label>
        <input type="text" name="lastname" id="lastname" placeholder="lucas">
        <span id="error-lastname" class="error"></span>
        
        <label for="phonenumber">Phone Number</label>
        <input type="tel" name="phonenumber" id="phonenumber" placeholder="+255 628 152 209">
        <span id="error-phonenumber" class="error"></span>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="youremail@gmail.com">
        <span id="error-email" class="error"></span>

        <label for="departmentname">Department</label>
        <input type="text" name="departmentname" id="departmentname" placeholder="computer">
        <span id="error-departmentname" class="error"></span>

        <input type="submit" name="submit" value="Save">

    </form>













    <script>
        function validateFrom(){
            document.getElementById('error-firstname').innerHTML="";
            document.getElementById('error-lastname').innerHTML="";
            document.getElementById('error-phonenumber').innerHTML="";
            document.getElementById('error-email').innerHTML="";
            document.getElementById('error-departmentname').innerHTML="";


            var firstname = document.getElementById('firstname').value;
            var lastname = document.getElementById('lastname').value;
            var phonenumber = document.getElementById('phonenumber').value;
            var email = document.getElementById('email').value;
            var departmentname = document.getElementById('departmentname').value;


            if( firstname ===''){
                document.getElementById("error-firstname").innerHTML="Please enter firstname";
                return false;
            }
            if( lastname ===''){
                document.getElementById("error-lastname").innerHTML="Please enter lastname";
                return false;
            }
            if( phonenumber ===''){
                document.getElementById("error-phonenumber").innerHTML="Please enter phone number";
                return false;
            }
            if( email ===''){
                document.getElementById("error-email").innerHTML="please enter email";
                return false;
            }
            if( departmentname ===''){
                document.getElementById("error-departmentname").innerHTML="please enter department name";
                return false;
            }
            alert("Form submitted successfully");
            return true
            
        }
    </script>
</body>
</html>