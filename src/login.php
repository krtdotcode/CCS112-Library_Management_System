<?php
session_start();
if (isset($_SESSION['role'])) {
    // Redirect to the correct dashboard if already logged in
    if ($_SESSION['role'] === 'admin') {
        header('Location: admin/books.php');
    } else {
        header('Location: user/catalog.php');
    }
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'] ?? '';
    if ($role === 'admin' || $role === 'user') {
        $_SESSION['role'] = $role;
        if ($role === 'admin') {
            header('Location: admin/books.php');
        } else {
            header('Location: user/catalog.php');
        }
        exit();
    }
    $error = "Please select a valid role.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Login</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login-styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Library System Login</h2>
        <?php if (!empty($error)): ?>
            <div class="error-msg"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post" id="loginForm">
            <input type="hidden" name="role" id="roleInput">
            <div class="role-select">
                <button type="button" class="role-btn" data-role="admin">Login as Admin</button>
                <button type="button" class="role-btn" data-role="user">Login as User</button>
            </div>
        </form>
        <div id="loaderWrap" style="display:none;margin-top:2rem;"><div class="loader"></div></div>
        <script>
        document.querySelectorAll('.role-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('roleInput').value = btn.getAttribute('data-role');
                document.getElementById('loginForm').style.display = 'none';
                document.getElementById('loaderWrap').style.display = 'block';
                setTimeout(() => {
                    document.getElementById('loginForm').submit();
                }, 1200);
            });
        });
        </script>
    </div>
    <script src="login-test.js"></script>
</body>
</html>