<?php 
    include('../control/sessioncontrol.php');
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
    <div class="header"><h2>FarmersFoodbook</h2></strong></div>
    <div class="main-body">
        <p><a href="../view/home-page.php" class="btn btn-warning">Back to Home</a><p>
        <p>
        <h1>ADD FOOD ITEM FROM LIST</h1>
        <p>Click here to <a href="../control/logout.php" class="link-hvr">Logout</a></p>

        <?php
        //Db connect";
        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->ShowItem($conn,"foodlist");     

        //$conn->query($sql);
        echo "<table class='table'>
        <tr>
            <th>ID</th>
            <th>Food Name</th>
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
            echo "<td>" . $row['foodname'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price']."TK". "</td>";
            echo "<td> <img src='../resources/food_img/$img' width='50'></td>";
            echo "<td> <a href='../view/create-add.php?food_id=$id' class='btn btn-success'>ADD</a> </td>";
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