<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    //
    public function index(){

        $kategori=Category::all();

        // $cariid =Category::find(1);

        return view('admin.kategori', ['kat' => $kategori]);

    }

}
