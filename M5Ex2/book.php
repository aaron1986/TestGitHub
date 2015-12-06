<?php

class book extends product {
    protected $_isbn;
    
    public function __construct($type) {
        $this->_type = $type;
        
    }
    
    public function setProductIsbn($isbn) {
        $this->_isbn = $isbn;
    }
    
    public function getProductIsbn() {
        return $this->_isbn;
    }
}

?>