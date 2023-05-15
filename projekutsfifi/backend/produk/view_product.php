<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM product WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>Id</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>sku</td>
            <td><?=$row['sku']?></td>
        </tr>
        <tr>
            <td>name</td>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <td>purchase_price</td>
            <td><?=$row['purchase_price']?></td>
        </tr>
        <tr>
            <td>sell_price</td>
            <td><?=$row['sell_price']?></td>
        </tr>
        <tr>
            <td>stock</td>
            <td><?=$row['stock']?></td>
        </tr>
        <tr>
            <td>min_stock</td>
            <td><?=$row['min_stock']?></td>
        </tr>
        <tr>
            <td>product_type_id</td>
            <td><?=$row['product_type_id']?></td>
        </tr>
        <tr>
            <td>restock_id</td>
            <td><?=$row['restock_id']?></td>
        </tr>
    </tbody>
</table>
