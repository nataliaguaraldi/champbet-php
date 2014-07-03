<!DOCTYPE html>

<html>

<head>

<title>ChampBet!</title>

<link rel="stylesheet" type="text/css" href="_css/cb-style.css">

</head>

<body>

<div id="pageWrapper">

	<header>

		<p id="logo">ChampBet!</p>



		<div id="headerLogin">

			<form method="post" action="login.cgi">

				<input type="email" placeholder="E-mail">
				<input type="password" placeholder="Password">
				<input type="submit" value="Sign In">

			</form>

		</div>



		<div id="chooseLanguage">
			<p>Choose your language</p>
			<select>
				<option selected>English</option>
				<option>Portugues</option>
			</select>
		</div>

	</header>

	<div id="contentWrapper">

		<div id="leftContent">

			<br><br><br>
			<p id="slogan">A sportsfan who can always tell which side wins?<br>Bring your friends and see who's got the ChampBet!</p>
			<br><br><br>

			<img id="worldcuplogo" src="_images/wc2014logo.png">

		</div>
		

		<div id="rightContent">


			<br><br><br>
			<p id="rightLogo">ChampBet!</p>
			<br><br><br>
			


			<div id="loginform">

				<form method="post" action="register.php">
					
					<table>
						<tr><td><p id="loginFormTitle">Join Now!</p></td></tr>
						<tr><td><input type="email" placeholder="E-mail"><td></tr>
						<tr><td><input type="password" placeholder="Password"></td></tr>
					</table>

					<input type="submit" value="Join!">

				</form>


				<form method="get" action="login.php">

					<p><input type="submit" value="Already a member? Sign in"></p>

				</form>


			</div>



		</div>

	</div>

	<footer></footer>

</div>

</body>

</html>
