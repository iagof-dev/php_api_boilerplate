<?php

class secret{
    private $db_host = 'localhost';
    private $db_port = 3306;
    private $db_name = 'database';
    private $db_user = 'n3rdy';
    private $db_pass = '';

    public function getDatabaseInfo(){
        return array(
            'host' => $this->db_host,
            'port' => $this->db_port,
            'database' => $this->db_name,
            'user' => $this->db_user,
            'pass' => $this->db_pass
        );
    }
    
}