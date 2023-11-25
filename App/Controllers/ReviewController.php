<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\Response;
use App\Models\Beer;
use App\Models\Review;

class ReviewController extends AControllerBase
{

    public function authorize(string $action)
    {
        return $this->app->getAuth()->getLoggedUserName() == "Admin";
    }

    public function index(): Response
    {
        throw new HTTPException(501);
    }

    public function form(): Response
    {
        $id = $this->request()->getValue("id");
        $review = Review::getOne($id);
        if (is_null($review)) {
            return $this->html();
        } else {
            return $this->html(["review" => $review]);
        }
    }

    public function delete(): Response
    {

    }

    public function save(): Response
    {

    }
}