<?php 

namespace App\Http\Controllers;

use illuminate\Request ;
use App\Article;

class ArticleController extends Controller{

    public function index(){
        $articles = Article::all();

        return view("guest.post.index" , compact("articles"));
    }
}