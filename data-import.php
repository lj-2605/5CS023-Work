<?php

    $url = 'https://api.openweathermap.org/data/2.5/weather?q=' . $_GET['city'] . '&appid=01fb3b79ab1eb8f42f799f0c206380d1&units=metric';

    // Get data from openweathermap and store in JSON object
    $data = file_get_contents($url);
    $json = json_decode($data, true);

    // Fetch required fields
    $weather_description = $json['weather'][0]['description'];
    $weather_temperature = $json['main']['temp'];
    $weather_wind = $json['wind']['speed']; 
	$weather_humidity = $json['main']['humidity'];
    $weather_when = date("Y-m-d H:i:s"); // now
    $city = $json['name']; // name of city     

    // Build INSERT SQL statement
    $sql_insert = "INSERT INTO weather (weather_description, weather_temperature, weather_wind, weather_when, weather_humidity, city)
    VALUES('{$weather_description}', {$weather_temperature}, {$weather_wind}, '{$weather_when}', {$weather_humidity}, '{$city}')";

    // Run SQL statement and report errors
    if (!$mysqli -> query($sql_insert)) {
        echo("<h4>SQL error description: " . $mysqli -> error . "</h4>");
    }

?>
