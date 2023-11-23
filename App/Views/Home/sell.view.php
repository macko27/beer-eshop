<?php

/** @var Array $data */

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
                <div class="col">
                    <input type="checkbox">
                    <div class="card mx-auto">
                        <img src="public/images/sell/pivo1.png" alt="pivo">
                        <div class="card-body">
                            <h4>BACK IN TOWN</h4><br>
                            <h5>IPA</h5>
                            <h6>14°</h6>
                            <h6>Cena: 5 EUR</h6>
                            <p class="card-text">Popis piva</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?= $link->url("home.beer") ?>">docasny</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="checkbox">
                    <div class="card mx-auto">
                        <img src="public/images/sell/pivo2.png" alt="pivo">
                        <div class="card-body">
                            <h4>ŽELEZNÁ LADY</h4><br>
                            <h5>IPA</h5>
                            <h6>15°</h6>
                            <h6>Cena: 5 EUR</h6>
                            <p class="card-text">Popis piva</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary btn-custom">Pridať do košíka</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="checkbox">
                    <div class="card mx-auto">
                        <img src="public/images/sell/pivo3.png" alt="pivo">
                        <div class="card-body">
                            <h4>TANCUJÚCA KOMÉTA</h4><br>
                            <h5>IPA</h5>
                            <h6>11°</h6>
                            <h6>Cena: 5 EUR</h6>
                            <p class="card-text">Popis piva</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary btn-custom">Pridať do košíka</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <input type="checkbox">
                    <div class="card mx-auto">
                        <img src="public/images/sell/pivo4.png" alt="pivo">
                        <div class="card-body">
                            <h4>LIETAJÚCA KOALA</h4><br>
                            <h5>IPA</h5>
                            <h6>14°</h6>
                            <h6>Cena: 5 EUR</h6>
                            <p class="card-text">Popis piva</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary btn-custom">Pridať do košíka</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="checkbox">
                    <div class="card mx-auto">
                        <img src="public/images/sell/pivo5.png" alt="pivo">
                        <div class="card-body">
                            <h4>ZÁLETNÁ SUSEDA</h4><br>
                            <h5>IPA</h5>
                            <h6>13°</h6>
                            <h6>Cena: 5 EUR</h6>
                            <p class="card-text">Popis piva</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary btn-custom">Pridať do košíka</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="checkbox">
                    <div class="card mx-auto">
                        <img src="public/images/sell/pivo6.png" alt="pivo">
                        <div class="card-body">
                            <h4>WHEATAMIN</h4><br>
                            <h5>WHEAT</h5>
                            <h6>11°</h6>
                            <h6>Cena: 5 EUR</h6>
                            <p class="card-text">Popis piva</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-secondary btn-custom">Pridať do košíka</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>