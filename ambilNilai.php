<?php
    include 'koneksi.php';

    // $ambil = mysqli_query($koneksi,"SELECT * from detail") or die (mysqli_error($koneksi));
    function ambilNewSensor(){
        $tabel_detail = mysqli_query(koneksi(), "SELECT * FROM `time`") or die (mysqli_error(koneksi())); //SELECT * FROM detail ORDER BY timestamp DESC LIMIT 1
        while ($row = mysqli_fetch_assoc($tabel_detail)){
            $sensor[] = $row;
        }

        return $sensor;
    }
?>