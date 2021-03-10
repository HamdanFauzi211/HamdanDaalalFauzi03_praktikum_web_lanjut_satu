<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NewsController extends Controller
{
    public function news($tittle) 
    {
        return view('news', ['tittle'=> $tittle]);
    }
}