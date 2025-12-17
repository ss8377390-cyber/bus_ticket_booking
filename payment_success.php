<?php
$booking_id = $_POST['booking_id'];
$method = $_POST['method'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Success</title>
    <style>
        body{
            font-family: Arial;
            background: linear-gradient(120deg,#56ab2f,#a8e063);
            text-align: center;
            padding-top: 120px;
        }
        .card{
            background: white;
            width: 380px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        a{
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #56ab2f;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>✅ Payment Successful</h2>
    <p>Booking ID: <b><?php echo $booking_id; ?></b></p>
    <p>Payment Method: <b><?php echo $method; ?></b></p>
    <p>Thank you for booking 🚍</p>
    <a href="view.php">View Bookings</a>
</div>

</body>
</html>
