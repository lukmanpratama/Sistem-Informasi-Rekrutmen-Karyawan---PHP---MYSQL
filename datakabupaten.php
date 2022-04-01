<?php
$id_provinsi_terpilih = $_POST['id_provinsi'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.binderbyte.com/wilayah/kabupaten?api_key=58248fe8b7fd249f89eb8ad57b83b40af715a8be268d703f421bac892d19aabc&id_provinsi='.$id_provinsi_terpilih,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    'key:58248fe8b7fd249f89eb8ad57b83b40af715a8be268d703f421bac892d19aabc'
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $array_response = json_decode($response,TRUE);
  $datakabupaten = $array_response["value"];

 
  echo "<option value=''>Pilih Kabupaten/Kota</option>";

  foreach($datakabupaten as $key => $tiap_kabupaten)
  {
      echo "<option value='".$tiap_kabupaten["name"]."' 
      id_kabupaten='".$tiap_kabupaten["id"]."'>";
      echo $tiap_kabupaten["name"];
      echo "</option>";

      // echo "<option value='".$tiap_kabupaten["province_id"]."' id_provinsi='".$tiap_kabupaten["province_id"]."'>";
      // echo $tiap_provinsi["province"];
      // echo "</option>";
  }
}
?>