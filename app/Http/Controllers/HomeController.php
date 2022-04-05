<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Livewire\Component;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    public $latitude;
    public $longitude;

    public function index()
    {


        return view('home.index');
    }
}
