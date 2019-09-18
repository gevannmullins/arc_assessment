<?php

use MVC\Controller;

class ControllersProducts  extends Controller {

    public function index() {

        // Connect to database
        $model = $this->model('products');

        // Get all the users
        $data_list = $model->getAllProducts();

        // Send Response
        $this->response->sendStatus(200);
        $this->response->setContent($data_list);
    }

}