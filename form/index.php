<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="light">

    <header>
        <h1>Login</h1>

       <button id="toggleTheme">Toggle theme</button>
    </header>

    <div class="container">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <h1>Welcome!</h1>

     
       <label>Username</label>
       <input type="text" name="username" placeholder="Your name" class="input" required><br>
       

       
       <label>Password</label>
       <input type="password" name="password" placeholder="Your password" class="input" required><br>
    

       <div class="footer-form">

       <div>

       <input type="checkbox" name="box" id="box"> 
       <label for="box">Remember me</label>
       </div>

       <div>
       <a href="#">Forgot Password?</a>
       </div>

       </div>

        <input type="submit" name="submit" value="Login" class="submit">

    </form>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // FILTER
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        // EMPTY 
        if(empty($username)) {
            echo "The username is invalid";
        }

        elseif(empty($password)) {
            echo "The password is invalid";
        }

        else {
            header("Location: home.php");
        }

    }
?>