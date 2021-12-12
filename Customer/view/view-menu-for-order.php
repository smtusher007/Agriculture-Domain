<?php 
    include('../control/sessioncontrol.php');
    require_once ('../model/model.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oder product lists</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="header">
        <h2>Farmer FoodShop</h2></strong>
    </div>
    <div class="main-body">
        <p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a>
        <p>
        <h1>ORDER ITEM FROM LIST</h1>
        <p>Click here to <a href="../control/logout.php" class="link-hvr">Logout</a></p>

        <?php
        //Db connect";
        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->ShowItem($conn,"productlist");     

        //$conn->query($sql);
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>product Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>";

        if($userQuery->num_rows > 0)
        {
          while($row=$userQuery->fetch_assoc())
          { 
            $id = $row['id'];
            $img = $row['image'];
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['productname'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price']. "</td>";
            echo "<td> <img src='../resources/food_img/$img' width='150'></td>";
            echo "<td> <a href='../view/create-order.php?product_id=$id' class='link-hvr btn'>ORDER</a> </td>";
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