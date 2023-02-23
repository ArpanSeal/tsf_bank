<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);

    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    } else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    } else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {

        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);

        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">

    <style type="text/css">
        button.nbtn:hover {
            background-color: #2E8B57;
            transform: scale(1.1);
            color: white;
        }

        .bgtrans {
            margin-bottom: 0 !important;
            border: 0 !important;
            top: 0px;
        }

        .bgtrans::before {
            content: "";
            filter: brightness(20%);
            background: url('./img/cover.jpg') no-repeat center center/cover;
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

    <div class="bghis container my-3 p-4" style="background-color: #fed2db; border-radius: 5%">
        <h1 class="mbtn">Transaction</h1>
        <?php
        include 'config.php';
        $sid = $_GET['id'];
        $sql = "SELECT * FROM  users where id=$sid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>

        <div class="bgtrans">
            <div class="container my-3">
                <br>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                            <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2"><?php echo $rows['id'] ?></td>
                                        <td class="py-2"><?php echo $rows['name'] ?></td>
                                        <td class="py-2"><?php echo $rows['email'] ?></td>
                                        <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <form method="post" name="tcredit" class="tabletext"><br>
                <label>Transfer To:</label>
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                    include 'config.php';
                    $sid = $_GET['id'];
                    $sql = "SELECT * FROM users where id!=$sid";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        echo "Error " . $sql . "<br>" . mysqli_error($conn);
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <option class="table" value="<?php echo $rows['id']; ?>">

                            <?php echo $rows['name']; ?> (Balance:
                            <?php echo $rows['balance']; ?> )

                        </option>
                    <?php
                    }
                    ?>
                </select>
                <div>
                    <br>
                    <br>
                    <label>Amount:</label>
                    <input type="number" class="form-control" name="amount" required>
                    <br><br>
                    <div class="text-center">
                        <button class="nbtn btnc mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
                    </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>