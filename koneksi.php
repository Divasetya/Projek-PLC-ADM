<?php
    // koneksi ke database
    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'websensor';

    $koneksi = mysqli_connect ($hostname, $user, $password, $database) or die (mysqli_error());

?>