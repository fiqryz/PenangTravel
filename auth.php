<?php

	include 'dbcon.php';
	session_start();

	if(isset($_POST['login'])){

		$email = $_POST['email'];
      	$pass = $_POST['password'];
			
		$sql = "SELECT * FROM user where email = '$email'";
	    $result = mysqli_query($conn, $sql);
			

			if(mysqli_num_rows($result) > 0){

			
					$row = mysqli_fetch_assoc($result);

					// check password
					if($row['password'] == $pass){
		
						$_SESSION['u_id'] = $row['id'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_role'] = 'user';

						echo '<script>alert("Successfully Login to Account."); 
							  window.location.href = "index.php";

						</script>';
						
					 

					}else{

					    $err = "Invalid Credential.";
				   		$_SESSION['msg'] = $err;
				   		header('location:login.php');

					}

			}else{

				$err = "Invalid Credential.";
				$_SESSION['msg'] = $err;
				header('location:login.php');

			}
		  

	}

	if(isset($_POST['create-user'])){


		$email = $_POST['email'];
	    $name = $_POST['name'];
	    $mobile = $_POST['mobile'];
	    $password = $_POST['password'];
	 
	   
	    $sql = "SELECT * FROM user where email = '$email'";
	    $result = mysqli_query($conn, $sql);


	    if (mysqli_num_rows($result) > 0) {

	          $err = "This email is created before!";
	   		  $_SESSION['msg'] = $err;
	   		  header('location:signup.php');

	    }else{

	         $sqlReg = "INSERT INTO user (email, password, name, mobile) VALUES ('$email', '$password', '$name', '$mobile')";

	          if (mysqli_query($conn, $sqlReg)) {
	            
	             	echo '<script>alert("Successfully create new account!"); 
							  window.location.href = "login.php";
						</script>';
	          } else {
		          	$err = "Error: Failed to create account!";
		   		  	$_SESSION['msg'] = $err;
		            header('location:signup.php');
	          }

	    }

	}


?>