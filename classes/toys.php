<?php

require_once __DIR__.'/product.php';

class toys extends product {
    public $toysMaterial;

    public function __construct(
        $name,
        $toysMaterial,
        $image = null,
        $price = null,
        
    )
    {
        parent::__construct(
            $name,
            $image,
            $price,
             
        );
        $this->toysMaterial = $toysMaterial;
    }

}