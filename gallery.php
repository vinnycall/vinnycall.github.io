<?php
include 'includes/header.php';
include 'includes/get_images.php';

$images = getImagesFromFolder('images/')
?>

<h1 style="text-align: center;">Gallery</h1>
<div class="imageContainer">
    <?php foreach ($images as $img): ?>
        <div class="image">
            <img class="image" src="<?= $img ?>" />
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
