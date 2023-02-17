<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel = "icon" href = "img/logo.png" type = "image/x-icon">

    <style type="text/css">
      button.nbtn:hover{
        background-color:#2E8B57;
        color: white;
      }
      .bgtrans{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .bgtrans::before{
        content: "";
        filter: brightness(20%);
        background: url('../img/cover.jpg') no-repeat center center/cover;
        position: fixed;
        width: 100vw;
        height: 100vh;
        top: 0px;
        left: 0px;
        opacity: 0.85;
        z-index: -1;
      }
}
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'nav.php';
?>
<div class="bgtrans">
    <div class="container my-3 p-4" style="background-color: #fed2db; border-radius: 5%">
        <h1 class="mbtn">Transfer Money</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                            <thead>
                                <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($rows=mysqli_fetch_assoc($result)){
                                ?>
                                    <tr>
                                        <td class="py-2"><?php echo $rows['id'] ?></td>
                                        <td class="py-2"><?php echo $rows['name']?></td>
                                        <td class="py-2"><?php echo $rows['email']?></td>
                                        <td class="py-2"><?php echo $rows['balance']?></td>
                                        <td class="py-2"><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="nbtn btnc">Transact</button></a></td> 
                                    </tr>
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
</div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>