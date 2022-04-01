<?php
    if (isset ($_POST['btnDAFTAR'])){
      //mulai proses simpan
      // $cv = $_FILES['cv']['name'];
      // $surat = $_FILES['surat']['name'];
      // $skck = $_FILES['skck']['name'];
      include 'koneksi.php';
    //   $cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
    //   $surat = addslashes(file_get_contents($_FILES['surat']['tmp_name']));
    //   $skck = addslashes(file_get_contents($_FILES['skck']['tmp_name']));
      $keputusan='0';
      $sql_simpan = "INSERT INTO lamarans (id_pelamar,id_lowongan,tgl_lamaran,keputusan) VALUES (
          '".$_POST['txtidpelamar']."',
          '".$_POST['txtidlowongan']."',
          '".$_POST['txttgllamar']."',
          '".$keputusan."')";
      $query_simpan = mysqli_query($koneksi, $sql_simpan);

      if($query_simpan){
          echo "<script>alert('Simpan Berhasil')</script>";
          echo "<meta http-equiv='refresh' content='0; url=lamaran.php'>";
      }else{
          echo "<script>alert('Simpan Gagal')</script>";
          echo "<meta http-equiv='refresh' content='0; url=lowongan.php'>";
      } //proses simpan selesai
  }
?>