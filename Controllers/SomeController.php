<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Some;
use App\Requst;
use Illuminate\Http\Request;

class SomeController extends Controller{
    public function getSome($page){
        $s =  new Some($page);
        return view('index',['obj'=>$s]);
    }

    public function postRequstData(Request $request) {
        $user = new Requst($request);
        return view('index', ['user'=>$user]);
    }
}
