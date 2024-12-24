function showAlert(event) {
            event.preventDefault();
            var ticketNumber = document.querySelector('input[name="ticketNumber"]').value;
            var routeNumber = document.querySelector('input[name="routeNumber"]').value;
            var ticketHolderName = document.querySelector('input[name="ticketHolderName"]').value;

            alert("Ticket Number: " + ticketNumber +
                  "\nRoute Number: " + routeNumber +
                  "\nTicket Holder's Name: " + ticketHolderName)
        };                 