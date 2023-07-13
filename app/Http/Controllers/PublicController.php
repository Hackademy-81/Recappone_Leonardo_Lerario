<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function home() {
    $articles = Article::all()->sortDesc();
        return view('welcome', compact('articles'));
    }

    public function contact() {
        return view('contact');
    }

    public function submit(Request $request){
        $email = $request->email;
        $user = $request ->user;
        $message = $request ->message;
        $text = compact('user', 'mail', 'message');
    }
}
