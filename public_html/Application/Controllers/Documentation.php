<?php 

use MVC\Controller;


class ControllersDocumentation extends Controller {

    public function index() {

        // Connect to database
        // $model = $this->model('books');

        // Read All Books And Authors Data
        // $data_list = $model->getAllData();

        // Send Response
        // $this->response->sendStatus(200);
        // $this->response->setContent($data_list);

        // $view = View::render("api_doc.html");
        return $this->response->render("api_doc.html");

    	// $view = new View();
    	// return $view->render("api_doc.html");

    }

}


?>