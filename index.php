
<?php

ini_set('display_errors', 0);

require './funciones.php';
require './clases.php';
require './styles.php';
require './api.php';
require './const.php';

if (isset($_GET['pokemon'])) {

    $params =  $_GET['pokemon'];
    $API_URL = get_api($params);

    $result = ViewNewPokemon::fetch_url_api($API_URL);
    $pokemon_data = $result->get_data();

    render_template('head', $pokemon_data);
    render_template('main', $pokemon_data);
} else {
    $result = ViewNewPokemon::fetch_url_api(API_URL);
    $pokemon_data = $result->get_data();
    render_template('head', $pokemon_data);
    render_template('main', $pokemon_data);
}

?>
