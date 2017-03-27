<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/39e449f654a8416d/astronomy/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $bulan = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
  $arah = $parsed_json->{'moon_phase'}->{'hemisphere'};
  $persen = $parsed_json->{'moon_phase'}->{'percentIlluminated'};
  $terbit = $parsed_json->{'sunrise'}->{'hour'};
  $menit = $parsed_json->{'sunrise'}->{'hour'}->{'minute'};
  echo "Umur Bulan : ${bulan}\n";
  echo "<br>";
  echo "Posisi Bulan di belahan : ${arah}\n";
  echo "<br>";
  echo "Percent Illuminated : ${persen}\n";
  echo "<br>";
  echo "Waktu Matahari Terbit : Jam ${terbit}  ${menit} \n";
  ?>