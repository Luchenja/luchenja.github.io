<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard.html</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="dashboard-container" id="dashboard">
        <div class="dashboard-small">
            <div class="dashboard-img">
                <img src="../img/profile.png" alt="profile"  id="img">
            </div>
            <div class="personal-info extra" >
                <b><a href="admin-panel.php" >Personal Information</a></b>
            </div>
            <div class="contact-saved extra" >
                <b><a href="lecturers.php">Lecturers</a></b>
            </div>
            <div class="request extra">
                <b><a href="students.php">Students</a></b>
            </div>
            <div class="request extra" >
                <b><a href="timetables.php">Timetables</a></b>
            </div>
            <div class="request extra" >
                <b><a href="courses.php">Courses</a></b>
            </div>
            <div class="request extra" >
                <b><a href="departments.php">Department</a></b>
            </div>
        </div>
        <div class="dashboard-large">
            <div class="dashboard-sub-large">
                <div class="dashboard-heading">
                    <h2 id="hoverTrigger">Home</h2>
                </div>
                <div class="heading-img">
                    <img src="../img/profile.png" alt="profile" style="height: 40px;">
                </div>
                <div class="dashboard-content">
                     <div class="uploading-form">
                        <form action="../logics/upload-timetable.php" method="POST" enctype="multipart/form-data">

                            <label for="courseID">Select Course:</label>
                            <select id="courseID" name="courseID" required>
                                <option value="1">IT</option>
                                <option value="2">COE</option>
                                <option value="2">MECHANICAL</option>
                                <!-- Add more options as needed -->
                            </select><br><br>
                            <label for="image">Select a file:</label>
                            <input type="file" id="image" name="image" accept="image/*" required>
                            <input type="submit" value="Upload Timetable"> 
                        </form>
                     </div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>