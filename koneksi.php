<?php
    // koneksi ke database
    function koneksi(){
        $hostname = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'dummydatasensor';

        $koneksi = mysqli_connect ($hostname, $user, $password, $database) or die (mysqli_error());
        
        return $koneksi;
    };
?>