<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/movie.php';
function getArrElemForCard($select_film_id = 1){
    $movie_array = getMovie();
    foreach ($movie_array as $movie)
    {
        if($movie['id'] === $select_film_id)
        {
            $element_arr = [
                'id' => $select_film_id,
                'image_adres'=> '/data/images/'.(string)$select_film_id.".jpg",
                'title' => $movie['title'],
                'original-title' => $movie['original-title'],
                'description' => mb_strimwidth(getOneElem($select_film_id,'description'),0,220,"..."),
                'duration' => (string)$movie['duration'].'мин.',
                'genres' => implode(',',array_slice($movie['genres'], 0,3)),
                'cast' => implode(', ',$movie['cast']),
                'director' => implode(', ',$movie['director']),
                'age-restriction' => $movie['age-restriction'],
                'release-date' => $movie['release-date'],
                'rating' => $movie['rating'],
                'full-description' => $movie['description']
            ];
            return $element_arr;
        }
    }
}

function getOneElem($select_film_id = 1, $elem_key = 'title'){
    $movie_array = getMovie();
    foreach ($movie_array as $movie)
    {
        if($movie['id'] === $select_film_id)
        {
            return $movie[$elem_key];
        }
    }
}

?>


