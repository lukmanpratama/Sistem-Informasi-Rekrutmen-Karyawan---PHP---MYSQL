<?php
    if (isset ($_POST['btnSIMPAN'])){
        //mulai proses simpan
        $sql_simpan = "INSERT INTO penilaians (id_pelamar,tgl_nilai,nilai_tes,nilai_wawancara,hasil) VALUES (
            '".$_POST['txtpelamar']."',
            '".$_POST['txttglnilai']."',
            '".$_POST['txtujian']."',
            '".$_POST['txtwawancara']."',
            '".$_POST['txthasil']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);

        if($query_simpan){
            echo "<script>alert('Simpan Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=penilaian'>";
        }else{
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=penilaian'>";
        } //proses simpan selesai
    }else if (isset ($_POST['btnUBAH'])){
        //mulai proses ubah
        $sql_ubah = "UPDATE penilaians SET
            nilai_tes='".$_POST['txtujian']."',
            nilai_wawancara='".$_POST['txtwawancara']."',
            hasil='".$_POST['txthasil']."'
            WHERE id_nilai='".$_POST['txtid']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=penilaian'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=penilaian'>";
        } //proses ubah selesai
    }else if (isset ($_GET['kode'])){
        //mulai proses hapus
        $sql_hapus = "DELETE FROM penilaians WHERE
            id_nilai='".$_GET['kode']."'";
        $query_hapus = mysqli_query($koneksi, $sql_hapus);

        if($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=penilaian'>";
        }else{
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=penilaian'>";
        } //proses hapus selesai
    }
?>