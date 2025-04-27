
<?php
session_start();
if (!($_SESSION['logged_in'] ?? false)) {
    header('Location: login.php');
    exit;
}

$uploadDir = 'images/';
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
    if ($_FILES['images']['error'][$index] === UPLOAD_ERR_OK) {
        $filename = basename($_FILES['images']['name'][$index]);
        $type = $_FILES['images']['type'][$index];

        if (in_array($type, $allowedTypes)) {
            $uniqueName = time() . '-' . $filename;
            $targetPath = $uploadDir . $uniqueName;

            if (move_uploaded_file($tmpName, $targetPath)) {
                echo "Uploaded: $filename<br>";
            } else {
                echo "Failed to upload: $filename<br>";
            }
        } else {
            echo "Invalid file type: $filename<br>";
        }
    } else {
        echo "Error with file: $filename<br>";
    }
}
echo "<a href='admin.php'>Back to Admin</a>";







// if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
//     $uploadDir = 'images/';
//     $filename = basename($_FILES['image']['name']);
//     $targetPath = $uploadDir . time() . '-' . $filename; // prevent overwrite

//     $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
//     if (in_array($_FILES['image']['type'], $allowedTypes)) {
//         if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
//             echo "Upload successful! <a href='admin.php'>Go back</a>";
//         } else {
//             echo "Upload failed.";
//         }
//     } else {
//         echo "Invalid file type.";
//     }
// } else {
//     echo "No file uploaded or upload error.";
// }