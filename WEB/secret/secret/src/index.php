
<?php

    $flag = "47urkr347if{secret_key_is_hidden}";
  if (isset($_POST['secret_key'])) {
    $secret_key = $_POST['secret_key'];
    if ($secret_key == "789798867542432609") {
      echo "congrats you found me \ (•◡•) / ";
      echo "<br>";
      echo $flag;
    }
    else{
      echo "sorry try again huhu（◞‸◟）";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://thumbs.dreamstime.com/b/top-secret-stamp-red-grunge-seal-top-secret-stamp-red-grunge-seal-rubber-stamp-isolated-white-background-111503146.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <!-- if (isset($_POST['secret_key'])) {
                $secret_key = $_POST['secret_key'];
                if ($secret_key == "789798867542432609") {
                    echo "congrats you found me \ (•◡•) / ";
                    echo "<br>";
                    echo $flag;
                }
                else{
                    echo "sorry try again huhu（◞‸◟）";
                }
            } -->
            <form class="px-md-2" method="post">

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Enter the secret key</label>
                <input type="text" id="secret_key" name="secret_key" class="form-control" />
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>