<?php
  include "./inc/database.php";
  $user_id="";
  $first_name="";
  $last_name="";
  $username="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['user_id'])){
      header("location:details.php");
      exit;
    }
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM phpadmins WHERE user_id = $user_id";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    while(!$row){
      header("location:details.php");
      exit;
    }
    $first_name=$row["first_name"];
    $last_name=$row["last_name"];
    $username=$row["username"];

  }
  else{
    $user_id = $_POST["user_id"];
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $username=$_POST["username"];

    $sql = "update phpadmins set first_name='$first_name', last_name='$last_name', username='$username' where user_id='$user_id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">
    <!--Starting of head tag-->
<head>
    <!-- Define character encoding -->
    <meta charset="UTF-8">
    <!-- Define viewport settings for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
    <!-- Favicon - Uncomment and modify the line below to set your favicon -->
<!-- <link rel="icon" type="image/x-icon" href="radio.png"> -->
    <link rel="icon" type="image/x-icon" href="radio.png">

    <!-- Font Awesome CDN link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="stylesheet.css">

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
}

.col-lg-6 {
    width: 50%;
    margin: auto;
}

.card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 20px;
}

.card-header {
    background-color: #70d7d9;
    color: #fff;
    text-align: center;
    padding: 10px;
    border-radius: 8px 8px 0 0;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

label {
    font-weight: bold;
    font-size: 15px;
}

.eaton{
    display: inline-block;
    padding: 10px 20px;
    color: white;
    background-color: #70d7d9;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 10px;
}

.eaton:hover {

}

</style>

</head>
<body>
    
<!-- Header Section -->
<header>
    <!-- This paragraph displays a heading about free shipping across Canada for orders over $80 -->
    <p class="heading">Free shipping Across Canada for orders over $80</p>
    <!-- Main Heading -->
    <h1 class="head">Official Carvaan Distributor in Canada </h1>

    <!-- This div with the "menu" ID displays a bars icon using the "fas fa-bars" class -->
    <div id="menu" class="fas fa-bars"></div>

    <!-- Navigation Menu -->
    <nav class="navbar">
        <ul>
            <!-- Navigation links for the website -->
            <li><a href="index.html">home</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Policy</a></li>
            <li><a href="details.php">User details</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>
<br><br><br><br><br><br><br><br><br>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" class="form-control"> <br>

 <label>First Name: </label>
 <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="form-control"> <br>

 <label> Last Name: </label>
 <input type="text" name="last_name" value="<?php echo $last_name; ?>" class="form-control"> <br>

 <label> Username: </label>
 <input type="text" name="username" value="<?php echo $username; ?>" class="form-control"> <br>

 <input type="submit" class="eaton" value="Submit" href="details.php">
 <a  type="submit" class="eaton" name="cancel" href="details.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
<?php 
require './inc/footer.php';
?>