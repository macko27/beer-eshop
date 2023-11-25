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

    <aside class="bd-aside sticky-xl-top text-body-secondary align-self-start mb-3 mb-xl-5 px-2">
        <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>
        <nav class="small" id="toc">
            <ul class="list-unstyled">
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center border-0 collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Contents</button>
                    <ul class="list-unstyled ps-3 collapse" id="contents-collapse" style="">
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#typography">Typography</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#images">Images</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tables">Tables</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#figures">Figures</a></li>
                    </ul>
                </li>
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center border-0 collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">Forms</button>
                    <ul class="list-unstyled ps-3 collapse" id="forms-collapse" style="">
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#overview">Overview</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#disabled-forms">Disabled forms</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#sizing">Sizing</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#input-group">Input group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#floating-labels">Floating labels</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#validation">Validation</a></li>
                    </ul>
                </li>
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center border-0 collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">Components</button>
                    <ul class="list-unstyled ps-3 collapse" id="components-collapse" style="">
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">Accordion</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#alerts">Alerts</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#badge">Badge</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#breadcrumb">Breadcrumb</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#buttons">Buttons</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#button-group">Button group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#card">Card</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#carousel">Carousel</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#dropdowns">Dropdowns</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#list-group">List group</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#modal">Modal</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navs">Navs</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navbar">Navbar</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#pagination">Pagination</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#popovers">Popovers</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#progress">Progress</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#scrollspy">Scrollspy</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#spinners">Spinners</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#toasts">Toasts</a></li>
                        <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tooltips">Tooltips</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>


    <div class="album py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-5">
                <?php foreach ($data["beers"] as $beer): ?>
                        <div class="col">
                            <a href="<?= $link->url("home.beer", ["id" => $beer->getId()]) ?>">
                            <div class="card mx-auto border-0">
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