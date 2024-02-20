<?php

require_once __DIR__.'/product.php';

class food extends product {

    public $expiration;
    
    public function __construct(
        $name,
        $expiration,
        $image = null,
        $price = null,
        $type = null,
    )
    {
        parent::__construct(
            $name,
            $image,
            $price,
            $type            
        );
        $this->expiration = $expiration;
    }
    
}