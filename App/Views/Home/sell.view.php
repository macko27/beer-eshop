<?php

/** @var Array $data */
/** @var \App\Models\Beer $beer */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Pivá z okolia Zvolena</h1>
            <p class="lead text-body-secondary">V ponuke máme zatiaľ tri druhy pív: Vŕšky, Zvolenský remeselný pivovar a Baran.</p>
            <p>
                <a href="#sell-container" class="btn btn-custom">Nakupovať</a>
            </p>
        </div>
    </div>
</div>

<main id="sell-container">
    <div class="search-bar">
        <form class="d-flex" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-custom" type="submit">Hľadaj</button>
        </form>
    </div>

    <section>
        <div class="sidebar">
            <h5 class="sidebar-title">Pivovar</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="ZRP">
                <label class="form-check-label" for="ZRP">
                    Zvolenský remeselný pivovar
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="vrsky">
                <label class="form-check-label" for="vrsky">
                    Vŕšky
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="baran">
                <label class="form-check-label" for="baran">
                    Baran
                </label>
            </div>
        </div>
        <div class="sidebar">
            <h5 class="sidebar-title">Druh</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="tmave">
                <label class="form-check-label" for="tmave">
                    Tmavé
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="polotmave">
                <label class="form-check-label" for="polotmave">
                    Polotmavé
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="svetle">
                <label class="form-check-label" for="svetle">
                    Svetlé
                </label>
            </div>
        </div>
    </section>


    <div class="album py-5">
        <div class="container-sell">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-5">
                <?php foreach ($data["beers"] as $beer): ?>
                        <div class="col">
                            <a href="<?= $link->url("home.beer", ["id" => $beer->getId()]) ?>">
                            <input type="checkbox">
                            <div class="card mx-auto">
                                    <img src="<?= $beer->getObrazok() ?>" alt="pivo">
                                <div class="card-body">
                                    <h4><?= $beer->getNazov() ?></h4><br>
                                    <h5><?= $beer->getStyl() ?></h5>
                                    <h6><?= $beer->getStupen() ?></h6>
                                    <h6>Cena: <?= $beer->getCena() ?> EUR</h6>
                                    <p class="card-text"><?= $beer->getPopis() ?></p>
                                </div>
                            </div>
                            </a>
                        </div>
                <?php endforeach; ?>
                <div class="d-flex justify-content-between align-items-center">
                    <?php if ($auth->isLogged() && $auth->getLoggedUserName() == "Admin"): ?>
                        <a href="<?= $link->url("beer.form") ?>" class="btn btn-custom" type="submit">Pridať</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>