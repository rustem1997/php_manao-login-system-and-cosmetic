<!-- -----------------------------------------для авторизации------------------------------------>

<body style="  background-image: url(../css/5.jpg);">


    <div class="form-container">
        <div class="content">
            <form action="" method="post" autocomplete="off">
                <h2 class="title">Авторизации</h2>
                <input type="text" name="username" placeholder="Введите username">
                <input type="password" name="password" placeholder="Введите пароль">
                <input type="submit" value="Отпрваить" class="form-btn" name="submit">

                <!-- ---------------------------выводить собшения об ошибке------------------------------->

                <p style="color:red ;" class="error"><?php echo @$user->error ?></p>
                <p class="success"><?php echo @$user->success ?></p>

                <p>У вас нет аккаунт? <a href="../index.php">Регистрации</a></p>
            </form>
        </div>
    </div>
</body>