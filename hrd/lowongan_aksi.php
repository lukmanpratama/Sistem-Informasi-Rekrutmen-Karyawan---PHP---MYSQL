<?php
    if (isset ($_POST['btnSIMPAN'])){
        //mulai proses simpan
        $sql_simpan = "INSERT INTO lowongans (nama_lowongan,kategori,deskripsi,persyaratan,tgl_post,tgl_deadline) VALUES (
            '".$_POST['txtnama']."',
            '".$_POST['txtkategori']."',
            '".$_POST['txtdeskripsi']."',
            '".$_POST['txtpersyaratan']."',
            '".$_POST['txtpost']."',
            '".$_POST['txtdeadline']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);

        if($query_simpan){
            echo "<script>alert('Simpan Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lowongan'>";
        }else{
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lowongan'>";
        } //proses simpan selesai
    }else if (isset ($_POST['btnUBAH'])){
        //mulai proses ubah
        $sql_ubah = "UPDATE lowongans SET
            nama_lowongan='".$_POST['txtnama']."',
            kategori='".$_POST['txtkategori']."',
            deskripsi='".$_POST['txtdeskripsi']."',
            persyaratan='".$_POST['txtpersyaratan']."',
            tgl_deadline='".$_POST['txtdeadline']."'
            WHERE id_lowongan='".$_POST['txtid']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lowongan'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lowongan'>";
        } //proses ubah selesai
    }else if (isset ($_GET['kode'])){
        //mulai proses hapus
        $sql_hapus = "DELETE FROM lowongans WHERE
            id_lowongan='".$_GET['kode']."'";
        $query_hapus = mysqli_query($koneksi, $sql_hapus);

        if($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lowongan'>";
        }else{
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=lowongan'>";
        } //proses hapus selesai
    }
?>