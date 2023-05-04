<?php 

function load()
{
  $get_page = strip_tags($_GET['page']);

  
  $page = (!$get_page) ? "pages/home.php" : "pages/{$get_page}.php";
  
  if (!file_exists($page)) {
    throw new \Exception("Opa, alguma coisa errada aconteceu");
  }

	return $page;
}