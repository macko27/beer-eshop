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
        } else {
            $beer = new Beer();
        }
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
    }
}