<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\Author;

class AuthorController extends Controller
{
    public function info($id){
        $a = Author::find($id);
        $b = $a -> books;
        return view('author_info', ['books' => $b, 'author' => $a]);
    }
}
