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
                        <div class="cr">
                            <div class="regform">
                                <form action="../logics/register-courses.php" method="POST" enctype="multipart/form-data">
                                    <label for="coursename">Course name :</label>
                                    <input type="text" name="coursename" id="coursename" >

                                    <label for="coursecode">Course code :</label>
                                    <input type="text" name="coursecode" id="coursecode">

                                    <label for="department">Department</label>
                                    <input type="text" name="department" id="department">

                                    <label for="timetableImage">Select a file:</label>
                                    <input type="file" id="timetableImage" name="timetableImage" accept="image/*" required>

                                    <input type="submit" name="submit" value="Register">
                                </form>
                            </div>
                            <div class="view-container">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Course Name</th>
                                                <th>Department</th>
                                                <th>Timetable</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Joe Nestory</td>
                                                <td>joenestry16@gmail.com</td>
                                                <td>timetable</td>
                                                <td>
                                                    <a href="" style="color:#00bf8e;">View</a>
                                                    <a href="">Edit</a>
                                                    <a href="" style="color: red">Delete</a>
                                                </td>
                                                        
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
    
        </div>
    </div>
</body>
</html>