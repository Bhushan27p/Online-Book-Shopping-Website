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
    <title>Messages Report</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom Admin CSS File Link -->
    <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<?php include 'admin_header.php'; ?>

<section class="table-container">
    <h1 class="title">Messages Report</h1>

    <table>
        <thead>
            <tr>
                <th>Message ID</th>
                <th>User ID</th>
                <th>Username</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('Query failed');
            if (mysqli_num_rows($select_messages) > 0) {
                while ($fetch_message = mysqli_fetch_assoc($select_messages)) {
                    echo "<tr>";
                    echo "<td>{$fetch_message['id']}</td>";
                    echo "<td>{$fetch_message['user_id']}</td>";
                    echo "<td>{$fetch_message['name']}</td>";
                    echo "<td>{$fetch_message['number']}</td>";
                    echo "<td>{$fetch_message['email']}</td>";
                    echo "<td>{$fetch_message['message']}</td>";
                    echo "</tr>";
                }
            } else {
                echo '<tr><td colspan="6" class="empty">No messages found!</td></tr>';
            }
            ?>
        </tbody>
    </table>
</section>

<!-- Custom Admin JS File Link -->
<script src="js/admin_script.js"></script>

</body>
</html>
