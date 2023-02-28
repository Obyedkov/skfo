<div class="circle"></div>
<div class="card">
    <div class="logo">
        <i class='bx bxl-graphql'></i>
    </div>
    <h2>Регистрация</h2>
    <form action="/register.php" class="form" method="POST" autocomplete="off">
        <?php $classname = isset($errors['name']) ? "form__input--error" : ""; ?>
        <input class="<?= $classname ?>" name="name" id="name" value="" type="text" placeholder="Введите имя">
        <p class="form__message"><?= $errors['name'] ?? ""; ?></p>

        <?php $classname = isset($errors['email']) ? "form__input--error" : ""; ?>
        <input class="<?= $classname ?>" name="email" id="email" value="" type="email" placeholder="Введите e-mail">
        <p class="form__message"><?= $errors['email'] ?? ""; ?></p>

        <?php $classname = isset($errors['password']) ? "form__input--error" : ""; ?>
        <input class="<?= $classname ?>" name="password" id="password" value="" type="password" placeholder="Пароль">
        <p class="form__message"><?= $errors['password'] ?? ""; ?></p>

        <button type="submit"> Зарегистрироваться</button>
    </form>
    <section class="content__side">
        <p class="content__side-info">Если у вас уже есть аккаунт, авторизуйтесь на сайте</p>
        <button><a class="button button--transparent content__side-button"
                   href="/auth.php">Войти</a></button>
    </section>
</div>

