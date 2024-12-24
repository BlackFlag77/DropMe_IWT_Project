<?php

    // Check if the "Redirect" button was clicked
    if (isset($_POST["pay1"])) {
        header('Location: paymentSuccess.php');
        exit(); // Make sure to exit after the redirection
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/PaymentDetails.css">
    <script type="text/javascript" src="js/Payment.js"></script>
   
</head>
<body>
    
    <div class="container">
        <div class="card-container">

        </div>
        <form method="post" action="submitAddDetails.php" onsubmit="return validatePaymentForm();">
            <div class="title">
                <h2>Payment Details</h2>
            </div>
            
            <div class="inputText">
                <label for="cardNumber">Card Number</label>
                <input type="text" name="CardNumber" id="cardNumber" maxlength="20" class="card_number" placeholder="1111-2222-3333-4444" pattern="[0-9]{16}" title="Please enter a valid 16-digit credit card number" required>
               <!-- <input type="text" id="creditCard" name="creditCard" pattern="\d{4}-\d{4}-\d{4}-\d{4}" title="Please enter a valid credit card number in the format XXXX-XXXX-XXXX-XXXX" required>-->
            </div>

            <div class="inputText">
                <label for="cardHolder">Card Holder</label>
                <input type="text" name="CardHolder" id="cardHolder" maxlength="20" class="card_Holder" placeholder="Saman Perera"  pattern="[a-zA-Z]+[ ][a-zA-Z]+" title="Please enter Card Holder Name" required>
            </div>

            <div class="flexbox">
                <div class="inputText">
                <label>Expiration Month</label>
                <select class="month" name="Ex_month" id="expiration_month" title="Please select an Expiration Month" required>
                    <option value="" selected disabled>Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="inputText">
                <label>Expiration Year</label>

                <select class="year" name="Ex_year" id="expiration_year" title="Please select an Expiration Year" required>
                    <option value="" selected disabled>Year</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    
                </select>
            </div>

            

       
                
            
        </div>

            <div class="inputText">
                <label>CVV</label>
                <input type="text" name="CVV" maxlength="4" id="CVV" class="cvv" placeholder="111" pattern="[0-9]{3}" title="Please enter a valid 3-digit CVV number" required>
            </div>

            <div class="center-button">
                <input type="submit" value="Pay" name="pay1" class="submitBtn">
            </div>
            
            
        </form>
    </div>
</body>
</html>