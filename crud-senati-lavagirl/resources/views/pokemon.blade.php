<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://pokeapi.co/api/v2/pokemon/?limit=20', // He añadido el límite de 20 aquí
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
echo "<td> Imagenes Oficiales </td>";
echo "</tr>";
foreach ($data['results'] as $pokemon_basico) {
    
    // 1. SOLICITUD DENTRO DEL BUCLE: Obtenemos el detalle de cada Pokémon usando su URL
    $ch_detalle = curl_init();
    curl_setopt($ch_detalle, CURLOPT_URL, $pokemon_basico['url']); // Usamos la URL específica
    curl_setopt($ch_detalle, CURLOPT_RETURNTRANSFER, true);
    
    $response_detalle = curl_exec($ch_detalle);
    curl_close($ch_detalle);
    
    $pokemon_completo = json_decode($response_detalle, true);
    
    $sprite_url = $pokemon_completo['sprites']['other']['official-artwork']['front_default']; 

    echo "<tr>";
    echo "<td>$contador</td>";
    echo "<td>" . ucfirst($pokemon_completo['name']) . "</td>";
    echo "<td> <img src='" . $sprite_url . "' style='width: 100px;'> </td>"; 
    echo "</tr>";

    $contador++;
}

echo "</table>";
?>