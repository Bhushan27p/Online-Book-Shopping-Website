<?php
include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:login.php');
   exit();
}

// Handle date filter
$start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';

$query = "SELECT * FROM `orders`";

if (!empty($start_date) && !empty($end_date)) {
   // Convert the input dates into the format stored in the database (dd-MMM-yyyy)
   $formatted_start = date('d-M-Y', strtotime($start_date));
   $formatted_end = date('d-M-Y', strtotime($end_date));
   
   $query .= " WHERE placed_on BETWEEN '$formatted_start' AND '$formatted_end'";
}

$select_orders = mysqli_query($conn, $query) or die(mysqli_error($conn));

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders Report</title>

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   
   <!-- Custom Admin CSS -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>

<?php include 'admin_header.php'; ?>

<section class="orders">
   <h1 class="title">Orders Report</h1>

   <!-- Date Sorting Form -->
   <form action="" method="GET" class="date-filter">
      <label for="start_date">Start Date:</label>
      <input type="date" name="start_date" value="<?php echo $start_date; ?>">

      <label for="end_date">End Date:</label>
      <input type="date" name="end_date" value="<?php echo $end_date; ?>">

      <button type="submit"><i class="fas fa-search"></i> Filter</button>
   </form>

   <div class="table-container">
      <table>
         <thead>
            <tr>
               <th>Order ID</th>
               <th>User ID</th>
               <th>Customer Name</th>
               <th>Ordered Products</th>
               <th>Total Price</th>
               <th>Payment Method</th>
               <th>Payment Status</th>
               <th>Order Date</th>
            </tr>
         </thead>
         <tbody>
            <?php
               if (mysqli_num_rows($select_orders) > 0) {
                  while ($fetch_orders = mysqli_fetch_assoc($select_orders)) {
            ?>
            <tr>
               <td><?php echo $fetch_orders['id']; ?></td>
               <td><?php echo $fetch_orders['user_id']; ?></td>
               <td><?php echo $fetch_orders['name']; ?></td>
               <td><?php echo ltrim($fetch_orders['total_products'], ','); ?></td>
               <td>₹<?php echo $fetch_orders['total_price']; ?>/-</td>
               <td><?php echo $fetch_orders['method']; ?></td>
               <td><?php echo $fetch_orders['payment_status']; ?></td>
               <td><?php echo $fetch_orders['placed_on']; ?></td>
            </tr>
            <?php
                  }
               } else {
                  echo '<tr><td colspan="8" class="empty">No orders found for the selected date range!</td></tr>';
               }
            ?>
         </tbody>
      </table>
   </div>
</section>

<!-- Custom Admin JS -->
<script src="js/admin_script.js"></script>

</body>
</html>
