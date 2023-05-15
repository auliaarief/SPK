<?php include('includes/configDB.php')?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SPK</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <?php include('navbar.php')?>  
  <body>
  <div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-auto shadow py-3">
                    <!-- judul -->
                    <p class="text-center fw-bold">Rekomendasi Pembelian Kuota Terbaik  </p>
                    <hr>
                    <!-- gambar -->
                    <div class= "text-center">
                    <img class="img-auto" src ="images/kuota.jpg">    </img>
                    </div>
                    <hr>
                    <!-- pengantar -->
                    <p>Metode Weighted Product (WP) menggunakan perkalian untuk menghubungkan rating atribut, dimana rating setiap atribut harus dipangkatkan terlebih dahulu dengan bobot atribut yang bersangkutan. Proses ini sama halnya dengan proses normalisasi. Pembobotan metode Weighted Product dihitung berdasarkan tingkat kepentingan.</p>
                </div>
          
            </div>
        </div>
    </div>

  </body>
</html>