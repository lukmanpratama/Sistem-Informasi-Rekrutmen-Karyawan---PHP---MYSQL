<?php
    if (isset ($_POST['btnSIMPAN'])){
        //mulai proses simpan
        $sql_simpan = "INSERT INTO users (nama,email,password,hak_akses) VALUES (
            '".$_POST['txtnama']."',
            '".$_POST['txtemail']."',
            '".$_POST['txtpassword']."',
            '".$_POST['txthakakses']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);

        if($query_simpan){
            echo "<script>alert('Simpan Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=user'>";
        }else{
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=user'>";
        } //proses simpan selesai
    }else if (isset ($_POST['btnUBAH'])){
        //mulai proses ubah
        $sql_ubah = "UPDATE users SET
            nama='".$_POST['txtnama']."',
            email='".$_POST['txtemail']."',
            password='".$_POST['txtpassword']."',
            hak_akses='".$_POST['txthakakses']."'
            WHERE id_user='".$_POST['txtid']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=user'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=user'>";
        } //proses ubah selesai
    }else if (isset ($_GET['kode'])){
        //mulai proses hapus
        $sql_hapus = "DELETE FROM users WHERE
            id_user='".$_GET['kode']."'";
        $query_hapus = mysqli_query($koneksi, $sql_hapus);

        if($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=user'>";
        }else{
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?halaman=user'>";
        } //proses hapus selesai
    }
?>