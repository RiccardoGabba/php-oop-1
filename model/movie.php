<?php 

class Movie
{
    public $id;
    public $title;
    public $overview;
    public $vote_average;
    public $posted_path;

    function __construct($id, $title, $overview, $vote_average, $posted_path){
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote_average;
        $this->posted_path = $posted_path;
        
    }

    public function printCard(){

        $image = $this->posted_path;
        $title = $this->title;
        $content = $this->overview;
        $custom = $this->vote_average; 
        
        include __DIR__ ."/../views/card.php";
    }
}

$movieString = file_get_contents(__DIR__."/movie_db.json");
$movieList = json_decode($movieString, true);

$movies = [];
foreach ($movieList as $item){
    $movies[] = new Movie ($item['id'], $item['title'], $item['overview'], $item['vote_average'], $item['poster_path']);
}

// var_dump($movies);
// var_dump($movies[0]->title);
?>

