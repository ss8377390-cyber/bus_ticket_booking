<?php
include "db_connect.php";

$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$bus_no = $_POST['bus_no'];
$source_place = $_POST['source_place'];
$destination_place = $_POST['destination_place'];
$journey_date = $_POST['journey_date'];
$total_members = $_POST['total_members'];

$sql = "INSERT INTO booking_details 
(customer_name, email, bus_no, source_place, destination_place, journey_date, total_members)
VALUES 
('$customer_name','$email','$bus_no','$source_place','$destination_place','$journey_date','$total_members')";

if (mysqli_query($conn, $sql)) {
    $booking_id = mysqli_insert_id($conn);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Booking Success</title>
        <style>
            body{
                font-family: Arial;
                background: linear-gradient(120deg,#4facfe,#00f2fe);
                text-align: center;
                padding-top: 100px;
            }
            .card{
                background: white;
                width: 400px;
                margin: auto;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            }
            a{
                display: inline-block;
                margin-top: 15px;
                padding: 10px 20px;
                background: #4facfe;
                color: white;
                text-decoration: none;
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h2>🎉 Ticket Booked Successfully</h2>
            <p><b>Booking ID:</b> <?php echo $booking_id; ?></p>
            <a href="payment.php?bid=<?php echo $booking_id; ?>">Proceed to Payment</a><br>
            <a href="view.php">View Bookings</a>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "Error : " . mysqli_error($conn);
}
?>
