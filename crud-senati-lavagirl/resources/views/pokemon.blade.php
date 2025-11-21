<?php

use function Laravel\Prompts\table;

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://pokeapi.co/api/v2/pokemon/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);

$contador = 1;

$data = json_decode($response, true);

echo "<h2>LISTA DE POKEMONES : <br> </h2>";

echo "<table border='10' >";


echo "<tr>";
echo "<td> # </td>";
echo "<td> POKEMON </td>";
echo "<td> URL </td>";
echo "</tr>";

foreach ($data['results'] as $pokemon) {
 echo "<tr>";
 echo "<td>$contador</td>";
 echo "<td>" . $pokemon['name'] . "</td>";
 echo "<td>" . $pokemon['url'] . "</td>";

 echo "</tr>";

 $contador++;
}

echo "</table>";
?>
