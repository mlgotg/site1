<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function info($id){
        $p = Publisher::find($id);
        $b = $p -> books;
        return view('publisher_info', ['books' => $b, 'publisher'=>$p]);
    }
}
