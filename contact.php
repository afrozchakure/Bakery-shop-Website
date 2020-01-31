<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="js/script.js">
  </script>
  <title>Artisan's bakery</title>


</head>

<body>

  <!-- Navigation Bar -->
  <?php include 'menu.php' ?>

  <div class="container">
    <div class="jumbotron">
      <h1>Artisan's Bakery</h1>
      <p>Your one stop solution to daily bread and coffee.</p>
    </div>
    <!-- <p>This is some text.</p>
        <p>This is another text.</p> -->

    <!-- About Us -->
    <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Contact Us</h2>
    </div>
      <center><p>We Love our Fans</p></center>
    <div class='w-50 m-auto'>
      <form name="myForm" action="userinfo.php" onsubmit="return(validate());" method="post">
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="User" id="" class="form-control" placeholder="">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
          <label for="">Email Id</label>
          <input type="text" name="Email" id="" class="form-control" placeholder="">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
          <label for="">Mobile</label>
          <input type="text" name="Mobile" id="" class="form-control" placeholder="">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group">
          <label for="">Comments</label>
          <textarea name="Comments" id="" class="form-control"></textarea>
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <button type="submit" class="btn btn-success" action='userinfo.php'>Submit</button>
      </form>
    </div>
  </section>


    <footer>
      <p class="p-3 bg-dark text-white text-right">@AfrozChakureCorp</p>
    </footer>

  </div>
</body>

</html>