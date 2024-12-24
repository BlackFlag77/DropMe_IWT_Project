<?php
    require 'config.php';
    
    session_start();
	
	$cardId = $_GET['id'];
	$cardNumber = $_GET['number'];
	$cardHolder = $_GET['holder'];
	$exMonth = $_GET['month'];
	$exYear = $_GET['year'];
    $cvv = $_GET['cvv'];
    
    $_SESSION['data'] = $cardId;
    
?>

<!DOCTYPE html>

<html>
	<head>
    <link rel="stylesheet" href="css/PaymentDetails.css">
    </head>

    <body>
    <div class="container">
        <div class="card-container">
    <form method="post" action="submitUpdateDetails.php" onsubmit="return validatePaymentForm();">
            <div class="title">
                <h2>Card Details</h2>
            </div>
            <div class="inputText">
                <label for="cardNumber">Card ID</label>
            <input type="text" value="<?php echo "$cardId" ?>" class="ID" name="CardID" readonly><br>
            </div>
            <div class="inputText">
                <label for="cardNumber">Card Number</label>
                <input type="text" value="<?php echo "$cardNumber" ?>" name="CardNumber" id="cardNumber" maxlength="20" class="card_number" placeholder="1111-2222-3333-4444" pattern="[0-9]{16}"><br>
            </div>

            <div class="inputText">
                <label for="cardHolder">Card Holder</label>
                <input type="text" value="<?php echo "$cardHolder" ?>" name="CardHolder" id="cardHolder" maxlength="20" class="card_Holder" pattern="[a-zA-Z]+[ ][a-zA-Z]+" placeholder="Saman Perera" required><br><br>
            </div>

            <div class="flexbox">
                <div class="inputText">
                <label>Expiration Month</label>
                <select class="month" value="<?php echo "$exMonth" ?>" name="Ex_month" id="expiration_month" required><br><br>
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

                <select class="year" value="<?php echo "$exYear" ?>" name="Ex_year" id="expiration_year" required><br><br>
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
                <input type="text" value="<?php echo "$cvv" ?>" name="CVV" maxlength="4" id="CVV" class="cvv" placeholder="1234" pattern="[0-9]{3}" required><br><br>
            </div>

            <div class="center-button">
                <input type="submit" value="Pay" name="Update Details" class="submitBtn"><br><br>
            </div>
            
            
        </form>
</body>
</html>