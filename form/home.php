<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body class="light">

    
    <header>
        <h1>Login</h1>

       <button id="toggleTheme">Toggle theme</button>
    </header>

    <div class="parallax"></div>
  
    
  <main>
  <form action="" method="post">

    <input type="submit" name="logout" value="Logout">
   </form>
  </main>

    <script src="script.js"></script>
</body>
</html>

<?php

    if(isset($_SESSION["username"])) {
        echo '<h1 class="h1-echo">Welcome,' . htmlspecialchars($_SESSION["username"]) . '</h1>';
    } // Mensagem de boas vindas

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }

?>
