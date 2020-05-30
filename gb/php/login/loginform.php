<?php

//including connections

include ('connect.php');
//starting session

//setting error to null
$emailerror = '';
$passerror = '';
//checking if  empty or not and displaying some value if it is 
if(isset($_POST['submit'])){
	if(empty($_POST['emaillog'])){
		$emailerror =  'Please enter some value';
	}
	 if(!filter_var($_POST['emaillog'],FILTER_VALIDATE_EMAIL)){
			$erroremail = 'Please enter a valid Email address!';
		}
	//using the input value and trim the values 
	//using the htmlentities for not let any malicious code to pass
	else{
	$email_temp = trim($_POST['emaillog']);
	$email = htmlentities($email_temp);
	}

	if(empty($_POST['pswrdlog'])){
		$passerror = 'Please enter your password';
	}
	else{
	$pass_temp = trim($_POST['pswrdlog']);
	$pass = md5($pass_temp);
	}


	
	
//further if the errors are not empty 	
	if(empty($emailerror) && empty($passerror)){
		//selecting from the database if user exists or not 
		$sql = "SELECT * FROM USERS WHERE EMAIL = '".$email."' ";
		$result = oci_parse($conn , $sql);
		oci_execute($result);
	
		if(oci_fetch_array($result) > 0)
		{
			//checking if password matches the username or not
			$sqlpass = "SELECT * FROM USERS WHERE PASSWORD = '".$pass."'";
			$resultpass = oci_parse($conn , $sqlpass);
			oci_execute($resultpass);
			if(oci_fetch_array($resultpass) > 0)
			{
			
			
			
			// now checking if there  are more errors and further going
				if(empty($emailerror) && empty($passerror)){
					echo "WELCOME";
					//if checkbox is checked
					
					$sess = "SELECT USERNAME FROM USERS WHERE EMAIL = '".$email."' ";
						$ses = oci_parse($conn,$sess);
						$sus = oci_execute($ses);
						$row = oci_fetch_array($ses);
						$_SESSION['login'] = $row['USERNAME'];
						
					if(isset($_POST['checkbox'])){
					//setting cookies and session variables
						setcookie("login",$email,time()+(1*60*60),'/');
						setcookie("password",$pass_temp,time()+(1*60*60),'/');	
					}
					//if not the unsetting the previously stored cookie variables 
						else{
							if(isset($_COOKIE['login'])){
							setcookie ('login', $email,time()-(1*60*60), "/" );
							}
							if(isset($_COOKIE['password'])){
							setcookie ('password',$pass_temp , time()-(1*60*60), "/" );
							}
							
							
						}
				}
			}
			//prompting the error to the user
				else{
			 	 $passerror = 'Incorrect password entered';
				
				}
		}
			else{
				$emailerror = 'Incorrect user entered';
				
			}
		
	}
	
}
?>

<div id="cd-login">
				<!-- log in form -->
				<form class="cd-form" action="" method ="POST">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="text" name = "emaillog"
							placeholder="E-mail" value="<?php
							if(isset($_COOKIE['login'])){
								echo $_COOKIE['login'];
							}
							?>">
						<span class="cd-error-message"><?php
						if(isset($emailerror)){
							echo $emailerror;
						}
						?></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"
							placeholder="Password" name = "pswrdlog" value="<?php
							if(isset($_COOKIE['password'])){
								echo $_COOKIE['password'];
							}
							?>">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message"><?php
						if(isset($passerror)){
							echo $passerror;
						}
						?></span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" name = "checkbox"<?php
						if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
						?> checked <?php } ?>/>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" name = "submit" value="Login">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->