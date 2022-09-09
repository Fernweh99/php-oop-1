<?php
class Movie 
{
  public $title;
  public $description;
  public $relase_date;
  public $genre;

  public function __construct( $title, $description, $relase_date, $genre ) {
    $this->title = $title;
    $this->description = $description;
    $this->relase_date = $relase_date;
    $this->genre = $genre;
  }

  public function getAbstract() {
    return substr($this->description, 0 , 30) . "...";
  }
}
$movie1 = new Movie("Harry Potter and the philosopher's stone", "lorem ipsum dolor sit amet, consectetur adipiscing elit", "6/12/2001", "fantasy");
$movie2 = new Movie("The Lord of the Rings: The Fellowship of the Ring", "ipsum dolor sit, adipiscing elit content except,", "18/01/2002", "fantasy");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <main>
    <section>
      <h1>List Movies</h1>
      <article>
        <h3><?= $movie1->title ?></h3>
        <address><?= $movie1->genre ?></address>
        <p><?= $movie1->getAbstract() ?></p>
        <time><?= $movie1->relase_date ?></time>
      </article>
      <article>
        <h3><?= $movie2->title ?></h3>
        <address><?= $movie2->genre ?></address>
        <p><?= $movie2->getAbstract() ?></p>
        <time><?= $movie2->relase_date ?></time>
      </article>
    </section>
  </main>
</body>
</html>
