<html>
<head>
</head>
<body>
<form method = "POST" action= "" enctype="multipart/form-data">
	<input type = "file" name="uploadfile" value="" accept=".jpg , .png , .jpeg"/>
	<input type = "text" name="email" value="" />
	<input type = "text" name="password" value="" />
	<input type = "submit" name="submit" value="Upload"/>
</form>
</body>
</html>

<?php

$emailerror = "";
$passerror = "";
session_start();
if(isset($_POST['submit'])){
include('connect.php');
$filename = $_FILES["uploadfile"] ["name"];
$tmpfname = $_FILES["uploadfile"]["tmp_name"];
$folder = "profile/".$filename;

$acceptextension = array("png","jpg","jpeg");
$extension = pathinfo($filename , PATHINFO_EXTENSION);

if(!in_array($extension,$acceptextension)){
	echo"The file is not accepted";
	}
else{
	echo "The file is accepted";
/*	//the subject
$sub = "Image upload";
//the message
$msg = "Image has been uploaded";
//recipient email here
$rec = "hpsubedi1974@gmail.com";
//send email
mail($rec,$sub,$msg);*/
	//move_uploaded_file($tmpfname , $folder);
	
	$session = "SELECT USERNAME FROM USERS WHERE EMAIL='karansuvedi17@gmail.com'";
						$ses = oci_parse($conn,$session);
						$sus = oci_execute($ses);
						$row = oci_fetch_array($ses);
						echo  ($row['USERNAME']);
						$_SESSION['lg'] = $row['USERNAME'];
						echo $_SESSION['lg'];
}




	$emailtemp =trim($_POST['email']);
	$email = htmlentities($emailtemp);
$pass = $_POST['password'];

$sql =  "SELECT EMAIL,PASSWORD FROM USERS WHERE EMAIL = '".$email."' AND PASSWORD ='".$pass."' ";
$result = oci_parse($conn ,  $sql);
oci_execute($result);
$row = oci_fetch_row($result);

if(oci_fetch_array($result) > 0){
	echo "WELCOME";
}




}

?>