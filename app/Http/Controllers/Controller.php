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

    public function deleteBooks(Request $request){
        $id_req = $request->getContent();
        $req1 = json_decode($id_req);
        $id = product::find((string)$req1->id);

        $id->delete();
        $buku = product::all();
        return $buku;
    }

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
        $req = $request->getContent();
        $req_test = json_decode($req);
        

        $buku->judul = $req_test->judul;
        $buku->tema = $req_test->tema;
        $buku->deskripsi = $req_test->deskripsi;
        $buku->penulis = $req_test->penulis;

        $buku->save();
        $semua_buku = product::all();
        return $semua_buku;
    }
    
}
