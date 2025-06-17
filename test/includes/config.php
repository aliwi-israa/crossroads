<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$config['ClinicName'] = 'Crossroads Dental'; 
$config['ClinicEmail'] = 'info@crossroadsdental.ca';
$config['ClinicAddress'] = '2384 Dundas St W';
$config['ClinicPhoneNumber'] = '(+1) 234-5678';
$config['ClinicFacebook'] = '';
$config['ClinicInstagram'] = '';
$config['ClinicBookingLink'] = 'https://dentalookcrossroads.akituone.cloud/online-booking/crossroads-dental-clinic';
$config['ClinicMapLink'] = 'https://maps.app.goo.gl/AWx59F9JExCEG2UV6';
$config['ClinicReviewLink'] = '';

$production=1;
$webPath = "";
if ($production!=1){
    $webPath = "/crossroads";
}else{
    $webPath = "/test";
}

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $webPath .'/';
$services_root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $webPath .'/services/';


?>