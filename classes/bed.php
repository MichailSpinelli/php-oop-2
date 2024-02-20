<?php

require_once __DIR__.'/product.php';
    class bed extends product {
        public $width;
        public $height;

        public function __construct(
            $name,
            $width,
            $height,
            $image = null,
            $price = null,
            $type = null,
        )
        {
            parent::__construct(
                $name,
                $image,
                $price,
                null,
                null,
                null,
                $type
            );
            $this->width=$width;
            $this->height=$height;
        }
    }
?>