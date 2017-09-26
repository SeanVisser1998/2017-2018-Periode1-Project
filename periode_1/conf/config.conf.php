<?php

	/**
	* Dit bestand bevat alle configureerbare 'settings' op onze sited.
	* Database gegevens, etc.
	*/

	/**
	* MySQL-DB inlog gegevens
	**/
	$config['mysql']['hostname'] = "localhost";
	$config['mysql']['username'] = "username";
	$config['mysql']['password'] = "password";
	$config['mysql']['database'] = "database";


	/**
	* Algemene configuratie van de website (titel, default homepage, etc)
	**/

	$config['paginatitel'] = "Eten Bezorgen"; //Titel van de site.
	$config['defaultaction'] = "home"; //Standaard home pagina.


	/**
	* Globale variabele $link, om te connecten met de Database.
	**/

	$link = mysqli_connect(
			$config['mysql']['hostname'],		
			$config['mysql']['username'],
			$config['mysql']['password'],
			$config['mysql']['database']
		);

	function mySQLiConnect(){
		$link;
	}

?>