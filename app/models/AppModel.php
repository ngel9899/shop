<?php

namespace app\models;

use core\Model;
use RedBeanPHP\R;

class AppModel extends Model
{
    public function getCategory($lang)
    {
        $categories = R::getAll("SELECT c.*, cd.* FROM category c JOIN category_description cd on c.id = cd.category_id
                      WHERE cd.language_id = ?", [$lang]);
        $result = [];
        for ($i = 0; $i < count($categories); $i++) {
            $result[$categories[$i]['id']] = $categories[$i];
        }
        foreach ($categories as $category) {
            if ($category['parent_id'] > 0) {
                $result[$category['parent_id']]['children'] = $category;
                unset($result[$category['id']]);
            }
        }
        return $result;
    }
}