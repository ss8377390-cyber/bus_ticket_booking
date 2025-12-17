<?php
include "db_connect.php";

$result = mysqli_query($conn, "SELECT * FROM booking_details");
?>

<!DOCTYPE html>
<html>
<head>
    <title>SmartBus – Booking Records</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6fb;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #1d2671;
        }

        .summary {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
        }

        .box {
            background: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        table {
            width: 100%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
        }

        th {
            background: #1d2671;
            color: white;
            padding: 10px;
        }

        td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #f1f1ff;
        }

        .back {
            margin-top: 20px;
            text-align: center;
        }

        .back a {
            text-decoration: none;
            color: white;
            background: #c33764;
            padding: 10px 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<h2>📋 SmartBus Booking Records</h2>

<div class="summary">
    <?php
    $countCustomers = mysqli_query($conn, "SELECT COUNT(*) AS total FROM booking_details");
    $customers = mysqli_fetch_assoc($countCustomers);

    $countMembers = mysqli_query($conn, "SELECT SUM(total_members) AS members FROM booking_details");
    $members = mysqli_fetch_assoc($countMembers);
    ?>

    <div class="box">
        <h3><?php echo $customers['total']; ?></h3>
        <p>Total Customers</p>
    </div>

    <div class="box">
        <h3><?php echo $members['members']; ?></h3>
        <p>Total Passengers</p>
    </div>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Bus No</th>
        <th>From</th>
        <th>To</th>
        <th>Date</th>
        <th>Passengers</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['booking_id']; ?></td>
        <td><?php echo $row['customer_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['bus_no']; ?></td>
        <td><?php echo $row['source_place']; ?></td>
        <td><?php echo $row['destination_place']; ?></td>
        <td><?php echo $row['journey_date']; ?></td>
        <td><?php echo $row['total_members']; ?></td>
    </tr>
    <?php } ?>
</table>

<div class="back">
    <a href="index.html">⬅ Book Another Ticket</a>
</div>

</body>
</html>
