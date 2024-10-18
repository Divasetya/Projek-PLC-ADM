<?php
    include 'koneksi.php';

    // $ambil = mysqli_query($koneksi,"SELECT * from detail") or die (mysqli_error($koneksi));
    function ambilNewSensor(){
        $tabel_dummydata = mysqli_query(koneksi(), "SELECT * FROM `dummydata` ORDER BY timestamp DESC LIMIT 1") or die (mysqli_error(koneksi()));
        while ($row = mysqli_fetch_assoc($tabel_dummydata)){
            $sensor[] = $row;
        }

        return $sensor;
    }
?>