<?php

namespace Talentum\Bookstore\View;

class View
{
	protected $templatePath;/*almacernará la ruta al directorio donde
almacenamos la plantilla.*/
	protected $attributes;/*podremos almacenar cualquier información
que sea necesaria para construir la vista*/

	public function __construct($templatePath = "", $attributes = [])
	{
		$this->templatePath = rtrim($templatePath, "/\\") . "/";
		$this->attributes = $attributes;
	}

	public function render(string $template, array $data = [])
	{
		$data = array_merge($this->attributes, $data);
		$templateFile = $this->templatePath . $template;
		extract($data);
		include $templateFile;
	}
}

$view = new View("/templates/book/");


?>