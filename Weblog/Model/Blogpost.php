<?php

class PrimeiroTeste_Weblog_Model_Blogpost extends Mage_Core_Model_Abstract{
    protected function _construct()
    {
        $this->_init('weblog/blogpost');
    }
}

class PrimeiroTeste_Weblog_Model_Resource_Blogpost extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('weblog/blogpost', 'blogpost_id');
    }
}