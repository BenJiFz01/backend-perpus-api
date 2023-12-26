<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getAllBooks(){
        $data = product::all();
        return $data;
        
    }

    public function getAllUser(){
        $data = User::all();
        return $data;
        
    }

    public function uploadBooks(Request $request){
        $buku = new product;

        $buku->tema = $request->getContent('tema');
        $buku->judul = $request->getContent();
        $buku->penulis = $request->getContent();
        $buku->deskripsi = $request->getContent();

        $buku->save();

        return $buku;
    }
}
