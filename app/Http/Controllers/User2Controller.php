<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use App\Models\User;
use App\Traits\ApiResponser;
use DB;
use App\Services\User1Service;

Class UserController extends Controller {
    private $request;
    public function __construct(Request $request){
        $this->request = $request;
 }

    public function index(){
        
    }

    public function getUsers(){
       
    }

    public function add(Request $request){
        
    }

    public function show($id){
        
    }

    public function update(Request $request, $id){
        
    }

    public function delete($id)
    {
        
    }
}