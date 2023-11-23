<?php

$layout = 'auth';
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>
<div class="login-main-container">
    <nav>
        <a href="<?= $link->url("home.index") ?>">
            <img src="public/images/svg/logo.svg" alt="logo">
        </a>
    </nav>
    <main class="container-login">
            <div class="form">
                <h1>Prihlásenie</h1>
                <form method="post" action="<?= $link->url("login") ?>">
                    <span>Email</span>
                    <input class="item" type="text" placeholder="napr. mmm@gmail.com">
                    <span>Heslo</span>
                    <input class="item" type="password" placeholder="***">
                    <button class="item btn-custom" type="submit">Přihlásit</button>
                </form>
                <a href="#">Registrácia</a>
            </div>
    </main>
</div>
