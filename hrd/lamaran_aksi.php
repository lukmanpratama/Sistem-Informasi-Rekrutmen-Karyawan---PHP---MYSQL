<?php
    if (isset ($_GET['kode1'])){
        //mulai proses ubah
        $terima="Diterima";
        $sql_ubah = "UPDATE lamarans SET
            keputusan='".$terima."'
            WHERE id_pelamar='".$_GET['kode1']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lamaran'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lamaran'>";
        } //proses ubah selesai
    }else if (isset ($_GET['kode2'])){
        //mulai proses ubah
        $tolak="Ditolak";
        $sql_ubah = "UPDATE lamarans SET
            keputusan='".$tolak."'
            WHERE id_pelamar='".$_GET['kode2']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lamaran'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lamaran'>";
        } //proses ubah selesai
    }
?>