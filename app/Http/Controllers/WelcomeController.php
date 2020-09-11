<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Domain;


use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
       $domains = Domain::get();
       $categories = Category::get();
       $subcategories = Subcategory::get();

       return view('welcome')->with('categories' , $categories)->with('subcategories' , $subcategories)->with('domains' , $domains);

    }
}
