<?php
namespace Talentum\Bookstore\Controller;
use Talentum\Bookstore\View\View;

class BookController
{

	public function index()
	{
		echo "Listado de libros";
	}

	public function show($id)
	{
		$view = new View('templates/book');
 		$book = ['title' => 'La Tregua', 'author' => 'Mario Benedetti', 'description' => 'La novela...'];
 		$view->render('show.php', ['book' => $book]);
	}
}

$view = new View("/templates/book/");
$view->render('show.php', ['book' => $book]);
?>