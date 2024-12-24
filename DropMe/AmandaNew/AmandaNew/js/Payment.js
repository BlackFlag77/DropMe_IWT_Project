//Payment Method
       
document.getElementById('paymentForm').addEventListener('submit', function (event) {
    event.preventDefault(); 
    var selectedPayment = document.querySelector('input[name="payment"]:checked');
    if (selectedPayment) {
        alert('You selected: ' + selectedPayment.id);
        
    } else {
        alert('Please select a payment method.');
    }
});

//Payment Details
function validateCardForm() {
  var cardNo = document.getElementById('cardNumber').value;
  var expireMonth = document.getElementById('expiration_month').value;
  var expireYear = document.getElementById('expiration_year').value;
  var cvv = document.getElementById('CVV').value;

  if (cardNo === '' || cardHolderName === '' || expireMonth === '' || expireYear === '' || cvv === '') {
      alert("All fields are required.");
      return false;
  }
  return true;
}

