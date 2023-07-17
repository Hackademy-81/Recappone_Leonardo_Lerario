<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Article;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $text = compact('user', 'email', 'message');

        try {
            Mail::to($email)->send(new ContactMail($text));
        } catch (Exception $e) {
            return redirect(route('welcome'))->with('message', 'invio fallito, riprovare');
        }

           return redirect(route('welcome'))->with('message', 'email inviata con successo ,  grazie');
    }
}
