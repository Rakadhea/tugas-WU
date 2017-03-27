<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/39e449f654a8416d/conditions/q/CA/San_Francisco.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'current_observation'}->{'display_location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$feelslike_c= $parsed_json->{'current_observation'}->{'feelslike_c'};
$wind_degrees= $parsed_json->{'current_observation'}->{'wind_degrees'};
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
$angin= $parsed_json->{'current_observation'}->{'wind_string'};
echo "Saat ini anda berada di ${location}\n";
echo "<br>";
echo "Cuaca saat ini : ${weather}\n";
echo "<br>";
echo "Derajat Angin : ${wind_degrees} \n";
echo "<br>";
echo "Suhu Udara : ${feelslike_c} celcius \n";
echo "<br>";
echo "Jarak Pandang : ${visibility_km}kilometers\n";
echo "<br>";
echo "Kekuatan Angin : ${angin}\n";
echo "<br>";
?>