<?php

namespace App\Http\Controllers;

use App\After as AppAfter;
use Illuminate\Http\Request;
use App\After;
use App\Book;
use App\Genre;

class AfterController extends Controller
{
    public function submit(Request $req) {
        $after = new After();
        $book = new Book();
        $genre = new Genre();


        $after->afterName = $req->input('afterName');
        $after->afterSurname = $req->input('afterSurname');


        $book->title = $req->input('title');


        $genre->genre = $req->input('genre');


        $after->save();
        $book->save();
        $genre->save();

        return redirect()->route('addbook');
    }
}
