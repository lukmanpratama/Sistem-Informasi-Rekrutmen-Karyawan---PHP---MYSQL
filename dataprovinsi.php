<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.binderbyte.com/wilayah/provinsi?api_key=58248fe8b7fd249f89eb8ad57b83b40af715a8be268d703f421bac892d19aabc',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
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
  $dataprovinsi = $array_response["value"];

  echo "<option value=''>Pilih Provinsi</option>";

  foreach($dataprovinsi as $key => $tiap_provinsi)
  {
      echo "<option value='".$tiap_provinsi["name"]."' id_provinsi='".$tiap_provinsi["id"]."'>";
      echo $tiap_provinsi["name"];
      echo "</option>";
  }
}
?>