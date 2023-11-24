<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\Beer;

class BeerController extends AControllerBase
{
    public function authorize(string $action)
    {
        return $this->app->getAuth()->getLoggedUserName() == "Admin";
    }

    public function index(): Response
    {
        return $this->html();
    }

    public function add(): Response
    {
        return $this->html();
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $beer = Beer::getOne($id);
        if (is_null($beer)) {
            throw new HTTPException(404);
        } else {
            $beer->delete();
            return new RedirectResponse($this->url("home.sell"));
        }
    }

    public function form(): Response
    {
        $id = $this->request()->getValue("id");
        $beer = Beer::getOne($id);
        if (is_null($beer)) {
            return $this->html();
        } else {
            return $this->html(["beer" => $beer]);
        }
    }

    public function save(): Response
    {
        $id = $this->request()->getValue("id");
        if ($id > 0) {
            $beer = Beer::getOne($id);
            $beer->setNazov($this->request()->getValue("nazov"));
            $beer->setStyl($this->request()->getValue("styl"));
            $beer->setDruh($this->request()->getValue("druh"));
            $beer->setCena($this->request()->getValue("cena"));
            $beer->setStupen($this->request()->getValue("stupen"));
            $beer->setPivovar($this->request()->getValue("pivovar"));
            $beer->setPopis($this->request()->getValue("popis"));
            $beer->setObrazok($this->request()->getValue("obrazok"));
            $beer->save();
            return new RedirectResponse($this->url("home.sell"));

        } else {
            $newBeer = new Beer();
            $newBeer->setNazov($this->request()->getValue("nazov"));
            $newBeer->setStyl($this->request()->getValue("styl"));
            $newBeer->setDruh($this->request()->getValue("druh"));
            $newBeer->setCena($this->request()->getValue("cena"));
            $newBeer->setStupen($this->request()->getValue("stupen"));
            $newBeer->setPivovar($this->request()->getValue("pivovar"));
            $newBeer->setPopis($this->request()->getValue("popis"));
            $newBeer->setObrazok($this->request()->getValue("obrazok"));

            $newBeer->save();
            return new RedirectResponse($this->url("home.sell"));
        }
    }
}