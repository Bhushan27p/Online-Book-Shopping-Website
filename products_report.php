<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Reports</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="product-reports">
   <h1 class="title">Products Report</h1>

   <div class="table-container">
      <table>
         <thead>
            <tr>
               <th style="width: 15%;">Product ID</th>
               <th style="width: 55%;">Book Name</th>
               <th style="width: 30%;">Price</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('Query failed');
               if(mysqli_num_rows($select_products) > 0){
                  while($fetch_products = mysqli_fetch_assoc($select_products)){
            ?>
            <tr>
               <td><?php echo $fetch_products['id']; ?></td>
               <td><?php echo $fetch_products['name']; ?></td>
               <td>₹<?php echo $fetch_products['price']; ?>/-</td>
            </tr>
            <?php
                  }
               } else {
                  echo '<tr><td colspan="3" class="empty">No products added yet!</td></tr>';
               }
            ?>
         </tbody>
      </table>
   </div>
</section>

<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>
