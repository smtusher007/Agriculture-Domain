<?php include('../control/sessioncontrol.php');
      require_once ('../model/model.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Food Items</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body>
    <div class="header">
        <h2>FarmersFoodbook</h2></strong>
    </div>
    <div class="main-body">
      <p><a href="../view/home-page.php" class="btn btn-warning">Back to Home</a>
      <p>
      <h1>ADD PRODUCT DETAILS</h1>

      <?php
        //Db connect";
        $customername = $user;
        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->ShowOrderHistory($conn,"orders",$customername);     

        //$conn->query($sql);
        echo "<table class='table table-dark'>
        <tr>
            <th>Product ID</th>
            <th>Seller Name</th>
            <th>Seller Number</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Amount to pay</th>
            <th>Status</th>
            <th>Adding Date</th>
            <th>Action</th>
        </tr>";

        if($userQuery->num_rows > 0)
        {
          while($row=$userQuery->fetch_assoc())
          { 
            $order = $row['order_id'];
            echo "<tr>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['number']. "</td>";
            echo "<td>" . $row['food_name'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['amount'] ."TK". "</td>";
            echo "<td>" . $row['payment_method']. "</td>";
            echo "<td style='color: cyan'>" . $row['status']. "</td>";
            echo "<td>" . $row['date']. "</td>";
            echo "<td> <a href='../view/user-add-cancel.php?order_id=$order' class='btn btn-danger'>Cancel</a> </td>";
            echo "</tr>";
          }
          echo "</table>";
          $conn->close();
        }
      ?>
    </div>
    <br><br><br><br><br><br>

    <?php include 'footer.php' ; ?>
</body>

</html>