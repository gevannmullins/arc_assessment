<?php

use MVC\Model;

class ModelsTransactions extends Model
{

    /**
     * @return array
     */
    public function getAllTransactions()
    {
        // sql statement
        $sql = "SELECT * FROM `transactions`";
        return $this->exQuery($sql);

    }

    /**
     * @param $user_id
     * @return array
     */
    public function getTransactionByUser($user_id){

        $sql = "SELECT * FROM transactions where id = $user_id";
        return $this->exQuery($sql);
        

    }

    /**
     * @param $user_id
     * @return array
     */
    public function deleteTransaction($user_id){

        $sql = "DELETE FROM transactions where consumer_id = $user_id";
        return $this->exQuery($sql);

    }

    public function newTransaction($transData)
    {
        $consumer_id = $transData['consumer_id'];
        $product_id = $transData['product_id'];
        $purchase_date = date("Y-m-d", time());
        $sql = "INSERT INTO transactions (consumer_id, product_id) values ('$consumer_id','$product_id')";

        return $this->exQuery($sql);

    }

    public function updateTransaction($transData)
    {

        $consumer_id = $transData['consumer_id'];
        $product_id = $transData['product_id'];
        $purchase_date = date("Y-m-d", time());
        $sql = "INSERT INTO transactions (consumer_id, product_id, purchase_date) values ('$consumer_id','$product_id', '$purchase_date')";

        return $this->exQuery($sql);

    }




}