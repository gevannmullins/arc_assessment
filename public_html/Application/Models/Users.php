<?php

use MVC\Model;

class ModelsUsers extends Model
{

    /**
     * @param $sql
     * @return array
     */
    public function execQuery($sql)
    {
        $query = $this->db->query($sql);
        $data = [];

        if ($query->num_rows) {
            if(sizeof($query->rows) > 0){
                foreach($query->rows as $key => $value):
                    $data[$key] = $value;
                 endforeach;
            } else {
                $data[] = true;
            }
        } else {
            $data[] = $query->rows;
        }
         return $data;
    }

    /**
     * @return array
     */
    public function getAllUsers()
    {
        // sql statement
        $sql = "SELECT * FROM `users`";
        return $this->execQuery($sql);

    }

    /**
     * @param $user_id
     * @return array
     */
    public function getUserById($user_id){

        $sql = "SELECT * FROM users where id = $user_id";
        return $this->execQuery($sql);
        

    }

    /**
     * @param $user_id
     * @return array
     */
    public function deleteUser($user_id){

        $sql = "DELETE FROM users where id = $user_id";
        return $this->execQuery($sql);

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
        return $this->execQuery($sql);
    }






}