<?php 
session_start();
$error = $_GET['error'] ?? '';
?>
<?php include 'includes/header.php'; ?>

<h2>Login</h2>
<form method="post" action="includes/auth.php">
    <label>Username: <input type="text" name="username" required></label>
    <label>Password: <input type="password" name="password" required></label>
    <button type="submit">Login</button>
</form>

<?php if($error): ?>
    <p style= "color: red;"><?= htmlspecialchars($error) ?> </p> 
<?php endif; ?>
<?php include 'includes/footer.php'; ?>
