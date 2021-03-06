<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Ticket.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="center">
      <div class="main-div">
        <img
          src="../../../res/images/Lingala Express (1).png"
          alt=""
          class="express"
        />
        <section class="sect-1">
          <div class="div-1">
            <h3>Name of passenger</h3>
            <h3><?php echo $_SESSION['full_name']?></h3>
          </div>
          <div class="div-2">
            <h3>Class</h3>
            <h3>First Class</h3>
          </div>
          <div class="div-2">
            <h3>From</h3>
            <h3><?php echo $_SESSION['location']?></h3>
          </div>
          <div class="div-3">
            <h3>Seat Number</h3>
            <h3>15</h3>
          </div>
          <div class="div-4">
            <h3>
              To <br />
              YAOUNDE
            </h3>
          </div>
          <div class="div-3">
            <h3>Amount Paid</h3>
            <h3>5000CFA</h3>
          </div>
          <div class="div-41">
            <h3>Date <br /><?php echo date("Y-m-d") ?></h3>
          </div>
          <div class="div-5">
            <h3>
              Time <br />
              <?php echo date("h:i:sa") ?>
            </h3>
          </div>
          <img src="../../../res/images/Picture-111.png" alt="" />
        </section>
        <p></p>
        <section class="sect-2">
          <div class="div-1">
            <h3>Name of passenger <br /><?php echo $_SESSION['user_name']?></h3>
          </div>
          <div class="div-2">
            <h3>Class <br />First Class</h3>
          </div>
          <div class="div-2">
            <h3>From <br /><?php echo $_SESSION['location']?></h3>
          </div>
          <div class="div-4">
            <h3>
              To <br />
              YAOUNDE
            </h3>
          </div>
          <div class="div-4">
            <h3>
              Date <br />
              May 15
            </h3>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>
