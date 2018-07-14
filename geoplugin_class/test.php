<?php
  //$lat= 23.878510 ; //latitude
  $lat= 23.9118247 ; //latitude
  //$lng= 90.303416 ; //longitude
  $lng= 90.2997712 ; //longitude
  $address= getaddress($lat,$lng);
  if($address)
  {
    echo $address;
  }//c65ff8f7c8e287324c2ed6a7fd5d91a5
  else
  {
    echo "Not found";
  }
  function getaddress($lat,$lng)
  {
     $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
     $json = @file_get_contents($url);
     $data=json_decode($json);
     $status = $data->status;
     if($status=="OK")
     {
       return $data->results[0]->formatted_address;
     }
     else
     {
       return false;
     }
  }
?>