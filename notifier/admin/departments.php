<?php include'../logics/view-departments.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- You can link your stylesheet here if needed -->
    <style>
        form{
            display: flex;
            flex-direction: column;
            margin-left: 30%;
            margin-top: 30px;
            gap: 0.5rem;
            width: 45%;
        }
        input{
            padding: 5px 5px 5px 5px;
        }
        button{
            background-color: #4CAF50;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <form id="addDepartmentForm" action="../logics/add-departments.php" method="post">
        <h1>Add Department</h1>
        <label for="department_name">Department Name:</label>
        <input type="text" id="department_name" name="department_name" required>

        <input type="submit" value="Submit" name="submit">
    </form>

    <table>
        <thead>
            <tr>
                 <th>SN</th>
                 <th>Department Name</th>
                 <th>Actions</th>
                </tr>
        </thead>
            <tbody>
                <?php
                $i=1;
                foreach($departments as $department){

                    ?>
                    <tr>
                     <td><?=$i?></td>
                     <td><?=$department['department_name']?></td>
                     <td>
                     <a href="">Edit</a>
                     <a href="" style="color: red">Delete</a>
                     </td>
                                                    
                </tr>
                    <?php
                    $i++;
                }
                ?>

            </tbody>
    </table>
    


    


</body>

</html>
