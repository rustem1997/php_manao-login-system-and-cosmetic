<body style="  background-image: url(../css/5.jpg);">
   
<div class="form-container">
    <div class="content">
        <form action="" method="post">
            <h2 class="title">Регистрации</h2>

            <input type="text" name="username" placeholder="Введите username" title=" 2 символа , только буквы" minlength="2" pattern="^(?=.*[a-z]).{2,2}" >

            <input type="text" name="userlogin" placeholder="Введите логин" title="минимум 6 символов" pattern="^.{6,}$">

            <input type="email" name="usermail" placeholder="Введите email " title="Отсутсвует символ @" pattern="[^ @]*@[^ @]*">

            <input type="password" name="password" placeholder="Введите пароль " title="минимум 6 символов , обязательно должны состоять из цифр и букв" pattern="^(?=.*[a-z])(?=.*[0-9]).{6,}$" / >

            <input type="password" name="cpassword" placeholder="Потверждения пароль ">

            <input type="submit" value="Отпрваить" class="form-btn" name="submit">
            <!-- ---------------------------выводить собшения об ошибке------------------------------ -->

            <p style="color:red ;" class="error"><?php echo @$user->error ?></p>
            <p style="color:green ;" class="success"><?php echo @$user->success ?></p>

            <p>У вас есть уже аккаунт? <a href="../login.php">Авторизации!</a></p>
        </form>

    </div>
</div>
</body>

