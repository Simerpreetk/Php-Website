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
        /* Add your CSS styles here */
        .container {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        

        th {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color:#70d7d9;
            font-size: 20px;
        }

        td{
            padding: 8px;
            text-align: left;
            font-size: 15px;
            border-bottom: 1px solid #ddd;
        }

        /* Style for successful (Edit) link */
.successful {
    display: inline-block;
    padding: 10px 15px;
    background-color: #70d7d9; /* Green color */
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.successful:hover {
    background-color: #218838; /* Darker green on hover */
}

/* Style for dangerous (Delete) link */
.dangerous {
    display: inline-block;
    padding: 10px 15px;
    background-color: #70d7d9; /* Red color */
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.dangerous:hover {
    background-color: #c82333; /* Darker red on hover */
}
.ttn-container {
    text-align: center; /* Center align the content within the container */
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
<body>
    <br><br><br><br><br><br><br><br><br><br><br><br>


<div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>FIRST</th>
        <th>LAST</th>
        <th>USERNAME</th>
        <th>IMAGE</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "./inc/database.php";
        $sql = "select * from phpadmins";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "
          <tr>
            <th>{$row['user_id']}</th>
            <td>{$row['first_name']}</td>
            <td>{$row['last_name']}</td>
            <td>{$row['username']}</td>
            <td><img src='{$row['std_img']}' height='200px' width='200px'><td>
            <td>
            <div class='ttn-container'>
              <a class='successful' href='edit.php?user_id={$row['user_id']}'>Edit</a>
              <a class='dangerous' href='delete.php?user_id={$row['user_id']}'>Delete</a>
              </div>
            </td>
          </tr>
          ";
        }
        ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require './inc/footer.php';
?>