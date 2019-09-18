<?php

use MVC\Model;

class ModelsProducts extends Model
{


    /**
     * @return array
     */
    public function getAllProducts()
    {
        // sql statement
        $sql = "SELECT * FROM `products`";
        return $this->exQuery($sql);

    }

    /**
     * @param $user_id
     * @return array
     */
    public function getUserById($user_id){

        $sql = "SELECT * FROM users where id = $user_id";
        return $this->exQuery($sql);
        

    }

    /**
     * @param $user_id
     * @return array
     */
    public function deleteUser($user_id){

        $sql = "DELETE FROM users where id = $user_id";
        return $this->exQuery($sql);

    }


    public function getUserTransActions($user_id)
    {
        $sql = "
                SELECT * 
                FROM users AS t1 
                LEFT JOIN transactions AS t2 
                ON t2.consumer_id=t1.id 
                LEFT JOIN products AS t3
                ON t3.id=t2.product_id
                WHERE t1.id='$user_id'
                ";
        return $this->exQuery($sql);
    }




}