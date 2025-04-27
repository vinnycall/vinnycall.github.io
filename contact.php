<?php
include 'includes/header.php';
include 'includes/get_images.php';
?>

<section>
    <div class="contact">
        <form class="input-form" action="index.php" method="post">
            <h2>Contact</h2>

            <div class="input-field">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="John Doe">
            </div>
            <div class="input-field">
                <label for="email">Email:</label>
                <input type="text" name="email" placeholder="JohnDoe@email.com">
            </div>
            <div class="input-field">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Message"></textarea>
            </div>

            <input type="submit">

        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>