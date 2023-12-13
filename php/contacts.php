<?php
require 'connect.php';

try {
    $stmt = $conn->prepare("SELECT id, first_name, last_name, email, phone_number FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .table-container {
            width: 80%;
        }

        /* Zebra striping */
        .zebra-table tbody tr:nth-child(even) {
            background: #f2f2f2;
        }

        /* Actions button styling */
        .actions-btn {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
  

<div class="table-container">
    <h2>Registered Users</h2>

    <?php if (isset($result) && !empty($result)) : ?>
        <table class="zebra-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['first_name'] ?></td>
                        <td><?= $row['last_name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                        <td><button class="actions-btn">Actions</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No results found.</p>
    <?php endif; ?>

</div>

</body>
</html>
