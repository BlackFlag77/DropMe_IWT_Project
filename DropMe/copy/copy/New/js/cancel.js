document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('form');
    var reasonSelect = document.getElementById('Reason');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        var selectedReason = reasonSelect.value;
        alert('Cancellation Reason: ' + selectedReason);

        document.addEventListener("DOMContentLoaded", function() {
            // Find the form and cancel button by their IDs
            var cancelForm = document.querySelector("form");
            var cancelButton = document.querySelector("button[type='submit']");
        
            // Function to show confirmation dialog
            function confirmCancellation(event) {
                // Prevent the form from submitting automatically
                event.preventDefault();
        
                // Display a confirmation dialog
                var isConfirmed = confirm("Are you sure you want to cancel?");
        
                // If user confirms, submit the form (or redirect to the desired URL)
                if (isConfirmed) {
                    cancelForm.submit(); // This will submit the form
                    // Alternatively, you can redirect to a specific URL using:
                    // window.location.href = "https://example.com";
                }
            }
        
            // Add event listener to the cancel button
            cancelButton.addEventListener("click", confirmCancellation);

            
        });




        
        

    });
});