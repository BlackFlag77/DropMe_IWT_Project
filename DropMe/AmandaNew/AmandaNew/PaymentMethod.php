<?php

    // Check if the "Redirect" button was clicked
    if (isset($_POST["submit1"])) {
        header('Location: paymentDetails.php');
        exit(); // Make sure to exit after the redirection
    }
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Payment Method</title>
    <link rel="stylesheet" href="css/PaymentMethod.css">
    <script type="text/javascript" src="js/Payment.js"></script>
</head>
<body>
   
    <div class="container">
        <div class="title">
            <h2>Payment</h2>
        </div>
        <form method="post" id="paymentForm">
            <br/><br/>
            <h3>Select the Payment Option</h3>
            <div class="category">
                <label for="visa" class="visaMethod">
		    
                    <div class="imgName">
			<input type="radio" name="payment" id="visa" required>
                        <div class="imgContainer visa"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="images/Visa.png" alt="">&nbsp;&nbsp;
                        </div>
                        <span class="name"><b>VISA</b></span>
                    </div>
                   
                </label>
                <label for="mastercard" class="mastercardMethod">
                    <div class="imgName">
			<input type="radio" name="payment" id="mastercard" required>
                        <div class="imgContainer mastercard">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="images/Mastercard.png" alt="">&nbsp;&nbsp;
                        </div>
                        <span class="name"><b>MASTERCARD</b></span>
                    </div>
                    
                </label>
            </div>
            <input type="submit" name="submit1" value="Submit">
            
        </form>
    </div>
    
</body>
</html>