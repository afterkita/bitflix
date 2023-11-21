<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/data/movie.php';
function getRatingRectangle($select_film_id){
$movie_array = getMovie();
foreach ($movie_array as $movie)
{
    if($movie['id'] === $select_film_id) {
        return (int)$movie['rating'];
    }
}
}
function getArrElemForCard($select_film_id){
    $movie_array = getMovie();
    foreach ($movie_array as $movie)
    {
        if($movie['id'] === $select_film_id)
        {
            $element_arr = [
                'id' => $select_film_id,
                'image_adres'=> 'http://localhost:63342/structure_pr/data/images/'.(string)$select_film_id.".jpg",
                'title' => $movie['title'],
                'original-title' => $movie['original-title'],
                'description' => mb_strimwidth(getOneElem($select_film_id,'description'),0,220,"..."),
                'duration' => (string)$movie['duration'].'мин.',
                'genres' => implode(',',array_slice($movie['genres'], 0,3)),
                'cast' => implode(', ',$movie['cast']),
                'director' => $movie['director'],
                'age-restriction' => $movie['age-restriction'],
                'release-date' => $movie['release-date'],
                'rating' => ($movie['rating']),
                'full-description' => $movie['description']
            ];
            return $element_arr;
        }
    }
    // При ошибке в запросе будет выдаваться 1-й фильм
    $movie = $movie_array[0];
    $element_arr_2 = [
        'id' => 0,
        'image_adres'=> 'http://localhost:63342/structure_pr/data/images/'.(string)'1'.".jpg",
        'title' => $movie['title'],
        'original-title' => $movie['original-title'],
        'description' => mb_strimwidth(getOneElem('1','description'),0,220,"..."),
        'duration' => (string)$movie['duration'].'мин.',
        'genres' => implode(',',array_slice($movie['genres'], 0,3)),
        'cast' => implode(', ',$movie['cast']),
        'director' => $movie['director'],
        'age-restriction' => $movie['age-restriction'],
        'release-date' => $movie['release-date'],
        'rating' => ($movie['rating']),
        'full-description' => $movie['description']
    ];
    return $element_arr_2;

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


