<?php

class Pelicula
{
    private $api_key='e628a24b6bb4d0218865b135a19d35cc';
    private $lang="es";


    public function __construct()
    {
    }


    public function getData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }

    public function obtenerPeliculas(){
        $key = $this->api_key;
        $lang = $this->lang;
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=".$key."&language=".$lang;
        $peliculas = $this-> getData($url);

        $result = $peliculas["results"];

        foreach ($result as $pelicula) {?>
            <div class="linea">
            <a href="peli.php?id=<?=$pelicula["id"]?>">
                <div class="card" style="width: 18rem; height: 30rem;">
                    <img src="https://image.tmdb.org/t/p/w185<?=$pelicula["poster_path"]?>" >
                    <div class="card-body">
                        <h5 class="card-title"><?=$pelicula["title"]?></h5>
                    </div>
                </div>
            </a>
            </div>

<?php
    }
    }
public function obtenerPeli($id){
$key = $this->api_key;
$lang = $this->lang;
$url = "https://api.themoviedb.org/3/movie/$id?api_key=".$key."&language=".$lang;
$pelis = $this-> getData($url);

?>
<div class="linea">
        <div class="card" style="width: 18rem; height: 30rem;">
            <img src="https://image.tmdb.org/t/p/w185<?=$pelis["poster_path"]?>" >
            <div class="card-body">
                <h5 class="card-title"><?=$pelis["title"]?></h5>
            </div>
        </div>
</div>
<?php
}
    public function obtenerDatosActor($id){
        $key = $this->api_key;
        $lang = $this->lang;
        $url = "https://api.themoviedb.org/3/person/$id?api_key=$key&language=$lang";
        $pelis = $this-> getData($url);

        ?>
        <div class="linea">
                <div class="card mb-3" style="max-width: 100%; margin-left: 5px;margin-right: 5px;margin-top: 5px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img style="width: 450px;height: 600px;" src="https://image.tmdb.org/t/p/w185<?=$pelis["profile_path"]?>" >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$pelis["name"]?></h5>
                        <p class="card-text">Cumpleaños: <?=$pelis["birthday"]?></p>
                        <p class="card-text">Lugar de Nacimiento: <?=$pelis["place_of_birth"]?></p>
                        <p class="card-text">Biografía: <?=$pelis["biography"]?></p>
                    </div>
                </div>
                </div>
                </div>
        <?php
    }


public function obtenerActores($id){
$key = $this->api_key;
$url = "https://api.themoviedb.org/3/movie/$id/credits?api_key=".$key."&language=en-ES&credit_id=".$id;
$actors = $this-> getData($url);

$result = $actors["cast"];

foreach ($result as $actor) {?>
<div class="linea">
    <a href="ActorData.php?id=<?=$actor["id"]?>">
        <div class="card" style="width: 18rem; height: 30rem;">
            <img src="https://image.tmdb.org/t/p/w185<?=$actor["profile_path"]?>" >
            <div class="card-body">
                <h5 class="card-title"><?=$actor["name"]?></h5>
                <h5 class="card-title"><?=$actor["character"]?></h5>
            </div>
        </div>
    </a>
</div>
<?php
}
}
    public function buscarPeliculas($nombre){
        $key = $this->api_key;
        $lang = $this->lang;
        $buscar = str_replace(" ", "+", $nombre);
        $url = "https://api.themoviedb.org/3/search/movie?api_key=".$key."&language=".$lang."&query=".$buscar;
        $peliculas = $this-> getData($url);

        $result = $peliculas["results"];

        foreach ($result as $pelicula) {?>

            <div class="linea">
                <a href="peli.php?id=<?=$pelicula["id"]?>">
                    <div class="card" style="width: 18rem;">
                        <img src="https://image.tmdb.org/t/p/w185<?=$pelicula["poster_path"]?>" >
                        <div class="card-body">
                            <h5 class="card-title"><?=$pelicula["title"]?></h5>
                        </div>
                    </div>
                </a>
            </div>

            <?php
        }
    }
}
