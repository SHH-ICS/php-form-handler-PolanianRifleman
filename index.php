<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-deep_orange.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
    <title>PHP TEST</title>
  </head>

  <body>
    
    <form action="handler.php" method="post">
    Name: <input type="text" name="username"><br>
    <input type="submit">
    </form>

    <?php
    echo "<h1>Hello, World!</h1>\n";
    ?>
    
  </body>
  
</html>
