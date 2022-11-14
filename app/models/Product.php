<?php

namespace app\models;

use RedBeanPHP\R;

class Product extends AppModel {

    public function getList($params, $lang) {

        $products = R::getAll("SELECT c.id, p.*, pd.* from category c
                                    JOIN product p on c.id = p.category_id
                                    JOIN product_description pd on p.id = pd.product_id
                                    WHERE c.slug = ? AND pd.language_id = ?", [$params, $lang]);
        return $products;
    }
}