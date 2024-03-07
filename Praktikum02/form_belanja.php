<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Belanja Online</title>
  <style>
    body {
      background-color: #b2bc76;
    }

    .container {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <h1>Belanja Online</h1>
  <hr>
  <div class="container"></div>
  <form method="POST">

    <div class="form-group row">
      <label for="customer" class="col-4 col-form-label">Customer</label>
      <div class="col-3">
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Pilih Produk</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
          <label for="produk_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
          <label for="produk_2" class="custom-control-label">Mesin cuci</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
      <div class="col-3">
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        <button name="reset" type="reset" class="btn btn-danger">Batal</button>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>

<hr>

<?php
if (isset($_POST['submit'])) {
  $customer = $_POST["customer"];
  $produk = $_POST["produk"];
  $jumlah = $_POST["jumlah"];
  $total_harga = '';
  if ($produk == "TV") {
    $harga_tv = 14000000;
    $total_harga = number_format($harga_tv * $jumlah, "0", ",", ".");
  } else if ($produk == "Kulkas") {
    $harga_kulkas = 25000000;
    $total_harga = number_format($harga_kulkas * $jumlah, "0", ",", ".");
  } else if ($produk == "Mesin Cuci") {
    $harga_mesincuci = 50000000;
    $total_harga = number_format($harga_mesincuci * $jumlah, "0", ",", ".");
  }

echo "<h4>Pesanan Berhasil DiProses!</h4>";
echo "<p>Nama : $customer<p/> ";
echo "<p>Produk : $produk<p/> ";
echo "<p>Jumlah : $jumlah<p/> ";
echo "<p>Total Harga : $total_harga<p/>";
}


?>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->