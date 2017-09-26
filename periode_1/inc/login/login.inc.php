<?php
	/**
	* Abe Hiemstra, Rick Prins, Stijn Kammer, Sean Visser
	* ITVA1
	* Project: Webdevelopment
	**/

	//Include de algemene SQL configuratie
	include("conf/config.conf.php");



	//Functie voor het ophalen van de inlog pagina 
	//CSS naam: login
	//https://www.formget.com/login-form-in-php/

	function getLoginPage(){

		echo "<h1>Login Pagina</h1>";
		echo "<p1>Dit is de login pagina<p1>";
		echo "<div id=\"login_form\">"; //ID VOOR CSS: login_form
		echo "<form action=\"\" method=\"post\">";
		echo "<input id=\"name\" name=\"username\" placeholder=\"gebruikersnaam\" type=\"text\">";
		echo "<input id=\"password\" name=\"password\" placeholder=\"***********\" type=\"password\">";
		echo "<input name\"invoeren\" type=\"submit\" value=\" Login \">";


	}

	//Functie voor het nagaan van het profiel
	function getProfile(){


	}

	//Functie voor het maken van een session, wordt gebruik gemaakt van MySQL verbinden.
	function getSession(){
		mySQLiConnect(); //"conf/config.conf.inc"


	}

	//Functie waarbij gegevens ingevoerd in "getLoginPage" gechecked worden tegen de DB.
	function clientLogin(){


	}

	//Functie voor het ophalen van de inlog pagina 
	function clientLogout(){


	}
?>
