<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Report</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom Admin CSS File Link -->
    <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<?php include 'admin_header.php'; ?>

<section class="table-container">
    <h1 class="title">Users Report</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>User Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('Query failed');
            if (mysqli_num_rows($select_users) > 0) {
                while ($fetch_users = mysqli_fetch_assoc($select_users)) {
                    echo "<tr>";
                    echo "<td>{$fetch_users['id']}</td>";
                    echo "<td>{$fetch_users['name']}</td>";
                    echo "<td>{$fetch_users['email']}</td>";
                    echo "<td>{$fetch_users['user_type']}</td>";
                    echo "</tr>";
                }
            } else {
                echo '<tr><td colspan="4" class="empty">No users found!</td></tr>';
            }
            ?>
        </tbody>
    </table>
</section>

<!-- Custom Admin JS File Link -->
<script src="js/admin_script.js"></script>

</body>
</html>
