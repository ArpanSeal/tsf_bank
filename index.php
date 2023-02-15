<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&family=Orbitron&family=Share+Tech+Mono&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <title>TSF Bank</title>
    <link rel = "icon" href = "img/logo.png" type = "image/x-icon">
  </head>

  <body>
    <?php include 'nav.php';?>
    <section id="bg">
      <div class="col-sm-12 col-md my-3">
        <div class="heading my-5" style="margin: 1.14rem">
          <h1 class="h1cls">Welcome to TSF Bank</h1>
        </div>

        <div class="container my-4" style="margin: 0.5rem;">
            <p class="pcls">The TSF Bank offers you the option of transferring money between accounts.  You can also check your transaction history, which includes sender and receiver names, transaction amounts, and the exact date and time. 
            </p>
            <p class="pcls">Internet banking, also known as online banking or e-banking or Net Banking is a facility offered by banks and financial institutions that allows customers to use banking services over the internet. Customers need not visit their bank's branch office to avail each and every small service.
            </p>
        </div>
        <br>

        <!-- <div class="row activity text-center my-3">
          <div class="col-md act">
            <img src="img/transfer.jpg" class="imgshp img-fluid my-3">
            <br>
            <a href="transfermoney.php"><button class="mbutton">Make a Transaction</button></a>
          </div>
          <div class="col-md act">
            <img src="img/history.jpg" class="imgshp img-fluid my-3">
            <br>
            <a href="transactionhistory.php"><button class="mbutton">Transaction History</button></a>
          </div>
        </div> -->

        <div class="secbg container text-center my-4 p-4">
          <br>
          <div class="row featurette d-flex justify-content-center align-items-center my-4">
            <div class="col-md-7">
              <h2 class="h2cls featurette-heading fw-normal lh-1">Money Transaction Section</h2>
              <p class="pcls">When you click on the below button, you will be taken to the transaction section, from where you can send money to another user. </p>
              <div class="container d-flex justify-content-center align-items-center mb-4">
                <a href="transfermoney.php"><button class="mbutton">Make a Transaction</button></a>
              </div>
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto imgshp img-fluid my-3" src="img/transfer.jpg" alt="">
            </div>
          </div>
          <br>
          <div class="row featurette d-flex justify-content-center align-items-center my-4">
            <div class="col-md-7 order-md-2">
              <h2 class="h2cls featurette-heading fw-normal lh-1">Checking Transaction History Section</h2>
              <p class="pcls">Click the below button to access your transaction history, which includes sender name, receiver name, transaction amount, and the exact time and date of the transaction.</p>
              <div class="container d-flex justify-content-center align-items-center mb-4">
                <a href="transactionhistory.php"><button class="mbutton">Transaction History</button></a>
              </div>
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto imgshp img-fluid my-3" src="img/history.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="text-center mt-5 py-2 footer">
      <p>&copy 2021. Made by <b>ARPAN SEAL</b> <br>The Sparks Foundation Web Development Internship</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
