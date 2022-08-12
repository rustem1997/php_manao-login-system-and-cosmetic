<?php
include '../parts/header.php';
require __DIR__ . '/users.php';

if (!isset($_GET['id'])) {
    include "../parts/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "../parts/not_found.php";
    exit;
}

$errors = [
    'name' => "",
    'type' => "",
    'view_cosmetics' => "",
    'who_for' => '',
    'price' => "",
    'manufacturer' => "",

];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture'], $user);
        header("Location: view.group.php");
    }
}

?>


<?php 
include '../parts/form_edit.php';
include '../parts/footer.php'; ?>