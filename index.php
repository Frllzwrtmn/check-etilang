<?php
function cek($value) {
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.etilang.info/ws_etilang/inquiry_etilang.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "blangko=".$value,
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 16",
    "Content-Type: application/x-www-form-urlencoded",
    "Host: www.etilang.info",
    "Postman-Token: 0edea031-c915-4f6e-a06f-feaef42b8c80,bad298b4-6e0c-4ab2-b721-d4240cfa0063",
    "User-Agent: PostmanRuntime/7.19.0",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo json_encode(json_decode($response), JSON_PRETTY_PRINT);
}
}

cek($argv[1]);
echo PHP_EOL;

