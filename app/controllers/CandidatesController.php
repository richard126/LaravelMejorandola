<?php

/**
 * Created by PhpStorm.
 * User: csgroup
 * Date: 23/06/16
 * Time: 10:45 AM
 */

use HireMe\Repositories\CategoryRepo;

class CandidatesController extends BaseController
{
    protected $categoryRepo;

    public function  __construct( CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;

    }

    public function category($slug, $id)
    {
        $category = $this->categoryRepo->find($id);

        dd( $category);

    }

}