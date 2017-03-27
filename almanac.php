<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/39e449f654a8416d/almanac/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $kode = $parsed_json->{'almanac'}->{'airport_code'};
  $temperatur = $parsed_json->{'almanac'}->{'temp_low'}->{'normal'}->{'C'};
   $temperatur2 = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'C'};
  echo " Berikut adalah perkiraan suhu udara di kota San Francisco <br>";
  echo "Kode Bandara : ${kode} \n";
  echo "<br>";
  echo "Suhu Udara Paling Rendah : ${temperatur} \n 'Celcius ";
  echo "<br>";
  echo "Suhu Udara Paling Tinggi : ${temperatur2} \n 'Celcius ";
  echo "<br>";
  
?>