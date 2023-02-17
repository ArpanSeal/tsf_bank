<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel = "icon" href = "img/logo.png" type = "image/x-icon">
    <style>
        .bghis{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .bghis::before{
        content: "";
        filter: brightness(20%);
        background: url('./img/historybg.jpg') no-repeat center center/cover;
        position: fixed;
        width: 100vw;
        height: 100vh;
        top: 0px;
        left: 0px;
        opacity: 0.85;
        z-index: -1;
      }
    </style>
</head>

<body>

<?php
  include 'nav.php';
?>
<div class="bghis">
	<div class="container my-3 p-4" style="background-color: #d5ffff; border-radius: 10%">
        <h1 class="mbtn">Transaction History</h1>
        
        <br>
        <div class="row">
        <div class="col">
        <div class="table-responsive-sm">
            <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include 'config.php';

                    $sql ="select * from transaction";

                    $query =mysqli_query($conn, $sql);

                    while($rows = mysqli_fetch_assoc($query))
                    {
                ?>

                    <tr>
                    <td class="py-2"><?php echo $rows['sno']; ?></td>
                    <td class="py-2"><?php echo $rows['sender']; ?></td>
                    <td class="py-2"><?php echo $rows['receiver']; ?></td>
                    <td class="py-2"><?php echo $rows['balance']; ?> </td>
                    <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                        
                <?php
                    }

                ?>
                </tbody>
            </table>

        </div>
        </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>