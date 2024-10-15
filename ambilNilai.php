<?php
    include 'koneksi.php';

    $ambil = mysqli_query($koneksi,"SELECT * from sensor") or die (mysqli_error($koneksi));
?>