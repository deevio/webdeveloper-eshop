<?php namespace Classes;

 class Cart {


    const _CART_ = 'cart';

    protected static $items;


    public function init(){

        self::$items = & $_SESSION[self::_CART_];

        if(!self::$items) {
            self::$items = [];
        };
    }


    public function getItems(){
        return self::$items;
    }


    public static  function addToCart(Product $book, $quantity = 1){

        if(!is_numeric($quantity)){


        }

        $_SESSION[_CART_][] = $item;

    }



/*

    public function removeFromCart($index){

        unset( $_SESSION[_CART_][$index] = $item );
        
    }

   

     public function updateItem(){
        
    }  


     public function getSum(){
        
    } 

    */    
}


?>