<?php

/** @var Array $data */

/** @var \App\Core\LinkGenerator $link */
?>
<div class="container-form-add">
    <form method="post" action="<?= $link->url('review.save') ?>">
        <input type="hidden" name="id" value="<?= @$data['review']?->getId() ?>">
        <div class="mb-3">
            <label for="userLogin" class="form-label"></label>
            <input type="text" class="form-control" id="userLogin" name="userLogin" value="<?= @$data['review']?->getUserLogin() ?>" required>
        </div>
        <div class="mb-3">
            <label for="numberOfStars" class="form-label">Cena</label>
            <input type="number" min="0" class="form-control" id="numberOfStars" name="numberOfStars" value="<?= @$data['review']?->getNumberOfStars() ?>" required>
        </div>

        <button class="btn btn-primary" type="submit">Potvrdiť</button>

    </form>
</div>
