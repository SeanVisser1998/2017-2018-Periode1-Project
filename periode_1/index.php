<?php

	/**
	* Abe Hiemstra, Rick Prins, Stijn Kammer, Sean Visser
	* ITVA1
	* Project: Webdevelopment
	**/

	/**
	* Opdracht: Maak een vergelijkbare website zoals Thuisbezorgd.
	* Benodigdheden: Inlog, minimaal 3 eten-categorien, gegevens verwerking, etc.
	* Deadline: 04 Oktober 2017
	**/

	/**
	* Include de alle nodige bestanden.
	**/

	include("conf/config.conf.php"); //config file
	include("inc/general.inc.php"); //Algemene functies

	/**
	* Include de bestanden die betrekking hebben op de Pizza 
	**/
	include("inc/pizza/pizza.inc.php"); //Pizza bestand (hmmmm Pizza <3)

	/**
	* Include de bestanden die betrekking hebben op de Steak 
	**/
	include("inc/steak/steak.inc.php"); //Steak bestand (hmmmm steak <3)

	/**
	* Include de bestanden die betrekking hebben op fastfood
	**/
	include("inc/fastfood/fastfood.inc.php"); //Fastfood bestand

	/**
	* Include de bestanden die betrekking hebben op de login
	**/
	include("inc/login/login.inc.php");

	/**
	* De onderstaande Switch functie kijkt naar welke pagina van de website de gebruiker naar toe wil gaan.
	* Hierbij wordt de juiste bijbehorende pagina door de Index.php doorgegeven aan de eind-gebruiker.
	* Het is een Dynamic Website.
	**/

	displayHeader(); //Displayed the Header. "inc/general.inc.php"
	displayNavMenu(); //Displayed het nabigatie menu. "inc/general/inc.php"

$testCase = "steak"; //Moet na het testen terug verandert worden naar: getCurrentAction()
	switch(getCurrentAction()){

		case "home":
			displayHome(); //Go get homepage. "inc/general.inc.php"
			break;
		case "pizza":
			getPizzaPage(); //Go get pizzapage. "inc/pizza/pizza.inc.php"
			break;
		case "fastfood":
			getFastFoodPage();
			break;
		case "steak":
			getSteakPage();
			break;
		case "login":
			getLoginPage();
			break;
		case "winkelwagen":
			//Go get winkelwagen
			break;
		case "checkout":
			//Gp get checkout pagina
		break;
		default:
			displayHome(); //Go get homepage
	}

	displayFooter(); //Displayed de Footer. "inc/general.inc.php"

	?>