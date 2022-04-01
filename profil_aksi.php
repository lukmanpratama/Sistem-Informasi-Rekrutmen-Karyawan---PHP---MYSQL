
<?php
include 'koneksi.php';
    if (isset ($_POST['btnSimpan'])){
        //mulai proses simpan
        $sql_simpan = "INSERT INTO pelamars (id_user,tempat_lhr,tanggal_lhr,provinsi,kabupaten,kecamatan,desa,alamat,kelamin,agama,status,no_hp,foto) VALUES (
            '".$_POST['txtiduser']."',
            '".$_POST['txttempat']."',
            '".$_POST['txttanggal']."',
            '".$_POST['nama_provinsi']."',
            '".$_POST['nama_kabupaten']."',
            '".$_POST['nama_kecamatan']."',
            '".$_POST['nama_desa']."',
            '".$_POST['txtalamat']."',
            '".$_POST['txtkelamin']."',
            '".$_POST['txtagama']."',
            '".$_POST['txtstatus']."',
            '".$_POST['txthp']."',
            '".$_POST['txtfile']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);

        if($query_simpan){
            echo "<script>alert('Simpan Berhasil')</scrip>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        }else{
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        } //proses simpan selesai
    }else if (isset ($_POST['btnUbah'])){
        //mulai proses ubah
        $sql_ubah = "UPDATE pelamars SET
            tempat_lhr='".$_POST['txttempat']."',
            tanggal_lhr='".$_POST['txttanggal']."',
            provinsi='".$_POST['nama_provinsi']."',
            kabupaten='".$_POST['nama_kabupaten']."',
            kecamatan='".$_POST['nama_kecamatan']."',
            desa='".$_POST['nama_desa']."',
            alamat='".$_POST['txtalamat']."',
            kelamin='".$_POST['txtkelamin']."',
            agama='".$_POST['txtagama']."',
            status='".$_POST['txtstatus']."',
            no_hp='".$_POST['txthp']."'
            WHERE id_pelamar='".$_POST['txtid']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        }else{
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        } //proses ubah selesai
    }else if (isset ($_GET['kode'])){
        //mulai proses hapus
        $sql_hapus = "DELETE FROM pelamars WHERE
            kode_buku='".$_GET['kode']."'";
        $query_hapus = mysqli_query($koneksi, $sql_hapus);

        if($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        }else{
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=profil.php'>";
        } //proses hapus selesai
    }
?>