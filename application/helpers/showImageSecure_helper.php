<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function showImageSecure()
{
$CI =& get_instance();
$CI->load->library('encryption');//sd
//echo 'OurEnc: <br/>'.$CI->encryption->encrypt('imFiles/warrantyPicture/1.jpg').'<hr>';
//echo 'OurDecFromPost:<br/>'.$CI->encryption->decrypt($CI->input->post('av'));
//die(base_url());
//$fileAddress=$this->encryption->decrypt();//av = address file value
//$this is wrong because this is helper we should make instance of object with  $CI =& get_instance();
$fileAddress=$CI->encryption->decrypt($CI->input->post('av'));//av = address file value
$cUrlAddress=curl_init(base_url($fileAddress));
curl_setopt($cUrlAddress,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($cUrlAddress, CURLOPT_SSL_VERIFYPEER, false);//badan hatman bardashte beshe
$authString='mostafausername:mostafapassword';
curl_setopt($cUrlAddress,CURLOPT_USERPWD,$authString);//forsecurity
$ourOutput=curl_exec($cUrlAddress);
$contentType=curl_getinfo($cUrlAddress,CURLINFO_CONTENT_TYPE);
header('Content-Type:'.$contentType);//ersal dastoor http be karbar ghable pardazesh nahaei
echo $ourOutput;
echo curl_error($cUrlAddress);
curl_close($cUrlAddress);
}
