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
  
    
  <main>
  <form action="" method="post">
   <h1>Welcome!</h1>

    <input type="submit" name="logout" value="Logout">
   </form>
  </main>

    <script src="script.js"></script>
</body>
</html>

<?php
    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>