 
<?php 
	session_start();  													##session start,,,,


	$username="";
	$email="";
	$errors=array();									
																		##connect to the database
$db =mysqli_connect('localhost','root','','registration');

if(isset($_POST['register'])){
																		##variable declaration
	$username =$_POST['username'];
	$email    = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2=$_POST['password_2'];

	if(empty($username)){												## if username emplty than errro shown
		array_push($errors, "User name is required");

	}
	if(empty($email)){													## if email emplty than errro shown
		array_push($errors, "Email is required");

	}
	if(empty($password_1)){												## if password emplty than errro shown
		array_push($errors, "Password is required");

	}
	if($password_1 != $password_2){							## if password and confirm password do not match,error shown
		array_push($errors, "Password and Confirm Password not match");

	}
	if(count($errors)==0){										##if count will be 0 than fire insert qurey with md5 security

		$password=md5($password_1);								## md5 scecurity for password

		$query="INSERT INTO users(username,email,password)		## insert query 
		values('$username','$email','$password');";

		mysqli_query($db,$query);								## fire insert query with keyword mysqli_query

		$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";

		header('location:index.php');							## header will be reacher,redirect to index.php page

	}

}

//log user in from login page

if (isset($_POST['login'])) {
	$username =$_POST['username'];
	$password=$_POST['password_1'];

	if(empty($username)){
		array_push($errors, "User name is required");

	}
	if(empty($password)){
		array_push($errors, "password is required");

	}

	if (count($errors)==0) {
		$password = md5($password); // encrypt password before comparing with that from database
		$query="SELECT * from users where username='$username' AND password='$password'; ";
		$result=mysqli_query($db,$query);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";
		header('location:index.php');
		}else{
			array_push($errors,"combination of username/password is not match"); 
			// header('location:login.php');
		}
	}
}

//logout code

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
}

 ?>