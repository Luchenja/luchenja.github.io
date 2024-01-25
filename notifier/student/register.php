<!DOCTYPE html>
<html>

<head>
  <title>Student Registration Form</title>
  <link rel="stylesheet" type="text/css" href="../css/student-styles.css">
</head>

<body>
  <div class="container">
    <h1>Student Registration Form</h1>
    <form id="registrationForm" method="post" action="../logics/register-student.php">
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>
          </div>
        
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
      
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" id="submit" name="submit">
          </div>
    </form>
    
  </div>
  <!--<script src="../js/student.js"></script>-->
</body>

</html>