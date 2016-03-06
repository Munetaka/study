<?php

class User_Model extends CI_Model {

    private $_user_id;

    public function __construct()
    {
        parent::__construct();

        $this->_user_id = 12345678;
    }

    public function userId()
    {
        return $this->_user_id;
    }
}
