<?php
include('connect.php');
//error variables to counter errors
$error_address="";
$error_email="";
$error_username = "";
$error_contactno = "";
$error_password = "";
$error_retypepassword = "";
$error_image ="";
$error_file = "";

if(isset($_POST['SUBMIT'])){
//Prompting something if any of the label is empty 
		if(empty($_POST['txtusrnm'])){
			$error_username = 'Please enter an username!';
		}
		//Only alphabets allowed
		else if(!preg_match("/[a-zA-Z]/",$_POST['txtusrnm'])){
			$error_username = 'A name must contain letters only!';
		}
		//Saniting the name after getting it from form
		else{
			$namevalid = trim($_POST['txtusrnm']);
			$name_temp = filter_var($namevalid,FILTER_SANITIZE_STRING);
			$name = htmlentities($name_temp);
		}

		if(empty($_POST['email'])){
			$error_email = 'Please enter an Email address!';
		}
		//validating the email
		else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			$error_email = 'Please enter a valid Email address!';
		}
		else{
		//trimming the value of email
			$emailvalid = trim($_POST['email']);
			$email_temp = filter_var($emailvalid,FILTER_SANITIZE_EMAIL);
			$email = htmlentities($email_temp);
		
		}
		//Checking if contact is set empty
		if(empty($_POST['contact'])){
			$error_contactno = 'Please enter a Contact number!';
		}
		//preg match used for number checking 
		else if(!preg_match("/^[0-9]{10}$/", $_POST['contact'])) {
			$error_contactno = "Please enter a phone number 10 numbers long";		
		}
		else{

			$contact_tmp = trim($_POST['contact']);
			$contact = htmlentities($contact_tmp);
		}

		//for address

		//for password
		if(empty($_POST['pswrd'])){
			$error_password = 'Please enter a password!';
		}
		
				//Checking upper case , lower case ,symbols,password length 
			
			 if(!preg_match('@[A-Z]@', $_POST['pswrd'])){
				$passwordemptyerr = 'Password must have an Uppercase letter!';
			}

			 if(!preg_match('@[a-z]@',$_POST['pswrd'])){
				$passwordemptyerr = 'Password must contain a lower case letter!';
			}
			
			if(!preg_match('@[0-9]@',$_POST['pswrd'])){
				$passwordemptyerr = 'Password must contain a number';
			}

			$pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
			 

			if(!preg_match($pattern , $_POST['pswrd'])){
				$passwordemptyerr = 'Password must contain a symbol';
			}
			if(strlen($_POST['pswrd']) < 8){
				$passwordemptyerr = 'Password must have length more than 8 characters';
			}

			else{
			$password_unreal = trim($_POST['pswrd']);
			$passwordentities = htmlentities($password_unreal);
			$password = md5($passwordentities);
				}

		//retypepassword	
		if(empty($_POST['retypepassword'])){
			$error_retypepassword = 'Please enter your above password again!';
		}
		else if($_POST['retypepassword'] != $password_unreal){
			$error_retypepassword = 'Passwords does not match!!';
		}
		else{
			$retypepassword_temp = trim($_POST['retypepassword']);
			$retypepassword = htmlentities($retypepassword_temp);
		}

		//for image processing 
		$file = $_FILES['profile']['name'];
		$temproraryname = $_FILES['profile']['tmp_name'];
		$folder = "profile/".$file;
		$destination_path = getcwd().DIRECTORY_SEPARATOR;
	$target_path = $destination_path .'profile' .basename( $_FILES["profpic"]["name"]);

		$fileextension = array('png','jpg','jpeg');
		$extension = pathinfo($file , PATHINFO_EXTENSION);

		if(in_array($extension,$fileextension)){
			move_uploaded_file($temproraryname,$target_path);
		}
		else{
			$error_file = "You only can upload file with png , jpg and jpeg formats";
		}

		//checking if all the errors are empty or not 
 if(empty($error_username) && empty($error_email) && empty($error_address) && empty($error_contactno) && empty($error_password) && empty($error_retypepassword) && empty($error_file)){
 $query = "INSERT INTO USERS(USERID,USERNAME,EMAIL,PASSWORD,ROLE,IMAGENAME,CONTACTNO) VALUES('','$name','$email','$password',0,'$file','$contact')";
 $qry =oci_parse($conn , $query);
 oci_execute($qry);
 if($qry){
 $sub = "Registration Successful ";
//the message
$msg = "Welcome, to the team grocery basket you can now enjoy shopping thank you";

//send email
mail($email,$sub,$msg);
}
	}	
		}
?>