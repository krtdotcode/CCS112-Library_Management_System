<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logging out...</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div style="display:flex;justify-content:center;align-items:center;height:100vh;">
        <div class="loader"></div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 1200);
    </script>
</body>
</html>