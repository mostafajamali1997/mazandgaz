<?php

//ba curl mitunuim az tarigh command line file jabeja konim dar vaghe
//clients for software masalan bash be barnamamoon migim google.com o download kon bekhun ya felan
//albate command line roo php nasb mishe
// va ma ba tavabesh too php azash estefade mikonim
$cUrlAddress=curl_init("https://localhost/saadco/imFiles/warrantyPicture/1.jpg");
curl_setopt($cUrlAddress,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($cUrlAddress, CURLOPT_SSL_VERIFYPEER, false);

$authString='mostafausername:mostafapassword';
curl_setopt($cUrlAddress,CURLOPT_USERPWD,$authString);//forsecurity
$ourOutput=curl_exec($cUrlAddress);
$contentType=curl_getinfo($cUrlAddress,CURLINFO_CONTENT_TYPE);

header('Content-Type:'.$contentType);//ersal dastoor http be karbar ghable pardazesh nahaei
echo $ourOutput;
echo curl_error($cUrlAddress);
curl_close($cUrlAddress);

?>