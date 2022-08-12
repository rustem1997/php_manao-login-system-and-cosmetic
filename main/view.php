
<?php require __DIR__ . '/users.php';
$users = getUsers();
;
include '../parts/header.php'


?>
<body style="background-color:#503b14; ">
    

<div class="container" >

<table class="table" >
        <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Username</th>
            <th>view_cosmetics</th>
            <th>who_for</th>
            <th>price</th>
            <th>manufacturer</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 60px" src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['type'] ?></td>
                <td><?php echo $user['view_cosmetics'] ?></td>
                <td><?php echo $user['who_for'] ?></td>
                <td><?php echo $user['price'] ?></td>
                <td><?php echo $user['manufacturer'] ?></td>
                <td>
         
                <button class="btn_edit"> <a href="./update.php?id=<?php echo $user['id'] ?>" >Изменить</a></button>
                    <form method="POST" action="./delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn_delete">Deletee</button>
                    </form>
                </td>
           
               
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
    <a href="./main.php" class="btn_exit"> выйты </a>
</div>

</body>
<?php include '../parts/footer.php' ?>
