<?php

namespace App\App\Data;

class SearchData
{


    /**
     * @var int
    */
    public $page = 1;
    
    /**
     * @var string
    */
    public $q = '';
    
    /**
     * @var Services[]
     */
    public $services = [];

    /**
     * @var null/integer
     */

     public $max;

     /**
     * @var null/integer
     */

     public $min;

    /**
     * @var boolean
     */

     public $promo = false;
    
}