<?php
$booking_id = $_GET['bid'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <style>
        body{
            font-family: Arial;
            background: linear-gradient(135deg,#667eea,#764ba2);
            text-align: center;
            padding-top: 80px;
        }
        .box{
            background: white;
            width: 420px;
            margin: auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        .pay{
            margin: 12px 0;
            padding: 12px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            color: white;
        }
        .gpay{background:#1a73e8;}
        .phonepe{background:#5f259f;}
        .upi{background:#0f9d58;}
        .netbank{background:#ff7043;}
    </style>
</head>
<body>

<div class="box">
    <h2>💳 Payment Page</h2>
    <p>Booking ID: <b><?php echo $booking_id; ?></b></p>

    <form action="payment_success.php" method="post">
        <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">

        <button class="pay gpay" name="method" value="GPay">Pay with GPay</button>
        <button class="pay phonepe" name="method" value="PhonePe">Pay with PhonePe</button>
        <button class="pay upi" name="method" value="UPI">Pay with UPI</button>
        <button class="pay netbank" name="method" value="Net Banking">Net Banking</button>
    </form>
</div>

</body>
</html>
