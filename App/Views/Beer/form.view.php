<?php

/** @var Array $data */

/** @var \App\Core\LinkGenerator $link */
?>
<div class="container-form-add">
    <form method="post" action="<?= $link->url('beer.save') ?>">
        <input type="hidden" name="id" value="<?= @$data['beer']?->getId() ?>">
        <div class="mb-3">
            <label for="nazov" class="form-label">Názov</label>
            <input type="text" class="form-control" id="nazov" name="nazov" value="<?= @$data['beer']?->getNazov() ?>" required>
        </div>
        <div class="mb-3">
            <label for="styl" class="form-label">Štýl</label>
            <input type="text" class="form-control" id="styl" name="styl" value="<?= @$data['beer']?->getStyl() ?>" required>
        </div>
        <div class="mb-3">
            <label for="druh" class="form-label">Druh</label>
            <input type="text" class="form-control" id="druh" name="druh" value="<?= @$data['beer']?->getDruh() ?>" required>
        </div>
        <div class="mb-3">
            <label for="cena" class="form-label">Cena</label>
            <input type="number" min="0" class="form-control" id="cena" name="cena" value="<?= @$data['beer']?->getCena() ?>" required>
        </div>
        <div class="mb-3">
            <label for="stupen" class="form-label">Stupeň</label>
            <input type="number" min="0" class="form-control" id="stupen" name="stupen" value="<?= @$data['beer']?->getStupen() ?>" required>
        </div>
        <div class="mb-3">
            <label for="pivovar" class="form-label">Pivovar</label>
            <input type="text" class="form-control" id="pivovar" name="pivovar" value="<?= @$data['beer']?->getPivovar() ?>" required>
        </div>
        <?php if (@$data['beer']?->getObrazok() == ""): ?>
        <div class="mb-3">
            <label for="obrazok" class="form-label">Vyber obrázok</label>
            <input class="form-control" type="file" id="obrazok" name="obrazok">
        </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="popis" class="form-label"></label>
            <textarea class="form-control" id="popis" name="popis" rows="3"><?= @$data['beer']?->getPopis() ?></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Potvrdiť</button>

    </form>
</div>
