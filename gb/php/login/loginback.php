<?php
//including connections
include ('connect.php');
//starting session
session_start();
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
		$sql = "SELECT * FROM USERS WHERE EMAIL = '$email' ";
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
			echo "Welcome";
			$session = "SELECT USERNAME FROM USERS WHERE EMAIL=' ".$email." ' ";
						$ses = oci_parse($conn,$session);
						oci_execute($ses);
						$row = oci_fetch_array($ses);
						$_SESSION['login_name'] = $row['USERNAME'];
						header("Location: {$_SERVER['HTTP_REFERER']}");
						echo $_SESSION['login_name'];
			// now checking if there  are more errors and further going
				if(empty($emailerror) && empty($passerror)){
					//if checkbox is checked
					if(isset($_POST['checkbox'])){
					//setting cookies and session variables
						setcookie("login",$email,time()+(1*60*60),'/');
						setcookie("password",$pass_temp,time()+(1*60*60),'/');
						
						header("Location: {$_SERVER['HTTP_REFERER']}");
						

						
					}
					//if not the unsetting the previously stored cookie variables 
						else{
							if(isset($_COOKIE['login'])){
							setcookie ('login', $email,time()-(1*60*60), "/" );
							}
							if(isset($_COOKIE['password'])){
							setcookie ('password',$pass_temp , time()-(1*60*60), "/" );
							}
							$_SESSION['login_name'] = $row['USERNAME'];
							header("Location: {$_SERVER['HTTP_REFERER']}");
						}
				}
			}
			//prompting the error to the user
				else{
			 	 $passerror = 'Incorrect password entered';
				echo $passerror;
				}
		}
			else{
				$usererror = 'Incorrect user entered';
				echo $usererror;
			}
		
	}
	
}
?>