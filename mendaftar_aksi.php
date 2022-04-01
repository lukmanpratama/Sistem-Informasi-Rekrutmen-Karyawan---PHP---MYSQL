<?php

    include 'koneksi.php';
    
    if (isset ($_POST['btnDAFTAR'])){
        $sql_cek = "SELECT * FROM lamarans WHERE id_pelamar='".$_POST['txtidpelamar']."' AND id_lowongan='".$_POST['txtidlowongan']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        if (mysqli_num_rows($query_cek)>0){
            echo "<script>alert('Anda sudah mendaftar lowongan ini!')</script>";
            echo "<meta http-equiv='refresh' content='0; url=lamaran.php'>";
        }else{
            //mulai proses simpan
            $cv = $_FILES['cv']['name'];
            $lokasi1 = $_FILES['cv']['tmp_name'];
            $surat = $_FILES['surat']['name'];
            $lokasi2 = $_FILES['surat']['tmp_name'];
            $skck = $_FILES['skck']['name'];
            $lokasi3 = $_FILES['skck']['tmp_name'];
            $keputusan='0';

            $sql_simpan = "INSERT INTO lamarans (id_pelamar,id_lowongan,tgl_lamaran,CV,surat_lamaran,SKCK,keputusan) VALUES (
                '".$_POST['txtidpelamar']."',
                '".$_POST['txtidlowongan']."',
                '".$_POST['txttgllamar']."',
                '".$cv."',
                '".$surat."',
                '".$skck."',
                '".$keputusan."')";

                move_uploaded_file($lokasi1, "Berkas/".$cv);
                move_uploaded_file($lokasi2, "Berkas/".$surat);
                move_uploaded_file($lokasi3, "Berkas/".$skck);

            $query_simpan = mysqli_query($koneksi, $sql_simpan);

            if($query_simpan){
                echo "<script>alert('Simpan Berhasil')</script>";
                echo "<meta http-equiv='refresh' content='0; url=lamaran.php'>";
            }else{
                echo "<script>alert('Lengkapi Dulu Data Diri Anda di Halaman Profil')</script>";
                echo "<meta http-equiv='refresh' content='0; url=lowongan.php'>";
            } //proses simpan selesai
        }
  }
?>