<?php include('../control/sessioncontrol.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
	<div class="header"><h2>FarmersFoodbook</h2></strong></div>
	<a href="../view/home-page.php" class="btn btn-warning">Home</a>
    	<center>
    		<div>
     <h3 style="color:#D2691E;">Apply for products</h3>
    </div>
    <br>
      <form method="post" action="../control/booking-control.php">
 <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" name="productsname" placeholder="Products Name">
    </div>    
 </div>
 <br>
  <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" name="totalweight" placeholder="Total Weight">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="number" class="form-control" name="phone" placeholder="Phone">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="date" class="form-control" name="pdate"placeholder="pDate">
    </div>    
 </div>
 <br>
 <div class="container">
 		<div class="form-group">
    <input type="text" class="form-control" name="message" placeholder="Message">
    </div>    
 </div>
 <div>
 	<input type="submit" name="submit" class="btn btn-danger" value="SUBMIT">
 </div>

<center>
<?php include 'footer.php' ; ?>
</center>
</body>
</html>