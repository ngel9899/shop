<?php

namespace app\controllers;

class ProductController extends AppController {

    public function getListAction() {

        $params = explode('/', $this->route['params']);
        $products = $this->model->getList($params[1], 1);
        $categories = $this->model->getCategory(1);
        $this->setData(compact('products', 'categories'));
    }
}