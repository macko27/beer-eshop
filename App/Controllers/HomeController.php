<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Beer;
use App\Models\Review;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function sell(): Response
    {
        return $this->html(
            [
                'beers' => Beer::getAll()
            ]
        );
    }

    public function beer(): Response
    {
        $id = $this->request()->getValue("id");
        $beer = Beer::getOne($id);
        $reviews = Review::getAll("beerId = ?", [$id]);
        return $this->html([
            "beer" => $beer,
            "reviews" => $reviews
        ]);
    }
}
