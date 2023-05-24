<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Quick Express</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <br>
    <br>
    <div class="col-md-12 text-center">
      <img src="https://r1.hiclipart.com/path/919/303/740/m67c239fkkj5ugkjs4bb8p32e0.png?dl=1" style="height: 200px; width: 220px" alt="">
      <h1>Parcel Tracking Quick Express</h1>
    </div>
    <form action="index.php" method="POST">
      <div class="col-md-12 text-center">
        <div class="mb-3">
          <label for="id" class="form-label">Please insert the tracking number of your parcel:</label>
          <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <button type="submit" class="btn btn-primary">Track My Parcel</button>
      </div>
    </form>
  </div>

  <?php

  if (isset($_POST['id']) && filter_var($_POST['id'])) {

    require "conn.php";

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Get the ID from the form input
    $id = $_POST['id'];
    // Query the database using the ID
    $sql = "SELECT id, status, price, weight, parcel_from, parcel_to FROM parcel WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
      // Loop through the results and output the data
      while ($row = mysqli_fetch_array($result)) {

  ?>
        <div class="container">
          <article class="card">
            <div class="card-body">
              <h6>Tracking Result For : <?php echo "$row[0]" ?></h6>
              <article class="card">
                <div class="card-body row">
                  <div class="col"> <strong>Parcel From:</strong> <br><?php echo "$row[4]" ?></div>
                  <div class="col"> <strong>Parcel To:</strong> <br> <?php echo "$row[5]" ?> </div>
                  <div class="col"> <strong>Weight:</strong> <br> <?php echo "$row[3]" ?> </div>
                  <div class="col"> <strong>Price:</strong> <br> <?php echo "$row[2]" ?> </div>
                </div>
              </article>
              <div class="container">
                <strong>Status :</strong>
                <div class="track">
                  <?php
                  $status_parcel = $row[1];
                  if ($status_parcel == "Picked up by courier") {
                  ?>
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Picked up by courier</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Arrived Sorting Center </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Out For Delivery </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text"> Delivered </span> </div>

                  <?php
                  }
                  ?>
                  <?php
                  $status_parcel = $row[1];
                  if ($status_parcel == "Arrived Sorting Center") {
                  ?>
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Picked up by courier</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Arrived Sorting Center </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Out For Delivery </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text"> Delivered </span> </div>
                  <?php
                  }
                  ?>
                  <?php
                  $status_parcel = $row[1];
                  if ($status_parcel == "Out For Delivery") {
                  ?>
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Picked up by courier</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Arrived Sorting Center </span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Out For Delivery </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text"> Delivered </span> </div>
                  <?php
                  }
                  ?>
                  <?php
                  $status_parcel = $row[1];
                  if ($status_parcel == "Delivered") {
                  ?>
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Picked up by courier</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Arrived Sorting Center </span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Out For Delivery </span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text"> Delivered </span> </div>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </article>
        </div>
  <?php
      }
    } else {

      if (!filter_var($_POST['id'], FILTER_VALIDATE_INT)) {
        echo "<div class='container'>";
        echo "  <div class='col-md-12 text-center'>
                  <h4>Please input number only</h4>
                </div>";
        echo "</div>";
      } else {
        echo "<div class='container'>";
        echo "  <div class='col-md-12 text-center'>
                <h4>No result found</h4>
              </div>";
        echo "</div>";
      }
    }

    // Close the database connection
    mysqli_close($conn);
  }

  ?>
</body>

</html>