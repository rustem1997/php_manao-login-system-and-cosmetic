<body style=" background-color:#503b14;">
    <div class="add__kocmet">
        <div class="leftinnerdiv">
            <form method="POST" enctype="multipart/form-data" action="">
                <label>Названия касметика</label>
                <input name="name" value="<?php echo $user['name'] ?>" class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo  $errors['name'] ?>
                </div>
                <label>Тип</label>
                <input name="type" value="<?php echo $user['type'] ?>" class="form-control <?php echo $errors['type'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo  $errors['type'] ?>
                </div>
                <label>Вид касметика</label>
                <input name="view_cosmetics" value="<?php echo $user['view_cosmetics'] ?>" class="form-control  <?php echo $errors['view_cosmetics'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo  $errors['view_cosmetics'] ?>
                </div>
                <label>Для кого</label>
                <input name="who_for" value="<?php echo $user['who_for'] ?>" class="form-control  <?php echo $errors['who_for'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo  $errors['who_for'] ?>
                </div>
                <label>Цена</label>
                <input name="price" value="<?php echo $user['price'] ?>" class="form-control  <?php echo $errors['price'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo  $errors['price'] ?>
                </div>
                <label>Производства</label>
                <input name="manufacturer" value="<?php echo $user['manufacturer'] ?>" class="form-control  <?php echo $errors['manufacturer'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo  $errors['manufacturer'] ?>
                </div>
                <label>Изображения</label>
                <input name="picture" type="file" class="form-control-file">

                <button class="submitt">Submit</button>
                <a href="./main.php" class="btn_exit"> выйты </a>
            </form>
        </div>
    </div>
</body>