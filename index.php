<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/style.css">

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
            <li><a href="#">home</a></li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="ReviewPage.html">Reviews</a></li>
            <li><a href="terms.html">Policy</a></li>
        </ul>
    </nav>
</header>
  <main>
  <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
        <form method="post" action="./inc/validate.php" class="login" >
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
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form method="post" action="save-admin.php" enctype="multipart/form-data">
            <div class="field">
              <input type="text" placeholder="First Name" name="first_name" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Last Name"  name="last_name" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" name="confirm" required>
            </div>
            <div class="field">
            <input type="file" name="uploadfile">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Register" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer Section -->
<footer>
    <div class="footer">
        <!-- Box Container -->
        <div class="box-container">
            <!-- Why Choose Us Box -->
            <div class="box">
                <h3>why choose us?</h3>
                <p>Saregama carvaan is a blessing for the Bollywood music lovers. It's made with simplicity to use. And has a robust built quality with a crisp sound quality.</p>
            </div>
            <!-- Quick Links Box -->
            <div class="box">
                <h3>quick links</h3>
                <a href="index.html">home</a>
                <a href="feedback.html">Feedback</a>
                <a href="contact.html">contact</a>
                <a href="terms.html">Policy</a>
            </div>
            <!-- Newsletter Box -->
            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe us for the latest updates</p>
                <form action="">
                    <!-- Start of Form Section -->
                    <input type="email" placeholder="your email">
                    <!-- Email input field with placeholder -->
                
                    <input type="submit" class="btn" value="subscribe">
                    <!-- Submit button with "subscribe" value and class "btn" -->
                </form>
            </div>
        </div>
        <!-- Credit Line -->
        <h1 class="credit"> created by <a href="#">MiscellaneousGroup</a> | all rights reserved. </h1>
    </div>
</footer>


  <script>
    const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });

  </script>

</body>
</html>
