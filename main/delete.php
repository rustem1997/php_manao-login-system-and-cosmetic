<?php
include '../parts/header.php';
require __DIR__ . '/users.php';


if (!isset($_POST['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: view.group.php");
