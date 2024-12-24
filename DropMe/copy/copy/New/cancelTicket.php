<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Ticket cancellation</title>
    <link rel="stylesheet" href="styles/cancel.css">
</head>
<body>
    <body style="background-color:lemonchiffon;">
    <div class="box">
        <h1>Ticket cancellation</h1>
        <form>
            <label>Reason:</label><br>

            <label for="Reason"></label>

            <select name="Reason" id="Reason">
              <option value="Change of plans">Change of plans</option>
              <option value="Found a different method">Found a different method</option>
              <option value="Incorrect ticket details">Incorrect ticket details</option>
              <option value="Delays">Delays</option>
              <option value="Other">Other</option>
            </select><br><br><br><br>


                <label>Refund policy:</label><br>
                <label>within 1 hour - Full Refund</label><br>
                <label>Before the bus - 50%</label><br>
                <label>Otherwise No Refund</label><br><br><br>
                <button type="submit" value="submit">Confirm cancellation</button>
    
            </form>
        </div>
        <script src="cancel.js" defer></script>
    </body>
    </html>
    