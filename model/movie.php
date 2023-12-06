<?php 

include __DIR__ .'/product.php';
class Movie extends Product
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

    function printStars(){
        $vote = ceil($this->vote_average / 2);
        $template = "<p class='m-0'>";
        for($n = 1; $n <= 5; $n++){
            $template .= $n <= $vote ? '<i class="fa-solid text-warning fa-star"></i>' : '<i class="fa-regular text-warning fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
    }
    public function printCard(){

        $image = $this->posted_path;
        $title = $this->title;
        $content = $this->overview;
        $custom = $this->printStars(); 
        
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

