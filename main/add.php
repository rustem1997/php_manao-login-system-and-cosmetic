<?php include '../parts/header.php';

require __DIR__ . '/users.php';


$user = [
    'id' => '',
    'name' => '',
    'type' => '',
    'view_cosmetics' => '',
    'who_for' => '',
    'price' => '',
    'manufacturer' => "",
];


$errors = [
    'name' => "",
    'type' => "",
    'view_cosmetics' => "",
    'who_for' => '',
    'price' => "",
    'manufacturer' => "",

];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: main.php");
    }
}


?>


<?php 
include '../parts/form_create.php';
include '../parts/footer.php'; ?>