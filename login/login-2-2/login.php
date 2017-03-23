<?php 
	function validateForm(){
		$errors = [];
		/*Comprobamos que la longitud de el campo username ypassword tienen como minimo una longitud de 6 caracteres, de no ser asi se almacena en una variable de tipo array un mensaje que luego se devolverá*/
		if (strlen(trim($_POST["username"])) < 6){
			$errors[] = "El nombre de usuario debe tener, al menos, 6 caracteres.";
		}
		if (strlen(trim($_POST["password"])) < 6){
			$errors[] = "La clave de usuario debe tener, al menos, 6 caracteres.";
		}
		return $errors;
	}
	//Si los campos estan llenos
	if (!empty($_POST)){
			/*Se llama a la funcion validateForm para validar los campos username y password y se alamecena la respuesta dentro de una variable llamada errors*/
			$errors = validateForm();
			/*Si la respuesta continene algun datos se muestra en el siguiente bucle*/
		if (!empty($errors)){
			foreach ($errors as $error){
				echo "$error <br>";
			}
		}
	}


 ?>