<?php
    //membuat array
    
    $id         = array("F001","F002","F003","F004","F005");
    $nama       = array("Mangga","Durian","Naga","Pear","Alpukat");
    $warna      = array("Orange", "Kuning","Merah","Krem","Hijau");
    $stok       = array("300 buah", "45 buah", "60 buah", "86 buah", "73 buah");
    $harga      = array("15000", "35000", "10000", "22000", "25000");
    $deskripsi  = array("buahnya manis seperti saya","walaupun berduri tapi tidak se menyakitkan mantan saat putusin kamu kok","lebih baik aku memberimu naga daripada memberimu dia buat balikan lagi","membantu menjaga nutrisi buat kaum rebahan","you can't everyone happy, you're not an avocado");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style>

    h1 {
      background: pink;
    }

    tr {
      background: beige;
    }

  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
            // menghitung total array
            $totalArray = count($id);

            // looping
            for ($i=0; $i < $totalArray; $i++) { 
            echo "<tr>";
            echo "<td>$id[$i]</td>";
            echo "<td>$nama[$i]</td>";
            echo "<td>$warna[$i]</td>";
            echo "<td>$stok[$i]</td>";
            echo "<td>$harga[$i]</td>";
            echo "<td>$deskripsi[$i]</td>";
            echo "</tr>";
            }
            
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>