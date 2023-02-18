<?php
require("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Orient Design Grafik</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>

<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
  include 'includes/header_menu.php';
  ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">

        <h3 class="text-warning pt-3 title">About Us</h3>
        <hr />
        <img src="./images/stiker_odg.jpg" class="img-responsive img-fluid rounded mx-auto d-block" ;>
        <p class="mt-2">Selamat datang di toko kami yang menyediakan berbagai macam produk berkualitas tinggi, mulai
          dari pusara, stempel, plat nomor, hingga stiker. Kami memiliki pengalaman bertahun-tahun dalam memproduksi
          dan menjual produk-produk berkualitas tinggi yang memenuhi kebutuhan dan preferensi pelanggan kami..
        </p>
        <p class="mt-2">Kami menggunakan bahan-bahan terbaik dan teknologi modern untuk memastikan produk kami
          berkualitas tinggi, tahan lama, dan terlihat indah. Produk-produk kami tersedia dalam berbagai model dan
          ukuran, sehingga Anda dapat memilih yang paling sesuai dengan kebutuhan Anda.</p>


        <p>Kami juga menawarkan harga yang bersaing dan pelayanan pelanggan yang baik. Tim kami siap membantu Anda
          dalam setiap tahap pembelian, mulai dari memilih produk yang sesuai, membantu dalam desain, hingga
          pengiriman dan pemasangan. Kami berkomitmen untuk memberikan pengalaman berbelanja yang menyenangkan dan
          memuaskan bagi pelanggan kami.
        </p>
        <p>Jangan ragu untuk menghubungi kami jika Anda membutuhkan informasi lebih lanjut tentang produk-produk kami
          atau ingin membuat pesanan. Terima kasih telah memilih toko kami dan kami berharap dapat membantu Anda dalam
          memenuhi kebutuhan Anda.</p>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php' ?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if (isset($_GET['error'])) {
  $z = $_GET['error'];
  echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
  echo "
<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<?php if (isset($_GET['errorl'])) {
  $z = $_GET['errorl'];
  echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
  echo "
<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

</html>