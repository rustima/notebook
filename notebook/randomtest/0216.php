<?php
$host = "https://ocrapi-advanced.taobao.com";
$path = "/ocrservice/advanced";
$method = "POST";
$appcode = "085b59f8d97942809eb653194ef902cd";
$headers = array();
array_push($headers, "Authorization:APPCODE " . $appcode);
//根据API的要求，定义相对应的Content-Type
array_push($headers, "Content-Type".":"."application/json; charset=UTF-8");
$querys = "";
$bodys = "{\"img\":\"\",\"url\":\"\",\"prob\":false,\"charInfo\":false,\"rotate\":false,\"table\":false}";
$url = $host . $path;

$curl = curl_init();
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_FAILONERROR, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, true);
if (1 == strpos("$".$host, "https://"))
{
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
}
curl_setopt($curl, CURLOPT_POSTFIELDS, $bodys);
var_dump(curl_exec($curl));
?>
1