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
                    <div class="view-container">
                        <div class="view-head">
                            <h2>Lecturers</h2>
                        </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Full Name</th>
                                        <th>Phone number</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Joe Nestory</td>
                                        <td>+255 628 152 209</td>
                                        <td>joenestry16@gmail.com</td>
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
</body>
</html>