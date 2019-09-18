<?php

use MVC\Controller;

class ControllersTransactions  extends Controller {

    public function index() {

        // Connect to database
        $model = $this->model('transactions');

        // Get all the users
        $data_list = $model->getAllTransactions();

        // Send Response
        $this->response->sendStatus(200);
        $this->response->setContent($data_list);
    }
    public function getTransActionByUserId()
    {
        $returnData = [];
        $query = $this->request->request['query'];
        $data = json_decode(file_get_contents("php://input"));

        $returnData['query'] = $query;
        $returnData['data'] = $data;

        // Send Response
        $this->response->sendStatus(200);
        $this->response->setContent($returnData);

    }

    public function new_transaction()
    {
        // get the request/form data
        $query = $this->request->request;

        // get the transactions model
        $model = $this->model('transactions');

        // pass the request data to the method
        $modelData = $model->newTransaction($query);

        if ($modelData) {
            $response = "Successfully saved the transaction";
        } else {
            $response = "Oops, the transaction failed to save!!!";
        }

        // Send Response
        $this->response->sendStatus(200);
        $this->response->setContent($response);

    }


}