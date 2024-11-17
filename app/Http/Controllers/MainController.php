<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Http\Requests\ContactRequest;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function karkasson()
    {
        return view('catalog.karkasson');
    }

    public function machikoro()
    {
        return view('catalog.machi-koro');
    }

    public function manchkin()
    {
        return view('catalog.manchkin');
    }

    public function form(ContactRequest $req)
    {
        // return view('form');
        // return print_r($_POST);
        // return dump(request()->all());
        // return Request::all();
        // $valid = $req->validate([
        //     'username' => 'required|min:4'
        // ]);
        // return dump($req);
        return redirect()->route('main');
       
    }
}
