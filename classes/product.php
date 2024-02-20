<?php
/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/
    class Product {
        public $name;
        public $image;
        public $price;
        public $icon;
        public $type;

        public function __construct(
            $name,
            $image = null,
            $price = null,
            $icon = null,
            $type = null,
        ) {
            $this->name = $name;
            $this->image = $image;
            $this->price = $price;
            $this->icon = $icon;
            $this->type = $type;

        }
    }
?>