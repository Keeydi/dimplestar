<?php
session_start();
$con = mysqli_connect("localhost","root","","ruta");

$errors = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(preg_match("/\S+/", $_POST['fname']) === 0){
		$errors['fname'] = "* First Name is required.";
	}
	if(preg_match("/\S+/", $_POST['lname']) === 0){
		$errors['lname'] = "* Last Name is required.";
	}
	if(preg_match("/.+@.+\..+/", $_POST['email']) === 0){
		$errors['email'] = "* Not a valid e-mail address.";
	}
	if(preg_match("/.{8,}/", $_POST['password']) === 0){
		$errors['password'] = "* Password Must Contain at least 8 Chanacters.";
	}
	if(strcmp($_POST['password'], $_POST['confirm_password'])){
		$errors['confirm_password'] = "* Password do not much.";
	}

	if(count($errors) === 0){
		$fname = mysqli_real_escape_string($con, $_POST['fname']);
		$lname = mysqli_real_escape_string($con, $_POST['lname']);
		$email = mysqli_real_escape_string($con, $_POST['email']);

		$password = hash('sha256', $_POST['password']);
		function createSalt(){
   			$string = md5(uniqid(rand(), true));
    		return substr($string, 0, 3);
		}
		$salt = createSalt();
		$password = hash('sha256', $salt . $password);

		$search_query = mysqli_query($con, "SELECT * FROM members WHERE email = '$email'");
		$num_row = mysqli_num_rows($search_query);
		if($num_row >= 1){
			$errors['email'] = "Email address is unavailable.";
		}else{
			$sql = "INSERT INTO members(`fname`, `lname`, `email`, `salt`, `password`) VALUES ('$fname', '$lname', '$email', '$salt', '$password')";
			$query = mysqli_query($con, $sql);
			$_POST['fname'] = '';
			$_POST['lname'] = '';
			$_POST['email'] = '';

			$successful = "<h3> You are successfully registered.</h3>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport — Sign In / Sign Up</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" type="text/css" href="style/login.css" />
<link rel="icon" href="images/lul.svg" type="image/svg+xml">
</head>
<body>
<?php $view = isset($_GET['view']) ? $_GET['view'] : 'login'; ?>
<div id="wrapper">
	<div id="content" class="auth-page">
		<div class="login-container" <?php if($view!== 'login'){ echo 'style="display:none"'; } ?>>
			<h2 class="login-title">Sign in</h2>
			<?php if(isset($_GET['message'])){ ?>
				<div class="login-alert"><?php echo htmlspecialchars($_GET['message']); ?></div>
			<?php } ?>
			<form class="form" method="post" action="login.php">
				<div class="flex-column">
					<label>Email </label>
				</div>
				<div class="inputForm">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20"><g data-name="Layer 3" id="Layer_3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
					<input placeholder="Enter your Email" class="input" type="text" name="login_email" />
				</div>
				<div class="flex-column">
					<label>Password </label>
				</div>
				<div class="inputForm">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>
					<input placeholder="Enter your Password" class="input" type="password" name="login_password" />
				</div>
				<div class="flex-row">
					<div>
						<input type="radio" id="remember" name="remember" />
						<label for="remember">Remember me </label>
					</div>
					<span class="span">Forgot password?</span>
				</div>
				<button class="button-submit" type="submit">Sign In</button>
				<p class="p">Don't have an account? <a class="span" href="signlog.php?view=signup">Sign Up</a></p>
				<p class="p line">Or With</p>
				<div class="flex-row">
					<button class="btn google" type="button">Google</button>
					<button class="btn apple" type="button">Apple</button>
				</div>
			</form>
		</div>

		<div class="login-container signup-container" <?php if($view!== 'signup'){ echo 'style="display:none"'; } ?>>
			<h2 class="login-title">Sign up</h2>
			<?php if(isset($successful)){ echo $successful; } ?>
			<form class="form" method="post" action="signlog.php">
				<div class="flex-column">
					<label>First Name</label>
				</div>
				<div class="inputForm">
					<input placeholder="Enter your First Name" class="input" type="text" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];} ?>" />
				</div>
				<?php if(isset($errors['fname'])){ ?><div class="login-alert"><?php echo $errors['fname']; ?></div><?php } ?>
				<div class="flex-column">
					<label>Last Name</label>
				</div>
				<div class="inputForm">
					<input placeholder="Enter your Last Name" class="input" type="text" name="lname" value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];} ?>" />
				</div>
				<?php if(isset($errors['lname'])){ ?><div class="login-alert"><?php echo $errors['lname']; ?></div><?php } ?>
				<div class="flex-column">
					<label>Username</label>
				</div>
				<div class="inputForm">
					<input placeholder="Choose a Username" class="input" type="text" name="username" />
				</div>
				<div class="flex-column">
					<label>Email</label>
				</div>
				<div class="inputForm">
					<input placeholder="Enter your Email" class="input" type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" />
				</div>
				<?php if(isset($errors['email'])){ ?><div class="login-alert"><?php echo $errors['email']; ?></div><?php } ?>
				<div class="flex-column">
					<label>Number</label>
				</div>
				<div class="inputForm">
					<input placeholder="Enter your Number" class="input" type="text" name="number" />
				</div>
				<div class="flex-column">
					<label>Password</label>
				</div>
				<div class="inputForm">
					<input placeholder="Create a Password" class="input" type="password" name="password" />
				</div>
				<?php if(isset($errors['password'])){ ?><div class="login-alert"><?php echo $errors['password']; ?></div><?php } ?>
				<div class="flex-column">
					<label>Confirm Password</label>
				</div>
				<div class="inputForm">
					<input placeholder="Confirm Password" class="input" type="password" name="confirm_password" />
				</div>
				<?php if(isset($errors['confirm_password'])){ ?><div class="login-alert"><?php echo $errors['confirm_password']; ?></div><?php } ?>
				<button class="button-submit" type="submit" name="submit">Sign Up</button>
				<p class="p">Already have an account? <a class="span" href="signlog.php?view=login">Login</a></p>
			</form>
		</div>
	</div>
</div>

<script>
	function toggleTheme() {
		const body = document.body;
		const isDark = body.classList.contains('dark-mode');
		if (isDark) {
			body.classList.remove('dark-mode');
			localStorage.setItem('theme', 'light');
		} else {
			body.classList.add('dark-mode');
			localStorage.setItem('theme', 'dark');
		}
	}

	document.addEventListener('DOMContentLoaded', function() {
		const savedTheme = localStorage.getItem('theme');
		if (savedTheme === 'dark') {
			document.body.classList.add('dark-mode');
		}
	});
</script>
</body>
</html>

