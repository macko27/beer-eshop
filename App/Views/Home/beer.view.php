<?php

/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-beer container px-4 py-5 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6">
            <img class="mx-auto d-block" src="../../../public/images/sell/pivo1.png" alt="beer">
        </div>
        <div class="col-md-6">
            <h1 class="fw-bolder mt-4"><?= $data["beer"]->getNazov() ?></h1>
            <div class="fs-5 mb-5">
                <h3>Cena: <?= $data["beer"]->getCena() ?> EUR</h3>
            </div>
            <p class="lead mb-4 pb-4"><?= $data["beer"]->getPopis() ?></p>
            <div class="d-flex">
                <input class="form-control text-center me-3" id="beerQuantity" type="num" value="1">
                <div class="ml-4">
                    <button type="button" class="btn btn-custom">Pridať do košíka</button>
                    <?php if ($auth->isLogged() && $auth->getLoggedUserName() == "Admin"): ?>
                        <a href="<?= $link->url("beer.delete", ["id" => $data["beer"]->getId()]) ?>" class="btn btn-custom" type="submit">Vymazať</a>
                        <a href="<?= $link->url("beer.form", ["id" => $data["beer"]->getId()]) ?>" class="btn btn-custom" type="submit">Upraviť</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

