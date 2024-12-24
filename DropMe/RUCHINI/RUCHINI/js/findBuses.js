function validateForm() {
    var departure = document.getElementById("Departure").value;
    var destination = document.getElementById("Destination").value;
    var journeyDate = document.getElementsByName("dob")[0].value; // Use 'name' attribute
    var time = document.getElementById("Time").value;

    if (departure === "none" || destination === "none" || journeyDate === "" || time === "none") {
        alert("Please fill in all required fields.");
        return false;
    }
    
    // Additional validation or processing can be added here

    return true;
}
 