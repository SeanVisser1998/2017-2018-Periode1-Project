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
	

	function getLoginPage(){

		echo "<h1>Login Pagina</h1>";
		echo "<p1>Dit is de login pagina<p1>";
		echo "<div id=\"login_form\">"; //ID VOOR CSS: login_form
		echo "<form action=\"\" method=\"post\">";
		echo "<input required id=\"name\" name=\"username\" placeholder=\"gebruikersnaam\" type=\"text\">";
		echo "<input id=\"password\" name=\"password\" placeholder=\"***********\" type=\"password\">";
		echo "<input name\"invoeren\" type=\"submit\" value=\" Login \">";

		


	}

	//Functie voor het nagaan van het profiel
	function getProfile(){

	echo '<head>';
	echo '<link href="style.css" rel="stylesheet" type="text/css">';
	echo '</head>';
	echo '<body>';
	echo '<div id="profile">';
	echo '<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>';
	echo '</div>';
	echo '</body>';



	}

	//Functie voor het maken van een session, wordt gebruik gemaakt van MySQL verbinden.
	function getSession(){

	//DATABASE CONNECTIE
	$link;
	// Sessie opslaan
	$user_check=$_SESSION['login_user'];
	// SQL QUery voor het verwerken van de informatie
	$ses_sql=mysqli_query("select username from login where username='$user_check'", $link);
	$row = mysqli_fetch_assoc($link, $ses_sql);
	$login_session =$row['username'];
	if(!isset($login_session)){
	mysqli_close($link); // Closing Connection
	header('Location: index.php'); // Redirect naar de Home Page
}



	}

	//Functie waarbij gegevens ingevoerd in "getLoginPage" gechecked worden tegen de DB.
	function clientLogin(){

		//Kijkt of er een waarde is voor $_POST['submit']
		if(isset($_POST['submit'])){

			//Kijkt of $_POST['username'] OF $_POST['password'] leeg is
			if(empty($_POST['username']) || empty($_POST['password'])){
				$error = "Username or password is invalid";
			}
			else
			{
				//Geeft aan wat de variabelen $username & $password zijn
				$username = $_POST['username'];
				$password = $_POST['password'];

				//Maakt verbinding met de DB
				$link;


				if(mysqli_connect_errno()){
					echo "FAILED!";
				}
				//BESCHERMING TEGEN BASIS MY SQL INJECTION
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysqli_real_escape_string($link, $username);
				$password = mysqli_real_escape_string($link, $password);

				//QUERY
				$query = mysqli_query("select * from login where password='$password' AND username='$username'", $link);
				$rows = mysqli_num_rows($query);

				if($rows==1){

					$_SESSION['login_user']=$username;
					header("location: index.php?action=profile"); //Redirect de user naar zijn profiel als deze is ingelogd :D
				}else{$error = "Username or password is invalid";}
				mysqli_close($link);
			}
		}


	}

	//Functie voor het ophalen van de inlog pagina 
	function clientLogout(){

		if(session_destroy()) // Destroying All Sessions
	{
	header("Location: index.php"); // Redirecting To Home Page
	}
	}
?>
