<?php

	/**
	 * Dit bestand bevat de algemen functies.
	 */

	/**
	* Functie voor het displayen van de header.
	* BELANGRIJK: Gebruik HTML code!
	**/
	function displayHeader(){

		global $config;

		echo "<html>";
		echo "<head>";
		echo "<title>".$config['paginatitel']."</title>";
		//CSS-LINK: echo '<link rel="stylesheet" type="text/css" href="style.css">'; Stijn, wil jij de CSS doen?
		echo "</head>";
		echo "<body>";
		echo "<div id=\"wrapper\">"; //Begin ID Wrapper
		

	}

	/**
	* Functie voor het displayen van het navigatie menu.
	* BELANGRIJK: Gebruik HTML code!
	**/
	function displayNavMenu(){
		echo "<div id=\"navigation\">"; //Begin ID Navigation
		echo "	<div class=\"button\"><a href=\"index.php?action=home\">Home</a></div>";
		echo "	<div class=\"button\"><a href=\"index.php?action=pizza\">Pizza's</a></div>";
		echo "	<div class=\"button\"><a href=\"index.php?action=steak\">Steaks</a></div>";
		echo "	<div class=\"button\"><a href=\"index.php?action=fastfood\">Fastfood</a></div>";
		echo "	<div class=\"button\"><a href=\"index.php?action=login\">Login</a></div></br>";
		echo "</div>"; //Eind ID navigation
	}


	/**
	* Functie voor het displayen van de footer.
	* BELANGRIJK: Gebruik HTML code!
	**/
	function displayFooter(){

		global $config;
		echo "</div>"; //Eind ID wrapper
		echo "</body>";
		echo "</html"; 

	}
	/**
	* Functie voor het displayen van de home page.
	* BELANGRIJK: Gebruik HTML code!
	**/
	function displayHome(){ //Geeft de homepagina weer

		global $config;

		echo "<h1>Welkom bij onze website</h1>";

	}

	function getCurrentAction(){ //Defined the huidige actie die door de gebruiker wordt uitgevoerd op het scherm

		global $config;
		
		if(isset($_GET['action']) == true) {
			return $_GET['action'];
		}
		else {
			return $config['defaultaction'];
		}
	}

?>