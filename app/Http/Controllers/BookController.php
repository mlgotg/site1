<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function info($id){
        $b = Book::find($id);
        $p = $b -> publisher;
        $a = $b -> authors;
        return view('book_info', ['book' => $b, 'publisher' => $p, 'authors' => $a]);
    }
}
