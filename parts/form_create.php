<body style=" background-color:#503b14;">


    <div class="add__kocmet">
        <div class="leftinnerdiv">
            <form method="POST" enctype="multipart/form-data" action="">
                <label>Названия касметика</label>
                <input name="name" placeholder="Введите имя косметика">
                
                <label>Тип</label>
                <input name="type"  placeholder="Введите тип косметика" >
              
                <label>Вид касметика</label>
                <input name="view_cosmetics" placeholder="Введите вид косметика" >
               
                <label>Для кого</label>
                <input name="who_for" placeholder="Введите для кого">
               
                <label>Цена</label>
                <input name="price"placeholder="введите цена" >
               
                <label>Производства</label>
                <input name="manufacturer" placeholder="Производства">
              
                <label>Изображения</label>
                <input name="picture" type="file" class="form-control-file">

                <button type="submit" class="submitt">Добавить</button>
                <a href="./main.php" class="btn_exit"> выйты </a>

            </form>
        </div>
    </div>
</body>