

<?php

class ViewNewPokemon
{

    public function __construct(
        private string $pokemon,
        private string $name,
        private int $base_experience,
        private array $moves,
        private array $habilidades,
        private string $tipo,
        private array $estadisticas

    ) {}


    public static function fetch_url_api(string $api_url): ViewNewPokemon
    {

        $result = file_get_contents($api_url);
        $data = json_decode($result, true);

        function mov($move)
        {
            return $move['move']['name'];
        }
        $movimientos = array_map("mov",   $data['moves']);

        function abilities($hablidades)
        {
            return $hablidades['ability']['name'];
        }
        $abilities = array_map("abilities",   $data['abilities']);

        function stats($estadisticas)
        {
            return $estadisticas['stat']['name'];
        }
        $estadisticas = array_map("stats",   $data['stats']);

        return new self(
            $data['sprites']['other']['official-artwork']['front_default'],
            $data['name'],
            $data['base_experience'],
            $movimientos,
            $abilities,
            $data['types'][0]['type']['name'],
            $estadisticas


        );
    }

    public function get_data()
    {
        return get_object_vars($this);
    }
}

?>