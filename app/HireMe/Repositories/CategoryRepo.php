<?php
/**
 * Created by PhpStorm.
 * User: csgroup
 * Date: 23/06/16
 * Time: 11:28 AM
 */

namespace HireMe\Repositories;

use HireMe\Entities\Category;


class CategoryRepo
{
    public function find($id)
    {
        return Category::find($id);
    }
}