<?php
namespace App;
use Illuminate\Http\Request;

class Some{
    public $name;
    public function __construct($page){
        $this->name = $page;
    }


}
