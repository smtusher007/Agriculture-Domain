<?php 
    include ('../control/changePasswordControl.php') ; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    <div class="header"><h2>FarmersFoodbook</h2></strong></div>
    <p><a href="../view/home-page.php" class="btn btn-warning">Back to Home</a><p>
    <center>
    <h4>Welcome, <?php echo $name ?> | <span class="green">change your password securely</span></h4>
    </center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return ChangePasswordValidation()" method="POST">
            
        <table class="table table-striped">
            <tr>
                <td><label for="currentpassword">Current Password</label></td>
                <td>: <input type="text" name="currentpassword" id="currentpassword">
                <input type="hidden" name="oldpassword" id="oldpassword" value="<?php echo $password; ?>">
                <span id="currentpasswordErr" class="red">*</span></td>
            </tr>
            <tr>
                <td><label for="newpassword">New Password</label></td>
                <td>: <input type="text" name="newpassword" id="newpassword">
                <span id="newpasswordErr" class="red">*</span></td>
            </tr>
            <tr>
                <td><label for="confirmpassword">Confirm Password</label></td>
                <td>: <input type="text" name="confirmpassword" id="confirmpassword">
                <span id="confirmpasswordErr" class="red">*</span></td>
            </tr>
                <table align="center">
            <tr>
                <td>
                    <input type="submit" class="btn-warning" name="submit" value="Change Password">
                </td>
                <td>
                    <p style="color:green;"><?php echo $successfulMessage; ?></p>
                    <p style="color:red;"><?php echo $errorMessage; ?></p>
                </td>
            </tr>
            </table>
        </table>
    </form>
 
    <?php include 'footer.php' ; ?>
    <script src="../javascript/ofos.js?v=<?php echo time(); ?>"></script>
 
</body>
</html>