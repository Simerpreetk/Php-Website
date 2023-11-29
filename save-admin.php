<?php
  require './inc/header.php';
  ?>
<?php
	// connection
	require './inc/database.php';
	// variables
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	// validate inputs
	$ok = true;

		if (empty($first_name)) {
			echo '<p>First name required</p>';
			$ok = false;
		}
		if (empty($last_name)) {
			echo '<p>Last name required</p>';
			$ok = false;
		}
		if (empty($username)) {
			echo '<p>Username required</p>';
			$ok = false;
		}
		if ((empty($password)) || ($password != $confirm)) {
			echo '<p>Invalid passwords</p>';
			$ok = false;
		}
	// decide if we are saving or not
	if ($ok){
		$password = hash('sha512', $password);

	if (isset($_FILES["uploadfile"])) {
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/" . $filename;
        move_uploaded_file($tempname, $folder);
    } else {
        // Handle the case where the file is not uploaded
        $folder = null;
    }
		$sql = "INSERT INTO phpadmins (first_name, last_name, username, password,std_img) VALUES ('$first_name', '$last_name', '$username', '$password','$folder');";
		$conn->exec($sql);
    echo '<section class="success-row">';
		echo '<div>';
		echo '<h3>Admin Saved</h3>';
		echo '</div>';
    echo '</section>';
		//disconnect
		$conn = null;
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css" >
</head>
<body>
<section class="signin-masthead">
    <div>
      <h3>Sign In</h3>
    </div>
  </section>
  <main>
  <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
        <form method="post" action="./inc/validate.php" class="login">
            <div class="field">
              <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
          </form>
  </main>
</body>
</html>
<?php 
require'./inc/footer.php'
?>