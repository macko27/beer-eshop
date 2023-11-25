<?php

$layout = 'auth';
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>
<div class="login-main-container">
    <main class="container-login">
        <nav class="login-logo">
            <a href="<?= $link->url("home.index") ?>">
                <img src="public/images/svg/logo.svg" alt="logo">
            </a>
        </nav>
        <div class="form">
            <h1>Prihlásenie</h1>
            <form class="form-signin" method="post" action="<?= $link->url("login") ?>">
                <span>Login</span>
                <input name="login" id="login" type="text" placeholder="napr. login" required autofocus>
                <span>Heslo</span>
                <input id="password" type="password" name="password" placeholder="***" required>
                <button class="item btn-custom" type="submit" name="submit">Přihlásit</button>
            </form>
            <a href="#">Registrácia</a>
        </div>
    </main>
</div>