<?php

/**
 * This file holds the database connection
 * and function related to db
 */

$servername = "localhost";
$database = "secure-contact-form";
$username = 'root';
$password = '';

// Create connection
$db = new mysqli($servername, $username, $password, $database);



/**
 * Insert data in database
 * $data = array()
 */
if(!function_exists('insertData')){
    function insertData($table, $data){
        global $db;
        $return = array();

        if($db->connect_error){
            $return['error'] = 'Try again later!';
        }else{
            $keys = implode(', ', array_keys($data));
            $values = implode(', ', array_map(function($v){return "'".$v."'";}, array_values($data)));
            
            $query = "INSERT INTO $table ($keys) VALUES ($values)";
            if($db->query($query) == TRUE){
                $return['success'] = 'Record save successfully'; 
            }else{
                $return['error'] = 'Try again later!';
            }
        }

        return $return;
    }
}


/**
 * Check data
 * $where = array();
 */
if(!function_exists('dataExists')){
    function dataExists($table, $column, $value){
        global $db;

        if($db->connect_error){
            return 0;
        }else{
            $query = "SELECT * FROM $table WHERE $column='$value'";
            $result = $db->query($query);
            if($result->num_rows > 0){
                return 1;
            }
        }
    }
}