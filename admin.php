<?php
session_start();
if (!($_SESSION['logged_in'] ?? false)) {
    header('Location: login.php');
    exit;
}
?>

<?php include 'includes/header.php'; ?>
<h2>Admin Panel</h2>

<p><a href="logout.php">Logout</a></p>
<p><a href="index.php">home</a> </p>

<h3>Upload an Image</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="images[]" id="imageInput" accept="image/*" multiple required>
    <div id="preview"></div>
    <button type="submit">Upload</button>
</form>
<?php include 'includes/footer.php'; ?>
<style>
    #preview img {
        width: 100px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>

<script>
    const input = document.getElementById('imageInput');
    const preview = document.getElementById('preview');

    input.addEventListener('change', () => {
        preview.innerHTML = ''; // clear preview
        for (const file of input.files) {
            const reader = new FileReader();
            reader.onload = e => {
                const img = document.createElement('img');
                img.src = e.target.result;
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    });
</script>


