<?php

	//MUUTUJAD
	$loginEmail = "";
	$loginEmailError = "";
	$loginPasswordError = "";
	$signupEmail = "";
	$signupEmailError = "";
	$signupPasswordError = "";
	$firstNameError = "";
	$surnameError = "";
	$addressError = "";


	
	//kas keegi vajutas nuppu ja see on olemas
	
	if (isset ($_POST["loginEmail"])) {
		
		//on olemas
		//kas epost on t�hi	
		if (empty ($_POST["loginEmail"])) {
			
			//on t�hi
			$loginEmailError="V�li on kohustuslik";
		} else {
			
			$loginEmail = $_POST["loginEmail"];
		}
	}
	
	if (isset ($_POST["loginPassword"])) {
		
		//on olemas	
		if (empty ($_POST["loginPassword"])) {
			
			//on t�hi
			$loginPasswordError="V�li on kohustuslik";

		}
	}
	
	if (isset ($_POST["signupEmail"])) {
		
		//on olemas
		//kas epost on t�hi	
		if (empty ($_POST["signupEmail"])) {
			
			//on t�hi
			$signupEmailError="V�li on kohustuslik";
		} else {
			
			$signupEmail = $_POST["signupEmail"];
		}
	}
	
	if (isset ($_POST["signupPassword"])) {
		
		//on olemas	
		if (empty ($_POST["signupPassword"])) {
			
			//on t�hi
			$signupPasswordError="V�li on kohustuslik";
		
		} else {
			
			//parool ei olnud t�hi
			
			if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$SignupPasswordError="*Parool peab olema v�hemalt 8 t�hem�rki pikk";
			}
		}
	}

	if (isset ($_POST["firstName"])) {
		
		//on olemas
		if (empty ($_POST["firstName"])) {
			
			//on t�hi
			$firstNameError="V�li on kohustuslik";
		}
	}

	if (isset ($_POST["surname"])) {
	
		//on olemas
		if (empty ($_POST["surname"])) {
			
			//on t�hi
			$surnameError="V�li on kohustuslik";
		}
	}

	if (isset ($_POST["address"])) {
	
		//on olemas
		if (empty ($_POST["address"])) {
			
			//on t�hi
			$addressError="V�li on kohustuslik";
		}
	}





?>

<html>
	<head>
		<meta charset="utf-8">
		<title>�unaturg</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css" />
	</head>
	
	<body>
		<header>
			<h1>�unaturg</h1>
		</header>
		<div class="wrapper">
		
			<div class="loginBox">
			
				<h2>Logi sisse</h2>
<!--				<p style="color:red;" ><?=$notice;?></p>-->
				
				<form method="POST">
				
					<input name="loginEmail" placeholder="e-mail" type="email"> <?php echo $loginEmailError; ?>
					
					<br><br>
					
					<input name="loginPassword" placeholder="Parool" type="password"> <?php echo $loginPasswordError; ?>
					
					<br><br>
					
					<input type="submit" value="Logi sisse">
				
				</form>

			</div><!--.loginBox-->
			
			<div class="invitation">
				<p>Kui te ei ole veel kasutajaks registreerinud siis t�itke palun allj�rgnev vorm ning saage meie s�braliku kogukonna liikmeks!</p>
			</div><!--.invitation-->
			
			<div class="signUpBox">
			
				<h2>Loo kasutaja</h2>

				<form method="POST">
				
					<input name="signupEmail" placeholder="e-mail" value="<?=$signupEmail;?>" type="email"> <?php echo $signupEmailError; ?>
					<br><br>
					
					<input name="signupPassword" placeholder="Parool" type="password"> <?php echo $signupPasswordError; ?>
					<br><br>
					
					<input name="firstName" placeholder="eesnimi" type="text"> <?php echo $firstNameError; ?>
					<br><br>
					
					<input name="surname" placeholder="perekonnanimi" type="text"> <?php echo $surnameError; ?>
					<br><br>
			
					<input name="address" placeholder="aadress" type="text"> <?php echo $addressError; ?>
					<br><br>

					<input type="submit" value="Loo kasutaja">

				</form>
			
			</div><!--.signUpBox-->
		</div><!--.wrapper-->
		<footer><p>&copy; Rait Keernik</p></footer>
	</body>
</html>