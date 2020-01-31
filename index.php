<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>Artisan's bakery</title>


</head>

<body>
  <?php include 'menu.php'; ?>
  <!-- Carousel -->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/bg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/bg2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/breads.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- About Us -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>

    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/coffee.jpg" class="img-fluid aboutimg" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">We are Artisan's Bakery</h2>
          <p class="py-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Tristique magna sit amet purus gravida.
            In metus vulputate eu scelerisque felis.
            Amet porttitor eget dolor morbi non arcu risus.
            Ipsum consequat nisl vel pretium lectus quam.
          </p>
          <a href="about.php" class="btn btn-success">Wanna Know More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Services  -->
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class='col-lg-4 col-md-4 col-12'>
          <div class="card">
            <img src="images/goods.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Goods</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <div class="card">
            <img src="images/goods.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Goods</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <div class="card">
            <img src="images/goods.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Goods</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Products</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/whole_wheat_bun.jpg" class="img-fluid pb-4 serviceimg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Comments</h2>
    </div>

    <div class='w-50 m-auto'>
      <form action="userinfo.php" method="post">
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
    <p class="p-3 bg-dark text-white text-right" style="background-color: brown">@AfrozChakureCorp</p>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>