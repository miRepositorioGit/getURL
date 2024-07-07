<?php
/**
 * Clase que controla todo el flujo
 */
class Control
{
     public function __construct()
	  {
		$url = $this->separarURL();
		echo "componentes de la URL: ";
		var_dump($url);
		
			echo "<br>";
			echo "SCRIPT_FILENAME :";
			echo $_SERVER['SCRIPT_FILENAME'];   //The absolute pathname of the currently executing script.
			echo "<br>";
			
			echo "SCRIPT_NAME :";
			echo $_SERVER['SCRIPT_NAME'];   //Contains the current script's path. 
			echo "<br>";
			
			echo "REQUEST_URI: ";
			echo $_SERVER['REQUEST_URI'];  //The URI which was given in order to access this page
			echo "<br>";
			
			echo "DOCUMENT_ROOT: ";
			echo $_SERVER['DOCUMENT_ROOT'];//The document root directory under which the current script is executing, as defined in the server's configuration file.
			echo "<br>";
			
			echo "PHP_SELF: ";
			echo $_SERVER['PHP_SELF'];
			echo "<br>";
	  }
	  
	 /*retorna los componetes de una petición URL*/ 
	 public function separarURL()
		  {
			$url = "";
			if (isset($_GET["url"])) 
				{
				  $url = rtrim($_GET["url"],"/"); 				// remueve el caracter /
				  $url = filter_var($url,FILTER_SANITIZE_URL);  // remueve todos los todos los caracteres exepto letras, digitos y
																// $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=
				  $url = explode("/",$url);						// serializa componentes encontrados
				}
			 return $url;
		  }
	  
}
?>